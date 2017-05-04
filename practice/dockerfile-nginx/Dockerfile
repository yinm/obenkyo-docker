FROM centos:latest

RUN yum -y update
RUN rpm -ivh http://nginx.org/packages/centos/7/noarch/RPMS/nginx-release-centos-7-0.el7.ngx.noarch.rpm
RUN yum -y update nginx-release-centos
RUN yum -y --enablerepo=nginx install nginx
RUN echo "daemon off;" >> /etc/nginx/nginx.conf

EXPOSE 80
CMD nginx