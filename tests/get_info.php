<?php
#   |                                                          |
# --+----------------------------------------------------------+--
#   |   Code by : yasserbdj96                                  |
#   |   Email   : yasser.bdj96@gmail.com                       |
#   |   Github  : https://github.com/yasserbdj96               |
#   |   BTC     : bc1q2dks8w8uurca5xmfwv4jwl7upehyjjakr3xga9   |
# --+----------------------------------------------------------+--  
#   |        all posts #yasserbdj96 ,all views my own.         |
# --+----------------------------------------------------------+--
#   |                                                          |

    #START{
    header('Content-type: text/plain');
    echo "OS : ".php_uname();
    echo "\n";
    echo "your_ip: ".$_SERVER['REMOTE_ADDR'];
    echo "\n";
    echo "HTTP_HOST : ".$_SERVER['HTTP_HOST'];
    echo "\n";
    echo "REQUEST_METHOD : ".$_SERVER['REQUEST_METHOD'];
    echo "\n";
    echo "SERVER_ADMIN : ".$_SERVER['SERVER_ADMIN'];
    echo "\n";
    echo "SERVER_PORT : ".htmlentities($_SERVER['SERVER_PORT'], ENT_QUOTES, 'UTF-8');
    echo "\n";
    echo "server_ip : ".gethostbyname($_SERVER["HTTP_HOST"]);
    echo "\n";
    echo "PHP_SELF : ".$_SERVER['PHP_SELF'];
    echo "\n";
    echo "GATEWAY_INTERFACE : ".$_SERVER['GATEWAY_INTERFACE'];
    echo "\n";
    echo "SERVER_ADDR : ".$_SERVER['SERVER_ADDR'];
    echo "\n";
    echo "SERVER_NAME : ".$_SERVER['SERVER_NAME'];
    echo "\n";
    echo "SERVER_PROTOCOL : ".$_SERVER['SERVER_PROTOCOL'];
    echo "\n";
    echo "REQUEST_TIME : ".$_SERVER['REQUEST_TIME'];
    echo "\n";
    echo "QUERY_STRING : ".$_SERVER['QUERY_STRING'];
    echo "\n";
    echo "HTTP_ACCEPT : ".$_SERVER['HTTP_ACCEPT'];
    echo "\n";
    echo "HTTP_ACCEPT_CHARSET : ".$_SERVER['HTTP_ACCEPT_CHARSET'];
    echo "\n";
    echo "HTTP_REFERER : ".$_SERVER['HTTP_REFERER'];
    echo "\n";
    echo "HTTPS : ".$_SERVER['HTTPS'];
    echo "\n";
    echo "REMOTE_HOST : ".$_SERVER['REMOTE_HOST'];
    echo "\n";
    echo "REMOTE_PORT : ".$_SERVER['REMOTE_PORT'];
    echo "\n";
    echo "SCRIPT_FILENAME : ".$_SERVER['SCRIPT_FILENAME'];
    echo "\n";
    echo "SERVER_SIGNATURE : ".$_SERVER['SERVER_SIGNATURE'];
    echo "\n";
    echo "PATH_TRANSLATED : ".$_SERVER['PATH_TRANSLATED'];
    echo "\n";
    echo "SCRIPT_NAME : ".$_SERVER['SCRIPT_NAME'];
    echo "\n";
    echo "SCRIPT_URI : ".$_SERVER['SCRIPT_URI'];
    echo "\n";
    echo "server_software : ".getenv("SERVER_SOFTWARE");
    echo "\n";
    echo "Php Version : ".phpversion();
    echo "\n";
    echo "Zend : ".htmlentities(zend_version(), ENT_QUOTES, 'UTF-8');
    echo "\n";
    echo "Oracle : ".$Oracle2=function_exists('ocilogon')?("ON"):("OFF");   
    echo "\n";
    echo "MySQL : ".$MySQL2=function_exists('mysql_connect')?("ON"):("OFF");
    echo "\n";
    echo "MSSQL : ".$MSSQL2=function_exists('mssql_connect')?("ON"):("OFF");
    echo "\n";
    echo "PostgreSQL : ".$pg_connect2=function_exists('pg_connect')?("ON"):("OFF");
    echo "\n";
    echo "disabled_functions : ".$r=ini_get('disable_functions') ? ini_get('disable_functions'):'none';
    echo "\n";
    #}END.
?>
