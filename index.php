<?php 

 include 'db.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!-- vue js -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <!-- axios cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.js" integrity="sha512-otOZr2EcknK9a5aa3BbMR9XOjYKtxxscwyRHN6zmdXuRfJ5uApkHB7cz1laWk2g8RKLzV9qv/fl3RPwfCuoxHQ==" crossorigin="anonymous"></script>
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <title>Php dischi</title>
  </head>
  <body>
    <div id="app">
    <!-- header (logo img) -->
    <header>
      <img src="download.png" alt="">
      <select class="" name="genres" v-model="genreSelect">
        <option value="">All genres</option>
      </select>
    </header>

    <div class="wrapper">
     <?php foreach($dischi as $disc): ?>
      
      <div class="card">
          <img src="<?php echo $disc['poster'] ?>" alt="">
          <h3 class="title"><?php echo $disc['title'] ?></h3>
          <span class="author"><?php echo $disc['author'] ?></span>
          <span class="year"><?php echo $disc['year'] ?></span>
      </div>
    <?php endforeach; ?>

    </div>
  </div>

    <!-- javascript -->
    <script src="js/script.js" charset="utf-8"></script>
  </body>
</html>
