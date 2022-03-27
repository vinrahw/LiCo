<?php

namespace App\Controllers;

use App\Models\ModelUser;

class Login extends BaseController
{
    public function index()
    {
        helper(['form']);
        echo view('login_view');
    }

    public function auth()
    {
        $session = session();
        $model = new ModelUser();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $model->where('username', $username)->first();
        if ($data) {
            // $pass = $data['password'];
            $verify_pass = md5($password);
            if ($verify_pass) {
                $ses_data = [


                    'username'    => $data['username'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('pinjamlab/');
            } else {
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('login_view');
            }
        } else {
            $session->setFlashdata('msg', 'username not Found');
            return redirect()->to('login_view');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('login_view');
    }
} 


    // public function index()
    // {
    //     $ModelUser = new \App\Models\ModelUser();
    //     $login = $this->request->getPost('login');
    //     if ($login) {
    //         $username = $this->request->getPost('username');
    //         $password = $this->request->getPost('password');

    //         // dd($password);

    //         if ($username == '' or $password == '') {
    //             $err = "silahkan masukkan username dan password";
    //         }
    //         if (empty($err)) {
    //             $dataUser = $ModelUser->where('username', $username)->first();
    //             // dd(md5($password));
    //             if ($dataUser['password'] == md5($password)) {
    //                 echo "berhasil";
    //             } else {
    //                 $err = "password tidak sesuai";
    //             }
    //         }
    //         if (empty($err)) {
    //             $dataSesi = [
    //                 'id' => $dataUser['id'],
    //                 'username' => $dataUser['username'],
    //                 'password' => $dataUser['password'],

    //             ];
    //             session()->set($dataSesi);
    //             return redirect()->to('pinjamlab');
    //         }
    //         if ($err) {
    //             session()->setFlashdata('error', $err);
    //             return redirect()->to("login");
    //         }
    //     }
    //     return view('login_view');
    // }
