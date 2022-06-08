<?php $this->extend('site/template/default') ?>

<?php $this->section('content') ?>
<h2>Payroll Project</h2>
<img src="<?php echo base_url('resource/img/main/sample1.png?'.time()); ?>" alt="">
<form>
    <label for="email">Email</label>
    <input type="text" name="email" placeholder="Email">
    <label for="password">Password</label>
    <input type="password" name="password" placeholder="Password">
    <button class="login-btn">Login</button>
    <a href="<?php echo base_url('dashboard'); ?>">Login</a>
</form>
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