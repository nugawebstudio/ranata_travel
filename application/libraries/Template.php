<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Template {

    public function render($view, $data = array()) {
        $ci = get_instance();

        $view_data['content_view'] = $view;
        $view_data['navbar_top'] = "templates/layouts/header";
        $view_data['sidebar_menu'] = "templates/layouts/sidebar_menu";
        
        $view_data = array_merge($view_data, $data);
        
        $ci->load->view('templates/index', $view_data);
    }

    // public function render_front($view, $data = array()) {
    //     $ci = get_instance();

    //     $view_data['content_view'] = $view;
        
    //     $view_data = array_merge($view_data, $data);
        
    //     $ci->load->view('templates/index_front', $view_data);
    // }

}
