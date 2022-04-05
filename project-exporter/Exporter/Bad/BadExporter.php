<?php
class BadExporter{
    public static function export_to_text($title,$content){
        echo "Export to Text [$title,$content]\n";
    }
    public static function export_to_PDF($title,$content){
        echo "Export to Pdf [$title,$content]\n";
    }
    public static function json_export($title,$content){
        echo "Export to Json [$title,$content]\n";
    }
}