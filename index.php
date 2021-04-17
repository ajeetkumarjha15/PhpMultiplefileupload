<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple File Upload</title>
</head>

<body>
    <form method='post' action='FileUpload.php' enctype='multipart/form-data'>
        <input type="file" name="files[]" id="file" multiple>

        <input type='submit' name='submit' value='Upload'>
    </form>
</body>

</html>