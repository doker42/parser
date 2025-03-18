git clone https://github.com/doker42/parser.git

cd parser

composer install

create .env

create .env file and make .env settings

php artisan key:generate

##### EXAMPLE DB SETTINGS #######
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=parser
DB_USERNAME=sail
DB_PASSWORD=password
##################################


./vendor/bin/sail up -d


open  http://localhost/


command 'articles:fetch {limit=0} {debug?}'

for getting laravel news run command    php artisan articles:fetch  100