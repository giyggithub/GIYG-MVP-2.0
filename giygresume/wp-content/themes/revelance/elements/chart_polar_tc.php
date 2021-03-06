<?php

/*********** Shortcode: Chart Polar Area ************************************************************/

$tcvpb_elements['chart_polar_tc'] = array(
	'name' => esc_html__('Chart Polar Area', 'ABdev_revelance' ),
	'type' => 'block',
	'icon' => 'pi-chart-polar',
	'category' =>  esc_html__('Charts', 'ABdev_revelance'),
	'child' => 'chart_polars_tc',
	'child_button' => esc_html__('New Label', 'ABdev_revelance'),
	'child_title' => esc_html__('Label Section', 'ABdev_revelance'),
	'attributes' => array(
		'width' => array(
			'description' => esc_html__('Width', 'ABdev_revelance'),
			'info' => esc_html__('Width of the Chart, type % or px at the end of the number.', 'ABdev_revelance'),
			'default' => '100%',
		),
		'id' => array(
			'description' => esc_html__('ID', 'ABdev_revelance'),
			'info' => esc_html__('Additional custom ID', 'ABdev_revelance'),
			'tab' => esc_html__('Advanced', 'ABdev_revelance'),
		),
		'class' => array(
			'description' => esc_html__('Class', 'ABdev_revelance'),
			'info' => esc_html__('Additional custom classes for custom styling', 'ABdev_revelance'),
			'tab' => esc_html__('Advanced', 'ABdev_revelance'),
		),
	),
);

function tcvpb_chart_polar_tc_shortcode( $attributes, $content = null ) {
	extract(shortcode_atts(tcvpb_extract_attributes('chart_polar_tc'), $attributes));
	static $i = 0;
	$i++;

	$id_out = ($id!='') ? 'id='.$id.'' : '';
	$class_out = ($class!='') ? 'class='.$class.'' : '';

	return '<div '.esc_attr($id_out).' '.esc_attr($class_out).' style=" width:'.esc_attr($width).'; ">
				<canvas id="polar_canvas'.$i.'"></canvas>
			</div>

		<script>
			var polarData'.$i.' = [
				'.do_shortcode($content).'
			];

			window.addEventListener("load",function(event) {
				var ctx'.$i.' = document.getElementById("polar_canvas'.$i.'").getContext("2d");
				window.myPolarArea = new Chart(ctx'.$i.').PolarArea(polarData'.$i.', {
					responsive:true
				});
			},false);

		</script>';

}

$tcvpb_elements['chart_polars_tc'] = array(
	'name' => esc_html__('Line Section', 'ABdev_revelance' ),
	'type' => 'child',
	'attributes' => array(
		'value' => array(
			'default' => '300',
			'description' => esc_html__('Value', 'ABdev_revelance'),
		),
		'color' => array(
			'description' => esc_html__('Color', 'ABdev_revelance'),
			'type' => 'color',
			'default' => '#F7464A',
		),
		'highlight' => array(
			'description' => esc_html__('Highlight', 'ABdev_revelance'),
			'type' => 'color',
			'default' => '#FF5A5E',
		),
		'label' => array(
			'description' => esc_html__('Label', 'ABdev_revelance'),
			'type' => 'color',
			'default' => 'Red',
		),
	),
);

function tcvpb_chart_polars_tc_shortcode( $attributes, $content = null ) {
	extract(shortcode_atts(tcvpb_extract_attributes('chart_polars_tc'), $attributes));
	$polar_attr = '
		value: '.esc_attr($value).',
		color : "'.esc_attr($color).'",
		highlight : "'.esc_attr($highlight).'",
		label : "'.esc_attr($label).'",
	';

	$return = '{'.$polar_attr.'},';

	return $return;
}

function tcvpb_enqueue_chart_polar_script() {
	global $post;
	if( is_a( $post, 'WP_Post' ) && has_shortcode( $post->post_content, 'chart_polar_tc') ) {
		wp_enqueue_script('chart', TCVPB_DIR.'js/chart.js', array('jquery'), TCVPB_VERSION, true);
	}
}
add_action( 'wp_enqueue_scripts', 'tcvpb_enqueue_chart_polar_script' );