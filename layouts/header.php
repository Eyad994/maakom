<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html class="<?php echo $body_class ?>">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $str_ttitle ?></title>
        <meta property="og:title" content="<?php echo $str_ttitle ?>">
        <meta property="og:image" content="<?php echo $dir_files_images.'logo.png' ?>">
        <meta property="og:description" content="<?php echo $str_web_desc ?>">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="http://code.jquery.com/jquery-1.12.4.js"></script>   
        <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="http://cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>
    <script>$( function() {
        $( "#date_news_search" ).datepicker();
      
    
  } );</script>
        <link href="<?php echo $dir_css ?>main.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $dir_css ?>rtl.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
        <link href="<?php echo $dir_css ?>sweetalert.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $dir_css ?>animate.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="<?php echo $body_class ?>">
        <div id="div_main_content">
        