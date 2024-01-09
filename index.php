<?php
    include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button onclick="pagamento()">Pagar</button>
    <span class="endereco" data-endereco="<?php echo URL ?>"></span>
   <script type="text/javascript" src="<?php echo SCRIPT_PAGSEGURO; ?>"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
   <script src="js/personalizado.js"></script>
</body>
</html>