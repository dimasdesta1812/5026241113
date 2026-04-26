<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dimas Ananda Destariansyah - 5026241113</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: rgb(215, 212, 212);
            font-family: sans-serif;
        }

        /* bingkai putih */
        .isi {
            background: white;
            padding: 50px 80px 0; /* kiri-kanan lebih besar agar tidak terlalu pinggir */
            margin: 30px auto;
            max-width: 1000px;
            overflow: hidden;   /* agar bar-logo tidak keluar */
        }

        /* judul */
        .judul {
            text-align: center;
            font-size: 1.6rem;
            font-weight: bold;
            letter-spacing: 2px;
            margin-bottom: 50px;
        }

        /* satu item testimonial = foto bulat + teks */
        .testi-item {
            display: flex;
            gap: 24px;
            align-items: flex-start;
            margin-bottom: 40px;
            padding: 0 20px; /* dorong sedikit ke tengah */
        }

        /* foto bulat dengan ikon orang */
        .foto {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: #ccc;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        /* ikon orang di dalam foto bulat */
        .foto svg {
            width: 50px;
            height: 50px;
            fill: #999;
        }

        /* teks kutipan miring */
        .kutipan {
            font-style: italic;
            color: #555;
            font-size: 0.88rem;
            line-height: 1.7;
            margin-bottom: 12px;
        }

        /* nama kapital tebal */
        .nama {
            font-weight: bold;
            font-size: 0.82rem;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 3px;
        }

        /* jabatan abu */
        .jabatan {
            font-size: 0.8rem;
            color: #888;
        }

        /* garis pemisah tipis */
        .pemisah {
            border: none;
            border-top: 1px solid #eee;
            margin: 0 20px 40px; /* sama dengan padding testi-item */
        }

        /* bar logo — full lebar, nempel ke bawah bingkai */
        .bar-logo {
            background: #aaa;
            padding: 22px 0;
            margin: 0 -80px; /* negatif = sama dengan padding .isi */
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .bar-logo span {
            color: white;
            font-weight: bold;
            font-size: 0.85rem;
            letter-spacing: 2px;
        }
    </style>
</head>

<body>

    <div class="isi">

        <div class="judul">OUR CLIENTS LOVE US</div>

        <!-- BARIS 1 -->
        <div class="row">
            <div class="col-md-6">
                <div class="testi-item">
                    <img src="https://tse1.mm.bing.net/th/id/OIP.4KJWulC20Nn4acQh2D3tNAHaFj?pid=Api&P=0&h=180" class="foto">
                    <div>
                        <p class="kutipan">"Filmnya pecah, keren banget bisa bikin suasana penonton rame"</p>
                        <div class="nama">Raffi Ahmad</div>
                        <div class="jabatan">CEO RANS Entertainment</div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="testi-item">
                    <img src="https://tse4.mm.bing.net/th/id/OIP.fZ4smWIaIJ7y3-BROE4LuQHaEo?pid=Api&P=0&h=180" class="foto">
                    <div>
                        <p class="kutipan">"Filmnya keren banget sih gilak!, gue yakin tembus 1 juta penonton"</p>
                        <div class="nama">Gofar Hilman</div>
                        <div class="jabatan">Artist</div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="pemisah"/>
        <div class="row">
            <div class="col-md-6">
                <div class="testi-item">
                  <img src="https://tse1.mm.bing.net/th/id/OIP.XrvAh4qnkPc-rzRL2Ln44wAAAA?pid=Api&P=0&h=180" class="foto">
                    <div>
                        <p class="kutipan">"filmnya lucu bisa membuat suasana hati senang, dan pembawaan dari tiap karakter oke banget."</p>
                        <div class="nama">Andre Taulani</div>
                        <div class="jabatan">Artist</div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="testi-item">
                    <img src="https://tse2.mm.bing.net/th/id/OIP.hGRp-M1ELi1IMhbjbO_2fAHaE3?pid=Api&P=0&h=180" class="foto">
                    <div>
                        <p class="kutipan">"Nih film ngalah-ngalahin OVJ aja lucunya"</p>
                        <div class="nama">Sule</div>
                        <div class="jabatan">Artist</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bar-logo">
            <span><img src="https://tse4.mm.bing.net/th/id/OIP.aLocuYOxZJhWGT0mGYrUtgHaEL?pid=Api&P=0&h=180"></span>
            <span><img src="https://tse2.mm.bing.net/th/id/OIP.dSx59Kt-7YNS3_DXbIoIiAHaHa?pid=Api&P=0&h=180"></span>
             <span><img src="https://tse4.mm.bing.net/th/id/OIP.2kdPqEYc4SzWaML45QWZrwHaHa?pid=Api&P=0&h=180"></span>">
        </div>

    </div>

</body>
</html>
