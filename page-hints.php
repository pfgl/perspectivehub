<?php
/*
* Template Name: Hints
*/

get_header(); ?>

    <a name="top"></a>
        <div id="primary">
            <div id="content" role="main">
			    <?php the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <h1 class="entry-title"><?php the_title(); ?></h1>
                    </header><!-- .entry-header -->

                    <div class="entry-content">
                        <p><a href="http://www.perspectivehub.co.uk/wp-content/uploads/2013/08/hints-n-tips.png"><img class="alignleft wp-image-2605 size-full" title="hints-n-tips" src="http://www.perspectivehub.co.uk/wp-content/uploads/2013/08/hints-n-tips.png" alt="" width="138" height="200" /></a></p>

                        <div class="article-sidebar">

                            <ul class="quick-links">
                                <h2><strong>Hints &amp; Tips</strong></h2>

                                <li>
                                    Hold
                                </li>
                            </ul>
                        </div>

                        <section class="article entry-content">
                            <h2  class="file-review-title"><strong>Title</strong></h2>
                            <div class="file-review-content">
                                <p><a href="#top">Back to top...</a></p>
                            </div>
                        </section>

                        <div class="file-review-footer">
                            <p><strong>If you have any queries regarding the hints and tips please do not hesitate to contact Richard Heywood, Business Monitoring Manager, on 0161 244 9759 or at <a href="mailto:richard.heywood@pfgl.co.uk">richard.heywood@pfgl.co.uk</a>.</strong></p>
                        </div>
                    </div><!-- .entry-content -->
                </article><!-- #post-<?php the_ID(); ?> -->
			</div><!-- #content -->
		</div><!-- #primary -->
<?php //get_sidebar(); ?>
<?php get_footer(); ?>