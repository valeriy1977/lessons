
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

<section class="dws-wrapper" >
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="img-block"><img src="img/1.jpg" alt="">
                    <h3>Блок 1</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="img-block"><img src="img/2.jpg" alt="">
                    <h3>Блок 2</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="img-block"><img src="img/3.jpg" alt="">
                    <h3>Блок 3</h3>
                </div>
            </div>
            <div class="col-md-6">
                <div class="img-block"><img src="img/4.jpg" alt="">
                    <h3>Блок 4</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once "router.php";