<?php include('includes/header.php'); ?>
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

<main>

  <!-- Intro -->
  <section id="intro" class="text-center bg-light py-5" data-aos="zoom-in">
    <img src="assets/img/port.png" alt="Avatar" class="rounded-circle mb-3 avatar-hover" width="150">
    <h1 class="display-5 fw-bold">Henrique Zaiba Staszewski</h1>
    <p class="lead">Estudante de Análise e Desenvolvimento de Sistemas</p>
  </section>

  <!-- Sobre Mim -->
  <section id="sobre" class="container py-5" data-aos="fade-right">
    <h2 class="text-center mb-4">Sobre Mim</h2>
    <p class="text-center">Profissional de T.I com formação em Análise e Desenvolvimento de Sistemas e experiência em suporte técnico, manutenção de hardware, gerenciamento de sistemas internos e ERPs. Atualmente atuo como Auxiliar de T.I na Várzea Net Telecomunicações, 
      com foco em desenvolvimento backend com PHP. Possuo também conhecimentos em bancos de dados relacionais, como MySQL, 
      voltados à criação e manutenção de estruturas simples para aplicações web. Estou em constante aprimoramento na área de desenvolvimento web, 
      com interesse em me consolidar como desenvolvedor backend.</p>
    <div class="text-center mt-4">
      <span class="badge bg-primary p-2 mx-1">HTML</span>
      <span class="badge bg-success p-2 mx-1">CSS</span>
      <span class="badge bg-warning text-dark p-2 mx-1">JavaScript</span>
      <span class="badge bg-secondary p-2 mx-1">PHP</span>
      <span class="badge bg-info text-dark p-2 mx-1">Bootstrap</span>
    </div>
  </section>

  <!-- Projetos -->
  <section id="projetos" class="bg-light py-5">
    <div class="container">
      <h2>Projetos</h2>
      <div class="row">
        <div class="col-md-6">
          <div class="card mb-4">
            <img src="assets/img/movie.png" class="card-img-top" alt="Projeto 1">
            <div class="card-body">
              <h5 class="card-title">Site de reviews</h5>
              <p class="card-text">site de reviews de filmes, responsivo para celular, e com autenticação.</p>
              <a href="http://172.16.0.235:7450/" class="btn btn-primary">Ver Projeto</a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card mb-4">
            <img src="assets/img/orie.png" class="card-img-top" alt="Projeto 2">
            <div class="card-body">
              <h5 class="card-title">Site de Culinária Árabe</h5>
              <p class="card-text">Site responsivo com receitas e informações culturais.</p>
              <a href="http://172.16.0.235:7550/index.html" class="btn btn-primary">Ver Projeto</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Parceiros -->
  <section id="parceiros" class="container py-5" data-aos="fade-left">
    <h2 class="text-center mb-4">Parceiros</h2>
    <div class="row text-center">
      <div class="col"><img src="assets/img/anhanguera.jpeg" alt="Parceiro 1" height="50"></div>
      <div class="col"><img src="assets/img/varzea.jpeg" alt="Parceiro 2" height="50"></div>
      <div class="col"><img src="assets/img/unip.png" alt="Parceiro 3" height="50"></div>
    </div>
  </section>

  <!-- Contato -->
  <section id="contato" class="bg-light py-5" data-aos="fade-up">
    <div class="container">
      <h2 class="text-center mb-4">Contato</h2>
      <form class="mx-auto" style="max-width: 600px;">
        <div class="mb-3">
          <label for="nome" class="form-label">Nome</label>
          <input type="text" class="form-control" id="nome">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" class="form-control" id="email">
        </div>
        <div class="mb-3">
          <label for="mensagem" class="form-label">Mensagem</label>
          <textarea class="form-control" id="mensagem" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
      <p class="text-center mt-3">Redes Sociais:
        <a href="https://www.instagram.com/z41b4/">Instagram</a> |
        <a href="https://www.linkedin.com/in/henrique-zaiba-7b2041232/">LinkedIn</a> |
        <a href="https://github.com/Z41B4">GitHub</a>
      </p>
    </div>
  </section>

</main>

<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<?php include('includes/footer.php'); ?>
