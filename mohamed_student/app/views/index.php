<?php
/* This is how you echo out database information on the screen
foreach ($data['users'] as $user) {
    echo "Information: " . $user->user_name . $user->user_email;
    echo "<br>";
}
*/
?>
<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>
<div class="container">
<h1 class="text-center"><?php echo $data['description']; ?>
</h1>

<div class="users_buttens">
    <div class="container">
        <div class="text-center">        
              <a class="btn btn-dark" href="<?php echo URLROOT; ?>studenten/index">Administrator</a>


        </div>

    </div>

</div>
</div>


