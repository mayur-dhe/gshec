<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mayur Naik">
    <title><?php echo $title; ?> - GSHEC</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <!-- <link href="vendor/aos/aos.css" rel="stylesheet"> -->

    <!-- custom font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">


    <!-- courosal -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
    <style>
        * {
            font-family: 'Roboto';
        }
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }
        
        .text-black li strong,
        .text-black li,
        .text-black h2,
        .text-black h3,
        .text-black h4,
        .text-black h5,
        .text-black p {
            color: #363636;
        }

        /* image corousal */
        img {
        vertical-align: middle;
        }

        /* Position the image container (needed to position the left and right arrows) */
        .container {
        position: relative;
        }

        /* Hide the images by default */
        .mySlides {
        display: none;
        }

        /* Add a pointer when hovering over the thumbnail images */
        .cursor {
        cursor: pointer;
        }

        /* Next & previous buttons */
        .prev,
        .next {
        cursor: pointer;
        position: absolute;
        top: 40%;
        width: auto;
        padding: 16px;
        margin-top: -50px;
        color: white;
        font-weight: bold;
        font-size: 20px;
        border-radius: 0 3px 3px 0;
        user-select: none;
        -webkit-user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
        right: 0;
        border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
        }

        /* Number text (1/3 etc) */
        .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
        }

        /* Container for image text */
        .caption-container {
        text-align: center;
        background-color: #222;
        padding: 2px 16px;
        color: white;
        }

        .row:after {
        content: "";
        display: table;
        clear: both;
        }

        /* Six columns side by side */
        .column {
        float: left;
        width: 5%;
        padding: 2px;
        }
        .column img{
            object-fit: cover;
            height: 100%;
        }
        /* Add a transparency effect for thumnbail images */
        .demo {
        opacity: 0.6;
        }

        .active,
        .demo:hover {
        opacity: 1;
        }
    </style>
</head>

<?php include 'functions/custom.php'; ?>