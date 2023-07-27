<!DOCTYPE html>
<html>
<head>
    <title>Input Data</title>
    <!-- Link CSS Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2 class="text-center">Form Input Data</h2>
        <form action="<?php echo site_url('Auth/process_input'); ?>" method="post">
            <div class="form-group">
                <label for="input_data">Masukkan data (NAMA[spasi]USIA[spasi]KOTA):</label>
                <input type="text" class="form-control" name="input_data" id="input_data" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <div class="container">
        <?php if (isset($success)): ?>
            <div class="alert alert-success"><?= $success ?></div>
        <?php endif; ?>

        <?php if (isset($error)): ?>
            <div class="alert alert-danger"><?= $error ?></div>
        <?php endif; ?>
        
        <br>
        <div class="col-sm-6 mx-auto">
            <h3 class="text-center">Data</h3>
            <div class="mb-0">
                <div class="table-responsive-xxl">
                    <table class="table" id="dataTable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>City</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($all_data as $dt) : ?>
                                <tr>
                                    <td><?= $dt['ID'] ?></td>
                                    <td><?= $dt['NAME'] ?></td>
                                    <td><?= $dt['AGE'] ?></td>
                                    <td><?= $dt['CITY'] ?></td>
                                    <td><?= $dt['CREATED_AT'] ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div> 
            </div> 
        </div> 
    </div>

    <!-- JavaScript Bootstrap dan jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
