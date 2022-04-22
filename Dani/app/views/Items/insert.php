<?php require APPROOT . '/views/header.php' ?>



<div class="container w-50 mt-5">
    <form action="<?= URLROOT ?>/Items/insert" method="POST">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center bg-warning text-white p-3">Voeg een Ict items toe</h1>
            </div>
        </div>
        <div class="mb-3 productname">
            <label for="prodcutName" class="form-label">Product Naam</label>
            <input type="text" name="productName" onkeyup="validatProductName()" class="form-control" id="prodcutName">
            <div class="error-product-name">

            </div>
        </div>
        <input type="hidden" name="productCode">
        <div class="mb-3 aantalproducten">
            <label for="aantaalproducten" class="form-label">Aaantal Producten</label>
            <input type="number" onkeyup="validateAantalProducten()" name="aantalProducten" class="form-control" id="aantaalproducten">
            <div class="error-aantal-producten">

            </div>
        </div>
        <div class="mb-3">
            <div class="form-floating productDiscription">
                <textarea class="form-control" onkeyup="validateDescription()" name="productDiscription" placeholder="Leave a comment here" id="productDescription" style="height: 100px"></textarea>
                <label for="productDescription">Product Omschrijving</label>
                <div class="error-discription">

                </div>
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
        <button type="submit" onclick="return validateForm()" name="submit" class="btn btn-primary">Toevoegen</button>
        <div class="alle-errors">

        </div>
    </form>
</div>