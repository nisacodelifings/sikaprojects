<?php
extract($_POST);
include('includes/config.php');
$conn = new mysqli("localhost","k5222396_elms12","akuanakcerdas12YAGA#","k5222396_elms");
$count=0;
if (isset($_POST['signup'])) {
    $firstname =$_POST['firstname'];
    $lastname =$_POST['lastname'];
    $email =$_POST['email'];
   
    $Password =$_POST['password'];
  
   
    $Address =$_POST['Address'];


    $mobileno =$_POST['telp'];
    $EmpId =$_POST['EmpId'];
    $Status ='0';

   $encryptPassword = md5($Password);
    
    $sql = "INSERT INTO tblemployees (EmpId,FirstName,LastName,EmailId,Password,Address,Phonenumber,Status) 
    VALUES (:empId,:fname,:lname,:email,:pass,:address,:mobileno,'$Status')";
    $stmt = $dbh->prepare($sql);
    $params = array(
   ':fname' => $firstname,
   ':lname' => $lastname,
   ':email' => $email,
   ':pass' => $encryptPassword,

  

   ':address' => $Address,
  
   ':mobileno' => $mobileno,
   ':empId' => $EmpId,
   );

    $saved = $stmt->execute($params);

   if($saved) header("Location: index.php");
   
}
$sql2="SELECT * FROM tblemployees WHERE Status = 0";
$result=mysqli_query($conn, $sql2);
$count=mysqli_num_rows($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
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
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
<style>
    body{
      font-family: 'Sriracha', cursive;  
    }
</style>
    <!-- Theme Styles -->
    <link href="assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>

   

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
                            <span class="chapter-title">SISTEM APLIKASI IZIN KERJA</span>
                        </div>
                        <div class="header-title col s1">
                          
                        </div>



                        </form>


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
                    <p class="copyright" style="color:grey">The code is Maintained by <a style="color: hotpink;text-decoration: underline;text-decoration-style: wavy;text-decoration-color: hotpink" href="https://nisapinklava.netlify.com/">nisapinklava.netlify.com ©</a></p>

                </div>
                </div>
            </aside>
            <main class="mn-inner">
                <div class="row">
                
                <div class="col s12">
                        <div class="page-title">
                          
                        </div>
                        
                        
			   <!-- <button id="notification-icon" name="button" onclick="myFunction()" class="dropbtn"><span id="notification-count"><?php if($count>0) { echo $count; } ?></span><i class="material-icons">notifications_none</i></button>
				 <div id="notification-latest"></div>

	<?php if(isset($success)) { ?> <div class="success"><?php echo $success;?></div> <?php } ?> -->
                    </div>
                    <div class="col s12">
                          <div class=" s12 m6 l8 offset-l2 offset-m3">
                              <div class="card white darken-1">
            
                                  <div class="card-content ">
                                      <span class="card-title" style="font-size:20px;">Buat akun</span>
                                      <p>Perhatian! Setelah anda mendaftar, anda harus menunggu persetujuan dari admin untuk bisa memasuki akun anda. JIka disetujui, maka anda harus login di halaman utama</p><br>
                                       <div class="row">
                                           <form class="col s12" name="frmNotification" onSubmit="return validate();" method="post" id="frmNotification">
                                               <div class="input-field col s12">
                                                   <input id="EmpId" type="text" name="EmpId" class="validate input-field col s6" autocomplete="off" required >
                                                   <label for="EmpId"> Username</label>
                                               </div>
                                              
                                               <div class="input-field col s6">
                                                   <input id="firstname" type="text" name="firstname" class="validate" autocomplete="off" required >
                                                   <label for="firstname">First Name</label>
                                               </div>
                                               <div class="input-field col s6">
                                                   <input id="lastname" type="text" name="lastname" class="validate" autocomplete="off" required >
                                                   <label for="lastname">Last Name</label>
                                               </div>
                                               <div class="input-field col s12">
                                                   <input id="email" type="text" name="email" class="validate" autocomplete="off" required >
                                                   <label for="email">Email</label>
                                               </div>
                                               
                                                   
                                               <div class="input-field col s6">
                                                   <input id="telp" type="number" name="telp" class="validate" autocomplete="off" required >
                                                   <label for="telp">No. Telp</label>
                                               </div>
                                               
                                               <div class="input-field col s12">
                                               </div>
                                               
                                               <div class="input-field col s6">
                                                   <input id="Address" type="text" name="Address" class="validate" autocomplete="off" required >
                                                   <label for="address">Alamat Kantor</label>
                                               </div>
                                               
                                               <div class="input-field col s12">
                                                   <input id="makepassword" type="password" class="validate" name="password" autocomplete="off" required>
                                                   <label for="password">Password</label>
                                               </div>
                                               <div class="input-field col s12">
                                                   <input type="password" id="confirm_password" name="confirm_password" autocomplete="off" class="validate" required>
                                                   <label for="password">confirm password</label>
                                               </div>
                                               <div class="col s12 right-align m-t-sm">

                                                   <input type="submit" name="signup" value="Sign up" class="waves-effect waves-light btn blue-grey dark-1">
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
    <script type="text/javascript" src="assets/js/custom.js"></script>
</body>
</html>