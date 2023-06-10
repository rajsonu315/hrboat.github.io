<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="google" content="notranslate" />

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Chat Bot </title>


  <link href="http://allcampaigns.in/boat/assets/logincss/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="http://allcampaigns.in/boat/assets/logincss/main.css" rel="stylesheet" type="text/css" />
  <!-- END GLOBAL MANDATORY STYLES -->
  <link href="<?php echo base_url();?>assets/land/bootstrap.min.css" rel="stylesheet" type="text/css" />

  <link href="<?php echo base_url();?>assets/land/main.css" rel="stylesheet" type="text/css" />
</head>
<body>

  <!-- Chat bot UI start -->
 
    <div class="chat-mail">
      <div class="row">
        <div class="col-md-12 text-center mb-2">
          <p> Hi, I am Proactive Identification bot, <br>Safety First; report Unsafe Condition, Unsafe act, Unsafe Behavior & Near Miss IncidentsUnsafe Condition: Condition in the workplace that is likely to cause injury.
<br>Unsafe Behavior / Act: Behavior that is exhibited or Activity that is conducted in a manner that may threaten the health and/or safety <br>Near Miss Incident: Event that did not result in injury, illness or damage - But had the potential to do so. <br>Good Act: Behavior that is exhibited or activity that is conducted in a manner that will not lead to any health and /or safety hazard.

<br>To start your journey with us we need some of your details like your Name, Email ID & Mobile Number.
          </p>
        </div>
      </div>
      <form action="<?php echo base_url();?>Welcome" method="post">
      <div class="row">

     
          <div class="col-md-12">
            <div class="form-group">
              <input type="text" class="form-control" name="Name" placeholder="Name" required>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <input type="email" class="form-control" name="Email" placeholder="Email" required>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <input type="tel" class="form-control" name="Mobile" placeholder="Mobile number" required>
            </div>
          </div>
  
          <div class="col-md-12">
            <input type="submit" class="btn btn-primary btn-rounded btn-block" name="submit" value="start">

          </div>
     
      
        <div class="col-md-12">
          <div class="powered-by">Powered by crazibrainsolutions</div>
        </div>
      </div>
    </form>
    </div>










  <script src="<?php echo base_url();?>assets/land/jquery-3.4.1.min.js"></script>



  <script src="http://css3transition.com/demo/chat-bot-html-template/js/popper.min.js"></script>

  <script src="http://css3transition.com/demo/chat-bot-html-template/js/bootstrap.min.js"></script>



</body>

</html>