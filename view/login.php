<!DOCTYPE html>
<html>
	<head>
		<title>Bootstrap 101 Template</title>
		<!-- Bootstrap -->
		<link href="../core/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="../core/css/mypage.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script src="../core/bootstrap/js/bootstrap.min.js"></script>
	
		<div class="container-narrow">
			<div class="masthead">
				<ul class="nav nav-pills pull-right">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#">About</a></li>
					<li>

					<form class="form-inline">
						<input type="text" class="input-small" placeholder="Email">
						<input type="password" class="input-small" placeholder="Password">
						<button type="submit" class="btn">Sign in</button>
					</form>

				</ul>
				<h3 class="muted">mimikaki</h3>
			</div>
			<hr>
			<h1>みみかきおしらせったー</h1>
			<hr>


			<form class="form-horizontal" action="../controller/registration.php" method="POST" enctype="multipart/form-data">
			<h5>新規登録はこちらから</h5>
				<div class="control-group">
					<label class="control-label" for="inputEmail">ユーザ名</label>
					<div class="controls">
						<input type="text" name="inputUsername" id="inputUsername" placeholder="Username">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputEmail">Email</label>
					<div class="controls">
						<input type="text" name="inputEmail" id="inputEmail" placeholder="Email">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputPassword">Password</label>
					<div class="controls">
						<input type="password" name="inputPassword" id="inputPassword" placeholder="Password">
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
						<label class="checkbox">
							<input type="checkbox"> Remember me
						</label>
						<button type="submit" class="btn">Sign in</button>
					</div>
				</div>
			</form>







	</body>
</html>

