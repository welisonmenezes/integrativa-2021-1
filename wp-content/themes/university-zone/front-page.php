<?php

/**

 * @link https://codex.wordpress.org/Template_Hierarchy

 *

 * @package University_Zone

 */



$enabled_sections = university_zone_get_sections();  

 

if ( 'posts' == get_option( 'show_on_front' ) ) {

    include( get_home_template() );

}elseif( $enabled_sections ){ 

    get_header();

    foreach( $enabled_sections as $section ){ ?>

        <?php if ($section['id'] == 'testimonials') { ?>
            <div class="<?php echo esc_attr( $section['class'] ); ?>" id="<?php echo esc_attr( $section['id'] ); ?>">
                <?php get_template_part( 'sections/section', esc_attr( $section['id'] ) ); ?>
            </div>
        <?php } else { ?>
            <section class="<?php echo esc_attr( $section['class'] ); ?>" id="<?php echo esc_attr( $section['id'] ); ?>">
                <?php get_template_part( 'sections/section', esc_attr( $section['id'] ) ); ?>
            </section>
        <?php } ?>

    <?php

    }

    get_footer();

}else{

    include( get_page_template() );

}