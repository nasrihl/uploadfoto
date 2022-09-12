<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>

<body>

    <form action="proses.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="foto">Example file input</label>
            <input type="file" class="form-control-file" id="foto" name="foto" accept="image/*">
        </div>
   
    <button type="submit" name="aksi" value="add" class="btn btn-success">
        <i class="fa fa-floppy-o" aria-hidden="true"></i>
        Upload
    </button>
    </form>
</body>

</html>