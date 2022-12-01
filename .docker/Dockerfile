from ubuntu:22.04

workdir /var/www/app

ENV TZ=UTC
ENV DEBIAN_FRONTEND=noninteractive

RUN apt update

RUN apt install -y \
    htop \
    bash \
    zsh \
    nano \
    git \
    nginx \
    php8.1-fpm

COPY conf/nginx.conf /etc/nginx/sites-available/default
COPY start.sh /usr/local/bin/start

RUN groupadd -g 1000 appuser
RUN useradd -u 1000 -m -d /home/appuser -g appuser appuser


RUN chmod a+x /usr/local/bin/start

EXPOSE 8080


CMD /usr/local/bin/start