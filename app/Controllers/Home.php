<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Home extends BaseController
{
    private $product;
    private $userModel;


    public function __construct()
    {
        $this->product = new \App\Models\ProductModel();
        $this->userModel = new \App\Models\UserModel();
    }

    public function delete($id)
    {
        $this->product->delete($id);
        return redirect()->to('/product');
        return view('index');
    }

    public function edit($id)
    {
        $data = [
        'product' => $this->product->findAll(),
        'pro' => $this->product->where('id', $id)->first(),
        ];
        return view('index', $data);
    }

    public function save()
    {
        $id =$_POST['id'];
        $productData = [
            'pname' => $this->request->getVar('pname'),
            'pprice' => $this->request->getVar('pprice'),
            'pdescription' => $this->request->getVar('pdescription'),
            'pimage' => $this->request->getVar('pimage'),
        ];
            if($id!= null)
                {
                    $this->product->set($productData)->where('id', $id)->update();
                }
                else{
                    $this->product->insert($productData);
                }
                return view('index');
    }

    public function product($product)
    {
        echo $product;
    }

    public function CaibalLester()
    {
        $data['product'] = $this->product->findAll();
        return view('index', $data);
    }

    public function index(): string
    {
        $data['product'] = $this->product->findAll();
        return view('index', $data);
    }

  


    public function register()
    {
        helper(['form']);
        $rules = [
            'username' => 'required|min_length[100]|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[4]|max_length[50]',
            'confirmpassword' => 'matches[password]',
        ];

        if ($this->validate($rules)) {
            $userModel = new UserModel();
            $data = [
                'username' => $this->request->getVar('username'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $userModel->save($data);
            return redirect()->to('/signin');
        } 
        else 
        {
            $data['validation'] = $this->validator;
            echo view('register', $data);
        }
    }

    public function LoginAuth()
    {
        $session = session();
        $userModel = new UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $data = $userModel->where('username', $username)->first();

        if($data)
        {
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if($authenticatePassword)
            {
                $ses_data = [
                    'id' => $data['id'],
                    'username' => $data['username'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/profile');
            }
            else
            {
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to('/signin');
            }
        }
        else
        {
            $session->setFlashdata('msg', 'Email does not exist.');
            return redirect()->to('/signin');
        }
    }
}
