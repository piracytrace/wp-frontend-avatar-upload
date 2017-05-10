<?php
namespace FrontendAvatarUpload\Shortcodes;

class Shortcode{

	public function __construct(){

		add_action( 'wp_ajax_avatar_action', array($this,'avatar_upload_action_callback') );

		add_filter( 'ajax_query_attachments_args', array($this,'show_current_user_attachments'), 10, 1 );

		add_shortcode( 'frontend_avatar_upload', array( $this, 'frontend_avatar_upload_view' ) );

  }

  public function frontend_avatar_upload_view()
  {
      $current_user_id = wp_get_current_user()->ID;

      $profile_avatar = get_user_meta($current_user_id,'_fau_url',true);

			wp_register_script( 'faujs', FRONTEND_AVATAR_UPLOAD_PLUGIN_URL.'js/fau.js', array('jquery'));
			wp_enqueue_script( 'faujs');

			wp_localize_script( 'faujs', 'ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );

			wp_register_style('faucss',FRONTEND_AVATAR_UPLOAD_PLUGIN_URL.'css/fau.css');
	    wp_enqueue_style('faucss');

			wp_enqueue_media();

			require 'Views/frontend_avatar_upload_view.php';
	}

	public function show_current_useir_attachments( $query = array() ) {
		$roles = wp_get_current_user()->roles;
		if(in_array('subscriber',$roles)){

	    $user_id = get_current_user_id();
	    if( $user_id ) {
	        $query['author'] = $user_id;
	    }
	    return $query;
		}
	}

	public function avatar_upload_action_callback()
	{
			update_user_meta(wp_get_current_user()->ID, '_fau_url', $_POST['url']);
			wp_die();
	}
}
