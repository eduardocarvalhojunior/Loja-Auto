

<?php require_once("./inc/head.php"); ?>

<?php require_once("./inc/header.php"); ?>
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/bmw.jpeg" class="d-block w-100" height="600px">
      <div class="carousel-caption d-none d-md-block">
        <h5>Não tenha medo</h5>
        <p>Se Surpreenda com o novo</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/urus.jpeg" class="d-block w-100" height="600px">
      <div class="carousel-caption d-none d-md-block">
        <h5>A escolha é sua</h5>
        <p>Acredite, arrisque e siga em frente</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/lexus.jpeg" class="d-block w-100" height="600px">
      <div class="carousel-caption d-none d-md-block">
        <h5>Você está no comando</h5>
        <p>Não deixo nada para o amanhã</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<main class="container" class=row>
<section in=serviços>
<h1 class="col-12 text-center text-info mt-5 mb-4">Serviços</h1>
<style> .h1{position:relative}h1:before{content: "";display:block;width:380px;height:1px;background:gray;position: absolute;left: 0;top: 50%;z-index: -2;}h1:after{content: ""; display:block;width: 380px;height:1px;background: grey;position: absolute;right: 0;top: 50%;z-index: -2;}
</style>
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="img/aparelho.jpeg" alt="Imagem de capa do card">
    <div class="card-body">
      <h5 class="card-title" style="text-decoration: underline; text-align: center">Análise do Sistema de Injeção</h5>
      <p class="card-text">Fazemos análise e diagnóstico do sistema de injeção eletrônica completo.</p>
      <p class="card-text"><small class="text-muted">Tempo médio de serviço: 2 horas. </small></p> 
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="img/correia.jpeg" alt="Imagem de capa do card">
    <div class="card-body">
      <h5 class="card-title" style="text-decoration: underline; text-align: center">Troca de Correia Dentada</h5>
      <p class="card-text">Troca da correia dentada e rolamento tensor.</p>
      <p class="card-text"><small class="text-muted">Tempo médio de Serviço: 1 hora e 30 minutos.</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="img/preventiva.jpeg" alt="Imagem de capa do card">
    <div class="card-body">
      <h5 class="card-title" style="text-decoration: underline; text-align: center">Manutenção Preventiva</h5>
      <p class="card-text">Marque sua manutenção preventiva alguns dias antes de pegar a estrada.</p>
      <p class="card-text"><small class="text-muted">Tempo médio de serviço: 4 horas</small></p>
    </div>
  </div>
</div>
<h1 class="col-12 text-center text-info mt-5 mb-4">Especialidades</h1>
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="img/analise.jpeg" alt="Imagem de capa do card">
    <div class="card-body">
      <h5 class="card-title" style="text-decoration: underline; text-align: center">Manutenção do Sistema Partida</h5>
      <p class="card-text">Teste e correção de todo o sistema elétrico de iginição e combustão.</p>
      <p class="card-text"><small class="text-muted">Tempo médio de serviço: 3 horas.</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="img/manutencao.jpeg" alt="Imagem de capa do card">
    <div class="card-body">
      <h5 class="card-title" style="text-decoration: underline; text-align: center">Limpeza do Sistema de Injeção</h5>
      <p class="card-text"> Manutenção preventiva e corretiva do sistema de injeção de combustível.</p>
      <p class="card-text"><small class="text-muted">Tempo médio de serviço: 2 horas.</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="img/injeção.jpeg" alt="Imagem de capa do card">
    <div class="card-body">
      <h5 class="card-title" style="text-decoration: underline; text-align: center,">Correção dos Sistemas Elétricos</h5>
      <p class="card-text">É importante também a parte mecanica do carro a parte elétrica em dia evita que você fique na mão.</p>
      <p class="card-text"><small class="text-muted">Tempo médio de serviço: 3 horas.</small></p>
    </div>
  </div>
</div>
</section>

<?php require_once("./inc/footer.php"); ?>
   