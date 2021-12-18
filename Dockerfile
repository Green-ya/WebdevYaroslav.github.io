FROM centos:8
 
LABEL  Author=Green_ya<Yaroslav.green.zelenskiy@gmail.com>
 
ENV TZ=Europe/Moscow
 
RUN dnf update -y
RUN dnf install -y nginx php php-fpm php-mysqli
RUN dnf clean all
RUN echo "daemon off;" >> /etc/nginx/nginx.conf
RUN mkdir /run/php-fpm
VOLUME ./html/:/usr/share/nginx/html/
#COPY ./html/ /usr/share/nginx/html/
 
CMD php-fpm -D ; nginx
 
EXPOSE 80