# Jetstream Boilerplate

## Requirements

- PHP 8.1
- MySQL 8.0

## Installation

Install the following libraries & PHP extensions:

```bash
sudo apt install php-bcmath php-curl php-intl php-mbstring php-tokenizer php-xml php-zip unzip
```

Then, install the project dependencies:

```bash
composer update
```

Configure the application:

```bash
cp .env.example .env
vi .env
php artisan key:generate
php artisan migrate --seed
php artisan storage:link
```

Finally, compile the assets:

```bash
npm update
npx mix
```

## Deploy

You can deploy the project by executing `dep deploy production`.

### Configure Cron

```bash
* * * * * cd /var/www/html/current && php artisan schedule:run >> /dev/null 2>&1
```
