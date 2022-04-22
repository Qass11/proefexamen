<?php require APPROOT . '/views/header.php' ?>



<div class="container w-50 mt-5">
    <form action="<?= URLROOT ?>/Items/update" method="POST">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center bg-success text-white p-3">Wijzig de ICT-items</h1>
            </div>
        </div>
        <div class="mb-3 productname">
            <label for="prodcutName" class="form-label">Product Naam</label>
            <input type="text" name="productName" onkeyup="validatProductName()" value="<?= $data['data']->productName ?>" class="form-control" id="prodcutName">
            <div class="error-product-name">

            </div>
        </div>
        <div class="mb-3 aantalproducten">
            <label for="aantaalproducten" class="form-label">Aaantal Producten</label>
            <input type="number" onkeyup="validateAantalProducten()" name="aantalProducten" value="<?= $data['data']->aantalProducten ?>" class="form-control" id="aantaalproducten">
            
        </div>
        <div class="mb-3">
            <div class="form-floating productDiscription">
                <textarea class="form-control" name="productDiscription" value="<?= $data['data']->productDiscription ?>" onkeyup="validateDescription()" placeholder="Leave a comment here" id="productDescription" style="height: 100px"></textarea>
                <label for="productDescription">Product Omschrijving</label>
                <div class="error-discription">

                </div>
            </div>
        </div>
        <div class="mb-3">
            <select class="form-select" name="status" aria-label="Default select example">
                <option value="1">Beschikbaar</option>
                <option value="0">Niet beschikbaar</option>
                <div class="error-list">

                </div>
            </select>
        </div>
        <input type="hidden" name="id" value="<?= $data['data']->id ?>">
        <button type="submit" onclick="return validateForm()" name="submit" class="btn btn-primary">Wijziging</button>
        <div class="alle-errors">

        </div>
    </form>
</div>