<?php
  $title = "Page Not Found";
  $title_url = "#";
  require 'layout/top-header.php';
?>
<body class="reading-pages">
<?php 
  include 'layout/sub-header.php';
  require 'layout/header.php';
  $subtitle = "";
  require 'layout/site-map.php';
  // DFA($council_members);
?>
<style>
        .box {
            text-align: center;
            background-color: #fff;
            padding: 100px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        } */
        h1 {
            font-size: 100px;
            margin: 0;
            color: #343a40;
        }
        p {
            font-size: 20px;
            color: #6c757d;
        }
        .page-title {
          padding: 0;
        }
</style>
  <!-- ------------- Main Content Start---------------------- -->
    <div class="box">
        <h1>404</h1>
        <p>Oops! The page you are looking for doesn't exist or has been moved.</p>
        <a href="./">Go to Homepage</a>
    </div>
  <!-- ------------- Main Content End---------------------- -->
  <!-- ***** Footer  ***** -->
  <?php require 'layout/footer.php'; ?>
  </body>
</html>