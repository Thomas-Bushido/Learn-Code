<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 1 : Variables"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<table classe="table">
    <?php for ($j = 1; $j <= 10; $j++) : ?>
        <tr <?= ($j === 1) ? 'class="font-weight-bold"' : '' ?>>
            <?php for ($i = 1; $i <= 10; $i++) : ?>
                <td <?= ($i === 1) ? 'class="font-weight-bold"' : '' ?>>
                    <?= $j*$i ?>
                </td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>
<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../global/common/template.php";
?>
