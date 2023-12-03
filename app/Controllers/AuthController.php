<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\IncomingRequest;
use App\Models\Auth;
use App\Libraries\GroceryCrud;
class AuthController extends BaseController
{
    public function login()
    {
        if (session()->get('isLoggedIn'))
        {
            return redirect()
                ->to('admin/dashboard');
        }
        if ($this->request->getVar('submit') == 'submit') {
            $rules = [
                'username' => [
                    'label' => 'Username',
                    'rules' => 'required',
                ],
                'password' => [
                    'label' => 'Password',
                    'rules' => 'required'
                ]
            ];
            if (!$this->validate($rules)) {

                return redirect()->back()->withInput();
            }
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');
            $model = new Auth();
            $user_info = $model->login($username);
            /* echo "<pre>";
            print_r($user_info);
            die; */
            if (!is_null($user_info)) {
                $authenticatePassword = password_verify($password, $user_info['password']);
                if ($authenticatePassword) {
                    $session = session();
                    $this->generateFlash([
                        'type' => 'success',
                        'title' => 'Success',
                        'message' => 'Welcome To Dashboard',
                    ]);
                    $session_data = [
                        'user' => $user_info,
                        'isLoggedIn' => TRUE
                    ];
                    $session->set($session_data);
                    return redirect()->to('admin/dashboard');
                }else{
                    $this->generateFlash([
                        'type' => 'error',
                        'title' => 'Error',
                        'message' => 'Password Missmatch',
                    ]);
                    return redirect()->to('/');
                }
                // error msg password missmatch
            }else{
                $this->generateFlash([
                    'type' => 'error',
                    'title' => 'Error',
                    'message' => 'Username Missmatch',
                ]);
                return redirect()->to('/');
            }
        }

        return view('authentication/login');
    }

    public function logout()
    {
        session()->remove('isLoggedIn');
        session()->remove('user');
        return redirect()
                ->to('/login');
    }
}