<?php
$mode = get_field('multiple') ? 'multiple' : 'single';
$theme = get_field('theme') ? 'secondary' : 'primary';
?>
<section class="section-accordion-v2 mb-5" data-mode="<?php echo $mode;?>" data-theme="<?php echo $theme;?>">

    <?php if (get_field('title')) { ?>
        <h2 class="px-3"><?php the_field('title'); ?></h2>
    <?php } ?>

    <?php if (have_rows('details')):
        $i = 0;
        while (have_rows('details')): the_row(); ?>

            <div class="section-accordion-v2__details<?php echo $i === 0 ? ' section-accordion-v2__details--open' : ''; ?> js--details">
                <div class="section-accordion-v2__details__summary h3"><?php the_sub_field('summary'); ?></div>
                <div class="section-accordion-v2__details__content">
                    <div class="row">
                        <div class="col-md-5"><?php the_sub_field('content'); ?></div>
                        <div class="col-md-7">
                            <?php
                            $img_attr = wp_get_attachment_image_src(get_sub_field('image'), 'custom-size-2x');
                            $img_width = $img_attr[1];
                            $img_height = $img_attr[2];
                            $img_src_2x = wp_get_attachment_image_url(get_sub_field('image'), 'custom-size-2x');
                            $img_src_1x = wp_get_attachment_image_url(get_sub_field('image'), 'custom-size-1x');
                            ?>
                            <picture>
                                <img
                                        src=<?php echo is_admin() ? $img_src_2x : "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAMAAAACCAQAAAA3fa6RAAAADklEQVR42mNkAANGCAUAACMAA2w/AMgAAAAASUVORK5CYII=";?>
                                        data-src="<?php echo $img_src_2x; ?>"
                                        data-srcset="<?php echo $img_src_1x; ?> 1x, <?php echo $img_src_2x; ?> 2x"
                                        width="<?php echo $img_width; ?>"
                                        height="<?php echo $img_height; ?>"
                                        class="responsive-image mx-auto lazy"
                                        alt="<?php the_sub_field('summary'); ?>"
                                >
                            </picture>
                        </div>
                    </div>
                </div>
            </div>

            <?php $i++;
        endwhile;
    endif; ?>

</section>