<!DOCTYPE html>
<html lang="en">
    <?php include_once('inc/head.php');?>
    <body class="m4-cloak h-vh-100">
        <div data-role="navview" data-toggle="#paneToggle" data-expand="xl" data-compact="lg" data-active-state="true">
            <?php include_once('inc/navigation.php');?>
            <div class="navview-content h-100">
                <?php include_once('inc/topbar.php');?>
                <div class="content-inner h-100" style="overflow-y: auto">
                    <!--content start -->

                    <div class="row border-bottom bd-lightGray m-3">
    <div class="cell-md-4 d-flex flex-align-center">
        <h3 class="dashboard-section-title  text-center text-left-md w-100">School <small>Management System</small></h3>
    </div>

    <div class="cell-md-8 d-flex flex-justify-center flex-justify-end-md flex-align-center">
        <ul class="breadcrumbs bg-transparent">
            <li class="page-item"><a href="#" class="page-link"><span class="mif-meter"></span></a></li>
            <li class="page-item"><a href="#" class="page-link">Dashboard</a></li>
        </ul>
    </div>
</div>

<div class="m-3">
<div class="row mt-2">
    <div class="cell-lg-4 cell-sm-6 mt-2">
        <div class="icon-box border bd-cyan">
            <div class="icon bg-cyan fg-white"><span class="mif-school"></span></div>
            <div class="content p-4">
                <div class="text-upper">Total Student</div>
                <div class="text-upper text-bold text-lead">300</div>
            </div>
        </div>
    </div>
    <div class="cell-lg-4 cell-sm-6 mt-2">
        <div class="icon-box border bd-red">
            <div class="icon bg-red fg-white"><span class="mif-user-check"></span></div>
            <div class="content p-4">
                <div class="text-upper">Total Teachers</div>
                <div class="text-upper text-bold text-lead">22</div>
            </div>
        </div>
    </div>
    <div class="cell-lg-4 cell-sm-6 mt-2">
        <div class="icon-box border bd-green">
            <div class="icon bg-green fg-white"><i class="fa fa-clock-o"></i></div>
            <div class="content p-4">
                <div class="text-upper">Attendence</div>
                <div class="text-upper text-bold text-lead">70%</div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="cell-md-12">
        <div data-role="panel" data-title-caption="Teachers salary" data-collapsible="true" data-title-icon="<span class='mif-table'></span>" class="mt-3">
            <div class="p-2">
                <table class="table striped table-border mt-3"
                       data-role="table"
                       data-cls-table-top="row"
                       data-cls-search="cell-md-6"
                       data-cls-rows-count="cell-md-6"
                       data-rows="5"
                       data-rows-steps="5, 10"
                       data-show-activity="false"
                       data-source="data/table.json"
                       data-horizontal-scroll="true"
                >
                </table>
            </div>
        </div>
    </div>

    
</div>
                    <!--Content End -->


                </div>
            </div>
        </div>
        <?php include_once('inc/footer.php');?>
    </body>
</html>