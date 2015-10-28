<html>
<head>
<title>Response</title>
</head>
<body>

<h3 style="text-align:center;  font-family:nyala, 'Adobe Garamond Pro', Helvetica, Sans-serif;">

<?php


//oye 2013 ke web secy, khuch toh karle khud se , kitna copy karega, yes you current web secy  :P :p  -ex web secies

/**
 * Checks to see if the user has submitted his
 * username and password through the login form,
 * if so, checks authenticity in database and
 * creates session.
 */
if(isset($_POST['sublogin'])){
   /* Check that all fields were typed in */
   if(!$_POST['user'] || !$_POST['pass']){
      die('You didn\'t fill in a required field.');
   }
   /* Spruce up username, check length */
   $_POST['user'] = trim($_POST['user']);
   $_POST['user'] = stripslashes($_POST['user']);
  

   /* Verify that user is in database */
   	$ldapuid=$_POST['user'];
	$ldappass=$_POST['pass'];  // associated password
// try anonymous login to test connection 
// connect to primary 
$ds = ldap_connect( 'ldap.iitb.ac.in',389 ); 
// note: $ds is always a resource even if primary is down 
	$dn = "dc=iitb,dc=ac,dc=in";
$filter="uid=".$ldapuid;
$justthese = array("dn","uid","employeenumber");

$sr=ldap_search($ds, $dn, $filter, $justthese);
$info = ldap_get_entries($ds, $sr);
if($info["count"]<>1)
	echo "Invalid Username";
else
{
	$ldaprdn=$info[0]["dn"];
	$uid=$info[0]['uid'][0];
	$emp=$info[0]['employeenumber'][0];
	//echo $uid;
}

// connect to ldap server

if ($ds) 
{

    // binding to ldap server
    $ldapbind = ldap_bind($ds, $ldaprdn, $ldappass);
	//echo 'Binding';

    // verify binding
	if ($ldapbind) {
		$fp = fopen('gala.txt','r');
		if (!$fp) {echo 'ERROR: Unable to open file';}
		$flag=1;
		
		while(!feof($fp)) {
		  
			$line = fgets($fp,1024); //use 2048 if very long lines
			//echo $line;
			$exline=explode(',',$line);
			//echo 'Inside for loop';
			//echo $exline[0];
			//echo $uid;
			//echo strcmp($exline[0],$uid);
			//echo "\nEOF?".feof($fp);
			if(strcmp($exline[0],$uid)==0)
			{
				echo'Your respose has been recorded earlier. This one is being ignored';
				$flag=0;
				break;
			}
		//	echo "\nEOF?".feof($fp);
		}

		
		
		if($flag==1)
		
		{	
			fclose($fp);
			$out = fopen("gala.txt", "a"); 
			if (!$out) {
			print("Could not append to file");
			}
		
		$data=$_POST;
		unset($data[user]);
		unset($data[pass]);
		unset($data[sublogin]);
		$w=implode(",",$data);
		//echo $w;
		fwrite($out,PHP_EOL.$uid.",".$emp.",".$w."\n");
		echo "Your response has been recorded";
		fclose($out);
		}
	}

	 else {
        echo "Incorrect Password.";
    }

   /* Checks that username is in database and password is correct */
   
   /* Username and password correct, register session variables */
   

   /**
    * This is the cool part: the user has requested that we remember that
    * he's logged in, so we set two cookies. One to hold his username,
    * and one to hold his md5 encrypted password. We set them both to
    * expire in 100 days. Now, next time he comes to our site, we will
    * log him in automatically.
    */
}
}

/* Sets the value of the logged_in variable, which can be used in your code */
?></h3>
<FORM><INPUT TYPE='button' VALUE='Back' onClick='history.go(-1);return true;'></FORM></body></html>

