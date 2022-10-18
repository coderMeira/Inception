FROM    debian:buster

RUN     apt-get update && \
        apt-get install -y nginx openssl curl

RUN     mkdir -p /etc/nginx/ssl
RUN     openssl req -newkey rsa:4096 \
                -x509 \
                -days 365 \
                -nodes \
                -out /etc/nginx/ssl/nginx.crt \
                -keyout /etc/nginx/ssl/nginx.key \
                -subj "/C=PT/ST=Lisbon/L=Lisbon/O=42Lisboa/OU=42Lisboa/CN=fmeira.42.fr"

COPY    conf/nginx.conf /etc/nginx/conf.d/default.conf

CMD ["nginx", "-g", "daemon off;"]
