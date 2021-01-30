<?php
$conn = mysqli_connect('localhost', 'root', '', 'education');
$sql = 'SELECT name_school, status_school FROM school_tb';
$result = mysqli_query($conn, $sql);
$schools = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Education</title>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">School <span>Data</span></a>
                <a href="./add.php" class="btn btn-outline-success" type="submit">Add School</a>
            </div>
        </nav>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <?php foreach ($schools as $school) : ?>
                <div class="col">
                    <div class="card">
                        <img src="<?php echo $school['logo_school'] ?>" class="card-img-top" />
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($school['name_school']) ?></h5>
                            <p class="card-text"><?php echo htmlspecialchars($school['status_school']) ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</body>

</html>