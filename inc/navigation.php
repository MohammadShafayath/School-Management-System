<div class="navview-pane">
	<div class="bg-cyan d-flex flex-align-center">
		<button class="pull-button m-0 bg-darkCyan-hover">
		<span class="mif-menu fg-white"></span>
		</button>
		<h6 class="text-light m-0 fg-white" style="line-height: 22px;font-size: 18px;">School Management System</h6>
	</div>
	<ul class="navview-menu" id="side-menu">
		<li class="item-header bg-darkCyan fg-white text-center"><span class="mif-navigation mif-3x fg-green"></span> NAVIGATION</li>
		<li>
			<a href="index.php">
				<span class="icon"><span class="mif-meter mif-3x fg-green"></span></span>
				<span class="caption">Dashboard</span>
			</a>
		</li>
		<li><a href="javascript:void(0)" class="dropdown-toggle">
			<span class="icon" style="display: inline;"><i class="fa fa-graduation-cap  fa fa-3x fg-green"></i></span>
			<span class="caption">Students</span>
		</a>
		<ul class="navview-menu stay-open" data-role="dropdown">
			<li><a href="student.php?page=add">
				<span class="icon"><span class="mif-plus mif-lg fg-cyan"></span></span>
				<span class="caption">Add Student</span>
			</a></li>
			<li><a href="student.php?page=all-student">
				<span class="icon"><span class="mif-list mif-lg fg-cyan"></span></span>
				<span class="caption">All Student</span>
			</a></li>
			<li><a href="student.php?page=student-details">
				<span class="icon"><span class="mif-eye mif-lg fg-cyan"></span></span>
				<span class="caption">Student Details</span>
			</a></li>
		</ul>
	</li>
	<li><a href="javascript:void(0)" class="dropdown-toggle">
		<span class="icon" style="display: inline;"><span class="mif-user-check mif-3x fg-green"></span></span>
		<span class="caption">Teachers</span>
	</a>
    <ul class="navview-menu stay-open" data-role="dropdown">
			<li><a href="teacher.php?page=add-teacher">
				<span class="icon"><span class="mif-plus mif-lg fg-cyan"></span></span>
				<span class="caption">Add teacher</span>
			</a></li>
			<li><a href="teacher.php?page=all-teacher">
				<span class="icon"><span class="mif-list mif-lg fg-cyan"></span></span>
				<span class="caption">All teacher</span>
			</a></li>
			<li><a href="teacher.php?page=teacher-details">
				<span class="icon"><span class="mif-eye mif-lg fg-cyan"></span></span>
				<span class="caption">teacher Details</span>
			</a></li>
		</ul>
</li>
</li>

<li>
	<a href="javascript:void(0)" class="dropdown-toggle">
		<span class="icon" style="display: inline;"><i class='fa fa-university fa fa-3x fg-green'></i></span>
		<span class="caption">Classes</span>
	</a>
	<ul class="navview-menu stay-open" data-role="dropdown">

		    <li><a href="classes.php?page=add-class">
				<span class="icon"><span class="mif-plus mif-lg fg-cyan"></span></span>
				<span class="caption">Add New Class</span>
			</a></li>
			<li><a href="classes.php?page=all-class">
				<span class="icon"><span class="mif-list mif-lg fg-cyan"></span></span>
				<span class="caption">All Class</span>
			</a></li>
			
			</ul>
</li>

<li>
	<a href="javascript:void(0)" class="dropdown-toggle">
		<span class="icon" style="display: inline;"><i class="fa fa-clock-o fa fa-3x fg-green"></i></span>
		<span class="caption">Attendence</span>
	</a>
	<ul class="navview-menu stay-open" data-role="dropdown">

		    <li><a href="attendence.php?page=attendence-form">
				<span class="icon"><span class="mif-file-binary mif-lg fg-cyan"></span></span>
				<span class="caption">Attendence form</span>
			</a></li>
			<li><a href="attendence.php?page=check-attendence">
				<span class="icon"><span class="mif-display mif-lg fg-cyan"></span></span>
				<span class="caption">Attendence Checkout</span>
			</a></li>
			
			</ul>
</li>

<li>
	<a href="javascript:void(0)" class="dropdown-toggle">
		<span class="icon" style="display: inline;"><i class='fa fa-university fa fa-3x fg-green'></i></span>
		<span class="caption">Subjects</span>
	</a>
	<ul class="navview-menu stay-open" data-role="dropdown">

		    <li><a href="subjects.php?page=add-subjects">
				<span class="icon"><span class="mif-plus mif-lg fg-cyan"></span></span>
				<span class="caption">Add New Subjects</span>
			</a></li>
			<li><a href="classes.php?page=all-subjects">
				<span class="icon"><span class="mif-list mif-lg fg-cyan"></span></span>
				<span class="caption">All Subjects</span>
			</a></li>
			
			</ul>
</li>



<li>
	<a href="marks.php?page=Marks">
		<span class="icon"><span class="mif-checkmark mif-3x fg-green"></span></span>
		<span class="caption">Marks</span>
	</a>
</li>
<li>
	<a href="javascript:void(0)" class="dropdown-toggle">
		<span class="icon"><span class="mif-note mif-3x fg-green"></span></span>
		<span class="caption">Exams</span>
	</a>
	<ul class="navview-menu stay-open" data-role="dropdown">

		    <li><a href="exam.php?page=Exam-Schedule">
				<span class="icon"><span class="mif-calendar mif-lg fg-cyan"></span></span>
				<span class="caption">Exam Schedule</span>
			</a></li>
			<li><a href="exam.php?page=Exam-Grade">
				<span class="icon"><span class="mif-unlock mif-lg fg-cyan"></span></span>
				<span class="caption">Exam Grade</span>
			</a></li>
			
			</ul>
</li>
<li>
	<a href="map.php?page=Maps">
		<span class="icon"><span class="mif-map mif-3x fg-green"></span></span>
		<span class="caption">Map</span>
	</a>
</li>


</ul>
<div class="w-100 text-center text-small data-box p-2 border-top bd-grayMouse" style="position: absolute; bottom: 0">
<div>&copy; 2020 <a href="mailto:17151019@uits.edu.bd" class="text-muted fg-white-hover no-decor">Shafayath Hossan</a></div>
<div>All rights reserved by <a href="https://metroui.org.ua" class="text-muted fg-white-hover no-decor">Shafayath</a></div>
</div>
</div>