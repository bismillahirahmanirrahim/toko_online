<?php
    include "navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Belajar Toko Online</title>
    <link rel="stylesheet" href="../asset/css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    <?php
        include "../proses/koneksi.php";
        $qry_produk=mysqli_query($conn,"select * from produk");
        while($dt_produk=mysqli_fetch_array($qry_produk)){
    ?>
                <div class="card" data-aos="flip-left" data-aos-duration="2000">
                    <div class="imgBox">
                    <img
                        src="../asset/foto_produk/<?=$dt_produk['foto']?>"
                        alt="<?=$dt_produk['nama']?>"
                        class="image"
                    />
                    <h2><?=$dt_produk['nama']?></h2>
                    <div class="bintang">
                        <img
                        src="../asset/image/bintang5_belanja.png"
                        alt="bintang"
                        />
                    </div>
                        <p>Rp. <?=$dt_produk['harga']?></p>
                        <a href="keranjang.php?id_produk=<?=$dt_produk['id_produk']?>"><h3>Beli</h3></a>
                    </div>
                </div>

    <?php } ?>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>