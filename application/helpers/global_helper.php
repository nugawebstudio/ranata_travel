<?php  
defined('BASEPATH') or exit('No direct script access allowed');

if( ! function_exists('get_menus') )
{
	function get_menus( )
	{
		$CI =& get_instance();

		$data = $CI->Global_Model->get_list_menu();

		// foreach($data->result() as $row){
		// 	echo '<a href="#">
  //           <i class="fa fa-dashboard"></i> <span>'.$row->caption.'</span>
  //           <span class="pull-right-container">
  //             <i class="fa fa-angle-left pull-right"></i>
  //           </span>
  //         </a>';
		// }

		return $data;
		
	}
}