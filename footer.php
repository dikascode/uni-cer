		<!-- Html Footer syntax -->

	<div id="footer" class="row">
			<div class="col-md">
				<div class="row">
					<div class="col-md">
						<h4>Unilancer Logo</h4>
					</div>

					<div class="col-md">
						<h4>Company</h4>
						<p><a href="">About Us</a></p>
						<p><a href="">Testimonies</a></p>
					</div>

					<div class="col-md">
						<h4>Information</h4>
						<p><a href="">Terms of service</a></p>
						<p><a href="">Privacy policy</a></p>
						<p><a href="">FAQ</a></p>
					</div>

					<div class="col-md">
						<h4>Information</h4>
						<p><a href="">Terms of service</a></p>
						<p><a href="">Privacy policy</a></p>
						<p><a href="">FAQ</a></p>
					</div>

					<div class="col-md">
						<h4>Social Media</h4>
						<p><a href="">Terms of service</a></p>
						<p><a href="">Privacy policy</a></p>
						<p><a href="">FAQ</a></p>
					</div>
				</div>

				<div class="row">
					<div class="col-md">
						
					</div>
				</div>
			</div>
		</div>


<!-- 	</div> -->


	<!-- External javacript -->
	

	<!-- jQuery -->
	<script type="text/javascript" src="bootstrap/js/jquery-3.3.1.js"></script>
	
	<!-- Popper -->
	<script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
	
	<!-- Bootstrap Js -->
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="js/unilancer.js"></script>

	<script type="text/javascript">
		
		$(document).ready(function(){


	//dispaly Dev8 once this page load using $.get method
			$.get("displayDevGig.php", function(data){

				document.getElementById('devgig').innerHTML = data;
			});

			//display 12 dev gigs once you change the value of  language drop down box


	$('#language').change(function(){


			//get language value

			var language = $('#language').val();

			//send the parameters to displaydevpro.php using $.ajax method


			$.ajax({

				type: "POST",
				url: "displayDevGig.php",
				data: "language=" + language,
				success: function(response){

					document.getElementById('devgig').innerHTML =response;

				}

			});


	});


	//FOR SEARCH RESULTS


	//dispaly Dev8 once this page load using $.get method
			$.get("displaysearchGig.php", function(data){


				document.getElementById('searchgig').innerHTML = data;
			});

			//display 12 dev gigs once you change the value of  language drop down box


	$('#category').change(function(){


			//get category value

			var category = $('#category').val();

			//get subcategory value

			var subcategory = $('#subcategory').val();

			//send the parameters to displaydevpro.php using $.ajax method


			$.ajax({


				type: "POST",
				url: "displaysearchGig.php",
				data: "category=" + category + "&subcategory=" + subcategory,
				success: function(response){

					document.getElementById('searchgig').innerHTML =response;

					////see output at displaysearchgig.php

				}


			});

		});


	//to display subcategories in drop down using jquery $.ajax method

	$('#category').change(function(){

		var categoryid = $('#category').val();

		$.ajax({

					type: "POST",
					url: "ajaxservice.php",
					data: "marketid=" + categoryid,
					success: function(response){

						document.getElementById('subcategory').innerHTML = response;

					}
				});
	});


	$('#search').keyup(function(){



				//get value from the input field

				var user = $(this).val();

				//send the data to search.php using jQuery load method

				$('#displaySearch').load("searchplace.php", {userOutput:user});


			});
})
	</script>

	<script src="https://js.paystack.co/v1/inline.js"></script>


	<script>
			  function payWithPaystack(price, orderid){
			    var handler = PaystackPop.setup({
			      key: 'pk_test_733c67948e744a72a1b48bf9429764cb1d3c2ca2',
			      email: 'customer@email.com',
			      amount: price,
			      currency: "NGN",
			      ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
			      metadata: {
			         custom_fields: [
			            {
			                display_name: "Mobile Number",
			                variable_name: "mobile_number",
			                value: "+2348012345678"
			            }
			         ]
			      },
			      callback: function(response){

			      	//console.log(response);
			      	 var status = "Paid";
			          var userid = "4";

			          if(response.status == 'success'){

			      	window.location = "trans.php?myprice=" + price + "&myproductid=" + productid + "&mystatus=" + status + "&myuserid=" + userid + "&mytransref=" + response.trxref;
			      	}

			          //alert('success. transaction ref is ' + response.reference);
			         
			          //use AJAX to update or insert payment info into database
			         // $.post("trans.php", {myprice: price, myproductid: productid, mystatus: status, myuserid: userid, mytransref: response.trxref });
			      },
			      onClose: function(){
			          alert('window closed');
			      }
			    });
			    handler.openIframe();
			  }
</script>

	</body>
</html>

<?php ob_end_flush() ?>