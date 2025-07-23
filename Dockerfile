FROM php:8.2-apache

# Define o DocumentRoot do Apache para a pasta public/
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

# Habilita o mod_rewrite (útil para rotas)
RUN a2enmod rewrite \
  && sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf

# Instala extensões do PHP
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copia os arquivos do projeto
COPY . /var/www/html

# Instala dependências extras
RUN apt-get update && apt-get install -y --no-install-recommends \
    ca-certificates \
    apt-transport-https \
    gnupg2 \
    curl \
    lsb-release \
    unzip \
    zip \
    git \
    nodejs \
    npm \
    nginx \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libaio-dev \
    alien

# Adiciona o repositório do PHP (se necessário)
RUN curl -fsSL https://packages.sury.org/php/apt.gpg | gpg --dearmor -o /usr/share/keyrings/sury.gpg && \
    echo "deb [signed-by=/usr/share/keyrings/sury.gpg] https://packages.sury.org/php/ $(lsb_release -sc) main" > /etc/apt/sources.list.d/php.list

# Instala o Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
