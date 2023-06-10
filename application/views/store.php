<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>Store Essential</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Open+Sans|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/flexslider.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
  
</head>
<style>

body {
    font-family: tahoma, helvetica, arial, sans-serif;
    
    /* background-image: url('<?php echo base_url().'assets/img/background1.jpg' ?>'); */
    
}

.heading {
    font-size: 28px;
    letter-spacing: 1px;
    padding: 30px;
    color: #e1c806;
    font-family: apple chancery;
}
.msg {
    font-size: 16px;
    letter-spacing: 1px;
    font-family: apple chancery;
}
.locationDiv{
	width: 100%;
  padding: 10px;
  border: 5px solid gray;
  margin: 0;
}
img {
    max-width: 100%;
}
.str{
	margin-top : 10px;
}
#next{margin-top : 200px;}
@media only screen and (max-width: 767px)
{
	#next{margin-top : 70px;}
}


#scroll:hover {
    background-color: #e74c3c;
    opacity: 1;
    filter: "alpha(opacity=100)";
    -ms-filter: "alpha(opacity=100)";
}

#scroll {
    position: fixed;
    right: 10px;
    bottom: 10px;
    cursor: pointer;
    width: 50px;
    height: 50px;
    z-index: 9999;
    display: none;
    -webkit-border-radius: 60px;
    -moz-border-radius: 60px;
    border-radius: 60px;
}
</style>

<body>
    <header>
       
    </header>

   <a href="tel:+918287505783" id="scroll" title="help desk" style="display: inline-block;"><img src="<?php echo base_url(); ?>assets/help-desk.jpg" id="help_desk" width="50"></a>
	
			
			
	<div class="main-space"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 " >                
				<div class="row main">
						<input type="hidden" name="normal" value="1">
						<?php if($store){ foreach($store as $str) { ?>
						
						<div class="col-md-6 str" >
						
							<img src="<?php echo base_url(); ?>assets/milan_store.jpg" width="350" height="243" alt="store">
							<div class="locationDiv"><?php echo $str['name'].' ('.round($str['distance'],2).' KM) '; ?></div>
							
							<a href="https://www.google.com/maps/dir//<?php echo $str['lat']; ?>,<?php echo $str['longi']; ?>/@28.6379444,77.3581169,17z" onclick="clicktostore('<?php echo $str['number']; ?>','<?php echo round($str['distance'],2); ?>','<?php echo $str['name']; ?>')" target="_blank"><img src="<?php echo base_url(); ?>assets/Location.png" id="location" width="100" height="63" alt="google map" style="margin-right: 140px;"></a>
							
							
							<a href="tel:<?php echo $str['number']; ?>" onclick="call_now(<?php echo $str['number']; ?>)"><img src="<?php echo base_url(); ?>assets/order1_new.png" id="order" width="80" height="53" alt="order now"></a>
							
						</div>
						
						<?php } } else{ ?>
				
				
				
						<div class="text-center">
                  
                        
                        <p class="heading text-center">Hi, We are really sorry. We could not find a store near you who is doing home delivery. We will let you know as soon as the store become operational.</p>
						
						</div>
						<?php } ?>
				</div>
				
				
			</div>
		</div>	
	</div>	
			
			
	<div class="main-space"></div>
	<div class="main-space"></div>
	<!--div class="container clearfix" id="next">	
		<div class="row">
			<div class="col-md-8 col-md-offset-2">                						
				
					<div class="row main">
						<div class="form-group center-block" style="text-align: right;">
							<a href="tel:+918287505783"><img src="<?php echo base_url(); ?>assets/img/help-desk.jpg" id="help_desk" width="50"></a>
						</div>
					</div>
										
	
			</div>
		</div>
	</div-->


    
	
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    if(navigator.geolocation){
        navigator.geolocation.getCurrentPosition(showLocation);
    }else{ 
        $('#location').html('Geolocation is not supported by this browser.');
    }
});

function showLocation(position){
    var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;
	
    $.ajax({
        type:'POST',
        url:'<?php echo base_url().'home/location'; ?>',
        data:'latitude='+latitude+'&longitude='+longitude,
        success:function(msg){
            if(msg){
               $("#location").html(msg);
            }else{
                $("#location").html('Not Available');
            }
        }
    });
}


  $("#location").click(function() {
		
	var user = $("[name='normal']").val();
	$.ajax({
    type: "POST",
    url: "<?php echo base_url().'home/clicklocation'; ?>",
    data: user,
	dataType : 'json',
    success: function(data){
		consol(data);
	
	 
	  }
  });

});

$("#order").click(function() {
		
	var user = $("[name='normal']").val();
	$.ajax({
    type: "POST",
    url: "<?php echo base_url().'home/clickorder'; ?>",
    data: user,
	dataType : 'json',
    success: function(data){
		consol(data);
	
	 
	  }
  });

});

$("#help_desk").click(function() {
		
	var user = $("[name='normal']").val();
	$.ajax({
    type: "POST",
    url: "<?php echo base_url().'home/clickhelp'; ?>",
    data: user,
	dataType : 'json',
    success: function(data){
		consol(data);
	
	 
	  }
  });

});

function call_now(number)
{
    var cnum = <?php echo isset($_GET['phone'])?$_GET['phone']:0 ?>;
	$.ajax({
    type: "POST",
    url: "<?php echo base_url().'home/calltoorder'; ?>",
    data: 'number='+number+'&cnumber='+cnum,
	dataType : 'json',
    success: function(data){
		alert(data);
	
	 
	  }
  });
}


function clicktostore(number,distance,name)
{

	var cnum = <?php echo isset($_GET['phone'])?$_GET['phone']:0 ?>;
	$.ajax({
    type: "POST",
    url: "<?php echo base_url().'home/clicktostore'; ?>",
    data: 'number='+number+'&cnumber='+cnum+'&distance='+distance+'&name='+name,
	dataType : 'json',
    success: function(data){
		alert(data);
	
	 
	  }
  });
}

</script>
	
	
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.flexslider.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.inview.js"></script>
    <script src="<?php echo base_url();?>assets/js/script.js"></script>
   

</body>
</html>