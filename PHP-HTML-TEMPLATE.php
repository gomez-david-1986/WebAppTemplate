<?php
//MIGHT NEED TO IMPLEMENT PAGE SECURITY

require 'inc/settings.php';
require 'inc/header.php';


//REMOVE IF PAGE DOES NOT EXECUTE AN ACTION
//Filter POST variables
foreach ($_POST as $key => $value) {
    $DP[$key] = $value;
}
//Filter GET variables
foreach ($_GET as $key => $value) {
    $DG[$key] = $value;
}

?>
<?php require 'inc/menu.php'; ?>

    <!--MAIN CONTAINER-->
    <div class="container-fluid">

    </div>



<?php require "inc/js_links.php"; ?>

<?php require "inc/footer.php"; ?>
