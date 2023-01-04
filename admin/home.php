
<?php
session_start();
    include 'config/db.php';
    // include 'config/config.php';
    $conn = connect();
if (!isset($_SESSION['username'])) {
  header('Location: index.php');
  die();
}
  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="assets/style/style.css" />
    <link rel="stylesheet" href="../public/css/output.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
  </head>
  <body class="bg-primary">
    <div class="container-all w-full sm:p-0 sm:grid sm:grid-cols-sidebar min-[1136px]:overflow-hidden">
      <div class="top-bar max-w-full bg-black fixed top-0 left-0 right-0 py-[2rem] p-standart">
        <nav class="container w-[90rem] self-start text-left text-white text-xl flex justify-between items-center">

        <h2>Panel Admin</h2> 
        <a href="functions/logout.php" class='border py-2 px-4 border-slate-100'>LOG OUT GAN</a> 
      </nav>
      </div>
      <!-- min-[1700px]:col-start-1 -->

      <header class="col-start-1 w-[15rem] min-h-[100vh] shadow-xl mt-12 hidden sm:block fixed top-0 left-0 bottom-0">
        <ul class="side-bar tabs my-6 px-8 flex flex-col justify-evenly items-center h-[33rem]">
          <li class="tab"><a href="#">Home</a></li>
          <li class="tab"><a href="#">Profile</a></li>
          <li class="tab"><a href="#">Buat Artikel</a></li>
          <li class="tab"><a href="#">Artikel Saya</a></li>
        </ul>
      </header>
      <main class="w-full col-start-2 col-end-5 grid-rows-1 mt-[8rem]">
        <section id="Home" class="tab-content w-[100%] sm:w-[80%]">
          <h2 class="text-2xl">Selamat datang <span class="text-slate-500 font-bold"><?= $_SESSION['name'] ?></span></h2>
          <table class="w-full overflow-scroll min-[1136px]:overflow-hidden mt-8 table-auto border-collapse">
            <!-- Baris tabel -->
            <thead class="">
              <td class="px-2 text-center">ID</td>
              <td class="p-6">Judul</td>
              <td class="text-center p-3">Kategori</td>
              <td class="text-center p-3">Author</td>
              <td class="text-center p-3">Dibuat</td>
            </thead>
            <tbody>
            <?php
            $sql = "SELECT id, title, category, author, created_on FROM articles";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) { ?>

              <tr>
                <!-- Kolom isi -->
                <?php 
                $phpdate = strtotime( $row['created_on'] );
                $mysqldate = date( 'd F Y', $phpdate );
                ?>
                <td class="text-center border-t border-b border-slate-300 text-sm p-3 lg:text-lg"><?= $row['id']; ?></td>
                <td class="border-t border-b border-slate-300 text-sm lg:text-lg"><?= $row['title']; ?></td>
                <td class="border-t border-b border-slate-300 text-sm p-3 lg:text-lg"><?= $row['category']; ?></td>
                <td class="border-t border-b border-slate-300 text-sm p-3 lg:text-lg"><?= $row['author']; ?></td>
                <td class="border-t border-b border-slate-300 text-sm p-3 lg:text-lg"><?= $mysqldate;?></td>
              </tr>
              <?php }
            } else {
              echo "-";
            }

            ?>
            </tbody>
          </table>
        </section>
        <!-- ==========
            *Profile PAGE
            =========== -->

        <section class="tab-content mx-auto profile active lg">
          <h2 class="text-2xl font-bold mb-10 text-center">Profile Admin</h2>

          <div class="card py-5 mx-auto lg:self-start flex flex-col justify-center items-center shadow-xl border-4 w-[50%]">
            <div class="avatar card-img w-[10rem] h-[5rem]" id="avatar">
              <img src="https://avatars.dicebear.com/api/adventurer/ikhsan.svg" alt="avatar" class="block" id="avatarnya" />
            </div>
            <div class="card-titles text-center mt-16">
              <h2 class="font-semibold">Hi, <span><?= $_SESSION['name'] ?></span></h2>
              <h2 class="text-slate-500 font-semibold">Edit Profile</h2>
              <form class="form mt-6 flex flex-col gap-y-5">
                <div class="boxInput border border-slate-900">
                  <label for="username">
                    <input type="text" id="username" class="username py-2 px-4" placeholder="Username User" />
                  </label>
                </div>
                <div class="boxInput border border-slate-900">
                  <label for="password">
                    <input type="password" id="password" class="password py-2 px-4" placeholder="Buat Password Baru" />
                  </label>
                </div>
              </form>
            </div>
          </div>
        </section>
        <div class="tab-content">
        <form action="functions/save-article.php" method="post">
          Title <input type="text" name="title" id="">
          <br>

          Category 
          <br>
          <input type="radio" name="category" id="" value="Cybersecurity"> Cybersecurity
          <br>
          <input type="radio" name="category" id="" value="Programming"> Programming
          <br>
          <input type="radio" name="category" id="" value="IoT"> IoT
          <br>

          <input type="hidden" value="<?= $_SESSION['name']; ?>">

          <textarea name="content" id="file-input" cols="30" rows="10"></textarea>
          <button type="submit" name="save">Save</button>
        </form>
        <script>
          var simplemde = new SimpleMDE({ element: document.getElementById("file-input") });
        </script>
        </div>
        <div class="tab-content">
        <table class="w-full overflow-scroll min-[1136px]:overflow-hidden mt-8 table-auto border-collapse">
            <!-- Baris tabel -->
            <thead class="">
              <td class="px-2 text-center">ID</td>
              <td class="p-6">Judul</td>
              <td class="text-center p-3">Kategori</td>
              <td class="text-center p-3">Author</td>
              <td class="text-center p-3">Dibuat</td>
            </thead>
            <tbody>
            <?php
            $name = $_SESSION['name'];
            $sql = "SELECT id, title, category, author, created_on FROM articles WHERE author = '$name'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) { ?>

              <tr>
                <!-- Kolom isi -->
                <?php 
                $phpdate = strtotime( $row['created_on'] );
                $mysqldate = date( 'd F Y', $phpdate );
                ?>
                <td class="text-center border-t border-b border-slate-300 text-sm p-3 lg:text-lg"><?= $row['id']; ?></td>
                <td class="border-t border-b border-slate-300 text-sm lg:text-lg"><?= $row['title']; ?></td>
                <td class="border-t border-b border-slate-300 text-sm p-3 lg:text-lg"><?= $row['category']; ?></td>
                <td class="border-t border-b border-slate-300 text-sm p-3 lg:text-lg"><?= $row['author']; ?></td>
                <td class="border-t border-b border-slate-300 text-sm p-3 lg:text-lg"><?= $mysqldate;?></td>
              </tr>
              <?php }
            } else {
              echo "-";
            }

            ?>
          </table>
        </div>
      </main>
    </div>
  </body>
  <script src="assets/js/app.js"></script>
</html>



