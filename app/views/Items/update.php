<?php require APPROOT . '/views/header.php' ?>



<div class="container w-50">
    <form action="<?= URLROOT ?>/Items/update" method="POST">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Update the records</h1>
            </div>
        </div>
        <div class="mb-3">
            <label for="prodcutName" class="form-label">Product Naam</label>
            <input type="text" name="productName" value="<?= $data['data']->productName ?>" class="form-control" id="prodcutName">
        </div>
        <div class="mb-3">
            <label for="aantaalproducten" class="form-label">Aaantal Producten</label>
            <input type="number" name="aantalProducten" value="<?= $data['data']->aantalProducten ?>" class="form-control" id="aantaalproducten">
        </div>
        <div class="mb-3">
            <div class="form-floating">
                <textarea class="form-control" name="productDiscription" value="<?= $data['data']->productDiscription ?>" placeholder="Leave a comment here" id="productDescription" style="height: 100px"></textarea>
                <label for="productDescription">Product Omschrijving</label>
            </div>
        </div>
        <div class="mb-3">
            <select class="form-select" name="status" aria-label="Default select example">
              <option value="1">Beschikbaar</option>
              <option value="0">Niet beschikbaar</option>
            </select>
        </div>
        <input type="hidden" name="id" value="<?= $data['data']->id ?>">
        <button type="submit" name="submit" class="btn btn-primary">Wijziging</button>
    </form>
</div>