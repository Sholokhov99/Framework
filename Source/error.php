<?php
namespace Errors
{
    function setHeader($code)
    {
        if(!is_string($code))
        {
            switch ($code)
            {
                case 404:
                   // header('HTTP/1.0 404 Not Found');
                    http_response_code($code);
                    require(VIEW_ROOT."404.html");
                    exit();
                    break;
                default:
                    http_response_code($code);
                    require(VIEW_ROOT."404.html");
                    exit();
                    break;
            }
        }
        else
        {
            header($code);
        }
    }
}

