FROM php:7-fpm-alpine

LABEL author="Adam Randlett <adam@randlett.net>"

RUN apk --update --no-cache add \
	bash \
	nano \
	wget \
	git \
	grep \
	zip \
	nodejs-current \
	php7-calendar \
	# Build dependency for intl
	icu-libs \
	icu-dev \
	# Build dependencies for gd & imagick
	freetype-dev \
	libjpeg-turbo-dev \
	libpng-dev \
	imagemagick-dev \
	libxml2-dev \
	libtool \
	# Build dependancies for Pecl
	autoconf \
	g++ \
	make \
	# Build dependancy for APCu 
	pcre-dev \
	# Other installs
	libmcrypt-dev && rm -rf /var/cache/apk/* && \
    docker-php-ext-install pdo_mysql && \
	docker-php-ext-configure gd \
		--with-freetype-dir=/usr/include/ \
		--with-jpeg-dir=/usr/include/ \
		--with-png-dir=/usr/include/ && \
    docker-php-ext-install gd && \
	docker-php-ext-install intl && \
	docker-php-ext-install zip && \
	docker-php-ext-install mbstring && \
    docker-php-ext-install opcache && \
    docker-php-ext-install soap

# Installing imagick
RUN	pecl install imagick && \
	docker-php-ext-enable imagick && \
	pecl install mcrypt-1.0.1 && \
	docker-php-ext-enable mcrypt


# php7-iconv buggy version needed to add gnu-libiconv for it to work properly
RUN apk add gnu-libiconv --update-cache --repository http://dl-cdn.alpinelinux.org/alpine/edge/testing/ --allow-untrusted
ENV LD_PRELOAD /usr/lib/preloadable_libiconv.so php

# libxml is the issue
# docker-php-ext-install libxml & xml via command line because of config.m4 pnpize error

RUN mkdir '/app'

COPY php.ini /usr/local/etc/php/conf.d/custom.ini

COPY php-fpm.conf /etc/php-fpm.d/php-fpm.conf

WORKDIR '${PHP_APP_DIR}'

CMD ["php-fpm", "-F"]

EXPOSE 9000