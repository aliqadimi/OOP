<?php
namespace Exporter;

class PdfExporter extends Exporter{
    protected $format = '.pdf';
    public  function export(){
        echo "PDF Export OK!"; # mPdf
    }
}