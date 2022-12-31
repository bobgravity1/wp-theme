<?php 
/*
template name: general template
//by creating a file name called _____-template.js it will now be available in the admin as a template section for the page
//the default template refers to the index.php file
//this avoids broken links. always falls back to index.php if so
*/
?><!-- this adds the header.php file above the body -->
<?php get_header(); ?>
<!-- this is a more dynamic part of our -->
<div id='content' class="site-content">
<div class="primary content-area">
    <main id="main" class="site-main">
            <div class="container">
                <div class="general-template">
                <?php 
            if(have_posts()): 
                while(have_posts()):the_post();
                // we define the format here
?>
    <article>
        <h1><?php the_title() ?> </12>

       <?php the_content() ?>
    </article>
<?php
                endwhile;
                // UGLY. ASS. SYNTAX
                    else: ?>
                    <!-- need a break in the php (above) so we can write html now! -->
                        <p>nothing else to display</p>
            <?php endif;
            ?>
                </div>
            </div>
        
    </main>
</div> 
<!-- this adds the footer.php file below -->
<?php get_footer(); ?>
</div>
 