FROM ubuntu:18.04
RUN sed -i 's/archive.ubuntu.com/mirrors.aliyun.com/g' /etc/apt/sources.list && apt update && apt-get install -y lib32z1 xinetd && rm -rf /var/lib/apt/lists/ && rm -rf /root/.cache && apt-get autoclean && rm -rf /tmp/* /var/lib/apt/* /var/cache/* /var/log/*
COPY xinetd.conf /etc/xinetd.d/see
COPY service.sh /service.sh
RUN chmod +x ./service.sh
#add user and flag
RUN useradd -m pwn && echo 'flag{3532b5c4befb967cf8daa6a30f005439}' > /home/pwn/flag
#copy binary file
COPY see /home/pwn/see
COPY ./catflag /home/pwn/bin/sh
#set execution
RUN chown -R root:pwn /home/pwn && chmod -R 750 /home/pwn && chmod 740 /home/pwn/flag
#copy lib,/bin
RUN cp -R /lib* /home/pwn && cp -R /usr/lib* /home/pwn && mkdir /home/pwn/dev && mknod /home/pwn/dev/null c 1 3 && mknod /home/pwn/dev/zero c 1 5 && mknod /home/pwn/dev/random c 1 8 && mknod /home/pwn/dev/urandom c 1 9 && chmod 666 /home/pwn/dev/* && cp /bin/sh /home/pwn/bin && cp /bin/ls /home/pwn/bin && cp /bin/cat /home/pwn/bin
CMD './service.sh'
