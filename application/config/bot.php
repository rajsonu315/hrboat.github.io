<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>PII Safety Ticketing Tool</title>
    <meta name="apple-mobile-web-app-status-bar-style" content="#FFD700">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/style.css'; ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jaldi&display=swap" rel="stylesheet">


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
            box-shadow: 2px 2px 3px #999;
            z-index: 1000;
            animation: bot-to-top 2s ease-out;
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

        /* ul:hover {
            visibility: visible !important;
            opacity: 1 !important;
        } */

        .my-float {
            font-size: 24px;
            margin-top: 11px;
        }

        a#menu-share+ul {
          display: none;
            animation: scale-in 0.5s;
        }

        /* a#menu-share:hover+ul {
          
        } */

        a#menu-share i {
            animation: rotate-in 0.5s;
        }

        a#menu-share:hover>i {
            animation: rotate-out 0.5s;
        }

        @keyframes bot-to-top {
            0% {
                bottom: -40px;
            }

            50% {
                bottom: 40px;
            }
        }

        @keyframes scale-in {
            from {
                transform: scale(0);
                opacity: 0;
            }

            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        @keyframes rotate-in {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        @keyframes rotate-out {
            from {
                transform: rotate(360deg);
            }

            to {
                transform: rotate(0deg);
            }
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
            background: #b9b9b9;
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
            background-image: linear-gradient(to right, #b73a95, #f30594, #dc22ff);
            padding: 1px;
            color: white;
            margin: 0 auto;
        }



        .line {
            /* height: 1px;
            background-color: #214e61;
            width: 100%;
            opacity: 0.2; */
        }

        .main-title {
            background-image: linear-gradient(to right, #7c6c77, #34232d, #080809);
            font-size: large;
            font-weight: bold;
            display: flex;
            height: 48px;
        }

        .main-title>div {
            padding: 10px;

            height: 48px;
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

        /* input[type="date"]::-webkit-calendar-picker-indicator {
    color: rgba(0, 0, 0, 0);
    opacity: 1;
    display: block;
    background: url(https://mywildalberta.ca/images/GFX-MWA-Parks-Reservations.png) no-repeat;
    width: 20px;
    height: 20px;
    border-width: thin;
} */

        /* input[type="date"]::-webkit-inner-spin-button,
        input[type="date"]::-webkit-calendar-picker-indicator {
            display: none;
            -webkit-appearance: none;
        }

        input[type="time"]::-webkit-inner-spin-button,
        input[type="time"]::-webkit-calendar-picker-indicator {
            display: none;
            -webkit-appearance: none;
        }  */

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
            background-color: #b9b9b9;

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
        .contact button[type="BTN"] {
            cursor: pointer;
            width: 150PX;
            border: none;
            background: #0CF;
            color: #FFF;
            margin: 0 0 5px;
            padding: 10px;
            font-size: 15px;
            float: right;

        }






        .m-t-10 {
            margin-top: 10px;
        }

        .m-t-20 {
            margin-top: 20px;
        }

        .m-t-30 {
            margin-top: 30px;
        }

        .m-t-40 {
            margin-top: 40px;
        }

        .m-b-10 {
            margin-bottom: 10px;
        }

        .m-b-20 {
            margin-bottom: 20px;
        }

        .m-b-30 {
            margin-bottom: 30px;
        }

        .m-b-40 {
            margin-bottom: 40px;
        }

        .m-l-10 {
            margin-left: 10px;
        }

        .m-l-20 {
            margin-left: 20px;
        }

        .m-l-30 {
            margin-left: 30px;
        }

        .m-l-40 {
            margin-left: 40px;
        }

        /* .wd10 { width: 10%; float: left;} .wd20 { width: 20%; float: left;} .wd30 { width: 30%; float: left;}
.wd40 { width: 40%; float: left;} .wd50 { width: 50%; float: left;} .wd60 { width: 60%; float: left;}
.wd70 { width: 70%; float: left;} .wd80 { width: 80%; float: left;} .wd90 { width: 90%; float: left;} .wd100 { width: 100%; float: left;} */
        .wd10 {
            width: 10%;
        }

        .wd20 {
            width: 20%;
        }

        .wd30 {
            width: 30%;
        }

        .wd40 {
            width: 40%;
        }

        .wd50 {
            width: 50%;
        }

        .wd60 {
            width: 60%;
        }

        .wd70 {
            width: 70%;
        }

        .wd80 {
            width: 80%;
        }

        .wd90 {
            width: 90%;
        }

        .wd100 {
            width: 100%;
        }

        .wd10,
        .wd10,
        .wd20,
        .wd30,
        .wd40,
        .wd50,
        .wd60,
        .wd70,
        .wd80,
        .wd90,
        .wd100 {
            display: inline-block;
        }

        .col50 {
            width: 100%;
        }

        .col50.colleft {
            float: left;
        }

        .col50.colright {
            float: right;
        }

        .col50 .wd50 {
            width: 100%;
            float: left;
        }

        .col50 .col50 {
            width: 48%;
        }

        .fL {
            float: left !important;
        }

        .fR {
            float: right !important;
        }

        .underline {
            text-decoration: underline;
        }

        .op9 {
            opacity: .9;
        }

        .op8 {
            opacity: .8;
        }

        .op7 {
            opacity: .7;
        }

        .op6 {
            opacity: .6;
        }

        .op5 {
            opacity: .5;
        }

        .op4 {
            opacity: .4;
        }

        .op3 {
            opacity: .3;
        }

        .op2 {
            opacity: .2;
        }

        .op1 {
            opacity: .1;
        }

        .nodrop {
            cursor: no-drop;
        }

        /* color code */
        .white {
            color: #ffffff;
        }

        .bg-white {
            background-color: #ffffff !important;
            color: #676767 !important;
        }

        .blue {
            color: #1ba1e5;
        }

        .bg-blue {
            background-color: #1ba1e5 !important;
        }

        .purple {
            color: #448aff;
        }

        .bg-purple {
            background-color: #448aff !important;
        }

        .red {
            color: #ff5252;
        }

        .bg-red {
            background-color: #ff5252 !important;
        }

        .orange {
            color: #ff6d00;
        }

        .bg-orange {
            background-color: #ff6d00 !important;
        }

        .green {
            color: #43a047;
        }

        .bg-green {
            background-color: #43a047 !important;
        }

        .violet {
            color: #9162e4;
        }

        .bg-violet {
            background-color: #9162e4 !important;
        }

        .pink {
            color: #ff6090;
        }

        .bg-pink {
            background-color: #ff6090 !important;
        }

        .alt-blue {
            color: #7c9cad;
        }

        .bg-alt-blue {
            background-color: #7c9cad !important;
        }

        .bg-pink:hover,
        .bg-pink:focus,
        .bg-pink:active,
        .bg-purple:hover,
        .bg-purple:focus,
        .bg-purple:active,
        .bg-violet:hover,
        .bg-violet:focus,
        .bg-violet:active,
        .bg-alt-blue:hover,
        .bg-alt-blue:focus,
        .bg-alt-blue:active {
            color: #ffffff !important;
        }

        /* text color code */
        .gray-pale {
            color: #526273;
        }

        .gray-dark {
            color: #444444;
        }

        .gray-light {
            color: #908e8e;
        }

        .btn {
            -webkit-transition: box-shadow ease-in-out .1s;
            -moz-transition: box-shadow ease-in-out .1s;
            -o-transition: box-shadow ease-in-out .1s;
            transition: box-shadow ease-in-out .1s;
            color: #ffffff;
        }

        .btn[class*='bg-']:hover {
            box-shadow: inset 0 0 100px rgba(0, 0, 0, 0.1);
        }

        .btn.active.focus,
        .btn.active:focus,
        .btn.focus,
        .btn:active.focus,
        .btn:active:focus,
        .btn:focus,
        button:focus {
            outline: none;
            outline-offset: 0;
        }

        .container-fluid {
            max-width: 960px;
            width: 100%;
            margin: 0 auto;
            position: relative;
            display: block;
        }

        .contact {
            background: #F9F9F9;
            padding: 25px;
            margin: 0px 0;
        }

        .contact h3 {
            display: block;
            font-size: 16px;
        }

        .contact p {
            margin: 5px 0;
        }

        hr {
            border-width: 7px;
            box-shadow: none;
            border-style: solid;
            border-color: #f3f3f3;
            margin: 7px 0;
            margin-left: 0;
            display: block;
        }

        fieldset {
            border: medium none !important;
            margin: 0 0 10px;
            min-width: 100%;
            padding: 0;
            width: 100%;
        }

        textarea {
            font-family: 'Work Sans', sans-serif;
        }

        .contact input[type="text"],
        .contact input[type="email"],
        .contact input[type="tel"],
        .contact input[type="url"],
        .contact select,
        .contact textarea {
            width: 100%;
            border: 1px solid #CCC;
            background: #FFF;
            margin: 0 0 5px;
            line-height: 24px;
            padding: 0;
            text-indent: 8px;
        }

        .contact select {
            padding: 3px 7px;
            text-indent: 0;
        }

        .contact input[type="text"]:hover,
        .contact input[type="email"]:hover,
        .contact input[type="tel"]:hover,
        .contact input[type="url"]:hover,
        .contact textarea:hover {
            -webkit-transition: border-color 0.3s ease-in-out;
            -moz-transition: border-color 0.3s ease-in-out;
            transition: border-color 0.3s ease-in-out;
            border-color: #373737;
        }

        .contact textarea {
            max-height: 120px;
            min-height: 60px;
            min-width: 100%;
            max-width: 100%;
        }

        .contact button[type="submit"] {
            cursor: pointer;
            width: 100%;
            border: none;
            background: #0CF;
            color: #FFF;
            margin: 0 0 5px;
            padding: 10px;
            font-size: 15px;
        }

        .contact button[type="submit"]:hover {
            background: #09C;
            -webkit-transition: background 0.3s ease-in-out;
            -moz-transition: background 0.3s ease-in-out;
            transition: background-color 0.3s ease-in-out;
        }

        .contact button[type="submit"]:active {
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
        }

        .contact input:focus,
        .contact textarea:focus {
            outline: 0;
            border: 1px solid #999;
        }

        ::-webkit-input-placeholder {
            color: #888;
        }

        :-moz-placeholder {
            color: #888;
        }

        ::-moz-placeholder {
            color: #888;
        }

        :-ms-input-placeholder {
            color: #888;
        }

        .question-checkbox {
            border: 1px solid #d7d7d7;
            margin-bottom: 10px;
            margin-left: 0px;
        }

        .question-checkbox .col50 {
            padding: 1% 2%;
            width: 50%;
        }

        .question-checkbox .col50 p {
            margin: 8px 0 0;
            font-weight: 600;
        }

        .question-checkbox .col50 label {
            margin: 0 10px 0 0;
            font-size: 13px;
        }

        .question-checkbox .col50 input[type="checkbox"] {
            position: relative;
            ;
            top: 2px;
        }

        .table-wrapper {
            position: relative;
            overflow: hidden;
            width: 100%;
            max-width: 1150px;
        }

        .table-wrapper:after {
            content: "";
            position: absolute;
            top: 0;
            left: 100%;
            width: 50px;
            height: 100%;
            border-radius: 10px 0 0 10px / 50% 0 0 50%;
        }

        .table-wrapper .table-inner {
            overflow-x: auto;
            border: 1px solid #ebebeb;
            padding: 0 7px;
        }

        .table-wrapper .table-inner::-webkit-scrollbar {
            -webkit-appearance: none;
            width: 14px;
            height: 14px;
        }

        .table-wrapper .table-inner::-webkit-scrollbar-thumb {
            border-radius: 5px;
            border: 2px solid #fff;
            background-color: #8e9eab;
        }

        .table-wrapper input[type="text"] {
            line-height: 24px;
            margin: 0;
        }

        .pricing-table {
            margin: 10px 0;
            text-align: center;
            font-size: 12px;
            overflow: hidden;
            border-radius: 5px;
        }

        .pricing-table th,
        .pricing-table td {
            padding: 4px 2px;
            min-width: 120px;
            border: none;
            text-align: center;
            font-weight: 500;
        }

        .pricing-table th {
            background: #8e9eab;
            color: #fff;
            font-size: 14px;
        }

        .pricing-table td:first-child {
            padding: 5px;
            text-align: left;
        }

        .pricing-table tr:nth-child(even) td {
            background: white;
        }

        @media (min-width: 860px) {
            .table-wrapper {
                overflow: visible;
                -webkit-box-shadow: none;
                box-shadow: none;
            }

            .table-wrapper:after {
                content: none;
            }
        }

        @media (max-width: 640px) {
            label {
                font-size: 12px;
            }

            .col50 .col50 {
                width: 100%;
            }
        }

        /* design by purushottam */

        table.rt-responsive-table tr:nth-of-type(odd) {
            background: #eee;
        }

        table.rt-responsive-table th {
            background: #333;
            color: white;
            font-weight: bold;
        }

        table.rt-responsive-table td,
        table.rt-responsive-table th {
            padding: 6px;
            border: 1px solid #ccc;
            text-align: left;
        }

        table.rt-responsive-table.rt-vertical-table,
        table.rt-responsive-table.rt-vertical-table thead,
        table.rt-responsive-table.rt-vertical-table tbody,
        table.rt-responsive-table.rt-vertical-table th,
        table.rt-responsive-table.rt-vertical-table td,
        table.rt-responsive-table.rt-vertical-table tr {
            display: block;
            overflow: hidden;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            float: left;
            clear: left;
            width: 100%
        }

        table.rt-responsive-table.rt-vertical-table thead tr {
            position: absolute;
            top: -9999px;
            left: -9999px;
        }

        table.rt-responsive-table.rt-vertical-table tr {
            border: 1px solid #ccc;
        }

        table.rt-responsive-table.rt-vertical-table td {
            border: 0;
            border-bottom: 1px solid #eee;
            position: relative;
            padding-left: 50%;
            font-size: 11px;
        }

        table.rt-responsive-table.rt-vertical-table td:before {
            position: absolute;
            top: 6px;
            left: 6px;
            width: 45%;
            padding-right: 10px;
            white-space: nowrap;
            font-weight: bold;
            font-size: 11px;
        }
    </style>


    <style>
        .title-center {
            text-align: center;
        }

        .container,
        .container-fluid,
        .container-lg,
        .container-md,
        .container-sm,
        .container-xl {
            /* width: 100%; */
            padding-right: 0px;
            padding-left: 0px;
            margin-right: auto;
            margin-left: auto;
        }

        .gifid {
            position: relative;
            top: -50px;
            left: 60px;
            border-radius: 50%;
            z-index: 1;
            height: 30px;



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

    <style>
        .timecssright {
            padding: 0px 7px;
            background-color: #333;
            border-radius: 25px;
            /* float: right; */
            position: relative;
            top: -19px;
            /* left: -41px; */
            font-size: 11px;

        }

        .timecssleft {
            padding: 0px 7px;
            background-color: #333;
            border-radius: 25px;
            float: right;
            position: relative;
            top: -35px;
            right: 51px;
            font-size: 11px;


        }
    </style>
</head>

<body>


    <div class="chat-bot-icon " id="chat-bot-icon">


        <img class="iframeclick" id="iframeclick" src="https://i.pinimg.com/originals/ab/53/c3/ab53c3258caa5c3c691b4de46cb5ad88.gif" />
        <img class="iframeclicks" style="height: 34px;
object-fit: contain;
margin-top: 24px;
margin-right: -7px;
display: block;" src="https://www.pngmart.com/files/3/Red-Cross-PNG-File.png" />



    </div>



    <div class="title">
        <div id="chatbot" class="main-card ">
            <button id="chatbot_toggle">
                <a href="#" class="float" id="menu-share">
                    <i class="fa fa-share my-float"></i>
                </a>
                <ul>
                    <li>
                        <a href="?">
                            <i class="fa fa-refresh my-float"> </i>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('/') ?>">
                            <i class="fa fa-sign-out my-float"></i>
                        </a>
                    </li>
          
                </ul>

            </button>
            <div class="main-title">
                <div>
                    <img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/Britannia.png" alt="" class="img-fluid">

                </div>


            </div>
            <div class="chat-area">

                <div class="wrapper" style="">

                    <div class="form" style="">
                        <div class="bot-inbox inbox">

                            <div class="msg-header">

                            </div>

                        </div>
                        <div class="bot-inbox inbox">
                            <div class="icon">
                                <!-- <i class="fa fa-user"></i>  -->

                                <img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">


                            </div>

                            <?php $Name = ($this->session->userdata('Name')) ? $this->session->userdata('Name') : 'test1';




                            ?>


                            <div class="msg-header ">
                                <p>Awesome <?php echo $Name; ?> , So we are ready to start, Please Select the location of observation.
                                    ” </p>
                                <span class="timecssright">02:30</span>



                                <div class="myty" style=" display: grid; width: 200px; margin: auto;">


                                    <div class="form-group">
                                        <label for="year_pick"> Please Select Below</label>
                                        <select class="form-control" name="year_pick" id="year_pick" onchange="myFunction()">
                                            <option selected>select</option>
                                            <option value="FF Sample Room">FF Sample Room</option>
                                            <option value="Culinary Lab ">Culinary Lab </option>


                                        </select>
                                    </div>



                                </div>


                            </div>

                        </div>



                    </div>

                    <div class="loader_sec">
                        <div class="loader"></div>
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



    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>


    <script>
        $("#number44").keyup(function() {
            alert('gg');
            if ($('#number44').val() < -10 || $('#number44').val() > 10) {
                $('#errorMsg').show();
            } else {
                $('#errorMsg').hide();
            }
        });
        $(function() {
            $(".table-wrap").each(function() {
                var nmtTable = $(this);
                var nmtHeadRow = nmtTable.find("thead tr");
                nmtTable.find("tbody tr").each(function() {
                    var curRow = $(this);
                    for (var i = 0; i < curRow.find("td").length; i++) {
                        var rowSelector = "td:eq(" + i + ")";
                        var headSelector = "th:eq(" + i + ")";
                        curRow.find(rowSelector).attr('data-title', nmtHeadRow.find(headSelector).text());
                    }
                });
            });
        });
    </script>

    <!-- Submit Ideas -->

    <script>
        $(document).on("click", ".Operations", function() {
            $value = 'Operations';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://www.shareicon.net/data/2016/05/24/770136_man_512x512.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/Operations"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {



                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/input-onlinegiftools.png'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);




                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });

        $(document).on("click", ".RD", function() {
            $value = 'R & D';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://www.shareicon.net/data/2016/05/24/770136_man_512x512.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/gtest"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {





                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/input-onlinegiftools.png'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });



        $(document).on("click", ".Biscuit", function() {
            $value = 'Biscuit';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://www.shareicon.net/data/2016/05/24/770136_man_512x512.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/RD"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {






                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/input-onlinegiftools.png'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });












        $(document).on("click", ".Marketing", function() {
            $value = 'Marketing';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://www.shareicon.net/data/2016/05/24/770136_man_512x512.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/Marketing"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {




                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/input-onlinegiftools.png'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });
        $(document).on("click", ".MR_2", function() {
            $value = 'MR 2';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://www.shareicon.net/data/2016/05/24/770136_man_512x512.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/MR_2_2"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {




                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/input-onlinegiftools.png'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });

        $(document).on("click", ".People", function() {
            $value = 'People';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://www.shareicon.net/data/2016/05/24/770136_man_512x512.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/People"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {




                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/input-onlinegiftools.png'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });


        $(document).on("click", ".Location", function() {
            $value = 'Location';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://www.shareicon.net/data/2016/05/24/770136_man_512x512.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);
            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/Machine"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {

                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/input-onlinegiftools.png'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });

        $(document).on("click", ".searchtext", function() {
            $value = 'searchtext';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://www.shareicon.net/data/2016/05/24/770136_man_512x512.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/Machine"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {




                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/input-onlinegiftools.png'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });




        $(document).on("click", ".Machine", function() {
            $value = 'Machine';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://www.shareicon.net/data/2016/05/24/770136_man_512x512.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/Machine"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {




                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/input-onlinegiftools.png'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });






        function selectvalue() {


            $('textarea').on({
                focus: function() {
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                    console.log("ddddddd");
                },
                blur: function() {
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                    console.log("ddddddd");
                }
            });

            $value = 'selectvalue';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://www.shareicon.net/data/2016/05/24/770136_man_512x512.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/selectvalue"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {



                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/input-onlinegiftools.png'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);



                    }, 10);

                    setTimeout(function() {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    //$(".form").scrollTop($(".form")[0].scrollHeight);

                }
            });



        };


        $(document).on("click", ".HR1", function() {
            $value = 'HR 1';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://www.shareicon.net/data/2016/05/24/770136_man_512x512.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/HR1"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {



                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/input-onlinegiftools.png'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });

        $(document).on("click", ".Sales", function() {
            $value = 'Sales';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://www.shareicon.net/data/2016/05/24/770136_man_512x512.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/Sales"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {


                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/input-onlinegiftools.png'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });

        $(document).on("click", ".SL", function() {
            $value = 'Search';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://www.shareicon.net/data/2016/05/24/770136_man_512x512.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/SL"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {




                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/input-onlinegiftools.png'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });





        $(document).on("click", ".Operations_q", function() {
            $value = 'Search';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://www.shareicon.net/data/2016/05/24/770136_man_512x512.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/Operations_q"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {



                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/input-onlinegiftools.png'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });



        $(document).on("click", ".Further", function() {
            $value1 = $("#Further").val();
            //$value1 = 'yyyy';



            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value1 + ' </p></div><div class="icon"><img src="https://www.shareicon.net/data/2016/05/24/770136_man_512x512.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/Furtherdes"; ?>',
                type: 'POST',
                data: 'title=' + $value1 + '&text=' + $value1 + '&name3=' + $value1 + '&name4=' + $value1,
                success: function(result) {




                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/input-onlinegiftools.png'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });



        $(document).on("click", ".Operationstitle", function() {
            $value1 = $("#Operationstitle").val();
            //$value1 = 'yyyy';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value1 + ' </p></div><div class="icon"><img src="https://www.shareicon.net/data/2016/05/24/770136_man_512x512.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/Operationsdes"; ?>',
                type: 'POST',
                data: 'title=' + $value1 + '&name2=' + $value1 + '&name3=' + $value1 + '&name4=' + $value1,
                success: function(result) {



                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/input-onlinegiftools.png'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });


        $(document).on("click", ".Operationsdes", function() {
            $value1 = $("#Operationsdes").val();



            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value1 + ' </p></div><div class="icon"><img src="https://www.shareicon.net/data/2016/05/24/770136_man_512x512.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/Operations_q"; ?>',
                type: 'POST',
                data: 'Operationsdes=' + $value1 + '&name2=' + $value1 + '&name3=' + $value1 + '&name4=' + $value1,
                success: function(result) {


                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/input-onlinegiftools.png'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });



        $(document).on("click", ".dateselectthanku", function() {
            $value1 = 'thanku';



            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value1 + ' </p></div><div class="icon"><img src="https://www.shareicon.net/data/2016/05/24/770136_man_512x512.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/dateselectthanku"; ?>',
                type: 'POST',
                data: 'Operationsdes=' + $value1 + '&name2=' + $value1 + '&name3=' + $value1 + '&name4=' + $value1,
                success: function(result) {



                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/input-onlinegiftools.png'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });

        $(document).on("click", ".imgselectyes", function() {
            $value = 'Yes';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://www.shareicon.net/data/2016/05/24/770136_man_512x512.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();

            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/imgselectyes"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {



                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/input-onlinegiftools.png'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });



        });
        $(document).on("click", ".imgselectno", function() {

            $value = 'No';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://www.shareicon.net/data/2016/05/24/770136_man_512x512.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();

            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/g5"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {


                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/input-onlinegiftools.png'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);


                }
            });
        });














        $(document).on("click", ".Participateyes", function() {
            $value = 'Yes';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://www.shareicon.net/data/2016/05/24/770136_man_512x512.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/Participateyesview"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {



                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/input-onlinegiftools.png'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });
        $(document).on("click", ".Participateno", function() {
            $value = 'No';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://www.shareicon.net/data/2016/05/24/770136_man_512x512.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/Participate2"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {





                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/input-onlinegiftools.png'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });



















        function h60() {




            $value = 'Location';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://www.shareicon.net/data/2016/05/24/770136_man_512x512.png" alt="" class="src" height="40px"></div></div> <span class="timecssleft">02:30</span>';
            $(".form").append($msg);

            $('.removebtn').remove();


            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "Home/g1"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    // $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
                    // $(".form").append($replay);
                    $(".form").scrollTop($(".form")[0].scrollHeight);







                    // $(".msg-header").fadeOut(1500);


                    // setTimeout(function() {

                    //     $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px"></div><div class="msg-header">' + result + '</div></div>';
                    //     $(".form").append($replay);
                    $(".form").scrollTop($(".form")[0].scrollHeight);


                    // }, 3000)



                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/input-onlinegiftools.png'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);


                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        };



        $(document).on("click", ".g1no", function() {
            $value = 'No';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://www.shareicon.net/data/2016/05/24/770136_man_512x512.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/g22"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {







                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/input-onlinegiftools.png'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);

                    }, 10);

                    setTimeout(function() {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });

        //file upload 



        // $(document).on("click", ".title4", function() {
        //     $value1 = $("#number44").val();

        //     let valid = phoneValidation($value1);
        //     if (!valid) {
        //         alert("Please enter valid phone number");
        //         return false;
        //     }

        //     $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value1 + ' </p></div><div class="icon"><img src="https://www.shareicon.net/data/2016/05/24/770136_man_512x512.png" alt="" class="src" height="40px"></div></div>';
        //     $(".form").append($msg);

        //     $('.removebtn').remove();
        //     // start ajax code
        //     $.ajax({
        //         url: '<?php echo base_url() . "home/g4"; ?>',
        //         type: 'POST',
        //         data: 'number=' + $value1 + '&name2=' + $value1 + '&name3=' + $value1 + '&name4=' + $value1,
        //         success: function(result) {
        //             $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
        //             $(".form").append($replay);
        $(".form").scrollTop($(".form")[0].scrollHeight);

        //             // when chat goes down the scroll bar automatically comes to the bottom
        //             $(".form").scrollTop($(".form")[0].scrollHeight);
        //         }
        //     });
        // });



        $(document).on("click", ".g4data", function() {
            $value1 = $("#number").val();



            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value1 + ' </p></div><div class="icon"><img src="https://www.shareicon.net/data/2016/05/24/770136_man_512x512.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/g4"; ?>',
                type: 'POST',
                data: 'name1=' + $value1 + '&name2=' + $value1 + '&name3=' + $value1 + '&name4=' + $value1,
                success: function(result) {




                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/input-onlinegiftools.png'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);

                    }, 10);

                    setTimeout(function() {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });

        $(document).on("click", ".g5data", function() {
            $value1 = $("#number").val();



            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value1 + ' </p></div><div class="icon"><img src="https://www.shareicon.net/data/2016/05/24/770136_man_512x512.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/g5"; ?>',
                type: 'POST',
                data: 'name1=' + $value1 + '&name2=' + $value1 + '&name3=' + $value1 + '&name4=' + $value1,
                success: function(result) {





                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/input-onlinegiftools.png'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);

                    }, 10);

                    setTimeout(function() {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });
    </script>

    <!-- Track -->
    <script>
        function h70() {

            $value = 'Track';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://www.shareicon.net/data/2016/05/24/770136_man_512x512.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "Home/traking2"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {



                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/input-onlinegiftools.png'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);

                    }, 10);

                    setTimeout(function() {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        };

        $(document).on("click", ".trakingdata", function() {
            $value1 = $("#name1").val();



            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value1 + ' </p></div><div class="icon"><img src="https://www.shareicon.net/data/2016/05/24/770136_man_512x512.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/trakingdata3"; ?>',
                type: 'POST',
                data: 'name1=' + $value1 + '&name2=' + $value1 + '&name3=' + $value1 + '&name4=' + $value1,
                success: function(result) {



                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/input-onlinegiftools.png'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);

                    }, 10);

                    setTimeout(function() {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });
    </script>

    <!-- Participate in Contest -->
    <script>
        function h80() {

            $value = 'type';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://www.shareicon.net/data/2016/05/24/770136_man_512x512.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "Home/Participateyesview"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {



                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/input-onlinegiftools.png'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);

                    }, 10);

                    setTimeout(function() {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        };



        $(document).on("click", ".Participatedata", function() {
            $value1 = $("#name1").val();



            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value1 + ' </p></div><div class="icon"><img src="https://www.shareicon.net/data/2016/05/24/770136_man_512x512.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/Participatedata3"; ?>',
                type: 'POST',
                data: 'name1=' + $value1 + '&name2=' + $value1 + '&name3=' + $value1 + '&name4=' + $value1,
                success: function(result) {




                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/input-onlinegiftools.png'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);

                    }, 10);

                    setTimeout(function() {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });
    </script>

    <!-- Further Queries -->
    <script>
        function h90() {

            $value = 'Further Queries';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://www.shareicon.net/data/2016/05/24/770136_man_512x512.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "Home/Further"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {




                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/input-onlinegiftools.png'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);

                    }, 10);

                    setTimeout(function() {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="http://allcampaigns.in/PIISafetyTicketingTool/assets/security_bot.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        };
    </script>




    <?php $payload = ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1; ?>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
            $(document).on('submit', '.upload_form2', function(e) {

                var num = "<?php echo ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1; ?>";
                var t_id = "<?php echo ($this->session->userdata('t_id')) ? $this->session->userdata('t_id') : 1; ?>";
                var Name = "<?php echo ($this->session->userdata('Name')) ? $this->session->userdata('Name') : 1; ?>";
                //alert(num);
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
                                $replay = '<div class="bot-inbox inbox"><div class="msg-header"><p class="text-break"> Thank You  ' + Name + '  for submitting your  incredible Idea, You will be notified Soon.You tracking number is ' + t_id + ' </p></div></div>';
                                $(".form").append($replay);
                                $(".form").scrollTop($(".form")[0].scrollHeight);

                                $(".form").scrollTop($(".form")[0].scrollHeight);
                            } else if (res.success == false) {
                                $('#msg').html(res.msg);
                                $('#divMsg').show();

                            }
                        }
                    });
                }
            });
        });




        function phoneValidation(phone) {

            if (phone.length == 10 && phone != '') {
                return true;
            } else {
                return false;
            }
        }

        function numberKey(evt) {
            var ASCIICode = (evt.which) ? evt.which : evt.keyCode
            if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
                return false;
            return true;
        }
    </script>

    <!-- image upload -->

    <script>
        //$('.gifid').css("display","none")
        // $('.msg-header').hide(0);
        // setTimeout(function() {
        //     $('.msg-header').show();
        // }, 3000);




        // $('.gifid').show(0);
        // setTimeout(function() {
        //     $('.gifid').hide();
        // }, 3000);
    </script>


    <script>
        function myFunction() {
            var value = document.getElementById("year_pick").value;
            if (value) {
                h60();

            }
        }

        function myFunctions() {
            var values = document.getElementById("year_picks").value;
            if (values) {
                selectvalue();

            }
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





    <script>
   $('.float').click(function(){
    $('ul').toggle();
   })
    </script>


</body>

</html>