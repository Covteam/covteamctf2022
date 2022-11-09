FROM dasctfbase/web_php73_apache

LABEL Author="zhangrui"

COPY ./index.php /var/www/html/ 
COPY ./haonigexiaozi.php /var/www/html
COPY ./logic.jpg /var/www/html
COPY ./wo,haoxiangyujianleweilai.php /var/www/html
RUN  chmod -R 755 /var/www/html/ 

copy ./service.sh ./service.sh
run chmod 777 ./service.sh

EXPOSE 80

cmd ['./service.sh']
