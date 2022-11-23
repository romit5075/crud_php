# File Upload
<body>

    <form action="" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <br><br>
        <input type="submit" value="Upload Image" name="submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $uploaddir = "uploads/";
        $destPath = $uploaddir . $_FILES['fileToUpload']['name'];
        $tempfile = $_FILES['fileToUpload']['tmp_name'];
        move_uploaded_file($tempfile, $destPath);
        echo "success Single File";
    }
    ?>



    <br><br>



    Multiple File Upload
    <form action="" method='post' enctype='multipart/form-data'>
        <input type="file" name="file[]" id="file" multiple>
        <input type='submit' name='submitM' value='Upload'>
    </form>

    <?php
    if (isset($_POST['submitM'])) {
        // Count total files
        $countfiles = count($_FILES['file']['name']);
        // Looping all files
        for ($i = 0; $i < $countfiles; $i++) {
            $filename = $_FILES['file']['name'][$i];
            // Upload file
            move_uploaded_file($_FILES['file']['tmp_name'][$i], 'uploads/' . $filename);
        }
        echo "success Multiple File";
    }

    ?>

</body>
