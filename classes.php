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
					if($_GET['page'] == 'add-class'){ ?>
					<title>Class Information</title>
					<div class="row">
						<div class="cell-md-12">
							<div data-role="panel" data-title-caption="Add Class" data-collapsible="false" data-title-icon="<span class='mif-plus'></span>" class="m-1">
							<div class="p-2">
								<form action="" method="POST" enctype="multipart/form-data">
									<div class="row">
										<div class="cell-md-12 bg-darkCyan">
											<p class="fg-white">Class Information</p>
										</div>
										<div class="cell-md-3">
											<label>Teacher Name</label>
											<input type="text" placeholder="Enter Fullname" class="metro-input" name="teacher_name">
										</div>
										<div class="cell-md-3">
											<label>Id Number</label>
											<input type="Number"  class="metro-input"name="teacher_id">
										</div>
										<div class="cell-md-3">
											<label>Gender</label>
											<select data-role="multipart" name="gender">
												<option type="text" placeholder="Please Select Gender" class="metro-input" class="fg-cyan">Male</option>
												<option class="fg-cyan">Female</option>
												<option class="fg-cyan">None</option>
											</select>
										</div>
						
										<div class="cell-md-3">
											<label>Class</label>
											
												<input type="text" placeholder="Enter class Name" class="metro-input" name="class">
										</div>
										<div class="cell-md-3">
											<label>Subject</label>
											
											<select data-role="select" multiple name="subject_id">
												<option type="text" placeholder="Please Select Class" class="metro-input" class="fg-cyan">Bangla</option>
												<option class="fg-cyan">English</option>
												<option class="fg-cyan">Math</option>
												<option class="fg-cyan">General Science</option>
												<option class="fg-cyan">General Knowledge</option>
												<option class="fg-cyan">Religion</option>
												<option class="fg-cyan">Caliography</option>
											</select>
										</div>
										<div class="cell-md-3">
											<label>section</label>
											<select data-role="select" multiple name="section">
												<option type="text" placeholder="Please Select Section" class="metro-input" class="fg-cyan" >A</option>
												<option class="fg-cyan">B</option>
											</select>
										</div>
										<div class="cell-md-3">
											<label>Class Duration(minutes)</label>
											<input type="Number"placeholder="Set a Time" class="metro-input"name="class_time">
										</div>
										
										<div class="cell-md-3">
											<label>E-mail</label>
											<input type="text" placeholder="Enter Your Mail" class="metro-input"name="mail">
										</div>
										
										<div class="cell-md-3">
											<label>Phone Number</label>
											<input type="Number" placeholder="Enter your phone number" class="metro-input"name="phone_no">
										</div>

										<div class="cell-md-12">
											<button class="button alert place-right mt-1" type="submit" name="classes-insert">Save</button>

										</div>
									</div>

									
								</form>
								
								<?php } ?>
								<?php
								if($_GET['page'] == 'all-class'){ ?>
								<div class="row">
									<div class="cell-md-12">
										<div data-role="panel" data-title-caption="All Classes" data-collapsible="false" data-title-icon="<span class='mif-plus'></span>" class="m-1">
										<div class="p-2">
											<div class="row">
    <div class="cell-md-12">
        <div data-role="panel" data-title-caption="Class Details" data-collapsible="true" data-title-icon="<span class='mif-table'></span>" class="mt-3">
            <div class="p-2" >
                <table class="table striped table-border mt-3"
                       data-role="table"
                       data-cls-table-top="row"
                       data-cls-search="cell-md-5"
                       data-cls-rows-count="cell-md-7"
                       data-rows="30"
                       data-rows-steps="30, 50, 100, 150, 200"
                       data-show-activity="false"
                       data-source="data/class-data.php"
                       data-horizontal-scroll="true"
                >
                </table>
            </div>
        </div>
    </div>

    
</div>

											<?php } ?>



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