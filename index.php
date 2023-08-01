<?php
 $Name_Error = "";
if (isset($_POST['submit'])) {
    if (empty($_POST["Name"])) {
       $Name_Error = "Name is required";
    }
    else {
        $Name = User_Input_Fun($_POST["Name"]);
    }
    # code...
}
function User_Input_Fun($Data){
    return $Data;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validator</title>
</head>
<body>
    <h2>Form Validation PHP</h2>
<form action="" method="post">
    <legend>Please Fill Out the following Fields</legend>
    <fieldset>
        Name:<br>
        <input class="input" type="text" Name="Name" value=""/>* <?php echo $Name_Error?> <br>
        Gender:<br>
        <input class="input" type="radio" Name="Gender" value="Male"/> *<br>
        <input class="input" type="radio" Name="Gender" value="Female"/> *<br>
        Comment:<br>
        <textarea Name="Comment" rows="5" cols="25"></textarea><br><br>
        <input type="submit" Name="submit" value="Submit">
    </fieldset>


</form>
</body>
</html>