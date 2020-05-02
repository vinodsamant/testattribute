FROM kiwidevops/php:php-7.2

COPY . /var/www/html

WORKDIR /var/www/html

RUN sed -i "s/upload_max_filesize = .*/upload_max_filesize = 16M/" /etc/php/7.2/fpm/php.ini
RUN sed -i "s/max_execution_time = .*/max_execution_time = 1800/" /etc/php/7.2/fpm/php.ini
RUN sed -i "s/post_max_size = .*/post_max_size = 32M/" /etc/php/7.2/fpm/php.ini
RUN sed -i "s/memory_limit = .*/memory_limit = 256M/" /etc/php/7.2/fpm/php.ini

RUN composer update && \ 
  apt-get update && \
  apt-get install -y software-properties-common

# Install "ffmpeg"
#RUN add-apt-repository ppa:jonathonf/ffmpeg-3 -y
#RUN apt-get update && apt-get install ffmpeg -y

RUN php artisan config:cache && \
    php artisan migrate && \
    php artisan route:clear && \
    php artisan config:cache

RUN chmod -R 777 /var/www/html/storage/
#ADD crontab /etc/cron.d/appcrons
#RUN chmod 0644 /etc/cron.d/appcrons
#RUN crontab /etc/cron.d/appcrons

# Install Node js 
RUN apt install -y nodejs && apt install -y npm

# Install API Doc

EXPOSE 9000
CMD ["php-fpm7.2"]







