# Description
  Cms as package for extend base functionality for backend part of projects

# Connecting CMS to the project
  "repositories": [
    {
        "type": "path",
        "url": "../../packages/cms"
    }
  ],
  add this "op/cms": "*" in require in composer on project to extend
  then do 
  rm -rf vendor composer.lock   to remove old vendor 
  composer clear-cache          to clean cache
  composer install              and to install new 

# Add dependecies nad other ro comoser.json
  you must do composer dump-autoload or composer update user/laravel-cms if
  version or dependecies has changed
