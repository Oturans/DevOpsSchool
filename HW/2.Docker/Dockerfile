FROM nginx:1.19.7

RUN rm /etc/nginx/conf.d/default.conf
COPY ./nginx-default.compose.conf /etc/nginx/conf.d/default.conf
WORKDIR /usr/2048/
COPY  ./2048/ /usr/2048/
RUN apt update && apt install php-fpm -y && apt-get clean && rm -rf /var/lib/apt/lists/*
COPY ./www.conf /etc/php/7.3/fpm/pool.d/www.conf
EXPOSE 9000
EXPOSE 80
CMD ["php-fpm"]
RUN service nginx restart
