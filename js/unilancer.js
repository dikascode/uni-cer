
// alert('input username');
$(document).ready(function(){


	$('#index_modal_button').click( function(){

	

		if ($('#index_modal_email').val().trim() == '') {
			

			$('#err_msg').html('Email address field is required').addClass('text-danger');
			// alert('Email address field is required');
		}

	});


	$('.sigin_link').click(function(){


			$('#accessModal').hide();
			$('#usernamePwd_modal').show();

	});


	$('#join_now_modal_link').click(function(){


			$('#accessModal').show();
			$('#usernamePwd_modal').hide();

	});


	$('#login_button').click( function(){




		if ($('#signin_email').val().trim() == '') {
			

			$('#err_email').html('Email address field is required').addClass('text-danger');
			
			
		}


		if($('#signin_pwd').val() == ''){
			
			$('#err_pwd').html('Password address field is required').addClass('text-danger');

		}

	});

	

	//here the education info remains hidden until the seller radio button is checked



	//by the default the personal information section available;

	$('#edu_info').hide();

	//if statement to hide educational infomation or not

	$('#activity').click(function(){

		 

		if ($('#activity option[value="2"]').prop('selected')) {

			// alert('hi');

		$('#edu_info').hide();
	}

	if($('#activity option[value="1"]').prop('selected')){
		$('#edu_info').show();
	}else{
		$('#edu_info').hide();
	}

	});



	// $('#seller_btn').click(function(){

		

	// });



	$('#reg_btn').click(function(){

		// alert('hi');



			//buyer form validation
			

				if ($('#fnam').val().trim()=='') {
					
					
					$('#err_text1').html('First Namkdngvnfdjgdjfe field is required').addClass('text-danger');
				}

				if ($('input').attr('name','lname').val().trim()=='') {
					
					
					$('#err_text2').html('Last Name field not is required').addClass('text-danger');
				}

				if ($('input').attr('name','username').val().trim()=='') {
					
					
					$('#err_text3').html('Username field is required').addClass('text-danger');
				}

				if ($('input').attr('name','reg_pwd').val() =='') {
				
					
					$('#err_pwd').html('Password field is required').addClass('text-danger');
				}

				//for phone input

				if ($('input').attr('name','p_num').val().trim()=='') {

					

					$('#err_text4').html('Phone Number field is required').addClass('text-danger');
				}

				//i need help with the select tag



				//seller form validation

				if ($('#course_study option[value="course"]').prop('selected')){

					

					$('#err_text6').html('Select a Course of Study').addClass('text-danger');

				}

				if ($('#university option[value="university"]').prop('selected')){

				

					$('#err_text7').html('Select a University').addClass('text-danger');

				}

				if ($('#level option[value="level"]').prop('selected')){

					

					$('#err_text8').html('Select a Level').addClass('text-danger');

				}


				if ($('#ad_year option[value="ad_year"]').prop('selected')){

					

					$('#err_text9').html('Select Year of Admission').addClass('text-danger');

				}
			
			

	});


	//validation for create gig form

	// $('#gig_create_btn').click(function() {

	// 	// alert('We are here');

	// 	if($('#title_').html('')){

	// 		$('#err_title').html('Title Field is required').addClass('text-danger');
	// 	}

//category validation
		// if ($('#category option[value="category"]').prop('selected')){


		// 	$('#err_cat').html('Select a Category').addClass('text-danger');

		// }

//subcatogory validation

		// if ($('#subcategory option[value="subcategory"]').prop('selected')){


		// 	$('#err_subcat').html('Select a Subcategory').addClass('text-danger');

		// }

//plan title n offer validation

		// if($('#premium').html('')){

		// 	$('#err_premium').html('Plan title is required').addClass('text-danger');
		// }

		// if($('#standard').html('')){

		// 	$('#err_standard').html('Plan title is required').addClass('text-danger');
		// }

		// if($('#basic').html('')){

		// 	$('#err_basic').html('Plan title is required').addClass('text-danger');
		// }

		// if($('#premium_offer').html('')){

		// 	$('#err_premium1').html('Plan offer is required').addClass('text-danger');
		// }

		// if($('#standard_offer').html('')){

		// 	$('#err_standard1').html('Plan offer is required').addClass('text-danger');
		// }

		// if($('#basic_offer').html('')){

		// 	$('#err_basic1').html('Plan offer is required').addClass('text-danger');
		// }



//time and amount validation

		// if ($('#premium_time option[value="days"]').prop('selected')){

		// 	$('#err_time1').html('Select delivery time').addClass('text-danger');

		// }

		// if ($('#standard_time option[value="days"]').prop('selected')){

		// 	$('#err_time2').html('Select delivery time').addClass('text-danger');

		// }

		// if ($('#basic_time option[value="days"]').prop('selected')){

		// 	$('#err_time3').html('Select delivery time').addClass('text-danger');

		// }



		// if ($('input').attr('name','premium_price').val() =='') {
				
			
		// 	$('#err_price1').html('Price field required').addClass('text-danger');
		// }

		// if ($('input').attr('name','standard_price').val() =='') {
				
			
		// 	$('#err_price2').html('Price field required').addClass('text-danger');
		// }

		// if ($('input').attr('name','basic_price').val() =='') {
				
			
		// 	$('#err_price3').html('Price field required').addClass('text-danger');
		// }






			

	// });


	$('#editDesc').click(function(){

		// alert('hi');

		//hide the previous div housing the previous description



		//get the string from the p tag inner html
		var user_Desc = $('#userDesc').html();
		// $('#userDesc').hide();

		// alert(user_Desc);

		$('#userDesc').load("editdesc.php", {output:user_Desc});
		// $.get("editdesc.php",function(data){

		// 		document.getElementById('userDesc').innerHTML = data;
		// 	});

	});



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

				document.getElementById('devgig').innerHTML = data;
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

					document.getElementById('devgig').innerHTML =response;

					////see output at displaysearchgig.php

				}

			});

	});
})