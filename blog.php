<!DOCTYPE html>
<html>
<?php include("head.php"); ?>
<body class="w3-light-gray">
    <?php include("header.php"); ?>
    <div class="w3-row">
        <div class="w3-col" style="width: 65%;">
            <?php include("postagens.php"); ?>
        </div>
        <div class="w3-col w3-blue w3-container w3-margin-top" style="width: 35%;">
            <?php include("apresentacao.php"); ?>
            <?php include("populares.php"); ?>
            <?php include("filtros.php"); ?>
        </div>
    </div>
    <?php include("footer.php"); ?>
</body>
</html>