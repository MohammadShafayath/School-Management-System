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
					if($_GET['page'] == 'add-teacher'){ ?>
					<title>Teacher Information</title>
					<div class="row">
						<div class="cell-md-12">
							<div data-role="panel" data-title-caption="Teacher Add" data-collapsible="false" data-title-icon="<span class='mif-plus'></span>" class="m-1">
							<div class="p-2">
								<form action="" method="POST" enctype="multipart/form-data">
									<div class="row">
										<div class="cell-md-12 bg-darkCyan">
											<p class="fg-white">Teacher's Information</p>
										</div>
										<div class="cell-md-3">
											<label>Teacher Name</label>
											<input type="text" placeholder="Enter Fullname" class="metro-input" name="teacher_name" required>
										</div>
										
										<div class="cell-md-3">
											<label>class</label>
											
											<select data-role="select" name="teacher_class" required>
												<option type="text" placeholder="Please Select Class" class="metro-input" class="fg-cyan">One</option>
												<option class="fg-cyan">Two</option>
												<option class="fg-cyan">Three</option>
											</select>
										</div>
										<div class="cell-md-3">
											<label>section</label>
											<select data-role="select" name="teacher_section" required>
												<option type="text" placeholder="Please Select Section" class="metro-input" class="fg-cyan" >A</option>
												<option class="fg-cyan">B</option>
											</select>
										</div>
										<div class="cell-md-3">
											<label>Date of Birth</label>
											<input data-cls-calendar="compact" type="text" data-role="calendarpicker" data-format="%d-%m-%Y" name="birth_date" required>
										</div>
										<div class="cell-md-3">
											<label>Gender</label>
											<select data-role="select" name="gender">
												<option type="text" placeholder="Please Select Gender" class="metro-input" class="fg-cyan" required>Male</option>
												<option class="fg-cyan">Female</option>
												<option class="fg-cyan">None</option>
											</select>
										</div>
										
										<div class="cell-md-3">
											<label>Id Number</label>
											<input type="Number"  class="metro-input"name="id_Number" required>
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
											<input type="text" placeholder="Enter Your Mail" class="metro-input"name="mail" required>
										</div>
										
									
										<div class="cell-md-3">
											<label>Parmanent Adress</label>
											<input type="text"  class="metro-input"name="parmanent_address">
										</div>
										
										
										
										<div class="cell-md-3">
											<label>Present Adress</label>
											<input type="text"  class="metro-input"name="present_address">
										</div>
										<div class="cell-md-3">
											<label>Phone Number</label>
											<input type="Number" placeholder="Enter your phone number" class="metro-input"name="phone_no" required>
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
											<label>Upload Teacher Photo</label>
											<input type="file" data-role="file" data-button-title="Choose file"name="teacher-image-upload" required>
										</div>
										
									
										<div class="cell-md-12">
											<button class="button alert place-right mt-1" type="submit" name="teacher-insert">Save</button>

										</div>
									</div>

									
								</form>
								
								<?php } ?>
								<?php
									if($_GET['page'] == 'all-teacher'){ ?>
									<div class="row">
										<div class="cell-md-12">
											<div data-role="panel" data-title-caption="Teacher all" data-collapsible="false" data-title-icon="<span class='mif-plus'></span>" class="m-1">
											<div class="p-2">
												<div class="row">
													<div class="cell-md-12">
														<div data-role="panel" data-title-caption="Teachers Details" data-collapsible="true" data-title-icon="<span class='mif-table'></span>" class="mt-3">
														<div class="p-2" >
															<table class="table striped table-border mt-3"
																data-role="table"
																data-cls-table-top="row"
																data-cls-search="cell-md-5"
																data-cls-rows-count="cell-md-7"
																data-rows="30"
																data-rows-steps="30, 50, 100, 150, 200"
																data-show-activity="false"
																data-source="data/teacher-data.php"
																data-horizontal-scroll="true"
																>
															</table>
														</div>
													</div>
												</div>
												
											</div>
											<?php } ?>

											<?php
											if($_GET['page'] == 'teacher-details'){
											$getId = $_GET['id'];
											$sql = mysqli_query($db, "SELECT * FROM `teacher_info` WHERE id = $getId");
											if(mysqli_num_rows($sql) == 1){
												$rowsdata = mysqli_fetch_array($sql);
?>
<div class="row">
	<div class="cell-md-12">
		<div data-role="panel" data-title-caption="Teacher details" data-collapsible="false" data-title-icon="<span class='mif-eye'></span>" class="m-1">
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
						
						<div class="info-table table-responsive">
							<table class="table text-nowrap">
								<tbody>
									<tr>
										<td>Name:</td>
										<td class="text-bold" style="color: green;font-size: 20px"><?=$rowsdata['teacher_name']?></td>
									</tr>
									
									<tr>
										<td>ID:</td>
										<td class="text-bold" style="color: green;font-size: 20px"><?=$rowsdata['id_Number']?></td>
									</tr>
									<tr>
										<td>Gender:</td>
										<td class="text-bold" style="color: green;font-size: 20px"><?=$rowsdata['gender']?></td>
									</tr>
									<tr>
										<td>Address:</td>
										<td class="text-bold" style="color: green;font-size: 20px"><?=$rowsdata['present_address']?></td>
									</tr>
									<tr>
										<td>Phone:</td>
										<td class="text-bold" style="color: green;font-size: 20px"><?=$rowsdata['phone_no']?></td>
									</tr>
									<tr>
										<td>Mail:</td>
										<td class="text-bold" style="color: green;font-size: 20px"><?=$rowsdata['mail']?></td>
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