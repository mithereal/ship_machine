FROM bitwalker/alpine-elixir:1.6.6
RUN apk upgrade --no-cache
RUN apk add --no-cache bash openssl imagemagick curl gcc make libc-dev libgcc go  && rm -rf /var/cache/apk/*
MAINTAINER mithereal@gmail.com

ENV MODE "production"

ENV MYSQL_USER "USERNAME"
ENV MYSQL_PASSWORD "PASSWORD"

ENV AWS_ACCESS_KEY_ID "KEY"
ENV AWS_SECRET_ACCESS_KEY "SECRET"
ENV AWS_AUTH_TOKEN "TOKEN"
ENV AWS_SELLER_ID "SELLER_ID"
ENV AWS_MARKET_PLACE_ID "MWS_MARKET_PLACE_ID"

ENV EBAY_DEV_ID "EBAY_DEV_ID"
ENV EBAY_APP_ID "EBAY_APP_ID"
ENV EBAY_CERT_ID "EBAY_CERT_ID"
ENV EBAY_AUTH_TOKEN "EBAY_AUTH_TOKEN"

ENV AMPQ_HOST "AMPQ_HOST"
ENV AMPQ_PORT "AMPQ_PORT"
ENV AMPQ_USER "AMPQ_USER"
ENV AMPQ_PASS "AMPQ_PASS"
ENV AMPQ_VHOST "AMPQ_VHOST"

ENV AMPQ_EXCHANGE "router"

ENV MYSQL_DATABASE orders

COPY ./sql-scripts/ /docker-entrypoint-initdb.d/

ADD crontab.txt /crontab.txt
ADD script.sh /script.sh
COPY entry.sh /entry.sh
RUN chmod 755 /script.sh /entry.sh
RUN /usr/bin/crontab /crontab.txt

ENV HOME=/opt/app/ SHELL=/bin/bash MIX_ENV=prod
WORKDIR /opt/build

# Cache dependencies
COPY mix.exs mix.lock ./
COPY apps/db/mix.exs ./apps/db/
RUN HEX_HTTP_CONCURRENCY=4 HEX_HTTP_TIMEOUT=180 mix deps.get


# Build dependencies
COPY . .
RUN mix deps.compile

# Build app
ARG APP
RUN mix release --name ${APP} --env=$MIX_ENV

# Copy app to workdir and remove build files
WORKDIR /opt/app
RUN mv /opt/build/_build/$MIX_ENV/rel/${APP}/* /opt/app/
RUN rm -rf /opt/build
RUN ln -s /opt/app/bin/${APP} bin/entrypoint

EXPOSE 80
ENTRYPOINT ["./bin/entrypoint"]
CMD ["/entry.sh"]