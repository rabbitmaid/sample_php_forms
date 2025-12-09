<?php session_start() ?>
<?php
 
  require_once __DIR__ . "/database.php";
  require_once __DIR__ . "/functions.php";

  // fetch all users from the database
  $sql = "SELECT id, name, email, phone_number, created_at FROM users ORDER BY created_at DESC";
  $result = $connection->query($sql);

  $users = [];

   // check if there are results and fill the users array
    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
    }

    // debug($users);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Users</title>
     <link rel="stylesheet" href="style.css">

     <script src=" https://cdn.jsdelivr.net/npm/sweetalert2@11.26.4/dist/sweetalert2.all.min.js "></script>
    <link href=" https://cdn.jsdelivr.net/npm/sweetalert2@11.26.4/dist/sweetalert2.min.css " rel="stylesheet">

     <script src="main.js" defer></script>
</head>
<body>

 
<section class="table-container"> 
    
    <?php require_once "./templates/notice.php" ?>

    <h1>All Users</h1>

    <table>
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Email Adress</th>
                <th>Phone Number</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>

          <?php if(count($users) > 0): ?>

            <?php foreach($users as $user): ?>

            <tr>
                <td><?=  $user['name'] ?></td>
                <td><?=  $user['email'] ?></td>
                <td><?=  $user['phone_number'] ?></td>
                <td><?=  $user['created_at'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $user['id'] ?>">Edit</a>
                  
                    <form action="delete.php" class="delete-form" method="POST">
                        <input type="hidden" name="userId" value="<?= $user['id'] ?>" />
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>

            <?php endforeach ?>

          <?php else: ?>

            <tr>
                <td colspan="5" style="text-align: center;">No Results Found</td>
            </tr>

          <?php endif ?>
           

        </tbody>

    </table>


</section>


    
</body>
</html>