<?php
$theme_assets_url = GIYG_WR_BASEURL . 'templates/themes/' . $wr_theme . '/';
// include library.
require_once( 'templates/themes/library.php' );

$giyg_wr_theme_icon = giyg_wr_session( 'giyg_wr_theme_icon' );
if ( 'bold' === $wr_theme ) {
	if ( ! isset( $giyg_wr_theme_icon['bold_custom-icon1'] ) ) {
		$_SESSION['giyg_wr_theme_icon']['bold_custom-icon1'] = $image_directory . 'icon_title-award.svg';
	}
	if ( ! isset( $giyg_wr_theme_icon['bold_custom-icon2'] ) ) {
		$_SESSION['giyg_wr_theme_icon']['bold_custom-icon2'] = $image__with_color_directory . 'scale.svg';
	} else {
		$icon_path = explode( '/', $giyg_wr_theme_icon['bold_custom-icon2'] );
		if ( in_array( 'scale.svg', $icon_path ) ) {
			$_SESSION['giyg_wr_theme_icon']['bold_custom-icon2'] = $image__with_color_directory . 'scale.svg';
		}
	}
	if ( ! isset( $giyg_wr_theme_icon['bold_custom-icon3'] ) ) {
		$_SESSION['giyg_wr_theme_icon']['bold_custom-icon3'] = $image_directory . 'icon_star.svg';
	}
	if ( ! isset( $giyg_wr_theme_icon['bold_custom-icon4'] ) ) {
		$_SESSION['giyg_wr_theme_icon']['bold_custom-icon4'] = $image_directory . 'icon_energy.svg';
	}
}
if ( 'conservative' === $wr_theme ) {
	if ( ! isset( $giyg_wr_theme_icon['conservative_custom-icon1-1'] ) ) {
		$_SESSION['giyg_wr_theme_icon']['conservative_custom-icon1-1'] = $image_directory . 'batch.svg';
	}
	if ( ! isset( $giyg_wr_theme_icon['conservative_custom-icon1-2'] ) ) {
		$_SESSION['giyg_wr_theme_icon']['conservative_custom-icon1-2'] = $image_directory . 'batch.svg';
	}
	if ( ! isset( $giyg_wr_theme_icon['conservative_custom-icon1-3'] ) ) {
		$_SESSION['giyg_wr_theme_icon']['conservative_custom-icon1-3'] = $image_directory . 'batch.svg';
	}

	if ( ! isset( $giyg_wr_theme_icon['conservative_custom-icon2-1'] ) ) {
		$_SESSION['giyg_wr_theme_icon']['conservative_custom-icon2-1'] = $image_directory . 'icon_skills.svg';
	}
	if ( ! isset( $giyg_wr_theme_icon['conservative_custom-icon2-2'] ) ) {
		$_SESSION['giyg_wr_theme_icon']['conservative_custom-icon2-2'] = $image_directory . 'icon_skills.svg';
	}
	if ( ! isset( $giyg_wr_theme_icon['conservative_custom-icon2-3'] ) ) {
		$_SESSION['giyg_wr_theme_icon']['conservative_custom-icon2-3'] = $image_directory . 'icon_skills.svg';
	}
	if ( ! isset( $giyg_wr_theme_icon['conservative_custom-icon2-4'] ) ) {
		$_SESSION['giyg_wr_theme_icon']['conservative_custom-icon2-4'] = $image_directory . 'icon_skills.svg';
	}
	if ( ! isset( $giyg_wr_theme_icon['conservative_custom-icon2-5'] ) ) {
		$_SESSION['giyg_wr_theme_icon']['conservative_custom-icon2-5'] = $image_directory . 'icon_skills.svg';
	}

	if ( ! isset( $giyg_wr_theme_icon['conservative_custom-icon3-1'] ) ) {
		$_SESSION['giyg_wr_theme_icon']['conservative_custom-icon3-1'] = $image_directory . 'men.svg';
	}
	if ( ! isset( $giyg_wr_theme_icon['conservative_custom-icon3-2'] ) ) {
		$_SESSION['giyg_wr_theme_icon']['conservative_custom-icon3-2'] = $image_directory . 'men.svg';
	}
	if ( ! isset( $giyg_wr_theme_icon['conservative_custom-icon3-3'] ) ) {
		$_SESSION['giyg_wr_theme_icon']['conservative_custom-icon3-3'] = $image_directory . 'men.svg';
	}
} // End if().
if ( 'classic' === $wr_theme ) {
	if ( ! isset( $giyg_wr_theme_icon['classic_custom-icon1-1'] ) ) {
		$_SESSION['giyg_wr_theme_icon']['classic_custom-icon1-1'] = $image__with_color_directory . 'icon_star.svg';
	}
	if ( ! isset( $giyg_wr_theme_icon['classic_custom-icon1-2'] ) ) {
		$_SESSION['giyg_wr_theme_icon']['classic_custom-icon1-2'] = $image__with_color_directory . 'icon_star.svg';
	}
	if ( ! isset( $giyg_wr_theme_icon['classic_custom-icon1-3'] ) ) {
		$_SESSION['giyg_wr_theme_icon']['classic_custom-icon1-3'] = $image__with_color_directory . 'icon_star.svg';
	}
	if ( ! isset( $giyg_wr_theme_icon['classic_custom-icon1-4'] ) ) {
		$_SESSION['giyg_wr_theme_icon']['classic_custom-icon1-4'] = $image__with_color_directory . 'icon_star.svg';
	}
	if ( ! isset( $giyg_wr_theme_icon['classic_custom-icon1-5'] ) ) {
		$_SESSION['giyg_wr_theme_icon']['classic_custom-icon1-5'] = $image__with_color_directory . 'icon_star.svg';
	}

	if ( ! isset( $giyg_wr_theme_icon['classic_custom-icon2-1'] ) ) {
		$_SESSION['giyg_wr_theme_icon']['classic_custom-icon2-1'] = $image__with_color_directory . 'icon-energize-one.svg';
	} else {
		$icon_path = explode( '/', $giyg_wr_theme_icon['classic_custom-icon2-1'] );
		if ( in_array( 'icon-energize-one.svg', $icon_path ) ) {
			$_SESSION['giyg_wr_theme_icon']['classic_custom-icon2-1'] = $image__with_color_directory . 'icon-energize-one.svg';
		}
	}
	if ( ! isset( $giyg_wr_theme_icon['classic_custom-icon2-2'] ) ) {
		$_SESSION['giyg_wr_theme_icon']['classic_custom-icon2-2'] = $image__with_color_directory . 'icon-energize-two.svg';
	} else {
		$icon_path = explode( '/', $giyg_wr_theme_icon['classic_custom-icon2-2'] );
		if ( in_array( 'icon-energize-two.svg', $icon_path ) ) {
			$_SESSION['giyg_wr_theme_icon']['classic_custom-icon2-2'] = $image__with_color_directory . 'icon-energize-two.svg';
		}
	}
	if ( ! isset( $giyg_wr_theme_icon['classic_custom-icon2-3'] ) ) {
		$_SESSION['giyg_wr_theme_icon']['classic_custom-icon2-3'] = $image__with_color_directory . 'icon-energize-three.svg';
	} else {
		$icon_path = explode( '/', $giyg_wr_theme_icon['classic_custom-icon2-3'] );
		if ( in_array( 'icon-energize-three.svg', $icon_path ) ) {
			$_SESSION['giyg_wr_theme_icon']['classic_custom-icon2-3'] = $image__with_color_directory . 'icon-energize-three.svg';
		}
	}


	if ( ! isset( $giyg_wr_theme_icon['classic_custom-icon3-1'] ) ) {
		$_SESSION['giyg_wr_theme_icon']['classic_custom-icon3-1'] = $image__with_color_directory . 'icon_compass.svg';
	} else {
		$icon_path = explode( '/', $giyg_wr_theme_icon['classic_custom-icon3-1'] );
		if ( in_array( 'icon_compass.svg', $icon_path ) ) {
			$_SESSION['giyg_wr_theme_icon']['classic_custom-icon3-1'] = $image__with_color_directory . 'icon_compass.svg';
		}
	}
	if ( ! isset( $giyg_wr_theme_icon['classic_custom-icon3-2'] ) ) {
		$_SESSION['giyg_wr_theme_icon']['classic_custom-icon3-2'] = $image__with_color_directory . 'icon_compass.svg';
	} else {
		$icon_path = explode( '/', $giyg_wr_theme_icon['classic_custom-icon3-2'] );
		if ( in_array( 'icon_compass.svg', $icon_path ) ) {
			$_SESSION['giyg_wr_theme_icon']['classic_custom-icon3-2'] = $image__with_color_directory . 'icon_compass.svg';
		}
	}
} // End if().

if ( 'traditional' === $wr_theme ) {
	ob_start();
	require_once( 'download/traditional_download.php' );
	$html = ob_get_clean();
}
if ( 'conservative' === $wr_theme ) {
	ob_start();
	require_once( 'download/conservative_download.php' );
	$html = ob_get_clean();
}
if ( 'classic' === $wr_theme ) {
	ob_start();
	require_once( 'download/classic_download.php' );
	$html = ob_get_clean();
}
if ( 'bold' === $wr_theme ) {
	ob_start();
	require_once( 'download/bold_download.php' );
	$html = ob_get_clean();
}

require 'pdfcrowd.php';

try
{
	// create an API client instance.

	$client = new Pdfcrowd( get_option( 'giyg_wr_pdf_crowd_username' ), get_option( 'giyg_wr_pdf_crowd_apikey' ) );

	$client->setPageWidth( '215.9mm' );
	$client->setPageHeight( '279.4mm' );

	$client->setVerticalMargin( '0in' );
	$client->setHorizontalMargin( '0in' );
	// $client->setPageMargins("0.5in","0in","0in","0in");

	// convert a web page and store the generated PDF into a $pdf variable.
	$pdf = $client->convertHtml( $html );

	// set HTTP response headers
	header( 'Content-Type: application/pdf' );
	header( 'Cache-Control: max-age=0' );
	header( 'Accept-Ranges: none' );
	header( 'Content-Disposition: attachment; filename="giyg.pdf"' );

	// send the generated PDF.
	echo $pdf;
}
catch( PdfcrowdException $why )
{
	echo "Pdfcrowd Error: " . $why;
}
