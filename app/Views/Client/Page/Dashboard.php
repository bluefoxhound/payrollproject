<?php $this->extend('client/template/default') ?>

<?php $this->section('content') ?>
<h3>Dashboard</h3>
<button class="preloader-btn">Preloader</button>
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

<?php $this->section('javascript') ?>
<script>
$(document).ready(function(){
    $('body').on('click','.preloader-btn',function(){
        $('.preloader').show();
    });
});
</script>
<?php $this->endSection() ?>