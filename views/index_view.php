<!-- Main -->
<main class="container-fluid">
  <div class="row">

    <div class="col-12 text-center p-0 my-4 my-lg-5">
      <h1 class="main-title"><?= $home_page["title"]; ?></h1>
    </div>

    <div class="col-8 m-auto main-text">
      <?= $home_page["home_text"]; ?>
    </div>

  </div>

  <div class="row my-lg-5 flex-wrap mx-0 gap-3 justify-content-center">

    <div class="col-12 text-center mt-5 my-lg-4">
      <h2 class="m-0 service-title"><?= $home_page["sub_title_1"]; ?></h2>
    </div>

    <?php foreach($services as $s): ?>

      <div class="col-md-2 col-5 p-0">
        <div class="card cards-services">
          <img src="<?= $s["img"]?>" class="card-img-top img-card" alt="Blue Bus">
          <div class="card-body p-md-3">
            <h5 class="card-title text-center service-card-title"><?= $s["title"]?></h5>
            <p class="card-text pt-1 pt-lg-2 px-lg-1 service-card-text"><?= strip_tags($s["card_text"])?></p>            
          </div>
        </div>
      </div>

    <?php endforeach; ?>

  </div>

  <div class="row justify-content-center gap-3">
    
    <div class="col-12 text-center mt-4 my-lg-4">
      <h2 class="valor-title m-0"><?= $home_page["sub_title_2"]; ?></h2>
    </div>

    <?php foreach($valors as $v): ?>

      <div class="col-md-2 col-5 p-0">
        <div class="card align-items-center">
          <img src="<?= $v["img"]; ?>" class="card-img-top img-card-valors mt-4" alt="<?= $v["img"]; ?>">
          <div class="card-body">
            <h5 class="card-title text-center valor-card-title">
              <?= $v["title"]; ?>
            </h5>                 
          </div>
        </div>
      </div>

    <?php endforeach; ?>   

  </div>
</main>
<!-- End Main -->
