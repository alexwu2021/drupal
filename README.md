# Drupal 9 Code Examples
A sample that utilizes drupal 9, php 8.2, mysql 8.0.

Migrated from git@github.com:LoriqueNET/drupal9-code-examples.git

Noticeable changes and setups are documented in ./devnotes.md




# how to run

cd drupal/drupal9-code-examples
rm -f ./composer.lock
rm -rf ./vendor
composer install
composer update
task site-install

ddev config # if not run previously
open -a Docker # assume you have docker install
ddev start




