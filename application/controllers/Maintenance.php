<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Maintenance extends Application {
	public function index()	{
		$role = $this->session->userdata('userrole');
		if ($role == 'user') 
            $this->data['content'] = 'You are not a authorized to access this page. Go away~!';
		else
           $this->data['content'] = 'Log in'; 
		$this->session->set_userdata('userrole', $role);
        $this->render('template'); 
	}
}