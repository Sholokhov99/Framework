<?php
namespace Source
{
    use Errors;
    class ViewPage
    {
        //
        //  Загрузка View
        //
        public function __construct($page)
        {

            $path = VIEW_ROOT."{$GLOBALS['controller']}/{$page}view.php";
            if(file_exists($path))
                include_once($path);
            else
                 Errors\setHeader(404);
        }

        public static function view($page) {}

        //
        //  Получение содержимого файла
        //
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

        //
        //  Получение списка всех стилей проекта в html формате
        //
        public static function loadAllStyles()
        {
            $styles = "";
            $files =  (new Files())->getTree(CONTENT_CSS);
            foreach($files as $file){
                $styles .= self::getStyleLink($file);
            }
            return $styles;
        }

        //
        //  Получение всех файлов относящиеся к bootstrap
        //
        public static function loadBootsstrap5($version = '5')
        {
            $path = "{$_SERVER['DOCUMENT_ROOT']}/content/bootstrap{$version}/";
            $dirs = self::loadCssOrLs($path, true);
            $path = "{$_SERVER['DOCUMENT_ROOT']}/scripts/bootstrap{$version}/";
            $dirs .= self::loadCssOrLs($path, false);
            return $dirs;
        }

        //
        //  Получение скрипта загрузки контента страницы
        //
        public static function getDynamicJsLoadContent($id, $controller = -1, $action = -1)
        {
          if($controller === -1)
            $controller = $GLOBALS['MAP']['controller'];
          if($action === -1)
            $action = $GLOBALS['MAP']['action'];

          $section = "<script>\n$('{$id}').prepend('<section id=\"content\">');\n";
          $getLoadFunction = "dynamicLoadContentPOST('{$controller}', '{$action}');\n</script>\n";
          return $section.$getLoadFunction;
        }

        //
        //  Получение указанного файла в html формате, как ссылка на стиль
        //
        private static function getStyleLink($path){
            return "<link rel='stylesheet' type='text/css' href='{$path}' />\n";
        }

        //
        //  Получение указанного файла в html формате, как ссылка на js-скрипт
        //
        private static function getScriptLink($path){
            return "<script src='{$path}'></script>\n";
        }

        //
        //  Поиск всех стилей в проекта и js-скриптов
        //
        private static function loadCssOrLs($path, $css = true)
        {
            if(is_dir($path))
            {
                $letter = $path[strlen ($path)-1];
                $path = ($letter  === '/' || $letter === '\\') ? $path : $path.'/';
                $files = scandir($path);
                $dirs = null;
                foreach($files as $value){
                    $fullPath = $path.$value;
                    if(is_file($fullPath))
                    {
                        $dirs .= ($css) ? self::getStyleLink($fullPath) : self::getScriptLink($fullPath);
                    }
                }
            }

            return $dirs;
        }
    }
}
