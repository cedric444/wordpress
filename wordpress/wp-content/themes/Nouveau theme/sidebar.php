<?php get_search_form(); ?>
<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
<div class="sidebar-module sidebar-module-inset">
<h4>A Propos</h4>
<p><?php the_author_meta( 'description' ); ?> </p>
<h4>Archives</h4>
<ol class="list-unstyled">
<?php wp_get_archives( 'type=monthly' ); ?>
</ol>
</div>
</div><!-- /.blog-sidebar -->