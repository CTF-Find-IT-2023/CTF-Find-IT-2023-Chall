# Use ubuntu 20.04
FROM ubuntu:22.04

# Open port 5000
EXPOSE 5001

# update
RUN apt-get update
RUN apt-get -y install build-essential binutils
RUN apt-get -y install gcc-multilib

# install socat
RUN apt-get install socat wget -y
RUN useradd -m bookUser

# Set WorkDir
RUN mkdir /app
WORKDIR /app

# Copy binary to workdir
COPY flag.txt /app/flag.txt
COPY everything /app/everything

RUN chown root:root everything flag.txt
RUN chmod 755 everything flag.txt

# Securing Environment
RUN chmod 700 /usr/bin/* /bin/* /tmp /dev/shm
RUN chmod 755 /bin/dash /bin/sh /bin/cat /usr/bin/id /bin/ls

# Run Program
CMD socat TCP-LISTEN:5001,reuseaddr,fork EXEC:./everything,su=nobody
