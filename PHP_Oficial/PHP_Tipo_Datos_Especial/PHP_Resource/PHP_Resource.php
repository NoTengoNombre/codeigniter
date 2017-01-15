<!--
    @Created on : 15-ene-2017, 12:39:25
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php
// start a PDF document
$cpdf = cpdf_open(0, "http://servicio.uca.es/softwarelibre/publicaciones/apuntes_php");

// create first 600x400 page
cpdf_page_init($cpdf, 1, 0, 600, 400, 1);

// write text on first page
cpdf_begin_text($cpdf);
cpdf_set_font($cpdf, "Helvetica", 18, "WinAnsiEncoding");
cpdf_show_xy($cpdf, "First page", 50, 500);
cpdf_end_text($cpdf);

// create second 400x400 page
cpdf_page_init($cpdf, 2, 0, 400, 400, 1);


// display text on second page
cpdf_begin_text($cpdf);
cpdf_set_font($cpdf, "Helvetica", 18, "WinAnsiEncoding");
cpdf_show_xy($cpdf, "Next page", 50, 300);
cpdf_end_text($cpdf);

// close and write document
cpdf_finalize($cpdf);
cpdf_close($cpdf);
