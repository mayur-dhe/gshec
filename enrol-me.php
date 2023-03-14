<?php
include 'functions/frontend_function.php';
include 'config/user_access.php';
$page = "5";
$title = "ENROL FOR DNYAN SANGRAH";
require 'layout/top-header.php';
?>
<body class="reading-pages">
<?php 
include 'layout/sub-header.php';
require 'layout/header.php';
$subtitle = "";
require 'layout/site-map.php';
// include 'data/sdc.php';
$countryAPI = $host.'api/country.php';
$submitAPI = $host.'api/enrol_scholar.php';
$countries = '';
$countryData = CallAPI('GET', $countryAPI);
if ($countryData['code'] == '200' ) {
	$countries = $countryData['data'];
}
?>
<!-- -------------------------------------------------------- -->
<!-- ------------- Main Content Start---------------------- -->
<!-- -------------------------------------------------------- -->
<section class="page-section">
    <div class="container" style="padding: 30px 40px;">
		<div class="row">
			<div class="col-md-12">
				<h4 class="align-center font_dancing">Enrol for Dnyan Sangrah</h4>
				<form name="frm_scholar" id="frm_scholar" method="POST" action="<?php echo $submitAPI; ?>">
					<div class="col-md-12">
						<legend class="form-design">Personal Information</legend>
						<div class="row">
							<div class="col-md-4">
								<img class="img-fluid" src="assets/images/personal form.png" alt="">
							</div>
							<div class="col-md-8 pt20">
								<div class="row g-3">
									<div class="col-md-6">
										<label class="form-label star" for="sname">Name</label>  
										<input id="sname" name="sname" type="text" placeholder="Enter Full Name" class="form-control" required>
									</div>
									<div class="col-md-6">
										<label for="semail" class="form-label star">Email ID</label>
										<input id="semail" name="semail" type="email" class="form-control" placeholder="example@gmail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Invalid email address" required> 
									</div>
									<div class="form-group col-md-12">
										<label class="form-label star" for="sadd">Address</label>
										<textarea class="form-control" id="sadd" name="sadd" required></textarea>
									</div>
									<div class="form-group col-md-4">
										<label class="form-label star" for="inputCity">City</label>
										<input type="text" class="form-control" name="inputCity"  id="inputCity" required>
									</div>
									<div class="form-group col-md-4">
										<label class="form-label star" for="state">State</label>
										<input id="state" name="state" type="text" placeholder="Enter State" class="form-control" required>
									</div>
									<div class="form-group col-md-4">		
										<label class="form-label star" for="country">Country</label>	
										<select id="country" name="country" class="form-control">
											<option value="0">Select Country</option>
											<?php
												if ($countries) {
													foreach ($countries as $key => $value) {
														$isSelected = '';
														if ($value['name'] == "India") {
															$isSelected = 'selected';
														}
														echo '<option value="'.$value['name'].'" '.$isSelected.'>'.$value['name'].'</option>';
													}
												}
											?>
										</select>
									</div>
									<div class="form-group col-md-12 col-lg-6">
										<label class="form-label star" for="wtype">Work Type</label><br>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="wtype" id="wtype-0" value="Industry">
											<label class="form-check-label" for="wtype-0">Industry</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="wtype" id="wtype-1" value="Institution" checked>
											<label class="form-check-label" for="wtype-1">Institution</label>
										</div>
									</div>
									<div class="form-group col-md-12 col-lg-6">
										<label class="form-label" for="wname">Name of Industry/Institution</label>  
										<input id="wname" name="wname" type="text" placeholder="" class="form-control">
									</div>

									<div class="form-group col-md-12">
										<div class="form-group">
											<label class="form-label" for="arearsch">Specify the broad area of industry/research/academics/etc. currently engaged with</label>
											<textarea class="form-control" id="arearsch" name="arearsch"></textarea>
										</div>
									</div>
									<div id="LOCAL_CONNECT"></div>
								</div>
							</div>
							<div class="form-group col-md-12 text-center" id="buttonBox1">
								<button type="button" class="btn btn-primary btn_size" onclick="changePage(2);"> Next</button>
							</div>
						</div>
					</div>
					<div class="col-md-12 d-none" id="box2">
						<legend class="form-design">LOCAL CONNECT</legend>
						<div class="row">
							<div class="col-md-8 pt20">
								<div class="row g-3">
									<!-- Multiple Radios (inline) -->
									<div class="form-group">
										<label class="col-md-6 control-label" for="frqvisit">Frequency of visit to Goa</label>
										<div class="col-md-12"> 
											<label class="radio-inline" for="frqvisit-0">
												<input type="radio" name="frqvisit" id="frqvisit-0" value="Annual" checked="checked">
												Annual
											</label> 
											<label class="radio-inline" for="frqvisit-1">
												<input type="radio" name="frqvisit" id="frqvisit-1" value="Bi-annual">
												Bi-annual
											</label> 
											<label class="radio-inline" for="frqvisit-2">
												<input type="radio" name="frqvisit" id="frqvisit-2" value="Monthly">
												Monthly
											</label> 
											<label class="radio-inline" for="radios-3">
												<input type="radio" name="frqvisit" id="radios-3" value="Rarely">
												Rarely
											</label>
										</div>
									</div>
									<!-- Textarea -->
									<div class="form-group col-md-12">
										<label class="control-label" for="locadd">Local Address, if any</label>                 
										<textarea class="form-control" id="locadd" name="locadd"></textarea>
									</div>
									<!-- Textarea -->
									<div class="form-group col-md-12">
										<label class="control-label" for="locwork">Name the industry/academic/institution/etc. in Goa to which professionally/academically collaborated, if any</label>
										<textarea class="form-control" id="locwork" name="locwork"></textarea>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<img class="img-fluid pt20" src="assets/images/travel_mode.png" alt="">
							</div>
							<div id="RECOMMENDATION"></div>
							<div class="form-group col-md-12 text-center" id="buttonBox2">
								<button type="button" class="btn btn-primary btn_size" onclick="changePage(3);"> Next</button>
							</div>
						</div>
					</div>
					<div class="col-md-12 d-none" id="box3">
						<legend class="form-design">RECOMMENDATION [Any other scholar]</legend>
						<div class="row">
							<div class="col-md-6">
								<img class="img-fluid" src="assets/images/referrals.png" alt="">
							</div>
							<div class="col-md-6 pt20">
								<div class="row g-3">
									<div class="form-group col-md-12">
										<label class="control-label" for="osname">Name</label>  
										<input id="osname" name="osname" type="text" placeholder="Scholar Name" class="form-control input-md">
									</div>
									<div class="form-group col-md-12">
										<label class="control-label" for="osemail">Email</label>  
										<input id="osemail" name="osemail" type="text" placeholder="Scholar Email" class="form-control input-md">
									</div>
								</div>
							</div>
							<div class="form-group col-md-12 text-center">
								<input class="btn btn-primary btn_size" type="submit" id="btn_submit" name="submit" value="Enroll Me"/>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<!-- -------------------------------------------------------- -->
<!-- ------------- Main Content End---------------------- -->
<!-- -------------------------------------------------------- -->

<!-- ***** Footer  ***** -->
<?php require 'layout/footer.php'; ?>
<script>
	// Wait for the DOM to be ready
	$(function() {
		// Swal.fire({
		// 	position: 'top-end',
		// 	icon: 'success',
		// 	title: 'Your work has been saved',
		// 	showConfirmButton: false,
		// 	timer: 1500
		// })
	});

	function changePage(value) 
	{
		if (value==2) {
			$("#buttonBox1").addClass("d-none");
			$("#box2").removeClass("d-none");
			window.location="#LOCAL_CONNECT";
		} else if (value==3) {
			$("#buttonBox2").addClass("d-none");
			$("#box3").removeClass("d-none");
			window.location="#RECOMMENDATION";
		}
	}

</script>
</body>
</html>