<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<h1> HI  {{$data->name}}</h1>
	
	<p>this is your varification otp  is {{url('email_verify?email='.$data->email.'&otp='.$otp)}}</p>

</body>
</html>