<?php
require("config.php");

if(isset($_REQUEST['code'])){

	$tocken=$gclient->fetchAccessTokenWithAuthCode($_REQUEST['code']);
	$_SESSION['token']=$tocken;
}


$oAuth=new Google_Service_Oauth2($gclient);
$userData=$oAuth->userinfo_v2_me->get();
$_SESSION['userData']=$userData;
$output = '<h2>Google+ Profile Details </h2>';
        $output .= '<img src="'.$userData['picture'].'">';
        $output .= '<p>Google ID : ' . $userData['id'].'</p>';
        $output .= '<p>Name : ' . $userData['name'].'</p>';
        $output .= '<p>Email : ' . $userData['email'].'</p>';
        
        $output .= '<p>Logged in with : Google</p>';
        $output .= '<p><a href="'.$userData['link'].'" target="_blank">Click to visit Google+</a></p>';
        $output .= '<p>Logout from <a href="logout.php">Google</a></p>'; 
echo $output;
?>