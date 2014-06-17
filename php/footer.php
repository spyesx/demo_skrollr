        <script src="<?php echo $relativePath; ?>assets/js/vendor/skrollr.js"></script>
		<script src="<?php echo $relativePath; ?>assets/js/main.js"></script>
        <?php
            foreach($scripts as $script)
            {
                echo '<script src="'.$script.'"></script>';
            }
        ?>
    </body>
</html>
