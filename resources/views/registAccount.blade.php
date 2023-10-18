<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
.container {
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.container .row {
  height: 100%;
}

.col-6 {
  max-width: 1000px;
  width: 100%;
  padding: 10px;
}
  </style>
</head>
<body style="background-color: #E6E6E6;">
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #606E7C;">
        <a class="navbar-brand text-light" href="#">10NopemberCinema</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="border-width: 4px;">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item d-lg-none">
                    <a class="nav-link text-light" href="#">Dashboard</a>
                </li>
                <li class="nav-item d-lg-none">
                    <a class="nav-link text-light" href="#">Account</a>
                </li>
            </ul>
        </div>
        <div class="ml-auto d-none d-lg-block">
            <a class="nav-link text-light" href="#">Dashboard</a>
        </div>
        <div class="ml-auto d-none d-lg-block">
            <a class="nav-link text-light" href="#">Account</a>
        </div>
    </nav>

    <div class="container" style="background-color: #FFFFFF;">
    <div class="row justify-content-center align-items-center" style="height:100vh;">
    <div class="col-12">
      <div class="row justify-content-center">10NopemberCinema - Registrasi</div>
        <hr class="line-secondary mt-0 mb-4" style="border-top:2px solid #6c757d;">
      </div>
      <div class="col-6">
        <form action="/db-form" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            @csrf
            <label for="exampleInputname1" class="form-label">Name</label>
            <input name="name" type="text" class="form-control" id="exampleInputname1" aria-describedby="nameHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputphone1" class="form-label">Phone</label>
            <input name='phone' type="text" class="form-control" id="exampleInputphone1">
          </div>
          <div class="mb-3">
            <label for="exampleInputalamat1" class="form-label">Email</label> <!-- sebelumnya "alamat" -->
            <input name='email' type="text" class="form-control" id="exampleInputalamat1">
          </div>
          <div class="mb-3">
            <label for="exampleInputnominal1" class="form-label">Password</label> <!-- sebelumnya "Nominal Uang" -->
            <input name='password' type="password" class="form-control" id="exampleInputnominal1" step="0.01" min="2.50" max="99.99">
          </div>
          <div class="mb-3">
            <label for="exampleInputtenor1" class="form-label">Confirm Password</label> <!-- sebelumnya "tenor" -->
            <div class="input-group">
            <input name='confirm' type="password" class="form-control" id="exampleInputnominal1" step="1.00" min="1" max="24">
            </div>
            <span class="form-text text-muted">Password harus sama </span>
          </div>
          <div class="mb-3">
            <label for="exampleInputgambar1" class="form-label">Foto Profile</label> <!-- sebelumnya "gambar" -->
            <input name='gambar' type="file" class="form-control" id="exampleInputgambar1">
          </div>
          <button type="submit" class="btn btn-secondary">Registrasi</button>
        </form>
      </div>
      <div>Sudah Punya Akun, 
      <a href="">
        Login
      </a></div>
      <div class="col-12">
        <hr class="line-secondary mt-0 mb-4" style="border-top:2px solid #6c757d;">
      </div>
    </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>