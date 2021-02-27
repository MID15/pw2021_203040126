<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>
                <?php for ($i = 1; $i <= 5; $i++) : ?>
                    <th>Kolom <?= $i; ?></th>
                    <?php for ($j = 1; $j <= 5; $j++) : ?>
                        <tr>
                            <th>Baris <?= $j ; ?></th>
                            <td>Baris <?= $j ; ?>, Kolom <?= $i; ?></td>
                        </tr>
                    <?php endfor; ?>
                <?php endfor; ?>
            </th>
    </table>
</body>
</html>