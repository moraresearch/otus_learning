#!/bin/bash
docker exec -it $(docker ps -q) nginx
