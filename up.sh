#!/usr/bin/env bash

#
# Cleanup all docker
#
if [ -n "$(docker ps -a -q)" ]; then
    docker stop "$(docker ps -a -q)"
    docker container prune -f
fi

#
# Cleanup this docker
#
docker compose down
docker container prune -f

#
# Start this docker
#
docker compose up -d
