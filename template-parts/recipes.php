<?php
/**
 * Template part for displaying the recipes grid
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package TNN
 */

?>
<header class="entry-header">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
</header><!-- .entry-header -->
<div class="entry-content">
		<?php
			
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'tnn' ),
				'after'  => '</div>',
			) );
		?>
</div><!-- .entry-content -->
<?php
/* Variables */
$titles = [
    "title1" => get_field('category_title_1'),
    "title2" => get_field('category_title_2'),
    "title3" => get_field('category_title_3'),
    "title4" => get_field('category_title_4'),
    "title5" => get_field('category_title_5'),
    "title6" => get_field('category_title_6'),
    "title7" => get_field('category_title_7'),
    "title8" => get_field('category_title_8'),
];

$links = [
    "link1" => get_field('category_link_1'),
    "link2" => get_field('category_link_2'),
    "link3" => get_field('category_link_3'),
    "link4" => get_field('category_link_4'),
    "link5" => get_field('category_link_5'),
    "link6" => get_field('category_link_6'),
    "link7" => get_field('category_link_7'),
    "link8" => get_field('category_link_8'),
];

$image1 = get_field('category_image_1');
$image2 = get_field('category_image_2');
$image3 = get_field('category_image_3');
$image4 = get_field('category_image_4');
$image5 = get_field('category_image_5');
$image6 = get_field('category_image_6');
$image7 = get_field('category_image_7');
$image8 = get_field('category_image_8');

if( !empty(array_filter($titles)) && !empty(array_filter($links))): ?>
<div class="recipes-grid">

    <?php if( !empty($image1) && !empty($titles['title1']) && !empty($links['link1']) ): ?>
        <a class="recipes-grid-link recipes-grid-area-1" href="<?php echo esc_url($links['link1']); ?>">
            <h2 class="recipes-grid-title"><?php esc_html_e($titles['title1']); ?></h2>
            <img class="recipes-grid-image" src="<?php echo esc_url($image1['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>">
        </a>
    <?php endif; ?>

    <?php if( !empty($image2) && !empty($titles['title2']) && !empty($links['link2']) ): ?>
        <a class="recipes-grid-link recipes-grid-area-2" href="<?php echo esc_url($links['link2']); ?>">
            <h2 class="recipes-grid-title"><?php esc_html_e($titles['title2']); ?></h2>
            <img class="recipes-grid-image" src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>">
        </a>
    <?php endif; ?>

    <?php if( !empty($image3) && !empty($titles['title3']) && !empty($links['link3']) ): ?>
        <a class="recipes-grid-link recipes-grid-area-3" href="<?php echo esc_url($links['link3']); ?>">
            <h2 class="recipes-grid-title"><?php esc_html_e($titles['title3']); ?></h2>
            <img class="recipes-grid-image" src="<?php echo esc_url($image3['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>">
        </a>
    <?php endif; ?>    

    <?php if( !empty($image4) && !empty($titles['title4']) && !empty($links['link4']) ): ?>
        <a class="recipes-grid-link recipes-grid-area-4" href="<?php echo esc_url($links['link4']); ?>">
            <h2 class="recipes-grid-title"><?php esc_html_e($titles['title4']); ?></h2>
            <img class="recipes-grid-image" src="<?php echo esc_url($image4['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>">
        </a>
    <?php endif; ?>

    <?php if( !empty($image5) && !empty($titles['title5']) && !empty($links['link5']) ): ?>
        <a class="recipes-grid-link recipes-grid-area-5" href="<?php echo esc_url($links['link5']); ?>">
            <h2 class="recipes-grid-title"><?php esc_html_e($titles['title5']); ?></h2>
            <img class="recipes-grid-image" src="<?php echo esc_url($image5['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>">
        </a>
    <?php endif; ?>

    <?php if( !empty($image6) && !empty($titles['title6']) && !empty($links['link6']) ): ?>
        <a class="recipes-grid-link recipes-grid-area-6" href="<?php echo esc_url($links['link6']); ?>">
            <h2 class="recipes-grid-title"><?php esc_html_e($titles['title6']); ?></h2>
            <img class="recipes-grid-image" src="<?php echo esc_url($image6['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>">
        </a>
    <?php endif; ?>    

    <?php if( !empty($image7) && !empty($titles['title7']) && !empty($links['link7']) ): ?>
        <a class="recipes-grid-link recipes-grid-area-7" href="<?php echo esc_url($links['link7']); ?>">
            <h2 class="recipes-grid-title"><?php esc_html_e($titles['title7']); ?></h2>
            <img class="recipes-grid-image" src="<?php echo esc_url($image7['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>">
        </a>
    <?php endif; ?>

    <?php if( !empty($image8) && !empty($titles['title8']) && !empty($links['link8']) ): ?>
        <a class="recipes-grid-link recipes-grid-area-8" href="<?php echo esc_url($links['link8']); ?>">
            <h2 class="recipes-grid-title"><?php esc_html_e($titles['title8']); ?></h2>
            <img class="recipes-grid-image" src="<?php echo esc_url($image8['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>">
        </a>
    <?php endif; ?>               
</div>
<?php endif; ?>