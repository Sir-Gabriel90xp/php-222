FROM php:8.3-apache
COPY . /var/www/html/
RUN sed -i 's/DirectoryIndex .*/DirectoryIndex index.php index.html/' /etc/apache2/mods-enabled/dir.conf || true
EXPOSE 80
