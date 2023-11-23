<!DOCTYPE html>
<html lang="en">

<head>
  <!-- metas -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- externos -->
  <script src="/script.js"></script>
  <!-- blibiotecas css e js -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <link href="style.css">
  <!-- s bibliotecas AOS em seu HTML: -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <!-- document home -->



</head>

<body>

  <!-- menu do site -->


  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">

      <!-- por imagem aqui -->

      <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="modeloNavbar.html">

            <!-- linkei imagem da pixabay no site -->

            <img src="https://cdn.pixabay.com/photo/2016/06/09/18/36/logo-1446293_1280.png" alt="Bootstrap" width="30"
              height="24"> Salve a Amazônia
          </a>
        </div>
      </nav>
      <!-- Fim da logo aqui -->

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" href="index.html">Home</a>
          <a class="nav-link" href="galeria.html">Galeria</a>
          <a class="nav-link active" aria-current="page" href="#">download</a>
          <a class="nav-link" href="doacoes.html">Doações</a>
          <a class="nav-link" href="contato.html">Contato</a>
          <a hidden class="nav-link disabled" aria-disabled="true">Disabled</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- fim do menu do site -->

  <!-- Inicio do breadcrump -->
  <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item"><a href="galeria.html">Galeria</a></li>
      <li class="breadcrumb-item active" aria-current="page">Download</li>

    </ol>
  </nav>
  <!-- fim do breadcrump -->

  <!-- template largo -->
  <div class="card text-bg-dark">
    <img src="IMAGES/GP1SZPHR_.jpg" class="card-img" alt="...">
    <div class="card-img-overlay">
      <h1 class="card-title"><a>Salve a amazônia.</h1>
      <p class="card-text">A Amazônia: um pulmão do mundo em perigo.</p>
      <a href="https://sosamazonia.org.br/doe">
        <button class="btn" style="background-color:green; color: white;" class="btn btn-close-white">
          <p class="card-text"> Faça a diferença, doe agora através do sos amazonia. </p>
        </button>
      </a>

    </div>
  </div>

  <!-- fim do template largo -->

  <!-- botao de download -->
  <div class="position-relative">
    <div class="position-absolute top-100 start-50 translate-middle  ">
      <button class="btn  shadow-lg p-3 mb-5 p-3 mb-2 bg-success text-white rounded rounded-pill rounded-start "> <a
          class="fw-bold" style="font-size:25px;color:white;" href="download_image.php">Faça download de uma imagem para
          conscientizar!</a></button>
    </div>
  </div>
  <section class="container">
    <div>

    </div>






    <!-- Seção de Links -->
    <section class="container mt-4">
      <h2>Links Úteis</h2>
      <ul>
        <li><a href="https://www.greenpeace.org/brasil/">Greenpeace Brasil</a></li>
        <li><a href="https://www.worldwildlife.org/">World Wildlife Fund (WWF)</a></li>
        <li><a href="https://www.nationalgeographic.com/environment/article/amazon-rainforest-facts">National Geographic
            - Amazon Rainforest Facts</a></li>
      </ul>
    </section>


    <iframe src="https://giphy.com/embed/J4Ol31fYR7zAYr1Xje" width="480" height="251" frameBorder="0"
      class="giphy-embed" allowFullScreen></iframe>
    <p><a href="https://giphy.com/gifs/gptv-bolsonaro-amazonia-desmatamento-J4Ol31fYR7zAYr1Xje">via GIPHY</a></p>







</body>

</html>