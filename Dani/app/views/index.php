<?php require_once APPROOT . '/views/header.php'?>
  <div class="container mt-5">
    <div class="row">
      <div class="col-12">
        <h1 class="text-center">Kies je rol</h1>
      </div>
    </div>
    <form action="<?= URLROOT ?>/Items/dashboard" method="POST">
    <div class="email">
      <label for="email">Email</label>
      <input type="email" name="email" id="email">
    </div>
    <select class="form-select" name="role" aria-label="Default select example">
      <?= $data['roleList']; ?>
    </select>
    <div class="col-12 mt-3">
      <button type="submit">Inloggen</button>
    </div>
    </form>
  </div>

