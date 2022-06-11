<?php $this->extend('client/template/default') ?>

<?php $this->section('content') ?>
<!-- <h3>Dashboard</h3> -->
<p style="color: #666;font-size: 25px;font-weight: 300;">Accounts</p>
<br>

<div class="table">
    <form action="">
        <ul>
            <li class="th w20">&nbsp;</li>
            <li class="th w50">UID <i class="fa-solid fa-caret-down"></i></li>
            <li class="th w300">NAME <i class="fa-solid fa-caret-down"></i></li>
            <li class="th w300">EMAIL <i class="fa-solid fa-caret-down"></i></li>
            <li class="th w100">STATUS <i class="fa-solid fa-caret-down"></i></li>
            <li class="th w100">ROLE <i class="fa-solid fa-caret-down"></i></li>
            <li class="th w200">OPTION</li>
        </ul>
        <?php
            $db = db_connect();
            $builder = $db->table('user_tb');
            $builder->select('*');
            $query = $builder->get();

            // var_dump($query->getResultArray());

            foreach ($query->getResultArray() as $key => $value) {
                echo '<ul>
                        <li class="w20"><input type="checkbox"></li>
                        <li class="w50">'.$value['uid'].'</li>
                        <li class="w300">'.ucwords ($value['ufname'].' '.$value['ulname']).'</li>
                        <li class="w300">'.$value['uemail'].'</i></li>
                        <li class="w100">'.$value['ustatus'].'</li>
                        <li class="w100">'.$value['urole'].'</li>
                        <li class="w200">
                            <a href="">Profile</a>
                            <a href="">| Edit</a>
                            <a href="">| Delete</a>
                        </li>
                    </ul>';
            }
        ?>
        <br>
        <button type="button">Delete</button>
    </form>
</div>

<br><br>
<form action="">
    <p style="color: #666;font-size: 25px;font-weight: 300;">Create Account</p>
    <br>
    <label for="firstname">Firstname:</label><br>
    <input type="text" name="firstname" placeholder="Firstname">

    <br>
    <label for="lastname">Lastname:</label><br>
    <input type="text" name="lastname" placeholder="Lastname">

    <br>
    <label for="email">Email:</label><br>
    <input type="text" name="email" placeholder="Email">

    <br>
    <label for="status">Status:</label><br>
    <select name="status">
        <option value="">Choose...</option>
        <option value="1">Active</option>
        <option value="0">Incative</option>
        <option value="2">Blocked</option>
    </select>

    <br>
    <label for="role">Role:</label><br>
    <select name="role">
        <option value="">Choose...</option>
        <option value="1">Admin</option>
        <option value="2">Manager</option>
        <option value="3">Staff</option>
        <option value="4">Employee</option>
    </select>

    <br>
    <br>
    <button type="button">Submit</button>
</form>

<br><br>
<form action="">
    <p style="color: #666;font-size: 25px;font-weight: 300;">Update Account</p>
    <br>
    <label for="firstname">Firstname:</label><br>
    <input type="text" name="firstname" placeholder="Firstname">

    <br>
    <label for="lastname">Lastname:</label><br>
    <input type="text" name="lastname" placeholder="Lastname">

    <br>
    <label for="email">Email:</label><br>
    <input type="text" name="email" placeholder="Email">

    <br>
    <label for="status">Status:</label><br>
    <select name="status">
        <option value="">Choose...</option>
        <option value="1">Active</option>
        <option value="0">Incative</option>
        <option value="2">Blocked</option>
    </select>

    <br>
    <label for="role">Role:</label><br>
    <select name="role">
        <option value="">Choose...</option>
        <option value="1">Admin</option>
        <option value="2">Manager</option>
        <option value="3">Staff</option>
        <option value="4">Employee</option>
    </select>

    <br>
    <br>
    <button type="button">Submit</button>
</form>

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