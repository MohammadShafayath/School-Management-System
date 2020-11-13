<!DOCTYPE html>
<html lang="en">
	<?php include_once('server.php');?>
	<?php include_once('inc/head.php');?>
	<body class="m4-cloak h-vh-100">
		<div data-role="navview" data-toggle="#paneToggle" data-expand="xl" data-compact="lg" data-active-state="true">
			<?php include_once('inc/navigation.php');?>
			<div class="navview-content h-100">
				<?php include_once('inc/topbar.php');?>
				<div class="content-inner h-100" style="overflow-y: auto;">
					
					
					<!--content start -->
					<?php
					if($_GET['page'] == 'add'){ ?>
					<title>Student Information</title>
					<div class="row">
						<div class="cell-md-12">
							<div data-role="panel" data-title-caption="Student Add" data-collapsible="false" data-title-icon="<span class='mif-plus'></span>" class="m-1">
							<div class="p-2">
								<form action="" method="POST" enctype="multipart/form-data">
									<div class="row">
										<div class="cell-md-12 bg-darkCyan">
											<p class="fg-white">Student Information</p>
										</div>
										<div class="cell-md-3">
											<label> Name</label>
											<input type="text" placeholder="Enter your full name" class="metro-input" name="student_name" required>
										</div>
										
										<div class="cell-md-3">
											<label>class</label>
											<select data-role="select" name="classes" required>
												<option type="text" placeholder="Please Select Class" class="metro-input" class="fg-cyan">One</option>
												<option class="fg-cyan">Two</option>
												<option class="fg-cyan">Three</option>
												<option class="fg-cyan">Four</option>
												<option class="fg-cyan">Five</option>
												<option class="fg-cyan">Six</option>
												<option class="fg-cyan">Seven</option>
												<option class="fg-cyan">Eight</option>
												<option class="fg-cyan">Nine</option>
												<option class="fg-cyan">Ten</option>
											</select>
										</div>
										<div class="cell-md-3">
											<label>section</label>
											<select data-role="select" name="section_name" required>
												<option type="text" placeholder="Please Select Section" class="metro-input" class="fg-cyan" >A</option>
												<option class="fg-cyan">B</option>
											</select>
										</div>
										<div class="cell-md-3">
											<label>Gender</label>
											<select data-role="select" name="gender_name" required>
												<option type="text" class="metro-input" class="fg-cyan">Male</option>
												<option class="fg-cyan">Female</option>
												<option class="fg-cyan">None</option>
											</select>
										</div>
										<div class="cell-md-3">
											<label>Date of Birth</label>
											<input data-cls-calendar="compact" type="text" data-role="calendarpicker" data-format="%d-%m-%Y" name="birth_date">
											
										</div>
										<div class="cell-md-3">
											<label>Roll</label>
											<input type="Number"  class="metro-input" name="class_roll" required>
										</div>
										<div class="cell-md-3">
											<label>Admission Number</label>
											<input type="Number"  class="metro-input" name="admission_number" required>
										</div>
										<div class="cell-md-3">
											<label>Religion</label>
											<select data-role="select" name="religion" required>
												<option type="text" class="metro-input" class="fg-cyan">Islam</option>
												<option class="fg-cyan">Hinduism</option>
												<option class="fg-cyan">Buddhism</option>
												<option class="fg-cyan">Christianity</option>
											</select>
										</div>
										<div class="cell-md-3">
											<label>E-mail</label>
											<input type="text" placeholder="Enter Your Mail" class="metro-input" name="mail" required>
										</div>
										<div class="cell-md-4">
											<label>Upload Student Photo</label>
											<input type="file" name="student-image-upload" required>
										</div>
										<div  class="cell-md-12 bg-darkCyan">
											<p class="fg-white">Parents Information</p>
										</div>
										<div class="cell-md-3">
											<label>Father Name</label>
											<input type="text"  class="metro-input"name="father_name" required>
										</div>
										<div class="cell-md-3">
											<label>Mother Name</label>
											<input type="text"  class="metro-input"name="Mother_Name" required>
										</div>
										<div class="cell-md-3">
											<label>Father occupation</label>
											<select data-role="select" name="Father_occupation" required>
												<option type="text" class="metro-input" class="fg-cyan">Job Holder</option>
												<option class="fg-cyan">Businessman</option>
												<option class="fg-cyan">None</option>
											</select>
										</div>
										<div class="cell-md-3">
											<label>Mother Occupation</label>
											<select data-role="select" name="Mother_Occupation" required>
												<option type="text" class="metro-input" class="fg-cyan">House wife</option>
												<option class="fg-cyan">Businessman</option>
												<option class="fg-cyan">Job Holder</option>
												<option class="fg-cyan">None</option>
											</select>
										</div>
										<div class="cell-md-3">
											<label>Parmanent Adress</label>
											<input type="text"  class="metro-input"name="Parmanent_Adress" required>
										</div>
										<div class="cell-md-3">
											<label>Present Adress</label>
											<input type="text"  class="metro-input" name="Present_Adress" required>
										</div>
										<div class="cell-md-3">
											<label>Phone Number</label>
											<input type="Number" placeholder="Enter your phone number" class="metro-input" name="Phone_Number" required>
										</div>
										<div class="cell-md-3">
											<label>Nationality</label>
											<select data-role="select" name="Nationality" required>
												<option type="text" class="metro-input" class="fg-cyan">Bangladesh</option>
												<option class="fg-cyan">India</option>
												<option class="fg-cyan">Pakistan</option>
												<option class="fg-cyan">UK</option>
											</select>
										</div>
										<div class="cell-md-4">
											<label>Upload Parent Photo</label>
											<input type="file" name="parents-image-upload" required>
										</div>
										
										<div class="cell-md-12">
											<button class="button alert place-right mt-1" type="submit" name="student-insert">Save</button>
										</div>
								
									</form>
									<?php } ?>
									<?php
									if($_GET['page'] == 'all-student'){ ?>
									<div class="row">
										<div class="cell-md-12">
											<div data-role="panel" data-title-caption="Student all" data-collapsible="false" data-title-icon="<span class='mif-plus'></span>" class="m-1">
											<div class="p-2">
												<div class="row">
													<div class="cell-md-12">
														<div data-role="panel" data-title-caption="Students Details" data-collapsible="true" data-title-icon="<span class='mif-table'></span>" class="mt-3">
														<div class="p-2" >
															<table class="table striped table-border mt-3"
																data-role="table"
																data-cls-table-top="row"
																data-cls-search="cell-md-5"
																data-cls-rows-count="cell-md-7"
																data-rows="30"
																data-rows-steps="30, 50, 100, 150, 200"
																data-show-activity="false"
																data-source="data/students-data.php"
																data-horizontal-scroll="true"
																>
															</table>
														</div>
													</div>
												</div>
												
											</div>
											<?php } ?>
                                       <?php
											if($_GET['page'] == 'student-details'){
											$getId = $_GET['id'];
											$sql = mysqli_query($db, "SELECT * FROM `student_info` WHERE id = $getId");
											if(mysqli_num_rows($sql) == 1){
												$rowsdata = mysqli_fetch_array($sql);
?>
<div class="row">
	<div class="cell-md-12">
		<div data-role="panel" data-title-caption="Student details" data-collapsible="false" data-title-icon="<span class='mif-eye'></span>" class="m-1">
		<div class="p-2">
			<div class="card-body">
				<div class="heading-layout1">
					<div class="item-title">
						<h3>About Me</h3>
					</div>
					
					
				</div>
				<div class="row">
					<div class="cell-sm-8">
						
						<div>
							<h3 style="font-family:Sofia;
							font-size:25px" ><?=$rowsdata['student_name']?></h3>
							
						</div>
						<p style="font-size:20px;color:green;font-family:Sofia;
						font-size:22px">I am a student of Bright school. Hopefully get a great future.</p>
						<div class="info-table table-responsive">
							<table class="table text-nowrap">
								<tbody>
									<tr>
										<td>Name:</td>
										<td class="text-bold" style="color: green;font-size: 20px"><?=$rowsdata['student_name']?></td>
									</tr>
									
									<tr>
										<td>Father Name:</td>
										<td class="text-bold" style="color: green;font-size: 20px"><?=$rowsdata['father_name']?></td>
									</tr>
									
									<tr>
										<td>Class:</td>
										<td class="text-bold" style="color: green;font-size: 20px"><?=$rowsdata['classes']?></td>
									</tr>
									<tr>
										<td>Section:</td>
										<td class="text-bold" style="color: green;font-size: 20px"><?=$rowsdata['section_name']?></td>
									</tr>
									<tr>
										<td>Roll:</td>
										<td class="text-bold" style="color: green;font-size: 20px"><?=$rowsdata['class_roll']?></td>
									</tr>
									
									<tr>
										<td>Phone:</td>
										<td class="text-bold" style="color: green;font-size: 20px"><?=$rowsdata['Phone_Number']?></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="cell-sm-4">
						<div class="img-container">
							
							<img src="all-images/<?=$rowsdata['student_image']?>" alt="student" class="avatar" style="width:300px;height:300px;border-radius:8px;">
						</div>
					</div>
				</div>

				
				
				
<?php }

} ?>
				
				
				<!--Content End -->
			</div>
		</div>
	</div>
	
</div>

</div>
</div>
</div>
<?php include_once('inc/footer.php');?>
</body>
</html>