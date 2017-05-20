<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body style="font-size: 250%;">

<?php
//print_r($_SESSION);
//print(session_id ());
?>
<p>Session is:|<?php print(session_id()) ?>|</p>
<p>Server is:|<?php print($_SERVER['SERVER_ADDR']);?>| at port:|<?php print($_SERVER['SERVER_PORT']);?></p>
</body>
</html>
