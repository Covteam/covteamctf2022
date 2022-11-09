FROM dasctfbase/web_php73_apache
EXPOSE 80
COPY src/ /var/www/html/

COPY /start.sh ./service.sh
RUN chmod 777 ./service.sh && chmod -R 777 /var/www/html

CMD ["./service.sh"]
