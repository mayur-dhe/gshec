<?php 
// $allowedPages = [
//     "acts-and-rules.php",
//     "archives.php",
//     "blank.php",
//     "council-members.php",
//     "downloads.php",
//     "education-dashboard.php",
//     "enrol-me.php",
//     "gallery-view-initiatives.php",
//     "gallery-view.php",
//     "gallery.php",
//     "human-resource.php",
//     "index.php",
//     "initiative.php",
//     "initiatives.php",
//     "national-education-policy.php",
//     "nep-action-plan.php",
//     "nep-salient-features.php",
//     "nep-status-and-plan.php",
//     "news.php",
//     "objectives.php",
//     "organization.php",
//     "research-development-innovation.php",
//     "rti.php",
//     "rusa.php",
//     "software-development-cell-projects.php",
//     "software-development-cell.php",
//     "teaching-learning&educational-technology.php",
//     "tenders.php",
//     "training-internship-placement.php",
//     "under-maintenance.php",
//     ""
// ];
// // Get the requested page
// $requestUri = $_SERVER['REQUEST_URI'];
// $page = basename($requestUri);
// // Check if the page is in the allowed list
// if (!in_array($page, $allowedPages)) {
//     // // If not, redirect to the 404 page
//     // header("Location: ./404.php");
//     // exit();
// }
// // Include the requested page
// include($page);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="institution, education, porvorim, higher education">
    <meta name="description" content="The Goa State Higher Education Council, established under Goa Act 14 of 2018 is an autonomous body with all 64 (Higher Education Institutes(HEI) under its purview.">
    <meta name="author" content="Mayur Naik">
    <title><?php echo $title; ?> - GSHEC</title>
    <link rel="icon" type="image/x-icon" href="assets/images/logo/GSHEC.ico">
    
    <script>
        if (window.self === window.top) {
            // This page is not in a frame, redirect to maintenance page
            window.location.replace("under-maintenance.php"); 
        }
    </script>
    
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
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Parisienne&family=Sacramento&family=Tangerine:wght@400;700&display=swap" rel="stylesheet">

    <!-- js library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- alert messages -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        * {
            font-family: 'Roboto';
        }
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }
        
        .textColor-black li strong,
        .textColor-black li,
        .textColor-black h2,
        .textColor-black h3,
        .textColor-black h4,
        .textColor-black h5,
        .textColor-black p {
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

        /* scroll section wise */
        /* .scroller {
            height: auto;
            overflow-y: scroll;
            scroll-snap-type: y mandatory;
            scroll-padding: 40px;
        }
        .scroller section {
            scroll-snap-align: start;
        } */
    </style>
</head>

<?php 
    include 'functions/custom.php'; 
    $isCardsPage = false;
    $isInitiativesPage = false;
    $isGalleryPage = false;
?>