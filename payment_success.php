<?php
if (!isset($_GET['file'])) {
    echo "No certificate file specified.";
    exit();
}

$certificateFile = $_GET['file'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
    }
    .alert {
        margin-top: 20px;
    }
  </style>
</head>
<body>

<div class="container">
  <h1 class="mt-4 mb-3">Payment Received Successfully</h1>
  <div class="alert alert-success">
    Your payment has been received successfully!
  </div>
  <div>
    <a href="<?php echo $certificateFile; ?>" class="btn btn-primary" target="_blank">Download Your Certificate</a>
  </div>
</div>

</body>
</html>
