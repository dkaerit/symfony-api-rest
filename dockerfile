# Usa una imagen base de PHP con FPM (FastCGI Process Manager)
FROM php:8.0-fpm

# Establece el directorio de trabajo en el contenedor
WORKDIR /var/www/html

# Copia los archivos de la aplicación al contenedor
COPY . /var/www/html

# Instala las dependencias de PHP necesarias
RUN apt-get update && \
    apt-get install -y \
        unzip \
        libpq-dev && \
    docker-php-ext-install pdo pdo_pgsql

# Copia el archivo de configuración de PHP
COPY docker/php.ini /usr/local/etc/php/php.ini

# Instala Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copia el archivo .env a la raíz del proyecto
COPY .env /var/www/html/.env

# Instala las dependencias de la aplicación
RUN composer install --no-interaction --optimize-autoloader --no-scripts

# Expone el puerto en el que se ejecutará la aplicación
EXPOSE 9000

# Ejecuta el comando para iniciar el servidor de PHP-FPM
CMD ["php-fpm"]
