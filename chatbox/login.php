<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="popup.css">
     
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<style>
    body{
	margin: 0;
	padding: 0;
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	font-family: 'Jost', sans-serif;
	background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
}
.main{
	width: 350px;
	height: 500px;
	background: red;
	overflow: hidden;
	background: url("https://doc-08-2c-docs.googleusercontent.com/docs/securesc/68c90smiglihng9534mvqmq1946dmis5/fo0picsp1nhiucmc0l25s29respgpr4j/1631524275000/03522360960922298374/03522360960922298374/1Sx0jhdpEpnNIydS4rnN4kHSJtU1EyWka?e=view&authuser=0&nonce=gcrocepgbb17m&user=03522360960922298374&hash=tfhgbs86ka6divo3llbvp93mg4csvb38") no-repeat center/ cover;
	border-radius: 10px;
	box-shadow: 5px 20px 50px #000;
}
#chk{
	display: none;
}
.signup{
	position: relative;
	width:100%;
	height: 100%;
}
label{
	color: #fff;
	font-size: 1.5em;
	justify-content: center;
	display: flex;
	margin: 50px;
	font-weight: bold;
	cursor: pointer;
	transition: .5s ease-in-out;
}
input{
	width: 60%;
	height: 20px;
	background: #e0dede;
	justify-content: center;
	display: flex;
	margin: 20px auto;
	padding: 10px;
	border: none;
	outline: none;
	border-radius: 5px;
}
button{
	width: 60%;
	height: 40px;
	margin: 10px auto;
	justify-content: center;
	display: block;
	color: #fff;
	background: #573b8a;
	font-size: 1em;
	font-weight: bold;
	margin-top: 20px;
	outline: none;
	border: none;
	border-radius: 5px;
	transition: .2s ease-in;
	cursor: pointer;
}
button:hover{
	background: #6d44b8;
}
.login{
	height: 460px;
	background: #eee;
	border-radius: 60% / 10%;
	transform: translateY(-180px);
	transition: .8s ease-in-out;
}
.login label{
	color: #573b8a;
	transform: scale(.6);
}

#chk:checked ~ .login{
	transform: translateY(-500px);
}
#chk:checked ~ .login label{
	transform: scale(1);	
}
#chk:checked ~ .signup label{
	transform: scale(.6);
}

    </style>
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form method="post">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="txt" placeholder="User name" required="">
					<input type="email" name="email" placeholder="Email" required="">
                    <input type="text" name="num" placeholder="phone number" required="">
					<button name="b1" type="submit">Sign up</button>
				</form>
			</div>

			<div class="login">
				<form method="post">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="text" name="txt1" placeholder="username" required=""  ?>
					<input type="text" name="num1"  placeholder="phone number" required="">
					<button name="b3" type="submit"  >Login</button>
				</form>
			</div>
	</div>
</body>
</html>
<?php
 $pass7=0;
 date_default_timezone_set("Asia/kolkata");
 $p=date("H:i:s");
 $dat= date("Y-m-d");

 error_reporting(E_NOTICE);  
 $con=mysqli_connect("localhost","root","") or die("<br> failed to connect".mysql_error()); 
 $db=mysqli_select_db($con,"logchat") or die(mysql_error()); 

 if(isset($_POST['b1']))
 {
    $user=$_POST['txt'];
    $email=$_POST['email'];
    $no=$_POST['num'];
    
    
    $sql="insert into signup value ('$user','$email',$no)"; //query 
    $result=mysqli_query($con,$sql);
	$f=mysqli_affected_rows($con);
    if($f>0)
    {
		
		echo '<script>alert("signup succesfull please login!!") </script>';
        $sqlchck1="select * from signup where mobile<>$no";
		$result13=mysqli_query($con,$sqlchck1);
        $f7=mysqli_affected_rows($con);
        if($f7>=1 || $f7==0)
        {
        $sql2=" create table user$no ( name varchar(30), number bigint(11) )"; //query 
        $result13=mysqli_query($con,$sql2);
        $f5=mysqli_affected_rows($con);
	  
	}
	
}
else
{
	echo '<script>alert("try again") </script>';
}
 }
 else
  if(isset($_POST['b3']) )
	   {
		
		$user1=$_POST['txt1'];
		$no1=$_POST['num1'];
		
		$sqlchck="select * from signup where mobile=$no1 and username='$user1'";
		$result12=mysqli_query($con,$sqlchck);
        
        if($r=mysqli_fetch_array($result12))
        {
			$sqlchck7="select * from login";
			$x82=mysqli_query($con,$sqlchck7);
			
			while($r74=mysqli_fetch_assoc($x82))
			{
				if($r74['mobile']==$no1)
				{
					$pass7=1;
					break;
				}
			}
		
		if($pass7==1)
		{
			$sql4="update login set username='$user1',status='Y',logdate='$dat',logtime='$p' where mobile=$no1 "; //query 
             $result5=mysqli_query($con,$sql4);
		}
		else{
        $sql1="insert into login value ('$user1',$no1,'Y','$dat','$p') "; //query 
        $result1=mysqli_query($con,$sql1);
		}
        $f1=mysqli_affected_rows($con);
		if( $f1>0 )
		{
			header("location:http://localhost:8080/pg/chatbox/chat1.php?name=".$user1."&mobile=".$no1."");
	    }
	}
	}

?>