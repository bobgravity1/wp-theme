<footer class="site-footer">
    <div class="container">
        <div class="copyright">
            <p>Copyright X - All Right Reserved</p>
        </div>
        <div class="nav-footer-menu">
            <?php wp_nav_menu(array("theme_location"=>"wp_devs_footer_menu", "depth"=>1)); ?>
        </div>
    </div>
</footer>
</div>
<!-- this loads the script tag after the html is loaded -->
<?php wp_footer() ?>
</body>
</html>