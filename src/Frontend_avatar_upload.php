<?php
namespace FrontendAvatarUpload;
use FrontendAvatarUpload\Shortcodes\Shortcode as Shortcode;

class Frontend_Avatar_Upload{

  public function __construct()
  {
		register_activation_hook( FRONTEND_AVATAR_UPLOAD_PLUGIN_PATH.'/'.FRONTEND_AVATAR_UPLOAD_PLUGIN_FILE, array($this, 'plugin_activated'));
    register_deactivation_hook( FRONTEND_AVATAR_UPLOAD_PLUGIN_PATH.'/'.FRONTEND_AVATAR_UPLOAD_PLUGIN_FILE, array($this, 'plugin_deactivated'));

    $this->_init();
	}

	public function plugin_activated()
	{
    
	}

	public function plugin_deactivated()
	{

	}

	protected function _init()
	{
    new Shortcode;
	}

}
