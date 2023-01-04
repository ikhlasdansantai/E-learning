
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
  </head>
  <body class="bg-primary">
    <div class="container-all w-full sm:p-0 sm:grid sm:grid-cols-sidebar min-[1136px]:overflow-hidden">
      <div class="top-bar max-w-full bg-black fixed top-0 left-0 right-0 py-[2rem] p-standart">
        <nav class="container w-[90rem] self-start text-left text-white text-xl flex justify-between items-center">
<<<<<<< HEAD
        <h2>Panel Admin Ikuzo Temera</h2>  
        <button href="" class='border py-2 px-4 border-slate-100'>LOG OUT GAN</button>  
      </nav>
      </div>

=======
        <h2>Panel Admin Ikuzo Temera</h2> 
        <a href="functions/logout.php" class='border py-2 px-4 border-slate-100'>LOG OUT GAN</a> 
      </nav>
      </div>
      <!-- min-[1700px]:col-start-1 -->
>>>>>>> 42fbaa6 (fitur login beres)
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
          <h2 class="text-2xl">Selamat datang <span class="text-slate-500 font-bold">Aeri Uchinaga</span></h2>
          <table class="w-full overflow-scroll min-[1136px]:overflow-hidden mt-8 table-auto border-collapse">
            <!-- Baris tabel -->
            <thead class="">
              <td class="px-2 text-center">ID</td>
              <td class="p-6">Judul</td>
              <td class="text-center p-3">Kategori</td>
              <td class="text-center p-3">Tag</td>
              <td class="text-center p-3">Author</td>
              <td class="text-center p-3">Dibuat</td>
            </thead>
            <tbody>
              <tr>
                <!-- Kolom isi -->
                <td class="text-center border-t border-b border-slate-300 text-sm p-3 lg:text-lg">1</td>
                <td class="border-t border-b border-slate-300 text-sm lg:text-lg">Cara membuat hover di tailwindcss</td>
                <td class="border-t border-b border-slate-300 text-sm p-3 lg:text-lg">Programming</td>
                <td class="border-t border-slate-300 text-sm p-3 tags">
                  <span class="html">Html</span>
                  <span class="css">CSS</span>
                </td>
                <td class="border-t border-b border-slate-300 text-sm p-3 lg:text-lg">siGanteng</td>
                <td class="border-t border-b border-slate-300 text-sm p-3 lg:text-lg">2 Februari 2023</td>
              </tr>
              <tr>
                <td class="pl-2 text-center border border-slate-300 text-sm p-3 lg:text-lg">2</td>
                <td class="border-t border-b border-slate-300 text-sm lg:text-lg">Cara membobol bank menggunakan termux</td>
                <td class="border-t border-b border-slate-300 text-sm lg:text-lg">CyberSecurity</td>
                <td class="border-t border-b border-slate-300 text-sm p-3 tags">
                  <span class="html">Html</span>
                  <span class="css">CSS</span>
                  <span class="js">JS</span>
                </td>
                <td class="border-t border-b border-slate-300 text-sm lg:text-lg">Si ganteng</td>
                <td class="border-t border-b border-slate-300 text-sm lg:text-lg">2 Februari 2023</td>
              </tr>
              <tr>
                <td class="text-center border-t border-b border-slate-300 text-sm p-3 lg:text-lg">3</td>
                <td class="border-t border-b border-slate-300 text-sm lg:text-lg">Cara membuat website</td>
                <td class="p-3 border-t border-b border-slate-300 text-sm lg:text-lg">Programming</td>
                <td class="p-3 border-t border-slate-300 text-sm tags">
                  <span class="html">Html</span>
                  <span class="css">CSS</span>
                  <span class="js">JS</span>
                  <span class="php">PHP</span>
                </td>
                <td class="border-t border-b border-slate-300 text-sm lg:text-lg">Si ganteng</td>
                <td class="border-t border-b border-slate-300 text-sm lg:text-lg">10 Februari 2023</td>
              </tr>
              <tr>
                <td class="p-3 text-center border-t border-b border-slate-300 text-sm lg:text-lg">4</td>
                <td class="border-t border-b border-slate-300 text-sm lg:text-lg">Kenapa kita harus pake Python untuk semua project??</td>
                <td class="p-3 border-t border-b border-slate-300 text-sm lg:text-lg">Programming</td>
                <td class="border-t border-slate-300 text-sm p-3 tags">
                  <span class="php">Django</span>
                  <span class="python">Python</span>
                </td>
                <td class="border-t border-b border-slate-300 text-sm lg:text-lg">Si ganteng</td>
                <td class="border-t border-slate-300 text-sm lg:text-lg">10 Februari 2023</td>
              </tr>
              <tr>
                <td class="p-3 text-center border-t border-b border-slate-300 text-sm">5</td>
                <td class="border-t border-b border-slate-300 text-sm lg:text-lg">Robotics 101</td>
                <td class="p-3 border-t border-b border-slate-300 text-sm lg:text-lg">IoT</td>
                <td class="border-t border-slate-300 text-sm p-3 tags">
                  <span class="Robotics">Robotics</span>
                  <span class="Robotics">Arduino</span>
                </td>
                <td class="border-t border-b border-slate-300 text-sm lg:text-lg">Si ganteng</td>
                <td class="border-t border-b border-slate-300 text-sm lg:text-lg">10 Februari 2023</td>
              </tr>
              <tr>
                <td class="p-3 text-center border-t border-b border-slate-300 text-sm lg:text-lg">6</td>
                <td class="border-t border-b border-slate-300 text-sm lg:text-lg">Kenapa kita harus pake Python untuk semua project??</td>
                <td class="p-3 border-t border-b border-slate-300 text-sm lg:text-lg">Programming</td>
                <td class="border-t border-b border-slate-300 text-sm p-3 tags">
                  <span class="php">Django</span>
                  <span class="python">Python</span>
                </td>
                <td class="border-t border-b border-slate-300 text-sm lg:text-lg">Si ganteng</td>
                <td class="border-t border-b border-slate-300 text-sm lg:text-lg">10 Februari 2023</td>
              </tr>
            </tbody>
          </table>
        </section>
        <!-- ==========
            *Profile PAGE
            =========== -->
<<<<<<< HEAD

        <section class="tab-content mx-auto profile active lg">
          <h2 class="text-2xl font-bold mb-10 text-center">Profile Admin</h2>

=======
        <section class="tab-content mx-auto profile active lg">
          <h2 class="text-2xl font-bold mb-10 text-center">Profile Admin</h2>
>>>>>>> 42fbaa6 (fitur login beres)
          <div class="card py-5 mx-auto lg:self-start flex flex-col justify-center items-center shadow-xl border-4 w-[50%]">
            <div class="avatar card-img w-[10rem] h-[5rem]" id="avatar">
              <img src="https://avatars.dicebear.com/api/adventurer/ikhsan.svg" alt="avatar" class="block" id="avatarnya" />
            </div>
            <div class="card-titles text-center mt-16">
              <h2 class="font-semibold">Hi, <span>Admin</span></h2>
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
          <p>Tab Buat Artikel</p>
        </div>
        <div class="tab-content">
          <p>Tab Saya</p>
        </div>
      </main>
    </div>
  </body>
  <script src="assets/js/app.js"></script>
</html>