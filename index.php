<?php
/**
 * The page for displaying the Index.
 *
 * @package    WordPress
 * @subpackage RootBeer
 * @author     JoshMedeski
 * @framework  Foundation
 */
get_header(); get_template_part( 'components/header-default' ); ?>

<!-- The Title -->
<section id="title">
    <div class="row">
        <div class="small-12 columns">
            <h1>Welcome</h1>
        </div>
        <hr>
    </div>
</section>


<div class="row">
    <!-- Main Content -->
    <div class="large-9 columns">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'content', get_post_format() ); ?>
            <?php endwhile; ?>
        <?php else : ?>
            
            <h2>Nothing here, come back soon!</h2>
        <?php endif; // end have_posts() check ?>
    </div>
    <?php get_sidebar(); ?>
</div>

<?php get_template_part( 'components/footer-default' ); get_footer(); ?>