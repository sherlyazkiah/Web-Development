<!DOCTYPE html>
<html>
<head>
    <title>Multi-file Upload</title>
</head>
<body>
    <form id="upload-form" action="ua.php" method="post" enctype="multipart/form-data">
        <input type="file" name="files[]" id="file" multiple>
        <input type="submit" name="submit" value="Upload">
    </form>
    <div id="status"></div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="upl.js"></script>
</body>
</html>