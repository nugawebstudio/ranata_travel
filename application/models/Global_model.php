<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Community Auth - Auth_model Model
 *
 * Community Auth is an open source authentication application for CodeIgniter 3
 *
 * @package     Community Auth
 * @author      Robert B Gottier
 * @copyright   Copyright (c) 2011 - 2018, Robert B Gottier. (http://brianswebdesign.com/)
 * @license     BSD - http://www.opensource.org/licenses/BSD-3-Clause
 * @link        http://community-auth.com
 */

class Global_model extends MY_Model {

	/**
	 * Check the user table to see if a user exists by username or email address.
	 *
	 * While this query is rather limited, you could easily join with
	 * other custom tables, and return specific user profile data.
	 * 
	 * @param   string  either the username or email address of a user
	 * @return  mixed   either query data as object or FALSE
	 */
	public function get_list_menu()
	{
		return $this->db->get('sys_menus');

	}
}