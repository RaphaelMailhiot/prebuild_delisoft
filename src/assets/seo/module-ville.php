<section class="carousel-ville">
  <div class="container">

    <div class="swiper" data-component="Carousel" data-carousel="five">
      <div class="swiper-wrapper py-2">

        <div class="swiper-slide">
          <a href="#">TEST</a>
        </div>

        <?php
        include("assets/models/db.php");
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        $module_ville = "SELECT * FROM module_ville";
        $module_ville_query = $conn->query($module_ville);

        if ($module_ville_query->num_rows > 0) {
          // output data of each row
          while ($rowk = $module_ville_query->fetch_assoc()) : ?>

            <div class="swiper-slide">
              <a href="<?= $url . $rowk["url"] ?>"><?= $rowk["value"]; ?></a>
            </div>

          <?php
          endwhile;

        } else {
          for ($i = 0; $i < 6; $i++) : ?>
            <div class="swiper-slide">
              <a href="#">TEST</a>
            </div>
          <?php endfor;
        }
        $conn->close(); ?>

      </div>
    </div>
  </div>
</section>
