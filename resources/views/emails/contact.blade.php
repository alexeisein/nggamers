<!DOCTYPE html>
<html>
<head>
	<title>Email Cntact</title>
</head>
<body>

	<div class="row" style="background-color: #d9d9d9;">
	<div class="col-sm-6 col-sm-offset-3">
		<div class="panel panel-default" style="padding:0 10px;">
			<div style="background-color: #6d7b8d; border:2px solid #fff;"><h2 style="color: #fff; text-align: center; text-shadow: 1px 1px #000; border: 1px solid #bcc6cc; padding: 5px 20px;">You have new E-mail</h2>
			</div>
			<hr>

			<div style="background-color: #e5e4e2; margin-top: 50px;">
				<p style="color: #6d7b8d;text-shadow: 1px 1px #000";>{{ $bodyMessge }}</p>
	       </div>

	       <div style="background-color: #ebf4f8; margin-top: 50px;">
		       <p style="color: #000; text-shadow: 1px 1px #fff;"><b>FirstName:</b> {{ ucwords($name) }}</p>
		       <p style="color: #000; text-shadow: 1px 1px #fff;"><b>Last Name:</b> {{ ucwords($surname) }}</p>
		       <p style="color: #000; text-shadow: 1px 1px #fff;"><b>Mobile No:</b> {{ ucwords($phone) }}</p>
			   <p style="color: #000; text-shadow: 1px 1px #fff;"><b>Email:</b> {{ $email }}</p>
	       </div>
	  </div>
  </div>
</div>

</body>
</html>