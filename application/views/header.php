/**
 * Created by PhpStorm.
 * User: geetha
 * Date: 16/5/16
 * Time: 12:48 PM
 */
<html>

<head>
    <title> Welcome to Programming</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
<!--<link rel="stylesheet" type="text/css" media="all" href="<?php /*echo base_url(); */?>css/style.css" />
-->
    <link rel="stylesheet" href="/public/Bootstrap/css/bootstrap.min.css" />
</head>
<body>
<div class="container-fluid clearfix">
    <!--nav class="navbar navbar-default" role="navigation"-->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <!--header section -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="logo">
                    <img src="/public/images/logo.png" alt="Formget logo" style="width: 120px;">
                </div>            </div>
            <!-- menu section -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="home">Home</a></li>
                    <li><a href="about">About</a></li>
                    <li><a href="signin">Sign in</a></li>
                    <li><a href="signup">Sign up</a></li>
                    <li><a href="contact">Support</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>