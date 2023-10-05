<div class="modal fade" id="loginmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="logincode.php" method="POST">
            <div class="modal-body">
          <div class="form-group">
          <input type="email" name="email" class="form-control" placeholder="Mailinizi girin..">
          </div>

          <div class="form-group">
          <input type="password" name="password" class="form-control" placeholder="Şifrenizi girin..">
          </div>

            <div class="modal-footer">
              
              <button type="submit" class="btn btn-primary">Giriş Yap</button>
            </div>
        </form>


    </div>
  </div>
</div>



<!-- navbar kısmı girişi ve modals bitişi -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Sırmalı Tatil Köyü</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="modal" data-bs-target="loginmodal" href="#">Login</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
 
 

    </div>
  </div>
</nav>