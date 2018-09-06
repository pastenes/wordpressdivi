FROM wordpress:php7.2-apache
COPY wp-content /var/www/html/wp-content
COPY db-init /var/www/html/db-init
