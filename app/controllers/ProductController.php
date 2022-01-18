<?php
declare(strict_types=1);

class ProductController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $prod = Product::find();
        $this->view->data = $prod;
    }

    public function insertDataAction()
    {
        $fileName = '';

        if ($this->request->hasFiles() == true) {
            $uploads        = $this->request->getUploadedFiles();
            $upload         = $uploads[0];
            $getExtension   = $upload->getExtension();
            $fileName       = md5((string)time()) .'.'. $getExtension;
            $path           = 'temp/'. $fileName;
            $upload->moveTo($path);
        }

        $prod = new Product();
        $prod->name         = $this->request->getPost("name");
        $prod->price        = $this->request->getPost("price");
        $prod->description  = $this->request->getPost("description");
        $prod->image        = $fileName;
        $prod->save();

        return $this->response->redirect('phalcon_project/product');
    } 

    public function viewDataAction()
    {
        $prod = Product::find();
        $this->view->data = $prod;
    }  

    public function formInsertDataAction()
    {
    }  

    public function formUpdateDataAction($id)
    {
        $prod = Product::findFirstById($id);
        $this->view->id          = $prod->id;
        $this->view->name        = $prod->name;
        $this->view->price       = $prod->price;
        $this->view->description = $prod->description;
        $this->view->image       = $prod->image;
    }  

    public function updateDataAction(){
        $id                 = $this->request->getPost("id");
        $prod               = Product::findFirstById($id);
        $prod->name         = $this->request->getPost("name");
        $prod->price        = $this->request->getPost("price");
        $prod->description  = $this->request->getPost("description");
        $prod->update();

        if ($this->request->hasFiles() == true) {
            $uploads        = $this->request->getUploadedFiles();
            $upload         = $uploads[0];
            $getExtension   = $upload->getExtension();
            $fileName       = md5((string)time()) .'.'. $getExtension;
            $path           = 'temp/'. $fileName;
            $moved = $upload->moveTo($path);

            if ($moved) {
                $id             = $this->request->getPost("id");
                $prod           = Product::findFirstById($id);
                $prod->image    = $fileName;
                $prod->update();

                unlink('temp/'. $this->request->getPost("tmpImage"));
            }
        }

        return $this->response->redirect('phalcon_project/product');
    } 

    public function deleteDataAction($id)
    {
        $prod   = Product::findFirstById($id);
        $image  = $prod->image;
        $res    = $prod->delete();

        if ($res) {
            unlink('temp/'. $image);

            echo json_encode(
                array(
                    'result' => 'success'
                )
            );
        } else {
            echo json_encode(
                array(
                    'result' => 'failed'
                )
            );
        }
    } 


}

