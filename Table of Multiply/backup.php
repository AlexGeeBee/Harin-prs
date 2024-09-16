<?php

$border = "border: 1px solid black;";
$padding = "padding: 3px;";
$bg_color = "background-color: ";
$yellow_color = "yellow;";
$green_color = "green;";
$gray_color = "gray;";

?>

<table style="border-collapse: collapse;">
    <?php for ($row = 1; $row < 11; $row++): ?>
        <tr>
            <?php for ($td = 1; $td < 11; $td++): ?>
                <?php if ($td == 1 || $row == 1): ?>
                    <?php $style = $border . $padding . $bg_color . $gray_color ?>
                
                <?php elseif ($row == $td): ?>
                    <?php $style = $border . $padding . $bg_color . $green_color ?>

                <?php elseif (($row * $td) % 2): ?>
                    <?php $style = $border . $padding . $bg_color . $yellow_color ?>

                <?php else: ?>
                    <?php $style = $border . $padding ?>
                <?php endif ?>
                
                <td style="<?= $style ?>">
                    <?= $row * $td ?>
                </td>
            <?php endfor ?>
        </tr>
    <?php endfor ?>
</table>

vtoroy var

<?php

$border = "border: 1px solid black;";
$padding = "padding: 3px;";
$bg_color = "background-color: ";
$yellow_color = "yellow;";
$green_color = "green;";
$gray_color = "gray;";

$a = 0;
// $b = 0;

?>

<table style="border-collapse: collapse;">
    <?php for ($row = 1; $row < 12; $row++): ?>
        <tr>
            <td style="border: 1px solid black; padding: 3px;">
                <?= $a ?>
            </td>
            <?php $a++ ?>

            <?php if ($row == 1): ?>
                <?php for ($b = 0; $b < 11; $b++): ?>
                    <td style="border: 1px solid black; padding: 3px;">
                        <?= $b ?>
                    </td>
                    
                <?php endfor ?>
            <?php endif ?>

            <?php for ($td = 1; $td < 11; $td++): ?>

                <?php if ($td == 1 || $row == 1): ?>
                    <?php $style = $border . $padding . $bg_color . $gray_color ?>
                
                <?php elseif ($row == $td): ?>
                    <?php $style = $border . $padding . $bg_color . $green_color ?>

                <?php elseif (($row * $td) % 2): ?>
                    <?php $style = $border . $padding . $bg_color . $yellow_color ?>

                <?php else: ?>
                    <?php $style = $border . $padding ?>
                <?php endif ?>

                <td style="<?= $style ?>">
                    <?= $row * $td ?>
                </td>
            <?php endfor ?>
        </tr>
    <?php endfor ?>
</table>