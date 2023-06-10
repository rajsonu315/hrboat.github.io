<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crazibrain Solutions</title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/style.css'; ?>">
	 <link rel="stylesheet" href="<?php echo base_url().'assets/font-awesome.min.css'; ?>">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<style type="text/css">
  #blah {
  width: 200px;
  height: 100px;
  border: 2px solid;
  display: block;
  margin: 10px;
  background-color: white;
  border-radius: 5px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
  overflow: hidden;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  -webkit-animation-name: fadeIn; /* Fade in the background */
  -webkit-animation-duration: 0.4s;
  animation-name: fadeIn;
  animation-duration: 0.4s
}

/* Modal Content */
.modal-content {
position: absolute;
    top: 0px;
    background-color: #fefefe;
    width: 100%;
    -webkit-animation-name: slideIn;
    -webkit-animation-duration: 0.4s;
    animation-name: slideIn;
    animation-duration: 0.4s;
    right: 0px;
    bottom: 0px;
    max-height: 50%;
    margin: auto;
    width: 80%;
    left: 0px;
    text-align: center;
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: 400;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.close1 {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: 400;
}

.close1:hover,
.close1:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.modal_bar{display:flex;align-items:center;}
.modal-header {
  padding: 2px 16px;
    background: #5433FF;
    background: -webkit-linear-gradient(to right, #A5FECB, #20BDFF, #5433FF);
    background: linear-gradient(to right, #A5FECB, #20BDFF, #5433FF);
  color:#fff;
}
.modal-header h2{font-weight:500;font-size:22px;}
.modal-body {    
	/* display: flex; */
    align-items: center;
    flex-direction: column;
    justify-content: center;
    height: fit-content;
    overflow: hidden;
    width: 100%;
    /* height: 100%; */
    padding: 15px;}


/* Add Animation */
@-webkit-keyframes slideIn {
  from {bottom: -300px; opacity: 0} 
  to {bottom: 0; opacity: 1}
}

@keyframes slideIn {
  from {bottom: -300px; opacity: 0}
  to {bottom: 0; opacity: 1}
}

@-webkit-keyframes fadeIn {
  from {opacity: 0} 
  to {opacity: 1}
}

@keyframes fadeIn {
  from {opacity: 0} 
  to {opacity: 1}
}
.btnModel{
	width:42%;
}

</style>
</head>
<body>
    <div class="wrapper">
        <div class="title">Style Reward Club</div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fa fa-user"></i>
                </div>
                <div class="msg-header">
                    <p>Hi <?php echo $detail['name']; ?>, what can we help you with today?</p>
					<button type="button" class="removebtn" id="upload_pick">Upload Pic</button>
					  <button type="button" class="removebtn" id="point_tally">Points Tally</button>
					  <button type="button" class="removebtn" id="program_faq">Program FAQs</button>
					  <button type="button" class="removebtn" id="feedback">Product Feedback</button>
					  <button type="button" class="removebtn" id="friend">Refer a friend</button>
					  <button type="button" class="removebtn" id="help">Speak to help desk</button>
					  
					  
                </div>
				
            </div>
			
			
        </div>
        <!--div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Type something here.." required>
                <button id="send-btn">Send</button>
            </div>
        </div-->
<div class="loader_sec">		<div class="loader"></div></div>
        <div class="footer_title"><div class="footer_fix"><span>Powered by <a href="http://www.crazibrainsolutions.com/" target="_blank">Crazibrain</a></span> <a href="#" id="home-btn"><i class="fa fa-home"></i></a></div></div>
    </div>
<!-- The Modal -->
<div class="modal_bar">
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Offer</h2>
    </div>
    <div class="modal-body">
		<img src="<?php echo base_url().'assets/card.png'; ?>" width="100" height="100" >
      <p>Please try our product and upload your experience.</p>
      <p> Get assured gratification from INR 10-50.</p>
    </div>
  </div>
</div>
</div>

<div class="modal_bar">
<div id="store_model" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
  
	
    <div class="modal-header">
      <span class="close1">&times;</span>
	  <?php if(($detail['store'] == 0)){ ?>
      <h2>Stores Near You</h2>
	  <?php }else{ ?>
	  
	  <?php if(($detail['q1'] != NULL) && ($detail['q2'] != NULL) && ($detail['q3'] != NULL)){ ?>
		 <h2>Stores Near You</h2>
	  <?php } else { ?>
		<h2>Help us know you better!</h2>
	  <?php } } ?>
    </div>
	
	 <div class="modal-body">
		<?php if(($detail['store'] == 0)){ ?>
			<p>Hey, you have stores within 500 meters from your current location.</p>
			<a href="<?php echo base_url().'home/store?payload='.$_GET['payload']; ?>"><button>check nearby store</button></a>
		<?php } else{ ?>
			
			<?php if($detail['q1'] == NULL){ ?>
				<p>Which of this best describe your cigarette buying pattern</p>
				<button type="button" class="btnModel" id="pack">pack</button>
				<button type="button" class="btnModel" id="loose_sticks">loose sticks</button>
				
			<?php }elseif($detail['q2'] == NULL){ ?>
				<p>Which of the following best describe your occupation status</p>
				<button type="button" class="btnModel" id="salaried">Salaried</button>
				<button type="button" class="btnModel" id="businessman">Businessman</button>
				<button type="button" class="btnModel" id="students">Students</button>
				<button type="button" class="btnModel" id="others">Others</button>
				
			<?php } elseif($detail['q3'] == NULL){ ?>
				<p>Which of the following best describe your age group</p>
				<button type="button" class="btnModel" id="19_25_year">19-25 years</button>
				<button type="button" class="btnModel" id="26_30_year">26-30 years</button>
				<button type="button" class="btnModel" id="31_35_year">31-35 years</button>
				<button type="button" class="btnModel" id="35_year">35+ years</button>
				
			
			<?php } else { ?>
			
		  <p>Hey, you have stores within 500 meters from your current location.</p>
		  <a href="<?php echo base_url().'home/store?payload='.$_GET['payload']; ?>"><button>check nearby store</button></a>
		<?php } } ?>
	
	</div>
	
	
	
  </div>
</div>
</div>

    <script>
        $(document).ready(function(){
           
		   $("#home-btn").on("click", function(){
                $value = 'Home';
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url()."home/home"; ?>',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fa fa-user"></i></div><div class="msg-header">'+ result +'</div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
			
		  $(document).on("click", ".refer_friend_store", function() {
                $value = $("#name").val();
                $number = $("#number").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>My Friend name -'+ $value +' and number '+$number +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url()."home/refer_friend_store"; ?>',
                    type: 'POST',
                    data: 'name='+$value+'&number='+$number,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fa fa-user"></i></div><div class="msg-header">'+ result +'</div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });

		   $("#send-btn").on("click", function(){
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url()."home/sorry_message"; ?>',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fa fa-user"></i></div><div class="msg-header">'+ result +'</div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
			
			 $("#upload_pick").on("click", function(){
                $value = 'Upload Pic';
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url()."home/upload_pick"; ?>',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fa fa-user"></i></div><div class="msg-header">'+ result +'</div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
			
			 $("#point_tally").on("click", function(){
                $value = 'Points Tally';
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url()."home/point_tally"; ?>',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fa fa-user"></i></div><div class="msg-header">'+ result +'</div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
			
			 $("#program_faq").on("click", function(){
                $value = 'Program FAQs';
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url()."home/program_faq"; ?>',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fa fa-user"></i></div><div class="msg-header">'+ result +'</div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
			
			 $("#feedback").on("click", function(){
                $value = 'Product Feedback';
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url()."home/feedback"; ?>',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fa fa-user"></i></div><div class="msg-header">'+ result +'</div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
			
			$("#friend").on("click",  function(){
                $value = 'Refer a friend';
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url()."home/refer_friend"; ?>',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fa fa-user"></i></div><div class="msg-header">'+ result +'</div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
			
			$("#help").on("click", function(){
                $value = 'Speak to help desk';
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url()."home/sorry_message"; ?>',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fa fa-user"></i></div><div class="msg-header">'+ result +'</div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
			
			/* $("#excelelnt_experience").on("click", '.excelelnt', function(){ */
			$(document).on("click", ".excelelnt", function() {
                $value = 'Excellent';
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url()."home/feedback_store"; ?>',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fa fa-user"></i></div><div class="msg-header">'+ result +'</div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
			
			$(document).on("click", ".good", function() {
                $value = 'Good';
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url()."home/feedback_store"; ?>',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fa fa-user"></i></div><div class="msg-header">'+ result +'</div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
			
			$(document).on("click", ".average", function() {
                $value = 'Average';
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url()."home/feedback_store"; ?>',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fa fa-user"></i></div><div class="msg-header">'+ result +'</div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
			
			$(document).on("click", ".poor", function() {
                $value = 'Poor';
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url()."home/feedback_store"; ?>',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fa fa-user"></i></div><div class="msg-header">'+ result +'</div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
			
			
			$(document).on("click", ".what_src", function() {
                $value = 'What is SRC?';
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url()."home/faq_details"; ?>',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fa fa-user"></i></div><div class="msg-header">'+ result +'</div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
			
			$(document).on("click", ".join_src", function() {
                $value = 'How do I join SRC?';
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url()."home/faq_details"; ?>',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fa fa-user"></i></div><div class="msg-header">'+ result +'</div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
			
			$(document).on("click", ".src_work", function() {
                $value = 'How does SRC Work?';
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url()."home/faq_details"; ?>',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fa fa-user"></i></div><div class="msg-header">'+ result +'</div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
			
			$(document).on("click", ".home", function() {
                $value = 'Home';
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url()."home/home"; ?>',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fa fa-user"></i></div><div class="msg-header">'+ result +'</div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
			
			$(document).on("click", ".upload_pick", function() {
                $value = 'Upload Pic';
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url()."home/upload_pick"; ?>',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fa fa-user"></i></div><div class="msg-header">'+ result +'</div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
			
			$(document).on("click", ".point_tally", function() {	 
                $value = 'Points Tally';
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url()."home/point_tally"; ?>',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fa fa-user"></i></div><div class="msg-header">'+ result +'</div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
			
			$(document).on("click", ".program_faq", function() {		 
                $value = 'Program FAQs';
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url()."home/program_faq"; ?>',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fa fa-user"></i></div><div class="msg-header">'+ result +'</div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
			
			$(document).on("click", ".feedback", function() {	 
                $value = 'Product Feedback';
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url()."home/feedback"; ?>',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fa fa-user"></i></div><div class="msg-header">'+ result +'</div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
			
			$(document).on("click", ".friend", function() {		
                $value = 'Refer a friend';
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url()."home/refer_friend"; ?>',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fa fa-user"></i></div><div class="msg-header">'+ result +'</div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
			
			$(document).on("click", ".help", function() {		
                $value = 'Speak to help desk';
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url()."home/sorry_message"; ?>',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fa fa-user"></i></div><div class="msg-header">'+ result +'</div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
        });
    </script>	
<script type="text/javascript">
 function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
 
          reader.onload = function (e) {
              $('#blah')
                  .attr('src', e.target.result);
          };
 
          reader.readAsDataURL(input.files[0]);
      }
  }
 
 $(document).ready(function(){  
      $(document).on('submit','.upload_form', function(e){  
           e.preventDefault();  
           if($('#image_file').val() == '')  
           {  
                alert("Please Select the File");  
           }  
           else 
           {  
				$(".loader_sec").css("display", "block");
                $.ajax({  
                     url:"<?php echo base_url(); ?>home/ajaxImageStore",   
                     method:"POST",  
                     data:new FormData(this),  
                     contentType: false,  
                     cache: false,  
                     processData:false,  
                     dataType: "json",
                     success:function(res)  
                     {  
                        console.log(res.success);
						$(".loader_sec").css("display", "none");
                        if(res.success == true){
							   
							$('.removebtn').remove();
							$replay = '<div class="bot-inbox inbox"><div class="msg-header"><p>You’re image uploaded successfully. Your points will be rewarded post approval in next 24 hours.</p><button type="button" class="home removebtn" id="home">Home</button></div></div>';
							$(".form").append($replay);
							$(".form").scrollTop($(".form")[0].scrollHeight);
                        }
                        else if(res.success == false){
                          $('#msg').html(res.msg); 
                          $('#divMsg').show(); 
						  
                        }
                     }  
                });  
           }  
      }); 
var storemodal = document.getElementById("store_model");	
var span1 = document.getElementsByClassName("close1")[0];
span1.onclick = function() {
  storemodal.style.display = "none";
}  

$("#pack").on("click", function(){
                $value = 'Pack';
               
                $.ajax({
                    url: '<?php echo base_url()."home/question_1"; ?>',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                         storemodal.style.display = "none";
                    }
                });
            });
			
			$("#loose_sticks").on("click", function(){
                $value = 'Loose Sticks';
                
                $.ajax({
                    url: '<?php echo base_url()."home/question_1"; ?>',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                         storemodal.style.display = "none";
                    }
                });
            });
			
			$("#salaried").on("click", function(){
                $value = 'Salaried';
               
                $.ajax({
                    url: '<?php echo base_url()."home/question_2"; ?>',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                         storemodal.style.display = "none";
                    }
                });
            });
			
			$("#businessman").on("click", function(){
                $value = 'Businessman';
               
                $.ajax({
                    url: '<?php echo base_url()."home/question_2"; ?>',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                         storemodal.style.display = "none";
                    }
                });
            });
			
			$("#students").on("click", function(){
                $value = 'Students';
               
                $.ajax({
                    url: '<?php echo base_url()."home/question_2"; ?>',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                         storemodal.style.display = "none";
                    }
                });
            });
			
			$("#others").on("click", function(){
                $value = 'Others';
              
                $.ajax({
                    url: '<?php echo base_url()."home/question_2"; ?>',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                         storemodal.style.display = "none";
                    }
                });
            });
			
			$("#19_25_year").on("click", function(){
                $value = '19 25 year';
               
                $.ajax({
                    url: '<?php echo base_url()."home/question_3"; ?>',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                         storemodal.style.display = "none";
                    }
                });
            });
			
			$("#26_30_year").on("click", function(){
                $value = '26 30 year';
                
                $.ajax({
                    url: '<?php echo base_url()."home/question_3"; ?>',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                         storemodal.style.display = "none";
                    }
                });
            });
			
			$("#31_35_year").on("click", function(){
                $value = '31 35 year';
               
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url()."home/question_3"; ?>',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                         storemodal.style.display = "none";
                    }
                });
            });
			
			$("#35_year").on("click", function(){
                $value = '35+ year';
               
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url()."home/question_3"; ?>',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                         storemodal.style.display = "none";
                    }
                });
            });
			
 $(window).on('load', function() {
	 $value = 'check store';
	$.ajax({  
			 url:"<?php echo base_url(); ?>home/check_store",   
			 method:"POST",  
			 type: 'POST',
             data: 'text='+$value,
			 dataType: "json",
			 success:function(res)  
			 {  
				if(res.success == true){
					   
					storemodal.style.display = "block";
				}
				else if(res.success == false){
				  storemodal.style.display = "none";
				}
			 }  
		});  
	});
	  
 });  
 
var modal = document.getElementById("myModal");

var span = document.getElementsByClassName("close")[0];

<?php if($detail['pop'] == 0){ ?>
		modal.style.display = "block";
<?php } ?>


// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
  $value = '1';
  $.ajax({
                    url: '<?php echo base_url()."home/popup_close"; ?>',
                    type: 'POST',
                    data: 'value='+$value,
                    success: function(result){
                       return true;
                    }
                });
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}





 
</script>


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
        url:'<?php echo base_url().'home/location?payload='.$_GET["payload"]; ?>',
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
</script>

</body>
</html>