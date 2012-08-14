<?php get_header(); ?>
<?php if (get_option('ebusiness_categories') == 'false') : ?>
<?php else : ?>

<div id="categories"> <img src="<?php bloginfo('template_directory'); ?>/images/categories-left-<?php echo $ebusiness_color_scheme; ?>.gif" alt="line" style="float: left;" />
    <ul class="nav superfish" id="nav2">
        <?php if ($category_menu <> '<li>No categories</li>') echo($category_menu); ?>
    </ul>
    <img src="<?php bloginfo('template_directory'); ?>/images/categories-right-<?php echo $ebusiness_color_scheme; ?>.gif" alt="line" style="float: left;" /> </div>
<?php endif; ?>
<div id="container">
    <div id="left-div">
        <?php if (get_option('ebusiness_full_post') == 'on') { ?>
        <?php include(TEMPLATEPATH . '/includes/blogstyle.php'); ?>
        <?php } else { include(TEMPLATEPATH . '/includes/defaultcat.php'); } ?>
    </div>
    <?php get_sidebar(); ?>
    <img src="<?php bloginfo('template_directory'); ?>/images/content-bg-<?php echo $ebusiness_color_scheme; ?>.gif" alt="line" style="float: left; margin-top: 15px;" /> </div>
<?php get_footer(); ?>
</body>
</html>