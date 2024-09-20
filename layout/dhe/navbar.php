    <div class="header">
        <!--Accessibility Bar Start  -->
        <div class="container-fluid p-0 overlay text-white text-center bg-p">
            <div class="fixed-top">
                <div class="top-nav">
                    <!-- Skip to Main Content -->
                    <div class="skip-content">
                        <ul>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo $dhePath ?>/resource/getPage/aishe#maincontent" style="color: black;" id="skip">Skip to Main
                                    content</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Links and Google Search -->
                    <div class="top-right">
                        <ul class="portalLinks">
                            <li><a class="text-color" style="color: black;" href="<?php echo $dhePath ?>/resource/getPage/archives" id="archive">Archives</a></li>
                            <li><a class="text-color" style="color: black;" href="<?php echo $dhePath ?>/resource/getPage/contactuss" id="cont">Contact</a></li>
                            <li><a class="text-color" style="color:  black;" href="<?php echo $dhePath ?>/resource/getPage/sitemap" id="sitemap">SiteMap</a></li>
                            <li><a class="text-color" style="color:  black;" href="<?php echo $dhePath ?>/complaint/" id="complain">Complain</a></li>
                            <li><a class="text-color" style="color:  black;" href="<?php echo $dhePath ?>/resource/getPage/helps" id="help">Help</a></li>
                        </ul>
                    </div>

                    <!-- Google Search -->
                    <div class="col-md-3 col-xs-3 text-left" id="googlsearch">
                        <div class="gcse-search"></div>
                    </div>
                </div>
            </div>
        </div>

        <nav id="top-nav-main" class="navbar navbar-expand-lg navbar-light bg-light header-sticky">
            <div class="container">
                <a class="navbar-brand">
                    <a href="<?php echo $dhePath ?>"><img src="./assets/images/logo-dhe/dhe_logo_white.png" id="test" width="75" height="95" style="margin-right: 200px;"></a>
                </a>
                <!--<a class="navbar-brand dark-logo logo" href=""><img src="/static/img/dhe_logo_new.png" width="500" height="178"></a>-->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item has-children click">
                            <a class="nav-link" href="#" id="about" tabindex="1">About Us</a>
                            <ul class="sub-menu" id="aboutMenu">
                                <li class="no-child " id="overvw"><a href="<?php echo $dhePath ?>/resource/getPage/overview">Overview</a></li>
                                <li class="no-child " id="vision"><a href="<?php echo $dhePath ?>/resource/getPage/aims">Vision, Mission and
                                        Objectives</a></li>
                                <!-- <li class=" no-child" id="cmmsg"><a href="<?php echo $dhePath ?>/resource/getPage/cmsg">CM's Message</a></li> -->
                                <li class=" no-child" id="directormsg"><a href="<?php echo $dhePath ?>/resource/getPage/dirmsgs">Director's
                                        Message</a></li>
                                <li class=" no-child" id="statsb"><a href="<?php echo $dhePath ?>/resource/getPage/statauto">Statutory
                                        Bodies</a></li>
                                <li class=" no-child" id="citizenc"><a href="<?php echo $dhePath ?>/resource/getPage/citizencharts">Citizen
                                        Charter</a></li>
                                <li class=" no-child" id="insti"><a href="<?php echo $dhePath ?>/institute/getinstitut/">Institutes</a></li>
                                <li class=" no-child" id="pgo"><a href="<?php echo $dhePath ?>/resource/getPage/grievances">Public Grievances
                                        Officer</a></li>
                            </ul>
                        </li>

                        <li class="nav-item has-children click">
                            <a class="nav-link" href="#" id="hr" tabindex="2">Human Resource</a>
                            <ul class="sub-menu">

                                <li class="no-child " id="oc"><a href="<?php echo $dhePath ?>/resource/getOrganisation/">Organization
                                        Chart</a></li>
                                <!--<li  class="no-child"><a href="<?php echo $dhePath ?>/committee/getcommittees/">Committee</a></li>-->
                                <li class=" no-child" id="das"><a href="<?php echo $dhePath ?>/employee/getdhesections/">DHE Sections</a></li>
                                <li class="no-child " id="ahe"><a href="<?php echo $dhePath ?>/resource/getPage/aishe">AISHE</a></li>
                                <li class="no-child " id="rsa"><a href="<?php echo $dhePath ?>/employee/getListingrusa/">RUSA</a></li>
                                <li class=" no-child" id="sec"><a href="<?php echo $dhePath ?>/employee/getListingshec/">GSHEC</a></li>
                                <li class=" no-child" id="web"><a href="<?php echo $dhePath ?>/employee/getListingdhe/22/">Web Development
                                        Team</a></li>
                                <li class=" no-child" id="re"><a href="<?php echo $dhePath ?>/resource/recruitment/">Recruitments</a></li>
                            </ul>
                        </li>

                        <li class="nav-item has-children click">
                            <a class="nav-link" href="#" id="sas" tabindex="3">Schemes and Services</a>
                            <ul class="sub-menu">

                                <li class="no-child" id="sch"><a href="<?php echo $dhePath ?>/resource/getSchemes/">Schemes</a></li>
                                <!-- <li  class="no-child "><a href="<?php echo $dhePath ?>/research/fundListing/0">Research Funding Sources</a></li> -->
                                <li class="no-child " id="ser"><a href="<?php echo $dhePath ?>/resource/getServices/">Services</a></li>
                                <li class="no-child " id="int"><a href="<?php echo $dhePath ?>/resource/getPage/initiative">Initiatives</a>
                                </li>
                                <li class="no-child" id="adm"><a href="<?php echo $dhePath ?>/resource/admissiondata/">Admission</a></li>

                            </ul>
                        </li>

                        <li class="nav-item has-children click">
                            <a class="nav-link" href="" id="stats" tabindex="4">Proactive Disclosure</a>
                            <ul class="sub-menu">
                                <li class="no-child " id="statis"><a href="<?php echo $dhePath ?>/resource/getPage/newstatistic">Statistics</a></li>
                                <li class="no-child " id="proactive"><a href="<?php echo $dhePath ?>/resource/getPage/rti">Proactive
                                        Disclosure</a></li>
                            </ul>

                        </li>
                        <!--Opportunities in Higher Education Start  -->
                        <!-- <li class="nav-item has-children click">
                            <a class="nav-link" href="" id="edu">Higher Education</a>
                            <ul class="sub-menu">
                                <li  class="no-child " id="eduis"><a href="<?php echo $dhePath ?>/resource/getPage/highedu">Opportunities in Higher Education</a></li>         
                                
                            </ul>
                        </li> -->
                        <!-- Opportunities in Higher Education End -->
                        <!-- END SIDEBAR LINKS FOR SCHEMES PAGE -->
                    </ul>
                </div>

                <!-- <div class="language-bar" id="lang">
                    <a href="javascript:overview()" style="color:#fff; margin-left:20px;"  id="en" name="english">English | </a>
                    <a href="javascript:overview()"  style="color:#fff;" id="kok" name="konkani">कोंकणी</a>
                </div>  -->

                <!--  <div class="language-bar" id="lang">
                    <select name="language" id="languagebox" class="language-select" style="font-size: 13px;"
                      onChange="overview()">
                      <option value="english" id="en" style="font-size: 13px;">English</option>
                      <option value="konkani" id="kok" style="font-size: 13px;">कोंकणी</option>
                      <option value="marathi" id="mr" style="font-size: 13px;">मराठी</option>
                      <option value="hindi" id="hin" style="font-size: 13px;">हिंदी</option>
                    </select>
                </div>  -->

                <div class="language-bar" id="lang">
                    <select name="language" id="languagebox" class="language-select" style="font-size: 13px;">
                        <option value="en" id="en" selected style="font-size: 13px;">English</option>
                        <option value="kok" id="kok" style="font-size: 13px;">कोंकणी</option>
                        <option value="mr" id="mr" style="font-size: 13px;">मराठी</option>
                        <option value="hi" id="hin" style="font-size: 13px;">हिंदी</option>
                    </select>
                </div>
            </div>
        </nav>

        <!--Content before waves-->
        <div class="inner-header flex">
            <!--Just the logo.. Don't mind this-->
            <path fill="#FFFFFF" stroke="#000000" stroke-width="10" stroke-miterlimit="10" d="M57,283" />
            <g>
                <path fill="#fff" d="M250.4,0.8C112.7,0.8,1,112.4,1,250.2c0,137.7,111.7,249.4,249.4,249.4c137.7,0,249.4-111.7,249.4-249.4
    C499.8,112.4,388.1,0.8,250.4,0.8z M383.8,326.3c-62,0-101.4-14.1-117.6-46.3c-17.1-34.1-2.3-75.4,13.2-104.1
    c-22.4,3-38.4,9.2-47.8,18.3c-11.2,10.9-13.6,26.7-16.3,45c-3.1,20.8-6.6,44.4-25.3,62.4c-19.8,19.1-51.6,26.9-100.2,24.6l1.8-39.7		c35.9,1.6,59.7-2.9,70.8-13.6c8.9-8.6,11.1-22.9,13.5-39.6c6.3-42,14.8-99.4,141.4-99.4h41L333,166c-12.6,16-45.4,68.2-31.2,96.2	c9.2,18.3,41.5,25.6,91.2,24.2l1.1,39.8C390.5,326.2,387.1,326.3,383.8,326.3z"
                />
            </g>
            </svg>
        </div>

        <!--Waves Container-->
        <div>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                </g>
            </svg>
        </div>
        <!--Waves end-->
    </div>
    <!--Header ends-->