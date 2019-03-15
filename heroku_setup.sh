#!/bin/bash

echo "This will setup heroku"
heroku create --buildpack "https://github.com/HashNuke/heroku-buildpack-elixir.git"
heroku buildpacks:add https://github.com/gjaldon/heroku-buildpack-phoenix-static.git 
heroku addons:create heroku-postgresql:hobby-dev
heroku config:set POOL_SIZE=18
secret=mix phx.gen.secret
heroku config:set SECRET_KEY_BASE="$secret"