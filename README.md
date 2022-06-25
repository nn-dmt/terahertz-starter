# Terahertz Starter kit for Statamic/Laravel
### alpha release 0.0.1
### Created by Swamp.Audio with the help of the Statamic Team

[Laravel Documentation](https://laravel.com/docs/9.x)

[Statamic / Antlers Documentation](https://statamic.dev/antlers)

[Tailwind CSS Documentation](https://v2.tailwindcss.com/docs)

## System Requirements
•PHP8

•Composer

•NPM

•Yarn

•Webserver

If on Mac, we highly recommend [Laravel Valet](https://laravel.com/docs/9.x/valet) for local development.


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


## Troubleshooting

This framework combines front end assets together via laravel mix with the Just In Time engine.

This means that your compiled assets remain incredibly small for optimal performance.

It also means that if you make a design change and include a new class not before rendered by the engine, it will not display properly.

The solution to this issue is to run ```npm run watch``` to watch for changes actively or ```npm run production``` after changes have been finalized.
