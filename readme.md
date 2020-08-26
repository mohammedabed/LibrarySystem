


Considering the operating system already have Nodejs and Composer installed.
  
### Global NPM Packages  

- `npm install webpack -g` Install Webpack globally
- `npm install grunt-cli -g` Install Grunt globally


- Go to Applications root folder and install composer packages. `composer install`        
- Install Node Modules `npm install`
- Run Grunt Task Runner `grunt` 
- Compile Javascript bundle `npm run deploy` 

## Setup

### Environment

- Copy `.env` file: `cp .env.example .env && php artisan key:generate`

#### Database Migration & Seed

Create a MySQL database and add the database name, username and password in `.env` file.
Once the database is configured, create tables and seed data.
 
     php artisan migrate
     php artisan db:seed


#### Without Fake Data
`db:seed` will insert fake data using `faker` library to demonstrate the system, however if you don't want to have fake data,
you need to seed another file to make the system assessable.

    php artisan db:seed --class=SystemUserSeeder
    
This will create create a system user. You can login as admin using `system@lms.net` as Userid and Password.
    
