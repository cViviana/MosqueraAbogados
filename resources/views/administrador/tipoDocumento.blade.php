<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="icon" href="img/favicon-1.png" type="image/png">
      <title>MOSQUERA ABOGADOS</title>
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="vendors/linericon/style.css">
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <link rel="stylesheet" href="css/magnific-popup.css">
      <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
      <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
      <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
      <link rel="stylesheet" href="vendors/animate-css/animate.css">
      <!-- main css -->
      <link rel="stylesheet" href="css/style.css">
      <!--Fontawesome CDN-->
      <link  rel = " stylesheet "  href = " //maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css " >
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  </head>
  <body>
    <form action="{{route('guardarTipoDocumento')}}" method="post">
      {{csrf_field()}}
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Tipo</span>
          </div>
          <input type="text" id='nombre'name='nombre' class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <button type="submit" class="btn btn-primary">agregar</button>
        <div  class = " container " >
          @include ('flash :: mensaje')
        </div >
    </form>
  </body>
</html>
