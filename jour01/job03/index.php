<?php
$boolean = true;
$entier = 69;
$char = "cc";
$float = 1.47;
?>
<style>table,
td {
    border: 1px solid #333;
}

thead,
tfoot {
    background-color: #333;
    color: #fff;
}
</style>

<table>
    <thead>
        <tr>
            <th colspan="1">Type</th>
            <th colspan="1">Nom</th>
            <th colspan="1">Valeur</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>int</td>
            <td>entier</td>
            <td><?php echo $entier ?></td>
        </tr>
        <tr><td>string</td>
            <td>char</td>
            <td><?php echo $char ?></td>
        </tr>

        <tr>
            <td>boal</td>
            <td>boolean</td>
            <td><?php echo $boolean ?></td>
        </tr>

        <tr>
            <td>float</td>
            <td>float</td>
            <td><?php echo $float ?></td>
        </tr>
    </tbody>
</table>