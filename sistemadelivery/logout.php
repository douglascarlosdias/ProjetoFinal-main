<?php
@session_start();
@session_destroy();
echo "<script language='javascript'>window.location='http://localhost/ProjetoFinal-main/sistemadelivery/index.php'; </script>";

?>