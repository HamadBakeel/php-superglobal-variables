<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program</title>
</head>
<body>
    <h2>SELECT SUBJECTS</h2>
    <form action="#" method="post">
        <select name="courses[]" multiple>
        <option value="Red">Red</option>
        <option value="Green">Green</option>
        <option value="Blue">Blue</option>
        <option value="Pink">Pink</option>
        <option value="Yellow">Yellow</option>
        </select>
        <input type="submit" name="submit" value="Submit" />
    </form>
    <?PHP

    $selected_values = $_POST['courses'];  // Storing Selected Values In Variable
    if(isset($selected_values)){
        foreach($selected_values as $selected_value)
            echo "You selected : " .$selected_value."<br>";  // Displaying Selected Values
    }else
        echo "You didn't select anything !"
    ?>
</body>
</html>