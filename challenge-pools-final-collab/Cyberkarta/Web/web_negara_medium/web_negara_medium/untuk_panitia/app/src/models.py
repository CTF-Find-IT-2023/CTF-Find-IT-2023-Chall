from database import Base
from sqlalchemy import Column, Integer, String


class Country(Base):
    __tablename__ = "countries"
    code_alpha3 = Column(Integer, primary_key=True)
    numeric = Column(String(3), unique=True, nullable=False)
    name = Column(String(40), unique=True, nullable=False)

    def __init__(self, code_alpha3=None, numeric=None, name=None):
        self.code_alpha3 = code_alpha3
        self.numeric = numeric
        self.name = name


class Flag(Base):
    __tablename__ = "flag"
    flag = Column(String(255), primary_key=True)

    def __init__(self, flag=None):
        self.flag = flag
