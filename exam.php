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
					if($_GET['page'] == 'Exam-Schedule'){ ?>
					<title>Class Information</title>
					<div class="row">
						<div class="cell-md-12">
							<div data-role="panel" data-title-caption="Add Subjects" data-collapsible="false" data-title-icon="<span class='mif-plus'></span>" class="m-1">
							<div class="p-2">
								<form action="" method="POST" enctype="multipart/form-data">
									<div class="row">
										<div class="cell-md-12 bg-darkCyan">
											<p class="fg-white">Subject Information</p>
										</div>
										<div class="cell-md-6">
											<label>Subject Name</label>
											<input type="text" placeholder="Enter Fullname" class="metro-input" name="subject_name">
										</div>
										
										<div class="cell-md-6">
											<label>Subject Type</label>
											<select data-role="select" name="subject_type">
												<option type="text" placeholder="Please Select Type" class="metro-input" class="fg-cyan">Theory</option>
												<option class="fg-cyan">Lab</option>
												
											</select>
										</div>
						
										<div class="cell-md-6">
											<label>Subject Class</label>
											
											<select data-role="select" name="subject_class">
												<option type="text" placeholder="Please Select Class" class="metro-input" class="fg-cyan">One</option>
												<option class="fg-cyan">Two</option>
												<option class="fg-cyan">Three</option>
											</select>
										</div>
										<div class="cell-md-6">
											<label>Subject Code</label>
											
											<select data-role="select" name="subject_code">
												<option type="text" placeholder="Please Select Class" class="metro-input" class="fg-cyan">101</option>
												<option class="fg-cyan">102</option>
												<option class="fg-cyan">261</option>
												<option class="fg-cyan">262</option>
												<option class="fg-cyan">201</option>
												<option class="fg-cyan">202</option>
												<option class="fg-cyan">176</option>
											</select>
										</div>
									
										<div class="cell-md-12">
											<button class="button alert place-right mt-1" type="submit" name="classes-insert">Save</button>

										</div>
									</div>

									
								</form>

								<div class="row">
	<div class="cell-md-12">
		<div data-role="panel" data-title-caption="Exam Details" data-collapsible="false" data-title-icon="<span class='mif-plus'></span>" class="m-1">
		<div class="p-2">
			<div class="row">
				<div class="cell-md-12">
					<div data-role="panel" data-title-caption="Exam Details" data-collapsible="true" data-title-icon="<span class='mif-table'></span>" class="mt-3">
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
	</div>
</div>
</div>

			
		</div>
								
<?php } ?>

<?php
if($_GET['page'] == 'Exam-Grade'){ ?>

<div class="row">
    <div class="cell-md-12">
        <div data-role="panel" data-title-caption="Exam Grade" data-collapsible="true" data-title-icon="<span class='mif-table'></span>" class="mt-3">
            <div class="p-2">
                <table class="table striped table-border mt-3"
                       data-role="table"
                       data-cls-table-top="row"
                       data-cls-search="cell-md-6"
                       data-cls-rows-count="cell-md-6"
                       data-rows="5"
                       data-rows-steps="5, 10"
                       data-show-activity="false"
                       data-source="data/gradetable.json"
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