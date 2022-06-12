<?php
    namespace App\Controllers;
    use CodeIgniter\RESTful\ResourceController;
    use CodeIgniter\API\ResponseTrait;
    use App\Models\AccountModel;

    class Account extends ResourceController{
        use ResponseTrait;

        public function index(){
            $model = new AccountModel();
            $data['user_tb'] = $model->orderBy('uid','DESC')->findAll();
            return $this->respond($data);
        }
    }
?>
