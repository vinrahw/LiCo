<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="/assets/img/wave.png">
	<div class="container">
		<div class="img">
			<img src="/assets/img/login.svg">
		</div>
		<div class="login-content">
			<form action="<?= base_url('login/auth') ?>" method="POST">
          	<img src="/assets/img/key.svg">
				<h2 class="title">Welcome</h2>
                <?php if (session()->getFlashdata('error')) { ?>
                            <div class="alert alert-danger">
                                <?php echo session()->getFlashdata('error') ?>
                            </div>
                        <?php } ?>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input" name="username" id="username">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="password" id="password">
            	   </div>
            	</div>
            	
            	<input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="/assets/js/main.js"></script>
</body>
</html>



<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>

    <body>
        <div class="container mt-5 col-5">
            <div class="card ">
                <div class="card-header bg-primary text-white">
                    L O G I N
                </div>
                <div class="card-body">
                    <form action="<?= base_url('login/auth') ?>" method="POST">
                        <?php if (session()->getFlashdata('error')) { ?>
                            <div class="alert alert-danger">
                                <?php echo session()->getFlashdata('error') ?>
                            </div>
                        <?php } ?>
                        <div class="mb-3">
                            <label for="inputUsername" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username">
                        </div>
                        <div class="mb-3">
                            <label for="inputPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password">
                        </div>

                        <div class="mb-3">

                            <input type="submit" name="login" class="btn btn-primary" value="L O G I N">
                        </div>


                    </form>
                </div>
            </div>
        </div>



    </body>

</html> -->