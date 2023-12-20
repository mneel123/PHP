<?php
session_start();
?>
<html>
<body>

<?php
session_unset();
session_destroy();
// $_SESSION["favcolor"] = "black";
// $_SESSION["favanimal"] = "Dog";
// echo "Session variables are set."
print_r($_SESSION);
?>

</body>
</htm