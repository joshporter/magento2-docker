FROM mageinferno/magento2-php:5.6.17-fpm-0

RUN pecl install -o -f xdebug; \
    rm -rf /tmp/pear; \
    touch /usr/local/etc/php/conf.d/xdebug.ini; \
	echo "zend_extension=/usr/local/lib/php/extensions/no-debug-non-zts-20131226/xdebug.so" >> /usr/local/etc/php/conf.d/xdebug.ini; \
	echo xdebug.remote_enable=1 >> /usr/local/etc/php/conf.d/xdebug.ini; \
  	echo xdebug.remote_autostart=1 >> /usr/local/etc/php/conf.d/xdebug.ini; \
  	echo xdebug.remote_connect_back=1 >> /usr/local/etc/php/conf.d/xdebug.ini; \
  	echo xdebug.remote_port=10000 >> /usr/local/etc/php/conf.d/xdebug.ini; \
  	echo xdebug.idekey=PHPSTORM >> /usr/local/etc/php/conf.d/xdebug.ini; \
  	echo xdebug.remote_handler=dbgp >> /usr/local/etc/php/conf.d/xdebug.ini; \
  	echo xdebug.remote_log=/tmp/php5-xdebug.log >> /usr/local/etc/php/conf.d/xdebug.ini;

#FROM mageinferno/magento2-php:7.0.2-fpm-0
#
#RUN touch /usr/local/etc/php/conf.d/xdebug.ini; \
#	echo xdebug.remote_enable=1 >> /usr/local/etc/php/conf.d/xdebug.ini; \
#  	echo xdebug.remote_autostart=1 >> /usr/local/etc/php/conf.d/xdebug.ini; \
#  	echo xdebug.remote_host=192.168.99.1 >> /usr/local/etc/php/conf.d/xdebug.ini; \
#  	echo xdebug.remote_port=10000 >> /usr/local/etc/php/conf.d/xdebug.ini; \
#  	echo xdebug.idekey=PHPSTORM >> /usr/local/etc/php/conf.d/xdebug.ini; \
#  	echo xdebug.remote_handler=dbgp >> /usr/local/etc/php/conf.d/xdebug.ini; \
#  	echo xdebug.remote_log=/tmp/php5-xdebug.log >> /usr/local/etc/php/conf.d/xdebug.ini;
#
#RUN	mkdir ~/software && \
#	cd  ~/software/ && \
#	apt-get install -y wget && \
#	wget http://xdebug.org/files/xdebug-2.4.0rc3.tgz && \
#	tar -xvzf xdebug-2.4.0rc3.tgz && \
#	cd xdebug-2.4.0RC3 && \
#	phpize && \
#	./configure && \
#	make && \
#	cp modules/xdebug.so /usr/local/lib/php/extensions/no-debug-non-zts-20151012 && \
#	echo "zend_extension = /usr/local/lib/php/extensions/no-debug-non-zts-20151012/xdebug.so" >>  /usr/local/etc/php/php.ini

CMD ["/usr/local/bin/start"]