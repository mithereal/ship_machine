FROM nginx:alpine
MAINTAINER mithereal@gmail.com

ENV AMAZON_DATABASE amazon_orders
ENV EBAY_DATABASE ebay_orders

COPY ./sql-scripts/ /docker-entrypoint-initdb.d/

ADD crontab.txt /crontab.txt
ADD script.sh /script.sh
COPY entry.sh /entry.sh
RUN chmod 755 /script.sh /entry.sh
RUN /usr/bin/crontab /crontab.txt

CMD ["/entry.sh"]