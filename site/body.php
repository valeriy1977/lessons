
<body>

<div id='header' class='row'>
    <div class='col-md-3'>
        <h3>НАЗВАНИЕ САЙТА</h3>
    </div>
    <div class='col-md-9 today'>
        <?php
        $today = new \app\classes\Today();
        $today->getTodayDate();
        ?>
    </div>
      
</div>

<div id='header' class='row'>
    <div id='menu' class='col-md-2'>
        <?php
            require_once "views/Vmenu.php";
        ?>
    </div>

    <div id = 'content' class='col-md-10'>
        <?php
            require_once "views/Vcontent.php";
        ?>
    </div>
</div>

<?php
require_once "router.php";