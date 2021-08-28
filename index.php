<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Eine erste Designseite</title>

    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />

    <link rel="stylesheet" type="text/css" href="./css/styles.css" />
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;400;700&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/2f65b256d9.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php require(__DIR__ . "/inc/header.php"); ?>
    <?php require(__DIR__ . "/inc/service.php"); ?>
    <?php require(__DIR__ . "/inc/features.php"); ?>
    <?php require(__DIR__ . "/inc/clients.php"); ?>
    <?php require(__DIR__ . "/inc/logo.php"); ?>
    <?php require(__DIR__ . "/inc/team.php"); ?>
    <?php require(__DIR__ . "/inc/contact.php"); ?>
    <?php require(__DIR__ . "/inc/footer.php"); ?>
    
    <script type="text/javascript" src="./vendor/jquery/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="./vendor/jpanelmenu/jquery.jpanelmenu.js"></script>
    <script type="text/javascript" src="./vendor/modernizr/modernizr-custom.js"></script>

    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            var jPM = $.jPanelMenu({
                menu: '.side-menu',
                trigger: '#side-menu-trigger',
                direction: 'right'
            });
            jPM.on();
            $(".side-menu a").click(function() {
                jPM.close();
            });
        });
    </script>
</body>

</html>