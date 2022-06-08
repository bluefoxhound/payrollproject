<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payroll Project</title>
    <link rel="stylesheet" href="<?php echo base_url('resource/css/main.css?'.time()); ?>">
    <link rel="icon" href="<?php echo base_url('favicon.ico?'.time()); ?>" />
    <script src="https://kit.fontawesome.com/b2dc49f891.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body class="page" data-url="<?php echo base_url(); ?>">
    <div class="header">
        <ul class="navbar">
            <li>
                <a href=""><i class="fa-solid fa-bars"></i></a>
                <a href="<?php echo base_url('dashboard'); ?>"><i class="fa-solid fa-house-user"></i></a>
                <a href=""><i class="fa-regular fa-message"></i></a>
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

    <div class="content">
        <?php $this->renderSection('content') ?>
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

</body>
</html>