<!DOCTYPE html>
<html lang="en">
  <?php include_once('inc/head.php');?>
  <body class="m4-cloak h-vh-100">
    <div data-role="navview" data-toggle="#paneToggle" data-expand="xl" data-compact="lg" data-active-state="true">
      <?php include_once('inc/navigation.php');?>
      <div class="navview-content h-100">
        <?php include_once('inc/topbar.php');?>
        <div class="content-inner h-100" style="overflow-y: auto;">
          
          
          <!--content start -->
          <?php
          if($_GET['page'] == 'Maps'){ ?>
          <title>Map</title>
          <div class="row">
            <div class="cell-md-12">
              <div data-role="panel" data-title-caption="Map" data-collapsible="false" data-title-icon="<span class='mif-plus'></span>" class="m-1">
              <div class="p-2">



                <head>
    
    <iframe scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=%20Thanchi+()&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width=100% height="400" frameborder="0">
      
    </iframe>
     <a href='https://www.free-counters.org/'>Map</a>
      <script type='text/javascript' src='https://maps-generator.com/google-maps-authorization/script.js?id=c3e76a81a228dd3a85c6d6be7eebd3903a2630fd'>
        
      </script>
  </head>
  <body>
    <h3>Google Maps shows Location</h3>
    
  </body>

                
                  </div>
                </div>
              </div>
            </div>


                  
                </form>
                
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