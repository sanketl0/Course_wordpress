<?php
/**
 * TutorLMS Elementor Traits
 *
 * @category   Elementor
 * @package    TutorLMS_Addons
 * @author     Themeum <www.themeum.com>
 * @copyright  2020 Themeum <www.themeum.com>
 * @version    Release: @1.0.0
 * @since      1.0.0
 */

namespace TutorLMS\Elementor;

defined( 'ABSPATH' ) || exit;

trait AddonsTrait {

	/**
	 * Layout for Tutor LMS Elementor.
	 *
	 * @param string $default_layout default value left (optional).
	 *
	 * @return array layout options for left,up
	 */
	public function etlms_layout( $default_layout = 'left' ) {
		return array(
			'label'        => __( 'Layout', 'tutor-lms-elementor-addons' ),
			'type'         => \Elementor\Controls_Manager::CHOOSE,
			'options'      => array(
				'left' => array(
					'title' => __( 'Left', 'tutor-lms-elementor-addons' ),
					'icon'  => 'eicon-h-align-left',
				),
				'up'   => array(
					'title' => __( 'Up', 'tutor-lms-elementor-addons' ),
					'icon'  => 'eicon-v-align-top',
				),

			),
			'prefix_class' => self::$prefix_class_layout . '%s',
			'default'      => $default_layout,

			'toggle'       => false,
		);
	}

	/**
	 * Alignment.
	 *
	 * @param string $default_alignment default value left (optional).
	 *
	 * @return array layout options for left,right,center
	 */
	public function etlms_alignment( $default_alignment = 'left' ) {
		return array(
			'label'        => __( 'Alignment', 'tutor-lms-elementor-addons' ),
			'type'         => \Elementor\Controls_Manager::CHOOSE,
			'options'      => array(
				'left'   => array(
					'title' => __( 'Left', 'tutor-lms-elementor-addons' ),
					'icon'  => 'eicon-text-align-left',
				),
				'center' => array(
					'title' => __( 'Center', 'tutor-lms-elementor-addons' ),
					'icon'  => 'eicon-text-align-center',
				),
				'right'  => array(
					'title' => __( 'Right', 'tutor-lms-elementor-addons' ),
					'icon'  => 'eicon-text-align-right',
				),
			),
			'prefix_class' => self::$prefix_class_alignment . '%s',
			'default'      => $default_alignment,
		);
	}

	/**
	 * Icon alignment.
	 *
	 * @param string $prefix_class prefix class.
	 * @param string $default_layout default layout.
	 *
	 * @return array
	 */
	public function etlms_icon_align( $prefix_class, $default_layout = 'right' ) {
		return array(
			'label'        => __( 'Icon Position', 'tutor-lms-elementor-addons' ),
			'type'         => \Elementor\Controls_Manager::CHOOSE,
			'options'      => array(
				'left'  => array(
					'title' => __( 'Left', 'tutor-lms-elementor-addons' ),
					'icon'  => 'eicon-h-align-left',
				),
				'right' => array(
					'title' => __( 'Right', 'tutor-lms-elementor-addons' ),
					'icon'  => 'eicon-h-align-right',
				),

			),
			'prefix_class' => $prefix_class . '%s',
			'default'      => $default_layout,

			'toggle'       => false,
		);
	}

	/**
	 * Align with justify.
	 *
	 * @param string $default_alignment default alignment.
	 *
	 * @return array
	 */
	public function etlms_align_with_justify( $default_alignment = 'left' ) {
		return array(
			'label'        => __( 'Alignment', 'tutor-lms-elementor-addons' ),
			'type'         => \Elementor\Controls_Manager::CHOOSE,
			'options'      => array(
				'left'    => array(
					'title' => __( 'Left', 'tutor-lms-elementor-addons' ),
					'icon'  => 'eicon-text-align-left',
				),
				'center'  => array(
					'title' => __( 'Center', 'tutor-lms-elementor-addons' ),
					'icon'  => 'eicon-text-align-center',
				),
				'right'   => array(
					'title' => __( 'Right', 'tutor-lms-elementor-addons' ),
					'icon'  => 'eicon-text-align-right',
				),
				'justify' => array(
					'title' => __( 'Justified', 'tutor-lms-elementor-addons' ),
					'icon'  => 'eicon-text-align-justify',
				),
			),
			'prefix_class' => self::$prefix_class_alignment . '%s',
			'default'      => $default_alignment,
		);
	}

	/**
	 * Non responsive layout.
	 *
	 * @param string $default_layout default layout.
	 *
	 * @return array
	 */
	public function etlms_non_responsive_layout( $default_layout = 'left' ) {
		return array(
			'label'        => __( 'Layout', 'tutor-lms-elementor-addons' ),
			'type'         => \Elementor\Controls_Manager::CHOOSE,
			'options'      => array(
				'left' => array(
					'title' => __( 'Left', 'tutor-lms-elementor-addons' ),
					'icon'  => 'eicon-h-align-left',
				),
				'up'   => array(
					'title' => __( 'Center', 'tutor-lms-elementor-addons' ),
					'icon'  => 'eicon-v-align-top',
				),

			),
			'prefix_class' => self::$prefix_class_layout,
			'default'      => $default_layout,

			'toggle'       => false,
		);
	}

	/**
	 * Non responsive alignment.
	 *
	 * @param string $default_alignment default alignment.
	 *
	 * @return array
	 */
	public function etlms_non_responsive_alignment( $default_alignment = 'left' ) {
		return array(
			'label'        => __( 'Alignment', 'tutor-lms-elementor-addons' ),
			'type'         => \Elementor\Controls_Manager::CHOOSE,
			'options'      => array(
				'left'   => array(
					'title' => __( 'Left', 'tutor-lms-elementor-addons' ),
					'icon'  => 'eicon-text-align-left',
				),
				'center' => array(
					'title' => __( 'Center', 'tutor-lms-elementor-addons' ),
					'icon'  => 'eicon-text-align-center',
				),
				'right'  => array(
					'title' => __( 'Right', 'tutor-lms-elementor-addons' ),
					'icon'  => 'eicon-text-align-right',
				),
			),
			'prefix_class' => self::$prefix_class_alignment,
			'default'      => $default_alignment,
		);
	}

	/**
	 * Get alignments with default selectors
	 *
	 * @param array  $selectors CSS selectors.
	 * @param string $align alignment.
	 *
	 * @return array
	 */
	protected function title_alignment_with_selectors( array $selectors, string $align = 'left' ) {
		$align              = $this->etlms_alignment( $align );
		$align['selectors'] = $selectors;
		return $align;
	}

	/**
	 * Check is elementor editor mode or not
	 *
	 * @since v2.0.0
	 *
	 * return bool, true if editor otherwise false
	 */
	public function is_elementor_editor() {
		return \Elementor\Plugin::instance()->editor->is_edit_mode() ? true : false;
	}
}
