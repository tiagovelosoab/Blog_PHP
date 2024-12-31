<div class="w3-card w3-margin">
    <h4 class="w3-padding w3-container">Postagens mais populares</h4>
    <ul class="w3-ul w3-hoverable w3-white">
        <?php
        for ($i = 1; $i <= 5; $i++) {
        ?>
            <li class="w3-padding-16">
                <div class="w3-cell-row">
                    <div class="w3-cell" style="width: 40%;">
                        <img class="w3-margin-right" width="70%" src=<?= $populares[$i]["img"] ?>>
                    </div>
                    <div class="w3-cell">
                        <h4 class="w3-cell-top"><?= $populares[$i]["titulo"] ?></h4> <br>
                        <span>Comentários: <?= $populares[$i]["comentarios"] ?></span>
                    </div>
                </div>
            </li>
        <?php
        }
        ?>
    </ul>
</div>