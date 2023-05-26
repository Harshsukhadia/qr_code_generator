<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script type="text/javascript" src="js/qrcode.js"></script>
</head>
<body>
  <h1 class="text-center mt-3 mb-5"> Generating QR Codes With PHP</h1>
  
  <form class="container"  onsubmit="generate();return false;">
        <!-- <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div> -->

    <div class="form-group">
        <label for="exampleFormControlTextarea1"><b>Textarea<b></label>
        <textarea class="form-control" id="qr" name="text"  rows="5" placeholder="Enter The Text Here"></textarea>
    </div>
    <input type="submit" class="btn btn-primary" value="Generate QRCode" >

   </form>
  
   <div id="qrResult" class="mt-5" style="height:500px; width:500px"></div>
     
  <script type="text/javascript">
    var qrcode= new QRCode(document.getElementById('qrResult'),{
    width:200,
    height:200
    });

    function generate(){
        console.log("hello");
      var message = document.getElementById('qr');
      qrcode.makeCode(message.value);
    }
  </script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <scrip>
        <footer>Made by Harsh Sukhadia</footer>
</html>