<?php

function fca_eoi_layout_descriptor_1( $name, $layout_id, $texts ) {
	require_once FCA_EOI_PLUGIN_DIR . 'includes/eoi-layout.php';
	$layout = new EasyOptInsLayout( $layout_id );
	$class = $layout->layout_class;

	return array(

		'name' => __( $name ),

		'editables' => array(

			// Added to the fieldset "Form Background"
			'form' => array(
				'.fca_eoi_layout_1.' . $class => array(
					'background-color' => array( __( 'Form Background Color' ), '#ffffff' ),
					'border-color' => array( __( 'Border Color' ), '#D2D2D2' ),
				),
			),

			// Added to the fieldset "Headline"
			'headline' => array(
				'.fca_eoi_layout_1.' . $class . ' div.fca_eoi_layout_headline_copy_wrapper div' => array(
					'font-size' => array( __('Font Size'), '25px'),
					'color' => array( __('Font Color'), '#2B6B98'),
				),
			),
			'description' => array(
				'.fca_eoi_layout_1.' . $class . ' div.fca_eoi_layout_description_copy_wrapper p, ' .
				'.fca_eoi_layout_1.' . $class . ' div.fca_eoi_layout_description_copy_wrapper div' => array(
					'font-size' => array( __('Font Size'), '14px'),
					'color' => array( __('Font Color'), '#6D6D6D'),
				),
			),
			'name_field' => array(
				'.fca_eoi_layout_1.' . $class . ' div.fca_eoi_layout_name_field_wrapper, ' .
				'.fca_eoi_layout_1.' . $class . ' div.fca_eoi_layout_name_field_wrapper input' => array(
					'color' => array( __( 'Font Color' ), '#7f7f7f' ),
					'background-color' => array( __( 'Background Color' ), '#F5F5F5' ),
					'font-size' => array( __( 'Font Size' ), '14px'),
				),
				'.fca_eoi_layout_1.' . $class . ' div.fca_eoi_layout_name_field_wrapper' => array(
					'border-color' => array( __('Border Color'), '#CCC'),
				),
			),
			'email_field' => array(
				'.fca_eoi_layout_1.' . $class . ' div.fca_eoi_layout_email_field_wrapper, ' .
				'.fca_eoi_layout_1.' . $class . ' div.fca_eoi_layout_email_field_wrapper input' => array(
					'color' => array( __( 'Font Color' ), '#7f7f7f' ),
					'background-color' => array( __( 'Background Color' ), '#F5F5F5'),
					'font-size' => array( __( 'Font Size' ), '14px'),
				),
				'.fca_eoi_layout_1.' . $class . ' div.fca_eoi_layout_email_field_wrapper' => array(
					'border-color' => array( __( 'Border Color' ), '#CCC'),
				),
			),
			'button' => array(
				'.fca_eoi_layout_1.' . $class . ' div.fca_eoi_layout_submit_button_wrapper input' => array(
					'font-size' => array( __('Font Size'), '14px'),
					'color' => array( __( 'Font Color' ), '#963' ),
					'background-color' => array( __( 'Color' ), '#f5d03b' ),
				),
			),
			'privacy' => array(
				'.fca_eoi_layout_1.' . $class . ' div.fca_eoi_layout_privacy_copy_wrapper div' => array(
					'font-size' => array( __('Font Size'), '14px'),
					'color' => array( __('Font Color'), '#8F8F8F'),
				),
			),
			'fatcatapps' => array(
				'.fca_eoi_layout_1.' . $class . ' div.fca_eoi_layout_fatcatapps_link_wrapper a, ' .
				'.fca_eoi_layout_1.' . $class . ' div.fca_eoi_layout_fatcatapps_link_wrapper a:hover' => array(
					'color' => array( __('Font Color'), '#BAA34E'),
				),
			),
		)
	);
}