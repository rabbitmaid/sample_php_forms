<?php session_start() ?>
<?php require_once __DIR__ . "/database.php"; ?>
<?php require_once __DIR__ . "/functions.php"; ?>

<?php  

   if(!isset($_GET['id'])) {
     redirect('users.php');
   }
   
   $userId = $_GET['id'];
   
   $sql = "SELECT id, name, email, gender, phone_number, address, date_of_birth, place_of_birth FROM users WHERE id = ?";

   $user = [];

   $statement = $connection->prepare($sql);
   $statement->bind_param("i", $userId);
   $statement->execute();
   $result = $statement->get_result();

    if($result->num_rows == 1) {
        $user = $result->fetch_assoc();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Forms - Edit Page</title>
    <link rel="stylesheet" href="style.css">
    <script src="main.js" defer></script>
</head>
<body>

<section>

    <?php require_once "./templates/notice.php" ?>

    <h1>Update User Information</h1>

    <form action="" method="POST">

       <!-- Name -->
        <div>
            <label for="name">Full Name</label>
            <input type="text" name="fullName" id="fullName"  value="<?= $user['name'] ?>"   required />
        </div>

        <!-- Email -->
        <div>
            <label for="email">Email Address</label>
            <input type="email" name="email" id="email" value="<?= $user['email'] ?>"  required />
        </div>

        <!-- Gender -->
        <div>
            <label for="gender">Gender</label>
            <select name="gender" id="gender" required>
                <option value="male"  <?=  $user['gender'] === 'male' ? 'selected' : '' ?>  >Male</option>
                <option value="female"  <?=  $user['gender'] === 'female' ? 'selected' : '' ?> >Female</option>
                <option value="rather_not_say"  <?=  $user['gender'] === 'rather_not_say' ? 'selected' : '' ?> >Rather Not Say</option>
            </select>
        </div>

        <!-- Phone Number -->
        <div>
            <label for="phoneNumber">Phone Number</label>
            <input type="tel" name="phoneNumber" id="phoneNumber" value="<?= $user['phone_number'] ?>" required />
        </div>

        <!-- Address -->
        <div>
            <label for="address">Address</label>
            <input type="text" name="address" id="address" value="<?= $user['address'] ?>" />
        </div>

        <!-- Place of birth -->
        <div>
            <label for="placeOfBirth">Place of Birth</label>
            <input type="text" name="placeOfBirth" id="placeOfBirth" value="<?= $user['place_of_birth'] ?>" />
        </div>

        <!-- Date of birth -->
        <div>
            <label for="dateOfBirth">Date of Birth</label>
            <input type="date" name="dateOfBirth" id="dateOfBirth" value="<?= $user['date_of_birth'] ?>" />
        </div>

        <button type="submit">Update</button>

    </form>



</section>


    
</body>
</html>