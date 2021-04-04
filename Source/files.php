<?php
namespace Source
{
    use Errors;
    class Files
    {
        public function getTree($path){
            $dirs = [];
            $fileInfo = new \RecursiveIteratorIterator(
                new \RecursiveDirectoryIterator($path)
            );
            foreach($fileInfo as $pathname => $fileinfo) {
                if (!$fileinfo->isFile()) continue;
                array_push($dirs, $pathname);
            }
            return $dirs;
        }

        public static function writeLog($text, $code)
        {
            $hr = "----------------\n";
            $title = "Date: ". date(c).'\n';
            $code = "Code: {$code}\n";
            $body = "Body: \n{$text}\n";

            $str = $hr.$title.$code.$body.$hr;
            $file = fopen('./logs.log', 'w') or die("Не удалось открыть файл");
            fwrite($file, $str);
            fclose($file);
        }

    }
}
