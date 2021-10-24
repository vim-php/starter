FROM php:7.4-apache
RUN a2enmod rewrite headers

RUN apt-get -y update --fix-missing && \
    apt-get upgrade -y && \
    apt-get -y install --fix-missing apt-utils wget vim \
    build-essential git curl libcurl3-dev zlib1g-dev zip libmcrypt-dev libicu-dev

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer --version=1.10.16 && \
    curl -sS https://get.symfony.com/cli/installer | bash && \
    mv /root/.symfony/bin/symfony /usr/local/bin/symfony

EXPOSE 80:80
