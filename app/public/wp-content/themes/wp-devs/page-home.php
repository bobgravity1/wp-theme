<!-- this adds the header.php file above the body -->
<?php get_header(); ?>
<!-- this is a more dynamic part of our -->
<div id='content' class="site-content">
<div class="primary content-area">
    <main id="main" class="site-main">
        <section class="hero">
            hero
         </section>
        <section class="services">
            services alternate typing here
        </section>
        <section class="home-blog">
            <div class="container">
                <div class="blog-items">
                <?php 
            if(have_posts()): 
                while(have_posts()):the_post();
                // we define the format here
?>
    <article>
        <h2><?php the_title() ?> </h2>
            <div class="meta-info">
                <p>posted in <?php echo get_the_date(); ?> by <?php the_author_posts()?></p>
                <p>Categories: <?php the_category( ' ' ) ?></p>
                <p>Tags: <?php the_tags( ' ' ) ?></p>
            </div>
       <?php the_content() ?>
    </artilce>
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
           
        </section>
    </main>
</div> 
<!-- this adds the footer.php file below -->
<?php get_footer(); ?>
</div>
 