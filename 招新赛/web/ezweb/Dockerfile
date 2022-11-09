FROM /web-ctf
EXPOSE 80
RUN rm -rf /var/www/html/index.php
COPY src/ /var/www/html/
COPY start.sh /start.sh
RUN chmod 777 /start.sh && chmod -R 777 /var/www/html
CMD ["/start.sh"]
