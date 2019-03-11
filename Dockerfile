FROM nginx:alpine
MAINTAINER mithereal@gmail.com

ENV MYSQL_USER "USERNAME"
ENV MYSQL_PASSWORD "PASSWORD"

ENV AWS_ACCESS_KEY_ID "KEY"
ENV AWS_SECRET_ACCESS_KEY "SECRET"
ENV AWS_AUTH_TOKEN "TOKEN"
ENV AWS_SELLER_ID "SELLER_ID"
ENV AWS_MARKET_PLACE_ID "MWS_MARKET_PLACE_ID"

ENV MYSQL_DATABASE orders

COPY ./sql-scripts/ /docker-entrypoint-initdb.d/

ADD crontab.txt /crontab.txt
ADD script.sh /script.sh
COPY entry.sh /entry.sh
RUN chmod 755 /script.sh /entry.sh
RUN /usr/bin/crontab /crontab.txt

CMD ["/entry.sh"]