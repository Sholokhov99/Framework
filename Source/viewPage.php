<?php
namespace Source
{
    use Errors;
    class ViewPage
    {
        
        public function __construct($page)
        {
            
            $path = VIEW_ROOT."{$GLOBALS['controller']}/{$page}view.php";

            if(file_exists($path))
                include_once($path);
            else
                 Errors\setHeader(404);
        }
        
        public static function view($page) {}
        
        public static function getParseFile($path)
        {
            if(file_exists($path))
            {
                $getContent = file_get_contents($path);
                return $getContent;
            }
            else
                return 0;
        }
    }
}
