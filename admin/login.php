<?php 
    include('../config.php');

    include(ROOT_PATH. '/admin/server.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <!-- Favicons -->
  <link href="../img/jd.png" rel="icon">
    <link href="../img/jd.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- Bootstrap CSS File -->
    <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <!-- <link href="../css/style.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="admin.css">
</head>
<body class="loginback">
    <div class="container">
        <div class="row">
            <div class="col-2 col-sm-3 col-lg-4"></div>

            <div class="login col-8 col-sm-6 col-lg-4">
                
                <div class="header text-center">
                    <h1>Login</h1>
                </div>
                
                <form action="login.php" method="post">
                    <?php include('errors.php'); ?>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter email address" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
                    </div>
                    <div class="text-center">
                    <input type="submit" class="btn subbtn" name="login_user" value="LOGIN">

                    </div>
                </form>
            </div>

            <div class="col-2 col-sm-3 col-lg-4"></div>
        </div>
        
        
    </div>
  
</body>
</html>