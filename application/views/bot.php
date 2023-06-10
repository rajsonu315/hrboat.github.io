<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>HR...</title>
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

        b{
            color:black;
        }
        body {
            font-family: Verdana, Geneva, sans-serif;
            background-color: #ccc;
            font-size: 12px
        }
        .icontext{
            background: red;
        }

        .label-container {
            position: fixed;
            bottom: 48px;
            right: 105px;
            display: table;
            visibility: hidden
        }

        .label-text {
            color: #fff;
            background: rgba(51, 51, 51, 0.5);
            display: table-cell;
            vertical-align: middle;
            padding: 10px;
            border-radius: 3px
        }

        .label-arrow {
            display: table-cell;
            vertical-align: middle;
            color: #333;
            opacity: .5
        }

        .float {
            color: #fff;
            border-radius: 50px;
            text-align: center;
            z-index: 1000;
            animation: bot-to-top 2s ease-out;
            color: red
        }

        ul {
            position: fixed;
            right: 38px;
            padding-bottom: 20px;
            top: 80px;
            z-index: 100
        }

        ul li {
            list-style: none;
            margin-bottom: 10px
        }

        ul li a {
            background-color: #f33;
            color: #fff;
            border-radius: 50px;
            text-align: center;
            box-shadow: 2px 2px 3px #999;
            width: 45px;
            height: 45px;
            display: block
        }

        .my-float {
            font-size: 24px;
            margin-top: 11px
        }

        a#menu-share+ul {
            display: none;
            animation: scale-in .5s
        }

        a#menu-share i {
            animation: rotate-in .5s
        }

        a#menu-share:hover>i {
            animation: rotate-out .5s
        }

        @keyframes bot-to-top {
            0% {
                bottom: -40px
            }

            50% {
                bottom: 40px
            }
        }

        @keyframes scale-in {
            from {
                transform: scale(0);
                opacity: 0
            }

            to {
                transform: scale(1);
                opacity: 1
            }
        }

        @keyframes rotate-in {
            from {
                transform: rotate(0deg)
            }

            to {
                transform: rotate(360deg)
            }
        }

        @keyframes rotate-out {
            from {
                transform: rotate(360deg)
            }

            to {
                transform: rotate(0deg)
            }
        }

        * {
            font-family: 'Jaldi', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box
        }

        body {
            margin: 0;
            min-height: 100vh;
            position: relative;
            z-index: 1;
            overflow: hidden;
            background-color: #fff !important
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
            opacity: .8
        }

        .wrapper .form {
            height: calc(100vh - 204px);
            position: relative;
            overflow-y: auto
        }

        .wrapper .form .inbox .icon {
            height: 40px;
            width: 40px;
            color: #fff;
            text-align: center;
            line-height: 65px;
            border-radius: 50%;
            font-size: 18px
        }

        .wrapper .form .inbox {
            width: 100%;
            align-items: baseline;
            bottom: 50px;
            display: flex
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
            background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRp5ivOeIObmkCOimQpGc78gWg5JuuNhpJH01OYYHxw4rIN0zF3fDNWj0W2IVrPC5u9izc&usqp=CAU)
        }

        .chat-screen.show-chat {
            -moz-transition: bottom .5s linear;
            -webkit-transition: bottom .5s linear;
            transition: bottom .5s linear;
            visibility: hidden;
            height: calc(100vh - 132px) !important;
            bottom: 79px;
            z-index: 9999;
            border: 4px solid #000;
            border-radius: 25px
        }

        @media only screen and (max-width: 600px) {
            .chat-screen.show-chat {
                -moz-transition: bottom .5s linear;
                -webkit-transition: bottom .5s linear;
                transition: bottom .5s linear;
                visibility: visible;
                width: calc(100vw - 29px);
                height: calc(100vh - 150px);
                bottom: 137px
            }
        }

        .chat-screen.show-chat {
            -moz-transition: bottom .5s linear;
            -webkit-transition: bottom .5s linear;
            transition: bottom .5s linear;
            visibility: hidden;
            height: calc(100vh - 184px);
            bottom: 79px;
            z-index: 9999;
            border: 4px solid #000;
            border-radius: 25px
        }

        .chat-screen .chat-header {
            border-radius: 15px 15px 0 0;
            padding: 15px;
            display: block;
            width: 100%;
            text-align: center
        }

        .chat-screen .chat-header .chat-header-title {
            display: inline-block;
            width: calc(100% - 50px);
            color: #fff;
            font-size: 14px
        }

        .chat-screen .chat-header .chat-header-option {
            display: inline-block;
            width: 44px;
            color: #fff;
            font-size: 14px;
            text-align: right
        }

        .chat-screen .chat-header .chat-header-option .dropdown .dropdown-toggle svg {
            color: #fff
        }

        .chat-screen .chat-mail {
            padding: 30px;
            display: block
        }

        .chat-screen .chat-mail input.form-control {
            border-radius: 30px;
            border: 1px solid #e1e1e1;
            color: #3b3f5c;
            font-size: 14px;
            padding: .55rem 1.25rem
        }

        .chat-screen .chat-mail input.form-control:focus {
            box-shadow: none;
            border: 1px solid #add5fc
        }

        .chat-screen .chat-mail .select2 .selection .select2-selection .select2-selection__rendered {
            border-radius: 30px;
            border: 1px solid #e1e1e1;
            height: calc(1.28em + 1.28rem + 2px);
            padding: 9px 20px;
            font-size: 14px
        }

        .chat-screen .chat-mail .select2.select2-container--open .selection .select2-selection {
            box-shadow: none;
            border-radius: 30px
        }

        .chat-screen .chat-mail button {
            background-image: linear-gradient(to right, #b73a95, #f30594, #dc22ff);
            border: none;
            padding: .58rem 1.25rem;
            transition: transform .5s ease
        }

        .chat-screen.show-chat .chat-screen .chat-mail .form-group {
            margin-bottom: 1.5rem
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
            background: #fff
        }

        .chat-screen .chat-body .chat-bubble {
            font-size: 12px;
            padding: 10px 15px;
            box-shadow: none;
            display: inline-block;
            clear: both;
            margin-bottom: 10px;
            box-shadow: 0 5px 5px rgba(0, 0, 0, 0.02)
        }

        .chat-screen .chat-body .chat-bubble.you {
            background-image: linear-gradient(to right, #673ab7, #813bcb, #9e38de, #bc32ef, #dc22ff);
            color: #fff;
            border-radius: 0 15px 15px 15px;
            align-self: flex-start;
            display: table
        }

        .chat-screen .chat-body .chat-bubble.me {
            background-image: linear-gradient(to right, #FFF, #FFF, #FFF, #FFF, #FFF);
            color: #888ea8;
            border-radius: 15px 0 15px 15px;
            float: right;
            align-self: flex-end;
            display: table
        }

        .chat-screen .chat-input {
            width: 100%;
            position: relative;
            margin-bottom: -5px
        }

        .chat-screen .chat-input input {
            width: 100%;
            background: #fff;
            padding: 15px 70px 15px 15px;
            border-radius: 0 0 15px 15px;
            resize: none;
            border-width: 1px 0 0;
            border-style: solid;
            border-color: #f8f8f8;
            color: #7a7a7a;
            font-weight: 400;
            font-size: 13px;
            transition: border-color .5s ease
        }

        .chat-screen .chat-input input:focus {
            border-color: #f9dcff
        }

        .chat-screen .chat-input input:focus+.input-action-icon a svg.feather-send {
            color: #bc32ef
        }

        .chat-screen .chat-input .input-action-icon {
            width: 61px;
            white-space: nowrap;
            position: absolute;
            z-index: 1;
            top: 15px;
            right: 15px;
            text-align: right
        }

        .chat-screen .chat-input .input-action-icon a {
            display: inline-block;
            margin-left: 5px;
            cursor: pointer
        }

        .chat-screen .chat-input .input-action-icon a svg {
            height: 17px;
            width: 17px;
            color: #a9a9a9
        }

        .chat-screen .chat-session-end {
            display: block;
            width: 100%;
            padding: 25px
        }

        .chat-screen .chat-session-end h5 {
            font-size: 17px;
            text-align: center;
            font-weight: 700;
            margin-top: 20px
        }

        .chat-screen .chat-session-end p {
            font-size: 14px;
            text-align: center;
            margin: 20px 0
        }

        .chat-screen .chat-session-end .rate-me {
            width: 120px;
            margin: 40px auto
        }

        .chat-screen .chat-session-end .rate-me .rate-bubble {
            display: inline-block;
            text-align: center;
            width: 50px
        }

        .chat-screen .chat-session-end .rate-me .rate-bubble span {
            height: 50px;
            width: 50px;
            text-align: center;
            display: block;
            line-height: 46px;
            cursor: pointer;
            transition: transform .5s ease;
            margin-bottom: 7px
        }

        .chat-screen .chat-session-end .rate-me .rate-bubble span:hover {
            transform: scale(1.1);
            transition: transform .5s ease
        }

        .chat-screen .chat-session-end .rate-me .rate-bubble.great {
            margin-right: 12px;
            color: #43cc6c
        }

        .chat-screen .chat-session-end .rate-me .rate-bubble.great span {
            background: #43cc6c;
            border-radius: 50px 50px 0 50px
        }

        .chat-screen .chat-session-end .rate-me .rate-bubble.bad {
            color: #ef4252
        }

        .chat-screen .chat-session-end .rate-me .rate-bubble.bad span {
            background: #ef4252;
            border-radius: 50px 50px 50px 0
        }

        .chat-screen .chat-session-end .transcript-chat {
            display: block;
            text-align: center;
            margin-top: 80px;
            color: #0768f8;
            text-decoration: underline;
            line-height: 20px
        }

        .chat-screen .powered-by {
            margin-top: 40px;
            text-align: center;
            font-size: 12px
        }

        .chat-bot-icon {
            position: fixed;
            bottom: 7px;
            right: 6px;
            height: 50px;
            width: 50px;
            z-index: 9999;
            border-radius: 30px;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            line-height: 50px;
            cursor: pointer;
            transition: all .5s ease
        }

        .chat-bot-icon img {
            height: 90px;
            width: 90px;
            position: absolute;
            right: -13px;
            top: -16px
        }

        .chat-bot-icon svg {
            color: #d40a0a;
            -moz-transition: all .5s linear;
            -webkit-transition: all .5s linear;
            transition: transform .5s linear;
            position: absolute;
            left: 13px;
            top: 13px;
            opacity: 0;
            z-index: -1
        }

        .chat-bot-icon svg.animate {
            -moz-transform: rotate(360deg);
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
            opacity: 1;
            z-index: 1
        }

        .iframeclick {
            display: none
        }

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
                margin: 16px !important
            }
        }

        .collapsed {
            width: 48px !important;
            height: 48px !important;
            border-radius: 24px !important;
            margin: 16px !important
        }

        .main-card {
            background: #b9b9b9;
            color: #fff;
            width: 90%;
            height: 90%;
            margin: 0;
            border-radius: 20px;
            display: flex;
            flex-direction: column;
            overflow: hidden;
            right: 21px;
            bottom: 55px;
            position: fixed;
            transition: all .5s;
            box-shadow: 0 10px 16px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
        }

        #chatbot_toggle {
            position: absolute;
            right: 0;
            border: none;
            height: 48px;
            width: 48px;
            background: linear-gradient(135deg, rgba(223, 210, 208, 1) 0%, rgba(230, 212, 205, 1) 55%, rgba(48, 27, 18, 1) 100%);
            box-shadow: 10px 10px 15px #000;
            padding: 1px;
            color: #fff;
            margin: 0 auto;
            border-radius: 50px
        }

        .main-title {
            background: linear-gradient(135deg, rgba(223, 210, 208, 1) 0%, rgba(230, 212, 205, 1) 55%, rgba(48, 27, 18, 1) 100%);
            box-shadow: 10px 10px 15px #000;
            font-size: large;
            font-weight: 700;
            display: flex;
            height: 48px
        }

        .main-title>div {
            height: 82px;
            display: flex
        }

        .main-title svg {
            height: 24px;
            margin: auto
        }

        .main-title>span {
            margin: auto auto auto 8px
        }

        .chat-area {
            display: flex;
            flex-direction: column
        }

        .input-message {
            padding: 8px 48px 8px 16px;
            flex-grow: 1;
            border: none
        }

        .input-message:focus {
            outline: none
        }

        .input-div {
            height: 48px;
            display: flex
        }

        .input-send {
            background: transparent;
            width: 48px;
            height: 48px;
            right: 0;
            border: none;
            cursor: pointer
        }

        .input-send:hover {
            background: #e6e6fa
        }

        .input-send svg {
            fill: rebeccapurple;
            margin: 11px 8px
        }

        .chat-message-div {
            display: flex
        }

        .chat-message-sent {
            background-color: #fff;
            margin: 8px 16px 8px 64px;
            padding: 8px 16px;
            animation-name: fadeIn;
            animation-iteration-count: 1;
            animation-timing-function: ease-in;
            animation-duration: 100ms;
            color: #000;
            border-radius: 8px 8px 2px 8px;
            background-color: #e6e6fa
        }

        .chat-message-received {
            background-color: #fff;
            margin: 8px 64px 8px 16px;
            padding: 8px 16px;
            animation-name: fadeIn;
            animation-iteration-count: 1;
            animation-timing-function: ease-in;
            animation-duration: 100ms;
            color: #000;
            border-radius: 8px 8px 8px 2px;
            background-color: #e6e6fa
        }

        @keyframes fadeIn {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        input[type="time"] {
            position: relative;
            padding: 10px
        }

        input[type="time"]::-webkit-calendar-picker-indicator {
            color: transparent;
            background: none;
            z-index: 1
        }

        input[type="time"]:before {
            color: transparent;
            background: #fff;
            display: block;
            font-family: 'FontAwesome';
            content: url(http://allcampaigns.in/PIISafetyTicketingTool/assets/time.png);
            transform: scale(0.3);
            position: absolute;
            right: -32px;
            color: #999
        }

        input[type="date"] {
            position: relative;
            padding: 10px
        }

        input[type="date"]::-webkit-calendar-picker-indicator {
            color: transparent;
            background: none;
            z-index: 1
        }

        input[type="date"]:before {
            color: transparent;
            background: #fff;
            display: block;
            font-family: 'FontAwesome';
            content: url(http://allcampaigns.in/PIISafetyTicketingTool/assets/calendar.png);
            transform: scale(0.3);
            position: absolute;
            right: -32px;
            color: #999
        }

        .calendar {
            position: relative;
            width: 202px;
            margin: auto
        }

        .calendars {
            margin: 5px 0;
            height: 50px
        }

        .calendars img {
            position: absolute;
            height: 48px;
            left: -50px;
            background: #fff
        }

        .form-control {
            display: block;
            width: 100%;
            height: calc(1.5em + 0.75rem + 2px);
            padding: .375rem .75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #d31a1a;
            border-radius: .25rem;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out
        }

        body::-webkit-scrollbar-thumb {
            width: 10px !important;
            background-color: red !important
        }

        .userviewbutton {
            position: relative;
            left: 50%;
            transform: translateX(-50%);
            background-color: #fff;
            color: #000;
            width: 100%;
            border: 2px solid #bb1514;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 2px;
            cursor: pointer;
            margin-top: 5px;
            border-radius: 25px
        }

        .active_user {
            background-color: #ff5252 !important
        }



        .hcs {
            display: none
        }

        .hcs+label {
       
            display: block;
    width: 200px;
    text-align: center;
    padding: 7px 2px;
    font-size: 14px;
    color: #333 !important;
    padding: 7px 32px;
    display: inline-flex;
    font-size: 12px;
    /* width: 50%; */
    /* float: left; */
    font-weight: 100;
    box-shadow: -2 0 0px 1px;
    margin: 3px 0;
    border: 1px solid #bb1514;
    color: black !important;
    border-radius: 50em;
    position: relative;
        box-shadow: inset 0 0 5px #e20702;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    font-size: 1em;
    /* padding: 0.5rem 1rem; */
    cursor: pointer;
        }

        .hcs:checked+label {
            display: inline-block;
            background-color: #2ecc71
        }

        .wrapper .form .user-inbox {
            justify-content: flex-end;
            margin: 13px 0;
            height: 37px;
            line-height: -2px;
            height: auto
        }

        label {
            display: inline-block;
            margin-bottom: .5rem;
            color: #ffff
        }

        .form .bot-inbox .msg-header p {
            color: #000000;
            background: #f1f1f1;
            border-radius: 10px;
            padding: 3px 5px;
            max-width: 88%;
            font-size: 14px;
            position: relative;
            word-break: normal;
            width: 100%;
            margin-left: 15px
        }
        .form .bot-inbox  .msg-header p::before {
  content: '';
  position: absolute;
  top: 2px;
  left: -23px;
  border-right: 26px solid #f1f1f1;
  border-bottom: 20px solid transparent;
}

        .form .user-inbox .msg-header p {
            background: #656565;
            width: 180px !important;
            color: #fff;
            right: 20px;
            position: relative;
       
            float: right;
            border-radius: 10px;
            padding: 10px;
            top: 0
        }

        .wrapper .form .inbox .msg-header {
            max-width: 100%;
            margin-left: 10px;
            width: 100%;
            margin-left: -7px
        }

        .wrapper .form {
            z-index: 77;
            /* padding-bottom: 80px; */
            /* background: linear-gradient(90deg, rgb(255 255 255) 0%, rgb(255 255 255) 100%);   */
            position: relative;
            /* background-image: url(https://www.pngkey.com/png/full/30-305595_header-pepper-robot-robot.png); */



             }

             .wrapper:after {
    position: absolute;
    content: " ";
    background-image: url(https://www.shutterstock.com/image-vector/seamless-sosial-life-icons-pattern-260nw-1054069220.jpg);
    opacity: 0.1;
    height: 100%;
    width: 100%;
    background-size: cover;
    top: 0;
    z-index: 1;
}

        @media (max-width:576px) {
            .wrapper .form {
                /* padding-bottom: 80px; */
                /* background-color: #b9b9b9; */
            }
        }

        .user-inbox .icon img {
            width: 40px;
            height: 40px;
            position: absolute;
            margin-top: -19px;
            margin-left: -34px
        }

        .radio-btn {
            margin: 4px 0;
            border-radius: 5px;
            padding: 6px
        }

        button,
        .upload_txt span {
            padding: 0 8px;
            border: 0;
            border-radius: 6px;
            color: #e64644;
            cursor: pointer;
            background: #fff;
            font-size: 23px;
            outline: none;
            overflow: hidden;
            text-overflow: ellipsis;
            font-weight: 700;
            letter-spacing: 1px
        }

        .wrapper {
            width: 100%;
            height: 100%;
            border-radius: 10px;
            border: 0 solid #ffffff00;
            border-top: 0;
            right: 0;
            margin: auto
        }

        .form .user-inbox .msg-header p {
            background: #656565;
            width: auto !important;
            color: #fff;
            right: 20px;
            position: relative;
            position: relative;
            float: right;
            border-radius: 10px;
            padding: 10px;
            top: 0
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
            transform-origin: 100% 0
        }

        .title-center {
            text-align: center
        }

        .gifid {
            position: relative;
    top: -65px;
    left: 38px;
    border-radius: 50%;
    z-index: 1;
    height: 30px;
        }

        #hideDiv {
            background: red;
            width: 400px;
            margin: 0 auto;
            color: #fff;
            padding: 10px;
            text-align: center
        }

        .timecssright {
            padding: 0 7px;
            background-color: #333;
            border-radius: 25px;
            position: relative;
            top: -19px;
            font-size: 11px
        }

        .timecssleft {
            padding: 0 7px;
            background-color: #333;
            border-radius: 25px;
            float: right;
            position: relative;
            top: -35px;
            right: 51px;
            font-size: 11px
        }

        .hrbutton {
    /* padding: 7px 0; */
    width: 100%;
    display: inline-flex;
    font-size: 12px;
    box-shadow: 0 1px 1px rgb(0 0 0 / 15%), 0 2px 2px rgb(0 0 0 / 15%), 0 4px 4px rgb(0 0 0 / 15%), 0 8px 8px rgb(0 0 0 / 15%);
    height: 33px;
    box-shadow: -2 0 0px 1px;
    border: 1px solid #bb1514;
    /* background: linear-gradient(white, white) padding-box, linear-gradient(to right, darkblue, darkorchid) border-box; */
    border-radius: 1em;
    background: #ffff;
    /* border: 1px solid transparent; */
    position: relative;
    justify-content: center;
    align-items: center;
    font-size: 1em;
    cursor: pointer;
}


        .hrbutton:hover {

            background: red;
     
        }

       .personal-d {
    padding: 0px;
    margin: 0px;
    position: static;
}
        .personal-d li {
    font-size: 14px;
    color: #000;
    margin-bottom: 6px;
}

 .personal-d li span {
    font-weight: bold;
    width: 100px;
    display: inline-block;
}

.input-send svg {
    fill: #fdfbff;
    margin: 11px 8px;
}

.input-send {
    background: #fd4242;
    width: 48px;
    height: 48px;
    position: relative;
    top: -11px;
    right: 0;
    right: -8px;
    border: none;
    cursor: pointer;
}
.input-send:hover {
    background: #fd4202;
    width: 48px;
    height: 48px;
    position: relative;
    top: -11px;
    right: 0;
    right: -8px;
    border: none;
    cursor: pointer;
}
    </style>

   

</head>

<body>


<!-- Button trigger modal -->


<!-- Modal -->












    <div class="chat-bot-icon " id="chat-bot-icon">
        <img class="iframeclick" id="iframeclick" src="https://www.pngarts.com/files/4/Robot-PNG-Transparent-Image.png" />
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
                    <img src="https://brit-idea.com/PIISafetyTicketingTool/assets/Britannia.png" alt="" class="img-fluid">
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
                                <img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">
                            </div>
                            <?php $Name = ($this->session->userdata('Name')) ? $this->session->userdata('Name') : 'test1';
                            ?>
                            <div class="msg-header ">

                                <p> HI, I am "HR Bot" , how can I help you today ?

                                </p>

                 
                                
                                <span class="timecssright">02:30  </span>

                                 <div class="myty" style="  width: 94%; line-height: 47px; ">  
                                <!-- <div class="myty"> -->
                                    <a href="#" class="badge badge-pill hrbutton  btn-outline-dark"  onclick="start1()">Work From Home,</a>
                                    <a href="#" class="badge badge-pill hrbutton  btn-outline-dark" onclick="start2()">Leave</a>

                                    <a href="#" class="badge badge-pill hrbutton  btn-outline-dark" onclick="start3()">Personal Details</a>

                                    <a href="#" class="badge badge-pill hrbutton  btn-outline-dark" onclick="start4()">Documents</a>

                                    <a href="#" class="badge badge-pill hrbutton  btn-outline-dark" onclick="start5()">Reimbursements</a>

                                    <a href="#" class="badge badge-pill hrbutton  btn-outline-dark" onclick="start6()">Holiday list</a>

                                    <a href="#" class="badge badge-pill hrbutton  btn-outline-dark" onclick="start7()">Learning Management</a>

                                    <a href="#" class="badge badge-pill hrbutton  btn-outline-dark" onclick="start8()">Salary Advance</a>
                                    <a href="#" class="badge badge-pill hrbutton  btn-outline-dark" onclick="start8()">Data protection</a>


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
            <div class="input-div" style="    height: 48px;
    bottom: 0;
    width: 100%;
    border: 1px solid red;
    position: absolute;
    display: flex;
    background: gray;
    z-index:9999" >
                <input class="input-message" disabled name="message" type="text" id="message" placeholder="Type your message ..." />
                <button class="input-send" onclick="send()">
                    <svg style="width:24px;height:24px">
                        <path d="M2,21L23,12L2,3V10L17,12L2,14V21Z" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- hr js ajax -->


    <!-- end hr ajax -->





    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>








    <script>
        function start1() {
            $value = 'Work From Home';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div> <span class="timecssleft">02:30</span>';
            $(".form").append($msg);

            $('.removebtn').remove();


            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "Home/Work_From_Home"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    setTimeout(function() {

                        $replay = '<div class="mybot  bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);



                }
            });
        };


        //2

        function start2() {
            $value = 'Leave';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div> <span class="timecssleft">02:30</span>';
            $(".form").append($msg);

            $('.removebtn').remove();


            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "Home/Leavestart"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);



                }
            });
        };
/////3

function start3() {
            $value = 'Personal Details';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div> <span class="timecssleft">02:30</span>';
            $(".form").append($msg);

            $('.removebtn').remove();


            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "Home/Personal_Detaits"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);



                }
            });
        };
/////4

function start4() {
            $value = 'Documents';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div> <span class="timecssleft">02:30</span>';
            $(".form").append($msg);

            $('.removebtn').remove();


            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "Home/Documents"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);



                }
            });
        };
/////5norequest

function start5() {
            $value = 'Reimbursements';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div> <span class="timecssleft">02:30</span>';
            $(".form").append($msg);

            $('.removebtn').remove();


            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "Home/Reimbursements"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);



                }
            });
        };


//6


function start6() {
            $value = 'Holiday list';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div> <span class="timecssleft">02:30</span>';
            $(".form").append($msg);

            $('.removebtn').remove();


            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "Home/Holiday_list"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);



                }
            });
        };

        ////////////////7\


        function start7() {
            $value = 'Learning Management';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div> <span class="timecssleft">02:30</span>';
            $(".form").append($msg);

            $('.removebtn').remove();


            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "Home/Learning_Management"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);



                }
            });
        };

        
        function start8() {
            $value = 'Salary Advance';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div> <span class="timecssleft">02:30</span>';
            $(".form").append($msg);

            $('.removebtn').remove();


            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "Home/Advance_Salary"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);



                }
            });
        };




        

        $(document).on("click", ".SalaryAdvancehome", function() {
            $value = 'Salary Advance';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div> <span class="timecssleft">02:30</span>';
            $(".form").append($msg);

            $('.removebtn').remove();


            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "Home/Advance_Salary"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);



                }
            });
        });

        

        

        


        //hr bot 1

        $(document).on("click", ".hrtest1", function() {
            $value = 'What is the leave policy?';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div> <span class="timecssleft">02:30</span>';
            $(".form").append($msg);

            $('.removebtn').remove();


            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "Home/hrtest1"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);



                }
            });
        });




        
        $(document).on("click", ".eligibility_policy2", function() {
            $value = 'What is the leave policy?';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div> <span class="timecssleft">02:30</span>';
            $(".form").append($msg);

            $('.removebtn').remove();


            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "Home/eligibility_policy2"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);



                }
            });
        });



        /////////////////////


               //hr bot 1

               $(document).on("click", ".Claim_Reimbursements", function() {
            $value = 'Claim_Reimbursements';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div> <span class="timecssleft">02:30</span>';
            $(".form").append($msg);

            $('.removebtn').remove();


            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "Home/Claim_Reimbursements"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);



                }
            });
        });






        $(document).on("click", ".next_upload_image", function() {
            $value = 'next_upload_image';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div> <span class="timecssleft">02:30</span>';
            $(".form").append($msg);

            $('.removebtn').remove();


            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "Home/next_upload_image"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);



                }
            });
        });




               //hr bot 1

               $(document).on("click", ".Reimbursement_tracker", function() {
            $value = 'Reimbursement_tracker';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div> <span class="timecssleft">02:30</span>';
            $(".form").append($msg);

            $('.removebtn').remove();


            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "Home/Reimbursement_tracker"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);



                }
            });
        });




        /////////////////////


         //hr bot 1

               $(document).on("click", ".Document_Trackerbtn", function() {
            $value = 'Document_Tracker';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div> <span class="timecssleft">02:30</span>';
            $(".form").append($msg);

            $('.removebtn').remove();


            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "Home/Document_Trackerbtn"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);



                }
            });
        });




        /////////////////////




 //hr bot 1

               $(document).on("click", ".Personal_Detaits", function() {
            $value = 'Personal_Detaits';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div> <span class="timecssleft">02:30</span>';
            $(".form").append($msg);

            $('.removebtn').remove();


            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "Home/Personal_Detaits"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);



                }
            });
        });




        /////////////////////


    //hr bot 1

               $(document).on("click", ".Personal_Detaits_Edit", function() {
            $value = 'Personal_Detaits_Edit';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div> <span class="timecssleft">02:30</span>';
            $(".form").append($msg);

            $('.removebtn').remove();


            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "Home/Personal_Detaits_Edit"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);



                }
            });
        });




        /////////////////////




     //hr bot 1

               $(document).on("click", ".Apply_WFH", function() {
            $value = 'Apply Work from home';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div> <span class="timecssleft">02:30</span>';
            $(".form").append($msg);

            $('.removebtn').remove();


            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "Home/Apply_WFH"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);



                }
            });
        });




        /////////////////////



     //hr bot 1

               $(document).on("click", ".Apply_Yes", function() {
            $value = 'Submit';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div> <span class="timecssleft">02:30</span>';
            $(".form").append($msg);

            $('.removebtn').remove();


            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "Home/Apply_Yes"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);



                }
            });
        });




        /////////////////////


 //hr bot 1

               $(document).on("click", ".Apply_No", function() {
            $value = 'No';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div> <span class="timecssleft">02:30</span>';
            $(".form").append($msg);

            $('.removebtn').remove();


            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "Home/Apply_No"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);



                }
            });
        });




        /////////////////////



 //hr bot 1

               $(document).on("click", ".WFH_Summary", function() {
            $value = 'Work from home Summary';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div> <span class="timecssleft">02:30</span>';
            $(".form").append($msg);

            $('.removebtn').remove();


            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "Home/WFH_Summary"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);



                }
            });
        });




        /////////////////////






 //hr bot 1

               $(document).on("click", ".Personal_Detaits_Thnku", function() {
            $value = 'Personal_Detaits_Thnku';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div> <span class="timecssleft">02:30</span>';
            $(".form").append($msg);

            $('.removebtn').remove();


            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "Home/Personal_Detaits_Thnku"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);



                }
            });
        });




        /////////////////////




    //hr bot salary1

               $(document).on("click", ".salary1", function() {
            $value = 'Am I eligible for salary advance ?';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div> <span class="timecssleft">02:30</span>';
            $(".form").append($msg);

            $('.removebtn').remove();


            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "Home/salary1"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);



                }
            });
        });

     /////////////////////


       //hr bot salary2

               $(document).on("click", ".salary2", function() {
            $value = 'For what reasons I can apply for the same ?';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div> <span class="timecssleft">02:30</span>';
            $(".form").append($msg);

            $('.removebtn').remove();


            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "Home/salary2"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);



                }
            });
        });

     /////////////////////  


     //hr bot salary3

               $(document).on("click", ".salary3", function() {
            $value = 'For what reasons I can apply for the same ?';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div> <span class="timecssleft">02:30</span>';
            $(".form").append($msg);

            $('.removebtn').remove();


            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "Home/salary3"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);



                }
            });
        });

     /////////////////////
     //hr bot salary4

               $(document).on("click", ".salary4", function() {
            $value = 'For what reasons I can apply for the same ?';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div> <span class="timecssleft">02:30</span>';
            $(".form").append($msg);

            $('.removebtn').remove();


            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "Home/salary4"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);



                }
            });
        });

     ///////////////////// 

     //hr bot salary5

               $(document).on("click", ".salary5", function() {
            $value = 'What is the deduction process?';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div> <span class="timecssleft">02:30</span>';
            $(".form").append($msg);

            $('.removebtn').remove();


            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "Home/salary5"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);



                }
            });
        });

     ///////////////////// 


     //hr bot salary6

               $(document).on("click", ".salary6", function() {
            $value = 'How to apply for salary advance? ';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div> <span class="timecssleft">02:30</span>';
            $(".form").append($msg);

            $('.removebtn').remove();


            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "Home/salary6"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);



                }
            });
        });

     /////////////////////

     //hr bot salary7

               $(document).on("click", ".salary7", function() {
            $value = 'What happens if I exit from the organization ?  ';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div> <span class="timecssleft">02:30</span>';
            $(".form").append($msg);

            $('.removebtn').remove();


            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "Home/salary7"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);



                }
            });
        });

     /////////////////////           

        $(document).on("click", ".Norequest", function() {
            $value = 'thanku';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div> <span class="timecssleft">02:30</span>';
            $(".form").append($msg);

            $('.removebtn').remove();


            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "Home/Norequests"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);



                }
            });
        });

        ///////////////////////111


        $(document).on("click", ".Pay_Slip", function() {
            $value = 'Pay_Slip';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div> <span class="timecssleft">02:30</span>';
            $(".form").append($msg);

            $('.removebtn').remove();


            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "Home/Pay_Slip"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);



                }
            });
        });


        
        $(document).on("click", ".submitteddattes", function() {
            $value = 'submit ';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div> <span class="timecssleft">02:30</span>';
            $(".form").append($msg);

            $('.removebtn').remove();


            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "Home/submitteddattes"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);



                }
            });
        });


        ///////////////////////2222


        $(document).on("click", ".Relieving_Letter", function() {
            $value = 'Relieving_Letter';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div> <span class="timecssleft">02:30</span>';
            $(".form").append($msg);

            $('.removebtn').remove();


            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "Home/Relieving_Letter"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);



                }
            });
        });///////////////////////3

        $(document).on("click", ".Form_16", function() {
            $value = 'Form_16';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div> <span class="timecssleft">02:30</span>';
            $(".form").append($msg);

            $('.removebtn').remove();


            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "Home/Form_16"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);



                }
            });
        });




        ///////////////////////
        $(document).on("click", ".Request_Documents", function() {
            $value = 'Request_Documents';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div> <span class="timecssleft">02:30</span>';
            $(".form").append($msg);

            $('.removebtn').remove();


            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "Home/Request_Documents"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);



                }
            });
        });
       
        /////////////////////

        //hr test 2

        $(document).on("click", ".hrtest2", function() {
            $value = 'Availabe leave';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div> <span class="timecssleft">02:30</span>';
            $(".form").append($msg);

            $('.removebtn').remove();


            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "Home/hrtest2"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);



                }
            });
        });

        //hr test 3

        $(document).on("click", ".Check_Summary", function() {
            $value = 'Check Summary.';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div> <span class="timecssleft">02:30</span>';
            $(".form").append($msg);

            $('.removebtn').remove();


            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "Home/Check_Summary"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);



                }
            });
        });








        /////////////////


        
        //hr test 3

        $(document).on("click", ".image_upload_saved", function() {
            $value = 'image upload.';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div> <span class="timecssleft">02:30</span>';
            $(".form").append($msg);

            $('.removebtn').remove();


            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "Home/image_upload_saved"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);



                }
            });
        });




        ////////////////

                
        //hr test 3


        /////////////////

                
        //hr test 3

        $(document).on("click", ".View_my_documents", function() {
            $value = 'View_my_documents.';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div> <span class="timecssleft">02:30</span>';
            $(".form").append($msg);

            $('.removebtn').remove();


            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "Home/View_my_documents"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);



                }
            });
        });
////////////////////3

        
        //hr test 3

        $(document).on("click", ".Document_Tracker", function() {
            $value = 'Document_Tracker.';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div> <span class="timecssleft">02:30</span>';
            $(".form").append($msg);

            $('.removebtn').remove();


            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "Home/Document_Tracker"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);



                }
            });
        });




        //////


        $(document).on("click", ".Applay_leave", function() {
            $value = 'Applay leave.';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div> <span class="timecssleft">02:30</span>';
            $(".form").append($msg);

            $('.removebtn').remove();


            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "Home/Applay_leave"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);



                }
            });
        });






        $(document).on("click", ".Leave_request", function() {
            $value = 'Leave request.';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div> <span class="timecssleft">02:30</span>';
            $(".form").append($msg);

            $('.removebtn').remove();


            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "Home/Leave_request"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);



                }
            });
        });







        /////////////////////


        $(document).on("click", ".eligibility_policy", function() {
            $value = 'Salary Advance Policy';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div> <span class="timecssleft">02:30</span>';
            $(".form").append($msg);

            $('.removebtn').remove();


            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "Home/eligibility_policy"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);



                }
            });
        });





        $(document).on("click", ".eligibility_policys", function() {
          
            $(".form").append($msg);

            $('.removebtn').remove();


            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "Home/eligibility_policy"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);



                }
            });
        });


        
        $(document).on("click", ".eligibilitys", function() {
            $value = 'back';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div> <span class="timecssleft">02:30</span>';
            $(".form").append($msg);

            $('.removebtn').remove();


            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "Home/eligibilitys"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);



                }
            });
        });





        
        $(document).on("click", ".dateandtimesave", function() {
            $value = ' Date .';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div> <span class="timecssleft">02:30</span>';
            $(".form").append($msg);

            $('.removebtn').remove();


            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "Home/dateandtimesave"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px"></div><div class="msg-header">' + result + '</div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                        $('.mybot').css('display', 'none');
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }, 3000);



                }
            });
        });



























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
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/Operations"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {



                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
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
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/gtest"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {





                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
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
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/RD"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {






                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
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
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/Marketing"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {




                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
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
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/MR_2_2"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {




                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
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
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/People"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {




                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
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
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);
            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/Machine"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {

                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
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
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/Machine"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {




                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
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
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/Machine"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {




                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {

                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
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
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/selectvalue"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {



                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);



                    }, 10);

                    setTimeout(function() {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
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
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/HR1"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {



                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
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
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/Sales"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {


                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
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
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/SL"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {




                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
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
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/Operations_q"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {



                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
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



            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value1 + ' </p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/Furtherdes"; ?>',
                type: 'POST',
                data: 'title=' + $value1 + '&text=' + $value1 + '&name3=' + $value1 + '&name4=' + $value1,
                success: function(result) {




                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
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
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value1 + ' </p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/Operationsdes"; ?>',
                type: 'POST',
                data: 'title=' + $value1 + '&name2=' + $value1 + '&name3=' + $value1 + '&name4=' + $value1,
                success: function(result) {



                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
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



            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value1 + ' </p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/Operations_q"; ?>',
                type: 'POST',
                data: 'Operationsdes=' + $value1 + '&name2=' + $value1 + '&name3=' + $value1 + '&name4=' + $value1,
                success: function(result) {


                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
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



            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value1 + ' </p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/dateselectthanku"; ?>',
                type: 'POST',
                data: 'Operationsdes=' + $value1 + '&name2=' + $value1 + '&name3=' + $value1 + '&name4=' + $value1,
                success: function(result) {



                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
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
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();

            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/imgselectyes"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {



                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
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
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();

            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/g5"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {


                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
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
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/Participateyesview"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {



                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
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
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/Participate2"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {





                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);


                    }, 10);

                    setTimeout(function() {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
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



        $(document).on("click", ".g1no", function() {
            $value = 'No';
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/g22"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);

                    }, 10);

                    setTimeout(function() {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
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

        //     $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value1 + ' </p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div>';
        //     $(".form").append($msg);

        //     $('.removebtn').remove();
        //     // start ajax code
        //     $.ajax({
        //         url: '<?php echo base_url() . "home/g4"; ?>',
        //         type: 'POST',
        //         data: 'number=' + $value1 + '&name2=' + $value1 + '&name3=' + $value1 + '&name4=' + $value1,
        //         success: function(result) {
        //             $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
        //             $(".form").append($replay);
        $(".form").scrollTop($(".form")[0].scrollHeight);

        //             // when chat goes down the scroll bar automatically comes to the bottom
        //             $(".form").scrollTop($(".form")[0].scrollHeight);
        //         }
        //     });
        // });



        $(document).on("click", ".g4data", function() {
            $value1 = $("#number").val();
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value1 + ' </p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/g4"; ?>',
                type: 'POST',
                data: 'name1=' + $value1 + '&name2=' + $value1 + '&name3=' + $value1 + '&name4=' + $value1,
                success: function(result) {
                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);

                    }, 10);

                    setTimeout(function() {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
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
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value1 + ' </p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/g5"; ?>',
                type: 'POST',
                data: 'name1=' + $value1 + '&name2=' + $value1 + '&name3=' + $value1 + '&name4=' + $value1,
                success: function(result) {
                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);

                    }, 10);

                    setTimeout(function() {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
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
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "Home/traking2"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);

                    }, 10);

                    setTimeout(function() {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
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



            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value1 + ' </p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/trakingdata3"; ?>',
                type: 'POST',
                data: 'name1=' + $value1 + '&name2=' + $value1 + '&name3=' + $value1 + '&name4=' + $value1,
                success: function(result) {



                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);

                    }, 10);

                    setTimeout(function() {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
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
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "Home/Participateyesview"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {



                    setTimeout(function() {

                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);

                    }, 10);

                    setTimeout(function() {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
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
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value1 + ' </p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "home/Participatedata3"; ?>',
                type: 'POST',
                data: 'name1=' + $value1 + '&name2=' + $value1 + '&name3=' + $value1 + '&name4=' + $value1,
                success: function(result) {
                    setTimeout(function() {
                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                    }, 10);
                    setTimeout(function() {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
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
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p class="text-break">' + $value + '</p></div><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" alt="" class="src" height="40px"></div></div>';
            $(".form").append($msg);

            $('.removebtn').remove();
            // start ajax code
            $.ajax({
                url: '<?php echo base_url() . "Home/Further"; ?>',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    setTimeout(function() {
                        $replay = '<div class=" mybot bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    <img src="<?php echo base_url() . 'assets/typing-texting.gif'; ?>" alt="" class="gifid" height="40px"></div><div class="msg-header">  </div></div>';
                        $(".form").append($replay);
                    }, 10);
                    setTimeout(function() {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="" class="src" height="40px">                    </div><div class="msg-header">' + result + '</div></div>';
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
        $('.float').click(function() {
            $('ul').toggle();
        })
    </script>
    






</body>

</html>