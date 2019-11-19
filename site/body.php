
<body>

<div class='col-md'>
    <?php
    $today = new \app\classes\Today();
    $today->getTodayDate();
    ?>
</div>
<div id='menu' class='col-md-2'>
    <?php
        require_once "views/Vmenu.php";
     ?>
</div>

<div class='col-md-2 content'>
    <?php
        require_once "views/Vcontent.php";
     ?>
</div>

<?php
require_once "router.php";