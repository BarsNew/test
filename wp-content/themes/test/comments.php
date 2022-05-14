<div class="post_comments">

    <?php comment_form(); ?>

  
    <ul class="post_comments_list">
        <?php wp_list_comments(); ?>
    </ul> 

    

    <div class="post_comments_pagination"><?php paginate_comments_links(); ?></div>
</div>