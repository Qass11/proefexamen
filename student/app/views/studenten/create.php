
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Create</title>
  </head>
  <body>
  <div class="index-dashboard">
  <div class="row">
    <div class="col-sm-2 col-md-2">
      <?php require APPROOT . '/views/inc/super_user_sidebar.php'; ?>
    </div>

    <div class="col-sm-9 col-md-10 ms-auto">
    <section class="container mt-5" style="width: 50%;">
<form action="<?= URLROOT; ?>studenten/create" method="POST">
<div class="alert text-center" role="alert" style="background-color: #0b5ed7; color: white; font-size: 20px;">
<?= $data['title']; ?>
</div>

<div class="form-floating mb-3 input-name">
    <input type="text" class="form-control" id="naam" name="naam"  placeholder="naam"  aria-describedby="naam_Help" >
    <label for="floatingInput">Naam student</label>
</div>


<div class="form-floating mb-3 input-name">
    <input type="text" class="form-control" id="klas" name="klas"  placeholder="klas"  aria-describedby="klas_lHelp" >
    <label for="floatingInput">Klas</label>
</div>

<div class="form-floating mb-3 input-name">
    <input type="text" class="form-control" id="email" name="email"  placeholder="email"  aria-describedby="email_lHelp" >
    <label for="floatingInput">Email student</label>
</div>

<div class="form-floating mb-3 input-name">
    <input type="text" class="form-control" id="telefoonnummer" name="telefoonnummer"  placeholder="telefoonnummer"  aria-describedby="telefoonnummer_lHelp" >
    <label for="floatingInput">telefoonnummer student</label>
</div>



<div class="form-floating d-grid gap-2 submit-button mt-3">
    <button class="btn btn-primary btn-lg" style="font-size: 15px;" type="submit" name="submit">Verzenden</button>
    </div>
</section>
    

</div>
  </div>
</div>
</div>

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="/public/javascript/javascript.js"></script>

    
  </body>
</html>