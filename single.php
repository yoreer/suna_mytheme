<?php get_header();?>

    <main>

      <?php if( have_posts() ) : while( have_posts()) : the_post();  ?>

        <article <?php post_class();?>>
        
          <div class="thumnail">
            <?php the_category();?>

            <?php if(has_post_thumbnail() ):?>
            <figure>
              <?php the_post_thumbnail(); ?>
            </figure>
            <?php endif; ?>
          </div>

          <div class="cont">

            <h1><?php the_title();?></h1>

            <?php the_content();?>

            <time datetime="<?php echo esc_attr(get_the_date(DATE_W3C) ); ?>">
              <i class="far fa-clock"></i>
              <?php echo esc_html(get_the_date()); ?>
            </time>

          </div>

        </article>

      <?php endwhile; endif; ?>

      <?php the_post_navigation();?>

    </main>

<?php get_sidebar();?>
<?php get_footer();?>