FROM debian:buster

RUN apt-get update
RUN apt-get install -y nginx openssl curl

RUN openssl req -newkey rsa:2048 \
                -x509 \
                -days 365 \
                -nodes \
                -keyout /etc/ssl/private/nginx.key \
                -out /etc/ssl/certs/nginx.crt \
                -subj "/C=PT/ST=Lisbon/L=Lisbon/O=42Lisboa/OU=42Lisboa/CN=fmeira.42.fr"

COPY ./conf/my_nginx.conf /etc/nginx/conf.d
RUN mkdir /TEEEEST

CMD ["nginx", "-g", "daemon off;"]
