<?php

//create unilancer database connection
	
	class DatabaseConnect{

		//member variable

		public $udbcon; //unidatabase handler


		//member function

		public function __construct(){

			//to create connection by instatiating MYSQLi class

			$this->udbcon = new mysqli("localhost", "root", "", "newunilancer_db");

			//check the connection

			if ($this->udbcon->connect_error) {
				
				//use die function to check and terminiate if there's any error

				die('Connect Failed'.$this->udbcon->connect_error);
			}else{

				// echo "Connection Successul";
				// exit;
			}
		}

	}


	//create user class


	class User{

		//member variable
		public $udbobj; //object handler for DatabaseConnect class
		// public static $userid;

		// member functions

		public function __construct(){

			//creating instance of class DatabaseConnect class

			$this->udbobj = new DatabaseConnect;

		}

		//getstate function

		public function getStates(){

			//query to select all states in database

			$mysql = "SELECT * from state ";

			//to check if the sql syntax is running

			if ($result = $this->udbobj->udbcon->query($mysql)) {

				$row= $result->fetch_all(MYSQLI_ASSOC);
			}else{

				echo "Opps ".$this->udbobj->udbcon->error;
			}

			return $row;
		}


		//getuniversities function

		public function getUniversities(){

			//query to select all universities in database

			$mysql = "SELECT * from university ";

			//to check if the sql syntax is running

			if ($result = $this->udbobj->udbcon->query($mysql)) {

				$row= $result->fetch_all(MYSQLI_ASSOC);
			}else{

				echo "Opps ".$this->udbobj->udbcon->error;
			}

			return $row;
		}

		//getcourses function

		public function getCourses(){

			//query to select all universities in database

			$mysql = "SELECT * from course_of_study ";

			//to check if the sql syntax is running

			if ($result = $this->udbobj->udbcon->query($mysql)) {

				$row= $result->fetch_all(MYSQLI_ASSOC);
			}else{

				echo "Opps ".$this->udbobj->udbcon->error;
			}

			return $row;
		}

		//getlevel function

		public function getLevel(){

			//query to select all Level in database

			$mysql = "SELECT * from level ";

			//to check if the sql syntax is running

			if ($result = $this->udbobj->udbcon->query($mysql)) {

				$row= $result->fetch_all(MYSQLI_ASSOC);
			}else{

				echo "Opps ".$this->udbobj->udbcon->error;
			}

			return $row;
		}


		//getcountries function

		public function getCountries(){

			//query to select all Country in database

			$mysql = "SELECT * from country ";

			//to check if the sql syntax is running

			if ($result = $this->udbobj->udbcon->query($mysql)) {

				$row= $result->fetch_all(MYSQLI_ASSOC);
			}else{

				echo "Opps ".$this->udbobj->udbcon->error;
			}

			return $row;
		}


		//sanitize input function

		public static function dataSanitize($data){


			$data = trim($data);
			$data = htmlspecialchars($data);
			$data = addslashes($data);

			return $data;
		}


		//create signup method

		public function signUp($email, $fname, $lname, $username, $password, $phone, $stateid, $country, $course, $university, $level, $gender, $usertype){

			$pwd = md5($password);
			$username = strtolower($username);

			//write query to insert into user table

			$sql = "INSERT into user(user_email, user_fname, user_lname, user_username, user_password, user_phone, user_stateid, user_countryid, user_coursestudyid, user_universityid, user_levelid, user_gender, user_typeid) values('$email', '$fname', '$lname', '$username', '$pwd', '$phone', '$stateid', '$country', '$course', '$university', '$level', '$gender', '$usertype')";

			//to check if the query runs

			if ($this->udbobj->udbcon->query($sql) === true) {
				
				//get last inserted userid

				$userid = $this->udbobj->udbcon->insert_id;

				//create session variable

				$_SESSION['userid'] = $userid;
				$_SESSION['email'] = $email;
				$_SESSION['username'] = $username;
				$_SESSION['gender'] = $gender;
				$_SESSION['usertype'] = $usertype;
				$_SESSION['date'] = date('j M Y');

				var_dump($_SESSION['usertype']);


				// redirect to fullregisteration page

				if ($_SESSION['usertype'] == '1') {
					header("Location: http://localhost/6thprojectphp/newuser.php");
					exit;
				}else{

				header("Location: http://localhost/6thprojectphp/buyerpage.php");
				exit;
				}

			}else{

				echo "Opps ".$this->udbobj->udbcon->error;
			}

		}

		


		//create login method

		public function login($email, $password){

			$password = md5($password);

			//write query

			$sql = "SELECT * from user where user_email = '$email' and user_password = '$password' limit 1 ";

			//run  query

			$result = $this->udbobj->udbcon->query($sql);

			//check if number of roles returned is one


			if ($this->udbobj->udbcon->affected_rows == 1) {
				//fetch the result

				$row = $result->fetch_assoc();

				// var_dump($row);
				// exit;

				//create session

				$_SESSION['userid'] = $row['userid'];
				$_SESSION['firstname']= $row['user_fname'];
				$_SESSION['lastname']= $row['user_lname'];
				$_SESSION['photo'] = $row['user_picture'];
				$_SESSION['gender'] = $row['user_gender'];
				$_SESSION['username'] = strtolower($row['user_username']);
				$_SESSION['date'] = date('j M Y', strtotime($row['user_datereg']));
				$_SESSION['usertype'] = $row['user_typeid'];


				// echo $_SESSION['username'];
				// echo "<pre>";
				// print_r($row);
				// echo "</pre>";
				// exit;

				//redirect to user dashboard

				if ($_SESSION['usertype'] == '1') {
					
				

				header("Location: http://localhost/6thprojectphp/newuser.php");
				exit;
			}else{

				header("Location: http://localhost/6thprojectphp/buyerpage.php");
				exit;

				}
			}else{

				//display invalid login credentials

				$result = "<div class='alert alert-danger'>Invalid Email Address or Password</div>";
				// echo "Opps ".$this->udbobj->udbcon->error;	
			}

			return $result;
		}


		public function uploadProfileImage(){

			//check if global varaible $_FILES has a value;

			if ($_FILES['profilephoto']['error'] == 0) {
				# start file upload

				$filesize = $_FILES['profilephoto']['size'];
				$filename = $_FILES['profilephoto']['name'];
				$filetype = $_FILES['profilephoto']['type'];
				$filetempname = $_FILES['profilephoto']['tmp_name'];

				//specify the destination folder to upload fils to
				$folder = "profilepicture/";

				//get the file extension


				$file_ext= explode('.', $filename); //convert string to array
				$file_ext = end($file_ext);	 //get last element of array
				$file_ext = strtolower($file_ext); //convert string to lower case

				//check the file size

				if ($filesize > 2097152) {
					$error[]= "File size must be exactly or less than 2 mb!";
				}

				//specify the extensions allowed

				$extensions = array('png', 'gif', 'jpg', 'jpeg', 'bmp');

				// check if the file extension is valid

				if (in_array($file_ext, $extensions) === false) {
					
					$error[] = "Extention not allowed!";
				}

				//change the file name

				$filename = $filename."_".$_SESSION['userid'];

				$destination = $folder.$filename.".$file_ext";

				// var_dump($destination);

				//now check if there is no other error and upload

				if (!empty(($error))) {

					var_dump($error);
					
				}else{

					//otherwise, upload to the destination folder

					move_uploaded_file($filetempname, $destination);

					//update user_picture column in users table based on the userid

					$myuserid = $_SESSION['userid'];

					//write query to update the table column

					$sql = "UPDATE user set user_picture = '$destination' WHERE userid=$myuserid";

					//run the query

					$result = $this->udbobj->udbcon->query($sql);

					if ($this->udbobj->udbcon->affected_rows == 1) {
						//new session photo
						$_SESSION['photo'] = $destination;

						$result = "<div class ='alert alert-success'> Profile photo uploaded</div>";

						// header("Location: https://localhost/6thprojectphp/userpage.php");

					}else{

					$result = "<div class ='alert alert-danger'> No profile photo uploaded!</div>".$this->udbobj->udbcon->error;
				}
				
			}

		}else{

				$result = "<div class ='alert alert-danger'> You have not uploaded any image!</div>";
			}

			return $result;
		}


		// write method to insert the usertype into database

		public function getUserType(){

			//write sql query

			$sql = "SELECT * from user_type WHERE type_title != 'Admin'";

			//check if the query runs the sql syntax/statement

			if ($result = $this->udbobj->udbcon->query($sql)) {
				
				$row = $result->fetch_all(MYSQLI_ASSOC);

			}else{

				echo "Error: ".$this->ubdobj->ubdcon->error;
			}

			return $row;

			}


			//create method to edit profile description

			public function editDesc($userid, $text){

				//write query

				$sql = "UPDATE user_profile set userid = '$userid', profile_desc = '$text' where userid='$userid' ";

				//execute myquery

				$this->udbobj->udbcon->query($sql);

				//how many rows affected//updated

			if ($this->udbobj->udbcon->affected_rows == 1) {
				//redirect to showallusers.php page
				$msg = "<p class='alert alert-successful'>Profile Description updated successfully</p>";

			}elseif ($this->udbobj->udbcon->affected_rows == 0) {

				$msg ="<p class='alert alert-danger'>Profile Description not updated</p>";

			}else{

				echo "Error: ".$this->udbobj->udbcon->error;
			}

			return $msg;

			}



		
	}


	//create class for gigs

	class Gigs{



		//member variable
		public $udbobj; //object handler for DatabaseConnect class
		// public static $userid;

		// member functions

		public function __construct(){

			//creating instance of class DatabaseConnect class

			$this->udbobj = new DatabaseConnect;

		}

		//create method to get all categories from marketplace table

		public function getCategories(){
			//write sql query

			$sql = "SELECT * from marketplace";

			//run query

			if($result = $this->udbobj->udbcon->query($sql)){

			$row = $result->fetch_all(MYSQLI_ASSOC);

			}else{

				echo "Oops ".$this->udbobj->udbcon->error;
			}

			return $row;

		}


		//create method to get all subcategories from service table

		public function getSubCategories(){
			//write sql query

			$sql = "SELECT * from service";

			//run query

			if($result = $this->udbobj->udbcon->query($sql)){
			$row = $result->fetch_all(MYSQLI_ASSOC);


			}else{

				echo "Oops ".$this->udbobj->udbcon->error;
			}

			return $row;

		}


		//create get language method

		public function getLanguage(){

			//write sql query

			$sql = "SELECT * from language";

			//run query

			if($result = $this->udbobj->udbcon->query($sql)){
			$row = $result->fetch_all(MYSQLI_ASSOC);


			}else{

				echo "Oops ".$this->udbobj->udbcon->error;
			}

			return $row;

		}




		//ceate method to populate gig table

		public function insertGig($gigTitle, $gigUserid, $premium_title, $standard_title, $basic_title, $premium_desc, $standard_desc, $basic_desc, $premium_cd, $standard_cd, $basic_cd, $premium_rd, $standard_rd, $basic_rd, $premium_sc, $standard_sc, $basic_sc, $premium_pages, $standard_pages, $basic_pages, $premium_revisions, $standard_revisions, $basic_revisions, $premium_delivery, $standard_delivery, $basic_delivery, $premium_price, $standard_price, $basic_price, $requirement, $gig_serviceid, $gig_marketid, $languageid){

			//write query

			if (!empty($gigTitle)) {
				
			

			$sql = "INSERT into gig(gig_title, gig_userid, premium_title, standard_title, basic_title, premium_desc, standard_desc, basic_desc, premium_cd, standard_cd, basic_cd, premium_rd, standard_rd, basic_rd, premium_sc, standard_sc, basic_sc, premium_pages, standard_pages, basic_pages, premium_revisions, standard_revisions, basic_revisions, premium_delivery, standard_delivery, basic_delivery, premium_price, standard_price, basic_price, requirement, gig_serviceid, gig_marketid, $languageid) values('$gigTitle', '$gigUserid', '$premium_title', '$standard_title', '$basic_title', '$premium_desc', '$standard_desc', '$basic_desc', '$premium_cd', '$standard_cd', '$basic_cd', '$premium_rd', '$standard_rd', '$basic_rd', '$premium_sc', '$standard_sc', '$basic_sc', '$premium_pages', '$standard_pages', '$basic_pages', '$premium_revisions', '$standard_revisions', '$basic_revisions', '$premium_delivery', '$standard_delivery', '$basic_delivery', '$premium_price', '$standard_price', '$basic_price', '$requirement', '$gig_serviceid', '$gig_marketid', '$languageid')";

			// var_dump($gig_marketid);
			// exit;

			//check if the query() runs //data is inserted into gig table

			if ($this->udbobj->udbcon->query($sql) === true) {
				//get last inserted user_id

				$gigid = $this->udbobj->udbcon->insert_id;

				//create session variable

				$_SESSION['gigid'] = $gigid;
				$_SESSION['title']= $gigTitle;

				//redirect to dashboard

				// header('Location: http://localhost/6thprojectphp/newuser.php');
				// exit;

			}else{

				echo "Error ".$this->udbobj->udbcon->error;
			}

		}

		}


		//method to get all gig created by a seller user

		public function getGigs($userid){



			//write query

			$sql = "SELECT  gig.*, user.* from gig
			 		left join user on gig.gig_userid = user.userid where gig.gig_userid = '$userid' ";

			 		//$row = array();


		//execute the query

		$result = $this->udbobj->udbcon->query($sql);
		if ($this->udbobj->udbcon->affected_rows > 0) {
			$row = $result->fetch_all(MYSQLI_ASSOC);
		}else{

			echo "Error: .".$this->dbobj->dbcon->error;

			//echo "<div class='alert alert-danger'>No Record Found</div>";
		}

		return $row;
		}



		//get webdev gigs without parameter


		// public function getDevGigs(){



		// 	//write query

		// 	$sql = "SELECT  gig.*, user.* from gig
		// 	 		left join user on gig.gig_userid = user.userid where gig.gig_serviceid = '65' ";

		// 	 		//$row = array();


		// //execute the query

		// $result = $this->udbobj->udbcon->query($sql);
		// if ($this->udbobj->udbcon->affected_rows > 0) {
		// 	$row = $result->fetch_all(MYSQLI_ASSOC);
		// }else{

		// 	echo "Error: .".$this->dbobj->dbcon->error;

		// 	//echo "<div class='alert alert-danger'>No Record Found</div>";
		// }

		// return $row;
		// }




			//fetch  gigs randomly from users table

	public function getDev8(){

		//write query  
		$sql = "SELECT  gig.*, user.*, language.* from gig left join user on gig.gig_userid = user.userid left join language on gig.languageid = language.languageid /*WHERE gig.gig_serviceid = '65'*/ order by rand() limit 8 ";
		$row = array();

		//execute the query

		$result = $this->udbobj->udbcon->query($sql);
		if ($this->udbobj->udbcon->affected_rows > 0) {
			$row = $result->fetch_all(MYSQLI_ASSOC);
			
		}else{

			//echo "Error: .".$this->dbobj->dbcon->error;

			echo "<div class='alert alert-danger'>No Record Found</div>";
		}

		return $row;
	}



		//fetch  specific dev gigs from gig table


		public function getFeaturedDev12($lang){

			//write query  
		$sql = "SELECT  gig.*, user.*, language.* from gig left join user on gig.gig_userid = user.userid left join language on gig.languageid = language.languageid WHERE gig.languageid = '$lang' /*and gig.gig_serviceid = '65'*/ order by user_datereg limit 12 ";

		$row = array();

		//execute query

		$result = $this->udbobj->udbcon->query($sql);

		if ($this->udbobj->udbcon->affected_rows > 0) {
			$row = $result->fetch_all(MYSQLI_ASSOC);
		}else{

			// echo "Error: .".$this->udbobj->udbcon->error;

			echo "<div class='alert alert-danger'>No Record Found</div>";
		}

		return $row;

		//see output at displayDevgig.php
		}



		//function to search categories and sub categories

		public function getSearchedGigs12($market, $service){

			//write query  
		$sql = "SELECT  gig.*, user.*, marketplace.* from gig left join user on gig.gig_userid = user.userid WHERE gig.gig_marketid = '$market' and gig.gig_serviceid = '$service' order by user_datereg limit 12 ";

		$row = array();

		//execute query

		$result = $this->udbobj->udbcon->query($sql);

		if ($this->udbobj->udbcon->affected_rows > 0) {
			$row = $result->fetch_all(MYSQLI_ASSOC);
		}else{

			// echo "Error: .".$this->udbobj->udbcon->error;

			echo "<div class='alert alert-danger'>No Record Found</div>";
		}

		return $row;

		//see output at displaysearchgig.php
		}


		
	}


	

?>