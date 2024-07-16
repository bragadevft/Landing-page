<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Landing Page | Example</title>
    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      rel="stylesheet"
    />
    <link href="../css/style.css" rel="stylesheet" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css"
    />
  </head>
  <body>
    <?php include_once ("../include/header.php");?>
    <main>
      <section id="valores">
        <div class="container valores" data-aos="fade-right">
          <div class="row align-items-center">
            <div class="col-md-6" data-aos="fade-down">
              <img
                src="../img/valores1.jpg"
                class="img-fluid rounded"
                alt="Imagem de campanha"
              />
            </div>
            <div class="col-md-6">
              <div class="valores-text">
                <h2>Respeito</h2>
                <p class="lead">
                  O respeito é o espaço de permissão ao diálogo, a críticas, à
                  livre manifestação, à diversidade, ao conhecimento, ao
                  acolhimento e à escuta. A não aceitação das diferenças gera
                  desentendimentos que podem ser acompanhados de violências.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="valores">
        <div class="container valores" data-aos="fade-left">
          <div class="row align-items-center">
            <div class="col-md-6">
              <div class="valores-text">
                <h2>Responsável</h2>
                <p class="lead">
                  Responsável é algo ou alguém que é capaz de responder pelos
                  seus próprios atos ou pelas ações de outras pessoas, ou seja,
                  que assume a responsabilidade.
                </p>
              </div>
            </div>
            <div class="col-md-6" data-aos="fade-down">
              <img
                src="../img/valores2.jpg"
                class="img-fluid rounded"
                alt="Imagem de campanha"
              />
            </div>
          </div>
        </div>
      </section>
      <section id="valores">
        <div class="container valores" data-aos="fade-right">
          <div class="row align-items-center">
            <div class="col-md-6" data-aos="fade-down">
              <img
                src="../img/valores3.jpg"
                class="img-fluid rounded"
                alt="Imagem de campanha"
              />
            </div>
            <div class="col-md-6">
              <div class="valores-text">
                <h2>Compromisso</h2>
                <p class="lead">
                  Compromisso, por sua vez, é algo assumido, a palavra
                  empenhada, o gesto de apoio, o sentimento de responsabilidade
                  perante alguém ou algum fato. “Comprometimento é tudo isso e
                  muito mais. É o ato de dedicar-se intensamente, entregar-se a
                  uma causa, uma meta, um desafio, uma missão, individualmente
                  ou em equipe.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="valores">
        <div class="container valores" data-aos="fade-left">
          <div class="row align-items-center">
            <div class="col-md-6">
              <div class="valores-text">
                <h2>Honesto</h2>
                <p class="lead">
                  Ser honesto significa escolher não mentir, roubar, enganar ou
                  trapacear de modo algum. Quando somos honestos, desenvolvemos
                  a força de caráter que irá nos permitir prestar grande serviço
                  a Deus e ao próximo. Somos abençoados com paz de espírito e
                  respeito próprio e teremos a confiança do Senhor e das
                  pessoas.
                </p>
              </div>
            </div>
            <div class="col-md-6" data-aos="fade-down">
              <img
                src="../img/valores4.jpg"
                class="img-fluid rounded"
                alt="Imagem de campanha"
              />
            </div>
          </div>
        </div>
      </section>
      <section id="valores">
        <div class="container valores" data-aos="fade-right">
          <div class="row align-items-center">
            <div class="col-md-6" data-aos="fade-down">
              <img
                src="../img/valores5.jpg"
                class="img-fluid rounded"
                alt="Imagem de campanha"
              />
            </div>
            <div class="col-md-6">
              <div class="valores-text">
                <h2>Trabalho</h2>
                <p class="lead">
                  Que o trabalho, biblicamente falando, em sua origem, é uma
                  expressão de prazer, um elemento que integra a realidade
                  humana como elevado fator de felicidade. Deus ensina ao homem
                  que o trabalho deve fazer parte da sua vida, como fator de
                  concreção de realização pessoal.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <?php include_once ("../include/footer.php");?>
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
