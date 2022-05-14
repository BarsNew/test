<?php get_header(); ?>

<?php $archive_title = preg_replace( '~^[^:]+: ~', '', get_the_archive_title() ); ?> 
    
<h1 class="post_title"><?php echo is_tag() ? 'Tag: ' . $archive_title : $archive_title; ?></h1>

<?php if ( have_posts() ) : ?>
    
<div class="post_entries">    
    <?php while ( have_posts() ) : the_post(); ?>

    <?php 
        $excerpt = get_the_excerpt();
    ?>

    <div class="post_entry">

        <hr class="line" />

        <div class="post_entry_date"><?php the_date(); ?></div>

        <?php if (has_post_thumbnail()): ?>
        <div class="post_entry_image"><?php the_post_thumbnail('thumbnail'); ?></div>
        <?php endif; ?> 

        <a class="entry_title" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>

        <?php if (!empty($excerpt)): ?>
        <div class="entry_excerpt"><?php echo $excerpt; ?></div>
        <?php endif; ?>

        <?php // if (has_excerpt()): ?>
        <!--<div class="entry_excerpt"><?php the_excerpt(); ?></div>-->
        <?php // endif; ?>

        <?php if (!empty($excerpt)): ?>
        <div class="entry_more_link"><a href="<?php echo get_permalink(); ?>"><?php _e('Read more', 'lang'); ?></a></div>
        <?php endif; ?>
    </div>

    <?php endwhile; ?>
</div> 

<?php the_posts_pagination(); ?>
    
<?php else: ?>

<div class="post_content">
    <p><?php _e('This', 'lang'); ?> <?php is_category() ? _e('category', 'lang') : _e('tag page', 'lang') ?> <?php _e('is empty', 'lang'); ?></p>
</div>

<?php endif; ?>

<?php get_footer(); ?>