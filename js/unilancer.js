
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



	// $('#reg_btn').click(function(){

		//alert('hi');



			//buyer form validation
			

				// if ($('#fname').val().trim()=='') {
					
					
				// 	$('#err_text1').html('First Name field is required').addClass('text-danger');
				// }

				// if ($('input').attr('name','lname').val().trim()=='') {
					
					
				// 	$('#err_text2').html('Last Name field not is required').addClass('text-danger');
				// }

				// if ($('input').attr('name','username').val().trim()=='') {
					
					
				// 	$('#err_text3').html('Username field is required').addClass('text-danger');
				// }

				// if ($('input').attr('name','reg_pwd').val() =='') {
				
					
				// 	$('#err_pwd').html('Password field is required').addClass('text-danger');
				// }


				//for phone input		
				// if ($('input').attr('name','p_num').val().trim()=='') {

					

				// 	$('#err_text4').html('Phone Number field is required').addClass('text-danger');
				// }

				



				//seller form validation

				// if ($('#course_study option[value=""]').prop('selected')){

					

				// 	$('#err_text6').html('Select a Course of Study').addClass('text-danger');

				// }
			

				// if ($('#university option[value=""]').prop('selected')){

				

				// 	$('#err_text7').html('Select a University').addClass('text-danger');

				// }

				// if ($('#level option[value=""]').prop('selected')){

					

				// 	$('#err_text8').html('Select a Level').addClass('text-danger');

				// }


				// if ($('#ad_year option[value="ad_year"]').prop('selected')){

					

				// 	$('#err_text9').html('Select Year of Admission').addClass('text-danger');

				// } 

				// if ($('#err_text8').html() != "" || $('#err_text7').html() != "" 
				// 	|| $('#err_text6').html() != ""|| $('#err_text4').html() != "" 
				// 	|| $('#err_text3').html() != "" 
				// || $('#err_text2').html() != "" || $('#err_text1').html() != "") {

				// 	e.preventDefault();
				// }
			
			

	// });





})
