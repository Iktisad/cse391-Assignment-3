<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/myscript.js"></script>
  <?php include 'server.php'?>
</head>
<body>
  <div class="container mt-4">
    <h1 class="display-4 text-center text-primary">COMP207 - Register Here For Practical Slot</h1>
    <br>
    <h2 class="display-4 text-left text-danger">Register only if you know what you are doing.</h2>
    <ul class="list-group list-group-flush">
      <li class="list-group-item list-group-item-warning">Please enter <strong>all</strong> information and select your desired day. Please enter a correct 'SID' number!</li>
      <li class="list-group-item list-group-item-warning">Please check the number of available seats before submitting.</li>
      <li class="list-group-item list-group-item-warning">Register only to one slot.</li>
      <li class="list-group-item list-group-item-info">Any problems? write a message to <span class="text-success">webreb@csc.liv.ac.uk</span></li>
    </ul>
    <br>
      <form method="post" action="index.php" id="reg">
        <div class="form-group">
          <label for="title">Name</label>
          <input type="text" id="name" name="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="author">First Name</label>
          <input type="text" id="fName" name="fName" class="form-control">
        </div>
        <div class="form-group">
          <label for="isbn">SID</label>
          <input type="text" id="sid" name="sid" class="form-control">
        </div>
        <div class="form-group">
          <label for="isbn">Email</label>
          <input type="text" id="email" name="email" class="form-control">
        </div>
        <div class="form-group">
          <label for="isbn">Select the practical slot</label>
          <select name="Options" class="form-control">
            <option value="mon">Monday 15:00 - 17:00   &nbsp &nbsp &nbsp &nbsp <?php seats('mon') ?> seats remaining</option>
            <option value="tue">Tuesday 14:00 - 16:00  &nbsp &nbsp &nbsp &nbsp  <?php seats('tue') ?> seats remaining</option>
            <option value="thur">Thursday 11:00 - 13:00  &nbsp &nbsp &nbsp <?php seats('thur') ?> seats remaining</option>
            <option value="fri">Friday 10:00 - 12:00  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<?php seats('fri') ?> seats remaining</option>
          </select>
        </div>
          <input type="submit" name="register" value="Register" class="btn btn-primary  btn-block">
          <br>
           <input type="submit" name="clear" value="Clear" class="btn btn-danger  btn-block">
        
      </form>
    <br>    
  </div>


</body>
</html>