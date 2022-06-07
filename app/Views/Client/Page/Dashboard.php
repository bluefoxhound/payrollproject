<?php $this->extend('site/template/default') ?>

<?php $this->section('content') ?>
<h2>Payroll Project</h2>
<?php
    $db = db_connect();
    $builder = $db->table('user_tb');
    $builder->select('*');
    $query = $builder->get();

    // var_dump($query->getResultArray());

    // foreach ($query->getResultArray() as $key => $value) {
    //     echo $value['uid'].' '.$value['uemail'];
    // }
?>
<?php $this->endSection() ?>