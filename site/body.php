
<body>

<div id='header' class='row'>
    <div class='col-md-2'>
        <h1>НАЗВАНИЕ САЙТА</h1>
    </div>
    <div class='col-md-10 today'>
        <?php
        $today = new \app\classes\Today();
        $today->getTodayDate();
        ?>
    </div>
      
</div>

<div id='menu' class='col-md-2'>
    <?php
        require_once "views/Vmenu.php";
     ?>
</div>

<div id = 'content' class='col-md-9'>
    <?php
        require_once "views/Vcontent.php";
     ?>
</div>


<?php
require_once "router.php";