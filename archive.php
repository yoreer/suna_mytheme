<?php get_header();?>

    <main>
      <div class="archive_title">
        <h2><?php the_archive_title(); ?></h2>
      </div>

      <div class="archive_con">
        <?php if( have_posts() ) : while( have_posts()) : the_post();  ?>

          <article <?php post_class();?>>
            <a href="<?php the_permalink();?>">

              <div class="thumnail">
                <figure>
                <?php if(has_post_thumbnail() ):?>
                    <?php the_post_thumbnail(); ?>
                <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/thumnail/<?php echo get_thumnail_no(get_the_date('s')); ?>.jpg" alt="">
                <?php endif; ?>
                </figure>
              </div>

              <div class="text">
                <h3><?php the_title();?></h3>
                <p><?php the_excerpt();?></p>
              </div>
            </a>
          </article>
       <?php endwhile; endif; ?>

      </div>
      
      
      <div class="post_navi">
        <?php the_posts_pagination( array(
        'prev_text' => '<i class="fas fa-angle-left"></i><span class="screen-reader-text">前へ</span>',
        'next_text' => '<span class="screen-reader-text">次へ</span><i class="fas fa-angle-right"></i>'
        ) ); ?>
      </div>
      
    </main>

<?php get_sidebar();?>
<?php get_footer();?>