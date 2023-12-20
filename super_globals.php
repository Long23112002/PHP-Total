<?php
  echo "Global variables";
  echo "<br>";
  print_r($_SERVER['PHP_SELF'] . '<br>'); // get all global variables
//  print_r($_GET);
//  print_r($_POST);
//  print_r($_GET['name'] .'<br>' ?? "empty");
//  print_r($_GET['age'] .'<br>' ?? "empty");
//
//  print_r($_POST['name'] .'<br>' ?? "empty");
//  print_r($_POST['age'] .'<br>' ?? "empty");

  $name =  htmlspecialchars($_POST['name'] ?? "empty"); // filter html string
  $name_filter = filter_var($_POST['name'] , FILTER_SANITIZE_STRING); // filter string
  echo $name_filter;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <form method="post" action="<?php echo
    htmlspecialchars( $_SERVER['PHP_SELF']);?>">
       <div>
              <label for="name">Name</label>
              <input type="text" name="name" id="name">
       </div>
        <div>
            <label for="age">age</label>
            <input type="text" name="age" id="age">
        </div>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
