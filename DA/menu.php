<?php
include "../../DA1/examples/local.php";
$sql = "select * from category WHERE id_parent='25'";
$total = $local->query($sql)->fetchAll();
$sqls = "select * from category WHERE id_parent='26'";
$totals = $local->query($sqls)->fetchAll();
?>
<div class="col-span-3 flex justify-center items-center">
    <a href="index.php"><img src="./content/image/logo-white.png" alt=""></a>
</div>
<nav class="flex justify-center items-center col-span-6 ml-5">
    <ul>
        <li class="inline-block px-4 h-full hover:text-black">
            <a class=" font-bold relative group uppercase text-white text-base border-b pb-2 transform scale-0 group-hover:scale-100 animation duration-300 ease-linear hover:text-blue-500" href="index.php">trang chủ
                <div class="absolute bottom-0 left-0 right-0 h-1 rounded-full bg-blue-500 -mb-1 transform scale-0 group-hover:scale-100 animation duration-300 ease-linear">
                </div>
            </a>
        </li>
        <li class="inline-block px-4 h-full hover:text-black">
            <a class="font-bold relative group uppercase text-white text-base border-b pb-2 transform scale-0 group-hover:scale-100 animation duration-300 ease-linear hover:text-blue-500" href="introduce.php">giới thiệu
                <div class="absolute bottom-0 left-0 right-0 h-1 rounded-full bg-blue-500 -mb-1 transform scale-0 group-hover:scale-100 animation duration-300 ease-linear">
                </div>
            </a>
        </li>
        <li class="inline-block px-4 h-full hover:text-black relative group">
            <a class="font-bold uppercase text-white relative group text-base border-b pb-2 transform scale-0 group-hover:scale-100 animation duration-300 ease-linear hover:text-blue-500" href="tourNoithanh.php">tour
                nội
                thành
                <div class="absolute  bottom-0 left-0 right-0 h-1 rounded-full bg-blue-500 -mb-1 transform scale-0 group-hover:scale-110 animation duration-300 ease-linear">
                </div>
            </a>
            <ul class="absolute top-0 mt-9 pl-5 left-0 right-0 group-hover:block hidden">
                <?php foreach ($total as $value) : ?>
                    <li class="bg-blue-300 pl-5 w-40 py-1 font-bold border-b text-white hover:text-blue-500 "><a class="" href=""><?= $value['name_category'] ?></a></li>
                <?php endforeach ?>
                <!-- <li class="bg-blue-300 pl-5 w-40 py-1 font-bold border-b text-white hover:text-blue-500 "><a class="" href="">Ba Đình</a></li>
                <li class="bg-blue-300 pl-5 w-40 py-1 font-bold border-b text-white hover:text-blue-500 "><a class="" href="">Hoàng Mai</a></li>
                <li class="bg-blue-300 pl-5 w-40 py-1 font-bold border-b text-white hover:text-blue-500 "><a class="" href="">Thanh Xuân</a></li> -->
            </ul>
        </li>
        <li class="inline-block px-4 h-full hover:text-black relative group">
            <a class="font-bold uppercase text-white relative group text-base border-b pb-2 transform scale-0 group-hover:scale-100 animation duration-300 ease-linear hover:text-blue-500" href="tourNgoaithanh.php">tour
                ngoại
                thành
                <div class="absolute  bottom-0 left-0 right-0 h-1 rounded-full bg-blue-500 -mb-1 transform scale-0 group-hover:scale-110 animation duration-300 ease-linear">
                </div>
            </a>
            <ul class="absolute top-0 mt-9 pl-5 left-0 right-0 group-hover:block hidden">
                <?php foreach ($totals as $values) : ?>
                    <li class="bg-blue-300 pl-5 w-40 py-1 font-bold border-b text-white hover:text-blue-500 "><a class="" href=""><?= $values['name_category'] ?></a></li>
                <?php endforeach ?>
            </ul>
        </li>
        <li class="inline-block px-4 h-full hover:text-black">
            <a class="font-bold relative group uppercase text-white text-base border-b pb-2 transform scale-0 group-hover:scale-100 animation duration-300 ease-linear hover:text-blue-500" href="customer.php">ưu
                đãi
                <div class="absolute bottom-0 left-0 right-0 h-1 rounded-full bg-blue-500 -mb-1 transform scale-0 group-hover:scale-100 animation duration-300 ease-linear">
                </div>
            </a>
        </li>
        <li class="inline-block px-4 h-full hover:text-black">
            <a class="font-bold relative group uppercase text-white text-base border-b pb-2 transform scale-0 group-hover:scale-100 animation duration-300 ease-linear hover:text-blue-500" href="contact.php">liên
                hệ
                <div class="absolute bottom-0 left-0 right-0 h-1 rounded-full bg-blue-500 -mb-1 transform scale-0 group-hover:scale-100 animation duration-300 ease-linear">
                </div>
            </a>
        </li>
    </ul>
</nav>
<div class="col-span-3 ml-5 mt-5">
    <form action="" method="GET" class="flex text-center justify-center items-center py-3 ml-5">
        <div class="bg-white px-4 py-px rounded-full ml-10 flex">
            <button name="btn_search" class="focus:outline-none"><i class="fas fa-search text-gray-500"></i></button>
            <input type="text" placeholder="Search..." class="focus:outline-none w-64 text-base py-1 pl-3" name="search">
        </div>
    </form>
</div>