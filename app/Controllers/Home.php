<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Home extends BaseController
{
    private $product;
    private $userModel;
    private $form_validation;

    public function __construct()
    {
        $this->product = new \App\Models\ProductModel();
        $this->userModel = new \App\Models\UserModel();
        $this->form_validation = \Config\Services::validation(); 
        $this->request = \Config\Services::request();
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

    public function regis()
    {
        $data['validation'] = $this->form_validation;
        return view('register', $data);
    }


    public function register()
    {
        $rules = [
            'username' => 'trim|required|alpha',
            'password' => 'trim|required',
            'cpassword' => 'trim|required|matches[password]',
        ];

        if ($this->validate($rules)) {
             $data = [
                'username' => $this->request->getVar('username'),
                'password' => $this->request->getVar('password'),
            ];
            $this->userModel->insert($data);
            $checking = $this->userModel->User($data); 

            if ($checking) {
                $this->session->setFlashdata('status', 'Registered Successfully');
                return redirect()->to(base_url('index')); 
            } else {
                $this->session->setFlashdata('status', 'Registration Failed');
                return redirect()->to(base_url('index'));
            }
        } else {
            return view('register');
        }
    }
}
