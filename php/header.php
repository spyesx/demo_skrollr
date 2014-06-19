<?php
    $relativePath = isset($relativePath) ? $relativePath : '';
?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

        <link rel="stylesheet" href="<?php echo $relativePath; ?>assets/css/normalize.css">
        <link rel="stylesheet" href="<?php echo $relativePath; ?>assets/css/main.css">
        <link rel="stylesheet" href="<?php echo $relativePath; ?>assets/css/fonts.css">
        <link rel="stylesheet" href="<?php echo $relativePath; ?>assets/css/scaffolding.css">
        <?php
            foreach($styles as $style)
            {
                echo '<link rel="stylesheet" href="'.$style.'">';
            }
        ?>

        <script src="<?php echo $relativePath; ?>assets/js/vendor/jquery-1.10.2.min.js"></script>
        <script src="<?php echo $relativePath; ?>assets/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
    <div id="dashboard">
        <div>x : <span id="dashboard-skrollr-x">0</span></div>
    </div>