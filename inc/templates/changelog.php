<?php
/**
 * The template for displaying a changelog
 * page.
 */

$changelog = @file_get_contents( $theme['url'] ); // `@` suppresses error, when file not found.

if ( $changelog ) {

	// Apply markdown.

	$Parsedown = new ParsedownExtend();

	$content = $Parsedown->text( $changelog );

} else {

	$content = 'Could not retrieve changelog.';

}
?>
<div id="access">

	<ul>

		<?php if ( $theme['update'] ) : ?>

			<li><a href="<?php echo $theme['update']; ?>" target="_blank" title="How to update">How to Update</a></li>

		<?php endif; ?>

		<?php if ( $theme['docs'] ) : ?>

			<li><a href="<?php echo $theme['docs']; ?>" target="_blank" title="Documentation">Documentation</a></li>

		<?php endif; ?>

		<?php if ( $theme['support'] ) : ?>

			<li><a href="<?php echo $theme['support']; ?>" target="_blank" title="Support">Support</a></li>

		<?php endif; ?>

		<?php if ( $theme['buy'] ) : ?>

			<li class="buy-link"><a href="<?php echo $theme['buy']; ?>" target="_blank" title="Buy Theme">Buy <?php echo $theme['name']; ?></a></li>

		<?php endif; ?>

	</ul>

</div>

<div id="wrapper">

	<?php echo $content; ?>

</div><!-- #wrapper -->
