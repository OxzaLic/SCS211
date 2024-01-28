<!DOCTYPE html>
<html lang="en">

<!---CSS--->

<head>
    <title>หลักสูตรวิทยาการคอมพิวเตอร์</title>
    <?php include("layouts/cs-css.php") ?>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <!---header--->
    <?php include("layouts/cs-header.php") ?>

    <header class="site-navbar js-sticky-header site-navbar-target justify-content-center" role="banner">
        <div class="container ">
            <div class="row">
                <div class="col-10 col-md-10 col-lg-10 col-xl-4">
                    <div class="site-logo">
                        <a href="index.php" class="text-left">
                            <div class="" style="display: flex; flex-direction:row;">
                                <img class="d-lg-block d-md-none d-sm-none d-none my-1" src="http://cs.vru.ac.th/images/css.png" height="70">
                                <div class="d-lg-block" style="line-height: 0.3;   padding-top: 18px;     padding-left: 10px;">
                                    <h1 style="margin-bottom:0px; font-size: 0.8em;" class="text-dark">วิทยาการคอมพิวเตอร์</h1>
                                    <small class="" style="font-size: 0.35em; color:#777;">มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์</small>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="d-none d-md-none col-lg-8 d-xl-block">
                    <nav class="site-navigation position-relative text-right" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li class="nav-link">
                                <a class="nav-link" href="index.php">หน้าหลัก</a>
                            </li>
                            <li class="nav-link dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    เกี่ยวกับหลักสูตร
                                </a>
                                <div class="dropdown-menu" aria-labelledby="aboutDropdown">
                                    <a class="dropdown-item" href="history.php">ประวัติหลักสูตร</a>
                                    <a class="dropdown-item" href="structure.php">โครงสร้างหลักสูตร</a>
                                    <a class="dropdown-item" href="Description.php">รายละเอียดหลักสูตร</a>
                                    <a class="dropdown-item" href="Management.php">โครงสร้างบริหารหลักสูตร</a>
                                    <a class="dropdown-item" href="policy.php">นโยบายด้านคุณภาพ</a>
                                    <a class="dropdown-item" href="philosophy.php">ปรัชญา วิสัยทัศน์ พันธกิจ</a>
                                </div>
                            </li>
                            <li class="nav-link dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="teamDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    อาจารย์และบุคลากร
                                </a>
                                <div class="dropdown-menu dropright" aria-labelledby="teamDropdown">
                                    <a class="dropdown-item" href="teacher.php">อาจารย์ประจำหลักสูตร</a>
                                    <a class="dropdown-item" href="support.php">บุคลากรประจำหลักสูตร</a>
                                    <a class="dropdown-item" href="publication.php">ผลงานตีพิมพ์ของหลักสูตร</a>
                                    <a class="dropdown-item" href="Training.php">แจ้งการอบรมพัฒนาความรู้</a>
                                    <a class="dropdown-item" href="staff.php">ระเบียบแบบฟอร์มสำหรับอาจารย์และเจ้าหน้าที่</a>
                                    <a class="dropdown-item dropdown-toggle" href="#" id="qaDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ประกันคุณภาพหลักสูตร</a>
                                    <ul class="dropdown-menu dropdown" aria-labelledby="qaDropdown">
                                        <li><a class="dropdown-item" href="http://www.cheqa.mua.go.th/">CHE QA 3D ONLINE SYSTEM</a></li>
                                        <li><a class="dropdown-item" href="report.php">รายงานการประกันคุณภาพการศึกษา</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-link dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="studentDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    นักศึกษา
                                </a>
                                <div class="dropdown-menu" aria-labelledby="studentDropdown">
                                    <a class="dropdown-item" href="tcas.php">รับสมัครนักศึกษาใหม่</a>
                                    <a class="dropdown-item" href="Student Guide.php">คู่มือนักศึกษา</a>
                                    <a class="dropdown-item" href="Project Guide.php">คู่มือโครงงานนักศึกษา</a>
                                    <a class="dropdown-item" href="Internship location.php">สถานที่ฝึกสหกิจ</a>
                                    <a class="dropdown-item" href="Internship documents.php">เอกสารฝึกงาน</a>
                                    <a class="dropdown-item" href="recommended.php">แจ้งข้อเสนอแนะ/ร้องเรียน</a>
                                </div>
                            </li>
                            <li class="nav-link dropdown ">
                                <a class="nav-link dropdown-toggle" href="#" id="othersDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    อื่นๆ
                                </a>
                                <div class="dropdown-menu dropright" aria-labelledby="othersDropdown">
                                    <a class="dropdown-item " href="activities.php">กิจกรรมหลักสูตร</a>

                                    <a class="dropdown-item dropdown-toggle" href="#" id="supportDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">สิ่งสนับสนุนการเรียนรู้</a>
                                    <ul class="dropdown-menu dropdown" aria-labelledby="supportDropdown">
                                        <li><a class="dropdown-item" href="LAB.php">ห้องปฏิบัติการคอมพิวเตอร์</a></li>
                                        <li><a class="dropdown-item" href="roomtable.php">ตารางการใช้ห้องปฏิบัติการคอมพิวเตอร์</a></li>
                                        <li><a class="dropdown-item" href="equipment.php">อุปกรณ์</a></li>
                                    </ul>

                                </div>
                            </li>
                            <li class="nav-link ">
                                <a class="nav-link" href="contact.php">ติดต่อเรา</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-2 col-md-2 d-l-block d-inline-block d-xl-none ml-md-0 py-3">
                    <a href="#" class="site-menu-toggle js-menu-toggle text-dark float-right"><span class="icon-menu h3"></span></a>
                </div>
            </div>

        </div>
    </header>
    <!-- start of content , see end in footer -->
    <div class="content">
        <div class="container">
            <br />
            <h2>&starf;&nbsp;ติดต่อเรา</h2>
            <hr>

            <style>
                #map_container {
                    height: 250px;
                    margin-bottom: 10px;
                }

                #map {
                    width: 100%;
                    height: 100%;
                }
            </style>
            <div id="map_container">
                <div id="map"></div>
            </div>
            <script>
                var map;

                function initMap() {
                    map = new google.maps.Map(document.getElementById('map'), {
                        center: {
                            lat: 14.132371,
                            lng: 100.616594
                        },
                        zoom: 15
                    });
                    var marker = new google.maps.Marker({
                        position: new google.maps.LatLng(14.132371, 100.616594),
                        map: map,
                        title: 'หลักสูตรวิทยาการคอมพิวเตอร์ มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ฯ'
                    });
                }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoZlRLPlMJTXe38xtlDFiyI9rj6BoG10M&callback=initMap" async defer></script>

            <p></p>
            <h4>หลักสูตรวิทยาการคอมพิวเตอร์</h4>
            <p>&nbsp; &nbsp; &nbsp; &nbsp;อาคาร 75 ปี วไลยอลงกรณ์ </p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp;มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp;เลขที่ 1 หมู่ 20 ถนนพหลโยธิน กม. 48 ต.คลองหนึ่ง อ.คลองหลวง จ.ปทุมธานี 13180</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp;โทรศัพท์ 0-2529-0674-7 ต่อ 365 โทรสาร 02-909-3029</p>
            &nbsp; &nbsp; &nbsp; &nbsp;<a href="https://www.facebook.com/profile.php?id=100008113098809&fref=ts"><img src="http://cs.vru.ac.th/images/facebook-icon-preview-1.png" width="50" height="50"> FACEBOOK หลักสูตรวิทยาการคอมพิวเตอร์</a>
        </div>
    </div>
    <!-- end of content, see start in header -->
    <style>
        .site-footer,
        .footer-heading,
        .site-footer .p {
            font-size: 16px;
            text-align: center !important;
            background: #8e24aa !important;
            /*color: #fff!important;*/
        }

        .site-footer p,
        .site-footer a {
            color: #bbb !important;
        }

        .site-footer .border-top {
            border-top: 1px solid #bbb !important;
        }

        .site-footer {
            padding: 0 !important;
            padding-top: 4em !important;
            padding-bottom: 4em !important;

        }
    </style>
    <div class="container-fluid bg-light  p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 pl-4">
                    <h3>สมัครเรียนกับเรา</h3>
                    <h5 id="schedule">สอบถามข้อมูลการรับสมัครเพิ่มเติม</h5>
                    <p>โทร. 02-909-1432 ต่อ 322 หรือ 323</p>
                </div>
                <div class="col-md-6 text-right">
                    <div class="py-4">
                        <a class="btn btn-primary" href="tcas.php">รายะละเอียดสมัครเรียน</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!---footer--->
    <?php include("layouts/cs-footer.php") ?>


    <!---Script--->
    <!-- Cookie Consent by https://www.cookiewow.com -->
    <?php include("layouts/cs-script.php") ?>

</body>

</html>