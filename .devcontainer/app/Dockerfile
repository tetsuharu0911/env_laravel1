FROM php:8.1-fpm

# composerのインストール
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# パッケージのインストール
RUN apt-get updae && apt-get install -y \
    tzdata \
    zip \
    unzip \
&& pecl install xdebug \
&& docker-php-ext-install pdo_mysql \
&& rm -rf /var/lib/apt/lists/*

# タイムゾーンを設定する環境変数
ENV TZ=Asia/Tokyo