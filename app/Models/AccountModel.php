<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class AccountModel extends Model{
        protected $table = 'user_tb';
        protected $primaryKey = 'uid';
        protected $allowedFields = ['ufname','ulname','uemail','upassword','ustatus','urole','udate_created'];
    }
?>