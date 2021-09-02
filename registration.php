<html class="loading" lang="en" data-textdirection="ltr">

<head>


    <link rel="icon" href="app-assets/images/logo/favicon-32x32.png" sizes="32x32">
    <link rel="icon" href="app-assets/images/logo/favicon-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon" href="app-assets/images/logo/favicon-apple.png">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/flag-icon/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/dropify/css/dropify.min.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN THEME  CSS-->
    <!-- END THEME  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/vertical-gradient-menu-template/materialize.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/vertical-gradient-menu-template/style.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/custom/custom.css">
    <!-- END Custom CSS-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu 2-columns menu-expanded fixed-navbar registration_form" data-open="click" data-menu="vertical-modern-menu" data-color="" data-col="2-columns">
    <!--
    //////////////////////////////////////////////////////////////////////////// -->
    <!-- START HEADER -->
    <header class="page-topbar" id="header">

        <nav class="whitenav">
            <div class="nav-wrapper">
                <img class="ajulogo" src="./asset/img/logo.png" alt="AJU Logo">
                <ul class="right">
                    <li><a class="dropdown-trigger whitenav" href="#!" data-target="dropdown1">dkljfdjhg<i class="material-icons right">arrow_drop_down</i></a>
                        <div id="dropdown1" class="dropdown-content" tabindex="0">
                            <a href="logout" class="whitenav" tabindex="0">Log Out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!--
            <div class="row">
                <div class="col s6 m6 l6 margin-left"><img src="app-assets/images/logo/logo.jpg" /></div>
            </div>
        -->
    </header>
    <!-- END HEADER -->
    <!-- START MAIN -->
    <div>
        <!-- START WRAPPER -->
        <div class="row">
            <section class="content-wrapper-before">
                <!--start container-->
                <div class="col s12">
                    <div class="row">
                        <div class="col s12">
                            <form id="registration_submit" action="conformation.php" method="POST" enctype="multipart/form-data">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-header">
                                            <h3 class="card-title">Program Details</h3>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col l4 m4 s12">
                                                <p>Academic *</p>
                                                <div class="select-wrapper">
                                                    <select name="academic" id="academic" tabindex="-1">
                                                        <option value="" disabled="" selected="">Choose your option</option>
                                                        <option id="apply_for" value="UG Courses">UG Courses</option>
                                                        <option id="apply_for" value="PG Courses">PG Courses</option>
                                                        <option id="apply_for" value="Diploma Courses">Diploma Courses</option>
                                                        <option id="apply_for" value="Doctorate Courses">Doctorate Courses</option>
                                                        <option id="apply_for" value="Lateral Entry Courses">Lateral Entry Courses</option>
                                                    </select>
                                                </div>

                                                <div class="error" id="academic1_err"></div>
                                            </div>
                                            <div class="input-field col l4 m4 s12 hide" id="course_box">
                                                <p>Course *</p>
                                                <div class="ug_class hide">
                                                    <div class="select-wrapper">
                                                        <ul id="select-options-32b1ec12-590a-bac5-20fc-4fd3463d0087" class="dropdown-content select-dropdown" tabindex="0">
                                                            <li class="disabled selected" id="select-options-32b1ec12-590a-bac5-20fc-4fd3463d00870" tabindex="0"><span>Choose your option</span></li>
                                                            <li id="select-options-32b1ec12-590a-bac5-20fc-4fd3463d00871" tabindex="0"><span>BBA</span></li>
                                                            <li id="select-options-32b1ec12-590a-bac5-20fc-4fd3463d00872" tabindex="0"><span>BBA with CIMA</span></li>
                                                            <li id="select-options-32b1ec12-590a-bac5-20fc-4fd3463d00873" tabindex="0"><span>BBA with Wiley</span></li>
                                                            <li id="select-options-32b1ec12-590a-bac5-20fc-4fd3463d00874" tabindex="0"><span>BBA with ACCA</span></li>
                                                            <li id="select-options-32b1ec12-590a-bac5-20fc-4fd3463d00875" tabindex="0"><span>B.COM(H)</span></li>
                                                            <li id="select-options-32b1ec12-590a-bac5-20fc-4fd3463d00876" tabindex="0"><span>B. Com (H) with CIMA</span></li>
                                                            <li id="select-options-32b1ec12-590a-bac5-20fc-4fd3463d00877" tabindex="0"><span>B.Com with ACCA</span></li>
                                                            <li id="select-options-32b1ec12-590a-bac5-20fc-4fd3463d00878" tabindex="0"><span>BCA</span></li>
                                                            <li id="select-options-32b1ec12-590a-bac5-20fc-4fd3463d00879" tabindex="0"><span>BCA with IoA.</span></li>
                                                            <li id="select-options-32b1ec12-590a-bac5-20fc-4fd3463d008710" tabindex="0"><span>B.PHARMA</span></li>
                                                            <li id="select-options-32b1ec12-590a-bac5-20fc-4fd3463d008711" tabindex="0"><span>B.TECH ( MECHANICAL )</span></li>
                                                            <li id="select-options-32b1ec12-590a-bac5-20fc-4fd3463d008712" tabindex="0"><span>B.TECH ( COMPUTER SCIENCE )</span></li>
                                                            <li id="select-options-32b1ec12-590a-bac5-20fc-4fd3463d008713" tabindex="0"><span>B.TECH ( ELECTRICAL &amp; ELECTRONICS )</span></li>
                                                            <li id="select-options-32b1ec12-590a-bac5-20fc-4fd3463d008714" tabindex="0"><span>B.TECH ( CIVIL )</span></li>
                                                            <li id="select-options-32b1ec12-590a-bac5-20fc-4fd3463d008715" tabindex="0"><span>B.OPTOMETRY</span></li>
                                                            <li id="select-options-32b1ec12-590a-bac5-20fc-4fd3463d008716" tabindex="0"><span>B.A ENGLISH ( HONS.)</span></li>
                                                            <li id="select-options-32b1ec12-590a-bac5-20fc-4fd3463d008717" tabindex="0"><span>B.A FASHION DESIGN ( HONS.)</span></li>
                                                            <li id="select-options-32b1ec12-590a-bac5-20fc-4fd3463d008718" tabindex="0"><span>B.A JOURNALISM &amp; MASS COMMUNICATION ( HONS.)</span></li>
                                                            <li id="select-options-32b1ec12-590a-bac5-20fc-4fd3463d008719" tabindex="0"><span>B.SC - BIOTECHNOLOGY</span></li>
                                                            <li id="select-options-32b1ec12-590a-bac5-20fc-4fd3463d008720" tabindex="0"><span>BBA (LLB) HONS.</span></li>
                                                        </ul><svg class="caret" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7 10l5 5 5-5z"></path>
                                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                                        </svg><select name="course" id="course" onchange="change_course(this.value)" tabindex="-1">
                                                            <option value="" disabled="" selected="">Choose your option</option>
                                                            <option value="BBA">BBA</option>
                                                            <option value="BBA with CIMA">BBA with CIMA</option>
                                                            <option value="BBA with Wiley">BBA with Wiley</option>
                                                            <option value="BBA with ACCA">BBA with ACCA</option>
                                                            <option value="B.COM(H)">B.COM(H)</option>
                                                            <option value="B. Com (H) with CIMA">B. Com (H) with CIMA</option>
                                                            <option value=" B.Com with ACCA">B.Com with ACCA</option>
                                                            <option value="BCA">BCA</option>
                                                            <option value=" BCA with IoA.">BCA with IoA.</option>
                                                            <option value="B.PHARMA">B.PHARMA</option>
                                                            <option value="B.TECH ( MECHANICAL )">B.TECH ( MECHANICAL )</option>
                                                            <option value="B.TECH ( COMPUTER SCIENCE )">B.TECH ( COMPUTER SCIENCE )</option>
                                                            <option value="B.TECH ( ELECTRICAL &amp; ELECTRONICS  )">B.TECH ( ELECTRICAL &amp; ELECTRONICS )</option>
                                                            <option value="B.TECH ( CIVIL )">B.TECH ( CIVIL )</option>
                                                            <option value="B.OPTOMETRY">B.OPTOMETRY</option>
                                                            <option value="B.A ENGLISH ( HONS.)">B.A ENGLISH ( HONS.)</option>
                                                            <option value="B.A FASHION DESIGN ( HONS.)">B.A FASHION DESIGN ( HONS.)</option>
                                                            <option value="B.A JOURNALISM &amp; MASS COMMUNICATION ( HONS.)">B.A JOURNALISM &amp; MASS COMMUNICATION ( HONS.)</option>
                                                            <option value="B.SC - BIOTECHNOLOGY">B.SC - BIOTECHNOLOGY</option>
                                                            <option value="BBA (LLB) HONS.">BBA (LLB) HONS.</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="pg_class hide">
                                                    <div class="select-wrapper">
                                                        <ul id="select-options-a63a5eb0-c120-8944-5003-a1f73fdd85d6" class="dropdown-content select-dropdown" tabindex="0">
                                                            <li class="disabled selected" id="select-options-a63a5eb0-c120-8944-5003-a1f73fdd85d60" tabindex="0"><span>Choose your option</span></li>
                                                            <li id="select-options-a63a5eb0-c120-8944-5003-a1f73fdd85d61" tabindex="0"><span>MBA</span></li>
                                                            <li id="select-options-a63a5eb0-c120-8944-5003-a1f73fdd85d62" tabindex="0"><span>MCA</span></li>
                                                        </ul><svg class="caret" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7 10l5 5 5-5z"></path>
                                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                                        </svg><select name="course" id="course" onchange="change_course(this.value)" tabindex="-1">
                                                            <option value="" disabled="" selected="">Choose your option</option>
                                                            <option value="MBA">MBA</option>
                                                            <option value="MCA">MCA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="diploma_class  hide">
                                                    <div class="select-wrapper">
                                                        <ul id="select-options-f30c6b03-7960-8b6a-2e56-daa892069a68" class="dropdown-content select-dropdown" tabindex="0">
                                                            <li class="disabled selected" id="select-options-f30c6b03-7960-8b6a-2e56-daa892069a680" tabindex="0"><span>Choose your option</span></li>
                                                            <li id="select-options-f30c6b03-7960-8b6a-2e56-daa892069a681" tabindex="0"><span>DIPLOMA ( MECHANICAL )</span></li>
                                                            <li id="select-options-f30c6b03-7960-8b6a-2e56-daa892069a682" tabindex="0"><span>DIPLOMA ( COMPUTER SCIENCE )</span></li>
                                                            <li id="select-options-f30c6b03-7960-8b6a-2e56-daa892069a683" tabindex="0"><span>DIPLOMA ( ELECTRICAL &amp; ELECTRONICS )</span></li>
                                                            <li id="select-options-f30c6b03-7960-8b6a-2e56-daa892069a684" tabindex="0"><span>DIPLOMA ( CIVIL )</span></li>
                                                            <li id="select-options-f30c6b03-7960-8b6a-2e56-daa892069a685" tabindex="0"><span>D.PHARMA</span></li>
                                                        </ul><svg class="caret" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7 10l5 5 5-5z"></path>
                                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                                        </svg><select name="course" id="course" onchange="change_course(this.value)" tabindex="-1">
                                                            <option value="" disabled="" selected="">Choose your option</option>
                                                            <option value="DIPLOMA ( MECHANICAL )">DIPLOMA ( MECHANICAL )</option>
                                                            <option value="DIPLOMA ( COMPUTER SCIENCE )">DIPLOMA ( COMPUTER SCIENCE )</option>
                                                            <option value="DIPLOMA ( ELECTRICAL &amp; ELECTRONICS )">DIPLOMA ( ELECTRICAL &amp; ELECTRONICS )</option>
                                                            <option value="DIPLOMA ( CIVIL )">DIPLOMA ( CIVIL )</option>
                                                            <option value="D.PHARMA">D.PHARMA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="doctorate_class  hide">
                                                    <div class="select-wrapper">
                                                        <ul id="select-options-203ad44f-4bf0-c751-9071-4ce60dc97cd3" class="dropdown-content select-dropdown" tabindex="0">
                                                            <li class="disabled selected" id="select-options-203ad44f-4bf0-c751-9071-4ce60dc97cd30" tabindex="0"><span>Choose your option</span></li>
                                                            <li id="select-options-203ad44f-4bf0-c751-9071-4ce60dc97cd31" tabindex="0"><span>Ph.D ( Commerce &amp; Management)</span></li>
                                                            <li id="select-options-203ad44f-4bf0-c751-9071-4ce60dc97cd32" tabindex="0"><span>Ph.D (English)</span></li>
                                                            <li id="select-options-203ad44f-4bf0-c751-9071-4ce60dc97cd33" tabindex="0"><span>Ph.D (Mass Communication)</span></li>
                                                        </ul><svg class="caret" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7 10l5 5 5-5z"></path>
                                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                                        </svg><select name="course" id="course" onchange="change_course(this.value)" tabindex="-1">
                                                            <option value="" disabled="" selected="">Choose your option</option>
                                                            <option value="Ph.D ( Commerce &amp; Management)">Ph.D ( Commerce &amp; Management)</option>
                                                            <option value="Ph.D (English)">Ph.D (English)</option>
                                                            <option value="Ph.D (Mass Communication)">Ph.D (Mass Communication)</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="lateral_class  hide">
                                                    <div class="select-wrapper">
                                                        <ul id="select-options-56d518a1-1170-3dcd-2790-3232b936925e" class="dropdown-content select-dropdown" tabindex="0">
                                                            <li class="disabled selected" id="select-options-56d518a1-1170-3dcd-2790-3232b936925e0" tabindex="0"><span>Choose your option</span></li>
                                                            <li id="select-options-56d518a1-1170-3dcd-2790-3232b936925e1" tabindex="0"><span>DIPLOMA (MECHANICAL)</span></li>
                                                            <li id="select-options-56d518a1-1170-3dcd-2790-3232b936925e2" tabindex="0"><span>DIPLOMA (COMPUTER SCIENCE)</span></li>
                                                            <li id="select-options-56d518a1-1170-3dcd-2790-3232b936925e3" tabindex="0"><span>DIPLOMA (ELECTRICAL &amp; ELECTRONICS)</span></li>
                                                            <li id="select-options-56d518a1-1170-3dcd-2790-3232b936925e4" tabindex="0"><span>DIPLOMA (CIVIL)</span></li>
                                                            <li id="select-options-56d518a1-1170-3dcd-2790-3232b936925e5" tabindex="0"><span>BCA</span></li>
                                                            <li id="select-options-56d518a1-1170-3dcd-2790-3232b936925e6" tabindex="0"><span>B.TECH (MECHANICAL)</span></li>
                                                            <li id="select-options-56d518a1-1170-3dcd-2790-3232b936925e7" tabindex="0"><span>B.TECH (ELECTRICAL &amp; ELECTRONICS)</span></li>
                                                            <li id="select-options-56d518a1-1170-3dcd-2790-3232b936925e8" tabindex="0"><span>B.TECH (COMPUTER SCIENCE)</span></li>
                                                            <li id="select-options-56d518a1-1170-3dcd-2790-3232b936925e9" tabindex="0"><span>B.TECH (CIVIL)</span></li>
                                                            <li id="select-options-56d518a1-1170-3dcd-2790-3232b936925e10" tabindex="0"><span>B.OPTOMETRY</span></li>
                                                            <li id="select-options-56d518a1-1170-3dcd-2790-3232b936925e11" tabindex="0"><span>B.PHARMA</span></li>
                                                        </ul><svg class="caret" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7 10l5 5 5-5z"></path>
                                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                                        </svg><select name="course" id="course" onchange="change_course(this.value)" tabindex="-1">
                                                            <option value="" disabled="" selected="">Choose your option</option>
                                                            <option value="DIPLOMA (MECHANICAL)">DIPLOMA (MECHANICAL)</option>
                                                            <option value="DIPLOMA (COMPUTER SCIENCE)">DIPLOMA (COMPUTER SCIENCE)</option>
                                                            <option value="DIPLOMA (ELECTRICAL &amp; ELECTRONICS)">DIPLOMA (ELECTRICAL &amp; ELECTRONICS)</option>
                                                            <option value="DIPLOMA (CIVIL)">DIPLOMA (CIVIL)</option>
                                                            <option value="BCA">BCA</option>
                                                            <option value="B.TECH (MECHANICAL)">B.TECH (MECHANICAL)</option>
                                                            <option value="B.TECH (ELECTRICAL &amp; ELECTRONICS)">B.TECH (ELECTRICAL &amp; ELECTRONICS)</option>
                                                            <option value="B.TECH (COMPUTER SCIENCE)">B.TECH (COMPUTER SCIENCE)</option>
                                                            <option value="B.TECH (CIVIL)">B.TECH (CIVIL)</option>
                                                            <option value="B.OPTOMETRY">B.OPTOMETRY</option>
                                                            <option value="B.PHARMA">B.PHARMA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="error" id="course_err"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-header">
                                            <h3 class="card-title">Personal Details</h3>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12 m12 l4">
                                                <h6>Your Name *</h6>
                                                <input type="text" placeholder="Your Name" name="username" id="username" class="" value="dkljfdjhg">
                                                <div class="error" id="username_err"></div>
                                            </div>

                                            <div class="input-field col s12 m12 l4">
                                                <h6 for="mobile_no">Mobile Number *</h6>
                                                <input placeholder="Mobile Number" id="mobile" name="mobile" type="tel" class="validate" value="9304612012" disabled="">
                                                <div class="error" id="mobile_err"></div>
                                            </div>

                                            <div class="input-field col s12 m12 l4">
                                                <h6 for="email">Email *</h6>
                                                <input placeholder="Email" name="email" id="email" type="email" class="validate" value="hdksjfhdskjhf@jdkfhdkj.kjghkf" disabled="">
                                                <div class="error" id="email_err"></div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="input-field col s12 m12 l4">
                                                <h6 for="alternate_mobileid">Alternate Mobile No.</h6>
                                                <input placeholder="Alternate Mobile No." id="alt_mobile" name="alt_mobile" type="tel" class="validate" value="">
                                                <div class="error" id="alt_mobile_err"></div>
                                            </div>

                                            <div class="input-field col s12 m12 l4">
                                                <h6 for="first_name">Gender *</h6>
                                                <div class="select-wrapper">
                                                    <svg class="caret" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7 10l5 5 5-5z"></path>
                                                        <path d="M0 0h24v24H0z" fill="none"></path>
                                                    </svg><select id="gender" name="gender" tabindex="-1">
                                                        <option value="" disabled="" selected="">-Select-</option>
                                                        <option id="gender" value="Male">Male</option>
                                                        <option id="gender" value="Female">Female</option>
                                                        <option id="gender" value="Transgender">Transgender</option>
                                                    </select>
                                                </div>
                                                <div class="error" id="gender_err"></div>
                                            </div>

                                            <div class="input-field col s12 m12 l4">
                                                <h6 for="dob">Date Of Birth *</h6>
                                                <input placeholder="Placeholder" id="dob" name="dob" type="text" class="datepicker" value="">
                                                <div class="error" id="dob_err"></div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="input-field col s12 m12 l4">
                                                <h6 for="father_nameid">Father's Name *</h6>
                                                <input placeholder="Father's Name" id="father_name" name="father_name" type="text" class="validate" value="">
                                                <div class="error" id="father_name_err"></div>
                                            </div>


                                            <div class="input-field col s12 m12 l4">
                                                <h6 for="transportation_opted">Transportation opted *</h6>
                                                <div class="select-wrapper">
                                                    <svg class="caret" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7 10l5 5 5-5z"></path>
                                                        <path d="M0 0h24v24H0z" fill="none"></path>
                                                    </svg><select id="transportation" name="transportation" tabindex="-1">
                                                        <option value=" " disabled="" selected="">-Select-</option>
                                                        <option id="transportation_opted" value="Yes">Yes</option>
                                                        <option id="transportation_opted" value="No">No</option>
                                                    </select>
                                                </div>
                                                <div class="error" id="transportation_err"></div>
                                            </div>

                                            <div class="input-field col s12 m12 l4">
                                                <h6 for="hostel_opted">Hostel opted *</h6>
                                                <div class="select-wrapper">
                                                    <svg class="caret" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7 10l5 5 5-5z"></path>
                                                        <path d="M0 0h24v24H0z" fill="none"></path>
                                                    </svg><select id="hostel" name="hostel" tabindex="-1">
                                                        <option value="" disabled="" selected="">-Select-</option>
                                                        <option id="hostel_opted" value="Yes">Yes</option>
                                                        <option id="hostel_opted" value="No">No</option>
                                                    </select>
                                                </div>
                                                <div class="error" id="hostel_err"></div>
                                            </div>
                                        </div>

                                        <div class="row">

                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-header">
                                            <h3 class="card-title">Address Details</h3>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12 m12 l4">
                                                <h6 for="address1">Address 1 *</h6>
                                                <input placeholder="Address 1" id="address_1" name="address_1" type="text" class="validate" value="">
                                                <div class="error" id="address_1_err"></div>
                                            </div>

                                            <div class="input-field col s12 m12 l4">
                                                <h6 for="address2">Address 2</h6>
                                                <input placeholder="Address 2" id="address_2" name="address_2" type="text" class="validate" value="">
                                            </div>

                                            <div class="input-field col s12 m12 l4">
                                                <h6 for="address3">Address 3</h6>
                                                <input placeholder="Address 3" id="address_3" name="address_3" type="text" class="validate" value="">
                                            </div>

                                            <div class="input-field col s12 m12 l4">
                                                <h6 for="district">District *</h6>
                                                <input placeholder="District" id="district" name="district" type="text" class="validate" value="">
                                                <div class="error" id="district_err"></div>
                                            </div>

                                            <div class="input-field col s12 m12 l4">
                                                <h6 for="country">Country *</h6>
                                                <div class="select-wrapper">
                                                    <svg class="caret" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7 10l5 5 5-5z"></path>
                                                        <path d="M0 0h24v24H0z" fill="none"></path>
                                                    </svg><select id="country" name="country" tabindex="-1">
                                                        <option value="" disabled="" selected="">-Select-</option>
                                                        <option id="country" value="India">India</option>
                                                    </select>
                                                </div>
                                                <div class="error" id="country_err"></div>
                                            </div>

                                            <div class="input-field col s12 m12 l4">
                                                <h6 for="state1">State/Province *</h6>
                                                <div class="select-wrapper">
                                                    <svg class="caret" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7 10l5 5 5-5z"></path>
                                                        <path d="M0 0h24v24H0z" fill="none"></path>
                                                    </svg><select id="state" name="state" tabindex="-1">
                                                        <option id="state1" value="" disabled="" selected="">-Select-</option>
                                                        <option id="state1" value="Andhra Pradesh">Andhra Pradesh</option>
                                                        <option id="state1" value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                                        <option id="state1" value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                        <option id="state1" value="Assam">Assam</option>
                                                        <option id="state1" value="Bihar">Bihar</option>
                                                        <option id="state1" value="Chandigarh">Chandigarh</option>
                                                        <option id="state1" value="Chhattisgarh">Chhattisgarh</option>
                                                        <option id="state1" value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                                        <option id="state1" value="Daman and Diu">Daman and Diu</option>
                                                        <option id="state1" value="Delhi">Delhi</option>
                                                        <option id="state1" value="Lakshadweep">Lakshadweep</option>
                                                        <option id="state1" value="Puducherry">Puducherry</option>
                                                        <option id="state1" value="Goa">Goa</option>
                                                        <option id="state1" value="Gujarat">Gujarat</option>
                                                        <option id="state1" value="Haryana">Haryana</option>
                                                        <option id="state1" value="Himachal Pradesh">Himachal Pradesh</option>
                                                        <option id="state1" value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                        <option id="state1" value="Jharkhand">Jharkhand</option>
                                                        <option id="state1" value="Karnataka">Karnataka</option>
                                                        <option id="state1" value="Kerala">Kerala</option>
                                                        <option id="state1" value="Madhya Pradesh">Madhya Pradesh</option>
                                                        <option id="state1" value="Maharashtra">Maharashtra</option>
                                                        <option id="state1" value="Manipur">Manipur</option>
                                                        <option id="state1" value="Meghalaya">Meghalaya</option>
                                                        <option id="state1" value="Mizoram">Mizoram</option>
                                                        <option id="state1" value="Nagaland">Nagaland</option>
                                                        <option id="state1" value="Odisha">Odisha</option>
                                                        <option id="state1" value="Punjab">Punjab</option>
                                                        <option id="state1" value="Rajasthan">Rajasthan</option>
                                                        <option id="state1" value="Sikkim">Sikkim</option>
                                                        <option id="state1" value="Tamil Nadu">Tamil Nadu</option>
                                                        <option id="state1" value="Telangana">Telangana</option>
                                                        <option id="state1" value="Tripura">Tripura</option>
                                                        <option id="state1" value="Uttar Pradesh">Uttar Pradesh</option>
                                                        <option id="state1" value="Uttarakhand">Uttarakhand</option>
                                                        <option id="state1" value="West Bengal">West Bengal</option>
                                                    </select>
                                                </div>
                                                <div class="error" id="state_err"></div>
                                            </div>

                                            <div class="input-field col s12 m12 l4">
                                                <h6 for="postal">Postal code *</h6>
                                                <input placeholder="Postal Code" type="text" id="postal_code" name="postal_code" class="validate" value="">
                                                <div class="error" id="postal_code_err"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-header">
                                            <h3 class="card-title">Education Details</h3>
                                        </div>

                                        <div class="row">
                                            <div class="input-field col s12 m3 l3">
                                                <h6 for="class">Last Class Attended *</h6>
                                                <div class="select-wrapper">
                                                    <svg class="caret" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7 10l5 5 5-5z"></path>
                                                        <path d="M0 0h24v24H0z" fill="none"></path>
                                                    </svg><select id="last_class" name="last_class" tabindex="-1">
                                                        <option id="class" value="" disabled="" selected="">-Select-</option>
                                                        <option id="class" value="10th">10th</option>
                                                        <option id="class" value="12th">12th</option>
                                                        <option id="class" value="Graduation">Graduation</option>
                                                        <option id="class" value="Post Graduation">Post Graduation</option>
                                                        <option id="class" value="Diploma">Diploma</option>
                                                        <option id="class" value="ITI">ITI</option>
                                                    </select>
                                                </div>
                                                <div class="error" id="last_class_err"></div>
                                            </div>

                                            <div class="input-field col s12 m3 l3">
                                                <h6 for="school_name">School Name *</h6>
                                                <input placeholder="" id="school_name" name="school_name" type="text" value="">
                                                <div class="error" id="school_name_err"></div>
                                            </div>

                                            <div class="input-field col s12 m3 l3">
                                                <h6 for="result">Result Declared *</h6>
                                                <div class="select-wrapper">
                                                    <svg class="caret" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7 10l5 5 5-5z"></path>
                                                        <path d="M0 0h24v24H0z" fill="none"></path>
                                                    </svg><select id="result_declared" name="result_declared" tabindex="-1">
                                                        <option value="">-Select-</option>
                                                        <option id="result" value="Yes">Yes</option>
                                                        <option id="result" value="No">No</option>
                                                    </select>
                                                </div>
                                                <div class="error" id="result_declared_err"></div>
                                            </div>

                                            <div id="percentage" class="input-field col s12 m3 l3" style="display: none;">
                                                <h6 for="percentage">Percentage of Marks *</h6>
                                                <input placeholder="" type="number" maxlength="5" min="1" max="100" id="result_percentage" name="result_percentage" value="">
                                                <div class="error" id="result_percentage_err"></div>
                                            </div>

                                            <div id="admitcard" class="input-field col s12 m3 l3">
                                                <h6 for="admit_card_no">Admit Card No. *</h6>
                                                <input placeholder="" id="admit_card_no" name="admit_card_no" type="text" value="">
                                                <div class="error" id="admit_card_no_err"></div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div id="admitcard_upload" class="input-field col s12 m6 l6">
                                                <h6>Admit Card *</h6>
                                                <div class="dropify-wrapper">
                                                    <div class="dropify-message"><span class="file-icon"></span>

                                                    </div>
                                                    <div class="dropify-loader"></div>
                                                    <div class="dropify-errors-container">
                                                        <ul></ul>
                                                    </div><input type="file" id="admit_card" name="admit_card" class="dropify" data-max-file-size="2M"><button type="button" class="dropify-clear">Remove</button>
                                                    <div class="dropify-preview"><span class="dropify-render"></span>
                                                        <div class="dropify-infos">
                                                            <div class="dropify-infos-inner">
                                                                <p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p>
                                                                <p class="dropify-infos-message">Drag and drop or click to replace</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span></span>
                                                <div class="error" id="admit_card_err"></div>
                                                <input type="hidden" name="admit_card_hidden" id="admit_card_hidden" value="">
                                            </div>

                                            <div id="marksheet_upload" class="input-field col s12 m6 l6" style="display: none;">
                                                <h6>Marksheet *</h6>
                                                <div class="dropify-wrapper">
                                                    <div class="dropify-message"><span class="file-icon"></span>
                                                        <p>Drag and drop a file here or click</p>
                                                        <p class="dropify-error">Ooops, something wrong appended.</p>
                                                    </div>
                                                    <div class="dropify-loader"></div>
                                                    <div class="dropify-errors-container">
                                                        <ul></ul>
                                                    </div><input type="file" id="result_marksheet" name="result_marksheet" class="dropify" data-max-file-size="2M"><button type="button" class="dropify-clear">Remove</button>
                                                    <div class="dropify-preview"><span class="dropify-render"></span>
                                                        <div class="dropify-infos">
                                                            <div class="dropify-infos-inner">
                                                                <p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p>
                                                                <p class="dropify-infos-message">Drag and drop or click to replace</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span></span>
                                                <div class="error" id="result_marksheet_err"></div>
                                                <input type="hidden" name="result_marksheet_hidden" id="result_marksheet_hidden" value="">
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-header">
                                            <h3 class="card-title">Entrance Exam Details</h3>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12 m12 l4">
                                                <h6 for="name_entrance">Appeared For any Entrance Exam *</h6>
                                                <div class="select-wrapper">
                                                    <svg class="caret" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7 10l5 5 5-5z"></path>
                                                        <path d="M0 0h24v24H0z" fill="none"></path>
                                                    </svg><select id="entrance_exam_status" name="entrance_exam_status" tabindex="-1">
                                                        <option value="" disabled="" selected="">-Select-</option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                                <div class="error" id="entrance_exam_status_err"></div>
                                            </div>

                                            <div id="exam_nametext" class="input-field col s12 m12 l4" style="display: none;">
                                                <h6 for="exam_nametext">Name of the exam *</h6>
                                                <input placeholder="" id="entrance_exam_name" name="entrance_exam_name" type="text" value="">
                                                <div class="error" id="entrance_exam_name_err"></div>
                                            </div>

                                            <div id="scoretext" class="input-field col s12 m12 l4" style="display: none;">
                                                <h6 for="scoretext">Score</h6>
                                                <input placeholder="" id="entrance_exam_score" name="entrance_exam_score" type="text" value="">
                                                <div class="error" id="entrance_exam_score_err"></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-header">
                                            <h3 class="card-title">Declaration</h3>
                                        </div>

                                        <div class="row">
                                            <div class="input-field col s12 m12 l12">
                                                <p>
                                                    <label>
                                                        <input type="checkbox" id="declare_1" name="declare_1" value="1">
                                                        <span>I declare that I meet all the eligibility criteria of admission as per the university guideline. In case of failure to do so or , in case of non-submission of required document by scheduled date given by university , my admission shall stand cancelled &amp; fees paid will be forfeited</span>
                                                    </label>
                                                </p>
                                                <div class="error" id="declare_1_err"></div>
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12 m12 l12">
                                                <p>
                                                    <label>
                                                        <input type="checkbox" id="declare_2" name="declare_2" value="1">
                                                        <span>I declare that the information given above is true and to the best of my knowledge and belief ; and if any of its found to be incorrect at any time during the program , my admission shall stand cancelled and I shall be liable to such disciplinary action as may be decided by the university</span>
                                                    </label>
                                                </p>
                                                <div class="error" id="declare_2_err"></div>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="course_hide" id="course_hide" value="">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <button class="btn waves-effect waves-light" type="submit" name="action">
                                            Save &amp; Next
                                            <i class="material-icons right">send</i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <div class="center-align red-text">For any query feel free to contact @ 7283000220</div>
            <br>
            <!-- END CONTENT -->
            <!--
              //////////////////////////////////////////////////////////////////////////// -->
        </div>
        <!-- END WRAPPER -->
    </div>
    <!-- END MAIN -->
    <!--
      //////////////////////////////////////////////////////////////////////////// -->
    <!-- START FOOTER -->
    <footer class="page-footer footer footer-static footer-dark gradient-45deg-indigo-purple gradient-shadow navbar-border navbar-shadow"></footer>
    <!-- END FOOTER -->
    <!-- ================================================
      Scripts
      ================================================ -->
    <!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
    <script src="app-assets/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="app-assets/vendors/dropify/js/dropify.min.js"></script>
    <script src="app-assets/vendors/jquery-validation/jquery.validate.min.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="app-assets/js/plugins.js"></script>
    <script src="app-assets/js/search.js"></script>
    <script src="app-assets/js/custom/custom-script.js"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="app-assets/js/scripts/form-file-uploads.js"></script>
    <script src="app-assets/js/scripts/form-validation.js"></script>


    <div class="modal datepicker-modal" id="modal-fb7341e7-fdf4-92b2-dd44-d1ef2eb353c9" tabindex="0">
        <div class="modal-content datepicker-container">
            <div class="datepicker-date-display"><span class="year-text"></span><span class="date-text"></span></div>
            <div class="datepicker-calendar-container">
                <div class="datepicker-calendar"></div>
                <div class="datepicker-footer"><button class="btn-flat datepicker-clear waves-effect" style="visibility: hidden;" type="button"></button>
                    <div class="confirmation-btns"><button class="btn-flat datepicker-cancel waves-effect" type="button">Cancel</button><button class="btn-flat datepicker-done waves-effect" type="button">Ok</button></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>