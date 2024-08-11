<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuankorn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Start Header -->
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap"></use>
                </svg>
                <span class="fs-4">S&Ann Room Rental</span>
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="index.php" class="nav-link active" aria-current="page">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link">About</a></li>
            </ul>
        </header>
    </div>
    <!-- End header -->




    <!-- Start hero-->
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-body-tertiary"
        style="background-image:url('Nuankorn_dorm.jpeg'); background-size: cover; background-position: center;">
        <div class="col-md-6 p-lg-5 mx-auto my-5">
            <h1 class="display-5 " style="color:aliceblue;">หอพักในนวนคร</h1>
            <h3 class="display" style="color:cornsilk;">ห้องสวยเหมือนใหม่ ราคาถูก ใกล้ปากซอยเพียง 20 เมตร</h3>
            <div class="d-flex gap-3 justify-content-center lead fw-normal">
                <!-- <a class="icon-link" href="#">Booking Now</a> -->
            </div>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>



    <div class="d-flex flex-wrap justify-content-center">
        <!-- Left Block -->
        <div class="text-bg-dark pt-3 px-3 pt-lg-5 px-lg-5 text-center overflow-hidden">
            <div class="my-3 py-3">
                <h2 class="display-5">ห้องพักที่ทำเลดี</h2>
                <p class="lead">ใกล้ร้านค้า ตลาด ร้านสะดวกซื้อ</p>
            </div>
            <!-- Adding the image to the shadow box -->
            <div class="bg-body-tertiary shadow-sm mx-auto image-container"
                style="width: 80%; height: 300px; border-radius: 21px 21px 0 0; background-image: url('Nuankorn1.jpg'); background-size: cover; background-position: center;">
            </div>
        </div>

        <!-- Right Block -->
        <div class="text-bg-dark pt-3 px-3 pt-lg-5 px-lg-5 text-center overflow-hidden">
            <div class="my-3 p-3">
                <h2 class="display-5">ห้องพักสวยเหมือนใหม่</h2>
                <p class="lead">ห้องสะอาด ไม่ร้อน มีห้องน้ำในตัว</p>
            </div>
            <!-- Adding the image to the shadow box -->
            <div class="bg-dark shadow-sm mx-auto image-container"
                style="width: 80%; height: 300px; border-radius: 21px 21px 0 0; background-image: url('Nuankorn2.png'); background-size: cover; background-position: center;">
            </div>
        </div>
    </div>




    <div class="d-flex flex-wrap justify-content-center ">
        <div class="text-bg-dark pt-3 px-3 pt-lg-5 px-lg-5 text-center overflow-hidden">
            <div class="my-3 p-3">
                <h2 class="display-5">ที่จอดรถจักรยานต์</h2>
                <p class="lead">มีที่สำหรับจอดรถจักรยานยนต์ได้หลายคันภายในหอ</p>
            </div>
            <div class="bg-dark shadow-sm mx-auto image-container"
                style="width: 80%; height: 300px; border-radius: 21px 21px 0 0; background-image: url('Nuankorn3.jpg'); background-size: cover; background-position: center;">
            </div>
        </div>

        <div class="text-bg-dark pt-3 px-3 pt-lg-5 px-lg-5 text-center overflow-hidden">
            <div class="my-3 py-3">
                <h2 class="display-5">มีคนดูเเลตลอด</h2>
                <p class="lead">หอสะอาด ตอนกลางคืนไม่วุ่นวาย เงียบสงบ</p>
            </div>
            <div class="bg-dark shadow-sm mx-auto image-container"
                style="width: 80%; height: 300px; border-radius: 21px 21px 0 0; background-image: url('Nuankorn4.jpg'); background-size: cover; background-position: center;">
            </div>
        </div>
    </div>


    <div class="h-100 p-5 text-bg-dark rounded-3">
        <h2 class="display-5">ข้อมูลเกี่ยวกับหอพัก</h2>
        <hr>
        <ol class="lead">
            <p>หอพักต้นซอยไทธานี 10 (ในนวนคร) </p>
            <p>เข้าซอยไทธานี 10 แค่ 20 ม.</p>
            <p>ปากซอยมีร้านอาหาร ร้านสะดวกซื้อ</p>
            <p>ใกล้เซเว่น เเละ ตลาดเพียง 150 เมตร</p>
            <p>หอพักมีจอดรถจักรยานยนต์</p>
            <p>ห้องกว้างใหญ่ อากาศถ่ายเทดี มีระเบียงทุกห้อง</p>
            <p class="d-flex flex-wrap justify-content-center "><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1046.1256770856794!2d100.59752307119358!3d14.11151199062291!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e27f6d39a6cfe3%3A0x62473434faeac8d8!2z4LmE4LiX4Lii4LiY4Liy4LiZ4Li1IOC4i-C4reC4oiAxMCDguJXguLPguJrguKUg4LiE4Lil4Lit4LiH4Lir4LiZ4Li24LmI4LiHIOC4reC4s-C5gOC4oOC4reC4hOC4peC4reC4h-C4q-C4peC4p-C4hyDguJvguJfguLjguKHguJjguLLguJnguLUgMTIxMjAg4Lib4Lij4Liw4LmA4LiX4Lio4LmE4LiX4Lii!5e1!3m2!1sth!2sjp!4v1723357739202!5m2!1sth!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>        </ol>

    </div>



    <div class="h-100 p-5 text-bg-dark rounded-3">
        <h2 class="display-5">ข้อมูลเกี่ยวกับการเช่าห้อง</h2>
        <hr>
        <ol class="lead">
            <p>ชั้น 1-5 เดือนละ 1600 บาท</p>
            <p>6 ชั้น เดือนละ 1500 บาท</p>
            <p>ค่ามัดจำ 1000 บาท และจ่ายล่วงหน้า 1 เดือน</p>
            <p>ค่าที่จอดรถ (กรณีใช้ที่จอดรถจักรยานยนต์ของหอพัก) เดือนละ 100 บาท</p>
            <p>ค่าเคเบิ้ลเดือนละ 100 บาท</p>
            <p>*ห้องเปล่าไม่มีเฟอร์นิเจอร์*</p>
        </ol>

    </div>

    <div class="h-100 p-5 text-bg-dark rounded-3">
        <h2 class="display-5">สนใจติดต่อ</h2>
        <hr>
        <ol class="lead">
            <p> 📞089-9901167 </p>
        </ol>
    </div>
    <!-- End hero-->

</body>

</html>