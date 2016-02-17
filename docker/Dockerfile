FROM alpine:3.3
MAINTAINER Jörg Henning <henning.joerg@gmail.com>

RUN apk update && apk add curl
RUN curl -sL -o /tmp/caddy_linux_amd64.tar.gz "https://github.com/mholt/caddy/releases/download/v0.8.1/caddy_linux_amd64.tar.gz" \
  && tar -zxf /tmp/caddy_linux_amd64.tar.gz -C /usr/bin caddy
RUN apk add php-fpm php-pdo php-pdo_mysql php-openssl\
  && sed -i 's/^;clear_env = no/clear_env = no/' /etc/php/php-fpm.conf

VOLUME /var/log
VOLUME /app

EXPOSE 2015

WORKDIR /app
CMD ["/usr/bin/caddy"]
