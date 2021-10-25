<<<<<<< HEAD
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    
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
<?php
// Checking if a user is logged in
$loggedIn = session('loggedIn');
if($loggedIn != 1) {
    Redirect::to('home')->send();
}
?>
=======

>>>>>>> parent of dfba7d9 (Milestone 6)

@extends('layouts.appmaster')
@section('title', 'Admin Panel')
@section('content')
<br>
	<form action='editUser' method='POST'>
		<label for='userID'>Enter an ID to Edit:</label>
		<input id='userID' name='userID'>@csrf
		<button type='submit' class='btn btn-primary'>Edit User</button>
	</form>
	<form action='deleteUser' method='POST'>
		<label for='userID'>Enter an ID to Delete:</label>
		<input id='userID' name='userID'>@csrf
		<button type='submit' class='btn btn-primary'>Delete User</button>
	</form>
	<br>
<?php // CST-256 page by team.
	use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;

	$controller = new AdminController();
	$controller->adminPanel();
?>
<<<<<<< HEAD

<br>
	<form action='editJob' method='POST'>
		<label for='jobID'>Enter an ID to Edit:</label>

		<input id='jobID' name='jobID' required>@csrf
		<input id='jobID' name='jobID'>@csrf

		<button type='submit' class='btn btn-primary'>Edit Job</button>
	</form>
	<form action='deleteJob' method='POST'>
		<label for='jobID'>Enter an ID to Delete:</label>

		<input id='jobID' name='jobID' required>@csrf

		<input id='jobID' name='jobID'>@csrf

		<button type='submit' class='btn btn-primary'>Delete Job</button>
	</form>
	<form action='newjoblisting' method='GET'>
		<button type='submit' class='btn btn-primary'>Create New Job Listing</button>
	</form>
	<br>
=======
>>>>>>> parent of dfba7d9 (Milestone 6)
	
	
@endsection
