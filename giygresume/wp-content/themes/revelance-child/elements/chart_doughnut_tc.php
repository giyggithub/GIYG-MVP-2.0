<?php

/*********** Shortcode: Chart Doughnut ************************************************************/
$tcvpb_elements['chart_doughnut_tc'] = array(
	'name' => esc_html__('Chart Doughnut', 'ABdev_revelance' ),
	'type' => 'block',
	'icon' => 'pi-chart-doughnut',
	'category' =>  esc_html__('Charts', 'ABdev_revelance'),
	'child' => 'chart_doughnuts_tc',
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

function tcvpb_chart_doughnut_tc_shortcode( $attributes, $content = null ) {
	extract(shortcode_atts(tcvpb_extract_attributes('chart_doughnut_tc'), $attributes));
	static $i = 0;
	$i++;

	$id_out = ($id!='') ? 'id='.$id.'' : '';
	$class_out = ($class!='') ? 'class='.$class.'' : '';

	return '<div '.esc_attr($id_out).' '.esc_attr($class_out).' style=" width:'.esc_attr($width).'; ">
				<canvas id="doughnut_canvas'.$i.'"></canvas>
			</div>

		<script>
			var doughnutData'.$i.' = [
				'.do_shortcode($content).'
			];

			window.addEventListener("load",function(event) {
				var ctx'.$i.' = document.getElementById("doughnut_canvas'.$i.'").getContext("2d");
				window.myDoughnut = new Chart(ctx'.$i.').Doughnut(doughnutData'.$i.', {
					responsive : true
				});
			},false);

		</script>';

}

$tcvpb_elements['chart_doughnuts_tc'] = array(
	'name' => esc_html__('Line Section', 'ABdev_revelance' ),
	'type' => 'child',
	'attributes' => array(
		'value' => array(
			'default' => '300',
			'description' => esc_html__('Value', 'ABdev_revelance'),
		),
		'color' => array(
			'description' => esc_html__('Color', 'ABdev_revelance'),
			'type' => 'coloralpha',
			'default' => '#F7464A',
		),
		'highlight' => array(
			'description' => esc_html__('Highlight', 'ABdev_revelance'),
			'type' => 'coloralpha',
			'default' => '#FF5A5E',
		),
		'label' => array(
			'description' => esc_html__('Label', 'ABdev_revelance'),
			'type' => 'color',
			'default' => 'Red',
		),
	),
);

function tcvpb_chart_doughnuts_tc_shortcode( $attributes, $content = null ) {
	extract(shortcode_atts(tcvpb_extract_attributes('chart_doughnuts_tc'), $attributes));
	$doughnut_attr = '
		value: '.esc_attr($value).',
		color : "'.esc_attr($color).'",
		highlight : "'.esc_attr($highlight).'",
		label : "'.esc_attr($label).'",
	';

	$return = '{'.$doughnut_attr.'},';

	return $return;
}

function tcvpb_enqueue_chart_doughnut_script() {
	global $post;
	if( is_a( $post, 'WP_Post' ) && has_shortcode( $post->post_content, 'chart_doughnut_tc') ) {
		wp_enqueue_script('chart', TCVPB_DIR.'js/chart.js', array('jquery'), TCVPB_VERSION, true);
	}
}
add_action( 'wp_enqueue_scripts', 'tcvpb_enqueue_chart_doughnut_script' );