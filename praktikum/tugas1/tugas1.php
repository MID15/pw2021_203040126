<?php
    /*
    Nama    : Mochamad Indra Wahyudi
    NRP     : 203040126
    Shift   : Jum'at 13
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas1</title>
</head>
<body>
<table width="330px" cellspacing="5px" cellpadding="0px" border="1px">
<?php for( $baris = 1; $baris <= 6; $baris++ ) : ?>
    <tr>
        <?php for( $kolom = 1; $kolom <= 6; $kolom++ ) : ?>
            <?php $i = $baris + $kolom; ?>
            <?php if( $i % 2 == 1 ) : ?>
                <td height=50px width=50px bgcolor=salmon></td>
            <?php else : ?>
                <td height=50px width=50px bgcolor=lightblue></td>
            <?php endif; ?>
        <?php endfor; ?> 
    </tr>
<?php endfor; ?>
</body>
</html>