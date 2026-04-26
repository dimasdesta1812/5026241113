<!DOCTYPE html>
<html lang="id">

<head>
    <title>CatHouse</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css" />
    <style>
        .nav-link {
            color: white;
        }

        .nav-link.active {
            color: orange;
            font-weight: bold;
        }

        section {
            min-height: 100vh;
            padding: 100px 40px 60px;
        }

        .gambar {
            height: 200px;
            width: 100px;
            object-fit: contain;
        }
    </style>
</head>

<body data-spy="scroll" data-target="#nav" data-offset="70">
    <nav class="navbar bg-dark fixed-top">
        <div class="text-white font-weight-bold">Cat House</div>
        <ul class="nav" id="nav">
            <li class="nav-item"><a class="nav-link" href="#beranda">Beranda</a></li>
            <li class="nav-item"><a class="nav-link" href="#ras">Ras Kucing</a></li>
            <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
        </ul>
    </nav>

    <!-- BERANDA -->
    <section id="beranda" style="background: #fff8f0;">
        <h1>Selamat Datang di Cat House</h1>
        <p class="lead">Tempat terbaik untuk menemukan kucing peliharaan impianmu.</p>
        <p>Kami menyediakan berbagai ras kucing pilihan yang sehat, lucu, dan siap diadopsi. Temukan sahabat berbulu
            yang menunggu rumah baru. Adopsi kucing hari ini dan berikan mereka kasih sayang yang layak</p>
    </section>

    <!-- RAS KUCING -->
    <section id="ras" style="background: #ffffff;">
        <h2>Ras Kucing</h2>
        <p>Pilihan ras kucing yang tersedia di Cat House:</p>
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Scottish Fold</h5>
                        <p class="card-text">Telinga terlipat, wajah bulat, sifat tenang dan penyayang.</p>
                    </div>
                    <img src="https://tse1.mm.bing.net/th/id/OIP.-pgcZMJAG7rF0s_H5aGdpgHaFj?pid=Api&P=0&h=180"
                        class="card-img-bottom">
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Persian</h5>
                        <p class="card-text">Berbulu panjang dan lebat, cocok untuk dalam rumah.</p>
                    </div>
                    <img src="https://tse1.mm.bing.net/th/id/OIP.wxFnEbiF4d_h9XKcP5cSYgHaE8?pid=Api&P=0&h=180"
                        class="card-img">
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Munchkin</h5>
                        <p class="card-text">Kaki pendek yang menggemaskan, lincah, dan sangat ramah serta suka bermain
                            dengan pemiliknya.</p>
                    </div>
                    <img src="https://tse3.mm.bing.net/th/id/OIP.Vxj_dCZ7qB8RgywQsLJ_XQHaEK?pid=Api&P=0&h=180"
                        class="card-img">
                </div>
            </div>
        </div>
    </section>

    <!-- KONTAK -->
    <section id="kontak" style="background: #fff8f0;">
        <h2>Kontak Kami</h2>
        <p>Ingin adopsi atau tanya-tanya? Hubungi kami!</p>
        <br />
        <p>Alamat : jl. Basuki Rahmat No.01, Surabaya</p>
        <p>Telepon : <a href="#">0812-3456-7890</a></p>
        <p>Email : <a href="#">cathouse@gmail.com</a></p>
    </section>

</body>
</html>
