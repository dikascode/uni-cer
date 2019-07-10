Modal for creating username and Password -->

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


<!-- from result page -->



  </div>


  <!-- External javacript -->
  

  <!-- jQuery -->
  <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.js"></script>
  
  <!-- Popper -->
  <script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
  
  <!-- Bootstrap Js -->
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

  <script type="text/javascript" src="js/unilancer.js"></script>

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
        <form method="post" action="fullregisteration.html">
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
              <input class="form-control" type="text" name="" placeholder="Enter your email">
            </div>
          </div>

          <div class="row marginbott">
            <div class="col-md">
              <button type="submit" class="btn purplebg btn-lg btn-block" style="color: white">Continue</button>
               <p style="color:black">By joining I agree to receive emails from Unilancer.</p>
            </div>
          </div>

        </form>
      </div>
      <div class="modal-footer">
      
       
       <p style="color:grey">Already a member? <a href="#" style="color: green">Sign In</a></p>
      </div>
    </div>
  </div>
</div>



</body>
</html>




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


<!-- from registeration page -->


  <!-- <div class="row form-group">
          <div class="col-md marginbott form-check">
             <input id="buyer_btn" class="form-check-input activity" type="radio" name="activity" value="Buyer" <?php if (isset($_REQUEST['activity']) && $_REQUEST['activity'] == 'Buyer'){ echo 'checked';} ?> ><label class="form-check-label">Buyer</label><br>

            <input id="seller_btn" class="form-check-input activity" type="radio" name="activity" value="Seller" <?php if (isset($_REQUEST['activity']) && $_REQUEST['activity'] == 'Seller'){ echo 'checked';} ?>> <label class="form-check-label">Seller</label>

            <?php if (isset($reg_err['activity'])){echo $reg_err['activity'];}?>
          </div>

        </div>



    from uni class -->

    <?php


    if ($_SESSION['usertype'] == '1') {
          header("Location: http://localhost/6thprojectphp/newuser.php");
          exit;

        }else{

          echo "Opps ".$this->udbobj->udbcon->error;
        }

        if($_SESSION['usertype'] == '2'){

          header("Location: http://localhost/6thprojectphp/buyerpage.php");
          exit;
        }else{

          echo "Opps ".$this->udbobj->udbcon->error;
        }
?>


<!-- Sort by from result page -->


<div class="col-md dropdown">
            <h4><span>Sort by: </span>
              <a href="#" class="codelang"><span role="button" class="dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b>Best Selling</b></span></a></h4>

              <!-- Error here to be fixed -->

              <div class="dropdown-menu">
                <a class="dropdown-item" href="#"> Best Selling</a>
                 <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"></a>
                 <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                 <div class="dropdown-divider"></div></a>
                
               
                <!-- <a class="dropdown-item" href="#">Separated link</a> -->
              </div>
          </div>



<!-- From Development -->


  <div class="col-md-3">
        <div class="row">
          <div class="col-md">
            <ul>
              <p>Delivery Time</p>
              <li><input type="radio" name="time"> Up to 24 hours</li>
              <li><input type="radio" name="time"> Up to 3 days</li>
              <li><input type="radio" name="time"> Up to 7 days</li>
              <li><input type="radio" name="time"> Any</li>
            </ul>
            <hr>
          </div>
        </div>

        <!-- <div class="row">
          <div class="col-md">
            
            <span>N</span><input class="form-control" type="text" name=""> 
          </div>

          <div class="col-md">
            <span>To</span><input class="" type="" name="">
          </div>
          
        </div> -->
      <!-- </div> -->


<!-- from web development.php -->


      <div class="row">
          <div class="col-md">
            <div class="row">
              <div class="col-md">
                <div class="userHeader"><img src="images/ab.jpg" width="200"></div>
              </div>
            </div>

            <div class="row">
              <div class="col-md">
                <h6><a href="#">dikacoder</a></h6>
                <p>I will build a very responsive web</p>
                <hr>
                <p></p>
              </div>
            </div>
          </div>

          <div class="col-md">
            <div class="row">
              <div class="col-md">
                <div class="userHeader"><img src="images/abc.jpg" width="200"></div>
              </div>
            </div>

            <div class="row">
              <div class="col-md">
                <h6><a href="#">dikacoder</a></h6>
                <p>I will build a very responsive web</p>
                <hr>
                <p></p>
              </div>
            </div>
          </div>

          <div class="col-md">
            <div class="row">
              <div class="col-md">
                <div class="userHeader"><img src="images/laptop-3190194_1920.jpg" width="200" height="120"></div>
              </div>
            </div>

            <div class="row">
              <div class="col-md">
                <h6><a href="#">dikacoder</a></h6>
                <p>I will build a very responsive web</p>
                <hr>
                <p></p>
              </div>
            </div>
          </div>


          <div class="col-md">
            <div class="row">
              <div class="col-md">
                <div class="userHeader"><img src="images/code-1839406_1920.jpg" width="200" height="120"></div>
              </div>
            </div>

            <div class="row">
              <div class="col-md">
                <h6><a href="#">dikacoder</a></h6>
                <p>I will build a very responsive web</p>
                <hr>
                <p></p>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md">
            <div class="row">
              <div class="col-md">
                <div class="userHeader"><img src="images/ab.jpg" width="200"></div>
              </div>
            </div>

            <div class="row">
              <div class="col-md">
                <h6><a href="#">dikacoder</a></h6>
                <p>I will build a very responsive web</p>
                <hr>
                <p></p>
              </div>
            </div>
          </div>

          <div class="col-md">
            <div class="row">
              <div class="col-md">
                <div class="userHeader"><img src="images/abc.jpg" width="200"></div>
              </div>
            </div>

            <div class="row">
              <div class="col-md">
                <h6><a href="#">dikacoder</a></h6>
                <p>I will build a very responsive web</p>
                <hr>
                <p></p>
              </div>
            </div>
          </div>

          <div class="col-md">
            <div class="row">
              <div class="col-md">
                <div class="userHeader"><img src="images/laptop-3190194_1920.jpg" width="200" height="120"></div>
              </div>
            </div>

            <div class="row">
              <div class="col-md">
                <h6><a href="#">dikacoder</a></h6>
                <p>I will build a very responsive web</p>
                <hr>
                <p></p>
              </div>
            </div>
          </div>


          <div class="col-md">
            <div class="row">
              <div class="col-md">
                <div class="userHeader"><img src="images/code-1839406_1920.jpg" width="200" height="120"></div>
              </div>
            </div>

            <div class="row">
              <div class="col-md">
                <h6><a href="#">dikacoder</a></h6>
                <p>I will build a very responsive web</p>
                <hr>
                <p></p>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md">
            <div class="row">
              <div class="col-md">
                <div class="userHeader"><img src="images/ab.jpg" width="200"></div>
              </div>
            </div>

            <div class="row">
              <div class="col-md">
                <h6><a href="#">dikacoder</a></h6>
                <p>I will build a very responsive web</p>
                <hr>
                <p></p>
              </div>
            </div>
          </div>

          <div class="col-md">
            <div class="row">
              <div class="col-md">
                <div class="userHeader"><img src="images/abc.jpg" width="200"></div>
              </div>
            </div>

            <div class="row">
              <div class="col-md">
                <h6><a href="#">dikacoder</a></h6>
                <p>I will build a very responsive web</p>
                <hr>
                <p></p>
              </div>
            </div>
          </div>

          <div class="col-md">
            <div class="row">
              <div class="col-md">
                <div class="userHeader"><img src="images/laptop-3190194_1920.jpg" width="200" height="120"></div>
              </div>
            </div>

            <div class="row">
              <div class="col-md">
                <h6><a href="#">dikacoder</a></h6>
                <p>I will build a very responsive web</p>
                <hr>
                <p></p>
              </div>
            </div>
          </div>


          <div class="col-md">
            <div class="row">
              <div class="col-md">
                <div class="userHeader"><img src="images/code-1839406_1920.jpg" width="200" height="120"></div>
              </div>
            </div>

            <div class="row">
              <div class="col-md">
                <h6><a href="#">dikacoder</a></h6>
                <p>I will build a very responsive web</p>
                <hr>
                <p></p>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md">
            <div class="row">
              <div class="col-md">
                <div class="userHeader"><img src="images/ab.jpg" width="200"></div>
              </div>
            </div>

            <div class="row">
              <div class="col-md">
                <h6><a href="#">dikacoder</a></h6>
                <p>I will build a very responsive web</p>
                <hr>
                <p></p>
              </div>
            </div>
          </div>

          <div class="col-md">
            <div class="row">
              <div class="col-md">
                <div class="userHeader"><img src="images/abc.jpg" width="200"></div>
              </div>
            </div>

            <div class="row">
              <div class="col-md">
                <h6><a href="#">dikacoder</a></h6>
                <p>I will build a very responsive web</p>
                <hr>
                <p></p>
              </div>
            </div>
          </div>

          <div class="col-md">
            <div class="row">
              <div class="col-md">
                <div class="userHeader"><img src="images/laptop-3190194_1920.jpg" width="200" height="120"></div>
              </div>
            </div>

            <div class="row">
              <div class="col-md">
                <h6><a href="#">dikacoder</a></h6>
                <p>I will build a very responsive web</p>
                <hr>
                <p></p>
              </div>
            </div>
          </div>


          <div class="col-md">
            <div class="row">
              <div class="col-md">
                <div class="userHeader"><img src="images/code-1839406_1920.jpg" width="200" height="120"></div>
              </div>
            </div>

            <div class="row">
              <div class="col-md">
                <h6><a href="#">dikacoder</a></h6>
                <p>I will build a very responsive web</p>
                <hr>
                <p></p>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md">
            <div class="row">
              <div class="col-md">
                <div class="userHeader"><img src="images/ab.jpg" width="200"></div>
              </div>
            </div>

            <div class="row">
              <div class="col-md">
                <h6><a href="#">dikacoder</a></h6>
                <p>I will build a very responsive web</p>
                <hr>
                <p></p>
              </div>
            </div>
          </div>

          <div class="col-md">
            <div class="row">
              <div class="col-md">
                <div class="userHeader"><img src="images/abc.jpg" width="200"></div>
              </div>
            </div>

            <div class="row">
              <div class="col-md">
                <h6><a href="#">dikacoder</a></h6>
                <p>I will build a very responsive web</p>
                <hr>
                <p></p>
              </div>
            </div>
          </div>

          <div class="col-md">
            <div class="row">
              <div class="col-md">
                <div class="userHeader"><img src="images/laptop-3190194_1920.jpg" width="200" height="120"></div>
              </div>
            </div>

            <div class="row">
              <div class="col-md">
                <h6><a href="#">dikacoder</a></h6>
                <p>I will build a very responsive web</p>
                <hr>
                <p></p>
              </div>
            </div>
          </div>


          <div class="col-md">
            <div class="row">
              <div class="col-md">
                <div class="userHeader"><img src="images/code-1839406_1920.jpg" width="200" height="120"></div>
              </div>
            </div>

            <div class="row">
              <div class="col-md">
                <h6><a href="#">dikacoder</a></h6>
                <p>I will build a very responsive web</p>
                <hr>
                <p></p>
              </div>
            </div>
          </div>
        </div>

      </div>



      <?php

        '$gigTitle', '$gigUserid', '$premium_title', '$standard_title', '$basic_title', '$premium_desc', '$standard_desc', '$basic_desc', '$premium_cd', '$standard_cd', '$basic_cd', '$premium_rd', '$standard_rd', '$basic_rd', '$premium_sc', '$standard_sc', '$basic_sc', '$premium_pages', '$standard_pages', '$basic_pages', '$premium_revisions', '$standard_revisions', '$basic_revisions', '$premium_delivery', '$standard_delivery', '$basic_delivery', '$premium_price', '$standard_price', '$basic_price', '$requirement', '$gig_serviceid', '$gig_marketid', '$languageid'

        //from insert gig

      ?>

<!-- from javasccript fpt edit description in newuser side bar -->
<script type="text/javascript">
      $('#editDesc').click(function(){

    // alert('hi');

    //hide the previous div housing the previous description



    //get the string from the p tag inner html
    var user_Desc = $('#userDesc').html();
    // $('#userDesc').hide();

    // alert(user_Desc);

    $('#userDesc').load("editdesc.php", {output:user_Desc});

    

        //document.getElementById('userDesc').innerHTML = data;
    

  });</script>



<!-- From unilancer js -->

  <script type="text/javascript">
    
  //validation for create gig form

  // $('#gig_create_btn').click(function() {

  //  // alert('We are here');

  //  if($('#title_').html('')){

  //    $('#err_title').html('Title Field is required').addClass('text-danger');
  //  }

//category validation
    // if ($('#category option[value="category"]').prop('selected')){


    //  $('#err_cat').html('Select a Category').addClass('text-danger');

    // }

//subcatogory validation

    // if ($('#subcategory option[value="subcategory"]').prop('selected')){


    //  $('#err_subcat').html('Select a Subcategory').addClass('text-danger');

    // }

//plan title n offer validation

    // if($('#premium').html('')){

    //  $('#err_premium').html('Plan title is required').addClass('text-danger');
    // }

    // if($('#standard').html('')){

    //  $('#err_standard').html('Plan title is required').addClass('text-danger');
    // }

    // if($('#basic').html('')){

    //  $('#err_basic').html('Plan title is required').addClass('text-danger');
    // }

    // if($('#premium_offer').html('')){

    //  $('#err_premium1').html('Plan offer is required').addClass('text-danger');
    // }

    // if($('#standard_offer').html('')){

    //  $('#err_standard1').html('Plan offer is required').addClass('text-danger');
    // }

    // if($('#basic_offer').html('')){

    //  $('#err_basic1').html('Plan offer is required').addClass('text-danger');
    // }



//time and amount validation

    // if ($('#premium_time option[value="days"]').prop('selected')){

    //  $('#err_time1').html('Select delivery time').addClass('text-danger');

    // }

    // if ($('#standard_time option[value="days"]').prop('selected')){

    //  $('#err_time2').html('Select delivery time').addClass('text-danger');

    // }

    // if ($('#basic_time option[value="days"]').prop('selected')){

    //  $('#err_time3').html('Select delivery time').addClass('text-danger');

    // }



    // if ($('input').attr('name','premium_price').val() =='') {
        
      
    //  $('#err_price1').html('Price field required').addClass('text-danger');
    // }

    // if ($('input').attr('name','standard_price').val() =='') {
        
      
    //  $('#err_price2').html('Price field required').addClass('text-danger');
    // }

    // if ($('input').attr('name','basic_price').val() =='') {
        
      
    //  $('#err_price3').html('Price field required').addClass('text-danger');
    // }


from paystack 

 // (<?php echo $orderprice; ?>, <?php echo $gigid; ?>, <?php echo $buyer_email; ?>, <?php echo $sellerid ?>, <?php echo $buyerid; ?>, <?php echo $desc; ?>, <?php echo $ordertime; ?>)





      

  // });
  </script>



<!--   from edit gig
hard coded delivery time -->

<td>Delivery Time</td>
                    <td class="my-textAlign">
                      <select id="premium_time" class="form-control" name="p_delivery">
                        <option value="">Select Days</option>
                        <option <?php if(isset($_REQUEST['p_delivery']) && $_REQUEST['p_delivery'] == '1'  ){ echo "value='1' selected";
                            }else{echo "value='1'";}?>>1 Day</option>

                        <option <?php if(isset($_REQUEST['p_delivery']) && $_REQUEST['p_delivery'] == '2'  ){ echo "value='2' selected";
                            }else{echo "value='2'";}?>>2 Days</option>

                        <option <?php if(isset($_REQUEST['p_delivery']) && $_REQUEST['p_delivery'] == '3'  ){ echo "value='3' selected";
                            }else{echo "value='3'";}?>>3 Days</option>

                        <option <?php if(isset($_REQUEST['p_delivery']) && $_REQUEST['p_delivery'] == '4'  ){ echo "value='4 ' selected";
                            }else{echo "value='4'";}?>value="4">4 Days</option>

                        <option <?php if(isset($_REQUEST['p_delivery']) && $_REQUEST['p_delivery'] == '5'  ){ echo "value='5' selected";
                            }else{echo "value='5'";}?>>5 Days</option>

                        <option <?php if(isset($_REQUEST['p_delivery']) && $_REQUEST['p_delivery'] == '6'  ){ echo "value='6' selected";
                            }else{echo "value='6'";}?>>6 Days</option>

                        <option <?php if(isset($_REQUEST['p_delivery']) && $_REQUEST['p_delivery'] == '7'  ){ echo "value='7' selected";
                            }else{echo "value='7'";}?>>7 Days</option>

                        <option <?php if(isset($_REQUEST['p_delivery']) && $_REQUEST['p_delivery'] == '8'  ){ echo "value='' selected";
                            }else{echo "value='8'";}?>>8 Days</option>

                        <option <?php if(isset($_REQUEST['p_delivery']) && $_REQUEST['p_delivery'] == '9'  ){ echo "value='9' selected";
                            }else{echo "value='9'";}?>>9 Days</option>

                        <option <?php if(isset($_REQUEST['p_delivery']) && $_REQUEST['p_delivery'] == '10'  ){ echo "value='10' selected";
                            }else{echo "value='10'";}?>>10 Days</option>

                        <option <?php if(isset($_REQUEST['p_delivery']) && $_REQUEST['p_delivery'] == '11'  ){ echo "value='11' selected";
                            }else{echo "value='11'";}?>>11 Days</option>

                        <option <?php if(isset($_REQUEST['p_delivery']) && $_REQUEST['p_delivery'] == '12'  ){ echo "value='12' selected";
                            }else{echo "value='12'";}?>>12 Days</option>

                        <option <?php if(isset($_REQUEST['p_delivery']) && $_REQUEST['p_delivery'] == '13'  ){ echo "value='13' selected";
                            }else{echo "value='13'";}?>>13 Days</option>

                        <option <?php if(isset($_REQUEST['p_delivery']) && $_REQUEST['p_delivery'] == '14'  ){ echo "value='14' selected";
                            }else{echo "value='14'";}?>>14 Days</option>

                        <option <?php if(isset($_REQUEST['p_delivery']) && $_REQUEST['p_delivery'] == '15'  ){ echo "value='15' selected";
                            }else{echo "value='15'";}?>>15 Days</option>

                        <option <?php if(isset($_REQUEST['p_delivery']) && $_REQUEST['p_delivery'] == '16'  ){ echo "value='16' selected";
                            }else{echo "value='16'";}?>>16 Days</option>

                        <option <?php if(isset($_REQUEST['p_delivery']) && $_REQUEST['p_delivery'] == '17'  ){ echo "value='17' selected";
                            }else{echo "value='17'";}?>>17 Days</option>

                        <option <?php if(isset($_REQUEST['p_delivery']) && $_REQUEST['p_delivery'] == '18'  ){ echo "value='18' selected";
                            }else{echo "value='18'";}?>>18 Days</option>

                        <option <?php if(isset($_REQUEST['p_delivery']) && $_REQUEST['p_delivery'] == '19'  ){ echo "value='19' selected";
                            }else{echo "value='19'";}?>>19 Days</option>

                        <option <?php if(isset($_REQUEST['p_delivery']) && $_REQUEST['p_delivery'] == '20'  ){ echo "value='20' selected";
                            }else{echo "value='20'";}?>>20 Days</option>

                        <option <?php if(isset($_REQUEST['p_delivery']) && $_REQUEST['p_delivery'] == '30'  ){ echo "value='30' selected";
                            }else{echo "value='30'";}?>>30 Days</option>

                        <option <?php if(isset($_REQUEST['p_delivery']) && $_REQUEST['p_delivery'] == '60'  ){ echo "value='60' selected";
                            }else{echo "value='60'";}?>>2 Months</option>
                      </select>
                      <span id="err_time1"><?php if (isset($reg_err['p_delivery'])){echo $reg_err['p_delivery'];}?></span>
                    </td>