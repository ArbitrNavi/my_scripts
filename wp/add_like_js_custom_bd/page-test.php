<?php get_header(); ?>
	<h1>test2</h1>


<?php
//workBd::addData(23,1,0,"192.168.1.1");

?>
	<hr>

	<pre>

	<?php
	var_dump( workBd::getPostLike( 72 ) );
	?>

</pre>
	<hr>
<?php get_footer();