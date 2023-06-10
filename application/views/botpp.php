<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crazibrain Solutions</title>
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/style.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/font-awesome.min.css'; ?>">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <style type="text/css">
        .check_box {
            cursor: pointer;
        }

        #blah {
            width: 200px;
            height: 100px;
            border: 2px solid;
            display: block;
            margin: 10px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
            transition: all 0.3s cubic-bezier(.25, .8, .25, 1);
            overflow: hidden;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
            -webkit-animation-name: fadeIn;
            /* Fade in the background */
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

        .modal_bar {
            display: flex;
            align-items: center;
        }

        .modal-header {
            padding: 2px 16px;
            background: #5433FF;
            background: -webkit-linear-gradient(to right, #A5FECB, #20BDFF, #5433FF);
            background: linear-gradient(to right, #A5FECB, #20BDFF, #5433FF);
            color: #fff;
        }

        .modal-header h2 {
            font-weight: 500;
            font-size: 22px;
        }

        .modal-body {
            /* display: flex; */
            align-items: center;
            flex-direction: column;
            justify-content: center;
            height: fit-content;
            overflow: hidden;
            width: 100%;
            /* height: 100%; */
            padding: 15px;
        }


        /* Add Animation */
        @-webkit-keyframes slideIn {
            from {
                bottom: -300px;
                opacity: 0
            }

            to {
                bottom: 0;
                opacity: 1
            }
        }

        @keyframes slideIn {
            from {
                bottom: -300px;
                opacity: 0
            }

            to {
                bottom: 0;
                opacity: 1
            }
        }

        @-webkit-keyframes fadeIn {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        .btnModel {
            width: 42%;
        }
    </style>
</head>

<body>
    <div class="wrapper" style="background-image: url(http://nishchayadave.com/chatboatdemo/assets/bgd.jpg) ; ">
        <div class="title">Demo</div>
        <div class="form" style="background-image: url(http://nishchayadave.com/chatboatdemo/assets/bgd.jpg) ;     background-position: center;
    background-repeat: no-repeat;">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <!-- <i class="fa fa-user"></i> -->

                    <img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px">
                </div>
                <div class="msg-header">
                    <p>Hi <strong><?php echo $detail['name']; ?></strong> , This is Karen from Synchronize. Can we discuss about your last week’s alcohol purchase?</p>
                    <button type="button" class="removebtn" id="fq1">Let's start</button>
                    <!--<button type="button" class="removebtn" id="program_faq">Please tell me which of these do you own? It could be owned by you or your family or  provided by the employer or it could be available in the house you live in; but it should be for the use of just you or your family. </button>
                     
                      <button type="button" class="removebtn " id="ott">Where do you usually watch the content on these OTT platforms</button> -->



                </div>

            </div>


        </div>
        <!--div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Type something here.." required>
                <button id="send-btn">Send</button>
            </div>
        </div-->
        <div class="loader_sec">
            <div class="loader"></div>
        </div>
        <div class="footer_title">
            <div class="footer_fix"><span>Powered by <a href="http://www.crazibrainsolutions.com/" target="_blank">...</a></span>
                <i class="fa fa-home"></i></a>
            </div>
        </div>
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
                    <img src="<?php echo base_url() . 'assets/card.png'; ?>" width="100" height="100">
                    <p>Please try our product and upload your experience.</p>
                    <p> Get assured gratification from INR 10-50.</p>
                </div>
            </div>
        </div>
    </div>



    <script>
        $("#fq1").on("click", function() {
            $value = 'start';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/ques1"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });


        $(document).on("click", ".q18989", function() {
            $value = 'Daily';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/ques111"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });

        /*             $(document).on("click", ".q2", function() {
                $value = '25-34 years';
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                
                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url() . "home/feedback_store"; ?>',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fa fa-user"></i></div><div class="msg-header">'+ result +'</div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            }); */





        $(document).on("click", ".q4", function() {
            $value = 'Once';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/ques14"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });


        $(document).on("click", ".q5", function() {
            $value = 'Did not purchase last week';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/ques15"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });






        /* q5 start */



        $(document).on("click", ".q151", function() {
            $value = 'Yes I did not consume alcohol last week';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/ques151"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });


        $(document).on("click", ".q152", function() {
            $value = 'No I consumed but did not purchase last week';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/ques152"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });





        $(document).on("click", ".q1511", function() {
            $value = 'Did not feel like consuming ';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/ques1511"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });

        $(document).on("click", ".q1512", function() {
            $value = 'Was a festival week and I do not consume during festival';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/ques1511"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });
        $(document).on("click", ".q1513", function() {
            $value = 'Have reduced my consumption';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/ques1511"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });
        $(document).on("click", ".q1514", function() {
            $value = 'Was out of town';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/ques1511"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });









        $(document).on("click", ".q1521", function() {
            $value = 'Had a party at friends place ';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/ques1512"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });

        $(document).on("click", ".q1522", function() {
            $value = 'Had stock bought last week';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/ques1512"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });
        $(document).on("click", ".q1523", function() {
            $value = 'Went to a restaurant with friends where I consumed';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/ques1512"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });
        $(document).on("click", ".q1524", function() {
            $value = 'Went to a restaurant with family where I consumed';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/ques1512"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });
        /* q5 end */


        /* q4 start */


        $(document).on("click", ".q142", function() {
            $value = 'no';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/ques142"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });


        $(document).on("click", ".q141", function() {
            $value = 'yes';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/ques1422"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });















        $(document).on("click", ".ques1421", function() {
            $value = $("#name").val();
            $number = $("#number").val();
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>Response name -' + $value + ' </p></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/ques1421"; ?>',
                type: 'POST',
                data: 'name=' + $value + '&number=' + $number,
                success: function(result) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });


        /* q4 end */

        /* q2/3 start */
        $(document).on("click", ".q1", function() {
            $value = 'Daily';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/ques3"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });





        $(document).on("click", ".q2", function() {
            $value = '5-6 times';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/ques3"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });


        $(document).on("click", ".q3", function() {
            $value = '3-4 times';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/ques3"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });


        $(document).on("click", ".q31", function() {
            $value = 'FOR SELF';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/ques31"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });


        $(document).on("click", ".q311", function() {
            $value = 'Beer';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/ques311"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });

        $(document).on("click", ".q312", function() {
            $value = 'Whiskey';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/ques311"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });


        $(document).on("click", ".q313", function() {
            $value = 'Rum';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/ques311"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });


        $(document).on("click", ".q314", function() {
            $value = 'Vodka';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/ques311"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });


        $(document).on("click", ".q315", function() {
            $value = 'Wine';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/ques311"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });










        $(document).on("click", ".q32", function() {
            $value = 'PARTY / SOCIALIZING';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/ques311"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });

        $(document).on("click", ".q33", function() {
            $value = 'FOR SELF';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/ques311"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });

        $(document).on("click", ".q34", function() {
            $value = 'FOR SELF';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/ques311"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });

        $(document).on("click", ".q35", function() {
            $value = 'FOR SELF';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/ques311"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });

        $(document).on("click", ".q36", function() {
            $value = 'FOR SELF';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/ques311"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });


        $(document).on("click", ".q37", function() {
            $value = 'FOR SELF';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/ques311"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });

        $(document).on("click", ".q38", function() {
            $value = 'FOR SELF';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/ques311"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });
        /* q4 end */
        /* q1 start */
        $(document).on("click", ".q111", function() {
            $value = 'yes';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/ques1111"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });
        $(document).on("click", ".q112", function() {
            $value = 'no';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/ques1117"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });

        $(document).on("click", ".q1121", function() {
            $value = 'Kingfisher';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/ques1117"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });

        $(document).on("click", ".q1122", function() {
            $value = 'Tuborg';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/ques1117"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });
        $(document).on("click", ".q1123", function() {
            $value = 'Budweiser';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/ques1117"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });
        $(document).on("click", ".q1124", function() {
            $value = 'Bira';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/ques1117"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });
        $(document).on("click", ".q1125", function() {
            $value = 'Heineken';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/ques1117"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });

        /* q1 end */


















































































































        $("#program_faq").on("click", function() {
            $value = 'Program FAQs';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();

            $.ajax({
                url: '<?php echo base_url() . "home/program_faq"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    console.log(result);
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });























        $(document).ready(function() {

            $("#home-btn").on("click", function() {
                $value = 'Home';
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
                $(".form").append($msg);

                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url() . "home/home"; ?>',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function(result) {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });

            $(document).on("click", ".refer_friend_store", function() {
                $value = $("#name").val();
                $number = $("#number").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>My Friend name -' + $value + ' and number ' + $number + '</p></div></div>';
                $(".form").append($msg);

                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url() . "home/refer_friend_store"; ?>',
                    type: 'POST',
                    data: 'name=' + $value + '&number=' + $number,
                    success: function(result) {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });

            $("#send-btn").on("click", function() {
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
                $(".form").append($msg);

                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url() . "home/sorry_message"; ?>',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function(result) {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });

            $("#upload_pick").on("click", function() {
                $value = 'Upload Pic';
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
                $(".form").append($msg);

                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url() . "home/upload_pick"; ?>',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function(result) {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });

            $("#point_tally").on("click", function() {
                $value = 'Points Tally';
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
                $(".form").append($msg);

                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url() . "home/point_tally"; ?>',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function(result) {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });





            $(document).on("click", ".ott", function() {
                $value = 'ott option';
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
                $(".form").append($msg);

                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url() . "home/ottfd"; ?>',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function(result) {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });


            $("#ott").on("click", function() {
                $value = 'ott option';
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
                $(".form").append($msg);

                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url() . "home/ottfd"; ?>',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function(result) {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });







            $("#help").on("click", function() {
                $value = 'Speak to help desk';
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
                $(".form").append($msg);

                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url() . "home/sorry_message"; ?>',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function(result) {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });

            /* $("#excelelnt_experience").on("click", '.excelelnt', function(){ */
            $(document).on("click", ".excelelnt", function() {
                $value = 'Excellent';
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
                $(".form").append($msg);

                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url() . "home/feedback_store"; ?>',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function(result) {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });







            $(document).on("click", ".ot1", function() {
                $value = 'Mostly on TV';
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
                $(".form").append($msg);

                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url() . "home/feedback_store77"; ?>',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function(result) {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });



            $(document).on("click", ".ot2", function() {
                $value = 'Mostly on Mobile';
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
                $(".form").append($msg);

                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url() . "home/feedback_store77"; ?>',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function(result) {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });

            $(document).on("click", ".ot3", function() {
                $value = 'Mostly on PC / Laptop';
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
                $(".form").append($msg);

                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url() . "home/feedback_store77"; ?>',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function(result) {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });

            $(document).on("click", ".ot4", function() {
                $value = 'Any available device';
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
                $(".form").append($msg);

                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url() . "home/feedback_store77"; ?>',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function(result) {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });


            $(document).on("click", ".an1", function() {
                $value = 'COMPLETELYAGREE';
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
                $(".form").append($msg);

                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url() . "home/feedback_store88"; ?>',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function(result) {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });

            $(document).on("click", ".an2", function() {
                $value = 'SOMEWHATAGREE';
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
                $(".form").append($msg);

                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url() . "home/feedback_store88"; ?>',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function(result) {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });


            $(document).on("click", ".an3", function() {
                $value = 'NEITHER';
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
                $(".form").append($msg);

                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url() . "home/feedback_store88"; ?>',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function(result) {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });


            $(document).on("click", ".an4", function() {
                $value = 'SOMEWHAT DISAGREE';
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
                $(".form").append($msg);

                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url() . "home/feedback_store88"; ?>',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function(result) {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });

            $(document).on("click", ".an5", function() {
                $value = 'COMPLETELY DISAGREE';
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
                $(".form").append($msg);

                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url() . "home/feedback_store88"; ?>',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function(result) {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });





























            $(document).on("click", ".good", function() {
                $value = 'Good';
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
                $(".form").append($msg);

                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url() . "home/feedback_store"; ?>',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function(result) {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });

            $(document).on("click", ".average", function() {
                $value = 'Average';
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
                $(".form").append($msg);

                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url() . "home/feedback_store"; ?>',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function(result) {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });

            $(document).on("click", ".poor", function() {
                $value = 'Poor';
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
                $(".form").append($msg);

                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url() . "home/feedback_store"; ?>',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function(result) {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });


            $(document).on("click", ".what_src", function() {
                $value = 'What is SRC?';
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
                $(".form").append($msg);

                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url() . "home/faq_details"; ?>',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function(result) {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });

            $(document).on("click", ".join_src", function() {
                $value = 'How do I join SRC?';
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
                $(".form").append($msg);

                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url() . "home/faq_details"; ?>',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function(result) {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });

            $(document).on("click", ".src_work", function() {
                $value = 'How does SRC Work?';
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
                $(".form").append($msg);

                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url() . "home/faq_details"; ?>',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function(result) {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });

            $(document).on("click", ".home", function() {
                $value = 'Home';
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
                $(".form").append($msg);

                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url() . "home/home"; ?>',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function(result) {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });

            $(document).on("click", ".upload_pick", function() {
                $value = 'Upload Pic';
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
                $(".form").append($msg);

                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url() . "home/upload_pick"; ?>',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function(result) {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });

            $(document).on("click", ".point_tally", function() {
                $value = 'Points Tally';
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
                $(".form").append($msg);

                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url() . "home/point_tally"; ?>',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function(result) {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });

            $(document).on("click", ".program_faq", function() {
                $value = '...i';
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
                $(".form").append($msg);

                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url() . "home/program_faq"; ?>',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function(result) {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });



            $(document).on("click", ".friend", function() {
                $value = 'ott question';
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
                $(".form").append($msg);

                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url() . "home/refer_friend"; ?>',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function(result) {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });

            $(document).on("click", ".help", function() {
                $value = 'Speak to help desk';
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
                $(".form").append($msg);

                $('.removebtn').remove();
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url() . "home/sorry_message"; ?>',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function(result) {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
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

                reader.onload = function(e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        $(document).ready(function() {
            $(document).on('submit', '.upload_form', function(e) {
                e.preventDefault();
                if ($('#image_file').val() == '') {
                    alert("Please Select the File");
                } else {
                    $(".loader_sec").css("display", "block");
                    $.ajax({
                        url: "<?php echo base_url(); ?>home/ajaxImageStore",
                        method: "POST",
                        data: new FormData(this),
                        contentType: false,
                        cache: false,
                        processData: false,
                        dataType: "json",
                        success: function(res) {
                            console.log(res.success);
                            $(".loader_sec").css("display", "none");
                            if (res.success == true) {

                                $('.removebtn').remove();
                                $replay = '<div class="bot-inbox inbox"><div class="msg-header"><p>You’re image uploaded successfully. Your points will be rewarded post approval in next 24 hours.</p><button type="button" class="home removebtn" id="home">Home</button></div></div>';
                                $(".form").append($replay);
                                $(".form").scrollTop($(".form")[0].scrollHeight);
                            } else if (res.success == false) {
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

            $("#pack").on("click", function() {
                $value = 'Pack';

                $.ajax({
                    url: '<?php echo base_url() . "home/question_1"; ?>',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function(result) {
                        storemodal.style.display = "none";
                    }
                });
            });

            $("#loose_sticks").on("click", function() {
                $value = 'Loose Sticks';

                $.ajax({
                    url: '<?php echo base_url() . "home/question_1"; ?>',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function(result) {
                        storemodal.style.display = "none";
                    }
                });
            });

            $("#salaried").on("click", function() {
                $value = 'Salaried';

                $.ajax({
                    url: '<?php echo base_url() . "home/question_2"; ?>',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function(result) {
                        storemodal.style.display = "none";
                    }
                });
            });

            $("#businessman").on("click", function() {
                $value = 'Businessman';

                $.ajax({
                    url: '<?php echo base_url() . "home/question_2"; ?>',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function(result) {
                        storemodal.style.display = "none";
                    }
                });
            });

            $("#students").on("click", function() {
                $value = 'Students';

                $.ajax({
                    url: '<?php echo base_url() . "home/question_2"; ?>',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function(result) {
                        storemodal.style.display = "none";
                    }
                });
            });

            $("#others").on("click", function() {
                $value = 'Others';

                $.ajax({
                    url: '<?php echo base_url() . "home/question_2"; ?>',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function(result) {
                        storemodal.style.display = "none";
                    }
                });
            });

            $("#19_25_year").on("click", function() {
                $value = '19 25 year';

                $.ajax({
                    url: '<?php echo base_url() . "home/question_3"; ?>',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function(result) {
                        storemodal.style.display = "none";
                    }
                });
            });

            $("#26_30_year").on("click", function() {
                $value = '26 30 year';

                $.ajax({
                    url: '<?php echo base_url() . "home/question_3"; ?>',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function(result) {
                        storemodal.style.display = "none";
                    }
                });
            });

            $("#31_35_year").on("click", function() {
                $value = '31 35 year';

                // start ajax code
                $.ajax({
                    url: '<?php echo base_url() . "home/question_3"; ?>',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function(result) {
                        storemodal.style.display = "none";
                    }
                });
            });

            $("#35_year").on("click", function() {
                $value = '35+ year';

                // start ajax code
                $.ajax({
                    url: '<?php echo base_url() . "home/question_3"; ?>',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function(result) {
                        storemodal.style.display = "none";
                    }
                });
            });

            $(window).on('load', function() {
                $value = 'check store';
                $.ajax({
                    url: "<?php echo base_url(); ?>home/check_store",
                    method: "POST",
                    type: 'POST',
                    data: 'text=' + $value,
                    dataType: "json",
                    success: function(res) {
                        if (res.success == true) {

                            storemodal.style.display = "block";
                        } else if (res.success == false) {
                            storemodal.style.display = "none";
                        }
                    }
                });
            });

        });

        var modal = document.getElementById("myModal");

        var span = document.getElementsByClassName("close")[0];

        <?php if ($detail['pop'] == 0) { ?>
            modal.style.display = "block";
        <?php } ?>


        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
            $value = '1';
            $.ajax({
                url: '<?php echo base_url() . "home/popup_close"; ?>',
                type: 'POST',
                data: 'value=' + $value,
                success: function(result) {
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










        let checkbox_arr = [];

        $(document).on('click', '.check_box', function() {
            checkbox_arr = [];
            $("input[name='house_feature[]']:checked").each(function() {
                checkbox_arr.push($(this).val());
            });
            if (checkbox_arr.length > 0) {
                $msg = '<button type="button" class="next_house_feature" >Next</button>';
                $(".next-button").html($msg);
            } else {
                $(".next-button").html('');
            }

        });


        $(document).on("click", ".next_house_feature", function() {
            checkbox_arr.forEach(function(item, i) {
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + item + '</p></div></div>';
                $(".form").append($msg);
            });

            $('.removebtn').remove();
            $.ajax({
                url: '<?php echo base_url() . "home/feedback_store3"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });


        $(document).on("click", ".1", function() {
            $value = 'Electricity Connection';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/feedback_store3"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });


        $(document).on("click", ".2", function() {
            $value = 'Air-conditioner';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/feedback_store3"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        })


        $(document).on("click", ".3", function() {
            $value = '4 Wheeler: Car, Jeep etc';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/feedback_store3"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        })

        $(document).on("click", ".4", function() {
            $value = 'Washing Machine';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/feedback_store3"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        })

        $(document).on("click", ".5", function() {
            $value = 'Refrigerator';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/feedback_store3"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        })

        $(document).on("click", ".6", function() {
            $value = 'Colour Television';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/feedback_store3"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        })


        $(document).on("click", ".7", function() {
            $value = '2 Wheeler: Scooter, Bike etc';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/feedback_store3"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        })



        $(document).on("click", ".8", function() {
            $value = 'Laptop/ PC ';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/feedback_store3"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        })


        $(document).on("click", ".9", function() {
            $value = 'LPG Stove';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/feedback_store3"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        })


        $(document).on("click", ".10", function() {
            $value = 'Ceiling Fan';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/feedback_store3"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        })

        $(document).on("click", ".11", function() {
            $value = 'Agricultural land in this city or anywhere else';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/feedback_store3"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://nishchayadave.com/chatboatdemo/assets/Avatar.png" alt="" class="src" height="50px"></div><div class="msg-header">' + result + '</div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        })
    </script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showLocation);
            } else {
                $('#location').html('Geolocation is not supported by this browser.');
            }
        });

        function showLocation(position) {
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url() . 'home/location?payload=' . $_GET["payload"]; ?>',
                data: 'latitude=' + latitude + '&longitude=' + longitude,
                success: function(msg) {
                    if (msg) {
                        $("#location").html(msg);
                    } else {
                        $("#location").html('Not Available');
                    }
                }
            });
        }
    </script>

</body>

</html>