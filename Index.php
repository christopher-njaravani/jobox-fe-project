<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contaract</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container-fluid top11">
	<center><h3 style="color:white">Contract Application</h3></center>
</div>
	<div class="container">
		<div class="row top">
			<div class="col-lg-3 col-md-3 col-xs-12">
			</div>
			<div class="col-lg-6 col-md-6 col-xs-12 me">
				<center><h4 style="margin-top:60px;color:#3c2167;font-weight:900">Login</h4></center>
				<form method="post">
				  <div class="form-group">

					<input style="border-radius:1px" type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp" placeholder="username">
					<small id="emailHelp" class="form-text text-muted">This is the username used to register</small>
				  </div>
				  <br>
				  <div class="form-group">
					<input style="border-radius:1px" type="password" class="form-control" name="password" id="password" placeholder="password">
				  </div>
				  <input type="submit" class="submit logBut" value="Login">

				  <button id="newUser" onclick="document.getElementById('id01').style.display='block'" class="w3-button">Register</button>

				</form>
			</div>
			<div class="col-lg-3 col-md-3 col-xs-12">
			</div>
		</div>
	</div>
</body>
</html>
