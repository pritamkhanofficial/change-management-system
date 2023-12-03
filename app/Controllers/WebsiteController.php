<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Website\UserM;

class WebsiteController extends BaseController
{
    public function userlogin()
    {
        // $session = session();
        // if($this->request->getMethod()=='post' and $this->request->getVar('submit') == 'submit'){

        //     $rules = [
        //         'username' => 'required|max_length[10]',
        //         'email'    => 'required|max_length[10]|valid_email',
        //         'password' => 'required|max_length[255]|min_length[10]',
        //     ];
        //     if(!$this->validation($rules)){
        //         session()->setFlashdata('failed','please fill all details');
        //         session()->markAsFlashdata('failed');
        //         return redirect()->to(base_url('user_login'));
        //     }else{
        //         $insert_data=[
        //                   'username'   =>$this->request->getPost('username'),
        //                   'email'      =>$this->request->getPost('email'),
        //                   'password'   =>$this->request->getPost('password')
        //         ];
        //         $model = new UserM();
        //         $result=$model->user_login($insert_data);
        //         if($result){
        //         session()->setFlashdata('success','user login successfully');
        //         session()->markAsFlashdata('success');
        //         return redirect()->to(base_url('user_login'));
        //         }else{
        //             session()->setFlashdata('failed','user login not successfully');
        //         session()->markAsFlashdata('failed');
        //         return redirect()->to(base_url('user_login'));
        //         }
        //     }

        // }
        return view('website/user_login');
    }

    public function myaccount(){
     
        return view('website/user_account');
    }
}