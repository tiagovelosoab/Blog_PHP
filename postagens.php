<?php
$num_post = 1;
do {
?>
    <div class="w3-card w3-white w3-margin">
        <img src=<?= $postagens[$num_post]["img"] ?> alt=<?= $postagens[$num_post]["alt"] ?> width="100%">
        <div class="w3-container">
            <h3><b><?php echo $num_post . " - " . $postagens[$num_post]["titulo"]; ?></b></h3>
            <h5><?= $postagens[$num_post]["subt"] . "," ?> <span class="w3-opacity"><?= $postagens[$num_post]["data"] ?></span></h5>
            <p><?= $postagens[$num_post]["descr"] ?></p>
        </div>
        <div class="w3-row">
            <div class="w3-col" style="width: 80%;">
                <button class="w3-button w3-margin w3-border w3-grey w3-text-black w3-hover-text-white"><b>Leia mais... >></b></button>
            </div>
            <div class="w3-col" style="width: 20%">
                <p><b>Comentários: </b><span class="w3-tag"><?= $postagens[$num_post]["comentarios"] ?></span></p>
            </div>
        </div>
    </div>
<?php
    $num_post++;
} while ($num_post < 3)
?>