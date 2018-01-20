<?php
/**
 * The template for displaying a basic homepage, when
 * there's no changelog to show.
 */
?>
<div id="wrapper">

	<h1>Changelogs</h1>

	<p>Below are the changelogs for all <a href="http://themeblvd.com" title="WordPress Themes">Theme Blvd WordPress Themes</a>.</p>

	<ul>

		<?php foreach ( $data as $theme ) : ?>

			<li>
				<a href="?theme=<?php echo $theme['slug']; ?>" title="View <?php echo $theme['name']; ?> Changelog">
					<?php echo $theme['name']; ?>
				</a>
			</li>

		<?php endforeach; ?>

	</ul>

</div><!-- #wrapper -->
