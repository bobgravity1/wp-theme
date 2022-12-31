<!-- this adds the header.php file above the body -->
<?php get_header(); ?>
<!-- this is a more dynamic part of our -->
<div id='content' class="site-content">
<div class="primary content-area">
    <main id="main" class="site-main">
            <div class="container">
                <div class="page-item">
                <?php 
                // we dont need to check for the posts here because page.php is a post type file
                while(have_posts()):the_post();
                // we define the format here
?>
    <article>
        <header>
            <h1><?php the_title() ?> </h1>
        </header>
           
       <?php the_content() ?>
    </article>
<?php
                endwhile;
                // UGLY. ASS. SYNTAX
               
            ?>
                </div>
            </div>
    </main>
</div> 
<!-- this adds the footer.php file below -->
<?php get_footer(); ?>
</div>s