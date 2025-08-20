FROM php:8.1-apache

# Install dependencies
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    unzip \
    && docker-php-ext-install zip pdo pdo_mysql

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy PHP configuration
COPY docker/php.ini /usr/local/etc/php/conf.d/app.ini

# Set working directory
WORKDIR /var/www/html

# Copy application code
COPY laravel-app/ /var/www/html/

# Create public directory if it doesn't exist
RUN mkdir -p /var/www/html/public

# Set permissions
RUN chown -R www-data:www-data /var/www/html

# Apache serves from /var/www/html/public by default
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}/../!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Expose port 80
EXPOSE 80

CMD ["apache2-foreground"]
