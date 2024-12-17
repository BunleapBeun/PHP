<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 08 - Upload file $_POST $_GET move_uploaded_file tmp_name, name</title>
</head>

<body>
    <!-- for form input name -->

    <!-- <form action="post.php" method="POST">
        <label for="name">Name</label>
        <input type="text" id="name" name="name">
        <button type="submit">Post me</button>
    </form> -->

    <!-- for form input file -->

    <form action="post.php" method="POST" enctype="multipart/form-data">
        <label for="image">Image</label>
        <input type="file" id="image" name="image">
        <button type="submit">Post Image</button>
    </form>
</body>

</html>