<!--
=========================================================
Material Dashboard - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Cập nhật tour
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="../../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../../assets/demo/demo.css" rel="stylesheet" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/5cd69ad435.js" crossorigin="anonymous"></script>
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="purple" data-background-color="white" data-image="../../assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo"><a href="#" class="simple-text logo-normal">
                    <img src="../../assets/img/logo.png" alt="">
                </a></div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item   ">
                        <a class="nav-link" href="../../examples/information.php">
                            <i class="material-icons">dashboard</i>
                            <p>THÔNG TIN CHUNG</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="../../examples/user.php">
                            <i class="material-icons">person</i>
                            <p>USER</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="../../examples/tour.php">
                            <i class="material-icons">content_paste</i>
                            <p> QUẢN LÝ TOUR</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="../../examples/category.php">
                            <i class="material-icons">library_books</i>
                            <p>QUẢN LÝ LOẠI TOUR</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="../../examples/comment.php">
                            <i class="far fa-comment"></i></i>
                            <p>QUẢN LÝ BÌNH LUẬN</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="../../examples/Slide.php">
                            <i class="fab fa-slideshare"></i>
                            <p>QUẢN LÝ SLIDE</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="../../examples/cart.php">
                            <i class="fas fa-shopping-cart"></i>
                            <p>QUẢN LÝ ĐƠN TOUR</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="../../examples/image.php">
                            <i class="fas fa-images"></i>
                            <p>QUẢN LÝ ẢNH</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="../../examples/contact.php">
                            <i class="fas fa-id-card-alt"></i>
                            <p>QUẢN LÝ LIÊN HỆ</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="../../examples/postnews.php">
                            <i class="far fa-newspaper"></i>
                            <p>QUẢN LÝ BÀI VIẾT</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="../../examples/voucher.php">
                            <i class="fas fa-piggy-bank"></i>
                            <p>QUẢN LÝ VOUCHER</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand uppercase" href="javascript:;">Cập nhật Tour</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end">
                        <form class="navbar-form">
                            <div class="input-group no-border">
                                <input type="text" value="" class="form-control" placeholder="Search...">
                                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                    <i class="material-icons">search</i>
                                    <div class="ripple-container"></div>
                                </button>
                            </div>
                        </form>
                        <ul class="navbar-nav">

                            <li class="nav-item dropdown">
                                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">person</i>
                                    <p class="d-lg-none d-md-block">
                                        Account
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                    <a class="dropdown-item" href="../../examples/Profile.php">Profile</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Log out</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Cập nhật tour</h4>
                                </div>
                                <div class="card-body">
                                    <?php
                                    include "../../examples/local.php";
                                    if (isset($_GET['id_tour'])) {
                                        $id = $_GET['id_tour'];
                                        $sqll = "select * from tour where id_tour = $id";
                                        // $sqll = "select tour.id_category, id_tour, name_tour, price, promotional, time_start, time_end, place_start, place_end, category.name_category, category.area, holiday, introduction, content, plan1, plan2, plan3, id_image from tour join category on tour.id_category = category.id_category where id_tour = $id";
                                        $totall = $local->query($sqll)->fetch();
                                    }
                                    ?>
                                    <form method="POST">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Mã tour (disabled) </label>
                                                    <input type="text" class="form-control" value="<?php echo $totall['id_tour'] ?>" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Tên tour</label>
                                                    <input type="text" class="form-control" id="name1" name="name_tour" value="<?php echo $totall['name_tour'] ?>" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Giá tiền</label>
                                                    <input type="number" name="price" class="form-control" id="price" value="<?php echo $totall['price'] ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Giá khuyến mãi</label>
                                                    <input type="number" class="form-control" name="promotional" value="<?php echo $totall['promotional'] ?>" id="promotional">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="">
                                                    <label class="bmd-label-floating">Giờ khởi hành</label>
                                                    <input type="time" class="form-control" id="time_start" value="<?php echo $totall['time_start'] ?>" name="time_start" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="">
                                                    <label class="bmd-label-floating">Giờ kết thúc</label>
                                                    <input type="time" class="form-control" id="time_end" value="<?php echo $totall['time_end'] ?>" name="time_end" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Địa điểm khởi hành</label>
                                                    <input type="text" class="form-control" id="place_start" value="<?php echo $totall['place_start'] ?>" name="place_start" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Địa điểm kết thúc</label>
                                                    <input type="text" class="form-control" id="place_end" value="<?php echo $totall['place_end'] ?>" name="place_end" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Mô tả ngắn</label>
                                                    <textarea name="introduction" cols="30" id="introduction" rows="10" class="form-control border" required><?php echo $totall['introduction'] ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Mô tả chi tiết</label>
                                                    <textarea name="content" cols="30" rows="10" id="content" class="form-control border" required><?php echo $totall['content'] ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Lịch trình 1</label>
                                                    <textarea name="plan1" cols="30" rows="10" id="plan1" class="form-control border" required><?php echo $totall['plan1'] ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Lịch trình 2</label>
                                                    <textarea name="plan2" cols="30" rows="10" id="plan2" class="form-control border"><?php echo $totall['plan2'] ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Lịch trình 3</label>
                                                    <textarea name="plan3" cols="30" rows="10" id="plan3" class="form-control border"><?php echo $totall['plan3'] ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Tour đặc biệt</label></br>
                                                    <label for="Yes">Yes</label>
                                                    <input type="radio" name="holiday" id="radio1" value="yes" <?php
                                                                                                                if ($totall['holiday'] == 'yes') {
                                                                                                                    echo "checked";
                                                                                                                }
                                                                                                                ?> required>
                                                    <label for="No">No</label><input type="radio" name="holiday" id="radio1" value="no" <?php
                                                                                                                                        if ($totall['holiday'] == 'no') {
                                                                                                                                            echo "checked";
                                                                                                                                        }
                                                                                                                                        ?> required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Mã ảnh</label>
                                                    <select name="image_tour" id="category" class="form-control" required>
                                                        <option value="<?php echo $totall['id_image'] ?>">
                                                            <?php echo $totall['id_image'] ?></option>
                                                        <?php
                                                        include "../../examples/local.php";
                                                        $sqll = "select * from images";
                                                        $totall = $local->query($sqll);
                                                        foreach ($totall as $values) {
                                                        ?>
                                                            <option value="<?php echo $values['id_image'] ?>">
                                                                <?php echo $values['id_image'] ?></option>
                                                        <?php  } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary pull-left" name="submit">Cập
                                            nhật</button>
                                    </form>
                                    <button type="submit" class="btn btn-primary pull-left" id="reseting">Nhập
                                        lại</button>
                                    <a href="../../examples/tour.php"> <button type="submit" class="btn btn-primary pull-left">Danh sách</button></a>
                                </div>
                                <?php
                                if (isset($_POST['submit'])) {
                                    // $id_category = $_POST['category'];
                                    $id_image = $_POST['image_tour'];
                                    $name_tour = $_POST['name_tour'];
                                    $holiday = $_POST['holiday'];
                                    $time_start = $_POST['time_start'];
                                    $time_end = $_POST['time_end'];
                                    $place_start = $_POST['place_start'];
                                    $place_end = $_POST['place_end'];
                                    $price = $_POST['price'];
                                    $promotional = $_POST['promotional'];
                                    $introduction = $_POST['introduction'];
                                    $content = $_POST['content'];
                                    $plan1 = $_POST['plan1'];
                                    $plan2 = $_POST['plan2'];
                                    $plan3 = $_POST['plan3'];
                                    if ($promotional == " ") {
                                        $promotional = 0;
                                    }
                                    $sql = "update tour set id_image = '$id_image', name_tour = '$name_tour', holiday = '$holiday', 
                                    time_start = '$time_start', time_end = '$time_end', place_start = '$place_start', place_end = '$place_end',
                                    price = '$price', promotional = '$promotional', introduction = '$introduction', content = '$content', plan1 = '$plan1',
                                    plan2 = '$plan2', plan3 = '$plan3' where id_tour = $id  ";
                                    $total = $local->prepare($sql);
                                    if ($total->execute()) {
                                        echo '<div class="text-center font-bold text-green-600" >Cập nhật thành công</div>';
                                    } else {
                                        echo '<div class="text-center font-bold text-red-600" >Cập nhật tour thất bại</div>';
                                    }
                                }

                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="copyright float-center">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>, made with <i class="material-icons">favorite</i> by
                        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script>
        var reseting = document.querySelector('#reseting');
        var category = document.querySelector('#category');
        var depature = document.querySelector('#depature');
        var timeStart = document.querySelector('#time_start');
        var timeEnd = document.querySelector('#time_end');
        var placeStart = document.querySelector('#place_start');
        var placeEnd = document.querySelector('#place_end');
        var price = document.querySelector('#price');
        var promotional = document.querySelector('#promotional');
        var introduction = document.querySelector('#introduction');
        var content = document.querySelector('#content');
        var planone = document.querySelector('#plan1');
        var plantwo = document.querySelector('#plan2');
        var planthree = document.querySelector('#plan3');
        var permission = document.getElementsByName('permission');
        reseting.addEventListener('click', () => {
            name1.value = '';
            introduction.innerHTML = '';
            content.innerHTML = '';
            planone.innerHTML = '';
            plantwo.innerHTML = '';
            planthree.innerHTML = '';
            category.value = '';
            timeStart.value = '';
            timeEnd.value = '';
            placeStart.value = '';
            placeEnd.value = '';
            price.value = '';
            promotional.value = '';
            document.getElementById('radio1').checked = false;
            document.getElementById('radio2').checked = false;
        });
    </script>
    <script src="/assets/js/core/jquery.min.js"></script>
    <script src="/assets/js/core/popper.min.js"></script>
    <script src="/assets/js/core/bootstrap-material-design.min.js"></script>
    <script src="/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!-- Plugin for the momentJs  -->
    <script src="/assets/js/plugins/moment.min.js"></script>
    <!--  Plugin for Sweet Alert -->
    <script src="/assets/js/plugins/sweetalert2.js"></script>
    <!-- Forms Validations Plugin -->
    <script src="/assets/js/plugins/jquery.validate.min.js"></script>
    <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
    <script src="/assets/js/plugins/jquery.bootstrap-wizard.js"></script>
    <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="/assets/js/plugins/bootstrap-selectpicker.js"></script>
    <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
    <script src="/assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
    <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
    <script src="/assets/js/plugins/jquery.dataTables.min.js"></script>
    <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <script src="/assets/js/plugins/bootstrap-tagsinput.js"></script>
    <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="/assets/js/plugins/jasny-bootstrap.min.js"></script>
    <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
    <script src="/assets/js/plugins/fullcalendar.min.js"></script>
    <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
    <script src="/assets/js/plugins/jquery-jvectormap.js"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="/assets/js/plugins/nouislider.min.js"></script>
    <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <!-- Library for adding dinamically elements -->
    <script src="/assets/js/plugins/arrive.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chartist JS -->
    <script src="/assets/js/plugins/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="/assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="/assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="/assets/demo/demo.js"></script>
    <script>
        $(document).ready(function() {
            $().ready(function() {
                $sidebar = $('.sidebar');

                $sidebar_img_container = $sidebar.find('.sidebar-background');

                $full_page = $('.full-page');

                $sidebar_responsive = $('body > .navbar-collapse');

                window_width = $(window).width();

                fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

                if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
                    if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                        $('.fixed-plugin .dropdown').addClass('open');
                    }

                }

                $('.fixed-plugin a').click(function(event) {
                    // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                    if ($(this).hasClass('switch-trigger')) {
                        if (event.stopPropagation) {
                            event.stopPropagation();
                        } else if (window.event) {
                            window.event.cancelBubble = true;
                        }
                    }
                });

                $('.fixed-plugin .active-color span').click(function() {
                    $full_page_background = $('.full-page-background');

                    $(this).siblings().removeClass('active');
                    $(this).addClass('active');

                    var new_color = $(this).data('color');

                    if ($sidebar.length != 0) {
                        $sidebar.attr('data-color', new_color);
                    }

                    if ($full_page.length != 0) {
                        $full_page.attr('filter-color', new_color);
                    }

                    if ($sidebar_responsive.length != 0) {
                        $sidebar_responsive.attr('data-color', new_color);
                    }
                });

                $('.fixed-plugin .background-color .badge').click(function() {
                    $(this).siblings().removeClass('active');
                    $(this).addClass('active');

                    var new_color = $(this).data('background-color');

                    if ($sidebar.length != 0) {
                        $sidebar.attr('data-background-color', new_color);
                    }
                });

                $('.fixed-plugin .img-holder').click(function() {
                    $full_page_background = $('.full-page-background');

                    $(this).parent('li').siblings().removeClass('active');
                    $(this).parent('li').addClass('active');


                    var new_image = $(this).find("img").attr('src');

                    if ($sidebar_img_container.length != 0 && $(
                            '.switch-sidebar-image input:checked').length != 0) {
                        $sidebar_img_container.fadeOut('fast', function() {
                            $sidebar_img_container.css('background-image', 'url("' +
                                new_image + '")');
                            $sidebar_img_container.fadeIn('fast');
                        });
                    }

                    if ($full_page_background.length != 0 && $(
                            '.switch-sidebar-image input:checked').length != 0) {
                        var new_image_full_page = $('.fixed-plugin li.active .img-holder').find(
                            'img').data('src');

                        $full_page_background.fadeOut('fast', function() {
                            $full_page_background.css('background-image', 'url("' +
                                new_image_full_page + '")');
                            $full_page_background.fadeIn('fast');
                        });
                    }

                    if ($('.switch-sidebar-image input:checked').length == 0) {
                        var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr(
                            'src');
                        var new_image_full_page = $('.fixed-plugin li.active .img-holder').find(
                            'img').data('src');

                        $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                        $full_page_background.css('background-image', 'url("' +
                            new_image_full_page + '")');
                    }

                    if ($sidebar_responsive.length != 0) {
                        $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
                    }
                });

                $('.switch-sidebar-image input').change(function() {
                    $full_page_background = $('.full-page-background');

                    $input = $(this);

                    if ($input.is(':checked')) {
                        if ($sidebar_img_container.length != 0) {
                            $sidebar_img_container.fadeIn('fast');
                            $sidebar.attr('data-image', '#');
                        }

                        if ($full_page_background.length != 0) {
                            $full_page_background.fadeIn('fast');
                            $full_page.attr('data-image', '#');
                        }

                        background_image = true;
                    } else {
                        if ($sidebar_img_container.length != 0) {
                            $sidebar.removeAttr('data-image');
                            $sidebar_img_container.fadeOut('fast');
                        }

                        if ($full_page_background.length != 0) {
                            $full_page.removeAttr('data-image', '#');
                            $full_page_background.fadeOut('fast');
                        }

                        background_image = false;
                    }
                });

                $('.switch-sidebar-mini input').change(function() {
                    $body = $('body');

                    $input = $(this);

                    if (md.misc.sidebar_mini_active == true) {
                        $('body').removeClass('sidebar-mini');
                        md.misc.sidebar_mini_active = false;

                        $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

                    } else {

                        $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

                        setTimeout(function() {
                            $('body').addClass('sidebar-mini');

                            md.misc.sidebar_mini_active = true;
                        }, 300);
                    }

                    // we simulate the window Resize so the charts will get updated in realtime.
                    var simulateWindowResize = setInterval(function() {
                        window.dispatchEvent(new Event('resize'));
                    }, 180);

                    // we stop the simulation of Window Resize after the animations are completed
                    setTimeout(function() {
                        clearInterval(simulateWindowResize);
                    }, 1000);

                });
            });
        });
    </script>
</body>

</html>