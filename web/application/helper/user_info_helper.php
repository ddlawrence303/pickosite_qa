<?
	if(!defined('BASEPATH')) echo('No direct script access allowed');
	include_once('application/controllers/webcontrollers.php');

	/*
	custom routing style
	ex:
	/user/{$MID} => /user/index/{$MID}
	/user/{$MID}/gallery_items => /user/gallery_items/{$MID}
	詳見 /application/config/routes.php　
	*/

	class User extends webcontrollers
	{
		public function __construct()
		{
			parent::__construct();
			$this->perpage = 20;
			$this->load->helper('format_helper');
		}

		//setting index function
		public function index($MID, $type = null)
		{
			//check $user
			if(!$user = MemberModel::find(intval($MID))){
				return header('Location: /'); //return current url
			}

			$user_data = $this->_get_user_data($user);
		}

		public function gallery_items($MID)
		{

		}

		public function user_submits($MID)
		{

		}

		public function ajax_more_gallery_items($MID)
		{

		} 

		public function ajax_more_user_submits($MID)
		{

		}

		private function _get_user_data($user)
		{

		}

		private function _get_gallery_item_datas($gallery_items)
		{

		}

		private function _get_user_submit_datas($user_submits)
		{


		}

	}
?>
