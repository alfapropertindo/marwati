<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PRODUK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="bg-secondary">
   <div class="container border mb-4 mt-4 rounded-3 shadow bg-white">
    <nav class=" d-md-flex p-4"> 
      <div><h1>PRODUK</h1></div>
      <div class="ms-auto my-auto">
        <ul class="list-inline m-0">
          <li class="list-inline-item mx-md-3"><a href="" class="text-decoration-none text-dark fw-bold">PRODUK KAMI</a></li>
          <li class="list-inline-item mx-md-3"><a href="" class="text-decoration-none text-dark fw-bold">TENTANG KAMI</a></li>
          <li class="list-inline-item mx-md-3"><a href="" class="text-decoration-none text-dark fw-bold">CARA ORDER</a></li>
        </ul>
      </div>
    </nav>
    <div class="px-4 mb-4">
      <img src="gambar/foto.JPG" class="w-50 rounded-3"/>
    </div>
    <h3 class="text-center"> My Collections</h3>
    <div class="text-center w-50 mx-auto fw-light"> <h3> PRODUK DALAM PERUSAHAAN</h3></div>
   <div class="row row-cols-md-3 row-cols-2 gx-5 p-5">
    <div class="col mb-5">
      <div class="card shadow">
      <img src="gambar/geologi.JPG" class="card-img-top" />
      <div class="card-body">
        <h5 class="card-title">GAMBAR 1</h5>
        <p class="card-text">1 PERTAMBANGAN</p>
      </div>
<div class="card-footer d-md-flex">
<a class="btn btn-sm btn-primary d-block btnDetail">detail</a>
<span class="ms-auto text-danger fw-bold d-block text-center harga">Rp. 500.000/1 rit</span>
</div>
    </div>
  </div>
  <div class="col mb-5">
    <div class="card shadow">
    <img src="gambar/letak.JPG" class="card-img-top" />
    <div class="card-body">
      <h5 class="card-title">GAMBAR 2</h5>
      <p class="card-text">2 PERTAMBANGAN</p>
    </div>
<div class="card-footer d-md-flex">
<a class="btn btn-sm btn-primary d-block btnDetail">detail</a>
<span class="ms-auto text-danger fw-bold d-block text-center harga">Rp. 500.000/1 rit</span>
</div>
  </div>
</div>
<div class="col">
  <div class="card shadow">
  <img src="gambar/quarry.JPG" class="card-img-top" />
  <div class="card-body">
    <h5 class="card-title">GAMBAR 3</h5>
    <p class="card-text">3 PERTAMBANGAN</p>
  </div>
<div class="card-footer d-md-flex">
<a class="btn btn-sm btn-primary d-block btnDetail">detail</a>
<span class="ms-auto text-danger fw-bold d-block text-center harga">Rp. 500.000/1 rit</span>
</div>
</div>
</div>
  </div>
  <div class="px-4 py-4 bg-white text-center">
    <div class="mx-auto w-75">
      <h3 class="text-black">CARA ORDER</h3>

      <p class="text-center text-black"> Ini merupakan cara order</p>
      <?php include 'order.php'; ?>
    </div>
  </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="javascript/main.js"></script>
  </body>
</html> 