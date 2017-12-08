FROM wordpress
MAINTAINER unitsix
EXPOSE 80 8500
VOLUME ["/var/www/html/wp-content", "/var/working"]

# install node
WORKDIR /var/working

RUN apt-get update 
RUN apt-get install -y nodejs 
RUN apt-get install -y npm 
RUN npm cache clean -f \
	&& npm install -g n \
	&& n stable \
	&& npm -g install grunt 
	
# install Make	
RUN apt-get install make