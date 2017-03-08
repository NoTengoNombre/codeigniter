<!--
    @Created on : 21-ene-2017, 13:46:04
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : http://www.desarrollolibre.net/blog/tema/97/codeigniter/upload-de-archivos-con-codeigniter
-->

<?php
if (!defined('BASEPATH')) {
  exit('No direct script access allowed');
}

class Archivo extends CI_Controller {

  function cargar_archivo() {
    $mi_archivo = 'mi_archivo';
    $config['upload_path'] = "uploads/";
    $config['file_name'] = "nombre_archivo";
    $config['allowed_types'] = "*";
    $config['max_size'] = "50000";
    $config['max_width'] = "2000";
    $config['max_height'] = "2000";

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload($mi_archivo)) {
      $data['uploadError'] = $this->upload->display_errors();
      echo $this->upload->display_errors();
      return;
    }
    $data['uploadSuccess'] = $this->upload->data();
  }

}
?>
