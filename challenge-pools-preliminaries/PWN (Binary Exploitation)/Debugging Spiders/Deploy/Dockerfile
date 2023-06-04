# Use ubuntu 20.04
FROM ubuntu:22.04

# Open port 5000
EXPOSE 5002

# update
RUN apt-get update
RUN apt-get -y install build-essential binutils
RUN apt-get -y install gcc-multilib

# install socat
RUN apt-get install socat wget -y
RUN useradd -m spider

# Set WorkDir
RUN mkdir /app
WORKDIR /app

# Copy binary to workdir
COPY flag.txt /app/flag.txt
COPY spiders /app/spiders

RUN chown root:root spiders flag.txt
RUN chmod 755 spiders flag.txt

# Securing Environment
RUN chmod 700 /usr/bin/* /bin/* /tmp /dev/shm
RUN chmod 755 /bin/dash /bin/sh /bin/cat /usr/bin/id /bin/ls

# Run Program
CMD socat TCP-LISTEN:5002,reuseaddr,fork EXEC:./spiders,su=nobody
