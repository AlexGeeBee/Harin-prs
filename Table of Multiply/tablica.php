<?php

$border = "border: 1px solid black;";
$padding = "padding: 3px;";
$bg_color = "background-color: ";
$yellow_color = "yellow;";
$green_color = "green;";
$gray_color = "gray;";

$a = 0;
?>

<table style="border-collapse: collapse;">
    <?php for ($row = 0; $row < 13; $row++): ?>
        <tr>
            <td style="border: 1px solid black; padding: 3px; background-color: gray;">
                <?= $a ?>
            </td>
            <?php $a++ ?>

            <?php for ($td = 1; $td < 13; $td++): ?>

                <?php $n = $row * $td ?>

                <?php if ($row == 0): ?>
                    <?php $style = $border . $padding . $bg_color . $gray_color ?>
                
                <?php elseif ($row == $td): ?>
                    <?php $style = $border . $padding . $bg_color . $green_color ?>

                <?php elseif (($row * $td) % 2): ?>
                    <?php $style = $border . $padding . $bg_color . $yellow_color ?>

                <?php else: ?>
                    <?php $style = $border . $padding ?>
                <?php endif ?>

                <?php if ($row == 0): ?>
                    <td style="<?= $style ?>">
                        <?= $n = $td ?>
                    </td>
                <?php else: ?>    
                    <td style="<?= $style ?>">
                        <?= $n ?>
                    </td>
                <?php endif ?> 
            <?php endfor ?>
        </tr>
    <?php endfor ?>
</table>

<?php // либо с continue ?>