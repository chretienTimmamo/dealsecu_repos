<?php
/**
 * YITH WooCommerce Waiting List Compatibility Class
 *
 * @author  YITH
 * @package YITH WooCommerce Customize My Account Page
 * @version 1.0.0
 */

defined( 'YITH_WCMAP' ) || exit;

if ( ! class_exists( 'YITH_WCMAP_Waiting_List_Compatibility' ) ) {
	/**
	 * Class YITH_WCMAP_Waiting_List_Compatibility
	 *
	 * @since 3.0.0
	 */
	class YITH_WCMAP_Waiting_List_Compatibility extends YITH_WCMAP_Compatibility {

		/**
		 * Constructor
		 *
		 * @since 3.0.0
		 * @author Francesco Licandro
		 */
		public function __construct() {
			$this->endpoint_key = 'waiting-list';
			$this->endpoint     = array(
				'slug'    => get_option( 'woocommerce_myaccount_waiting_list_endpoint', 'waiting-list' ),
				'label'   => __( 'My Waiting List', 'yith-woocommerce-customize-myaccount-page' ),
				'icon'    => 'clock-o',
				'content' => '[ywcwtl_waitlist_table]',
			);

			// Register endpoint
			$this->register_endpoint();

			// handle compatibility
			add_action( 'template_redirect', array( $this, 'hooks' ), 5 );
		}

		/**
		 * Compatibility hooks and filter
		 *
		 * @since 3.0.0
		 * @author Francesco Licandro
		 */
		public function hooks() {
			if ( class_exists( 'YITH_WCWTL_Frontend' ) ) {
				// remove content in my account
				remove_action( 'woocommerce_before_my_account', array( YITH_WCWTL_Frontend(), 'add_waitlist_my_account' ) );
			}
		}
	}
}

new YITH_WCMAP_Waiting_List_Compatibility();