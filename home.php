<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>BloodBank & Donor Management System</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: none;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
        }
        .card-header {
            font-size: 1.5rem;
            font-family: 'Arial', sans-serif;
            text-transform: uppercase;
            letter-spacing: 1px;
            background: linear-gradient(to right, #1e3c72, #2a5298);
            color: #fff;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            padding: 1rem;
        }
        .card-body {
            flex: 1;
            overflow-y: auto;
            padding: 1.5rem;
        }
        .card-body::-webkit-scrollbar {
            width: 8px;
        }
        .card-body::-webkit-scrollbar-thumb {
            background-color: #2a5298;
            border-radius: 10px;
        }
        .card-body::-webkit-scrollbar-track {
            background-color: #f1f1f1;
            border-radius: 10px;
        }
        .card-body p {
            font-size: 1rem;
            line-height: 1.6;
            color: #333;
        }
        .row {
            display: flex;
            flex-wrap: wrap;
        }
        .col-lg-4 {
            display: flex;
            margin-bottom: 1.5rem;
        }

        @media (max-width: 768px) {
            .carousel-inner img, .card-img-top {
                height: auto;
                
            }
        }

        .premium-button {
            background-color: #E66245; /* Premium pink color */
            color: #fff; /* Black text color */
            border: none;
            transition: all 0.6s ease;
            width: 200px;
            height: auto; /* Adjust height as needed */
            font-family: cursive;
            margin-bottom: 10px; /* Margin between buttons */
           
            
        }

        .premium-button:hover {
            background-color: #FF3131; /* Darker pink on hover */
            color: #fff; /* White text on hover */
            font-family: fantasy;
    align-items: center;
        }
       
        @keyframes fadeInScale {
            0% {
                opacity: 0;
                transform: scale(0.8);
            }
            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        .animated-text {
            font-size: 45px;
            font-family: fantasy;
            text-align: center;
            animation: fadeInScale 2s ease-in-out forwards;
        }
        
    </style>
</head>

<body>


    <?php
    $active = "home";
    include('head.php');
    ?>


<div id="page-container" class="mt-5 position-relative" style="min-height: 84vh;">
    <div class="container">
        <div id="content-wrap" style="padding-bottom: 75px;">
            <br>
        
            <div class="row">
                <div class="col-lg-6 order-lg-2">
                    <img class="img-fluid rounded" src="image/ggyy.gif" alt="">
                </div>
                <div class="col-lg-6 order-lg-1">
                  <br> <br> <br>
                  <br>  <br> <br> 
                  <h1 class="animated-text">Donate blood, save lives. Be a hero in someone's story.</h1>
    </Br> <center>  <a class="btn btn-lg btn-block premium-button mb-3" href="donate_blood.php">Become a Donor</a>
                    <a class="btn btn-lg btn-block premium-button" href="need_blood.php">Need Blood</a>
    </center>
            </div>
                
            </div>
           

            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <h4 class="card-header bg-info text-white" style="font-size: 30px; font-family: fantasy;">The need for blood</h4>
                        <div class="card-body">
                            <?php
                            include 'conn.php';
                            $sql = "SELECT * FROM pages WHERE page_type='needforblood'";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo $row['page_data'];
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <h4 class="card-header bg-info text-white" style="font-size: 30px; font-family: fantasy;">Blood Tips</h4>
                        <div class="card-body">
                            <?php
                            include 'conn.php';
                            $sql = "SELECT * FROM pages WHERE page_type='bloodtips'";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo $row['page_data'];
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <h4 class="card-header bg-info text-white" style="font-size: 30px; font-family: fantasy;">Who you could Help</h4>
                        <div class="card-body">
                            <?php
                            include 'conn.php';
                            $sql = "SELECT * FROM pages WHERE page_type='whoyouhelp'";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo $row['page_data'];
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col-lg-6">
                    <h2 style="font-size: 45px; font-family: fantasy;">BLOOD GROUPS</h2>
                    <p>
                        <?php
                        include 'conn.php';
                        $sql = "SELECT * FROM pages WHERE page_type='bloodgroups'";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo $row['page_data'];
                            }
                        }
                        ?>
                    </p>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid rounded" src="image/blood_donationcover.jpeg" alt="">
                </div>
            </div>

            <hr>

            <div class="row mb-4">
                <div class="col-md-8">
                    <h4 style="font-size: 45px; font-family: fantasy;">UNIVERSAL DONORS AND RECIPIENTS</h4>
                    <p style="font-family: cursive;">
                        The most common blood type is O, followed by type A. Type O individuals are often called "universal donors" since their blood can be transfused into persons with any blood type. Those with type AB blood are called "universal recipients" because they can receive blood of any type.
                        For emergency transfusions, blood group type O negative blood is the variety of blood that has the lowest risk of causing serious reactions for most people who receive it. Because of this, it's sometimes called the universal blood donor type.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?>
</div>

</body>

</html>
