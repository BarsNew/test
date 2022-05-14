<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php 
        $content = get_the_content(); 
        $categoriesArr = get_the_category();
        $tagsArr = get_the_tags();

        $categories = [];
        foreach($categoriesArr as $category) {
            array_push($categories, '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>');    
        }

        $categories = implode(', ', $categories);

        $tags = [];
        if (!empty($tagsArr)) {
        foreach($tagsArr as $tag) {
            array_push($tags, '<a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>');    
        }
        }

        $tags = implode(', ', $tags);

        $author = get_the_author();
    ?>

    <h1 class="post_title"><?php the_title() ?></h1>   

    <?php if (has_post_thumbnail()): ?>
    <div class="post_image">
        <?php
        $args = [
            'class' => '',
        ]; 
        the_post_thumbnail('large', $args); ?>
    </div>
    <?php endif; ?> 

    <div class="post_date"><?php _e('Date', 'lang'); ?>: <?php the_date(); ?></div>

    <?php if (!empty($content)): ?>
    <div class="post_content"><?php echo $content; ?></div>
    <?php endif; ?>

    <?php if (!empty($author)): ?>
    <div class="post_author"><?php _e('Author', 'lang'); ?>: <?php echo $author; ?></div>
    <?php endif; ?>
    
    <?php if (!empty($categories)): ?>
    <div class="post_categories"><?php _e('Categories', 'lang'); ?>: <?php echo $categories; ?></div>
    <?php endif; ?>

    <?php if (!empty($tags)): ?>
    <div class="post_tags"><?php _e('Tags', 'lang'); ?>: <?php echo $tags; ?></div>
    <?php endif; ?>

<?php endwhile; endif; ?>

<?php if (comments_open()): ?>
<?php comments_template(); ?>
<?php endif; ?>    

<?php get_footer(); ?>