<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Home extends BaseController
{
    private $product;

    public function __construct()
    {
        $this->product = new \App\Models\ProductModel();
    }

    public function delete($id)
    {
        $this->product->delete($id);
        return redirect()->to('/product');
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

        if (save){
            return view('index');
        }
       
    }
}
