# Use PHP 8.1 with Apache
FROM php:8.1-apache

# Enable required PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy the application files to the container
COPY . /var/www/html/

# Give proper permissions
RUN chown -R www-data:www-data /var/www/html/

# Expose port 80
EXPOSE 80
