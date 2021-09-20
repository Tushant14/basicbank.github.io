<!-- navbar --> 
<!DOCTYPE html>
<html lang="en">
<head>
    <title>TSF Bank - Basic Banking System</title>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sga384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <style>
      nav .parent-link:hover {
    transform:scale(1.1);
}
    </style>
      </head>
      <body>
       <nav style="padding-top: 3px;
            padding-bottom: 1px;
            text-align: center;
            box-shadow: 8px 14px 25px grey;" class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#"><img style="height: 40%;
           border-radius: 29%; width: 65%; padding: 8px 8px ;background:none " class="logo" src="img/logo2.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbarDropdown" aria-controls="navbarDropdown" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"><i class="fas fa-bars" style="color: black;"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                  <a  style="font-size: 15px;
            position: relative;
            font-weight: 900;
            color: white;
            letter-spacing: 2px;
            font: normal 500;
            font-family: 'Baloo Bhaina 2', cursive;
            text-transform: uppercase;
            margin-left: 35px;
            margin-right: 35px;
            text-align: center;
            border-radius: 20px;"  class="nav-link parent-link" href="index.html" onMouseOver="this.style.color='rgb(80, 217, 252)'" onMouseOut="this.style.color='white'">Home</a>
              </li>
              <li  class="nav-item">
                  <a style="font-size: 15px;
            position: relative;
            font-weight: 900;
            color: white;
            letter-spacing: 2px;
            font: normal 500;
            font-family: 'Baloo Bhaina 2', cursive;
            text-transform: uppercase;
            margin-left: 35px;
            margin-right: 35px;
            text-align: center;
            border-radius: 20px;" class="nav-link parent-link" href="http://localhost/spark/index.php" onMouseOver="this.style.color='rgb(80, 217, 252)'" onMouseOut="this.style.color='white'" >Customers</a>
              </li>
              <li stclass="nav-item">
                  <a style="font-size: 15px;
            position: relative;
            font-weight: 900;
            color: white;
            letter-spacing: 2px;
            font: normal 500;
            font-family: 'Baloo Bhaina 2', cursive;
            text-transform: uppercase;
            margin-left: 35px;
            margin-right: 35px;
            text-align: center;
            border-radius: 20px;" class="nav-link parent-link" href="http://localhost/spark/transfermoney.php" onMouseOver="this.style.color='rgb(80, 217, 252)'" onMouseOut="this.style.color='white'">Transfer Money</a>
              </li>
              <li class="nav-item">
                  <a style="font-size: 15px;
            position: relative;
            font-weight: 900;
            color: white;
            letter-spacing: 2px;
            font: normal 500;
            font-family: 'Baloo Bhaina 2', cursive;
            text-transform: uppercase;
            margin-left: 35px;
            margin-right: 35px;
            text-align: center;
            border-radius: 20px;" class="nav-link parent-link" href="http://localhost/spark/transactionhistory.php" onMouseOver="this.style.color='rgb(80, 217, 252)'" onMouseOut="this.style.color='white'">Transaction History</a> 
              </li>
            </ul>
        </div>
    </nav>
  </body>
</html>