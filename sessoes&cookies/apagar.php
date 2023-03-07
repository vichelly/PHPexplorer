<?php
setcookie('nome','',time() - 3600);

header("Location: opa.php");
exit;