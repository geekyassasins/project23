  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<form action="smtp.php" method="POST" class="container">
    <label> Your Mail Id</label>
    <input type="email" name="senderemail" class="form-control">
    <br>
    <label> Your Name</label>
    <input type="text" name="sendername" class="form-control">
    <br>
    <label> Your Password</label>
    <input type="password" name="senderpass" class="form-control">
<br><br>
    <hr><hr>

    <label> Receiver Mail Id</label>
    <input type="email" name="receiveremail" class="form-control">
    <br>
    <label> Receiver Name</label>
    <input type="text" name="receivername" class="form-control">
    <hr><hr>
    <input type="submit" name="submit" value="Send" class="btn btn-success">
</form>
