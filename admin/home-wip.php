<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../public/css/output.css" />
  </head>

  <style>
    .tabs {
      display: flex;
    }

    .tab {
      padding: 10px;
    }

    .tab-content {
      display: none;
      padding: 20px;
    }

    .tab.active {
      background-color: #fff;
    }

    .tab-content.active {
      display: block;
    }

    td span {
      display: block;
      border-radius: 0.5rem;
      margin-block: 0.5rem;
      padding-block: 0.225rem;
      padding-inline: 0.5rem;
      background-color: #1a1a1a;
      color: #f5f5f5;
      font-weight: bold;
      font-size: 12px;
      letter-spacing: 0.5px;
    }
    /* .html {
      color: red;
    }
    .css {
      color: rgb(103, 103, 160);
    } */
    td {
      text-align: center;
      padding: 2rem;
    }
    tr:nth-child(even) {
      background-color: #d4d4d4;
    }
    td:nth-child(2) {
      text-align: left;
      font-weight: 500;

      padding-left: 1rem;
    }
    /* td:nth-child(3) {
      padding-inline: 1.5rem;
    } */

    @media (min-width: 1136px) {
      td:nth-child(2) {
        max-width: 15ch;
      }
      .tags{
        display:flex;
        justify-content: flex-start;
        align-items: center;
        gap: .7rem;
        flex-wrap: wrap;
      }
      td span{
        width: 25%;
        font-size: 13px;
        /* padding-inline: .5rem; */
      }
      .js{
        text-align: center;
        padding-inline: 2rem;
      }
    }
  </style>

  <body class="bg-primary">
    <!-- min-[1700px]:grid-cols-3 -->
    <div class="container-all w-full sm:p-0 sm:grid sm:grid-cols-sidebar min-[1136px]:overflow-hidden">
      <div class="top-bar max-w-full bg-black fixed top-0 left-0 right-0 py-[2rem] p-standart">
        <nav class="container w-[90rem] self-start text-left text-white text-xl">Panel Admin Ikuzo Temera</nav>
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
        <section id="Home" class="tab-content active w-[100%] sm:w-[80%]">
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
                <td class="border-t  border-slate-300 text-sm p-3 tags">
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
                <td class="p-3 border-t  border-slate-300 text-sm tags">
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
                <td class="border-t  border-slate-300 text-sm p-3 tags">
                  <span class="php">Django</span>
                  <span class="python">Python</span>
                </td>
                <td class="border-t border-b border-slate-300 text-sm lg:text-lg">Si ganteng</td>
                <td class="border-t  border-slate-300 text-sm lg:text-lg">10 Februari 2023</td>
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
            *USER PAGE 
            =========== -->

        <section class="tab-content">
          <p>Tab Profile</p>
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
  <script>
    const tabs = document.querySelectorAll(".tab");
    const tabContents = document.querySelectorAll(".tab-content");

    tabs.forEach(function (tab) {
      tab.addEventListener("click", function () {
        const tabIndex = Array.prototype.indexOf.call(tabs, this);
        tabs.forEach(function (tab) {
          tab.classList.remove("active");
        });
        tabContents.forEach(function (tabContent) {
          tabContent.classList.remove("active");
        });
        tab.classList.add("active");
        tabContents[tabIndex].classList.add("active");
      });
    });

    // document.addEventListener("DOMContentLoaded", function () {
    //   // Selenkap semua baris pada tabel
    //   var rows = document.querySelectorAll("tr");
    //   // Tambahkan nomor pada setiap baris
    //   rows.forEach(function (row, index) {
    //     // Selenkap kolom nomor pada baris
    //     var numberColumn = row.querySelector("td:first-child");
    //     // Tambahkan nomor pada kolom nomor
    //     numberColumn.innerHTML = index + 1;
    //     // Tambahkan nomor sebagai ID pada baris
    //     row.id = "row-" + (index + 1);
    //   });
    // });
  </script>
</html>
