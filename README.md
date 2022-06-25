# Terahertz Starter kit for Statamic/Laravel
## Created by Swamp.Audio with the help of the Statamic Team

Rename .env.example to .env

Setup .env file for specific environment (laravel valet reccomended for local development)

Navigate to project directory in CLI

Install PHP dependencies with ```composer install```

Install JS dependencies with ```npm install```

Fix unmet dependencies with ```yarn install```

Setup user with ```php please make:user```

Set application key with ```php artisan key:generate```

Initiate webpack/laravel mix with ```npm run production```

If using laravel valet, navigate to ```DIRECTORY_NAME.test``` where directory name is most likeyl swamp_audio-main.

Note that whatever the folder name is, will be the domain before the .test

You will run into a project error if the app key is not set. You can set the app key by clicking the button in the error window.

You should now be presented with the starter kit home-page.

You can log into the control panel at ```DIRECTORY_NAME.test/cp```

This version is alpha.
