FROM php:8.2-apache

# システムパッケージのインストール
# git, zip, unzip はComposer用)
# libpng, libjpeg, libfreetype は GDライブラリ用
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    git \
    zip \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd

# Apacheのmod_rewrite有効化
RUN a2enmod rewrite

# Composerのインストール（公式イメージからコピーするのが一番簡単です）
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer