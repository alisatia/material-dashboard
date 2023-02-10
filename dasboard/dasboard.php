<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css" />
    <title>Dasboard</title>
  </head>
  <body style="background-color: #F0F5FF">

    <!-- container -->
    <div id="wrapper" class="toggled" >

      <!-- Sidebar -->
      <div id="sidebar-wrapper" class="shadow bg-white">
        <button type="button" href="#menu-toggle" onClick="sembunyi();" id="menu-toggle2" >fdsa</button>
      </div>

      <!-- Page Content -->
      <div id="page-content-wrapper" style="border: 1px solid black">
        <div class="container-fluid">
          <button type="button" href="#menu-toggle" id="menu-toggle" onClick="sembunyi();" class="mb-1 shadow bg-primary">Toggle Menu</button>
          <p class="bg-primary">dsd</p>
          <div class=" bg-primary">
            <div class="col-lg-12">
              <h1>Simple Sidebar</h1>
            </div>
          </div>
            <div class="row">
            <div class="bg-primary border col-6 col-md-3 fs-2">1</div>  
            <div class="bg-primary border col-6 col-md-3 fs-2">1</div>  
            <div class="bg-primary border col-6 col-md-3 fs-2">1</div>  
            <div class="bg-primary border col-6 col-md-3 fs-2">1</div>  
          </div>
        </div>
      </div>
    </div>
 
    <!-- script -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script>
          var hidden = false;
          function sembunyi() {
              hidden = !hidden;
              if(hidden) {
                  document.getElementById('menu-toggle').style.visibility = 'hidden';
              } else {
                  document.getElementById('menu-toggle').style.visibility = 'visible';
              }
          }
      $("#menu-toggle").click(function (e) {e.preventDefault(); $("#wrapper").toggleClass("toggled");});
      $("#menu-toggle2").click(function (e) {e.preventDefault(); $("#wrapper").toggleClass("toggled");});
    </script>
  
</body>
</html>
