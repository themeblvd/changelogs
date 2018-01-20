<?php
/**
 * Include all files.
 */
include( 'inc/bootstrap.php' );

// Determine WordPress them to pull changelog for.
$theme = array();

if ( isset( $_GET['theme'] ) && isset( $data[ $_GET['theme'] ] ) ) {
	$theme = $data[ $_GET['theme'] ];
}

?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
	<head>

		<meta charset="UTF-8" />

		<title><?php title( $theme ); ?></title>

		<link href="assets/css/fonts.css" type="text/css" media="screen" rel="stylesheet" />

		<link href="assets/css/style.css" type="text/css" media="screen" rel="stylesheet" />

	</head>
	<body class="<?php body_class( $theme ) ?>">

		<?php
		if ( $theme ) {

			/**
			 * Include changelog template.
			 */
			include( 'inc/templates/changelog.php' );

		} else {

			/**
			 * Include homepage template.
			 */
			include( 'inc/templates/home.php' );

		}
		?>

	</body>
</html>
