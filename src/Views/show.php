<?php
use app\Models\Goods;
/**
 * @var string[] $headers
 * @var Goods[] $goods
 */

?>
<!doctype html>
<html lang="ru">
<head>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
        }
    </style>
    <title>Загрузите CSV файл</title>
</head>
<body>
<h1>Да вот этот</h1>

<table style="border: solid">
    <?php foreach ($headers as $header): ?>
    <th>
        <?= $header; ?>
        <?php endforeach; ?>
    </th>
    <?php foreach ($goods as $good): ?>
        <tr>
            <?php foreach ($good as $column): ?>
                <td>
                    <?= $column; ?>
                </td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>