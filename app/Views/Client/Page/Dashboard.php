<?php $this->extend('client/template/default') ?>

<?php $this->section('content') ?>
<!-- <h3>Dashboard</h3> -->
<p style="color: #666;font-size: 25px;font-weight: 300;">Dashboard</p>
<form action="">
    <label for="email">Email</label>
    <br>
    <input type="text" name="email" placeholder="Email">
    <br>

    <label for="password">Password:</label>
    <br>
    <input type="password" name="password" placeholder="Password">
    <br>
    <input type="checkbox"> Remember Me.
    <br>
    <button type="button" class="preloader-btn">Submit</button>
    
    
    <br>
    <a href="">Forgot password?</a>
</form>

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