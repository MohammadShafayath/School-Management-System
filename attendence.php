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
					if($_GET['page'] == 'attendence-form'){ ?>
					<div class="row">
						<div class="cell-md-12">
							<div data-role="panel" data-title-caption="Attendence" data-collapsible="false" data-title-icon="<span class='mif-plus'></span>" class="m-1">					<div class="p-2">
							<form action="" method="POST" enctype="multipart/form-data">
								<div class="row">
									<div class="cell-md-12 bg-darkCyan">
										<p class="fg-white">Student Attendence</p>
									</div>
									<tr>
										<td><input type="text" name="stuid[]" value="<?php echo $row['Student_id'] ?>"></input></td>
										<td><input type="text" name="stuname[]" value="<?php echo $row['Student_name'] ?>"></input></td>
										<td><input type="text" name="stuclass[]" value="<?php echo $row['Student_Class'] ?>"></input></td>
										<td>
											<input type="text" name="section[]" value="<?php echo $row['Student_Section'] ?>"></input>
											<input type="hidden" value="<?php echo date("Y-m-d"); ?>" name="attdate[]">
											<td>
												<select name="attndc[]">
													<option value="present">PRESENT</option>
													<option value="absent">ABSENT</option>
													<option value="leave">LEAVE</option>
												</select>
											</td>
										</tr>
										
										
										
									</form>
									<?php } ?>
									<?php
									if($_GET['page'] == 'check-attendence'){ ?>
									
									<div class="row">
										<div class="cell-md-12">
											<div data-role="panel" data-title-caption="Attendence" data-collapsible="false" data-title-icon="<span class='mif-plus'></span>" class="m-1">
											<div class="p-2">
												<form action="" method="POST" enctype="multipart/form-data">
													<div class="row">
														<div class="cell-md-12 bg-darkCyan">
															<p class="fg-white">Checkout Student Attendence</p>
														</div>
														
														
														<div class="cell-md-3">
															<label>Select Class</label>
															<select data-role="select" name="">
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
															<label>Section Section</label>
															<select data-role="select" name="">
																<option type="text" placeholder="Please Select Section" class="metro-input" class="fg-cyan" >A</option>
																<option class="fg-cyan">B</option>
															</select>
														</div>
														
														<div class="cell-md-3">
															<label>Select Month</label>
															<input data-role="datepicker" data-day="false" data-year="false" placeholder="month" class="metro-input"name="">
														</div>
														<div class="cell-md-3">
															<label>Select Year</label>
															<input data-role="datepicker" data-day="false" data-month="false" placeholder="Year" class="metro-input"name="">
														</div>
														<div class="cell-md-12">
															<button class="button alert place-right mt-1" type="submit" name="attendence-search">Search</button>
														</div>
												</form>	
											</div>
											<?php if(isset($_POST['attendence-search'])){ ?>
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