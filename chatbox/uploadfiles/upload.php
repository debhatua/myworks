<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<center>
    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">upload</button>

    <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog " role="document">
        <div class="modal-content">
          <div class="modal-header bg-warning">
            <h5 class="modal-title" id="exampleModalLabel">upload</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body bg-dark">
            <form method="post"  enctype="multipart/form-data">
                <div class="input-group mb-2 mr-sm-2">
              
                    <div class="input-group-prepend">
                  <div class="input-group-text">name</div>
                  </div>
                <input type="text" class="form-control" id="inlineFormInputGroupUsername2" name="nam" readonly >
                 </div>  
              
              <div class="input-group mb-2 mr-sm-2">
              
            <div class="input-group-prepend">
          <div class="input-group-text">+91</div>
          </div>
        <input type="text" class="form-control" id="inlineFormInputGroupUsername2" name="mob1" readonly >
         </div>
          
         <div class="custom-file">
            <input type="file" multiple name="upload[]" class="custom-file-input" id="validatedCustomFile" required>
            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
            <div class="invalid-feedback">Example invalid custom file feedback</div>
            <br>
            <p style="background-color: brown; color:yellow"><b style="color: white">NOTE:</b> &nbsp;you can send upto 10 files</p>
          </div>
        
           
          </div>
          <div class="modal-footer bg-dark">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-warning" name="send">send</button> </form>

</html>
<?php 
if(isset($_POST['send']))
{
  foreach($_FILES['upload']['name'] as $key=>$val)
  {
    move_uploaded_file($_FILES['upload']['tmp_name'][$key],'uploadfiles/'.$val);
  }
  
}
?>