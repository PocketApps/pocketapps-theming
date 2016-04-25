# PocketApps Theming
Create a new themed app for your customers within minutes

## Setup
1. Download the source code or clone the repo (git clone)
2. Include the theming.php file in your project
3. Initialize the class:
    include_once 'path/to/theming.php';
4. Create a new instance of the class (You can use any prefix for your theme file):
    $theme = new pocketapps_theming('base');
5. Retrieve a color
    echo $theme->get_color('BACKGROUND');
6. Retrieve an image
    echo $theme->get_image('APP_LOGO');
7. Retrieve a saved setting
    echo $theme->get_setting('OPEN_IN_NEW_TAB');

Check out the example directory for a working example of this framework

## Contact Us
1. Visit our website - [https://www.pocketapps.co.za](https://www.pocketapps.co.za)
2. Send us an email - [support@pocketapps.co.za](mailto:support@pocketapps.co.za)
2. Like us on [Facebook](http://facebook.com/PocketAppsSoftware)
3. Follow us on [Twitter](https://twitter.com/MyPocketApps)