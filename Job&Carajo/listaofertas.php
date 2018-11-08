<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    
</head>
<body>
    


    <table>
    <tr>
    <th>desc</th>
    <th>nombre</th>
    </tr>
    <?php foreach($ofertas as $oferta):?>
    <tr>
    <td><?=$oferta['nombre']</td>
    <td></td>
    </tr>
<?php end foreach;?>


    </table>
</body>
</html>