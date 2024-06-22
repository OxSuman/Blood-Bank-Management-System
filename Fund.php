<?php 
$active = 'Fund';
include('head.php');
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
        justify-content: space-between;
        align-items: center;
    }
    .form-container {
        flex: 1;
    }
    .image-container {
        flex: 1;
        text-align: center;
    }
    .image-container img {
        max-width: 100%;
        height: auto;
    }
    .alert {
        margin-top: 20px;
    }
  </style>
</head>
<body>

<div id="page-container" style="margin-top:50px; position: relative; min-height: 84vh;">
  <div class="container">
    <div id="content-wrap" style="padding-bottom:50px;">
      <h1 class="mt-4 mb-3">Donate funds for blood donation camps</h1>
      <div class="row">
        <div class="col-lg-8 mb-4 form-container">
          <h4>Upload details and collect your fund grant certificate via email</h4>
          <form name="sentMessage" method="post">
            <div class="control-group form-group">
              <div class="controls">
                <label>Full Name:</label>
                <input type="text" class="form-control" id="name" name="fullname" required>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Transaction ID:</label>
                <input type="text" class="form-control" id="transactionID" name="transactionID" required>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Email Address:</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
            </div>
            <button type="submit" name="send" class="btn btn-primary">Submit</button>
            <p>* Certificate will be sent within 3 working days</p>
          </form>

          <?php
          if ($_SERVER['REQUEST_METHOD'] == 'POST') {
              $name = $_POST['fullname'];
              $transactionID = $_POST['transactionID'];
              $email = $_POST['email'];

              $conn = new mysqli("localhost", "root", "", "blood_donation");

              // Check connection
              if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
              }

              // Prepared statement to prevent SQL injection
              $stmt = $conn->prepare("SELECT * FROM fund_donation WHERE t_id = ?");
              $stmt->bind_param("s", $transactionID);
              $stmt->execute();
              $result = $stmt->get_result();

              if ($result->num_rows > 0) {
                  $row = $result->fetch_assoc();
                  if ($row['fdonor_name'] == $name && $row['fdonor_mail'] == $email) {
                      echo "<div class='alert alert-success'>Certificate generated successfully.</div>";
                  } elseif (!empty($row['fdonor_name']) && !empty($row['fdonor_mail'])) {
                      echo "<div class='alert alert-danger'>This transaction ID has already been used with different details.</div>";
                  } else {
                      $updateStmt = $conn->prepare("UPDATE fund_donation SET fdonor_name = ?, fdonor_mail = ? WHERE t_id = ?");
                      $updateStmt->bind_param("sss", $name, $email, $transactionID);
                      if ($updateStmt->execute()) {
                          echo "<div class='alert alert-success'>Certificate generated successfully.</div>";
                      } else {
                          echo "<div class='alert alert-danger'>Error: " . $updateStmt->error . "</div>";
                      }
                      $updateStmt->close();
                  }
              } else {
                  $insertStmt = $conn->prepare("INSERT INTO fund_donation (t_id, fdonor_name, fdonor_mail) VALUES (?, ?, ?)");
                  $insertStmt->bind_param("sss", $transactionID, $name, $email);
                  if ($insertStmt->execute()) {
                      echo "<div class='alert alert-success'>Submited successfully.</div>";
                  } else {
                      echo "<div class='alert alert-danger'>Error: " . $insertStmt->error . "</div>";
                  }
                  $insertStmt->close();
              }

              $stmt->close();
              $conn->close();
          }
          ?>
        </div>
        <div class="col-lg-4 image-container">
          <img class="img-fluid rounded" src="image/QR.jpg" alt="QR Code">
        </div>
      </div>
    </div>
  </div>
</div>
<?php include('footer.php'); ?>

</body>
</html>
