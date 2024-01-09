<?php

//Necessário testar em dominio com SSL
define("URL", "https://localhost/Profissional/DanielaCalçados/celke/");

$sandbox = true;
if ($sandbox) {
    //Credenciais do SandBox
    define("EMAIL_PAGSEGURO", "");
    define("TOKEN_PAGSEGURO", "");
    define("URL_PAGSEGURO", "https://ws.sandbox.pagseguro.uol.com.br/v2/");
    define("SCRIPT_PAGSEGURO", "https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js");
    define("EMAIL_LOJA", "lucaslmf8@gmail.com");
    define("MOEDA_PAGAMENTO", "BRL");
    define("URL_NOTIFICACAO", "https://localhost/Profissional/DanielaCalçados/celke/");
} else {

    echo("NN É SAND BOX");
    //Credenciais do PagSeguro
//     define("EMAIL_PAGSEGURO", "Seu e-mail do PagSeguro");
//     define("TOKEN_PAGSEGURO", "Seu token no PagSeguro");
//     define("URL_PAGSEGURO", "https://ws.pagseguro.uol.com.br/v2/");
//     define("SCRIPT_PAGSEGURO", "https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js");
//     define("EMAIL_LOJA", "E-mail de suporte pós venda");
//     define("MOEDA_PAGAMENTO", "BRL");
//     define("URL_NOTIFICACAO", "https://sualoja.com.br/notifica.html");
    }