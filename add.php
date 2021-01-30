<?php
$conn = mysqli_connect('localhost', 'root', '', 'education');
$sql = 'SELECT name_school, status_school FROM school_tb';
$error = false;
if (isset($_POST['submit'])) {
    if (
        empty($_POST['NPSN']) ||
        empty($_POST['name_school']) ||
        empty($_POST['address']) ||
        empty($_POST['logo_school']) ||
        empty($_POST['school_level']) ||
        empty($_POST['status_school'])
    ) {
        $error = true;
    } else {
        $error = false;
        $NPSN = mysqli_real_escape_string($conn, $_POST['NPSN']);
        $name_school = mysqli_real_escape_string($conn, $_POST['name_school']);
        $address = mysqli_real_escape_string($conn, $_POST['address']);
        $logo_school = mysqli_real_escape_string($conn, $_POST['logo_school']);
        $school_level = mysqli_real_escape_string($conn, $_POST['school_level']);
        $status_school = mysqli_real_escape_string($conn, $_POST['status_school']);
        $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
        $sql = "INSERT INTO school_tb(NPSN, name_school, address, logo_school, school_level, status_school, user_id) VALUES('$NPSN', '$name_school', '$address', '$logo_school', '$school_level', '$status_school', '$user_id')";
        if (mysqli_query($conn, $sql)) {
            header('Location: index.php');
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add School</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">School <span>Data</span></a>
                <a href="./index.php" class="btn btn-outline-success" type="submit">Show Schools</a>
            </div>
        </nav>
        <form action="./add.php" method="POST">
            <div class="mb-3">
                <label for="NPSN" class="form-label">NPSN</label>
                <input type="text" class="form-control" id="NPSN" name="NPSN">
            </div>
            <div class="mb-3">
                <label for="name_school" class="form-label">Name School</label>
                <input type="text" class="form-control" id="name_school" name="name_school">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address">
            </div>
            <div class="mb-3">
                <label for="logo_school" class="form-label">Logo School</label>
                <input type="text" class="form-control" id="logo_school" name="logo_school">
            </div>
            <div class="mb-3">
                <label for="school_level" class="form-label">School Level</label>
                <input type="text" class="form-control" id="school_level" name="school_level">
            </div>
            <div class="mb-3">
                <label for="status_school" class="form-label">Status School</label>
                <input type="text" class="form-control" id="status_school" name="status_school">
            </div>
            <input type="hidden" name="user_id" value="<?php echo 1 ?>" class="btn btn-primary" />
            <input type="submit" name="submit" value="submit" class="btn btn-primary" />
        </form>
        <?php if ($error) : ?>
            <div class="alert alert-danger" role="alert">
                Tolong isi semua data!
            </div>
        <?php endif; ?>
    </div>
</body>

</html>