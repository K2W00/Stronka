<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Nutrivibe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Recoleta&display=swap');

        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .navbar {
            width: 100%;
            background-color: #000000;
            padding: 15px 40px 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-sizing: border-box;
            font-family: 'Recoleta', serif;
            /* font-size: 3.5rem; */
            /* font-weight: 700; */
            color: white;
        }

        .logo img {
            height: 150px;
            width: auto;
            display: block;
        }

        nav {
            display: flex;
            flex-grow: 1;
            justify-content: flex-end;
            align-items: center;
            font-family: Arial, sans-serif;
            font-weight: bold;
            font-size: 1.2rem;
            color: white;
            gap: 40px;
        }

        nav a {
            text-decoration: none;
            color: white;
            white-space: nowrap;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #4a7c3a;
        }

        .photo-text-section {
            display: flex;
            align-items: center;
            justify-content: center;
            max-width: 100%;
            margin: 40px auto;
            padding: 0 20px;
            gap: 30px;
            flex-wrap: wrap;
        }

        .section-photo {
            width: 50%;
            max-width: 50%;
            height: auto;
            border-radius: 10px;
            object-fit: cover;
        }

        .section-text {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            font-size: 2.5rem;
            font-weight: bold;
            color: black;
            text-align: right;
            line-height: 1.3;
            height: 100%;
        }

        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                align-items: flex-start;
                padding-bottom: 30px;
            }

            nav {
                justify-content: flex-start;
                width: 100%;
                font-size: 1rem;
                gap: 20px;
                margin-top: 10px;
            }

            .photo-text-section {
                flex-direction: column;
                text-align: center;
            }

            .section-text {
                text-align: center;
            }

            .section-photo {
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Nutrivibe logo" />
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
                aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Strona główna</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">O mnie</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Oferta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontakt</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <section class="photo-text-section">
        <img class="section-photo" src="{{ asset('images/kobieta.png') }}" alt="Moje zdjęcie" />
        <div class="section-text">
            <div style="text-align: center; width: 100%;">
                <div>Twoja zmiana</div>
                <div>zaczyna się właśnie tutaj</div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
    </script>
</body>

</html>