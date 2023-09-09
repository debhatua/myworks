
<!------ Include the above in your HEAD tag ---------->



<?php include("server connect.php"); 

error_reporting(E_ALL);

/*
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
$service_port = 8080;
$address = gethostbyname('localhost');
socket_connect($socket, $address, $service_port);
$result57=socket_bind($socket,$address,$service_port);
$result57=socket_listen($socket,3);
$accept=socket_accept($socket);*/

$globlcontact=$_GET['mobile'];
$globalname=$_GET['name'];
//header("refresh:5;");
//header(" refresh: 2 ; url = http://localhost:8080/pg/chatbox/chat.php?name=".$globalname."&mobile=".$globlcontact."");
$pol=0;
// pass -> Debkrishna@2003 
$pass=1;
$pass7=0;
session_start();
date_default_timezone_set("Asia/kolkata");
 $p=date("H:i:s");
 $dat= date("Y-m-d");
 
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Chat</title>
	
	  <link rel="stylesheet" href="home.css">
	     
	  
		
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
		 

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		
	

	</head>
	<!--Coded With Love By Mutiullah Samim-->
	<body>
		<div class="container-fluid h-100">
			<div class="row justify-content-center h-100">
				<div class="col-md-4 col-xl-4 chat"><div class="card mb-sm-3 mb-md-0 contacts_card">
					<div class="card-header" style="padding: 0.5rem 0.5rem 0.5rem 0";>
						 
						<div class="input-group" style="column-gap: 0.2em";>
						<button class="rounded-circle h-25 w-10 "><img src="no user.png" height="40px" width="30px" class="rounded-circle"></button><input type="text" placeholder="Search..." name="" class="form-control search text-white inline p-3">
							<div class="input-group-prepend">
								<span class="input-group-text search_btn"><i class="bi bi-search"></i></span>
							</div>
						</div>
					</div>
					<div class="card-body contacts_body">
						<ui class="contacts">
						<li class="active">
							<div class="d-flex bd-highlight">
							<div class="img_cont">
							   <img src="add1.jfif" class="rounded-circle user_img">
									
								</div>
		<div class="user_info"><span> 
						
	<?php //add contact ?>   <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">add contact</button>

<div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title" id="exampleModalLabel">Add</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body bg-dark">
        <form method="post">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" id="recipient-name" name="nm" required value="">
          </div>
		  <label for="recipient-name" class="col-form-label">Mobile</label>	
          <div class="input-group mb-2 mr-sm-2">
		  
        <div class="input-group-prepend">
      <div class="input-group-text">+91</div>
      </div>
    <input type="text" class="form-control" id="inlineFormInputGroupUsername2" name="mob" required >
     </div>
    
       
      </div>
      <div class="modal-footer bg-dark">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success" name="add">Add</button> </form>
		<?php

//add contact
error_reporting(E_ALL^E_WARNING);
$adduser=$_POST['nm'];
$addnum=$_POST['mob'];	
if(isset($_POST['add']) ){

	//$sqlchck1="delete c1 from user$globlcontactc1 inner join user$globlcontact c2 where c1.number=c2.number";
	//$result13=mysqli_query($con,$sqlchck1);
	//echo var_dump($result13);
	//$f26=mysqli_affected_rows($con);
	//for($i=0;$i<$f26;$i++)
	//{
	//if($result13->fetch_column($i)!=$addnum)
	//{ 
		$sqlchck1="select * from user$globlcontact";
		$x81=mysqli_query($con,$sqlchck1);
		
		while($r74=mysqli_fetch_assoc($x81))
		{
			if($r74['number']==$addnum)
			{
				$pass7=1;
				break;
			}
		}
		
		if($pass7!=1){
		$sq="insert into user$globlcontact value ('$adduser',$addnum) "; //query 
		$result7=mysqli_query($con,$sq);
		$f8=mysqli_affected_rows($con);
		}
		
		// total contacts by user

		//$sqlchck1="delete c1 from user$globlcontact c1 inner join user$globlcontact c2 where c1.number=c2.number and c1.name=c2.name";
	    //$result13=mysqli_query($con,$sqlchck1);
	   //echo var_dump($result13);
	    //$f26=mysqli_affected_rows($con);
		
	//}
	//else
	//{
		//echo "notpossible";
	//}
//}
}




?>
      </div>
    </div>
  </div>
</div>        
 
            </span>
								</div>
							</div>
						</li>
                        <?php

						// contacts

						error_reporting(E_ALL);
						$cmd="select distinct name,number from user$globlcontact "; //query
						$x=mysqli_query($con,$cmd);
						while($r=mysqli_fetch_array($x))
                        { ?>
						<li>
							<form  method="post"  >
							
							<div class="d-flex bd-highlight" >
							
								<div class="img_cont">
									<img src="no user.png" class="rounded-circle user_img">
									<span class="online_icon offline"></span>
								</div>
								
								<div class="user_info" class="btn btn-light">
									
									<span><?php echo $r['name']; ?></span>
									<p><?php echo $r['number'];?></p>
									<button class="btn btn-dark "  type="submit"  name="b89" value="<?php echo $r['number']; ?>">	
									<i class="bi bi-chat-left-dots"></i>
						         </button> 
								 <?php 
                                 /*if(isset($_POST['b89']))
								  {
									if($_POST['b89']==$r['number']){
									echo $r['name'];
						            echo $r['number'];	}
								  }*/
								  if( isset($_POST['b89'])){
									
									//$d=$_POST['b89'];
									$_SESSION["number"]=$_POST['b89']; 
						            $pass=0;
									
								}
								else
								$pass=1;
							
															
								  
						        ?>	
								</div>
								</div>
						</form>
						</li>
						<?php }
						
					
						
						
						?>
						
						</ui>
					</div>
			    <div class="card-footer"></div>
				</div></div>
				
			
			<?php /*
			//profile 	 
            if($pass==0){ ?>
			<div class="col-md-4 col-xl-7 chat  ">
					<div class="card h-25 ">
						<div class="card-header msg_head ">
							<div class="d-flex bd-highlight">
			<div class="container d-flex justify-content-center align-items-center">
             
             <div class="card bg-white">

              <div class="upper">

               <main><b>YOUR PROFILE</b></main>
                
              </div>

              <div class="container d-flex align-items-center justify-content-center">

                <div class="profile">

                  <img src="<?php //profle pic ?>" class="rounded-circle" width="80">
                  
                </div>

              </div>


              <div class="mt-5 text-center">

                <h4 class="mb-0"><?php echo $globalname; ?></h4>
				<span class="text-muted d-block mb-0"><?php echo $globlcontact; ?></span>
                <span class="text-muted d-block mb-2"><b>INDIA</b></span>

                <button class="btn btn-primary btn-sm follow">change</button>


                <div class="d-flex justify-content-between align-items-center mt-4 px-4">
                
                  <div class="stats">
                    <h6 class="mb-0"><button>online</button></h6>
                    

                  </div>

                
                  <div class="stats">
                    <h6 class="mb-0"><button>Report</button></h6>
                   

                  </div>


                  <div class="stats">
                    <h6 class="mb-0"><button>logout</button></h6>
                   

                  </div>
           
              </div>
               
             </div>

           </div>
		    </div>  
			
		       <?php }
			    else */?> <?php if($pass==1 || $pass==0) {

				 //msg header and body

                
				 
				 error_reporting(E_ALL);
				 $b=$_SESSION["number"]; 
					if($b!=null){
					$cmd5="select  name from user$globlcontact where number=$b "; //query
					$x5=mysqli_query($con,$cmd5);
						if($r9=mysqli_fetch_array($x5) )
                        {
							
						    
			   ?>

	            
                         
                   

					
				 
				   <div class="col-md-8 col-xl-6 chat">
					<form method="post">
					<div class="card"  >
						<div class="card-header msg_head">
							<div class="d-flex bd-highlight">
								<div class="img_cont">
									<img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img">
									<span class="online_icon"></span>
								</div>
								<div class="user_info">
									<span><?php echo $r9['name']?></span>
									<p><?php echo $b;
									       ?></p>
								</div>
								<div class="video_cam">
									
								<span><i class="bi bi-pin-map"></i></span>
								</div>
							</div>
							<span id="action_menu_btn"><i class="bi bi-three-dots-vertical"></i></span>
							<div class="action_menu">
								<ul>
									<li><i class="fas fa-user-circle"></i> View profile</li>
									
									<li><i class="fas fa-ban"></i> Block</li>
								</ul>
							</div>
						</div>

						

                      
						<div class="card-body msg_card_body"  >
							<?php
							 
							// known unkonwn user add

							  $c=$_SESSION["number"];
							
                             //$p5=0;
							 $sicm="select * from signup";
							 $si=mysqli_query($con,$sicm);
							 $si1=mysqli_affected_rows($con);
                             //echo $si1; 
							 $p7=0;
							  $p5=1;
							 if($si1>=0){ 
							 while($r931=mysqli_fetch_assoc($si))
							 {
                               if($r931['mobile']==$c)
							   {
                                  $p7=1;
								  $p5=0;
								  break;
							   }
							 }
							  if($p7==1){
							  $cmdun="select * from user$c where number=$globlcontact";
							  $xun=mysqli_query($con,$cmdun);   
							  while($r921=mysqli_fetch_array($xun) )
								{
									if($r921['number']==$c || $r921['number']==$globlcontact)
									{
									$p5=1;
									break;
									}
									else
									{
										$p5=0;
									}
								}
							  }
							 if($p5!=1)
							 {
								$sq15="insert into user$c value ('unknown',$globlcontact) "; //query 
		                            $result78=mysqli_query($con,$sq15);
							 }
                            
						    ?>
							<div id="here">
							<?php

							 $cmd892="select distinct * from chat where sender=$globlcontact and reciver=$c or sender=$c and reciver=$globlcontact  "; //query
							//$cmd892="SELECT sender,reciver,msg,date,time from chat JOIN user$globlcontact on chat.reciver=user$globlcontact.number";
							 $x8911=mysqli_query($con,$cmd892);
							while($r92=mysqli_fetch_array($x8911) ){
								
							 ?>
						<?php 
						   //label:
						   
						   if($r92['date']==$dat && $r92['time']>=$p && $r92['reciver']==$c  || $r92['sender']!=$c )
						   {
							
							$pw=1;
						   }
						   else
						   if($r92['date']==$dat && $r92['time']>=$p && $r92['reciver']==$globlcontact  || $r92['sender']!=$globlcontact)
						   {
							
							$pw=0;
						   }
                          if($pw==0){
						 ?>	
                        
						<div class="d-flex justify-content-start mb-4" >
					
								<div class="msg_cotainer" >
									
										 <?php 
										  echo $r92['msg'];?>
									
									
								
									<span class="msg_time"><?php if($r92['date']==$dat) {echo "Today   ";} echo $r92['time'];?></span>
								</div> 
							</div>

					<?php
						  }
						  else
						 
						  {

						?> 
							
							<div class="d-flex justify-content-end mb-4"  >
								<div class="msg_cotainer_send">
							
								
									<?php echo $r92['msg']; ?>
								   
									
								
									<br><span class="msg_time_send"><?php if($r92['date']==$dat)  {echo "Today";} echo $r92['time'];?></span>
								</div> 
							</div>
						  
							<?php  } } }?>
						  </div>
						</div>
						<div class="card-footer">
							<div class="input-group">
								<div class="input-group-append">
									<span class="input-group-text attach_btn" ><button  name="x5" class="btn btn-warning h-65" data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo"><i class="bi bi-upload"></i></button></span>
									<?php // pop-up upload ?>
		                           
                                                  
								</div>
								<textarea name="msg" class="form-control type_msg" placeholder="Type your message..."   required></textarea>
								<div class="input-group-append">
									<span class="input-group-text send_btn  "  ><button   name="x3"  class="btn btn-success h-100 "><i class="bi bi-send"></i></button></span>
								</div>
							</div>
						</div>
					</div> 
						</form>		

						
				</div>
						  
						
				<?php 
				 
			      } } }
                if(isset($_POST['x3']))
				{
					
					
				 $msg=$_POST['msg'];					
				 $c=$_SESSION["number"];
		          					
				  error_reporting(E_ALL);
			      $cmd8="insert into chat value ($globlcontact,$c,'$msg','$dat','$p') "; //query
			      $x8=mysqli_query($con,$cmd8);
				  $pass=1;
				  $pol=1;
				  //session_destroy();
				 
	         	}
				
				
						
				
				?>
		
	</body>
</html>

</body>
</html>


<script>
	
    

    $(document).ready(function(){
        $('#action_menu_btn').click(function(){
            $('.action_menu').toggle();
        });
            });

	
/*
var url = "http://localhost:8080/pg/chatbox/chat1.php?name=".$globalname."&mobile=".$globlcontact."";
$("#btn3").click(function() {
  $("#here").html("…").load(url);
});*/
		
/*
function makeAjaxCall() {
  $.ajax({
    url: "http://localhost:8080/pg/chatbox/chat1.php?name=".$globalname."&mobile=".$globlcontact."",
    success: function(data) {
      $('#here').html(data);
      setTimeout(makeAjaxCall, 5000);
    }
  });
}

makeAjaxCall();
*/
/*

$(document).ready(function() {
    setInterval(function() {
        $('#here').load(window.location.href + ' #here');
    }, 5000);
  });
  */
	

if(window.history.replaceState)
 {
	window.history.replaceState(null,null,window.location.href);
 }
</script>
 <?php
  //goto label;
 ?>

<script>




</script>








