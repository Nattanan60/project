<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>GENQRCODE OUT</title> 
</head>

<body>

<?php 
$test = $_GET["name"];
$value = $test;

$link = "https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=$value"
?>
  <div class="container">
    <center>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <div class="jumbotron text-center">

      <h1 style="color: blue;"><?php echo $value;?></h1>     
      
    <img src=<?php echo $link; ?> >
    </center>
  </div>
<script>


setTimeout(function(){
  window.location.href = "qrout1.php"; 
  
}, 15000);
   


</script>
</body>
</html>
