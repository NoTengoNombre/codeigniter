<!--
    @Created on : 15-dic-2016, 18:56:22
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<?php
session_start();
unset($SESSION['username']);
session_destroy();

header('Location:  # ');
