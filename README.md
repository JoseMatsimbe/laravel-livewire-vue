# laravel-livewire-vue
# Clone
git clone 

# go into the project
cd laravel-livewire-vue

# create a .env file
cp .env.example .env

# install composer dependencies
composer update

# install composer
composer require livewire/livewire

# generate a key for your application
php artisan key:generate

# create a local MySQL database (make sure you have MySQL up and running)

> create database laraveldb;
> exit;

# add the database connection config to your .env file
DB_CONNECTION=mysql
DB_DATABASE=laraveldb
DB_USERNAME=root
DB_PASSWORD=

# run the migration files to generate the schema
php artisan migrate

# install npm dependencies
npm install
npm install -g @vue/cli
npm install axios and vue-axios ...

# run webpack and watch for changes
npm run watch

# run your application
php artisan serve
