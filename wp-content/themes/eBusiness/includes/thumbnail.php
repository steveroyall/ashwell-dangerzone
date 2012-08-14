<?php $width = get_option('ebusiness_thumbnail_size');
	  $height = get_option('ebusiness_thumbnail_size');
	  $classtext = 'thumbnail';
	  $titletext = get_the_title();

	  $thumbnail = get_thumbnail($width,$height,$classtext,$titletext,$titletext);
	  $thumb = $thumbnail["thumb"];  ?>

<?php if($thumb != '') { ?>
	<a href="<?php the_permalink() ?>" title="<?php printf(__('Permanent Link to %s','eBusiness'), get_the_title()) ?>">
		<?php print_thumbnail($thumb, $thumbnail["use_timthumb"], $titletext, $width, $height, $classtext); ?>
	</a>
<?php } ?>
