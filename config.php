<?php 

$sandbox = true;
define("URL", "https://localhost/Profissional/DanielaCalçados/");

if($sandbox){
    debug_to_console("Ambiente de Testes");
    define("EMAIL_PAGSEGURO", "danibadaro22@icloud.com");
    define("TOKEN_PAGSEGURO", "E540F14226F54C0B85163C035CC10431");
    define("URL_PAGSEGURO", "https://ws.sandbox.pagseguro.uol.com.br/v2/");
    define("SCRIPT_PAGSEGURO", "https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js");
}
else{
    debug_to_console("Ambiente Real");
}

//Função para dar console.log
function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);
    echo "<script>console.log('" . $output . "' );</script>";
}