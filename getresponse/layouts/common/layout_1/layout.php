<?php

function fca_eoi_layout_descriptor_1( $layout_id, $texts ) {
	require_once FCA_EOI_PLUGIN_DIR . 'includes/eoi-layout.php';
	$layout_helper = new EasyOptInsLayout( $layout_id );
	$class = $layout_helper->layout_class;

	switch( $layout_helper->layout_type ) {
		
		case 'widget':
			$width = '300px';
			break;
		
		case 'postbox':
			$width = '580px';
			break;
		
		case 'lightbox':
			$width = '650px';
			break;
		
		default:
			$width = '100%';
	}

	return array(

		'editables' => array(

			// Added to the fieldset "Form Background"
			'form' => array(
				'.fca_eoi_layout_1.' . $class => array(
					'background-color' => array( 'Form Background Color', '#ffffff' ),
					'border-color' => array( 'Border Color', '#D2D2D2' ),
					'width' => array( 'Width', $width ),
					'text-align' => array( 'Alignment', 'center' ),
				),
			),

			// Added to the fieldset "Headline"
			'headline' => array(
				'.fca_eoi_layout_1.' . $class . ' div.fca_eoi_layout_headline_copy_wrapper div' => array(
					'font-size' => array( 'Font Size', '25px'),
					'color' => array( 'Font Color', '#2B6B98'),
				),
			),
			'description' => array(
				'.fca_eoi_layout_1.' . $class . ' div.fca_eoi_layout_description_copy_wrapper p, ' .
				'.fca_eoi_layout_1.' . $class . ' div.fca_eoi_layout_description_copy_wrapper div' => array(
					'font-size' => array( 'Font Size', '14px'),
					'color' => array( 'Font Color', '#6D6D6D'),
				),
			),
			'name_field' => array(
				'.fca_eoi_layout_1.' . $class . ' div.fca_eoi_layout_name_field_wrapper, ' .
				'.fca_eoi_layout_1.' . $class . ' div.fca_eoi_layout_name_field_wrapper input' => array(
					'color' => array( 'Font Color', '#7f7f7f' ),
					'background-color' => array( 'Background Color', '#F5F5F5' ),
					'font-size' => array( 'Font Size', '14px'),
					
				),
				'.fca_eoi_layout_1.' . $class . ' div.fca_eoi_layout_name_field_wrapper' => array(
					'border-color' => array( 'Border Color', '#CCC'),
					'width' => array( 'Width', '100%'),
				),
			),
			'email_field' => array(
				'.fca_eoi_layout_1.' . $class . ' div.fca_eoi_layout_email_field_wrapper, ' .
				'.fca_eoi_layout_1.' . $class . ' div.fca_eoi_layout_email_field_wrapper input' => array(
					'color' => array( 'Font Color', '#7f7f7f' ),
					'background-color' => array( 'Background Color', '#F5F5F5'),
					'font-size' => array( 'Font Size', '14px'),
					
				),
				'.fca_eoi_layout_1.' . $class . ' div.fca_eoi_layout_email_field_wrapper' => array(
					'border-color' => array( 'Border Color', '#CCC'),
					'width' => array( 'Width', '100%'),
				),
			),
			'button' => array(
				'.fca_eoi_layout_1.' . $class . ' div.fca_eoi_layout_submit_button_wrapper input' => array(
					'font-size' => array( 'Font Size', '14px'),
					'color' => array( 'Font Color', '#963' ),
					'background-color' => array( 'Color', '#f5d03b' ),
					'border-color' => array( 'Border Color', '#EEC22B' ),
					'hover-color' => array( 'Hover Color', '#AE8E1F' ),
					
				),
				'.fca_eoi_layout_1.' . $class . ' div.fca_eoi_layout_submit_button_wrapper' => array(
					'width' => array( 'Width', '100%'),
				),
			),
			'privacy' => array(
				'.fca_eoi_layout_1.' . $class . ' div.fca_eoi_layout_privacy_copy_wrapper div' => array(
					'font-size' => array( 'Font Size', '14px'),
					'color' => array( 'Font Color', '#8F8F8F'),
				),
			),
			'fatcatapps' => array(
				'.fca_eoi_layout_1.' . $class . ' div.fca_eoi_layout_fatcatapps_link_wrapper a, ' .
				'.fca_eoi_layout_1.' . $class . ' div.fca_eoi_layout_fatcatapps_link_wrapper a:hover' => array(
					'color' => array( 'Font Color', '#BAA34E'),
				),
			),
		)
	);
}