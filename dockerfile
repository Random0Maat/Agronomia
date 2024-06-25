FROM alpine:3.20.1

RUN apk add --no-cache \
    build-base \
    ca-certificates \
    gettext \
    glibc \
    libffi \
    libintl \
    libpq \
    nginx \
    php8.1 \
    php8.1-fpm \
    php8.1-mbstring \
    php8.1-xml \
    php-opcache \
    sqlite3 \
    xz \
    zlib

WORKDIR /app

COPY composer.json composer.lock .

RUN composer install

COPY . .

# Set environment variables
ENV DB_CONNECTION=mysql
ENV DB_HOST=roundhouse.proxy.rlwy.net
ENV DB_PORT=12607
ENV DB_DATABASE=railway
ENV DB_USERNAME=root
ENV DB_PASSWORD=lroncMUoqDIukwybsqRJCPTXJAQsFWQR

RUN apk add --no-cache \
    cron \
    supervisor

RUN apk add --no-cache \
    gcc \
    libc-dev \
    make

RUN echo "export PATH=/usr/local/bin:$PATH" >> ~/.bashrc

RUN chmod +x artisan

EXPOSE 80

CMD ["nginx", "-g", "daemon off;"]