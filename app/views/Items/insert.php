<?php require APPROOT . '/views/header.php' ?>



<div class="container w-50">
    <form action="<?= URLROOT ?>/Items/insert" method="POST">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Voeg een Ict items</h1>
            </div>
        </div>
        <div class="mb-3">
            <label for="prodcutName" class="form-label">Product Naam</label>
            <input type="text" name="productName" class="form-control" id="prodcutName">
        </div>
        <input type="hidden" name="productCode">
        <div class="mb-3">
            <label for="aantaalproducten" class="form-label">Aaantal Producten</label>
            <input type="number" name="aantalProducten" class="form-control" id="aantaalproducten">
        </div>
        <div class="mb-3">
            <div class="form-floating">
                <textarea class="form-control" name="productDiscription" placeholder="Leave a comment here" id="productDescription" style="height: 100px"></textarea>
                <label for="productDescription">Product Omschrijving</label>
            </div>
        </div>
        <div class="mb-3">
            <select class="form-select" name="status" aria-label="Default select example">
              <option value="0">Beschikbaar</option>
              <option value="1">Niet beschikbaar</option>
            </select>
        </div>

        <div class="mb-3">
            <select class="form-select" name="user" aria-label="Default select example">
            <?= $data['userSelected'] ?>
            </select>
        </div>

        <input type="hidden" name="id">
        <button type="submit" name="submit" class="btn btn-primary">Toevoegen</button>
    </form>
</div>