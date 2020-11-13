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

    <form action="server.php" method="POST" class="p-5">
    <div class="form-group">
        <label>Email address</label>
        <input type="text" placeholder="Enter email" name="text1"/>
        <small class="text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="text" placeholder="Enter email"  name="text2"/>
    </div>
    <div class="form-group">
        <input type="checkbox" data-role="checkbox" data-caption="Remember me">
    </div>
    <div class="form-group">
        <button type="submit" class="button success">Submit data</button>
        <input type="button" class="button" value="Cancel">
    </div>
</form>


<table class="table stripped cell-bordered">
    
</table>


                    <!--Content End -->


                </div>
            </div>
        </div>
        <?php include_once('inc/footer.php');?>
    </body>
</html>