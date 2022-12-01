from ubuntu:22.04

workdir /var/www/app

ENV TZ=UTC
ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get update && apt-get install -y

WORKDIR /var/www/app

RUN apt update \
  # Add PHP 8.1 repository 
  && apt install -y software-properties-common \  
  # PHP extensions
  && apt install -y \  
  php8.1-bcmath \
  php8.1-cli \
  php8.1-curl \
  php8.1-fpm \
  php8.1-gd \
  php8.1-mbstring  \ 
  php8.1-mysql \  
  php8.1-redis \  
  php8.1-sockets \  
  php8.1-sqlite3 \  
  php8.1-pcov \
  php8.1-pgsql \
  php8.1-opcache \
  php8.1-xml \ 
  php8.1-zip \ 
  # Extra
  curl \
  git \
  htop \
  nano \
  nginx \
  unzip \
  zsh

# Composer
RUN curl -sS https://getcomposer.org/installer  | php -- --install-dir=/usr/bin --filename=composer  

# Node, NPM, Yarn
RUN curl -fsSL https://deb.nodesource.com/setup_lts.x | bash - && apt install -y nodejs && npm -g install yarn --unsafe-perm

# Create user/group with id/uid (1000/100) 
RUN groupadd -g 1000 appuser
RUN useradd -u 1000 -m -d /home/appuser -g appuser appuser

# Config files
COPY --chown=appuser:appuser start.sh /usr/local/bin/start
COPY --chown=appuser:appuser conf/etc /etc
COPY --chown=appuser:appuser conf/etc/php/8.1/cli/conf.d/y-php.ini /etc/php/8.1/fpm/conf.d/y-php.ini

# Permissions for start script
RUN chmod a+x /usr/local/bin/start 

# Required for php-fpm and nginx as non-root user
RUN mkdir -p /run/php 
RUN chown -R appuser:appuser /var/www/app /var/log /var/lib /run
RUN chmod -R 777 /var/log /var/lib /run

# Switch to non-root user
USER appuser

# Laravel Installer 
RUN composer global require laravel/installer && composer clear-cache    

# OhMyZsh (better than "bash")
RUN sh -c "$(curl -fsSL https://raw.github.com/ohmyzsh/ohmyzsh/master/tools/install.sh)" 

# Add composer to PATH
RUN echo 'export PATH="$PATH:$HOME/.config/composer/vendor/bin"' >> ~/.zshrc 

# Nginx (8080), Node (3000/3001), Laravel Dusk (9515/9773)
EXPOSE 8080 8000 3000 3001 9515 9773


CMD /usr/local/bin/start