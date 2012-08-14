<div style="position: relative; z-index: 1;" id="slider-nav"> <a href="#" class="slider-link-1"><?php echo $ebusiness_slider_1_button; ?></a> </div>
<div id="sections">
    <ul>
        <li>
            <div class="slider-left-2">
                <div class="slider-left">
                    <h2><?php echo $ebusiness_slider_1_title; ?></h2>
                    <img src="<?php bloginfo('template_directory'); ?>/images/slider-line-<?php echo $ebusiness_color_scheme; ?>.gif" alt="line" class="slider-line" />
                    <div style="clear: both;"></div>
                    <?php echo $ebusiness_slider_1_content; ?> </div>
                <?php if (get_option('ebusiness_slider_1_readmore') == 'false') { ?>
                <?php { echo ''; } ?>
                <?php } else { echo '<a href="' . $ebusiness_slider_1_readmore_url . '"><img src="' . get_bloginfo('stylesheet_directory') . '/images/readmore-' . $ebusiness_color_scheme . '.gif" alt="read more" class="readmore" /></a>'; } ?>
            </div>
            <div class="slider-right">
            
            <?php if (get_option('ebusiness_slider_1_type') == 'Video') : ?>
            <div style="background: #DCDBDB; padding: 8px;"><?php echo $ebusiness_slider_1_video; ?></div>
             <?php else : ?>
            <img src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php echo $ebusiness_slider_1_image; ?>&amp;h=192&amp;w=334&amp;zc=1" alt="slider image" class="slider_image" />
            <?php endif; ?>
            
            </div>
        </li>
    </ul>
</div>
