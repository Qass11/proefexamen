
<?php require APPROOT . '/views/inc/header.php'; ?>


<div class="index-dashboard">
  <div class="row">
    <div class="col-sm-2 col-md-2">
      <?php require APPROOT . '/views/inc/super_user_sidebar.php'; ?>
    </div>

    <div class="col-sm-9 col-md-10 ms-auto">
    <div class="alert alert-success mt-3 text-center" role="alert" style="font-size: 25px;">
    <?php echo $data['title']; ?>
    </div>
    <div class="alert alert-warning text-center" role="alert" style="font-size: 25px;">
    <?php echo $data['description']; ?>

    

</div>
  </div>
</div>
</div>





