<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="<?= base_url("vendor/stint/style/login_page_style.css")?>" rel="stylesheet">
    <title>Login</title>
</head>
<body>
<div class="container_main">
        <div class="input-container">
            <?php if ($this->session->flashdata('error_message')): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $this->session->flashdata('error_message'); ?>
                </div>
            <?php endif; ?>
            <h4 class="login_heading">Login</h4>

            <label class="login_text">How to i get started lorem ipsum dolor at?</label>

            <?php echo validation_errors(); ?>


            <?php echo form_open('login/process_login'); ?>


            <!-- /////////username input field ////////-->
            <div class="login_input_div_1">
                <img src="<?= base_url("vendor/stint/media/Frame(1).png")?>" style="width: 24px; height: 24px; flex-shrink: 0; margin-left: 3%;" alt=""/>
                <input type="text" class="login_input_field" id="fname" name="username" placeholder="Username"/>
            </div>

            <!-- ////////password input field//////// -->
            <div class="login_input_div_2">
                <img src="<?= base_url("vendor/stint/media/Frame.png")?>" style="width: 24px; height: 24px; flex-shrink: 0; margin-left: 3%;" alt=""/>
                <input type="password" class="login_input_field" id="fpassword" name="password" placeholder="password" required>
            </div>

            <!-- ///////submit button/////// -->
            <button type="submit" class="login_button"><span class="login_button_text" style="color: #fff;">Login Now</span></button>

                
            <?php echo form_close(); ?>
            <!-- ///////login with other account/////// -->
            <label class="login_with_others"><span class="login_others_text">Login</span> with others</label>
            
            <!-- ///////login with Google account/////// -->
            <div class="conn_with_google">
                <img src="<?=base_url("vendor/stint/media/google_logo.png")?>" style="width: 30px; height: 30px; flex-shrink: 0" alt=""/>
                <label class="login_with_google" for="">login with <span>Google</span></label>
            </div>
        </div>

        <!-- ///////side image of login page/////// -->
        <div class="image-container">
            <img src="<?=base_url("vendor/stint/media/side_image_login.png")?>" alt="Your Image">
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>