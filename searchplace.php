<?php


	include_once('uni_Class.php');

	$string = $_POST['userOutput'];

	$userobj = new Gigs;

	$user = $userobj->findGig($string);

	// echo "<pre>";
	// print_r($user);
	// echo "</pre>";
	// exit;

	if (strlen($string) > 0) {

	foreach ($user as $key => $value) {
		$gigtitle = $value['gig_title'];
		$gigprice = $value['basic_price'];
		$gigseller = $value['user_username'];
		$picture = $value['user_picture'];

		if (strlen($gigtitle) > 0) {
			
		
	

?>


<div style="background-color: white; padding: 10px; line-height: 5px; min-width:200px;">
	<a href="gigdisplay.php?gigid=<?php if(isset($_GET['gig_id'])){ echo $_GET['gig_id']; }?>&sellerid=<?php if(isset($_GET['gig_userid'])){echo $_GET['gig_userid']; } ?>">
	<p style="font-weight: bold"><?php echo $gigtitle ?></p>
	<p style="font-style: italic;"><?php echo $gigseller ?></p>
	<p>starting from <span class="badge badge-info" style="margin-left: 1%;">&#8358;<?php echo $gigprice ?></span></p>
   </a>
	
</div>

<?php }else{

?>

<!-- <div style="background-color: lightgrey">
	<a href="newuser.php?id=<?php if(isset($_GET['userid'])){ echo $_GET['userid']; }?>">
	<p style="font-weight: bold"><?php echo $gigtitle ?></p>
	<p style="font-style: italic;"><img src="<?php echo $picture ?>"> | <?php echo $gigseller ?></p>
	</a>
</div> -->

<?php }} }else{

} ?>