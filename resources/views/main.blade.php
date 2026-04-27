<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>5026241113 · Dimas Ananda</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css"/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.bundle.min.js"></script>

  <style>
    * { box-sizing: border-box; }

    body {
      font-family: 'Poppins', sans-serif;
      background: #f5f6fa;
      min-height: 100vh;
    }

    .hero-section {
      background: #1e1e2f;
      padding: 50px 40px 80px;
      color: #fff;
      text-align: center;
    }

    .hero-section h1 {
      font-size: 38px;
      font-weight: 800;
      line-height: 1.2;
      margin-bottom: 8px;
    }

    .nrp {
      color: rgba(255,255,255,0.5);
      font-size: 14px;
      margin: 0;
    }

    .cards-section {
      padding: 0 30px 50px;
      margin-top: -40px;
    }

    .task-card {
      background: #fff;
      border-radius: 16px;
      padding: 28px 24px;
      text-decoration: none;
      color: #1e1e2f;
      display: block;
      height: 100%;
      box-shadow: 0 4px 20px rgba(0,0,0,0.07);
      transition: transform 0.2s, box-shadow 0.2s;
      border-top: 5px solid #eee;
    }

    .task-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 30px rgba(0,0,0,0.12);
      text-decoration: none;
      color: #1e1e2f;
    }

    .task-card .card-label {
      font-size: 11px;
      font-weight: 600;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: #aaa;
      margin-bottom: 6px;
    }

    .task-card .card-title {
      font-size: 17px;
      font-weight: 700;
      margin-bottom: 0;
    }

    .task-card .card-arrow {
      margin-top: 20px;
      font-size: 13px;
      font-weight: 600;
      display: inline-flex;
      align-items: center;
      gap: 6px;
    }

    .card-arrow { color: #0b35f4; }

    .footer {
      text-align: center;
      padding: 20px;
      font-size: 12px;
      color: #bbb;
    }
  </style>
</head>
<body>

  <!-- Hero -->
  <div class="hero-section">
    <h1>Dimas Ananda Destariansyah</h1>
    <p class="nrp">5026241113</p>
  </div>

  <div class="cards-section">
    <div class="container-fluid px-0">
      <div class="row">

        <div class="col-md-6 col-lg-3 mb-4">
          <a href="/pertemuan1" class="task-card card-blue">
            <p class="card-label">Materi</p>
            <p class="card-title">Pertemuan 1</p>
            <span class="card-arrow">Lihat →</span>
          </a>
        </div>

        <div class="col-md-6 col-lg-3 mb-4">
          <a href="/pertemuan2" class="task-card card-green">
            <p class="card-label">Materi</p>
            <p class="card-title">Pertemuan 2</p>
            <span class="card-arrow">Lihat →</span>
          </a>
        </div>

        <div class="col-md-6 col-lg-3 mb-4">
          <a href="/pertemuan3" class="task-card card-pink">
            <p class="card-label">Materi</p>
            <p class="card-title">Pertemuan 3</p>
            <span class="card-arrow">Lihat →</span>
          </a>
        </div>

        <div class="col-md-6 col-lg-3 mb-4">
          <a href="pertemuan4" class="task-card card-orange">
            <p class="card-label">Materi</p>
            <p class="card-title">Pertemuan 4</p>
            <span class="card-arrow">Lihat →</span>
          </a>
        </div>

        <div class="col-md-6 col-lg-3 mb-4">
          <a href="/pert5" class="task-card card-pink">
            <p class="card-label">Materi</p>
            <p class="card-title">Pertemuan 5</p>
            <span class="card-arrow">Lihat →</span>
          </a>
        </div>

        <div class="col-md-6 col-lg-3 mb-4">
          <a href="/tugasbootstrap" class="task-card card-pink">
            <p class="card-label">Tugas</p>
            <p class="card-title">Tugas Pertemuan 3 - Bootstrap</p>
            <span class="card-arrow">Lihat →</span>
          </a>
        </div>

        <div class="col-md-6 col-lg-3 mb-4">
          <a href="/tugaslinktree" class="task-card card-pink">
            <p class="card-label">Tugas</p>
            <p class="card-title">Tugas Pertemuan 5 - Linktree</p>
            <span class="card-arrow">Lihat →</span>
          </a>
        </div>

        <div class="col-md-6 col-lg-3 mb-4">
          <a href="#" class="task-card card-pink">
            <p class="card-label">Tugas</p>
            <p class="card-title">Make Over IG</p>
            <span class="card-arrow">Lihat →</span>
          </a>
        </div>

        <div class="col-md-6 col-lg-3 mb-4">
          <a href="#" class="task-card card-pink">
            <p class="card-label">Ujian</p>
            <p class="card-title">UTS</p>
            <span class="card-arrow">Lihat →</span>
          </a>
        </div>

      </div>
    </div>
  </div>
  <div class="footer">© 2024 Dimas Ananda Destariansyah · Pemrograman Web</div>
</body>
</html>
