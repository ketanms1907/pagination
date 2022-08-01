<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
query_posts(array(
'post_type'=> 'post',
'posts_per_page'=> 10,
'paged' => $paged,
'post_status' => 'publish',
'category_name' => 'Latest News',
'order'=>'DESC',
));
if ( have_posts() ) :
while ( have_posts() ) : the_post(); ?>
<div class="col-xs-4 col-sm-2 col-md-2 col-lg-2">
<div class="blog-entry-meta">
<div class="date-format">
<span class="day"><?php the_time('d'); ?></span>
<span class="month"><?php the_time('M'); ?> <?php the_time('Y'); ?></span>
</div>
<span class="cat-links"><i class="fa fa-folder-open-o"></i>Posted in <a href="<?php echo site_url(); ?>/category/latest-news/" data-rel="category tag">Latest News</a></span>
<span class="permalink"><i class="fa fa-link"></i><a title="<?php the_title(); ?>" href="<?php the_permalink();?>">Permalink</a></span>
</div>
</div>
<div class="col-xs-8 col-sm-10 col-md-10 col-lg-10">
<div class="branding-latest-news-section">
<div class="blog-title">
<a href="<?php the_permalink();?>"><?php the_title();?></a>
</div>
<div class="blog-content"><?php echo the_content();?></div>
</div>
</div>
<?php endwhile;?>
<?php endif;?>
<div class="blog-pagination">

<?php my_pagination(); ?>

</div>
