from flask import Flask, render_template, request, url_for, redirect
from models import Country, Flag
from database import db_session, init_db
from seed import seed_db
from sqlalchemy import text

app = Flask(__name__, template_folder='templates')


@app.teardown_appcontext
def shutdown_session(exception=None):
    db_session.remove()


@app.route("/", methods=["GET", "POST"])
def index():
    if request.method == "POST":
        search = ""
        order = None
        if "search" in request.form:
            search = request.form["search"]
        if "order" in request.form:
            order = request.form["order"]
        if order is None:
            countries = Country.query.filter(Country.name.like("%{}%".format(search)))
        else:
            countries = Country.query.filter(Country.name.like("%{}%".format(search))).order_by(text(order))
        return render_template("home.html", countries=countries)
    else:
        countries = Country.query.all()
        return render_template("home.html", countries=countries)


if __name__ == "__main__":
    seed_db()
    app.run(host="0.0.0.0",port=5000,debug=True)
