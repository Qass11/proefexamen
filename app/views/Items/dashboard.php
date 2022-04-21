<?php require APPROOT . '/views/header.php'?>
<?php require APPROOT . '/views/includes/sidebar.php'?>
<section>
<table class="table caption-top mt-5">
  <caption class="text-center text-white fs-1 bg-primary">Usergegvens</caption>
  <thead>
    <tr class="text-center">
      <th scope="col">Studentnummer</th>
      <th scope="col">Firstname</th>
      <th scope="col">Infix</th>
      <th scope="col">Lastname</th>
      <th scope="col">Email</th>
      <th scope="col">Telefoonnummer</th>
    </tr>
  </thead>
  <tbody>
      <tr>
      <?= $_SESSION['data']; ?>
      </tr>
  </tbody>
</table>
</section>
