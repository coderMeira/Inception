FROM debian:buster

RUN apt-get update
RUN apt install -y php7.3 php7.3-fpm php7.3-cli php7.3-mysql php-mysqli mariadb-client mariadb-server

COPY ./conf/www.conf /etc/php/7.3/fpm/pool.d
RUN mkdir /var/www
RUN chmod -R 755 /var/www
ADD https://wordpress.org/wordpress-6.0.2.tar.gz /var/www
RUN cd /var/www && tar -xzvf wordpress-6.0.2.tar.gz
RUN rm -f /var/www/wordpress/wp-config-sample.php
COPY ./conf/wp-config.php ./var/www/wordpress/

RUN mkdir -p /run/php
CMD ./usr/sbin/php-fpm7.3 -F
