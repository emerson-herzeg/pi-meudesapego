<?php
/**
 * Wellington Desiderio 17/10/2021
 *
 * Documentos e conj. Caracteres
 */
header("Content-Type: text/html; charset=utf-8");


/**
 * Conf timezone da aplicação
 * Saida de erros.
 */
date_default_timezone_set("America/Sao_Paulo");
set_error_handler("ErrorHandler");

/**
 * display_errors: Erros devem ser exibidos.
 * error_reporting: Todos os tipos de erros
 * overload_var_dump: Omitir a linha de caminho do var_dump.
 */
ini_set("display_errors", 1);
ini_set("error_reporting", E_ALL);
ini_set('xdebug.overload_var_dump', 1);

/**
 * [ interface ] Style, icon and logo
 */
echo "<link rel='stylesheet' href='../css/php.css'/>",
"<img class='logofsphp' src='../images/tj417.jpg'/>";


/**
 * Título da page
 */
function ClassName($className)
{
    echo "<title>{$className} | Dev. Meu Desapego.</title>";
}


/**
 * [ Debug session ] Cria uma linha de sessão para exemplos
 * @var $color = red | green | yellow | blue
 * @var line = __LINE__
 */
function ClassSession($session, $line, $color = null)
{
    $line = (!empty($line) ? " <span class='line-session'>| Linha {$line}</span>" : "");
    $session = (!empty($session) ? "[ {$session}{$line} ]" : "");
    $color = (!empty($color) ? "var(--{$color})" : "");
    echo "<div class='code line' style='background-color: {$color}'>{$session}</div>";
}


/**
 * Função de erro padrão
 */
function ErrorHandler($error, $message, $file, $line)
{
    $color = ($error == E_USER_ERROR ? "red" : "yellow");
    echo "<div class='trigger' style='border-color: var(--{$color}); color:var(--{$color});'>[ Linha {$line} ] {$message}<small>{$file}</small></div>";
}
