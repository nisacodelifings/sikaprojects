
<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['signin']))
{
    $uname=$_POST['username'];
    $password=md5($_POST['password']);
    $sql ="SELECT EmailId,Password,Status,id FROM tblemployees WHERE EmailId=:uname and Password=:password";
    $query= $dbh -> prepare($sql);
    $query-> bindParam(':uname', $uname, PDO::PARAM_STR);
    $query-> bindParam(':password', $password, PDO::PARAM_STR);
    $query-> execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    if($query->rowCount() > 0)
    {
        foreach ($results as $result) {
            $status=$result->Status;
            $_SESSION['eid']=$result->id;
        }
        if($status==0)
        {
            $msg="Akun kamu belum aktif, Silahkan hubungi admin";
        } else{
            $_SESSION['emplogin']=$_POST['username'];
            echo "<script type='text/javascript'> document.location = 'emp-changepassword.php'; </script>";
        } }
        
        else{
            
            echo "<script>alert('Email/Password anda salah');</script>";
            
        }
        
    }
    
    ?><!DOCTYPE html>
    <html lang="en">
    <head>
    
    <!-- Title -->
    <title>WP Approval </title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta charset="UTF-8">
    <meta name="description" content="Responsive Admin Dashboard Template" />
    <meta name="keywords" content="admin,dashboard" />
    <meta name="author" content="Steelcoders" />
    
    <!-- Styles -->
    <link type="text/css" rel="stylesheet" href="assets/plugins/materialize/css/materialize.min.css"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
    <style>
    body{
        font-family: 'Sriracha', cursive;  
    }
    </style>
    <!-- Theme Styles -->
    <link href="assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
    
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        </head>
        <body>
        <div class="loader-bg"></div>
        <div class="loader">
        <div class="preloader-wrapper big active">
        <div class="spinner-layer spinner-blue">
        <div class="circle-clipper left">
        <div class="circle"></div>
        </div><div class="gap-patch">
        <div class="circle"></div>
        </div><div class="circle-clipper right">
        <div class="circle"></div>
        </div>
        </div>
        <div class="spinner-layer spinner-spinner-teal lighten-1">
        <div class="circle-clipper left">
        <div class="circle"></div>
        </div><div class="gap-patch">
        <div class="circle"></div>
        </div><div class="circle-clipper right">
        <div class="circle"></div>
        </div>
        </div>
        <div class="spinner-layer spinner-yellow">
        <div class="circle-clipper left">
        <div class="circle"></div>
        </div><div class="gap-patch">
        <div class="circle"></div>
        </div><div class="circle-clipper right">
        <div class="circle"></div>
        </div>
        </div>
        <div class="spinner-layer spinner-green">
        <div class="circle-clipper left">
        <div class="circle"></div>
        </div><div class="gap-patch">
        <div class="circle"></div>
        </div><div class="circle-clipper right">
        <div class="circle"></div>
        </div>
        </div>
        </div>
        </div>
        <div class="mn-content fixed-sidebar">
        <header class="mn-header navbar-fixed">
        <nav class="blue-grey darken-1">
        <div class="nav-wrapper row">
        <section class="material-design-hamburger navigation-toggle">
        <a href="#" data-activates="slide-out" class="button-collapse show-on-large material-design-hamburger__icon">
        <span class="material-design-hamburger__layer"></span>
        </a>
        </section>
        <div class="header-title col s11">
        <span class="chapter-title">Sistem Izin Kerja</span>
        </div>
        
        </form>
        <style>
        @media (max-width: 939px){
            
            .oh {
                padding: 2px;
            }
            .oke{
                font-size: 10px;
            }
            .oye{
                display:none;
            }
        }
        
        @media (min-width: 940px){
            .oke{
                display: none;
            }
            .oh {
                padding: 2px;
            }
            .oye{
                font-size: 10px;}
                
            }
            </style>
            
            </div>
            </nav>
            </header>
            
            
            <aside id="slide-out" class="side-nav white fixed">
            <div class="side-nav-wrapper">
            
            
            <ul class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion" style="">
            <li>&nbsp;</li>
            <li class="no-padding"><a class="waves-effect waves-grey" href="index.php"><i class="material-icons">account_box</i>Login/Signup</a></li>
            
            <li class="no-padding"><a class="waves-effect waves-grey" href="admin/"><i class="material-icons">account_box</i>Admin</a></li>
            
            </ul>
            <div class="footer">
            <p class="copyright" style="color:grey">The code is Maintained by <a  href="https://mynisapinklava.netlify.com/">nisapinklava</a></p>
            
            </div>
            </div>
            </aside>
            <main class="mn-inner">
            <div class="row">
            <div class="col s12">
            <div class="page-title">
            <center>  
            <img src="images/logopln.png" width="50%" alt=""><br>
            <p><a href="https://www.pln.co.id">PT. PLN (Persero) UPP JJBB2</a></p>
            </center>
            
            <div class="col s12 m6 l8 offset-l2 offset-m3">
            <div class="card white darken-1">
            
            <div class="card-content ">
            
            <?php if($msg){?><div class="errorWrap"><strong>Error</strong> : <?php echo htmlentities($msg); ?> </div><?php }?>
            <div class="row">
            
            <form class="col s12" name="signin" method="post" style="padding-top: 20px">
            <div class="input-field col s12">
            <input style="padding-left: 10px" id="username" type="text" name="username" 
            class="validate" autocomplete="off" required >
            <label style="padding-left: 10px" for="email">Email</label>
            </div>
            
            <div class="input-field col s12">
            <input style="padding-left: 10px" id="password" type="password" class="validate" 
            name="password" autocomplete="off" required>
            <label style="padding-left: 10px" for="password">Password</label>
            </div>
            
            <input style="width: 175px" type="submit" name="signin" value="Masuk ke dashboard" class="waves-effect oh waves-light btn blue-grey dark-1">
            
            <div class="col s12 left-align m-t-sm oke">
            <a style="font-size: 12px;margin-right:5px" href="signup.php">Buat akun</a> <span style="text-transform:lowercase">atau</span> 
            <a href="forgot-password.php" style="font-size: 12px;margin-left:5px">Lupa password?</a><br>
            
            </div>
            <div class="col s12 left-align m-t-sm oye">
            <a style="font-size: 12px;margin-right:5px" href="signup.php">Buat akun</a> <span style="text-transform:lowercase;">|</span>  
            <a href="forgot-password.php" style="font-size: 12px;margin-left:5px">Lupa password?</a><br>
            
            </div>
            </form>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </main>
            
            </div>
            <div class="left-sidebar-hover"></div>
            
            <!-- Javascripts -->
            <script src="assets/plugins/jquery/jquery-2.2.0.min.js"></script>
            <script src="assets/plugins/materialize/js/materialize.min.js"></script>
            <script src="assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
            <script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
            <script src="assets/js/alpha.min.js"></script>
            
            </body>
            </html>
