FROM php:7.3.3-apache
RUN docker-php-ext-install mysqli
USER root
RUN curl -LO https://github.com/prometheus/node_exporter/releases/download/v1.3.1/node_exporter-1.3.1.linux-amd64.tar.gz \
    && tar -xvzf node_exporter-1.3.1.linux-amd64.tar.gz \
    && cd node_exporter-1.3.1.linux-amd64 && useradd --no-create-home --shell /bin/false node_exporter && cp node_exporter /usr/local/bin/node_exporter && chown node_exporter:node_exporter /usr/local/bin/node_exporter \
    && rm -rf node_exporter-1.3.1.linux-amd64*
COPY entrypoint.sh /tmp
RUN chmod +x /tmp/entrypoint.sh

EXPOSE 80 9100
ENTRYPOINT ["/tmp/entrypoint.sh"]
