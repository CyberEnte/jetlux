FROM php:8.2-cli

# Install required PHP extensions
RUN docker-php-ext-install pdo pdo_mysql

# Set working directory
WORKDIR /app

# Copy all files
COPY . .

# Expose port 8000
EXPOSE 8080

# Start built-in PHP server
CMD ["php", "-S", "0.0.0.0:8080", "-t", "/app"]
