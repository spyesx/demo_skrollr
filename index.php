<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/main.css">

        <link rel="stylesheet" href="assets/css/fonts.css">
        <link rel="stylesheet" href="assets/css/scaffolding.css">
        <link rel="stylesheet" href="assets/css/home.css">
        <script src="assets/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body class="index">
        <h1>R&amp;D Skrollr</h1>
        <ul class="tests">
        <?php
            foreach(array_diff(scandir('demo/', 0), array('..', '.', '.DS_Store')) as $file)
            {
                if(file_exists('demo/'.$file.'/index.php')){
                    echo '<li class="test"><a href="demo/'.$file.'/index.php">'.str_replace('_', ' ', $file).'</a></li>'."\n\t";
                }
            }
        ?>
        </ul>
    </body>
</html>



