<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sign Up Here</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <link href="css/main.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->



    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>

  
  </head>
  <body>
      <section id="sign_up">
          <div class="container">
              <div class="row">
                  <div class="col-md-6">
                      <img src="images/icon.png" alt="fr_img" width="500" height="600">
                  </div>
                  
                  <div class="col-md-6">
                     <form class="signup-form" action="signup.php" method="POST">    <div class="form-group">
                              <label for="fname">First Name</label>
                              <input type="text" class="form-control" name="first" placeholder="First Name">
                          </div>
                          <div class="form-group">
                              <label for="lname">Last Name</label>
                              <input type="text" class="form-control" name="last" placeholder="Last Name">
                          </div>
                          <div class="form-group">
                              <label for="email">Email</label>
                              <input type="email" class="form-control" name="email" placeholder="Email">
                          </div>
                          <div class="form-group">
                              <label for="username">Username</label>
                              <input type="text" class="form-control" name="username" placeholder="Username">
                          </div>
                      
                          <div class="form-group">
                              <label for="pwd">Password</label>
                              <input type="password" class="form-control" name="pass" placeholder="password">
                          </div>
                          <div class="form-group">
                              <label for="address">Address</label>
                              <input type="text" class="form-control" name="address" placeholder="Address">
                          </div>
                      
                          <div class="well">
                              <label class="row">Gender:</label>    
                                  <div class="form-group"> 
                            
                                      <label class="radio-inline">
                                      <input name="gender" name="gen" value="Male" type="radio">Male
                                      </label>
                                      <label class="radio-inline">
                                      <input name="gender" name="gen" value="Female" type="radio">Female
                                      </label>
                                  </div>
                          </div>
                      
                     
                          <div class="well"> 
                              <div class="form-group">
                                  <label for="DOB1">Date of Birth</label>
                                  <input type="date" class="form-control" namee="date">
                              </div>
                          </div>
                          
                          

                          <button type="submit" name='submit' class="btn btn-success">submit</button>

                      </form>
                  </div>
              </div>
          </div>
      </section>
      
      <section id="footer">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="tools">
                          <div class="col-md-3">
                              <h3>PARTNER</h3>
                              <img src="images/health.jpg" alt="partner" width="100" height="80">
                          </div>
                          <div class="col-md-3">
                              <h3>WE CARE</h3>
                               <p>You will be okay!Just keep Going</p>
                              <p>Events</p>
                              <p>Photo Gallery</p>
                              <p>FAQ</p>
                          </div>
                          <div class="col-md-3">
                              <h3>CONTACT DETAILS</h3><br>
                              <p><p>DIU MENTAL HEALTH FORUM<P>
							  <P>102,Mirpur Road,Dhaka-1207<P>
							  <P>+088 0181-841-7797<P>
							  <P>+088 0196-981-0437<P>
							  <P>+088 0179-933-2737</p>
                          </div>
                          <div class="col-md-3">
                              <h3>FOLLOW US</h3>
                              <img src="images/fb.jpg" class="img-circle" alt="partner" width="40" height="30">
                              <img src="images/twiter.jpg" class="img-circle" alt="partner" width="40" height="30">
                              <img src="images/youtube.jpg" class="img-circle" alt="partner" width="40" height="30">
                          </div>
                      </div>
                  </div>
                  
              </div>
          </div>
      </section>
      
      
      
      
      
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>