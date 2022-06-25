## How to install?
Install via the Control Panel or via composer

```bash
composer require sortarad/needledrop
```

To load the necessary javascript files you'll need to add this `{{ needledrop:assets }}` to your footer.

## How to use?
First you need to create an asset container called `sound`. It's here you'll upload the sound you want to play on hover.

Then place the `{{ sound | needledrop }}` tag in the element you want to make noisy.

## One little issue
There is one little thing that kinda stinks. People have been abusing autoplaying content for years so browsers now will only play the sounds once the user has interacted with (tapped, pressed a key, clicked, etc) the page. If you aren't hearing your sounds, this might be why. 
