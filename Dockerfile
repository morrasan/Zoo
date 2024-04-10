FROM php:8.2-cli

LABEL authors="morrasan/zoo"

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/html

COPY . .

RUN composer install --no-scripts --no-autoloader

RUN composer dump-autoload --optimize

EXPOSE 80

CMD ["php", "-S", "0.0.0.0:80", "index.php"]
