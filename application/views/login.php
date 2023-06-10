<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="google" content="notranslate" />

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>login </title>

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">


  <!-- END GLOBAL MANDATORY STYLES -->
  <link href="<?php echo base_url(); ?>assets/land/bootstrap.min.css" rel="stylesheet" type="text/css" />

  <link href="<?php echo base_url(); ?>assets/land/main.css" rel="stylesheet" type="text/css" />

  <style>
        * {
            padding: 0;
            margin: 0;
        }

        body {
            font-family: Verdana, Geneva, sans-serif;
            background-color: #ccc;
            font-size: 12px;
        }

        .label-container {
            position: fixed;
            bottom: 48px;
            right: 105px;
            display: table;
            visibility: hidden;
        }

        .label-text {
            color: #fff;
            background: rgba(51, 51, 51, 0.5);
            display: table-cell;
            vertical-align: middle;
            padding: 10px;
            border-radius: 3px;
        }

        .label-arrow {
            display: table-cell;
            vertical-align: middle;
            color: #333;
            opacity: 0.5;
        }

        .float {

            color: #fff;
            border-radius: 50px;
            text-align: center;
            z-index: 1000;
            animation: bot-to-top 2s ease-out;
            color: red;
        }

        ul {
            position: fixed;
            right: 38px;
            padding-bottom: 20px;
            top: 80px;
            z-index: 100;
        }

        ul li {
            list-style: none;
            margin-bottom: 10px;
        }

        ul li a {
            background-color: #f33;
            color: #fff;
            border-radius: 50px;
            text-align: center;
            box-shadow: 2px 2px 3px #999;
            width: 45px;
            height: 45px;
            display: block;
        }




    </style>
    <style>
        * {
            font-family: 'Jaldi', sans-serif;

            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {

            margin: 0;
            min-height: 100vh;
            position: relative;
            z-index: 1;
            overflow: hidden;
            /* overflow-y: auto; */
            background-color: #fff !important;

        }

        body:after {
            content: " ";
            display: block;
            width: 100%;
            height: 100%;
            position: absolute;
            left: 0;
            top: 0;
            z-index: -1;
            opacity: 0.8;
            /* background-image: url('https://assets.entrepreneur.com/content/3x2/2000/20181115101526-shutterstock-1228052422.jpeg'); */
        }
    </style>



    <style>
        .wrapper .form {
            height: calc(100vh - 139px);
            position: relative;
            /* padding: 20px 15px; */
            overflow-y: auto;
            /* background: #fff; */
        }

        .wrapper .form .inbox .icon {
            height: 40px;
            width: 40px;
            color: #fff;
            text-align: center;
            line-height: 65px;
            border-radius: 50%;
            font-size: 18px;
            /* background: #3f51b5; */
        }

        .wrapper .form .inbox {
            width: 100%;
            /* display: flex; */
            align-items: baseline;
            /* background-color: #fff; */
            bottom: 50px;
            display: flex;
        }

        .chat-screen {
            position: fixed;
            bottom: 68px;
            right: 19px;
            z-index: 9999;
            width: 350px;
            background: transparent;
            box-sizing: border-box;
            border-radius: 15px;
            box-shadow: none !important;
            visibility: visible;

            background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRp5ivOeIObmkCOimQpGc78gWg5JuuNhpJH01OYYHxw4rIN0zF3fDNWj0W2IVrPC5u9izc&usqp=CAU');

        }

        .chat-screen.show-chat {
            -moz-transition: bottom 0.5s linear;
            -webkit-transition: bottom 0.5s linear;
            transition: bottom 0.5s linear;
            visibility: hidden;
            height: calc(100vh - 132px) !important;
            bottom: 79px;
            /* background: #ffff; */

            z-index: 9999;
            border: 4px solid black;
            border-radius: 25px;
        }


        @media only screen and (max-width: 600px) {
            .chat-screen.show-chat {
                -moz-transition: bottom 0.5s linear;
                -webkit-transition: bottom 0.5s linear;
                transition: bottom 0.5s linear;
                visibility: visible;
                width: calc(100vw - 29px);
                height: calc(100vh - 150px);
                bottom: 137px;
            }
        }

        .chat-screen.show-chat {
            -moz-transition: bottom 0.5s linear;
            -webkit-transition: bottom 0.5s linear;
            transition: bottom 0.5s linear;
            visibility: hidden;
            height: calc(100vh - 184px);
            bottom: 79px;
            /* background: #ffff; */

            z-index: 9999;
            border: 4px solid black;
            border-radius: 25px;
        }

        .chat-screen .chat-header {
            /* background-color: #0e1726; */
            border-radius: 15px 15px 0 0;
            padding: 15px;
            display: block;
            width: 100%;
            text-align: center;
        }

        .chat-screen .chat-header .chat-header-title {
            display: inline-block;
            width: calc(100% - 50px);
            color: #fff;
            font-size: 14px;
        }

        .chat-screen .chat-header .chat-header-option {
            display: inline-block;
            width: 44px;
            color: #fff;
            font-size: 14px;
            text-align: right;
        }

        .chat-screen .chat-header .chat-header-option .dropdown .dropdown-toggle svg {
            color: #fff;
        }

        .chat-screen .chat-mail {
            padding: 30px;
            display: block;
        }

        .chat-screen .chat-mail input.form-control {
            border-radius: 30px;
            border: 1px solid #e1e1e1;
            color: #3b3f5c;
            font-size: 14px;
            padding: 0.55rem 1.25rem;
        }

        .chat-screen .chat-mail input.form-control:focus {
            box-shadow: none;
            border: 1px solid #add5fc;
        }

        .chat-screen .chat-mail .select2 .selection .select2-selection .select2-selection__rendered {
            border-radius: 30px;
            border: 1px solid #e1e1e1;
            height: calc(1.28em + 1.28rem + 2px);
            padding: 9px 20px;
            font-size: 14px;
        }

        .chat-screen .chat-mail .select2.select2-container--open .selection .select2-selection {
            box-shadow: none;
            border-radius: 30px;
        }

        .chat-screen .chat-mail button {
            background-image: linear-gradient(to right, #b73a95, #f30594, #dc22ff);
            border: none;
            padding: 0.58rem 1.25rem;
            transition: transform 0.5s ease;
        }

        .chat-screen.show-chat .chat-screen .chat-mail .form-group {
            margin-bottom: 1.5rem;
        }



        .chat-screen .chat-body .chat-start {
            border: 1px solid #f8d4ff;
            width: 150px;
            border-radius: 50px;
            padding: 6px 10px;
            font-size: 12px;
            margin: 0 auto;
            text-align: center;
            margin-bottom: 15px;
            background: #fff;
        }

        .chat-screen .chat-body .chat-bubble {
            font-size: 12px;
            padding: 10px 15px;
            box-shadow: none;
            display: inline-block;
            clear: both;
            margin-bottom: 10px;
            box-shadow: 0 5px 5px rgba(0, 0, 0, 0.02);
        }

        .chat-screen .chat-body .chat-bubble.you {
            background-image: linear-gradient(to right, #673ab7, #813bcb, #9e38de, #bc32ef, #dc22ff);
            color: #fff;
            border-radius: 0 15px 15px 15px;
            align-self: flex-start;
            display: table;
        }

        .chat-screen .chat-body .chat-bubble.me {
            background-image: linear-gradient(to right, #FFFFFF, #FFFFFF, #FFFFFF, #FFFFFF, #FFFFFF);
            color: #888ea8;
            border-radius: 15px 0px 15px 15px;
            float: right;
            align-self: flex-end;
            display: table;
        }

        .chat-screen .chat-input {
            width: 100%;
            position: relative;
            margin-bottom: -5px;
        }

        .chat-screen .chat-input input {
            width: 100%;
            background: #ffffff;
            padding: 15px 70px 15px 15px;
            border-radius: 0 0 15px 15px;
            resize: none;
            border-width: 1px 0 0 0;
            border-style: solid;
            border-color: #f8f8f8;
            color: #7a7a7a;
            font-weight: normal;
            font-size: 13px;
            transition: border-color 0.5s ease;
        }

        .chat-screen .chat-input input:focus {
            border-color: #f9dcff;
        }

        .chat-screen .chat-input input:focus+.input-action-icon a svg.feather-send {
            color: #bc32ef;
        }

        .chat-screen .chat-input .input-action-icon {
            width: 61px;
            white-space: nowrap;
            position: absolute;
            z-index: 1;
            top: 15px;
            right: 15px;
            text-align: right;
        }

        .chat-screen .chat-input .input-action-icon a {
            display: inline-block;
            margin-left: 5px;
            cursor: pointer;
        }

        .chat-screen .chat-input .input-action-icon a svg {
            height: 17px;
            width: 17px;
            color: #a9a9a9;
        }

        .chat-screen .chat-session-end {
            display: block;
            width: 100%;
            padding: 25px;
        }

        .chat-screen .chat-session-end h5 {
            font-size: 17px;
            text-align: center;
            font-weight: bold;
            margin-top: 20px;
        }

        .chat-screen .chat-session-end p {
            font-size: 14px;
            text-align: center;
            margin: 20px 0;
        }

        .chat-screen .chat-session-end .rate-me {
            width: 120px;
            margin: 40px auto;
        }

        .chat-screen .chat-session-end .rate-me .rate-bubble {
            display: inline-block;
            text-align: center;
            width: 50px;
        }

        .chat-screen .chat-session-end .rate-me .rate-bubble span {
            height: 50px;
            width: 50px;
            text-align: center;
            display: block;
            line-height: 46px;
            cursor: pointer;
            transition: transform 0.5s ease;
            margin-bottom: 7px;
        }

        .chat-screen .chat-session-end .rate-me .rate-bubble span:hover {
            transform: scale(1.1);
            transition: transform 0.5s ease;
        }

        .chat-screen .chat-session-end .rate-me .rate-bubble.great {
            margin-right: 12px;
            color: #43cc6c;
        }

        .chat-screen .chat-session-end .rate-me .rate-bubble.great span {
            background: #43cc6c;
            border-radius: 50px 50px 0 50px;
        }

        .chat-screen .chat-session-end .rate-me .rate-bubble.bad {
            color: #ef4252;
        }

        .chat-screen .chat-session-end .rate-me .rate-bubble.bad span {
            background: #ef4252;
            border-radius: 50px 50px 50px 0;
        }

        .chat-screen .chat-session-end .transcript-chat {
            display: block;
            text-align: center;
            margin-top: 80px;
            color: #0768f8;
            text-decoration: underline;
            line-height: 20px;
        }

        .chat-screen .powered-by {
            margin-top: 40px;
            text-align: center;
            font-size: 12px;
        }

        .chat-bot-icon {
            position: fixed;
            bottom: 7px;
            right: 6px;
            height: 50px;
            width: 50px;
            /* background-image: linear-gradient(to right, #673ab7, #813bcb, #9e38de, #bc32ef, #dc22ff); */
            z-index: 9999;
            border-radius: 30px;
            box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            line-height: 50px;
            cursor: pointer;
            transition: all 0.5s ease;
        }

        .chat-bot-icon img {
            height: 90px;
            width: 90px;
            position: absolute;
            right: -13px;
            top: -16px;
        }

        .chat-bot-icon svg {
            color: rgb(212, 10, 10);
            -moz-transition: all 0.5s linear;
            -webkit-transition: all 0.5s linear;
            transition: transform 0.5s linear;
            position: absolute;
            left: 13px;
            top: 13px;
            opacity: 0;
            z-index: -1;
        }

        .chat-bot-icon svg.animate {
            -moz-transform: rotate(360deg);
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
            opacity: 1;
            z-index: 1;
        }

        .iframeclick {
            display: none;
        }
    </style>


    <style>
        .main-title>div img {
            object-fit: contain;
            height:50px;
        }


        @media (min-width: 450px) {
            .main-card {
                width: 96%;
                max-width: 320px;
                height: calc(100% - 100px) !important;
                border-radius: 8px !important;
                /* max-height: 600px; */
                margin: 16px !important;
            }
        }

        .collapsed {
            width: 48px !important;
            height: 48px !important;
            border-radius: 24px !important;
            margin: 16px !important;
        }

        .main-card {
            background: #ffffff;
            color: white;
            width: 90%;
            height: 90%;

            margin: 0px;
            border-radius: 20px;
            display: flex;
            flex-direction: column;
            overflow: hidden;
            right: 21px;
            bottom: 55px;
            position: fixed;
            transition: all 0.5s;
            box-shadow: 0 10px 16px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        #chatbot_toggle {
            position: absolute;
            right: 0;
            border: none;
            height: 48px;
            width: 48px;
            background: linear-gradient(135deg, rgba(223, 210, 208, 1) 0%, rgba(230, 212, 205, 1) 55%, rgba(48, 27, 18, 1) 100%);
            box-shadow: 10px 10px 15px rgb(0 0 0 / 80%);
            padding: 1px;
            color: white;
            margin: 0 auto;
            border-radius: 50px;
        }



        .line {
            /* height: 1px;
            background-color: #214e61;
            width: 100%;
            opacity: 0.2; */
        }

        .main-title {
            background: linear-gradient(135deg, rgba(223, 210, 208, 1) 0%, rgba(230, 212, 205, 1) 55%, rgba(48, 27, 18, 1) 100%);
            box-shadow: 10px 10px 15px rgb(0 0 0 / 80%);
            font-size: large;
            font-weight: bold;
            display: flex;
            height: 48px;
        }

        .main-title>div {
            /* padding: 10px; */

            height: 82px;
            /* width: 48px; */
            display: flex;
            /* margin-left: 8px; */


        }

        .main-title svg {
            height: 24px;
            margin: auto;
        }

        .main-title>span {
            margin: auto auto auto 8px;
        }

        .chat-area {
            /* flex-grow: 1; */
            /* overflow: auto; */
            /* border-radius: 8px; */
            /* padding: 16px; */
            display: flex;
            flex-direction: column;
        }

        .input-message {
            padding: 8px 48px 8px 16px;
            flex-grow: 1;
            border: none;
        }

        .input-message:focus {
            outline: none;
        }

        .input-div {
            height: 48px;
            display: flex;
        }

        .input-send {
            background: transparent;
            width: 48px;
            height: 48px;
            right: 0%;
            border: none;
            cursor: pointer;
        }

        .input-send:hover {
            background: lavender;
        }

        .input-send svg {
            fill: rebeccapurple;
            margin: 11px 8px;
        }

        .chat-message-div {
            display: flex;
        }

        .chat-message-sent {
            background-color: white;
            margin: 8px 16px 8px 64px;
            padding: 8px 16px;
            animation-name: fadeIn;
            animation-iteration-count: 1;
            animation-timing-function: ease-in;
            animation-duration: 100ms;
            color: black;
            border-radius: 8px 8px 2px 8px;
            background-color: lavender;
        }

        .chat-message-received {
            background-color: white;
            margin: 8px 64px 8px 16px;
            padding: 8px 16px;
            animation-name: fadeIn;
            animation-iteration-count: 1;
            animation-timing-function: ease-in;
            animation-duration: 100ms;
            color: black;
            border-radius: 8px 8px 8px 2px;
            background-color: lavender;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #888;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
    </style>


    <style>
        input[type="time"] {
            position: relative;
            padding: 10px;
        }

        input[type="time"]::-webkit-calendar-picker-indicator {
            color: transparent;
            background: none;
            z-index: 1;
        }

        input[type="time"]:before {
            color: transparent;
            background: #fff;
            display: block;
            font-family: 'FontAwesome';
            content: url(http://allcampaigns.in/PIISafetyTicketingTool/assets/time.png);
            transform: scale(0.3);
            position: absolute;
            /* height: 50px; */
            right: -32px;
            color: #999;
        }
    </style>

    <style>
        input[type="date"] {
            position: relative;
            padding: 10px;
        }

        input[type="date"]::-webkit-calendar-picker-indicator {
            color: transparent;
            background: none;
            z-index: 1;
        }

        input[type="date"]:before {
            color: transparent;
            background: #fff;
            display: block;
            font-family: 'FontAwesome';
            content: url(http://allcampaigns.in/PIISafetyTicketingTool/assets/calendar.png);
            transform: scale(0.3);
            position: absolute;
            /* height: 50px; */
            right: -32px;
            color: #999;
        }
    </style>
    <!-- bootstrap -->

    <!-- datepicker styles -->

    <!-- datepicker styles -->
    <style>
        .calendar {
            position: relative;
            width: 202px;
            margin: auto;
        }

        .calendars {
            margin: 5px 0;
            height: 50px;
        }

        .calendars img {



            position: absolute;
            height: 48px;
            left: -50px;
            background: #fff;


        }



        .form-control {
            display: block;
            width: 100%;
            height: calc(1.5em + 0.75rem + 2px);
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #d31a1a;
            border-radius: 0.25rem;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }





        body::-webkit-scrollbar-thumb {
            width: 10px !important;
            background-color: red !important;
        }

        .userviewbutton {
            position: relative;
            left: 50%;
            transform: translateX(-50%);
            /*this will calculate what 50% of the element width is and will move it across the X-axis. The negative value ensures it moves to the left*/
            background-color: #fff;
            /* Green */

            color: black;
            width: 100%;
            border: 2px solid #bb1514;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 2px 2px;
            cursor: pointer;
            margin-top: 5px;
            border-radius: 25px;
        }

        .active_user {
            background-color: #ff5252 !important;


        }
    </style>

    <!-- new css add start -->
    <style>
        ::-webkit-file-upload-button {

            font: inherit;
            /* margin-top: -17px; */
            -webkit-appearance: button;
            object-fit: contain;
            height: 50px;
            background-size: contain;
            border: none;
            width: 50px;
            background-image: url(https://p.kindpng.com/picc/s/109-1095236_camera-icon-camera-icon-in-red-hd-png.png);
            background-repeat: no-repeat;
            font-size: 1px
        }




        .hcs {
            display: none;
        }

        .hcs+label {
            margin: 5px;
            display: block;
            float: left;
            width: 200px;
            height: 40px;
            line-height: 35px;
            text-align: center;
            padding: 0px 8px;
            font-size: 16px;
            border: 2px solid #bb1514;
            color: #333;
            background: #fff;
            border-radius: 14px;

        }

        .hcs:checked+label {
            display: inline-block;
            background-color: #2ecc71;
        }
    </style>

    <style>
        .wrapper {
            /* border: 2px solid gray !important; */
            /* background-color: #e78ad0; */
        }

        .wrapper .form .user-inbox {
            justify-content: flex-end;
            margin: 13px 0;
            height: 37px;
            line-height: -2px;
            height: auto;
        }

        label {
            display: inline-block;
            margin-bottom: 0.5rem;
            color: #ffff;
        }

        .form .bot-inbox .msg-header p {
            color: #000;
            background: #fbfbfbf0;
            border-radius: 10px;
            padding: 3px 5px;
            max-width: 88%;
            font-size: 14px;
            position: relative;
            word-break: normal;
            /* width: 192px; */
            width: 100%;
            margin-left: 15px;
        }

        .form .user-inbox .msg-header p {
            background: #656565;
            width: 180px !important;
            /* margin-left: 8px; */
            color: #fff;
            right: 15px;
            position: relative;
            position: relative;
            float: right;
            border-radius: 10px;
            padding: 10px;
            top: 0px;
        }

        .wrapper .form .inbox .msg-header {
            max-width: 100%;
            margin-left: 10px;
            /* width: 280px; */
        }

        .wrapper .form .inbox .msg-header {
            width: 100%;
            margin-left: -7px;
            /* width: 280px; */
        }
    </style>

    <!-- new css end -->
    <style>
        .wrapper .form {
            /* padding: 20px 15px; */
            /* min-height: 490px;
            max-height: 490px; */
            padding-bottom: 80px;
            background: linear-gradient(90deg, rgba(193, 7, 7, 1) 0%, rgba(241, 109, 52, 1) 100%);

        }

        @media (max-width:576px) {
            .wrapper .form {
                /* padding: 20px 15px; */
                /* min-height: 539px;
    max-height: 680px; */
                padding-bottom: 80px;
                background-color: #b9b9b9;

            }



        }



        .user-inbox .icon img {
            width: 40px;
            height: 40px;
            position: absolute;
            margin-top: -19px;
            margin-left: -34px;
        }

        .radio-btn {
            /* border: 4px double #feb040; */
            margin: 4px 0px;
            border-radius: 5px;
            padding: 6px;
        }

        button,
        .upload_txt span {
            padding: 0px 8px;
            border: 0;
            border-radius: 6px;
            color: #e64644;
            cursor: pointer;
            background: #fff;
            font-size: 23px;
            outline: none;
            overflow: hidden;
            text-overflow: ellipsis;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .wrapper {

            width: 100%;
            height: 100%;
            /* background: #b9b9b9; */
            border-radius: 10px;
            border: 0px solid #ffffff00;
            /* height: calc(100% - 200px); */
            border-top: 0px;
            right: 0;
            margin: auto;
            /* position: absolute; */
            /* -webkit-box-shadow: 0 5px 40px rgb(0 0 0 / 16%);
            -moz-box-shadow: 0 5px 40px rgba(0, 0, 0, .16);
            box-shadow: 0 5px 40px rgb(0 0 0 / 16%); */
        }

        .form .user-inbox .msg-header p {
            background: #656565;
            width: auto !important;
            /* margin-left: 8px; */
            color: #fff;
            right: 15px;
            position: relative;
            position: relative;
            float: right;
            border-radius: 10px;
            padding: 10px;
            top: 0px;
        }

        .form .user-inbox .msg-header p::before {
            content: '';
            position: absolute;
            top: 2px;
            right: -10px;
            border-top: 26px solid transparent;
            border-right: 26px solid #656565;
            -ms-transform: rotate(45deg);
            -ms-transform-origin: 20% 40%;
            transform: rotate(45deg);
            transform-origin: 100% 0%;
        }
    </style>



    <style>
        #hideDiv {
            background: red;
            width: 400px;
            margin: 0 auto;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
    </style>


<!--  -->








  <style>
    #mty {
      display: none;
    }

    .hidetext li {
      text-decoration: none;
      list-style-type: none;
      color: black;
      font-size: 12px;
      padding: 2px;


    }

    @media (max-width:700px) {
      .hidetext li {
        text-decoration: none;
        list-style-type: none;
        font-size: 0.7rem;
        padding: 0px 10px;

      }



    }




    @media (max-width:320px) {

      .hidetext li {
        text-decoration: none;
        list-style-type: none;
        font-size: 0.5rem !important;
        padding: 0px 10px;
      }

    }

    @media (max-width:414px) {

      .hidetext li {
        text-decoration: none;
        list-style-type: none;
        font-size: 1rem;
        padding: 0px 10px;
      }

    }

    @media (max-width:514px) {

      .hidetext li {
        text-decoration: none;
        list-style-type: none;
        font-size: 14px;
        padding: 0px 10px;
      }

    }


    .chat-mail {
      height: 100%;
      /* width: revert; */
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      overflow: scroll;

      position: absolute;
    }

    #myinput {
      background-image: linear-gradient(to right, #b73a95, #f30594, #dc22ff);
      border: none;
      padding: 0.58rem 1.25rem;
      transition: transform 0.5s ease;
      font-style: italic;

    }

    .iframeclick {
      display: none;
    }

    .mt-5,
    .my-5 {
      margin-top: 0px !important;
    }
  </style>
</head>

<body>

<div class="chat-bot-icon " id="chat-bot-icon">


<img class="iframeclick" id="iframeclick" src="https://www.pngarts.com/files/4/Robot-PNG-Transparent-Image.png" />
<img class="iframeclicks" style="height: 34px;
object-fit: contain;
margin-top: 24px;
margin-right: -7px;
display: block;" src="https://www.pngmart.com/files/3/Red-Cross-PNG-File.png" />



</div>


  <div class="title ">


    <div id="chatbot" class="main-card ">
    <button id="chatbot_toggle">
                <a href="?" class="float" id="menu-share">
                    <i class="fa fa-refresh my-float"></i>
                </a>


            </button>
      <div class="main-title">
      <div>
                    <img src="https://brit-idea.com/PIISafetyTicketingTool/assets/Britannia.png" alt="" style-"height:100px" class="img-fluid">

                </div>

      </div>
      <div class="chat-area">

        <div class=" ">
          <div class="chat-mail text-center" style="">

            <div class="hidetext mt-5">

              <li> <b><i>Hi,</i></b> I am Proactive Identification bot,</li>
              <!-- <li> <b><i>Safety First:</i></b> report Unsafe Condition, Unsafe act, Unsafe Behavior & Near Miss Incidents</li>
              <li> <b><i>Unsafe Condition:</i></b> Condition in the workplace that is likely to cause injury.
              </li>
              <li> <b><i>Unsafe Behavior / Act:</i></b> Behavior that is exhibited or Activity that is conducted in a manner that may threaten the health and/or safety.</li>
              <li> <b><i>Near Miss Incident:</i></b> Event that did not result in injury, illness or damage - But had the potential to do so.</li>
              <li><b><i>Good Act: </i></b> Behavior that is exhibited or activity that is conducted in a manner that will not lead to any health and /or safety hazard.
              </li> -->
              <hr>
              <p><strong><i>To start your journey with us we need some of your details like your Name, Email ID & Mobile Number.</i> </strong> </p>
            </div>
            <!-- <p class="hidetext" style="text-align: center; font-size:12px"> <br>Safety First; report Unsafe Condition, Unsafe act, Unsafe Behavior & Near Miss IncidentsUnsafe Condition: Condition in the workplace that is likely to cause injury.
        <br>Unsafe Behavior / Act: Behavior that is exhibited or Activity that is conducted in a manner that may threaten the health and/or safety <br>Near Miss Incident: Event that did not result in injury, illness or damage - But had the potential to do so. <br>Good Act: Behavior that is exhibited or activity that is conducted in a manner that will not lead to any health and /or safety hazard.

        <br>To start your journey with us we need some of your details like your Name, Email ID & Mobile Number.
      </p> --> <br>
            <button style="background-image: linear-gradient(to right, #b73a95, #f30594, #dc22ff);
    border: none;
    padding: 0.58rem 1.25rem;
    transition: transform 0.5s ease;
    font-style: italic;     border-radius: 25px;
    padding: 8px 100px;
    margin: 16px;" style="width: 100%;    border-radius: 25px;" class="btn bg-success hidetext text-white" onclick="startchat()"><i>Lets Start</i> </button>
            <p style="color: red;"> <?php echo @$error; ?> </p>

            <div class="chat-body mty" id="mty" style="padding: 0 14px;">

              <!-- <img src="https://cdn.dribbble.com/users/634508/screenshots/5058273/media/b5c02d6a9a6ce6899b7f42f5df2661c0.gif" alt="" class="img-fluid" style="height: 160px;"> -->
              <form action="<?php echo base_url(); ?>Welcome" method="post">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" class="form-control" name="Name" placeholder="Name" required autocomplete="off">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="email" class="form-control" name="Email" placeholder="Email" required autocomplete="off">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="tel" class="form-control" maxlength="10" name="Mobile" placeholder="Mobile number" required autocomplete="off">
                    </div>
                  </div>

                  <div class="col-md-12 pb-10">
                    <input type="submit" id="myinput" class="btn btn-primary btn-rounded btn-block" name="submit" value=" Let's Proceed">
                    <a href="#" style="background-image: linear-gradient(to right, #b73a95, #f30594, #dc22ff);
    border: none;
    padding: 0.58rem 1.25rem;
    transition: transform 0.5s ease;
    font-style: italic;     border-radius: 25px;
    padding: 8px 100px;
    margin: 16px;" class="btn  text-white " onclick="backclick()"><i>Back</i> </a>
                  </div>
                  <div class="col-md-12"> <br>
                    <div class="powered-by">Powered by crazibrainsolutions</div>
                  </div>
                </div>
              </form>


            </div>

          </div>



        </div>



      </div>
      <div class="line"></div>
      <div class="input-div" style="display: none;">
        <input class="input-message" name="message" type="text" id="message" placeholder="Type your message ..." />
        <button class="input-send" onclick="send()">
          <svg style="width:24px;height:24px">
            <path d="M2,21L23,12L2,3V10L17,12L2,14V21Z" />
          </svg>
        </button>
      </div>
    </div>
  </div>










  <!-- Chat bot UI start -->








  <script src="<?php echo base_url(); ?>assets/land/jquery-3.4.1.min.js"></script>
  <script src="http://css3transition.com/demo/chat-bot-html-template/js/popper.min.js"></script>
  <script src="http://css3transition.com/demo/chat-bot-html-template/js/bootstrap.min.js"></script>
  <script>
    function startchat() {
      $('.chat-body').css("display", "block");
      $('.hidetext').css("display", "none");


    }

    function backclick() {
      $('.chat-body').css("display", "none");
      $('.hidetext').css("display", "block");

    }
  </script>


  <script>
    document.getElementById("chat-bot-icon").onclick = function() {
      if (document.getElementById("chatbot").classList.contains("collapsed")) {
        document.getElementById("chatbot").classList.remove("collapsed")


      } else {
        document.getElementById("chatbot").classList.add("collapsed")

      }
    }
  </script>







  <script>
    $(document).ready(function() {

      //Toggle fullscreen

      $(".iframeclick").click(function(e) {

        $('.iframeclick').css("display", "none");
        $('.iframeclicks').css("display", "block");
        $('.main-card').css("transition", "all 0.5s");

        $('.main-card').css("display", "block");





      });

      $(".iframeclicks").click(function(e) {

        $('.iframeclick').css("display", "block");
        $('.iframeclicks').css("display", "none");
        $('.main-card').css("transition", "all 0.5s");

        $('.main-card').css("display", "none");




      });




    });
  </script>


</body>

</html>