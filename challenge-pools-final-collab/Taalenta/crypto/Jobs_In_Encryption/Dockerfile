FROM python:3.11-slim-buster

RUN apt-get update
RUN apt-get install -y nano socat
RUN pip install pycryptodome

WORKDIR /opt
COPY ./src .

CMD socat TCP-LISTEN:5000,fork,reuseaddr EXEC:'python -u ./app.py'