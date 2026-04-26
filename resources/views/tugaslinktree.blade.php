<!DOCTYPE html>
<html lang="en">

<head>
    <title>Linktree - Stockbit sekuritas saham</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #c8c8c8;
            min-height: 100vh;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            padding-top: 40px;
            padding-bottom: 40px;
        }

        .page-wrapper {
            max-width: 640px;
            min-height: 100vh;
            margin: 0 auto;
            background-color: #dddbdb;
            padding: 48px 24px 60px;
            border-radius: 20px;

        }

        .logo {
            width: 88px;
            height: 88px;
            border-radius: 50%;
            background-color: #0f0f0f;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .logo svg {
            width: 56px;
            height: 56px;
        }

        .profile-name {
            font-size: 25px;
            font-weight: 700;
            color: #111111;
            letter-spacing: -0.2px;
        }

        .profile-subname {
            font-size: 20px;
            color: #111111;
            font-weight: 600;

        }

        .link-card {
            background-color: #ffffff;
            padding: 20px 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            text-decoration: none;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.08);
            transition: background 0.15s;
            border-radius: 10px;
        }

        .link-card:hover {
            background-color: #edebf0;
            text-decoration: none;
        }

        .link-card:active {
            background-color: #ebebeb;
        }

        .link-label {
            font-size: 16px;
            font-weight: 500;
            color: #000000;
            letter-spacing: -0.1px;
        }

        .dots-btn {
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
            width: 28px;
            height: 28px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.15s;
            cursor: pointer;
        }

        .dots-btn:hover {
            background: rgba(0, 0, 0, 0.07);
        }

        .dots-btn svg {
            width: 18px;
            height: 18px;
            fill: #555;
        }
    </style>
</head>

<body>
    <div class="page-wrapper">
        <div class="d-flex flex-column align-items-center">

            <!-- Logo -->
            <div class="logo mb-2">
                <img src="https://ugc.production.linktr.ee/41xeOh56RamG5gpabqw6_TbV6BNGwr8uuNKBI?io=true&size=avatar-v3_0"
                    alt="Stockbit" style="width:100%; height:100%; object-fit:cover; border-radius:50%;">
            </div>

            <!-- Name & subtitle -->
            <p class="profile-name mb-0">Stockbit</p>
            <p class="profile-subname mb-4">Sekuritas Saham</p>

            <!-- Links -->
            <div class="w-100">

                <a href="#" target="_blank" rel="noopener" class="link-card mb-3 d-flex">
                    <span class="link-label">Stockbit Desktop App</span>
                    <div class="dots-btn">
                        <svg viewBox="0 0 24 24">
                            <circle cx="12" cy="5" r="1.5" />
                            <circle cx="12" cy="12" r="1.5" />
                            <circle cx="12" cy="19" r="1.5" />
                        </svg>
                    </div>
                </a>

                <a href="#" target="_blank" rel="noopener" class="link-card mb-3 d-flex">
                    <span class="link-label">Stockbit Mobile App</span>
                    <div class="dots-btn">
                        <svg viewBox="0 0 24 24">
                            <circle cx="12" cy="5" r="1.5" />
                            <circle cx="12" cy="12" r="1.5" />
                            <circle cx="12" cy="19" r="1.5" />
                        </svg>
                    </div>
                </a>

                <a href="#" target="_blank" rel="noopener" class="link-card mb-3 d-flex">
                    <span class="link-label">Stockbit Web</span>
                    <div class="dots-btn">
                        <svg viewBox="0 0 24 24">
                            <circle cx="12" cy="5" r="1.5" />
                            <circle cx="12" cy="12" r="1.5" />
                            <circle cx="12" cy="19" r="1.5" />
                        </svg>
                    </div>
                </a>

                <a href="#" target="_blank" rel="noopener" class="link-card mb-3 d-flex">
                    <span class="link-label">Stockbit Channel (Whatsapp)</span>
                    <div class="dots-btn">
                        <svg viewBox="0 0 24 24">
                            <circle cx="12" cy="5" r="1.5" />
                            <circle cx="12" cy="12" r="1.5" />
                            <circle cx="12" cy="19" r="1.5" />
                        </svg>
                    </div>
                </a>

                <a href="#" target="_blank" rel="noopener" class="link-card d-flex">
                    <span class="link-label">Cara Daftar Stockbit</span>
                    <div class="dots-btn">
                        <svg viewBox="0 0 24 24">
                            <circle cx="12" cy="5" r="1.5" />
                            <circle cx="12" cy="12" r="1.5" />
                            <circle cx="12" cy="19" r="1.5" />
                        </svg>
                    </div>
                </a>

            </div>
        </div>
    </div>
</body>
</html>
