<?php

/**

 * 

 * Blog Section 

*/

?>



<div class="container">



    <?php 

    $section_title = get_theme_mod('education_zone_blog_section_title');

    $ed_date       = get_theme_mod('education_zone_ed_blog_date','1');

    $read_more     = get_theme_mod( 'education_zone_blog_section_readmore' , __( 'Leia Mais', 'university-zone' ));

    

    education_zone_get_section_header( $section_title ); ?>

    

	<div class="row">

	<?php 

		

        $args = array( 

            'post_type'      => 'post',

            'post_status'    => 'publish',

            'posts_per_page' => 1,

            'tax_query'      => array(

				array(

				'taxonomy' => 'post_format',

				'field'    => 'slug',

				'terms'    => array( 'post-format-gallery' ),

				'operator' => 'NOT IN',

				)),

            'ignore_sticky_posts'   => true,

            'category__not_in' => array(8)

        );

        

        $qry = new WP_Query( $args );

    

        if( $qry->have_posts() ){

            while( $qry->have_posts() ){ 

                $qry->the_post(); ?>

                    <div class="col-1">

                        <article class="post">

                            <a href="<?php the_permalink(); ?>" class="post-thumbnail">

                                <?php 

                                if( has_post_thumbnail() ){

                                    the_post_thumbnail( 'education-zone-blog-full', array( 'itemprop' => 'image' ) );

                                }else{ 

                                    education_zone_get_fallback_svg( 'education-zone-blog-full' );

                                }?>

                            </a>

                            <div class="image-wrapper">

                                <div class="text">

                                    <header class="entry-header">

                                        <h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                                        <?php 

                                        if( $ed_date ){ ?>

                                            <div class="entry-meta">

                                                <span class="posted-on"><i class="fa fa-calendar-o"></i><a href="<?php the_permalink(); ?>"><?php echo esc_html( get_the_date( __( 'j M, Y' , 'university-zone' ) ) ); ?></a></span>

                                                <span class="time"><i class="fa fa-clock-o"></i>    <a href="<?php the_permalink(); ?>"><?php echo esc_html( get_the_date( __( 'g:i A', 'university-zone' ) ) ); ?></a>

                                                </span>

                                            </div>

                                        <?php } ?>

                                    </header>

                                    

                                    <div class="entry-content">

                                    <?php the_excerpt(); ?>

                                    </div>



                                    <?php if( $read_more ){ ?>

                                        <div class="entry-footer">

                                            <a href="<?php the_permalink(); ?>" class="learn-more"><?php echo esc_html( $read_more ); ?></a>

                                        </div>

                                    <?php } ?>

                                </div>

                            </div>

                        </article>

                    </div>

            <?php 

            }       

            wp_reset_postdata(); 

        }

		

        $args = array( 

		        'post_type'             => 'post',

		        'post_status'           => 'publish',

		        'posts_per_page'        => 4,

		        'offset' => 1,

		            'tax_query' => array(

						array(

						'taxonomy' => 'post_format',

						'field'    => 'slug',

						'terms'    => array( 'post-format-gallery' ),

						'operator' => 'NOT IN',

						)),

		        'ignore_sticky_posts'   => true    

             );

        

        $qry2 = new WP_Query( $args );

        if( $qry2->have_posts() ){?>

			<div class="col-2">

				<ul>

				<?php while( $qry2->have_posts() ){ $qry2->the_post(); ?>

					<li>

						<article class="post">

							<header class="entry-header">

								<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

								<?php 

                                if( $ed_date ){ ?>

                                    <div class="entry-meta">

    									<span><i class="fa fa-calendar-o"></i><a href="<?php the_permalink(); ?>"><?php echo esc_html( get_the_date( __( 'd/m/Y', 'university-zone' ) ) ); ?></a></span>

    								</div>

                                <?php } ?>

							</header>

						</article>

					</li>

				<?php }

				    wp_reset_postdata(); ?>

				</ul>

			</div>

		<?php } ?>

	</div>

    <?php 

        $post_page = get_option( 'page_for_posts' ); 

            if ( $post_page && $post_page > 0 ) {

                 echo '<a href="'. esc_url( get_permalink( $post_page ) ) .'" class="btn-learn-more">'. esc_html( 'Ver Todos os Posts', 'university-zone' ) .'</a>';

            }

        ?>

</div>

