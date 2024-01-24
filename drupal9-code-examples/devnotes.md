

# static parks
## modify the require section to be like the following
```
 "require": {

        "symfony/console":"4.4.49", // for laravel
        "symfony/string":"6.4.2",   // for laravel

        "composer/installers": "^v1.12.0",
        "drupal/core-composer-scaffold": "^9.5.11",
        "drupal/core-project-message": "^9.5.11",
        "drupal/core-recommended": "^9.5.11",
        "drush/drush": "^11.6.0",
        "laminas/laminas-diactoros": "@stable",
        "laminas/laminas-escaper": "@stable",
        "laminas/laminas-feed": "@stable",
        "longwave/laminas-diactoros": "@stable"
    },
```

## db credentials
DB_HOST: 'localhost'
DB_USERNAME: 'test_user_1'
DB_PASSWORD: 'Test_user_1_p'





# env prep

## db setup
reinstall mysql8
set password for root, alex, test_user_1
install mysql workbench and mysql script
update the path for mysql

## php setup
brew install php@8.2
change ~/.zshrc to link php to php@8.2


## the app server setup
composer global require laravel/valet
modify ~/.zshrc to have ~/.composer/vendor/bin/valet in the PATH

valet use php@8.2
composer global update
valet install

```
Installing nginx...
[nginx] is not installed, installing it now via Brew... 🍻
Installing nginx configuration...
Installing nginx directory...

Installing and configuring phpfpm...
Updating PHP configuration for php@8.1...
Restarting php@8.1...

Installing dnsmasq...
[dnsmasq] is not installed, installing it now via Brew... 🍻
Updating Dnsmasq configuration...
Restarting dnsmasq...
Valet is configured to serve for TLD [.test]
```
fire the following command: valent park



## work arounds

change the db name and password s.t. we can connect to mysql db
in settings.php, changed the database name to 'database' => 'drupal_db',

add the following to ./vendor/drush/drush/drush.yml
options:
uri: "http://localhost:8888/"




# run the following commands:
composer install
sh server-setup.sh
./vendor/bin/drush status

task site-install
task uli


I have xdebug installed and have confirmed it's ready for use.
I've defined a PHP Server in my phpstorm settings that use my project accordingly

