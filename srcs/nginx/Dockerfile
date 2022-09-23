FROM debian:buster

RUN apt-get update
RUN apt-get install nginx -y
RUN apt-get install openssl -y

RUN openssl req -newkey rsa:4096 \
                -x509 \
                -sha256 \
                -days 365 \
                -nodes \
                -out /etc/nginx/ssl/example.crt \
                -keyout /etc/nginx/ssl/example.key \
                -subj "/C=PO/ST=Lisbon/L=Lisbon/O=42Lisboa/OU=42Lisboa/CN=fmeira.42.fr"
COPY nginx.conf /etc/nginx/
CMD ["nginx", "-g", "daemon off;"]
