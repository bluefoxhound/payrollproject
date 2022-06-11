<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payroll Project</title>
    <link rel="stylesheet" href="<?php echo base_url('resource/css/main.css?'.time()); ?>">
    <link rel="stylesheet" href="<?php echo base_url('resource/css/client.css?'.time()); ?>">
    <link rel="icon" href="<?php echo base_url('favicon.ico?'.time()); ?>" />
    <script src="https://kit.fontawesome.com/b2dc49f891.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body class="page" data-url="<?php echo base_url(); ?>">
    <div class="header">
        <ul class="navbar">
            <li>
                <a href=""><i class="fa-solid fa-bars"></i></a>
            </li>
            <li>
                <a>
                    <input type="text" name="search" placeholder="Search...">
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('dashboard'); ?>"><i class="fa-solid fa-house-user"></i></a>
            </li>
            <li>
                <a href=""><i class="fa-regular fa-message"></i></a>
            </li>
            <li>
                <a href=""><i class="fa-solid fa-bell"></i></a>
                
            </li>
        </ul>

        <ul class="menu">
            
            <li>
                <a href="<?php echo base_url('site/login'); ?>">Rafman Catamora <i class="fa-solid fa-caret-down"></i></a>
            </li>
            <li>
                <img src="<?php echo base_url('resource/img/main/me.jpg'); ?>" alt="">
            </li>
        </ul>
    </div>

    <div style="position: relative;">
        <div class="sidebar">
            <ul>
                <li>
                    <a href="<?php echo base_url('dashboard'); ?>">
                        <i class="fa-solid fa-house"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('account'); ?>">
                        <i class="fa-solid fa-user-group"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('payroll'); ?>">
                    <i class="fa-solid fa-money-check-dollar"></i>
                    </a>
                </li>
                <li>
                    <a href="">
                    <i class="fa-regular fa-address-card"></i>
                    </a>
                </li>
                <li>
                    <a href="">
                    <i class="fa-regular fa-calendar"></i>
                    </a>
                </li>
                <li>
                    <a href="">
                    <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                </li>
                <li>
                    <a href="">
                    <i class="fa-solid fa-cart-shopping"></i>
                    </a>
                </li>
                <li>
                    <a href="">
                    <i class="fa-regular fa-copy"></i>
                    </a>
                </li>
                <li>
                    <a href="">
                    <i class="fa-solid fa-envelope"></i>
                    </a>
                </li>
                <li>
                    <a href="">
                    <i class="fa-regular fa-image"></i>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa-solid fa-chart-line"></i>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa-solid fa-power-off"></i>
                    </a>
                </li>
            </ul>
        </div>

        <div class="content">
            <?php $this->renderSection('content') ?>
        </div>
    </div>
    

    <div class="preloader">
        <div class="preloader-screen">
        </div>
        <div class="preloader-box">
            <p>LOADING</p>
            <svg version="1.1" id="L4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 38 55 100" enable-background="new 0 0 0 0" xml:space="preserve">
                <circle fill="#ffffff" stroke="none" cx="6" cy="50" r="6">
                    <animate
                        attributeName="opacity"
                        dur="1s"
                        values="0;1;0"
                        repeatCount="indefinite"
                        begin="0.1"/>
                </circle>
                <circle fill="#ffffff" stroke="none" cx="26" cy="50" r="6">
                    <animate
                        attributeName="opacity"
                        dur="1s"
                        values="0;1;0"
                        repeatCount="indefinite" 
                        begin="0.2"/>
                </circle>
                <circle fill="#ffffff" stroke="none" cx="46" cy="50" r="6">
                    <animate
                        attributeName="opacity"
                        dur="1s"
                        values="0;1;0"
                        repeatCount="indefinite" 
                        begin="0.3"/>
                </circle>
            </svg>
        </div>
    </div>

    <?php $this->renderSection('javascript') ?>
    <script>
        $(document).ready(function(){
            var page = window.location.pathname;
            var link = page.substr(1,page.length);
            var val = 1;
            
            if (link=='dashboard')val = 1;
            if (link=='account')val = 2;
            if (link=='payroll')val = 3;

            var elem2 = document.querySelector('.sidebar ul li:nth-child('+val+') a');
            elem2.classList.add('active');
        });
    </script>

</body>
</html>