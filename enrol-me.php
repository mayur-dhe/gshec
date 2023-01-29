<?php
include 'functions/frontend_function.php';
include 'config/user_access.php';
$page = "5";
$title = "ENROLL THE SCHOLAR";
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
    <div class="container" style="padding: 30px 25px;">
		<h4 class="align-center">ENROLL THE SCHOLAR</h4>
		<form class="row g-3" name="frm_scholar" id="frm_scholar" method="POST" action="<?php echo $submitAPI; ?>">
			<div class="col-md-12">
				<legend>Personal Information</legend>
			</div>
			<div class="col-md-6">
				<label class="form-label" for="sname">Name*</label>  
				<input id="sname" name="sname" type="text" placeholder="Enter Full Name" class="form-control" required>
			</div>
			<div class="col-md-6">
				<label for="semail" class="form-label">Email ID*</label>
				<input id="semail" name="semail" type="email" class="form-control" placeholder="example@gmail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Invalid email address" required> 
			</div>
			<div class="form-group col-md-12">
				<label class="form-label" for="sadd">Address*</label>
				<textarea class="form-control" id="sadd" name="sadd" required></textarea>
			</div>
			<div class="form-group col-md-6">
				<label class="form-label" for="inputCity">City*</label>
				<input type="text" class="form-control" name="inputCity"  id="inputCity" required>
			</div>
			<div class="form-group col-md-4">
					<label class="form-label" for="state">State*</label>
					<input id="state" name="state" type="text" placeholder="Enter State" class="form-control" required>
			</div>
			<div class="form-group col-md-2">		
				<label class="form-label" for="country">Country*</label>	
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
			<div class="form-group col-md-6">
				<label class="form-label" for="wtype">Work Type*</label><br>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="wtype" id="wtype-0" value="Industry">
					<label class="form-check-label" for="wtype-0">Industry</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="wtype" id="wtype-1" value="Institution" checked>
					<label class="form-check-label" for="wtype-1">Institution</label>
				</div>
			</div>
			<div class="form-group col-md-6">
				<label class="form-label" for="wname">Name of Industry/Institution</label>  
				<input id="wname" name="wname" type="text" placeholder="" class="form-control">
			</div>

			<div class="form-group col-md-12">
				<div class="form-group">
					<label class="form-label" for="arearsch">Specify the broad area of industry/research/academics/etc. currently engaged with</label>
					<textarea class="form-control" id="arearsch" name="arearsch"></textarea>
				</div>
			</div>
			<div class="col-md-12">
				<legend>LOCAL CONNECT</legend>
			</div>
			<!-- Multiple Radios (inline) -->
			<div class="form-group">
				<label class="col-md-6 control-label" for="frqvisit">Frequency of visit to Goa</label>
				<div class="col-md-6"> 
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
			<div class="form-group col-md-6">
				<br>
				<label class="control-label" for="locadd">Local Address, if any</label>                 
				<textarea class="form-control" id="locadd" name="locadd"></textarea>
			</div>
			
			<!-- Textarea -->
			<div class="form-group col-md-6">
				<label class="control-label" for="locwork">Name the industry/academic/institution/etc. in Goa to which professionally/academically collaborated, if any</label>
				<textarea class="form-control" id="locwork" name="locwork"></textarea>
			</div>

			<div class="col-md-12">
				<legend>RECOMMENDATION [Any other scholar]</legend>
			</div>
			<div class="form-group col-md-6">
				<label class="control-label" for="osname">Name</label>  
				<input id="osname" name="osname" type="text" placeholder="Scholar Name" class="form-control input-md">
			</div>
			
			<div class="form-group col-md-6">
				<label class="control-label" for="osemail">Email</label>  
				<input id="osemail" name="osemail" type="text" placeholder="Scholar Email" class="form-control input-md">
			</div>
			
			<div class="col-md-5"></div>
			<div class="col-md-2">
				<input class="btn btn-primary" type="submit" id="btn_submit" name="submit" value="Enroll Me"/>
			</div>
			<div class="col-md-5"></div>
		</form>
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
</script>
</body>
</html>