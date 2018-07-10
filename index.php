<?php
//Include GP config file && User class
include_once 'gpConfig.php';
include_once 'User.php';

if(isset($_GET['code'])){
    $gClient->authenticate($_GET['code']);
    $_SESSION['token'] = $gClient->getAccessToken();
    header('Location: ' . filter_var($redirectURL, FILTER_SANITIZE_URL));
}

if (isset($_SESSION['token'])) {
    $gClient->setAccessToken($_SESSION['token']);
}


if ($gClient->getAccessToken()) {
    //Get user profile data from google
    $gpUserProfile = $google_oauthV2->userinfo->get();
    
    //Initialize User class
    $user = new User();
    
    //Insert or update user data to the database
    $gpUserData = array(
        'oauth_provider'=> 'google',
        'oauth_uid'     => $gpUserProfile['id'],
        'first_name'    => $gpUserProfile['given_name'],
        'last_name'     => $gpUserProfile['family_name'],
        'email'         => $gpUserProfile['email'],
        'locale'        => $gpUserProfile['locale'],
        'picture'       => $gpUserProfile['picture'],
        'link'          => $gpUserProfile['link']
    );
    $userData = $user->checkUser($gpUserData);
    
    //Storing user data into session
    $_SESSION['userData'] = $userData;
    $_SESSION['userID'] = $userData['id'];
   
    //Render facebook profile data
    if(!empty($userData)){

        $check = explode("@", $userData['email']);

        if($check[1] === "tuahpacket.net"){
            header('Location: dashboard/');
        }else{
            $output = '<script>alert("Your not using Tuah Packet email");window.location.href = "logout.php";</script>';
            
        }

        
    }else{
        $output = '<h3 style="color:red">Some problem occurred, please try again.</h3>';
    }
} else {
    $authUrl = $gClient->createAuthUrl();
    $output = '<a href="'.filter_var($authUrl, FILTER_SANITIZE_URL).'" align="center"><img src="images/glogin.png" style="width:300px;" alt=""/></a>';
}

?>

<!doctype html>
<html lang="en"> 
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Track Record System</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="lib/font-awesome-4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="lib/MDB/css/bootstrap.min.css" >
    <!-- Material Design Bootstrap -->
<!--     <link href="lib/MDB/css/mdb.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="lib/materialize/css/materialize.min.css" >
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">

    <title>Hello, world!</title>
  </head>
  <body>
      <div class="container login-container">
        <div class="col-md-5 col-sm-12">
          <!-- Card -->
          <div class="card login-card"> 

           <!-- Card image -->
           <div class="view overlay">
             <img class="card-img-top" src="img/login-img.png" alt="Card image cap">
             <a href="#!">
               <div class="mask rgba-white-slight"></div>
             </a>
           </div>
           <!-- Card content -->
           <div class="card-body">

            <!-- Title -->
            <h4 class="card-title text-center h3">Track Record System</h4>
            <!-- Text -->
            <!-- Material form login -->
            <form>
              <p class="h4 text-center mb-4">Sign in</p>

              <div class="text-center mb-4"><?php echo $output; ?></div>


            </form>
            <!-- Material form login -->

          </div>

        </div>
        <!-- Card -->


      </div>
    </div>
    <h1></h1>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="lib/MDB/js/jquery-3.2.1.min.js"></script>
    <script src="lib/MDB/js/popper.min.js"></script>
    <script src="lib/MDB/js/bootstrap.min.js"></script>
    <script src="lib/materialize/js/materialize.min.js"></script>
    <!-- <script type="text/javascript" src="lib/MDB/js/mdb.min.js"></script> -->
  </body>
</html>