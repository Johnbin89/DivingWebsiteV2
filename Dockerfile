FROM php:7.2-apache
COPY . /var/www/html/
#COPY --from=composer:latest /uRUsr/bin/composer /usr/local/bin/composer


RUN cd ~ &&\
    curl -sS https://getcomposer.org/installer -o composer-setup.php &&\
    sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer &&\
    cd /var/www/html/ &&\
    curl -s http://getcomposer.org/installer | php &&\
    composer install


EXPOSE 80
CMD apachectl -D FOREGROUND
