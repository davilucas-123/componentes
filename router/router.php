<?php

function router(){
    echo "3. Router está analisando a URL.<br>";
    $rota = "/usuarios";
    $parametro = "id=123";
    middleware($rota);
    
}