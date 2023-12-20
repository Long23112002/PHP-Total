<?php
if (isset($_POST['submit'])) {
    $permitted_extensions = ['jpg', 'png', 'jpeg', 'gif'];
    $file_name = $_FILES['upload']['name'];

    if (!empty($file_name)) {
        $file_size = $_FILES['upload']['size'];
        $generated_name = time().'-'.$file_name;
        $destination = "uploads/${generated_name}";
        $file_parts = explode('.', $file_name);
        $file_extension = strtolower(end($file_parts));

        if (in_array($file_extension, $permitted_extensions)) {
            if ($file_size <= 1000000) {
                move_uploaded_file($_FILES['upload']['tmp_name'], $destination);
                $error_message = "<p style='color: #34f100'>Upload successful</p>";
            } else {
                $error_message = "<p style='color: red'>File size must be less than 1MB</p>";
            }
        } else {
            $error_message = "<p style='color: red'>Invalid file format. Allowed formats: " . implode(', ', $permitted_extensions) . "</p>";
        }
    } else {
        $error_message = "<p style='color: red'>No file selected</p>";
    }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form enctype="multipart/form-data" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    Choose your image to upload
    <input type="file" name="upload">
    <input type="submit" value="Submit" name="submit">
</form>

<?php echo isset($error_message) ? $error_message : ''; ?>
</body>
</html>
