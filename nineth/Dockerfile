FROM alpine:latest 
RUN apk update && apk add nginx vim net-tools bash && mkdir -p /run/nginx && sed -i 's/return 404/root \/var\/www\/html/' /etc/nginx/conf.d/default.conf && mkdir /var/www/html && echo '=)' > /var/www/html/index.html && nginx 
