<!-- Modal for creating username and Password -->

<div class="modal fade" id="usernamePwd_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="accessModalTitle" style="margin-left: 35%">Login to Unilancer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
        	<div class="row marginbott">
        		<div class="col-md">
        			<input id="signin_email" class="form-control" type="text" name="signin_email" placeholder="Type your Email"><span id="err_email"></span>
        			<?php if(isset($err_e_signin)){ echo $err_e_signin;}  ?>
        		</div>
        	</div>

        	<div class="row marginbott">
        		<div class="col-md">
        			<input id="signin_pwd" class="form-control" type="password" name="sigin_pwd" placeholder="Type your Password"><span id="err_pwd"></span>
        			<?php if(isset($err_p_signin)){ echo $err_p_signin;}  ?>
        		</div>
        	</div>

        	<hr>
        

        	<div class="row marginbott">
        		<div class="col-md">
        			<input id="login_button" name="signin_submit" type="submit" class="btn btn-lg btn-block purplebg" style="color: white" value="Continue">
        			 <!-- <p style="color:black">By signing up, I agree to Unilancer's <a class="purpletext" href="#">Terms of service</a></p>
        			 <p style="color:black">By joining I agree to receive emails from Unilancer.</p> -->
        		</div>
        	</div>

        </form>
      </div>
      <div class="modal-footer">
      
       
       <p style="color:grey">Not a member? <a id="join_now_modal_link" href="#" style="color: #4B0082" data-toggle="toggle" data-target="#accessModal">Join Now</a></p>
      </div>
    </div>
  </div>
</div>




<!-- from index page -->

<?php

if (isset($_POST['modal_submit']) && ($_SERVER['REQUEST_METHOD'] == 'POST') && ($_POST['modal_submit'] == 'Continue')) {
        $sgnup_email = $_REQUEST['modal_email'];

        //modal sign up validation

        if(empty($sgnup_email)){

          $err_signup = "<div class='text-danger'>Email field required</div>";
        }elseif (!filter_var($sgnup_email, FILTER_VALIDATE_EMAIL)) {
          $err_signup = "<div class='text-danger'>Please enter a valid email</div>";
        }
      }




        if(isset($_POST['signin_submit']) && ( $_POST['signin_submit'] == 'Continue') && ( $_SERVER['REQUEST_METHOD'] == 'POST')) {

        //sign in validation

        $login_email = $_REQUEST['signin_email'];
        $login_pwd = $_REQUEST['sigin_pwd'];

        if (empty($login_email)){

          $err_e_signin = "<div class='text-danger'> Email field required</div>";
        }elseif (!filter_var($login_email, FILTER_VALIDATE_EMAIL)) {
          $err_e_signin = "<div class='text-danger'> Please enter a valid email</div>";
        }


        if (empty($login_pwd)) {
          $err_p_signin = "<div class='text-danger'> Password field required</div>";
        }
      }

    ?>



    <!-- from full registration page -->

    <div class="row">
      
      <div class="col-md">
        <h5 class="marginside">Hi <span>
          <?php

            session_start();

            //recall session

            // if($_SESSION['userid']) {
              
              echo $_SESSION['email'];
            // }
          ?> 
      </span>, please complete your registeration.</h5>
      </div>
    </div>


    <!-- from index page -->

<?php
    //server side validation

      // var_dump($_POST['modal_submit']) ;

      if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $sgnup_email = User::dataSanitize($_REQUEST['modal_email']);

        //modal sign up validation

        if(empty($sgnup_email)){

          $err_signup = "<div class='text-danger'>Email field required</div>";
        }elseif (!filter_var($sgnup_email, FILTER_VALIDATE_EMAIL)) {
          $err_signup = "<div class='text-danger'>Please enter a valid email</div>";
        }


        //check if there is no validation error

        if (empty($err_signup)) {
          
          //create object of user class and reference signup method

          $signupobj= new User;

          $signupobj->signUp($sgnup_email);
        }
      }

    ?>



  <!-- Modal -->
<div class="modal fade" id="accessModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="accessModalTitle" style="margin-left: 35%">Join Unilancer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!-- modal form -->
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
          <div class="row marginbott">
            <div class="col-md">
              <button type="button" class="btn btn-primary btn-lg btn-block">Continue with Facebook</button>
            </div>
          </div>

          <div class="row marginbott">
            <div class="col-md">
              <button type="button" class="btn btn-outline-danger btn-lg btn-block">Continue with Google</button>
            </div>
          </div>

          <hr>
          <div class="form-row marginbott">
            <div class="col-md">
              <input id="index_modal_email" class="form-control" type="text" name="modal_email" placeholder="Enter your email"><span id="err_msg"></span>
              <?php if(isset($err_signup)){ echo $err_signup;}  ?>
            </div>

          </div>

          <div class="row marginbott">
            <div class="col-md">
              <input id="index_modal_button" name="modal_submit" value="Continue" type="submit" class="btn purplebg btn-lg btn-block" style="color: white;">
               <p style="color:black">By joining I agree to receive emails from Unilancer.</p>
            </div>
          </div>

        </form>
      </div>
      <div class="modal-footer">
      
       
       <p style="color:grey">Already a member? <a href="signin.php" class="sigin_link"  style="color: #4B0082">Sign In</a></p>
      </div>
    </div>
  </div>
</div>



</div>


  <!-- External javacript -->
  

  <!-- jQuery -->
  <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.js"></script>
  
  <!-- Popper -->
  <script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
  
  <!-- Bootstrap Js -->
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

  <script type="text/javascript" src="js/unilancer.js"></script>




</body>
</html>




<!-- scrap from userside bar -->

<?php

{if ($_SESSION['gender'] == 'Male') 

else{
              
              ?>
                <img class="img-fluid rounded-circle" style="width: 100px; height: 100px;" src="images/woman-avatar.png" ><br>
                <a href="uploadProfilePic.php">Upload Profile Picture</a> 

              <?php

              }

?>