<?php
  $title = "Organization";
  $title_url = "#";
  $page = "2";
  require 'layout/top-header.php';
?>
<body class="reading-pages">
<?php 
  include 'layout/sub-header.php';
  require 'layout/header.php';
  // $subtitle = "Organization";
  require 'layout/site-map.php'; 
  include 'data/council.php';
  // DFA($council_members);
?>
  <!-- ------------- Main Content Start---------------------- -->
  <section class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12" >
              <h2 class="content-title">Organization Chart</h2>
              <!-- <div class="image fit">
                <img src="<?php echo $org_chart['image']?>" alt="<?php echo $org_chart['alt']?>" style="object-fit: contain;" />
              </div> -->

              <ul class="tree">
                <li> <span class="wd_1 ht_1 tree-title-color">Hon. Chief Minister(Chairperson)</span>
                  <ul>
                    <li><span class="wd_1 ht_1 tree-title3-color">Vice-Chairperson</span>
                      <ul>
                        <li><span class="wd_1 ht_1 tree-title4-color">State Council</span>
                          <ul>
                            <li><span class="wd_1 tree-title2-color">Executive Director (SHEC) & <br> Director (Higher EDucation)</span>
                              <ul>
                                <li>
                                  <ul>
                                    <li><span class="ht_2 tree-title1-color">Center for Research, Development & Innovation</span>
                                      <ul>
                                        <li><span class="ht_1 tree-title3-color">Professor</span>
                                          <ul>
                                            <li><span class="ht_1 tree-title4-color">Associate Professor</span>
                                              <ul>
                                                <li><span class="ht_1 tree-title5-color">Assistant Professor</span></li>
                                              </ul>
                                            </li>
                                          </ul>
                                        </li>
                                      </ul>
                                    </li>
                                    <li><span class="ht_2 tree-title1-color">Center for Teaching, Learning & Education Technology</span>
                                      <ul>
                                        <li><span class="ht_1 tree-title3-color">Professor</span>
                                          <ul>
                                            <li><span class="ht_1 tree-title4-color">Associate Professor</span>
                                              <ul>
                                                <li><span class="ht_1 tree-title5-color">Assistant Professor</span></li>
                                              </ul>
                                            </li>
                                          </ul>
                                        </li>
                                      </ul>
                                    </li>
                                    <li><span class="ht_2 tree-title1-color">State Project <br> Directorate</span>
                                      <ul>
                                        <li><span class="tree-title3-color">State Project <br> Director</span>
                                          <ul>
                                            <li><span class="tree-title4-color">Annual Accounts and Audit</span></li>
                                          </ul>
                                        </li>
                                      </ul>
                                    </li>
                                    <li><span class="ht_2 tree-title1-color">Finance <br> Officer</span>
                                      <ul>
                                        <li><span class="tree-title3-color">Assistant Director (SHEC)</span>
                                          <ul>
                                            <li><span class="ht_1 tree-title4-color">Upper Division Clerk</span>
                                              <ul>
                                                <li><span class="ht_1 tree-title5-color">Lower Division Clerk</span></li>
                                              </ul>
                                            </li>
                                          </ul>
                                        </li>
                                      </ul>
                                    </li>
                                    <li><span class="ht_2 tree-title1-color">Administrative <br> Officer</span>
                                      <ul>
                                        <li><span class="tree-title3-color">Assistant Director (SHEC)</span>
                                          <ul>
                                            <li><span class="ht_1 tree-title4-color">Upper Division Clerk</span>
                                              <ul>
                                                <li><span class="ht_1 tree-title5-color">Lower Division Clerk</span></li>
                                              </ul>
                                            </li>
                                          </ul>
                                        </li>
                                      </ul>
                                    </li>
                                    <li><span class="wd_2 ht_2 tree-title1-color">Teaching Support <br> Group</span>
                                      <ul>
                                        <li><span class="tree-title3-color">Software Development</span></li>
                                        <li><span class="tree-title3-color">Management Information System</span></li>
                                      </ul>
                                    </li>
                                  </ul>
                                </li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ------------- Main Content End---------------------- -->
  <!-- ***** Footer  ***** -->
  <?php require 'layout/footer.php'; ?>
  </body>
</html>