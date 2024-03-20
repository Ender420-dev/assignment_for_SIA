<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="style.css">


    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Form</title>
</head>

<?php
$fullName = $email = $password=$passwordConfirm="";
$fullNameErr = $emailErr = $passwordErr=$passwordConfirm="";

if($_SERVER["request_method"]=="POST"){
    if(empty($_POST["fullName"])){
        $fullNameErr= "fullName is Required";
    }else{
        $fullName=$_POST["fullName"];
    }
}











?>



<body class="grey darken-4  ">
<br><br><br><br><br>
<div class="row">
    <div class="col l6 offset-l3">
        <div class="card">
            <div class="container">
                <br><br><br>
                <div class="">
                    <button id="showLogin" class="btn green">Login</button>
                    <button id="showRegister" class="btn green">Register</button>
                    <form id="loginForm" action="connect.php" method="post" style="display: block;">
                        <!-- Login form fields -->
                        <h3 class="black-text center">Login</h3>


                        <input type="email" name="Email"  placeholder="Email">
                        <input type="password" name="password" placeholder="Password">
                        <button type="submit" class="btn blue">Login</button>
                        <a href=""></a>
                    </form>
                    <form id="registerForm" style="display: none;">
                        <!-- Register form fields -->

                        <h3 class="black-text center">Register</h3>
                        <input type="text" placeholder="Full Name" name="fullName" required>
                        <input type="email" placeholder="Email" name="email" required>
                        <input type="password" id="passwordSign" name="password" placeholder="Password" required>
                        <input type="password" id="passwordConfirm" name="passwordConfirm" oninput="passMatchChecker()" placeholder="Confirm Password" required>
                        <span id="passMatch"></span>
                        <br>
                        <button type="submit" id="registerbtn" class="btn blue">Register</button>
                    </form>
                </div>
                <br><br><br><br>
            </div>
        </div>
    </div>
</div>












    
    


    <!--Import jQuery before materialize.js-->
    <script type="text/javascript " src="https://code.jquery.com/jquery-3.2.1.min.js "></script>
    <script type="text/javascript " src="js/materialize.min.js "></script>
    


    <script>
        document.getElementById('showLogin').addEventListener('click', function() {
    document.getElementById('loginForm').style.display = 'block';
    document.getElementById('registerForm').style.display = 'none';
});

document.getElementById('showRegister').addEventListener('click', function() {
    document.getElementById('loginForm').style.display = 'none';
    document.getElementById('registerForm').style.display = 'block';
});
       

        $(window).scroll(function() {
            
        })


        function checkForm(){
            const form=document.getElementById('Signup');
            const inputs=form.querySelectorAll("input[required]");
            let allFilled=true;

            inputs.forEach(function(input){


                if(input.value===""){
                    allFilled=false;
                }
            });
            return allFilled;
        }

        function passMatchChecker(){
            const pass=document.getElementById('passwordSign').value;
            const passConfirm=document.getElementById('passwordConfirm').value;
            const passMatchConfirm=document.getElementById('passMatch');
            const btnSignUp=document.getElementById('registerbtn');

            if(pass===passConfirm && pass.length>0&&checkForm()){
                passMatchConfirm.innerHTML=" Password Match";
                passMatchConfirm.style.color="green"
                btnSignUp.disabled=false;
            } else{
                passMatchConfirm.innerHTML=" Password do not Match";
                passMatchConfirm.style.color="red"
                btnSignUp.disabled=true;
            }
        }




        $('.fadein').hide();
        setTimeout(() => {

            $(document).ready(function() {
                $('.fadein').fadeIn();
                $('.fadeout').fadeOut();
                $('.parallax').parallax({
                    fullWidth: true
                });
                // Init Sidenav
                $('.count').each(function() {
                    $(this).prop('Counter', 0).animate({
                        Counter: $(this).text()
                    }, {
                        duration: 5000,
                        easing: 'swing',
                        step: function(now) {
                            $(this).text(Math.ceil(now));
                        }
                    });
                });
                $('select').material_select();


                $('.button-collapse').sideNav();
                $('.dropdown-button').dropdown({
                    constrainWidth: false,
                    hover: true,
                    belowOrigin: true,
                    alignment: 'left'
                });
                $('.scrollspy').scrollSpy();
            });
            $('.slider').slider({
                indicators: true,
                height: 400,
                transition: 2000,
                interval: 3000
            });
            $('.modal').modal({
                dismissible: true,
                inDuration: 300,
                outDuration: 200,
                ready: function(modal, trigger) {
                    console.log('Modal Open', modal, trigger);
                }
            });

        });
    </script>
</body>

</html>