<?php 
    include 'db.php';
    include 'header.php';
 
?>
      <div class="wrapper">
        <div class="card" v-for="item in albums">
            <img :src="item.poster" alt="">
            <h3 class="title">{{item.title}}</h3>
            <span class="author">{{item.author}}</span>
            <span class="year">{{item.year}}</span>
        </div>
      </div>
    </div>

    <!-- javascript -->
    <script src="js/script.js" charset="utf-8"></script>
  </body>
</html>
