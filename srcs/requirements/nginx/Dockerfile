FROM debian:buster

RUN apt-get update
RUN apt-get install nginx -y
RUN apt-get install openssl -y
RUN apt-get install curl -y

RUN openssl req -newkey rsa:4096 \
                -x509 \
                -sha256 \
                -days 365 \
                -nodes \
                -keyout /etc/ssl/private/nginx.key \
                -out /etc/ssl/certs/nginx.crt \
                -subj "/C=PO/ST=Lisbon/L=Lisbon/O=42Lisboa/OU=42Lisboa/CN=fmeira.42.fr"
COPY ./my_nginx.conf /etc/nginx/conf.d

CMD ["nginx", "-g", "daemon off;"]
