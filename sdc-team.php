<?php
    $title = "team members";
    require 'layout/top-header.php';
?>
<body>
<?php 
    include 'layout/sub-header.php';
    require 'layout/header.php';
    $subtitle = "Our Team";
    require 'layout/site-map.php'; 
?>





<!-- -------------------------------------------------------- -->
<!-- ------------- Main Content Start---------------------- -->
<!-- -------------------------------------------------------- -->
    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team sdc-team">
        <div class="container">
            <div class="row">
                <?php 
                    include 'data/teams.php';
                    foreach ($members as $key => $value) {
                ?>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="member">
                        <img src="<?php echo $value['image']; ?>" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4><?php echo $value['name']; ?></h4>
                                <span><?php echo $value['designation']; ?></span>
                                <p><?php echo $value['role']; ?></p>
                            </div>
                            <div class="social">
                                <!-- <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- End Our Team Section -->




    <!-- ***** Footer  ***** -->
    <?php require 'layout/footer.php'; ?>

</body>
</html>