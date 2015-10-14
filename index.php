<?php

if (isset($_POST['submit']))
{ 
$name = $_POST['name'];
$email = $_POST['email'];
$activity = $_POST['activity']; 
$description = $_POST['description']; 
} 

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Leave following 3 meta tag on the top! -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Leave above 3 meta tag on the top! -->
      
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Fika With A Refugee</title>

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles  -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Debugging purposes -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>
      
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>

    <!-- NAVIGATION -->  
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
          
          <div class="navbar-header">
            
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#info">Fika With A Refugee</a>
          
          </div>
          
          <div id="navbar" class="collapse navbar-collapse">
            
              <ul class="nav navbar-nav">
                <li><a href="#info">Info</a></li>
                <li><a href="#how">How it works</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#sign-up">Donate time</a></li>
              </ul>
          
          </div>
      
      </div>
    </nav><!-- END NAVIGATION -->  

      
    <!-- First-block -->
    <div id="info">
    <div class="container first-block">      
      <div class="col-md-3"></div>
      
      <div class="col-md-6">

              <h1>Up for a fika?</h1>          
          <div class="first-text">
              
              <p class="lead">Bajs
                    By inviting someone to a fika you are inviting them to one of the core concepts in Swedish culture. Sitting down having a coffee, a cake and talk about everything and anything. We believe having a fika is a powerful tool to start a lifelong friendship or just to have a good time. And by the way, can you have too much fika in your life?
              </p>
          </div>

       </div> 
       
        <div class="col-md-3"></div>
    </div>
    </div>  

    <!-- Second-block --> 
    <div class="second-block">          
          <div class="col-md-3"></div>
      
            <div class="col-md-6">
            <h1>Do you have time over?</h1>              
             <div class="second-text"> 
                <p>
                  To donate money is easy and the options are almost endless. But what if you want to donate time? Shouldn’t that be as simple? We think that it should be, by filling out the form below you can become a part of our pool of people willing to have a coffee with a refugee.
                </p>

                <p class="donate-button"><a href="#sign-up">Donate time</a></p> 


            </div>       
          </div>

      <div class="col-md-3"></div>
    </div>

      
    <!-- Third-block --> 
    <div id="how">
    <div class="third-block container">        
        <div class="col-md-3"></div>
        
        <div class="col-md-6">
            <h1>How it works</h1>
              
              <ul class="timeline"><!-- start .timeline -->  
                  <li>
                    <div class="direction-l">
                        <div class="flag-wrapper">
                          <span class="flag">1. Sign up</span>
                          <span class="time-wrapper"><span class="time">2013 - 2014</span></span>
                        </div>
                        <div class="desc">
                          <p>
                            Fill out the form <a href="#sign-up">below</a>
                          </p>
                        </div>
                    </div>
                  </li>
                    
                  <li>
                    <div class="direction-r">
                        <div class="flag-wrapper">
                          <span class="flag">2. We match you</span>
                          <span class="time-wrapper"><span class="time">2014 - 2015</span></span>
                        </div>
                        <div class="desc">
                          <p>
                            We match you with a refugee depending on where in Sweden you are located, we have contact with refugees through the refugee housing system.
                          </p>
                        </div>
                    </div>
                  </li>

                  <li>
                    <div class="direction-l">
                        <div class="flag-wrapper">
                          <span class="flag">3. Meet up</span>
                          <span class="time-wrapper"><span class="time">2014 - present</span></span>
                        </div>
                        <div class="desc">
                           <p> 
                              We hand over the contact details and you and the refugee make up plans for your meeting.
                            </p>
                        </div>
                    </div>
                  </li>
              </ul><!-- end /.timeline -->  

        </div>
        
        <div class="col-md-3"></div>        
    </div>
    </div>  
      
      
    <!-- Fourth-block -->  
    <div id="about">
    <div class="fourth-block container">        
        <div class="col-md-3"></div>
        
        <div class="col-md-6">
          <h1>About the project</h1>
                <div class="fourth-text">
                <p>
                  We are five Hyper Island students with the mission to learn to code digital services. We want to take the opportunity to do this in combination with doing good. We made some research and visited a refugee center for real life input. We realized that many things are done for refugees, but not enough regarding the integration with Swedish social norms.
                  <br>
                  IN 2013 Swedes donated 5,82 billion SEK and the willingness to donate increases each year. We want to open up for another alternative, where people instead of donating money can donate time and be present to see for themselves how little it takes to give joy for others.

                </p>
            </div>
        </div>
        
        <div class="col-md-3"></div>        
    </div>
    </div><!-- /.fourth-block -->   
    

    <!-- Fifth-block -->  
    <div id="sign-up">
      <div class="fifth-block container">        
          <div class="col-md-3"></div>
        
           <div class="col-md-6">
              
              

                  <!-- Php for form -->  

                  <?php
                      if (isset($_POST['submit']))
                      {
                      echo "<div class='fifth-text'><h2>Thank you " . $name . " for sending us a message!</h2><br>Here is the information you sent us:<br><br><strong>Email:<br></strong> " . $email . "<br><strong>Activity:<br></strong> " . $activity . "<br><strong>Description:<br></strong> " . $description . "</div>";
                      }

                      else echo'<div class="fifth-text"><h1>Donate time</h1>
                                  
                                    <form class="form" method="post" action="' . $_SERVER['PHP_SELF'] .'">

                                        <div class="form-group">
                                            <input type="name" name="name" class="form-control" id="name" placeholder="Your name"> 
                                        </div>
                                          
                                         <div class="form-group">
                                            <input type="email" name="email" class="form-control" id="email" placeholder="Email"> 
                                          </div>
                                          
                                          <div class="form-group">
                                            <input type="activity" name="activity" class="form-control" id="activity" placeholder="Activity, for example fika"> 
                                          </div>
                                          
                                          <div class="form-group">
                                            <textarea type="text" name="description" class="form-control" id="description" placeholder="Short description of the activity"></textarea>
                                          </div>
                                          
                                          <button type="Submit" name="submit" class="btn btn-default">Submit</button>
                        
                                    </form>
                                </div>'
                  ?>
            </div>
        
        <div class="col-md-3"></div>        
    
      </div><!-- end/.fifth-block .container -->  
    </div> <!-- end/#signup -->  
    
      
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    
    <script src="js/scroll.js"></script>
    
    <!-- BOOTSTRAP JAVASCRIPT - Keep this in the end of the page to load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      
    <script src="js/bootstrap.min.js"></script>
      
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="sjs/ie10-viewport-bug-workaround.js"></script>
      
  </body>
</html>
