# CodeSandbox supports debian & ubuntu based images
FROM ubuntu

# Example; install htop by default
RUN apt update -y && apt install -y htop
FROM php:7.4-fpm
RUN apt-get update && apt-get install -y \
		libfreetype6-dev \
		libjpeg62-turbo-dev \
		libpng-dev \
	&& docker-php-ext-configure gd --with-freetype --with-jpeg \
	&& docker-php-ext-install -j$(nproc) gd

