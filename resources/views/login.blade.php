<!-- CST-256 CLC Project Version 1.0 Page Created by Elijah Coverini -->

<?php // A simple page for logging in complete with @csrf token. ?>
<<<<<<< Updated upstream

@extends('layouts.appmaster')
@section('title', 'Login Page')
@section('content')

=======
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    
    <title>Milestone</title>
    <style>
        body, html {
            height: 100%;
            font-family: Montserrat-Regular, sans-serif;
            background-color: #22577A;
            color: #FFF1E1;
        }
        
        #banner{
                font-family: Georgia, serif;
                font-size: 25px;
                letter-spacing: 1.6px;
                word-spacing: 2px;
                color: #FFF1E1;
                font-weight: 700;
                font-style: italic;
                font-variant: small-caps;
                text-align:center;
        }
        img{
                display: block;
                margin-left: auto;
                margin-right: auto;
        }
        
        footer {
           position:absolute;
           padding: 10px 10px 0px 10px;   
           bottom:0;
           width:100%;
        }
	  
    </style>
</head>  
@extends('layouts.appmaster')
@section('title', 'Login')
@section('content')
		<br><br><br>
>>>>>>> Stashed changes
		<h2>User login</h2>
		<form action="dologin" method="POST">
		@csrf
			<div class="form-group">
				<label>Username:</label>
				<input type="text" name="username" class="form-control" required>
				</div>
			<div class="form-group">
				<label>Password:</label>
				<input type="password" name="password" class="form-control" required>
				</div>
				<button style="margin-top: 5px;" type="submit" class="btn btn-primary">Login</button>
		</form>
<<<<<<< Updated upstream
@endsection
=======
@stop
>>>>>>> Stashed changes
