<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="upl.css">
    <title>Unggah File Dokumen</title>
</head>
<body>
    <div class="upload-form-container">
    <h2>Unggah File Dokumen</h2>
    <form id="upload-form" action="ua.php" method="post" enctype="multipart/form-data">
        <div class="file-input-container">
            <input type="file" name="file" id="file" class="file-input">
            <label for="file" class="file-label">Pilih File</label>
        </div>
        <button type="submit" name="submit" class="upload-button" id="upload-button"
        disabled>Unggah</button>
    </form>
    <div id="status" class="upload-status"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="upl.js"></script>
</body>
</html>