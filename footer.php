        <script src="js/vendor/skrollr.js"></script>
		<script src="js/main.js"></script>
        <?php
            foreach($scripts as $script)
            {
                echo '<script src="'.$script.'"></script>';
            }
        ?>
    </body>
</html>
