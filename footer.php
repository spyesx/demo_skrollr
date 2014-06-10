        <script src="js/vendor/skrollr.js"></script>
        <?php
            foreach($scripts as $script)
            {
                echo '<script src="js/app/'.$script.'"></script>';
            }
        ?>
    </body>
</html>
