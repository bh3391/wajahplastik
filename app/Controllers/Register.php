<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Register extends BaseController
{
	public function index()
	{
		helper(['form']);
		$data['judul'] = 'Register Admin';
        echo view('Admin/_register', $data);
	}
	public function save()
    {
        //include helper form
		$data['judul'] = 'Register Admin';
        helper(['form']);
        //set rules validation form
        $rules = [
            'name'          => 'required|min_length[3]|max_length[20]',
            'email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.user_email]',
            'password'      => 'required|min_length[6]|max_length[200]',
            'confpassword'  => 'matches[password]'
        ];
         
        if($this->validate($rules)){
            $model = new UserModel();
            $data = [
                'user_name'     => $this->request->getVar('name'),
                'user_email'    => $this->request->getVar('email'),
                'user_password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
			
            $model->save($data);
            return redirect()->to('/Login');
        }else{
            $data['validation'] = $this->validator;
            echo view('Admin/_register', $data);
        }
         
    }
}
