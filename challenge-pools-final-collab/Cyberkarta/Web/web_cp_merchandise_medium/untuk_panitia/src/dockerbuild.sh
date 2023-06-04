#!/bin/bash
docker build --tag=coldplay .
docker run -p 1337:1337 --rm --name=coldplay -it coldplay