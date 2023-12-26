<?php
namespace Html;
class Table {
    public $title = "";
    public $numRows = 0;
    public function message() {
        echo "<p>  '{$this->title}' has {$this->numRows} rows.</p>";
    }
}
$table = new Table();
$table->title = "My Table";
$table->numRows = 10;
?>

<!DOCTYPE html>
<html lang="en">
<body>
 
<?php
$table->message();
?>

</body>
</html>