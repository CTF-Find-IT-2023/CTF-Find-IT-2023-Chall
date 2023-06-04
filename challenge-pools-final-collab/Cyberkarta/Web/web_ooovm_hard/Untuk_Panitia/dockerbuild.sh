#!/bin/bash
docker rm -f ooovm
docker build -t ooovm . && \

docker run --name=ooovm --rm -p1337:80 -it ooovm
