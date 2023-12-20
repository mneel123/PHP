<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$nerr = $eerr = $merr =$generr = "";
$name = $email = $mno =$gender = "";
if($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nerr = "Name is requird";
    } else {
        $name = test_input($_POST["name"]);
    }
    if (empty($_POST["email"])) {
        $eerr = "Email is requird";
    } else {
        $email = test_input($_POST["email"]);
    }
    if (empty($_POST["mno"])) {
        $merr = "Mobile Number is requird";
    } else {
        $mno = test_input($_POST["mno"]);
    }
    if (empty($_POST["gender"])) {
        $generr = "Gender is requird";
    } else {
        $gender = test_input($_POST["gender"]);
    } 
}

function test_input($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

    <h2>Php Form With Validation</h2>
    <p><span class="error">* requird field</span></p>
    <form method="post" >
        Name : <input type="text" name = "name">
        <span class="error">* <?php echo $nerr;?></span>
        <br><br>
        Email : <input type="email" name = "email">
        <span class="error">* <?php echo $eerr;?></span>
        <br><br>
        Mobile No : <input type="number" name = "mno">
        <span class="error">* <?php echo $merr;?></span>
        <br><br>
        Gender : 
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <span class="error">* <?php echo $generr;?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
        </form>
<?php
echo "<h2>Your Input : </h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $mno;
echo "<br>";
echo $gender;
echo "<br>";

?>
</body>
</html>