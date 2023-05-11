<?php
include 'functions/frontend_function.php';
include 'config/user_access.php';
include 'data/countries_list.php';

$page = "5";
$title = "ENROL FOR DNYAN SANGRAH";
$title_url = "#";
require 'layout/top-header.php';
?>
<style>
</style>
<body class="reading-pages">
<?php 
include 'layout/sub-header.php';
require 'layout/header.php';
$subtitle = "";
$isCardsPage = true;
require 'layout/site-map.php';
$submitAPI = 'api/enrol_scholar.php';
?>
<!-- ------------- Main Content Start---------------------- -->
<section class="page-section">
	<div class="container" style="padding: 30px 40px;">
		<div class="row">
			<div class="col-md-12">
				<h4 class="textAlign-center font_dancing pb20">Enrol for Dnyan Sangrah</h4>
				<div class="col-md-12">
					<legend class="form-design">Personal Information</legend>
					<div class="row">
						<div class="col-md-12 pt20">
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
									<label class="form-label star" for="sadd">Work/Office Address</label>
									<textarea class="form-control" id="sadd" name="sadd" required></textarea>
								</div>
								<div class="form-group col-md-4">
									<label class="form-label star" for="city">City</label>
									<input type="text" class="form-control" name="city"  id="city" required>
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
													if ($value == "India") {
														$isSelected = 'selected';
													}
													echo '<option value="'.$value.'" '.$isSelected.'>'.$value.'</option>';
												}
											}
										?>
									</select>
								</div>
								<div class="form-group col-md-12 col-lg-6">
									<label class="form-label star" for="work_type">Work Type</label><br>
									<div class="form-check form-check-inline">
										<input class="form-check-input work_type" type="radio" name="work_type" id="work_type-0" value="Industry">
										<label class="form-check-label" for="work_type-0">Industry</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input work_type" type="radio" name="work_type" id="work_type-1" value="Institution" checked>
										<label class="form-check-label star" for="work_type-1">Institution</label>
									</div>
								</div>
								<div class="form-group col-md-12 col-lg-6">
									<label class="form-label star" for="work_name">Name of Industry/Institution</label>  
									<input id="work_name" name="work_name" type="text" placeholder="" class="form-control">
								</div>
								<div class="form-group col-md-12">
									<div class="form-group">
										<label class="form-label star" for="area_of_work">Specify the broad area of industry/research/academics/etc. currently engaged with</label>
										<textarea class="form-control" id="area_of_work" name="area_of_work"></textarea>
									</div>
								</div>
								<div class="form-group col-md-6 col-lg-6">
									<label class="control-label star" for="designation">Designation</label>  
									<input id="designation" name="designation" type="text" placeholder="" class="form-control input-md">
								</div>
								<div class="form-group col-md-6 col-lg-6">
									<label class="control-label star" for="phone_no">Contact No.</label>  
									<div class="input-group">
										<span class="input-group-text" id="basic-addon1">+91</span>
										<input id="phone_no" name="phone_no" type="number" class="form-control input-md" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
									</div>
								</div>
								<div class="form-group col-12 col-lg-12">
									<label class="control-label star" for="cv">Profile Link or Upload CV (max 2MB)</label>
									<div class="row">
										<div class="form-group col-lg-6 col-6">
											<input id="profile_link" name="profile_link" type="text" placeholder="http://www.example.com/profile" class="form-control input-md">
										</div>
										<div class="form-group col-lg-6 col-6 pb-3">
											<input id="cv" name="cv" type="file" placeholder="" class="form-control input-md" accept="application/pdf,.csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
										</div>
									</div>  
								</div>
								<div class="form-group col-md-12">
									<label class="form-label star" for="permanent_address">Permanent Address</label>
									<textarea class="form-control" id="permanent_address" name="permanent_address" required></textarea>
								</div>
								<div class="form-group col-md-12 mb20">
									<div class="form-group">
										<label class="form-label star" for="type_of_eng">Type of Engagement with students and academic community</label>
										<textarea class="form-control" id="type_of_eng" name="type_of_eng"></textarea>
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
			</div>
		</div>
	</div>
	<div class="container d-none" id="box2" style="padding: 30px 40px;">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-12">
					<legend class="form-design">LOCAL CONNECT</legend>
					<div class="row">
						<div class="col-md-12 col-lg-8 pt20">
							<div class="row g-3">
								<!-- Multiple Radios (inline) -->
								<div class="form-group">
									<label class="col-md-6 control-label" for="frqvisit">Frequency of visit to Goa</label>
									<div class="col-md-12"> 
										<label class="radio-inline" for="frqvisit-0">
											<input type="radio" class="frqvisit" name="frqvisit" id="frqvisit-0" value="Annual" checked="checked">
											Annual
										</label> 
										<label class="radio-inline" for="frqvisit-1">
											<input type="radio" class="frqvisit" name="frqvisit" id="frqvisit-1" value="Bi-annual">
											Bi-annual
										</label> 
										<label class="radio-inline" for="frqvisit-2">
											<input type="radio" class="frqvisit" name="frqvisit" id="frqvisit-2" value="Monthly">
											Monthly
										</label> 
										<label class="radio-inline" for="radios-3">
											<input type="radio" class="frqvisit" name="frqvisit" id="radios-3" value="Rarely">
											Rarely
										</label>
									</div>
								</div>
								<!-- Textarea -->
								<div class="form-group col-md-12">
									<label class="control-label" for="local_address">Local Address, if any</label>                 
									<textarea class="form-control" id="local_address" name="local_address"></textarea>
								</div>
								<!-- Textarea -->
								<div class="form-group col-md-12">
									<label class="control-label" for="local_work">Name the industry/academic/institution/etc. in Goa to which professionally/academically collaborated, if any</label>
									<textarea class="form-control mb20" id="local_work" name="local_work"></textarea>
								</div>
							</div>
						</div>
						<div class="d-none d-lg-block col-lg-4">
							<img class="img-fluid pt20" src="assets/images/travel_mode.png" alt="">
						</div>
						<div id="RECOMMENDATION"></div>
						<div class="form-group col-md-12 text-center" id="buttonBox2">
							<button type="button" class="btn btn-primary btn_size" onclick="changePage(3);"> Next</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container d-none" id="box3" style="padding: 30px 40px;">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-12">
					<legend class="form-design">RECOMMENDATION [Any other scholar]</legend>
					<div class="row">
						<div class="d-none d-lg-block col-lg-4">
							<img class="img-fluid" src="assets/images/referrals.png" alt="">
						</div>
						<div class="col-md-12 col-lg-8 pt20">
							<div class="row">
								<div class="col-1 col-md-1">1</div>
								<div class="col-8 col-md-11">
									<div class="row g-3">
										<div class="form-group col-md-6">
											<label class="control-label" for="other_name-1">Name</label>  
											<input id="other_name-1" name="other_name[]" type="text" placeholder="Scholar Name" class="form-control input-md">
										</div>
										<div class="form-group col-md-6">
											<label class="control-label" for="other_email-1">Email</label>  
											<input id="other_email-1" name="other_email[]" type="text" placeholder="Scholar Email" class="form-control input-md">
										</div>
										<div class="form-group col-md-6">
											<label class="control-label" for="other_contact_no-1">Contact No.</label>  
											<div class="input-group">
												<span class="input-group-text" id="basic-addon2">+91</span>
												<input id="other_contact_no-1" name="other_contact_no[]" type="number" class="form-control input-md" placeholder="" aria-label="Username" aria-describedby="basic-addon2">
											</div>
										</div>
										<div class="form-group col-md-6">
											<label class="control-label" for="other_designation-1">Designation</label>  
											<input id="other_designation-1" name="other_designation[]" type="text" placeholder="" class="form-control input-md">
										</div>
										<div class="form-group col-md-6 mb-3">
											<label class="control-label" for="other_affiliation-1">Affiliation</label>  
											<input id="other_affiliation-1" name="other_affiliation[]" type="text" placeholder="" class="form-control input-md">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="input_fields_wrap"></div>   <!-- Show Added Days -->
						<div class="row g-3">
							<div class="form-group col-md-12 text-center" id="buttonBox2">
								<button type="button" class="btn btn-secondary btn_size add_field_button">Add More</button>
							</div>
							<div class="form-group col-md-12 text-center">
								<button type="button" class="btn btn-success btn_size" onclick="submitForm();">Enroll Me</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- -------------------------------------------------------- -->
<!-- ------------- Main Content End---------------------- -->
<!-- -------------------------------------------------------- -->

<!-- ***** Footer  ***** -->
<?php require 'layout/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/gh/AmagiTech/JSLoader/amagiloader.js"></script>
<script>
	var data = {};
	var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	var phoneNoReg = /^\d{10}$/;
	let name=email=address=city=state=country=work_name=area_of_work=designation=encoded_file=file_name=profile_link=permanent_address=phone_no=type_of_eng=work_type = '';
	const fileInput = document.getElementById('cv');

	// add days function
	var max_fields = 16;
	var wrapper = $(".input_fields_wrap"); 		//Fields wrapper
	var add_button = $(".add_field_button"); 	//Add button ID
	var x = 1;

	// upload file
	function encodeFile(file) {
		return new Promise((resolve, reject) => {
			const reader = new FileReader();
			reader.onload = () => {
				const encoded = btoa(reader.result);
				resolve(encoded);
			};
			reader.onerror = reject;
			reader.readAsBinaryString(file);
		});
	}
	fileInput.addEventListener('change', async (event) => {
		const file = event.target.files[0];
		if (file) {
			if (validateFile()) {
				const encodedFile = await encodeFile(file);
				encoded_file = encodedFile;
				file_name = file.name;
			}
		} else {
			popUpMsg('Please select a File!');
		}
	});
   	// set loader
	function loaderTimeOut() {
		setTimeout(() => {
			window.location.reload();
		}, 3000);	
	}
	// Wait for the DOM to be ready
	$(function() {
		console.log('check');
		$("#sname").val('mayur');
		$("#semail").val('mayur@gmail.com');
		$("#sadd").val("goa india");
		$("#city").val("quepem");
		$("#state").val('Goa');
		$("#country").val("India");
		$("#work_name").val('engineer');
		$("#area_of_work").val('Lead');
		$("#designation").val('Developer');
		$("#permanent_address").val('india goa');
		$("#phone_no").val('8976543268');
		$("#type_of_eng").val('siper ikdd ');

		$(add_button).click(function(e){ 			//on add input button click
			e.preventDefault();
			if(x < max_fields){ 					//max input box allowed
				x++; 								//text box increment
				$(wrapper).append(`
					<div class="row border_top">
						<div class="col-1 col-md-1 col-lg-1">`+x+`</div>
						<div class="col-8 col-md-9 col-lg-10">
							<div class="row g-3">
								<div class="form-group col-md-6 col-lg-4">
									<label class="control-label" for="other_name`+x+`">Name</label>  
									<input id="other_name`+x+`" name="other_name[]" type="text" placeholder="Scholar Name" class="form-control input-md">
								</div>
								<div class="form-group col-md-6 col-lg-4">
									<label class="control-label" for="other_email`+x+`">Email</label>  
									<input id="other_email`+x+`" name="other_email[]" type="text" placeholder="Scholar Email" class="form-control input-md">
								</div>
								<div class="form-group col-md-6 col-lg-4">
									<label class="control-label" for="other_contact_no`+x+`">Contact No.</label>  
									<div class="input-group">
										<span class="input-group-text" id="basic-addon2">+91</span>
										<input id="other_contact_no`+x+`" name="other_contact_no[]" type="number" class="form-control input-md" placeholder="" aria-label="Username" aria-describedby="basic-addon2">
									</div>
								</div>
								<div class="form-group col-md-6 col-lg-4">
									<label class="control-label" for="other_designation`+x+`">Designation</label>  
									<input id="other_designation`+x+`" name="other_designation[]" type="text" placeholder="" class="form-control input-md">
								</div>
								<div class="form-group col-md-6 col-lg-4 mb-3">
									<label class="control-label" for="other_affiliation`+x+`">Affiliation</label>  
									<input id="other_affiliation`+x+`" name="other_affiliation[]" type="text" placeholder="" class="form-control input-md">
								</div>
							</div>
						</div>
						<a href="#" class="col-3 col-md-2 col-lg-1 remove_field custom_btn btn2" style="padding: 14px 10px; align-self: center; font-weight:bold; color:red">Remove</a>
					</div>
				`); //add input box
			}
		});
		//user click on remove text
		$(wrapper).on("click",".remove_field", function(e){
			e.preventDefault(); 
			$(this).parent('div').remove();
			x--;
		})

		$('#sname').keydown(function (e) {
			validateText(e);
		});
		$('#city').keydown(function (e) {
			validateText(e);
		});
		$('#state').keydown(function (e) {
			validateText(e);
		});
	});
	const Toast = Swal.mixin({
		toast: true,
		position: 'top-end',
		showConfirmButton: false,
		timer: 3000,
		timerProgressBar: true,
		didOpen: (toast) => {
			toast.addEventListener('mouseenter', Swal.stopTimer)
			toast.addEventListener('mouseleave', Swal.resumeTimer)
		}
	});
	function popUpMsg(msg, position="top-end", icon="warning")
	{
		Toast.fire({
			icon: icon,
			title: msg,
		});
	}
	function validateText(e) {
		if (e.shiftKey || e.ctrlKey || e.altKey) {
			e.preventDefault();
		} else {
			var key = e.keyCode;
			if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
				e.preventDefault();
			}
		}
	}
	function phoneNumber()
	{
		phone_no = $("#phone_no").val();
		if(phone_no.match(phoneNoReg))
		{
			return true;
		} else {
			$("#phone_no").focus();
			popUpMsg('Please enter valid mobile Number!');
			return false;
		}
	}
	function validateFile() {
		var selectedFile = fileInput.files[0];
		var sizeInMb = (selectedFile.size/1024)/1024;
		var sizeLimit= 2;
		if (sizeInMb > sizeLimit) {
			popUpMsg('File size must be less than 2MB!');
			$("#cv").focus()
			return false;
		}
		var filename = fileInput.value;
		var extension = filename.replace(/^.*\./, '');
		if (extension == filename) {
			extension = '';
		} else {
			extension = extension.toLowerCase();
		}
		switch (extension) {
			case 'pdf':
			case 'doc':
			case 'docx':
			case 'ppt':
			case 'pptx':
			case 'rtf':
			case 'txt':
			case 'xlsx':
				break;
			default: 
				popUpMsg('Please upload valid file! Supported file type pdf, docx, xlsx!')
				$("#cv").focus()
				return false;
		}
		return true;
	}
	function isFileUploaded(){
		// if file is empty return true else validate file property 
		if (fileInput.value) {
			return validateFile();
		} else {
			return true;
		}
	}
	function validateEmptyFields() {
		name = $("#sname").val();
		email = $("#semail").val();
		address = $("#sadd").val();
		city = $("#city").val();
		state = $("#state").val();
		country = $("#country").val();
		work_name = $("#work_name").val();
		area_of_work = $("#area_of_work").val();
		designation = $("#designation").val();
		profile_link = $("#profile_link").val();
		permanent_address = $("#permanent_address").val();
		phone_no = $("#phone_no").val();
		type_of_eng = $("#type_of_eng").val();

		if (name=="") {
			$("#sname").focus();
			popUpMsg('Name is required, Please enter name!');
		} else if (email=="") {
			$("#semail").focus();
			popUpMsg('Email is required, Please enter ypuremail address!');
		}else if (!emailReg.test(email)){
			$("#semail").focus();
			popUpMsg('Please enter valid email address!');
		} else if (address=="") {
			$("#sadd").focus();
			popUpMsg('Address is required, Please enter Address!');
		} else if (city=="") {
			$("#city").focus();
			popUpMsg('Please enter your city!');
		} else if (state=="") {
			$("#state").focus();
			popUpMsg('Please enter the State!');
		} else if (country=="") {
			$("#country").focus();
			popUpMsg('Please select the Country!');
		} else if (work_name=="") {
			$("#work_name").focus();
			popUpMsg('Please enter the name of the Industry/Institution!');
		} else if (area_of_work=="") {
			$("#area_of_work").focus();
			popUpMsg('Please tell us the area of industry engaged with!');
		} else if (designation=="") {
			$("#designation").focus();
			popUpMsg('Please enter the Designation!');
		} else if (phone_no=="") {
			$("#phone_no").focus();
			popUpMsg('Please enter your Contact Number!');
		} else if (fileInput.value=="" && profile_link=="") {
			$("#profile_link").focus();
			popUpMsg('Please Upload CV or share your Profile Link!');
		} else if (permanent_address=="") {
			$("#permanent_address").focus();
			popUpMsg('Please enter the Permanent Address!');
		} else if (type_of_eng=="") {
			$("#type_of_eng").focus();
			popUpMsg('Please tell us type of Engagement you will be holding on!');
		} else {
			return true;
		}
		return false;
	}

	function changePage(value) 
	{
		if (value==2) {
			if (validateEmptyFields() && isFileUploaded() && phoneNumber()) {
				work_type = $('.work_type:checked').val();
				data = {
					name:name,
					email:email,
					address:address,
					city:city,
					state:state,
					country:country,
					work_name:work_name,
					area_of_work:area_of_work,
					designation:designation,
					profile_link:profile_link,
					cv:encoded_file,
					file_name:file_name,
					permanent_address:permanent_address,
					phone_no:phone_no,
					type_of_eng:type_of_eng,
					work_type:work_type,
				}

				$("#buttonBox1").addClass("d-none");
				$("#box2").removeClass("d-none");
				window.location="#LOCAL_CONNECT";
			}
		} else if (value==3) {
			if (validateEmptyFields() && isFileUploaded() && phoneNumber()) {
				$("#buttonBox2").addClass("d-none");
				$("#box3").removeClass("d-none");
				window.location="#RECOMMENDATION";
			}
		}
	}

	function submitForm() 
	{
		if (validateEmptyFields() && isFileUploaded() && phoneNumber()) {
			data.frqvisit = $('.frqvisit:checked').val();
			data.local_address = $("#local_address").val();
			data.local_work = $("#local_work").val();
			data.isRecommendations = false;
			data.recommendations = [];

			var other_names = document.getElementsByName("other_name[]");
			var other_emails = document.getElementsByName("other_email[]");
			var other_contact_nos = document.getElementsByName("other_contact_no[]");
			var other_designations = document.getElementsByName("other_designation[]");
			var other_affiliations = document.getElementsByName("other_affiliation[]");

			if (other_names.length>0) {
				data.isRecommendations = true;
				for(let j=0;j<other_names.length;j++)
				{
					if ( other_names[j].value == "" && other_emails[j].value == "" && other_contact_nos[j].value == "" && other_designations[j].value == "" && other_affiliations[j].value == "" ) {
						// do nothing all fields are empty
					} else {
						data.recommendations.push({
							'name': other_names[j].value,
							'email': other_emails[j].value,
							'contact_no': other_contact_nos[j].value,
							'designation': other_designations[j].value,
							'affiliation': other_affiliations[j].value,
						});
					}
				}
			}
			console.log(data);
			AmagiLoader.show();

			var token = "<?php echo '000guug66' ?>";
			console.log('token');
			console.log(token);
			$.ajax({
				type: "POST",
				url: "<?php echo $submitAPI; ?>",
				data: JSON.stringify(data),
				headers: {
					'X-CSRF-Token': token 
				},
				success: function(res)
				{
					AmagiLoader.hide();
					var responseData = JSON.parse(res);
					console.log(res);
					console.log(responseData);
					if (responseData.flag && responseData.status=='200') {
						// popUpMsg(responseData.message, "", "success");
						// loaderTimeOut();
						window.scrollTo({ top: 0, behavior: 'smooth' });
					} else {
						popUpMsg(responseData.message, "", "error");
						window.scrollTo({ top: 0, behavior: 'smooth' });
					}
				},
			});
		}
	}

</script>
</body>
</html>