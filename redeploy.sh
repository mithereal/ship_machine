#!/bin/sh

# Pull source updates
git pull

# Rebuild the release
./build.sh

# Rebuild the runner image
docker-compose build

# Start the new containers
docker-compose up