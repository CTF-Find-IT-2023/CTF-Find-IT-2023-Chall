FROM python:3.8-alpine3.11

RUN apk add --no-cache gcc alpine-sdk linux-headers gzip=1.10-r0 sed

RUN mkdir -p /usr/src/app
WORKDIR /usr/src/app

COPY ./app .

# Copy flag and requirements to root
COPY flag.txt /flag.txt
COPY requirements.txt .

RUN pip3 install -r requirements.txt

EXPOSE 5000
CMD ["python3", "src/app.py"]