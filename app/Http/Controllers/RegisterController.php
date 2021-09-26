<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller {
	private $mysql_host = "localhost";
	private $mysql_database = "cst-256";
	private $mysql_user = "root";
	private $mysql_password = "root";
	
	public function index(Request $request) {
		$username = $request->input('username');
		$password = $request->input('password');
		$firstName = $request->input('firstName');
		$lastName = $request->input('lastName');
		$phone = $request->input('phone');
		$email = $request->input('email');
		$streetNumber = $request->input('streetNumber');
		$streetName = $request->input('streetName');
		$city = $request->input('city');
		$state = $request->input('state');
		$zip = $request->input('zip');
		
		
		// Create connection
		$conn = mysqli_connect($this->mysql_host, $this->mysql_user, $this->mysql_password, $this->mysql_database);
		
		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		$sql = "INSERT INTO `users` (`username`, `password`, `email`, `first_name`, `last_name`, `phone`, `street_number`, `street_name`, `city`, `state`, `zip`)
			VALUES ('$username', '$password', '$email', '$firstName', '$lastName', '$phone', '$streetNumber', '$streetName', '$city', '$state', '$zip');";
		
		if (mysqli_query($conn, $sql)) {
			echo "<h1>Registration Successful! Please log in.</h1>";
			return view("login");
		} else {
			$error = mysqli_error($conn);
			$data = ['error' => $error];
			return view("registrationfailed")->with($data);
		}	
	}
}