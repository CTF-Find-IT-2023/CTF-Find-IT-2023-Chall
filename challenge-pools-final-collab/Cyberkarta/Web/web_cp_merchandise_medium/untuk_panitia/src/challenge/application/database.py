from flask import g
from application import app
from sqlite3 import dbapi2 as sqlite3
import base64, pickle

def connect_db():
    return sqlite3.connect('coldplay.db', isolation_level=None)
    
def get_db():
    db = getattr(g, '_database', None)
    if db is None:
        db = g._database = connect_db()
        db.row_factory = sqlite3.Row
    return db

def query_db(query, args=(), one=False):
    with app.app.app_context():
        cur = get_db().execute(query, args)
        rv = [dict((cur.description[idx][0], value) \
            for idx, value in enumerate(row)) for row in cur.fetchall()]
        return (next(iter(rv[0].values())) if rv else None) if one else rv

class Item:
	def __init__(self, product, desc, price, image):
		self.product = product
		self.desc = desc
		self.image = image
		self.price = price

def migrate_db():
    items = [
        Item('Basic Shirt', 'Get our new Basic World Tour 9 Tee!', '40', '/static/images/basic_shirt.png'),
        Item('Music of The Spheres World Tour 2023 Tee', 'Get our World Tour 2023 Tee!', '45', '/static/images/world_tour.png'),
        Item('High Power Bracelets', 'Coldplay + Higher Power Bracelets. Wear as pair or separately', '5', '/static/images/higherpower_bracelet.png'),
        Item('Music Of The Spheres cassettes', 'Infinity Station Type', '5', '/static/images/cassettes_infinity.png'),
    ]
    
    with open('schema.sql', mode='r') as f:
        shop = map(lambda x: base64.b64encode(pickle.dumps(x)).decode(), items)
        get_db().cursor().executescript(f.read().format(*list(shop)))