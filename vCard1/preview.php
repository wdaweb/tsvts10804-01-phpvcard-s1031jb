<?php
session_start();
?>
<link rel="stylesheet" type="text/css" href="theme/<?= $_SESSION['info']['layout'] ?>.css">

<div class="card-main">
    
    <h5>關於 <span class="clr"><?= $_SESSION['info']['user'] ?></span></h5>
    <img src="upload/<?= $_SESSION['info']['who'] ?>" class="who">
    <h5 class="clr" style="letter-spacing:10px;"><?= $_SESSION['info']['title'] ?></h5>  
    <hr class="hr">
    <p><?= $_SESSION['info']['skill'] ?></p>
    <div class="box"><?= $_SESSION['info']['mail'] ?></div>
    <div class="box"><?= $_SESSION['info']['phone'] ?></div>
</div>
<button style="margin:50px auto;display:block" onclick="window.history.go(-1)">回頁面</button>