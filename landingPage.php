<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* Custom CSS */
        body, html {
            height: 100%;
            margin: 0;
            font-family: 'Lexend Deca', sans-serif;
        }

        .navbar {
            background: url('/mnt/data/image.png') no-repeat center center;
            background-size: cover;
            height: 80px;
            position: fixed; /* Tambahkan properti ini */
            top: 0;
            width: 100%;
            /* z-index: 9999; */
        }

        .navbar-brand {
            color: white;
            font-weight: bold;
            font-size: 1.5rem;
        }

        .navbar-nav .nav-link {
            color: white !important;
            margin-right: 20px;
            font-weight: 500;
            font-size: 1rem;
        }

        .navbar-nav .btn-primary {
            background-color: rgba(108, 99, 255, 0.8);
            border-color: rgba(108, 99, 255, 0.8);
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 1rem;
        }

        .hero-section {
            position: relative;
            height: 100vh;
            color: white;
            display: flex;
            align-items: center;
            overflow: hidden;
        }

        .hero-content {
            position: absolute;
            left: 10%;
            max-width: 50%;
            z-index: 2;
        }

        .hero-section h1 {
            font-size: 3rem;
            font-weight: bold;
        }

        .hero-content p {
            font-size: 1.25rem;
            margin-bottom: 20px;
            color: white;
        }

        .cta-button {
            display: flex;
            align-items: center;
        }

        .cta-button input {
            margin-right: 10px;
        }

        .hero-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('./images/base.png') no-repeat center center;
            background-size: cover;
            filter: blur(2px);
            z-index: 1;
        }

        .container {
            max-width: 1200px;
        }

        h2 {
            font-size: 2.5rem;
            color: #1a202c;
        }

        p {
            font-size: 1.125rem;
            color: #4a5568;
            line-height: 1.6;
            margin-top: 20px;
            margin-bottom: 30px;
        }

        .btn-link {
            color: #6c63ff;
            font-size: 1.125rem;
            text-decoration: none;
        }

        .btn-link:hover {
            text-decoration: underline;
        }

        .img-fluid {
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .gambar-500 {
            width: 500px;
            height: auto;
        }

        .custom-footer {
            background-color: #181b3a;
            color: #ffffff;
            font-family: 'Lexend Deca', sans-serif;
        }

        .footer-brand {
            color: #ffffff;
            font-size: 1.75rem;
        }

        .footer-heading {
            color: #5b7aff;
            font-size: 1.125rem;
            margin-bottom: 20px;
        }

        .footer-link {
            color: #d0d4e4;
            font-size: 1rem;
            text-decoration: none;
            display: block;
            margin-bottom: 10px;
        }

        .footer-link:hover {
            text-decoration: underline;
        }

        .footer-input {
            background-color: #2c2e48;
            border: none;
            color: #ffffff;
            border-radius: 3px 0 0 3px;
            padding: 10px;
        }

        .btn-footer {
            background-color: #5b7aff;
            border: none;
            color: white;
            border-radius: 0 3px 3px 0;
            padding: 10px 15px;
        }

        .btn-footer:hover {
            background-color: #4a63e6;
        }

        footer .container {
            max-width: 1200px;
        }

        footer .row {
            margin-bottom: 20px;
        }

        @media (max-width: 768px) {
            .hero-content {
                max-width: 80%;
                left: 5%;
            }

            .hero-section h1 {
                font-size: 2.2rem;
            }

            .hero-content p {
                font-size: 1rem;
            }

            .navbar-brand {
                font-size: 1.2rem;
            }

            .navbar-nav .nav-link {
                font-size: 0.9rem;
            }

            h2 {
                font-size: 2rem;
            }

            p {
                font-size: 1rem;
            }

            .gambar-500 {
                width: 100%;
            }
        }

        @media (max-width: 576px) {
            .hero-section {
                height: 60vh;
            }

            .hero-section h1 {
                font-size: 1.8rem;
            }

            .hero-content p {
                font-size: 0.9rem;
            }

            .cta-button {
                flex-direction: column;
            }

            .cta-button input, .cta-button button {
                width: 100%;
                margin-bottom: 10px;
            }

            .navbar {
                height: 60px;
            }

            .navbar-brand {
                font-size: 1rem;
            }

            .navbar-nav .nav-link {
                font-size: 0.8rem;
                margin-right: 10px;
            }

            h2 {
                font-size: 1.8rem;
            }

            p {
                font-size: 0.9rem;
            }

            .gambar-500 {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <a class="navbar-brand" href="#">team.</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="#">Product</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Support</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Log In</a></li>
                <li class="nav-item"><a class="nav-link btn btn-primary" href="#">Get Access</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-section">
        <!-- Content container -->
        <div class="hero-content">
            <h1>Instant collaboration for remote teams</h1>
            <p>All-in-one place for your remote team to chat, collaborate and track project progress.</p>
            <div class="cta-button">
                <input type="email" class="form-control d-inline-block w-auto" placeholder="Email">
                <button class="btn btn-primary">Get Early Access</button>
            </div>
        </div>
        <!-- Gradient overlay -->
        <div class="gradient-overlay"></div>
    </div>

    <!-- Section Below Hero -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-5">
                <h2 class="font-weight-bold">Chats for your distributed teams</h2>
                <p>Team combines the immediacy of real-time chat with an email threading model. With Team, you can catch up on important conversations while ignoring irrelevant ones.</p>
                <a href="#" class="btn btn-link font-weight-bold">Learn more ➞</a>
            </div>
            <div class="col-md-6">
                <img src="./images/gambar1.png" alt="Dashboard preview" class="img-fluid rounded shadow gambar-500">
            </div>
        </div>
    </div>

    <!-- Section Below Hero with Image on the Left -->
    <div class="container my-5">
        <div class="row align-items-center">
            <div class="col-md-7">
                <img src="./images/gambar2.png" alt="Dashboard preview" class="img-fluid rounded shadow gambar-500">
            </div>
            <div class="col-md-5">
                <h2 class="font-weight-bold">Chats for your distributed teams</h2>
                <p>Team combines the immediacy of real-time chat with an email threading model. With Team, you can catch up on important conversations while ignoring irrelevant ones.</p>
                <a href="#" class="btn btn-link font-weight-bold">Learn more ➞</a>
            </div>
        </div>
    </div>

    <!-- Section Below Hero -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-5">
                <h2 class="font-weight-bold">Choose how you want to work</h2>
                <p>In Team, you’ve got all the flexibility to work when, where and how it’s best for you. You can easily chat, send audio and video clips, or hop on a huddle to talk things out live.</p>
                <a href="#" class="btn btn-link font-weight-bold">Learn more ➞</a>
            </div>
            <div class="col-md-6">
                <img src="./images/gambar3.png" alt="Dashboard preview" class="img-fluid rounded shadow gambar-500">
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row align-items-center">
            <div class="col-md-7">
                <img src="./images/gambar4.png" alt="Dashboard preview" class="img-fluid rounded shadow gambar-500">
            </div>
            <div class="col-md-5">
                <h2 class="font-weight-bold">Move faster with your Team tools</h2>
                <p>With your other work apps connected to Team, you can work faster by switching tabs less. And with powerful tools like Workflow Builder, you can automate away routine tasks.</p>
                <a href="#" class="btn btn-link font-weight-bold">Learn more ➞</a>
            </div>
        </div>
    </div>

    <!-- New Section with Carousel Below gambar4 -->
    <div class="container my-5">
        <h2 class="text-center">What people say about Team</h2>
        <div id="testimonialCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card mx-2">
                                <img src="./images/rate1.png" class="card-img-top" alt="Screenshot 1">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mx-2">
                                <img src="./images/rate2.png" class="card-img-top" alt="Screenshot 2">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mx-2">
                                <img src="./images/rate3.png" class="card-img-top" alt="Screenshot 3">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mx-2">
                                <img src="./images/rate1.png" class="card-img-top" alt="Screenshot 4">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card mx-2">
                                <img src="./images/rate2.png" class="card-img-top" alt="Screenshot 5">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mx-2">
                                <img src="./images/rate3.png" class="card-img-top" alt="Screenshot 6">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mx-2">
                                <img src="./images/rate1.png" class="card-img-top" alt="Screenshot 7">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mx-2">
                                <img src="./images/rate2.png" class="card-img-top" alt="Screenshot 8">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add more slides as needed -->
            </div>
            <!-- Carousel controls -->
                <a class="carousel-control-prev" href="#testimonialCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#testimonialCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- Footer -->
<footer class="custom-footer mt-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-3">
                <h5 class="footer-brand font-weight-bold">team.</h5>
                <p>Collaboration platform for modern team</p>
            </div>
            <div class="col-md-2">
                <h6 class="footer-heading font-weight-bold">Company</h6>
                <ul class="list-unstyled">
                    <li><a href="#" class="footer-link">Product</a></li>
                    <li><a href="#" class="footer-link">Blog</a></li>
                    <li><a href="#" class="footer-link">Support</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <h6 class="footer-heading font-weight-bold">Features</h6>
                <ul class="list-unstyled">
                    <li><a href="#" class="footer-link">Screen Sharing</a></li>
                    <li><a href="#" class="footer-link">iOS & Android Apps</a></li>
                    <li><a href="#" class="footer-link">File Sharing</a></li>
                    <li><a href="#" class="footer-link">User Management</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h6 class="footer-heading font-weight-bold">Contact Us</h6>
                <ul class="list-unstyled">
                    <li class="footer-link">info@teamapp.com</li>
                    <li class="footer-link">1-800-200-300</li>
                    <li class="footer-link">1010 Sunset Blvd. Palo Alto, California</li>
                </ul>
            </div>
            <div class="col-md-2">
                <h6 class="footer-heading font-weight-bold">Stay up to date</h6>
                <form action="#">
                    <div class="input-group">
                        <input type="email" class="form-control footer-input" placeholder="Email">
                        <div class="input-group-append">
                            <button class="btn btn-footer" type="button">➞</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col text-center mt-4">
                <p class="mb-0">&copy; Copyright Team Inc.</p>
            </div>
        </div>
    </div>
</footer>

    </div>

    <!-- Bootstrap & jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
