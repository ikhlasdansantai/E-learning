<?php
// Session start
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../public/css/output.css" />
  </head>
  <body class="min-h-[100vh] flex justify-center items-center border bg-primary">
    <div class="container-all mx-w-[30rem] h-full mx-auto border bg-white shadow-xl rounded-[1rem] overflow-hidden">
      <div class="container border text-center py-10 px-10">
        <h2 class="text-xl">ADMIN LOGIN 😎</h2>

        <form class="text-center flex flex-col gap-y-6 mt-10">
          <div class="boxInput">
            <label for="username">
              <input type="text" id="username" placeholder="Username" class="border border-slate-500 p-standart" />
            </label>
          </div>
          <div class="boxInput">
            <label for="password">
              <input type="password" id="password" placeholder="password" class="border border-slate-500 p-standart" />
            </label>
          </div>
          <button type="submit" class="bg-blue-600 border block py-2 text-white font-bold tracking-[.5px] cursor-pointer hover:bg-blue-700 active:bg-blue-800 active:ring active:ring-blue-900">Login!</button>
        </form>
      </div>
    </div>
  </body>
</html>

<?php
// Include configuration
include 'config/config.php';
include 'config/db.php';
$conn = connect();
 
// Get value from POST form
$username = $_POST['username'];
$userpass = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc(); 

// If a user existed in the database
if (mysqli_num_rows($result) > 0) {

    // Run this
    // Verify the hashed password with the password inputted by the user
    if (password_verify($userpass, $row['pass'])){

        // If the password was valid set a global session value (username, project_owner_id)
        $_SESSION['username'] = $username;

        // Redirect to home page
        header('Location: home.php');
    } else {

        // If login was unsuccessful, redirect to login page with failed message
        header('Location: index.php');
    }
} else {
    
    // If login was unsuccessful, redirect to login page with failed message
    header('Location: index.php');
}
?>