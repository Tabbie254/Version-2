FROM php:7.4-apache

# Copy the PHP file to the container's web root
COPY process.php /var/www/html/

# Install any necessary PHP extensions (if needed)
RUN docker-php-ext-install mysqli

# Expose port 80 for web traffic
EXPOSE 80
