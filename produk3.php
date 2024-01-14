<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... (Kode head sebelumnya) ... -->
</head>
<body>
<header class="bg-slate-300 opacity-40 absolute top-0 left-0 w-full flex items-center z-10">
    <!-- ... (Kode header sebelumnya) ... -->
</header>

<section>
    <div class="container py-20 lg:px-20">
        <div class="py-5 px-4 gap-6 lg:flex">
            <div class="rounded-lg shadow-md overflow-hidden lg:w-1/2">
                <?php
                $imagePath = "dist/asset/image3.png";
                echo "<img src=\"$imagePath\" alt=\"truck\" class=\"w-96\" style=\"width: 100%; max-width: 400px;\">";
                ?>
            </div>
            <div class="rounded-lg shadow-md overflow-hidden px-4 py-4 lg:w-3/4">
                <form action="save_to_database.php" method="post">
                    <h1 class="font-bold text-lg lg:text-3xl">PISTONS 2 | WHITE</h1>
                    <h2 class="text-lg font-semibold mb-5 lg:mb-20">5.0 | ⭐⭐⭐⭐⭐</h2>
                    <p class="text-sm mb-3 lg:mb-20">
                        Produk ini merupakan produk unggulan dengan kualitas terbaik generasi pertama | dengan varian
                        warna hitam
                    </p>
                    <h2 class="font-medium text-2xl mb-3 ml-3 lg:text-2xl lg:mb-4 lg:ml-3">RP. 750.000</h2>
                    <input type="hidden" name="product_name" value="DETROIT 02 | BLACK">
                    <input type="hidden" name="product_price" value="620000">
                    <input type="submit" name="buy_now"
                           class="bg-slate-200 font-semibold rounded-full py-3 px-9 lg:py-3 lg:px-16 hover:bg-slate-100"
                           value="Buy Now">
                </form>
            </div>
        </div>
    </div>
</section>
</body>
</html>
