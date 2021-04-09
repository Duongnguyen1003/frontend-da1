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
        <div class="flex px-32 bg-blue-500 bg-opacity-70">
            <?php require "menu.php"; ?>
        </div>
    </header>
    <main>
        <section class="mx-96 border my-10 px-32 py-10 shadow-md">
            <form action="postLogin.php" method="POST" class="px-40">
                <h1 class="text-center text-3xl uppercase">đăng nhập</h1>
                <div class="mt-4">
                    <label>Tên đăng nhập</label>
                    <input class="my-1 px-2 py-1 border focus:outline-none block w-full" type="text" placeholder="" id="users_name" name="users_name">
                </div>
                <!-- end user name -->
                <div class="mt-4">
                    <label>Mật khẩu</label>
                    <input class="my-1 px-2 py-1 border focus:outline-none block w-full" type="password" placeholder="" id="pass" name="pass">
                </div>
                <div class="flex items-center pt-2">
                    <input type="checkbox">
                    <label class="px-2">Ghi nhớ mật khẩu</label>
                </div>
                <!-- end password -->
                <button class="block w-full bg-blue-300 border rounded-lg mt-4 py-2 text-lg focus:outline-none hover:bg-white hover:border-blue-300" name="btn_login">Đăng
                    nhập</button>
            </form>
            <div class="mt-4 flex justify-between px-40">
                <!-- <a class="hover:underline hover:text-blue-500 block" href="">Quên mật khẩu</a> -->
                <a class="hover:underline inline-block text-blue-500" href="forgotPassword.php">Quên mật khẩu?</a>
                <div class="">
                    <label class="inline-block ">Bạn chưa có tài khoản?</label>
                    <a class="hover:underline inline-block text-blue-500" href="registration.php">Đăng
                        ký</a>
                </div>
            </div>
        </section>
    </main>
    <footer class="background4 bg-opacity-10 mt-10">
        <?php require "footer.php"; ?>
    </footer>
</body>

</html>