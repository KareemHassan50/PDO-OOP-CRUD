<?php
require '../CRUD.php';
$Users = $getData->index();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <div class="">
                    <form action="./formadd.php" method="get">
                        <input type="submit" value="Add User" class="btn btn-outline-success">
                    </form>
                </div>
                <table class='table table-bordered mt-2'>
                    <tr>
                        <td>name</td>
                        <td>email</td>
                        <td>mobile</td>
                        <td>created_at</td>
                        <td>Update</td>
                        <td>Delete</td>
                        <td>Show</td>
                    </tr>
                    <?php foreach ($Users as $user) : ?>
                        <tr>
                            <td><?= $user['name'] ?></td>
                            <td><?= $user['email'] ?></td>
                            <td><?= $user['mobile'] ?></td>
                            <td><?= $user['created_at'] ?></td>
                            <td>
                                <form action="./formUpdate.php" method="get">
                                    <input type="hidden" name="id" value="<?= $user['id'] ?>">
                                    <input type="submit" value="Update" class="btn btn-outline-primary">
                                </form>
                            </td>
                            <td>
                                <form action="./show.php" method="get">
                                    <input type="hidden" name="id" value="<?= $user['id'] ?>">
                                    <input type="submit" value="Show" class="btn btn-outline-info">
                                </form>
                            </td>
                            <td>
                                <form action="./delete.php" method="get">
                                    <input type="hidden" name="id" value="<?= $user['id'] ?>">
                                    <input type="submit" value="Delete" class="btn btn-outline-danger">
                                </form>
                            </td>

                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>