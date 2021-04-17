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
        <div id="navbar" class="absolute top-0 left-0 right-0 flex mt-8 px-32 bg-blue-300">
            <?php require "menu.php"; ?>
        </div>
        <div class="bg-blue-400 bg-opacity-50 absolute top-0 left-0 right-0">
            <?php require "headerTop.php"; ?>
        </div>
    </header>
    <main>
        <section class="mx-96 border my-10 px-32 py-10 shadow-md">
            <h1 class="text-center text-3xl uppercase">Thay đổi mật khẩu</h1>
            <form action="#" method="POST" class="px-40">
                <div class="my-4">
                    <label>Mật khẩu cũ</label>
                    <input class="my-1 px-2 py-1 border focus:outline-none block w-full" type="password" placeholder="" id="pass" name="pass" required>
                </div>
                <!-- end old password -->
                <div class="my-4">
                    <label>Mật khẩu mới</label>
                    <input class="my-1 px-2 py-1 border focus:outline-none block w-full" type="password" placeholder="" id="pass" name="pass" required>
                </div>
                <!-- end new password -->
                <div class="my-4">
                    <label>Xác nhận mật khẩu</label>
                    <input class="my-1 px-2 py-1 border focus:outline-none block w-full" type="password" placeholder="" id="pass_confirm" name="pass_confirm" required>
                </div>
                <!-- end confirm password -->
                <div class="mt-4 flex justify-end">
                    <!-- <a class="hover:underline hover:text-blue-500 block" href="">Quên mật khẩu</a> -->
                    <p class="inline-block ">Bạn không muốn thay đổi mật khẩu? <a href="login.php" class="text-blue-400 hover:underline">Đăng nhập</a> ngay!</p>
                </div>

                <div class="mt-5 border-none flex justify-center">
                    <button class="bg-red-400 border rounded-lg px-10 py-2 text-lg focus:outline-none hover:border-blue-300 hover:bg-white" name="btn_regis">Thay đổi</button>
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