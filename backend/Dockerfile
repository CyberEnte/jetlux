FROM php:8.2-cli

# Install required PHP extensions
RUN docker-php-ext-install pdo pdo_mysql

# Set working directory
WORKDIR /var/www/html

# Copy all files
COPY . .

# Expose port 8000
EXPOSE 8000

# Start built-in PHP server
CMD ["php", "-S", "0.0.0.0:8000", "-t", "."]
