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

$globlcontact = $_GET['mobile'];
$globalname = $_GET['name'];
//header("refresh:5;");
//header(" refresh: 2 ; url = http://localhost:8080/pg/chatbox/chat.php?name=".$globalname."&mobile=".$globlcontact."");
$pol = 0;

$pass = 1;
$pass7 = 0;
session_start();
date_default_timezone_set("Asia/kolkata");
$p = date("H:i:s");
$dat = date("Y-m-d");

?>
<!DOCTYPE html>
<html>

<head>
	<title>Chat</title>

	<link rel="stylesheet" href="home.css">



	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
		crossorigin="anonymous"></script>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
		integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


	<meta name="viewport" content="width=device-width,initial-scale=1.0">



</head>
<!--Coded With Love By Mutiullah Samim-->

<body>

	<div class="container-fluid h-100">
		<div class="row justify-content-center h-100">
			<div class="col-md-4 col-xl-4 chat">
				<div class="card mb-sm-3 mb-md-0 contacts_card">
					<div class="card-header" style="padding: 0.6rem 0.5rem 0.5rem 0" ;>

						<div class="input-group" style="column-gap: 0.2em" ; >
							<button class="rounded-circle h-25 w-10 " data-toggle="modal" data-target="#exampleModal8"
								data-whatever="@mdo"><img
									src="https://ui-avatars.com/api/?name=<?php echo $globalname ?>&background=random&color=random&rounded=true"
									alt="no user.png" height="40px" width="30px" class="rounded-circle"></button><form class="form-inline " method="post">
								<input class="form-control mr-sm-2" name="s_name" value="<?php if(isset($_POST['search'])){ echo $_POST['s_name']; }?>" type="search" placeholder="Search by name"
									aria-label="Search">
								<button class="btn btn-dark my-2 my-sm-0" name="search" >Search</button>
							</form>
							<?php //profile?>
							<div class="modal fade" id="exampleModal8" tabindex="-1" role="dialog"
								aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">profile</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">


											<center>
												<h4><img class="border border-dark"
														src="https://ui-avatars.com/api/?name=<?php echo $globalname ?>&background=random&color=random"
														height="50px" width="50px"> </h4>

												<h5 class="card-title">
													<?php echo $globalname ?>
												</h5>
												<h6 class="card-subtitle mb-2 text-muted">
													<?php echo $globlcontact ?>
													<br>


													<button class="btn btn-light" type="button" disabled>
														<span class="spinner-grow spinner-grow-sm text-success" role="status"
															aria-hidden="true"></span>
														<span class="visually-hidden">online</span>
													</button>


												</h6>
											</center>
											<p class="card-text">
												<h7 class="card-subtitle mb-2 text-muted">About:</h7>
												<br>
												  <?php // about section
/*
$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://quotes-by-api-ninjas.p.rapidapi.com/v1/quotes",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: quotes-by-api-ninjas.p.rapidapi.com",
		"X-RapidAPI-Key: cd9579f035msh36c1b8881f4409cp186991jsn4f45ff3ed6ea"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
  $result=json_decode($response,true);
   ?> "<?php	echo $result[0]['quote']; ?>" <?php
}
 */?>

											</p>
											<center>
												<form method="post"
													action="http://deb200.rf.gd/login.php">
													<button class="btn btn-danger" ><i
															class="bi bi-box-arrow-right" title="logout"
															id="logout"></i></button>
												</form>
											</center>


										</div>

									</div>
								</div>
							</div>
							
						</div>
					</div>
					<div class="card-body contacts_body">
						<ui class="contacts">
							<li class="active">
								<div class="d-flex bd-highlight">
									<div class="img_cont">
										<img src="add.jfif" class="rounded-circle user_img">

									</div>
									<div class="user_info"><span>

											<?php //add contact ?> <button type="button" class="btn btn-success btn-lg"
												data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">add
												contact</button>

											<div class="modal fade " id="exampleModal" tabindex="-1" role="dialog"
												aria-labelledby="exampleModalLabel" aria-hidden="true">
												<div class="modal-dialog " role="document">
													<div class="modal-content">
														<div class="modal-header bg-success">
															<h5 class="modal-title" id="exampleModalLabel">Add</h5>
															<button type="button" class="close" data-dismiss="modal"
																aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body bg-dark">
															<form method="post">
																<div class="form-group">
																	<label for="recipient-name"
																		class="col-form-label">Name</label>
																	<input type="text" class="form-control"
																		id="recipient-name" name="nm" required value="">
																</div>
																<label for="recipient-name"
																	class="col-form-label">Mobile</label>
																<div class="input-group mb-2 mr-sm-2">

																	<div class="input-group-prepend">
																		<div class="input-group-text">+91</div>
																	</div>
																	<input type="text" class="form-control"
																		id="inlineFormInputGroupUsername2" name="mob"
																		required>
																</div>


														</div>
														<div class="modal-footer bg-dark">
															<button type="button" class="btn btn-secondary"
																data-dismiss="modal">Close</button>
															<button type="submit" class="btn btn-success"
																name="add">Add</button> </form>
															<?php

															//add contact
															error_reporting(E_ALL ^ E_WARNING);
															$adduser = $_POST['nm'];
															$addnum = $_POST['mob'];
															if (isset($_POST['add'])) {

						 
																$sqlchck1 = "select * from user$globlcontact where number=$addnum  ";
																$x81 = mysqli_query($con, $sqlchck1);

																while ($r74 = mysqli_fetch_assoc($x81)) {
																	
																		$pass7 = 1;
																		break;
																	
																}

																if ($pass7 != 1) {
																	$sq = "insert into user$globlcontact value ('$adduser',$addnum) "; //query 
																	$result7 = mysqli_query($con, $sq);
																	$f8 = mysqli_affected_rows($con);
																}

																
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
                              
                           <div id="new">
							<?php

							// contacts
							$p9 = 0;
								if (isset($_POST['search'])) {
									$p9 = 1;
								}
							error_reporting(E_ALL);
							$cmd = "select distinct name,number from user$globlcontact order by $dat "; //query
							$x = mysqli_query($con, $cmd);
							while ($r = mysqli_fetch_array($x)) {
								//$cv=$r['number'];
							
								?>
								<li>
                                    
									<form method="post">

										<div class="d-flex bd-highlight">
                                          
											<div class="img_cont">
												<img src="https://ui-avatars.com/api/?name=<?php echo $r['name']; ?>&background=random&color=random"
													class="rounded-circle user_img">
												<?php /* $cmd99 = "select status from signup where mobile=$cv"; //query
																																													   $x7 = mysqli_query($con, $cmd99);
																																														if($r10 = mysqli_fetch_array($x7)) {
																																														if($r10['status']!='Y' && $r10['number']==){ 
																																													   ?><span class="online_icon offline"></span><?php } */?>
											</div>

											<div class="user_info" class="btn btn-light">
                                                
                                                
												<?php if ($p9 == 1 && $_POST['s_name'] == $r['name']) { ?>
														<span class="bg-warning">


															<?php echo $r['name']; ?>

														</span>
													<?php } else {
														?>
														<span>
															<?php echo $r['name']; ?>
														</span>
                                                        <?php
													}
													?>
												<p>
													<?php echo $r['number']; ?>
												</p>
												<button class="btn btn-dark " type="submit" name="b89"
													value="<?php echo $r['number']; ?>">

													<i class="bi bi-chat-left-dots"></i>
												</button>
												<span style="padding-left:0.8em";>
													<?php $tr = date("i") - 1;
                                                          $p1=date("H");
													//echo $tr;
												
													$chk = $r['number'];
													$cmd145 = "select time,date from chat where sender=$chk and reciver=$globlcontact and date='$dat' and time>'$p1:$tr:00'"; //query
													$x74 = mysqli_query($con, $cmd145);
													while ($r71 = mysqli_fetch_array($x74)) {

														if ($r71['time'] <= $p) {

														  ?>
                                                          <a class="badge badge-pill badge-light text-dark" type="button" id="p2" onclick="demoShow();" value="edit">new message</a>
														  <?php //<input type="button" id="p2" onclick="demoShow();" value="edit" /> ?>
														  <?php
															break;

														}
													}

													?>

												</span>
												


	
											</div>
										</div>
                                         
									</form>
                                  
								</li>
                               
							<?php }
                           
                           if (isset($_POST['b89'])) {

													//$d=$_POST['b89'];
													$_SESSION["number"] = $_POST['b89'];
													$pass = 0;
                                                    //echo $_POST['b89'];  

												} else
													$pass = 1;





							?>

                       </div>
						</ui>
					</div>
					<div class="card-footer"></div>
				</div>
			</div>


			<?php if ($pass == 1 || $pass == 0) {

				//msg header and body
			
                $pol5=0;

				error_reporting(E_ALL);
				$b = $_SESSION["number"];
				if ($b != null) {
					$cmd5 = "select  name from user$globlcontact where number=$b "; //query
					$x5 = mysqli_query($con, $cmd5);
					if ($r9 = mysqli_fetch_array($x5)) {


						?>







						<div class="col-md-8 col-xl-6 chat">
							<form method="post">
								<div class="card">
									<div class="card-header msg_head">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="https://ui-avatars.com/api/?name=<?php echo $r9['name'] ?>&background=random&color=random"
													class="rounded-circle user_img">

											</div>
											<div class="user_info">
												<span id="rec">
													<?php echo $r9['name'] ?>
												</span>
												<p>
													<?php echo $b;
													?>
												</p>
											</div>
											
                                                <div class="video_cam">
												<a class="bi bi-pin-map text-light" href="https://maps.google.co.in" title="google-map"></a>
                                                
											    </div>
                                                
										</div>
										<span id="action_menu_btn"><i class="bi bi-three-dots-vertical"></i></span>
										<div class="action_menu">
											<ul>
												
												<li><i data-toggle="modal" data-target="#exampleModal9"
														data-whatever="@mdo">Rename</i></li>
                                                <li><i data-toggle="modal" data-target="#exampleModal4">
														block/unblock
													</i></li>



											</ul>


										</div>
									</div>




									<div class="card-body msg_card_body">
										
											<?php

											// known unkonwn user add
								
											$c = $_SESSION["number"];

											//$p5=0;
											$sicm = "select * from signup  ";
											$si = mysqli_query($con, $sicm);
											$si1 = mysqli_affected_rows($con);
											//echo $si1; 
											$p7 = 0;
											$p5 = 1;
											if ($si1 >= 0) {
												while ($r931 = mysqli_fetch_assoc($si)) {
													if ($r931['mobile'] == $c) {
														$p7 = 1;
														$p5 = 0;
														break;
													}
												}
												if ($p7 == 1) {
													$cmdun = "select * from user$c ";
													$xun = mysqli_query($con, $cmdun);
													while ($r921 = mysqli_fetch_array($xun)) {
														if ($r921['number'] == $c || $r921['number'] == $globlcontact) {
															$p5 = 1;
															break;
														} else {
															$p5 = 0;
														}
													}
												}
												if ($p5 != 1) {
													$sq15 = "insert into user$c value ('unknown',$globlcontact) "; //query 
													$result78 = mysqli_query($con, $sq15);
												}

												?>
											
											<div id="here">
												<?php
                                                
												$cmd892 = "select distinct * from chat where sender=$globlcontact and reciver=$c and date = '$dat' or sender=$c  and reciver=$globlcontact and date = '$dat'"; //query
												//$cmd892="SELECT sender,reciver,msg,date,time from chat JOIN user$globlcontact on chat.reciver=user$globlcontact.number";
												$x8911 = mysqli_query($con, $cmd892);
												while ($r92 = mysqli_fetch_array($x8911)) {

													?>
													<?php
													//label:
								                      //echo 4;
													if ( $r92['time'] >= $p && $r92['reciver'] == $c || $r92['sender'] != $c) {

														$pw = 1;
													} else
														if ( $r92['time'] >= $p && $r92['reciver'] == $globlcontact || $r92['sender'] != $globlcontact) {

															$pw = 0;
														}
													if ($pw == 0) {
														?>

														<div class="d-flex justify-content-start mb-4">

															<div class="msg_cotainer">

																<?php
																if(strpos($r92['msg'],'.png')>0 || strpos($r92['msg'],'.jpg')>0 || strpos($r92['msg'],'.jfif')>0 ){
																

																?>
                                                                  
                                                                  <a href="<?php echo 'uploadfiles/'.$r92['msg'] ?>" ><embed src="<?php echo 'uploadfiles/'.$r92['msg'] ?>" style="width:16em; height: 16em; "></a>
																<?php
															
															     }
                                                                 else
                                                                 if(strpos($r92['msg'],'.pdf')>0 || strpos($r92['msg'],'.word')>0)
                                                                 {
                                                                     ?>
                                                                     <p>Download:-></p><a  src="<?php echo 'uploadfiles/'.$r92['msg'] ?>" download ">
                                                                    <?php
                                                                 }
																else{

																	echo $r92['msg'];
																}
																	?>



																<span class="msg_time">
																	<?php if ($r92['date'] == $dat) {
																		echo "Today   ";
																	}
																	echo $r92['time']; ?>
																</span>
															</div>
														</div>

														<?php
													} else {

														?>

														<div class="d-flex justify-content-end mb-4">
															<div class="msg_cotainer_send">


																<?php
                                                                // for uploading ans msg

																if(strpos($r92['msg'],'.png')>0 || strpos($r92['msg'],'.jpg')>0 || strpos($r92['msg'],'.jfif')>0 ||  strpos($r92['msg'],'.jpeg')>0 ){
																

																?>
                                                                     <a href="<?php echo 'uploadfiles/'.$r92['msg'] ?>" ><embed src="<?php echo 'uploadfiles/'.$r92['msg'] ?>" style="width:16em; height: 16em; "></a>
																<?php
															
															     }
                                                                 else
                                                                 if(strpos($r92['msg'],'.pdf')>0 || strpos($r92['msg'],'.word')>0 || strpos($r92['msg'],'.zip')>0)
                                                                 {
                                                                     ?>
                                                                    <p>Download:-></p><a  href="<?php echo 'uploadfiles/'.$r92['msg'] ?>" download "><?php echo $r92['msg']; ?></a>
                                                                    <?php
                                                                 }
																else{

																	echo $r92['msg'];
																}
																	?>



																<br><span class="msg_time_send">
																	<?php if ($r92['date'] == $dat) {
																		echo "Today";
																	}
																	echo $r92['time']; ?>
																</span>
															</div>
														</div>

													<?php }
												}
											} ?>
										</div>
									</div>
									<div class="card-footer">
										<div class="input-group">
											<div class="input-group-append">
												<span class="input-group-text attach_btn"><button name="x5"
														class="btn btn-warning h-65" data-toggle="modal"
														data-target="#exampleModal14" data-whatever="@mdo"><i
															class="bi bi-upload"></i></button></span>
												<?php // pop-up upload ?>


											</div>
											<textarea name="msg" id="msg" class="form-control type_msg"
												placeholder="Type your message..." required ></textarea>
											<div class="input-group-append">
												<span class="input-group-text send_btn" ><a href="javascript:void(0)"
														onclick="click_here()" name="x3" class="btn btn-success h-75"><i
															class="bi bi-send text-white" ></i></a></span>
											</div>
										</div>
									</div>
								</div>
							</form>


						</div>


						<?php

					}
				}
			}
			$c = $_SESSION["number"];
			/*if(isset($_POST['x3']))
																														{
																															
																															
																														 $msg=$_POST['msg'];					
																														 $c=$_SESSION["number"];
																																			  
																														  error_reporting(E_ALL);
																														  $cmd8="insert into chat value ($globlcontact,$c,'$msg','$dat','$p') "; //query
																														  $x8=mysqli_query($con,$cmd8);
																														  $pass=1;
																														  $pol=1;
																														  //session_destroy();
																														 
																														 }*/




			?>

</body>

<body>
<?php // it's used for sending files ?>
<div class="modal fade " id="exampleModal14" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel14"
	aria-hidden="true">
	<div class="modal-dialog " role="document">
		<div class="modal-content">
			<div class="modal-header bg-warning">
				<h5 class="modal-title" id="exampleModalLabel14">upload</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body bg-dark">
				<form method="post" enctype="multipart/form-data" name="b911">
					

					<div class="input-group mb-2 mr-sm-2">

						<div class="input-group-prepend">
							<div class="input-group-text">+91</div>
						</div>
						<input type="text" class="form-control" id="inlineFormInputGroupUsername2" name="mob1"  value="<?php echo $c ?>" readonly>
					</div>

					<div class="custom-file">
						 <label class="custom-file-label" for="file-upload">
            <i class="fa fa-cloud-upload"></i> Upload Image  
          </label>
            <input type="file" id="file-upload" name="upload" class="custom-file-input" style="display:none;" required>
						<div class="invalid-feedback">Example invalid custom file feedback</div>
						<br>
						
					</div>
                     <p style="background-color: brown; color:yellow"><b style="color: white">NOTE:</b> &nbsp; videos not allowed and <5mb</p>

			</div>
			<div class="modal-footer bg-dark">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-warning" name="send">send</button> </form>
			</div>
		</div>
	</div>
	<?php
	
		if(isset($_FILES['upload']))
		{
		  //print_r($_FILES);
            if($_FILES['upload']['size']>5500000){
			
             echo '<script>alert("to large to process pls read note") </script>';
            }
            else
            {
            move_uploaded_file($_FILES['upload']['tmp_name'],'uploadfiles/'.$_FILES['upload']['name']);
		    $_SESSION['file']=$_FILES['upload']['name'];
		    include("up_se.php");
            }
           
		}
	

		

		?>
</div>


</body>

<div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header bg-danger">
				<h5 class="modal-title text-light" id="exampleModalLabel">Warning</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				Do you want to block/unblock ?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
				<form method="post"><button type="submit" class="btn btn-danger btn-lg" name="block">Yes</button></form>
				<?php
                //block
				if (isset($_POST['block'])) {
					//echo $c;
					$cmd_s = "select * from block where blocked_r=$c and user=$globlcontact or blocked_r=$globlcontact and user=$c"; //query
					$x_s = mysqli_query($con, $cmd_s);
					if (mysqli_fetch_assoc($x_s)) {
						$cmd_d = "delete from block where user=$globlcontact and blocked_r=$c";
						//query
						$x_d = mysqli_query($con, $cmd_d);
					} else {
						$cmd_b = "insert into block values($globlcontact,$c)"; //query
						
						$x_b = mysqli_query($con, $cmd_b);
						$cmd_b2 = "insert into block values($c,$globlcontact)";
						$x_b2 = mysqli_query($con, $cmd_b2);
                        
					}
				}
				?>
			</div>
		</div>
	</div>
</div>

<?php //rename ?>
<div class="modal fade " id="exampleModal9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel5"
	aria-hidden="true">
	<div class="modal-dialog " role="document">
		<div class="modal-content">
			<div class="modal-header bg-primary">
				<h5 class="modal-title" id="exampleModalLabel5">Rename</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body bg-warning">
				<form method="post">
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Name</label>
						<input type="text" class="form-control" id="nm" required>
					</div>
					<label for="recipient-name" class="col-form-label">Mobile</label>
					<div class="input-group mb-2 mr-sm-2">

						<div class="input-group-prepend">
							<div class="input-group-text">+91</div>
						</div>
						<input type="text" class="form-control" value="<?php echo $c ?> (READ-ONLY)"
							id="inlineFormInputGroupUsername2" name="mob" readonly>
					</div>


			</div>
			<div class="modal-footer bg-primary">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button class="btn btn-success" id="submit" >Done</button>

			</div>
			</form>
		</div>



</html>


<script>

	$(document).ready(function () {
		$('#action_menu_btn').click(function () {
			$('.action_menu').toggle();
		});

	});
    
    
    /*var time = new Date().getTime();
     $(document.body).bind("mousemove keypress", function(e) {
         time = new Date().getTime();
     });

     function refresh() {
         if(new Date().getTime() - time >= 10000) 
             window.location.reload(true);
         else 
             setTimeout(refresh, 5000);
     }

     setTimeout(refresh, 5000);
    */

    $.get('http://deb200.rf.gd/send.php?time='+$("#lastUpdate").val(),function(data){
   if(data == '1'){
    $('#here').load(window.location.href + ' #here');
   }
 });



	$('#submit').click(function () {
		var rec = <?php echo $c; ?>;
		var name = jQuery('#nm').val();
		var sen = <?php echo $globlcontact; ?>;
		jQuery.ajax({
			url: 'http://deb200.rf.gd/update.php',
			type: 'POST',
			data: {
				rec: rec,
				name: name,
				sen: sen
			}
		});
	});

	$('#logout').click(function () {

		var sen = <?php echo $globlcontact; ?>;

		jQuery.ajax({
			url: 'http://deb200.rf.gd/log_out.php',
			type: 'POST',
			data: {

				sen: sen
			}

		});

	});
 /*
   var socket = new WebSocket('ws://sql310.infinityfree.com');

	socket.onmessage = function (event) {
		// Update the page with the new data.
		//var updates = JSON.parse(event.data);
		$('#here').load(window.location.href + ' #here');

	};
*/

	function click_here() {
		var msg = jQuery('#msg').val();
		var rec = <?php echo $c; ?>;
		var sen = <?php echo $globlcontact; ?>;
         
         if(msg!=0){
		jQuery.ajax({
			url: 'http://deb200.rf.gd/send.php',
			type: 'post',
			data: { msg: msg, rec: rec, sen: sen },



		});
         
         $('#here').load(window.location.href + ' #here');
         }

         

		$('#msg').val('');
	}




    $('#file-upload').change(function() {
var i = $(this).prev('label').clone();
var file = $('#file-upload')[0].files[0].name;
$(this).prev('label').text(file);
});


      function demoShow()
    {document.getElementById("p2").style.visibility="hidden"; }

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
	*/
	$(document).ready(function () {
		setInterval(function () {
			$('#new').load(window.location.href + ' #new');
		}, 55000);
	});


  
	$(document).ready(function () {
		setInterval(function () {
			$('#here').load(window.location.href + ' #here');
		}, 5000);
	});




	if (window.history.replaceState) {
		window.history.replaceState(null, null, window.location.href);
	}
</script>
<?php
//goto label;
?>

<script>




</script>