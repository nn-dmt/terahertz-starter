# Terahertz Starter kit for Statamic/Laravel
### Created by Swamp.Audio with the help of the Statamic Team

## System Requirements
•PHP8
•Composer
•Webserver

If on Mac, we highly recommend Laravel Valet for local development: https://laravel.com/docs/9.x/valet

## Installation

Navigate to project directory in terminal

Rename .env.example to .env with ```mv .env.example .env```

Install PHP dependencies with ```composer install```

Install JS dependencies with ```npm install```

Fix unmet dependencies with ```yarn install```

Setup user with ```php please make:user```

Set application key with ```php artisan key:generate```

Initiate webpack/laravel mix with ```npm run production```

If using laravel valet, navigate to ```DIRECTORY_NAME.test``` where directory name is most likely terahertz-starter-main

You will run into a project error if the app key is not set. You can set the app key by clicking the button in the error window.

You should now be presented with the starter kit home-page.

If using Laravel Valet, you can log into the control panel at ```DIRECTORY_NAME.test/cp```

This version is alpha. There will be issues, and not all features from production have been added to this repository. Use at your own risk.
