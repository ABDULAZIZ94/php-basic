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

# add debugbar
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