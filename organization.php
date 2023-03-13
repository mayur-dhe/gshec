<?php
  $title = "Organization";
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
                    <li><span class="wd_1 ht_1 tree-title2-color">Vice-Chairperson</span>
                      <ul>
                        <li><span class="wd_1 ht_1 tree-title3-color">State Council</span>
                          <ul>
                            <li><span class="wd_1 tree-title4-color">Executivr Director (SHEC) & Director <br> (Higher EDucation)</span>
                              <ul>
                                <li>
                                  <ul>
                                    <li><span class="ht_2 tree-title2-color">Center for Research, Development & Innovation</span>
                                      <ul>
                                        <li><span class="ht_1 tree-title3-color">Professor</span>
                                          <ul>
                                            <li><span class="ht_1 tree-title4-color">Associate Professor</span>
                                              <ul>
                                                <li><span class="ht_1">Assistant Professor</span></li>
                                              </ul>
                                            </li>
                                          </ul>
                                        </li>
                                      </ul>
                                    </li>
                                    <li><span class="ht_2 tree-title2-color">Center for Teaching, Learning & Educational Technology</span>
                                      <ul>
                                        <li><span class="ht_1 tree-title3-color">Professor</span>
                                          <ul>
                                            <li><span class="ht_1 tree-title4-color">Associate Professor</span>
                                              <ul>
                                                <li><span class="ht_1">Assistant Professor</span></li>
                                              </ul>
                                            </li>
                                          </ul>
                                        </li>
                                      </ul>
                                    </li>
                                    <li><span class="ht_2 tree-title2-color">State Project <br> Directorate</span>
                                      <ul>
                                        <li><span class="ht_2">State Project <br> Director</span>
                                          <ul>
                                            <li><span>Annual Accounts and Audit</span></li>
                                          </ul>
                                        </li>
                                      </ul>
                                    </li>
                                    <li><span class="ht_2 tree-title2-color">Finance <br> Officer</span>
                                      <ul>
                                        <li><span>Assistant Director (SHEC)</span>
                                          <ul>
                                            <li><span class="ht_1">UDC</span>
                                              <ul>
                                                <li><span class="ht_1">LDC</span></li>
                                              </ul>
                                            </li>
                                          </ul>
                                        </li>
                                      </ul>
                                    </li>
                                    <li><span class="ht_2 tree-title2-color">Administrative <br> Officer</span>
                                      <ul>
                                        <li><span>Assistant Director (SHEC)</span>
                                          <ul>
                                            <li><span class="ht_1">UDC</span>
                                              <ul>
                                                <li><span class="ht_1">LDC</span></li>
                                              </ul>
                                            </li>
                                          </ul>
                                        </li>
                                      </ul>
                                    </li>
                                    <li><span class="wd_2 ht_2 tree-title2-color">Teaching Support <br> Group</span>
                                      <ul>
                                        <li><span>Software Development</span></li>
                                        <li><span>Management Information System</span></li>
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