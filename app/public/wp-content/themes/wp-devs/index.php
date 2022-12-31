<!-- this adds the header.php file above the body -->
<?php get_header(); ?>
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
<!-- you can get this code from the wordpress docs -->
<!-- this is a more dynamic part of our -->
<div id='content' class="site-content">
<div class="primary content-area">
    <main id="main" class="site-main">
    <h1></h1>
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
                <p>posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link()?></p>
                <p>Categories: <?php the_category( ' ' ) ?></p>
                <p>Tags: <?php the_tags( ' ' ) ?></p>
            </div>
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
 