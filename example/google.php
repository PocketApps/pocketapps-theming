<?php
include_once 'core/environment.php';
include_once 'core/theming.php';
$theme = new pocketapps_theming(environment::theme());
?>

<html style="background-color: <?php echo $theme->get_color("BACKGROUND") ?>">
    <head>
        <title>Google Example</title>
    </head>
    <body>
        <div align="center">
            <img src="<?php echo $theme->get_image("APP_LOGO") ?>" style="height: 128px;">
        </div>
        <br/>
        <?php
        echo "<h2 align='center' style='color:" . $theme->get_color("FOREGROUND") . "'>Example setting value: " . $theme->get_setting("EXAMPLE") . "</h2>";
        ?>
        <div style="margin-top: 75px;" align="center">
            <p style="color:<?php echo $theme->get_color("FOREGROUND"); ?>"><i>Powered by:</i></p><br/>
            <img src="<?php echo $theme->get_image("POCKETAPPS_LOGO", true) ?>" style="height: 64px;">
        </div>
    </body>
</html>
