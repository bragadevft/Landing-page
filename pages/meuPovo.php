<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Landing Page | Candidatura a Prefeito</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <link rel="stylesheet" href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" />
</head>
<body>
  <?php include_once ("../include/header.php");?>

  <section id="projetos">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="text-center mb-5">Apoiadores</h2>
      </div>
    </div>
    <div class="row">
      <?php
        for ($i = 1; $i <= 33; $i++) {
          echo '
          <div class="col-md-4 mb-4" data-aos="fade-right">
            <div class="card shadow-sm" data-aos="fade-down">
              <img src="../img/apoiador'.$i.'.jpg" class="card-img-top" alt="Apoiador '.$i.'">
            </div>
          </div>
          ';
        }
      ?>
    </div>
  </div>
</section>
<section id="depoimento" class="py-3">
      <div class="container depoimento" data-aos="fade-right">
        <h2 class="text-center mb-4">O que o povo diz:</h2>
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="video-container mb-4">
              <video controls width="100%">
                <source src="../videos/video1.mp4" type="video/mp4" />
                Desculpe, seu navegador não suporta vídeos HTML5.
              </video>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="video-container mb-4">
              <video controls width="100%">
                <source src="../videos/video2.mp4" type="video/mp4" />
                Desculpe, seu navegador não suporta vídeos HTML5.
              </video>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="video-container mb-4">
              <video controls width="100%">
                <source src="../videos/video3.mp4" type="video/mp4" />
                Desculpe, seu navegador não suporta vídeos HTML5.
              </video>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="video-container mb-4">
              <video controls width="100%">
                <source src="../videos/video4.mp4" type="video/mp4" />
                Desculpe, seu navegador não suporta vídeos HTML5.
              </video>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="video-container mb-4">
              <video controls width="100%">
                <source src="../videos/video5.mp4" type="video/mp4" />
                Desculpe, seu navegador não suporta vídeos HTML5.
              </video>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="video-container mb-4">
              <video controls width="100%">
                <source src="../videos/video6.mp4" type="video/mp4" />
                Desculpe, seu navegador não suporta vídeos HTML5.
              </video>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="video-container mb-4">
              <video controls width="100%">
                <source src="../videos/video7.mp4" type="video/mp4" />
                Desculpe, seu navegador não suporta vídeos HTML5.
              </video>
            </div>
          </div>
        </div>
      </div>
    </section>

  <?php include_once ("../include/footer.php"); ?>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="../js/custom.js"></script>
  <script>
    AOS.init({
      duration: 800,
    });
    $(".navbar-toggler").click(function () {
      $(".navbar-collapse").toggleClass("active");
    });
  </script>
</body>
</html>
