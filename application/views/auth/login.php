<!DOCTYPE html>
<html>
<head>
    <title>Input Data</title>
    <!-- Link CSS Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Form Input Data</h2>
        <form action="<?php echo site_url('auth'); ?>" method="post">
            <!-- Form Nama -->
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>

            <!-- Form Usia -->
            <div class="form-group">
                <label for="usia">Usia:</label>
                <input type="number" class="form-control" id="usia" name="usia" required>
            </div>

            <!-- Form Kota -->
            <div class="form-group">
                <label for="kota">Kota:</label>
                <input type="text" class="form-control" id="kota" name="kota" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- JavaScript Bootstrap dan jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
