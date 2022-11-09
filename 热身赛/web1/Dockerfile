FROM php:5.6-apache
COPY ./index.php /var/www/html
COPY ./au.sh .
RUN chmod -R 755 /var/www/html
RUN chmod -R 777 ./au.sh
EXPOSE 80
CMD './au.sh'
