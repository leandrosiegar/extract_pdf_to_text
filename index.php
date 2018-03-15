<?php
    /*
    Para referencias de uso https://www.pdfparser.org/documentation:
        - Obtener al completo el texto de unu pdf
        - Obtener el texto de una pagina especifica del pdf
        - Obtener los metadatos del pdf (autor, titulo, etc....
    Si bajamos el proyecto tal cual de la pagina, copiar a directorio htdocs de XAMPP y ejecutar desde consola un composer update sobre el directorio para descargar dependencias
    */


    //Referencia a las clases con autoload y creacion del objeto.
    include 'pdfparser-master/vendor/autoload.php';
    $parser = new \Smalot\PdfParser\Parser();

    //Lectura del pdf (ejemplo) especificar ruta de archivo
    //$file = "pdfparser-master/samples/Document1_foxitreader.pdf";
    $file = "pdfparser-master/samples/Document1_pdfcreator_nocompressed.pdf";
    //$file = "pdfparser-master/samples/Document3_pdfcreator_nocompressed.pdf";

    // Obtencion del texto desde el pdf seleccionado
    $pdf = $parser->parseFile($file);
    $text = $pdf->getText();
    echo $text;
?>