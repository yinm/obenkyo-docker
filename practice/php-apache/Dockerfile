FROM centos

RUN yum -y install httpd

RUN yum -y install http://dev.mysql.com/get/mysql-community-release-el7-5.noarch.rpm
RUN yum -y install mysql-community-server

RUN yum -y update
RUN yum -y install yum-plugin-priorities
RUN yum -y groupinstall "Base" "Development tools" "Japanese Support"
RUN yum -y install epel-release
RUN rpm -ivh http://rpms.famillecollet.com/enterprise/remi-release-7.rpm
RUN yum --enablerepo=remi-php70 -y install php php-mbstring php-pear php-fpm php-pdo php-intl
RUN yum --enablerepo=remi-php70 -y install phpMyAdmin php-mcrypt
