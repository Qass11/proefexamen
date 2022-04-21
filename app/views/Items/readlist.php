<?php require APPROOT . '/views/header.php' ?>
<?php require APPROOT . '/views/includes/sidebar.php' ?>
<?php
if (isset($_GET['message'])) {
    if ($_GET['message'] == 'Goed') {
        echo "<div class='message bg-success'>
        <h3>Deze record is successvol gewijzegd</h3>
        </div>";
    }elseif($_GET['message'] == 'Fout'){
        echo "<div class='message bg-danger'>
        <h3>Deze record is niet gewijzegd!</h3>
        </div>";
    }elseif($_GET['message'] == 'Toegevoegd'){
        echo "<div class='message bg-danger'>
        <h3>Deze nieuwe record is goed toegevoed!</h3>
        </div>";
    }
    elseif($_GET['message'] == 'Deleted'){
        echo "<div class='message bg-success'>
        <h3>Deze rij is succesvol verijderd!</h3>
        </div>";
    }
}

?>


<section>
<div class="container w-100">
    <div class="header__table">
        <h1>Items beheer</h1>
    </div>
    <div class="tables">
    <div class="items-toevoeging">
        <a href="<?= URLROOT ?>/Items/insert"><button class='bg-success p-2 text-white'>items toevoeging</button></a>
    </div>
        <table id="table" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Product naam</th>
                    <th>Product Code</th>
                    <th>Aantal producten</th>
                    <th>Product discription</th>
                    <th>Product status</th>
                    <th>User id</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?= $data['data']; ?>
            </tbody>
        </table>
    </div>
</div>
</section>



<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<!-- <script src="<?= URLROOT ?>/public/js/table.js" type="text/javascript"></script> -->