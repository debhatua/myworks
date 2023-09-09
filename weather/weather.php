<?php
error_reporting(E_NOTICE);

if(isset($_POST['submit'])){
$city=$_POST["city"];
$url="https://api.openweathermap.org/data/2.5/weather?q=$city&appid=aa92dee27351923ddd2f8add7f0bb7e4";
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$result=curl_exec($ch);
curl_close($ch);
$result=json_decode($result,true);
date_default_timezone_set("Asia/kolkata");
$p=date("h:i");/*
$page=$_SERVER['PHP_SELF'];
$sec=3;
header("Refresh:$sec;url=$page");

echo '<pre>';
print_r($result);
*/
}

?>
<html>
    <title>
        weather
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
      <style>
        form .p{
            display: none;
        }
        input.m{
       background-color:black;
       border:1px solid white ;
       border-radius:8px ;
       color:white;
    }
    .mk{
      position: relative;
      left:2vw;
    }
      </style>   
    <body>
        <section class="vh-100" style="background-color: grey">
            <div class="container py-5 h-100">
          
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-8 col-lg-6 col-xl-4">
          
                  <div class="card" style="background-color: black;  border-radius: 35px;">
                    <div class="card-body p-4">
          
                      <div class="d-flex" style="color:white;" >
                        <form  class="bi bi-geo-alt-fill" method="post" class="flex-grow-1">
                         <input type="text" placeholder="enter city" class=m name=city required value=<?php echo $city?> >
                         <input type="submit" value=submit class=p name=submit>
                        </form>
                      
                        <h6 class=mk >
                         <?php echo $p . " (IST)"; ?>
                        </h6>
                      </div>
        
                      <div class="d-flex flex-column text-center mt-5 mb-4" style="color:white;">
                        <h6 class="display-4 mb-0 font-weight-bold">
                        <?php if(round($result['main']['temp']-273.15)>-273)
                        {
                          echo round($result['main']['temp']-273.15)."℃";
                        } 
                        else
                        {
                          ?>
                          no data
                          <i class="bi bi-emoji-frown-fill"></i>
                          <?php
                        }
                        ?></h6>
                        <span class="small" style="color: #868B94"><?php echo $result['weather'][0]['main'] ?></span>
                      </div>
                       
                      <div class="d-flex align-items-center" style="color:white;">
                        <div class="flex-grow-1" style="font-size: 1rem;">
                          <div><i class="bi bi-wind" style="color: #868B94;"></i> <span class="ms-1">
                          <?php  if($result['wind']['speed']>0)
                          { 
                            echo $result['wind']['speed']." Mile/h";
                          }
                          else
                           {?>
                            <i class="bi bi-dash"></i>
                           <?php
                           }
                          ?>
                            </span></div>
                          <div><i class="bi bi-moisture" style="color: #868B94;"></i> <span class="ms-1"> 
                          <?php  if($result['main']['humidity']>0)
                          { 
                            echo $result['main']['humidity'] ."%";
                          }
                          else
                           {?>
                            <i class="bi bi-dash"></i>
                           <?php
                           }
                          ?> </span>
                          </div>
                          <div><i class="bi bi-thermometer" style="color: #868B94;"></i> <span class="ms-1"> 
                          <?php if(round($result['main']['temp']-273.15)>-273)
                        {
                          echo round($result['main']['temp_max']-273.15)."℃";
                        } 
                        else
                        {
                          ?>
                          <i class="bi bi-dash"></i>
                          <?php
                        }
                        ?></span>
                          </div>
                        </div>
                        <div >
                       <?php if($result ['weather'][0]['icon']!=null)
                         {
                         ?> 
                      <img src="https://openweathermap.org/img/wn/<?php echo $result ['weather'][0]['icon']?>@4x.png"
                        width="130px"  >
                        <?php
                         }  
                         else
                         {
                        ?>
                        <img src="no image.jpg" width="100px" >
                        <?php
                         }
                        ?>
                       </div>
                      </div>
                    
                    </div>
                  </div>
          
                </div>
              </div>
          
            </div>
          </section>
    </body>
</html>