FROM vulhub/tomcat:8.5

LABEL maintainer="phithon <root@leavesongs.com>"

RUN set -ex \
    && rm -rf /usr/local/tomcat/webapps/* \
    && chmod a+x /usr/local/tomcat/bin/*.sh

RUN touch /flag.txt \
	&& echo 'flag{hello_world}' > /flag.txt

COPY S2-001.war /usr/local/tomcat/webapps/ROOT.war
copy ./service.sh
run chmod 777 ./service.sh
EXPOSE 8080


