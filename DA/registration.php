<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" type="text/css" href="./content/slick-1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="./content/slick-1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" href="./content/build/styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&display=swap" rel="stylesheet">
    <style>
        .background4 {
            background-image: url('./content/image/background/background4.jpg');
        }

        .nunito {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="nunito">
    <header>
        <div class="bg-blue-400 bg-opacity-50">
            <?php require "headerTop.php"; ?>
        </div>
        <div class="flex px-32 bg-blue-500 bg-opacity-50">
            <?php require "menu.php"; ?>
        </div>
    </header>
    <main>
        <section class="mx-96 border my-10 px-32 py-10 shadow-md">
            <h1 class="text-center text-3xl">ĐĂNG KÝ THÀNH VIÊN</h1>
            <form action="#" method="POST" class="px-40">
                <div class="my-4">
                    <label>Tên đăng nhập</label>
                    <input class="my-1 px-2 py-1 border focus:outline-none block w-full" type="text" placeholder="" id="users_name" name="users_name" required>
                </div>
                <!-- end user name -->
                <div class="my-4">
                    <label>Mật khẩu</label>
                    <input class="my-1 px-2 py-1 border focus:outline-none block w-full" type="password" placeholder="" id="pass" name="pass" required>
                </div>
                <!-- end password -->
                <div class="my-4">
                    <label>Xác nhận mật khẩu</label>
                    <input class="my-1 px-2 py-1 border focus:outline-none block w-full" type="password" placeholder="" id="pass_confirm" name="pass_confirm" required>
                    <label></label>
                </div>
                <!-- end confirm password -->
                <div class="my-4">
                    <label>Họ và tên</label>
                    <input class="my-1 px-2 py-1 border focus:outline-none block w-full" type="text" placeholder="" id="lastname" name="lastName" required>
                </div>
                <!-- end lastname -->
                <div class="my-4">
                    <label>Email</label>
                    <input class="my-1 px-2 py-1 border focus:outline-none block w-full" type="email" placeholder="" id="email" name="email" required>
                </div>
                <!-- end mail -->
                <div class="my-4">
                    <label>Số điện thoại</label>
                    <input class="my-1 px-2 py-1 border focus:outline-none block w-full" pattern="0[0-9\s.-]{9,13}" type="text" placeholder="" id="phone" name="phone" required>
                </div>
                <!-- end phone -->
                <div class="my-4">
                    <label>Ảnh đại diện</label>
                    <input class="my-1 py-1  focus:outline-none block w-full" type="file" placeholder="" id="img" name="img">
                </div>
                <!-- end image -->
                <div class="mt-4 flex justify-end">
                    <!-- <a class="hover:underline hover:text-blue-500 block" href="">Quên mật khẩu</a> -->
                    <p class="inline-block ">Bạn đã có tài khoản <a href="login.php" class="text-blue-400 hover:underline">Đăng nhập</a> ngay!</p>
                </div>
                <div class="mt-5 border-none flex justify-center">
                    <button class="bg-red-400 border rounded-lg px-10 py-2 text-lg focus:outline-none hover:border-blue-300 hover:bg-white" name="btn_regis">Đăng ký</button>
                </div>
                <!-- end submit -->
            </form>
            <!-- end form-->
        </section>
    </main>
    <footer class="background4 bg-opacity-10 mt-10">
        <?php require "footer.php"; ?>
    </footer>
</body>

</html>