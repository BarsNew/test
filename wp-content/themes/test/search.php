<?php get_header(); ?>

<h1 class="post_title"><?php _e('Search page', 'lang'); ?></h1>

<?php if ( have_posts() ) : ?>
    
    <div class="post_entries">    
        <?php while ( have_posts() ) : the_post(); ?>
    
        <?php 
            $excerpt = get_the_excerpt();
        ?>
    
        <div class="post_entry">
    
            <div class="post_entry_date"><?php the_date(); ?></div>
       
            <a class="entry_title" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
    
            <?php if (!empty($excerpt)): ?>
            <div class="entry_excerpt"><?php echo $excerpt; ?></div>
            <?php endif; ?>
    
            <?php if (!empty($excerpt)): ?>
            <div class="entry_more_link"><a href="<?php echo get_permalink(); ?>"><?php _e('Read more', 'lang'); ?></a></div>
            <?php endif; ?>
        </div>
    
        <?php endwhile; ?>
    </div> 
    
    <?php the_posts_pagination(); ?>
        
    <?php else: ?>
    
    <div class="post_content">
        <p><?php _e('Search returned no results', 'lang'); ?></p>
    </div>
    
    <?php endif; ?>

<?php get_footer(); ?>