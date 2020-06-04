# fundemental website using html, js, css and php

# run server
sudp php -S 0.0.0.0:80 -t ./

# open source icons
https://www.flaticon.com/free-icon/open-source_732090

# TODO
input validation
sanitize
AJAX

# font
Chelsea Market

# debugbar debugbar
composer require maximebf/debugbar

implement this snipped

    <?php

    // Require the Composer autoloader, if not already loaded
    require 'vendor/autoload.php';

    use DebugBar\StandardDebugBar;

    $debugbar = new StandardDebugBar();
    $debugbarRenderer = $debugbar->getJavascriptRenderer();

    $debugbar["messages"]->addMessage("hello world!");
    ?>
    <html>
        <head>
            <?php echo $debugbarRenderer->renderHead() ?>
        </head>
        <body>
            ...
            <?php echo $debugbarRenderer->render() ?>
        </body>
    </html>

# xdebug debugger
xdebug
/etc/php/7.4/cli/php.ini
/etc/php/7.1/mods-available/*.ini
sudo apt install php-xdebug;

on windows
As default xdeubg is no enabled on xampp but it has xdebug.dll file.
If you need xdebug you can easily enable xdebug on your xampp.
