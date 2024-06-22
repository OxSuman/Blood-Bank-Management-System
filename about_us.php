<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .image-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 100%;
        }

        img {
            max-width: 100%;
            max-height: 100%;
            height: auto;
            width: auto;
        }

        .hero-section {
            background-color: #f5f5f5;
            text-align: center;
            padding: 0;
        }

        .hero-section img {
            max-width: 100%;
            height: auto;
            display: block;
        }

        .section {
            padding: 60px 0;
            text-align: center;
        }

        .section h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .section p {
            font-size: 18px;
            margin-bottom: 40px;
        }

        .card {
            border: none;
            margin-bottom: 30px;
        }

        .card img {
            border-radius: 15px;
        }

        .card-title {
            font-size: 24px;
            margin-top: 20px;
        }

        .team-member {
            text-align: center;
            margin-bottom: 30px;
        }

        .team-member img {
            border-radius: 50%;
            margin-bottom: 20px;
        }

        .team-member h5 {
            font-size: 20px;
            margin-bottom: 5px;
        }

        .team-member p {
            font-size: 16px;
            margin-bottom: 10px;
        }

        footer {
            background-color: #ff0000;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        .footer-bottom p {
            margin: 0;
        }

        .Team {
            height: 150px;
            width: 150px;
        }

        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 36px;
            }

            .hero-section p {
                font-size: 18px;
            }

            .section h2 {
                font-size: 28px;
            }

            .section p {
                font-size: 16px;
            }

            .card-title {
                font-size: 20px;
            }

            .team-member h5 {
                font-size: 18px;
            }

            .team-member p {
                font-size: 14px;
            }
        }

        @media (max-width: 576px) {
            .hero-section h1 {
                font-size: 28px;
            }

            .hero-section p {
                font-size: 16px;
            }

            .section h2 {
                font-size: 24px;
            }

            .section p {
                font-size: 14px;
            }

            .card-title {
                font-size: 18px;
            }

            .team-member h5 {
                font-size: 16px;
            }

            .team-member p {
                font-size: 12px;
            }
        }
    </style>
</head>

<body>

    <?php 
        $active = 'about';
        include('head.php');
    ?>

    <!-- Hero Section -->
    <div class="hero-section">
        <img src="image/about.jpg" alt="About Us">
        <div class="container">
            <!-- Hero section content goes here -->
        </div>
    </div>

    <!-- Our Mission Section -->
    <div class="section who-we-are">
        <div class="container">
            <h2><b>Our Mission</b></h2>
            <p>Our mission is to bridge the gap between blood donors and recipients, ensuring that no one has to face the challenges of finding a life-saving blood transfusion alone. We strive to create a seamless, user-friendly experience that encourages more people to donate blood regularly.</p>
        </div>
    </div>

    <!-- Who We Are Section -->
    <div class="section who-we-are">
        <div class="container">
            <h2><b>Who We Are</b></h2>
            <p>We are a team of passionate students from <i>Maulana Abul Kalam Azad University Of Technology</i>, driven by the desire to make a positive impact on society. Our backgrounds are diverse, ranging from computer science to healthcare, and we are united by a common goal: to make blood donation easy, accessible, and efficient for everyone.</p>
        </div>
    </div>

    <!-- Ways to Help Section -->
    <div class="section ways-to-help">
        <div class="container">
            <h2><b>Ways to Help</b></h2>
            <p>Donating funds to help advance our research, pouring juice for blood donors, or hosting a blood drive at your organization are all ways that you can get involved.</p>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="card">
                        <img src="image/help-1.jpg" class="card-img-top" alt="Donate Blood">
                        <div class="card-body">
                            <h5 class="card-title"><b>Donate Blood</b></h5>
                            <p class="card-text">The most direct way to help is by donating blood. Each donation can save up to three lives.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card">
                        <img src="image/help-2.jpg" class="card-img-top" alt="Volunteer Team">
                        <div class="card-body">
                            <h5 class="card-title"><b>Volunteer Team</b></h5>
                            <p class="card-text">Volunteers are essential for organizing and running blood drives, raising awareness, and supporting our mission in various ways.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="card">
                        <img src="image/help-3.png" class="card-img-top" alt="Donate Money">
                        <div class="card-body">
                            <h5 class="card-title"><b>Donate Money</b></h5>
                            <p class="card-text">Help us reach more people by sharing our mission on social media, talking to friends and family, and distributing informational materials.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Meet Our Team Section -->
    <div class="section meet-our-team">
        <div class="container">
            <h2><b>Meet Our Team</b></h2>
            <p>Our dedicated team of professionals.</p>
            <div class="row">
                <div class="col-md-3 col-sm-6 team-member">
                    <img src="image/pic1.jpg" alt="Suman Biswas" class="Team">
                    <h5>Suman Biswas</h5>
                    <a href="https://www.linkedin.com/in/suman-biswas-12877b256/"><i class="fab fa-linkedin"></i></a>
                    <!-- <a href="#"><i class="fab fa-twitter"></i></a> -->
                </div>
                <div class="col-md-3 col-sm-6 team-member">
                    <img src="image/pic2.jpg" alt="Priyam Biswas" class="Team">
                    <h5>Priyam Biswas</h5>
                    <a href="https://www.linkedin.com/in/priyam-biswas-a3b737228/"><i class="fab fa-linkedin"></i></a>
                    <!-- <a href="#"><i class="fab fa-twitter"></i></a> -->
                </div>
                <div class="col-md-3 col-sm-6 team-member">
                    <img src="image/pic3.jpg" alt="Manik Das" class="Team">
                    <h5>Manik Das</h5>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <!-- <a href="#"><i class="fab fa-twitter"></i></a> -->
                </div>
                <div class="col-md-3 col-sm-6 team-member">
                    <img src="image/pic4.jpg" alt="Biswajit Goswami" class="Team">
                    <h5>Biswajit Goswami</h5>
                    <a href="https://www.linkedin.com/in/biswajit-goswami-569a06239/"><i class="fab fa-linkedin"></i></a>
                    <!-- <a href="#"><i class="fab fa-twitter"></i></a> -->
                </div>
            </div>
        </div>
    </div>

  
    <!-- Footer Section -->
    <footer>
        <div class="footer-bottom">
            <p>Copyright &copy; 2024 RED-lifeline. All Rights Reserved.</p>
        </div>
    </footer>

</body>
</html>
