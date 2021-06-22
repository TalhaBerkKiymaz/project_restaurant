<?php
include("./connect_db.php");

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <title>Notification System in PHP and MySql</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>

  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <a class="navbar-brand" style="font-size: 28px;" href="#">Orders</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link btn-lg" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30 " fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
              <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z" />
            </svg>
            <?php
            $query = "SELECT * from `notifications` where `status` = 'unread' order by `date` DESC";
            if (count(fetchAll($query)) > 0) {
            ?>
              <span class="badge badge-light" style="font-size: 10px;"><?php echo count(fetchAll($query)); ?></span>
            <?php
            }
            ?>
          </a>
          <div class="dropdown-menu pull-right" aria-labelledby="dropdown01">
            <?php
            $query = "SELECT * from `notifications` order by `date` DESC";
            if (count(fetchAll($query)) > 0) {
              foreach (fetchAll($query) as $i) {
            ?>
                <a style="
                          font-size: large;
                         <?php
                          if ($i['status'] == 'unread') {
                            echo "font-weight:bold;";
                          }
                          ?>
                         " class="dropdown-item" href="view_notification.php?id=<?php echo $i['id'] ?>">
                  <small><i><?php echo date('F j, Y, g:i a', strtotime($i['date'])) ?></i></small><br />
                  <?php

                  if ($i['type'] == 'order') {
                    echo  "A new order has been made." . ucfirst($i['type']);
                  } else if ($i['type'] == 'reservation') {
                    echo "A new reservation has been made." . ucfirst($i['type']);
                  }

                  ?>
                </a>
                <div class="dropdown-divider"></div>
            <?php
              }
            } else {
              echo "No Records yet.";
            }
            ?>
          </div>
        </li>
      </ul>
  </nav>
  <?php

  if (isset($_POST['submit'])) {
    $message = $_POST['message'];
    $type = $_POST['type'];
    if($message == NULL){
      echo '<script>alert("Please choose a Tabel Number")</script>';
    }else{
        $query = "INSERT INTO `notifications` (`id`, `name`, `type`, `message`, `status`, `date`) VALUES (NULL, '', '$type', '$message', 'unread', CURRENT_TIMESTAMP)";
        //  echo $query; exit();
        if (performQuery($query)) {
            echo '<script>alert("Your order has sent to Kitchen and Bar.")</script>';
            // header("location:http://www.georgehollywood.com/index.php?content=notification");
        }
    }
  }

  ?>
  <div class="container">
    <div class="col-6" style="font-size: 2rem; border: 1px solid black; border-radius: 25px;">
      <form method="post">
        <div class="bestel-form">
          <label for="basic url" class="form-label">Type of Service</label><br>
          <select name="type" id="type" style="width: 250px;">
            <option value="order">Order</option>
            <option value="reservation">Reservation</option>
          </select>
        </div>
        <br>
        <div class="bestel-form">
          <label for="basic url" class="form-label">Tabel Number</label>
          <input type="text" name="message"style="float: right;">
          <!-- <select name="message" style="float: right;" id="message">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>

          </select> -->
          
          <hr>
          <label for="">Eten Keuze #1</label>
          <select name="eten1" id="eten" style="float: right;">
          <option value="Sushi_t">Sushi Tonijn</option>
          <option value="Seizoen_o">Seizoen Oesters</option>
          <option value="Avacado_t">Avacado Toast</option>
          </select>
          <div>
          <small for="">Aantal</small>
          <select name="aantal1" style="float: right;" id="">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          </select>
          </div>
          <hr>
          <label for="">Eten Keuze #2</label>
          <select name="eten2" id="eten" style="float: right;">
          <option value="Sushi_t">Sushi Tonijn</option>
          <option value="Seizoen_o">Seizoen Oesters</option>
          <option value="Avacado_t">Avacado Toast</option>
          </select>
          <div>
          <small for="">Aantal</small>
          <select name="aantal2" id="" style="float: right;">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          </select>
          </div>

          <hr>
          <label for="">Dranken</label>
          <select name="drink" id="drink" style="float: right;">
          <option value="Verdejo">Verdejo</option>
          <option value="Merlot">Merlot</option>
          <option value="Aixrose">Aix Rose</option>
          </select>
        </div>
        <hr>
        <br>
        <br>
        <button name="submit" style="float: right;"  width="100" height="300" type="submit">Order</button>
          <br>
          <br>
      </form>
    </div>

  </div>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>