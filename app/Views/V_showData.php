<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>WEBSITE</title>

    <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel ="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">
    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/#[[latestVersion]]#/mdb.min.css"
  rel="stylesheet"
/>
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/#[[latestVersion]]#/mdb.min.js"
></script>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
		<img
        src="https://3dwarehouse.sketchup.com/warehouse/v1.0/content/public/9fbd8bab-53ad-4ba8-a632-2fc75f6f28cf"
        height="50"
        alt="MDB Logo"
        loading="lazy"
      />
		<div class="container">
			<a class="navbar-brand" href="<?= base_url() ?>">Home</a>
            <a class="navbar-brand" href="<?= base_url('data/insertData/') ?>">Add Student</a>
            <a class="navbar-brand" href="<?= base_url('login') ?>">Log Out</a>
            <a class="navbar-brand" href="<?= base_url('report') ?>">Report</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">

				</ul>
			</div>
		</div>
	</nav>
<header>

<div
    class="p-1 text-center bg-image"
    style="
      background-image: url('https://i0.wp.com/dianisa.com/wp-content/uploads/2022/12/2.-Wallpaper-HD-Landscape-Desktop-Keren.jpg?resize=1000%2C600&ssl=1');
      height: 500px;
    "
  >
  

<div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="fs-1 text-center bg-image">
        <div class="text-white">
        <h1 class="fs-2">HOLLA!!!
        <h1 class="fs-1">INI WEBSITE HAFIZ NURUL IMAN
      

      </div>
      </div>
      </h1>
          </h1>
        </div>
      </div>
    </div>
  </div>

  <!-- Background image -->
</header>
<!--Main Layout-->
<main class="text-center my-5">

  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <p align="justify">.</p>

      </div>
    </div>
  </div>

</main>
<!--Main Layout-->


</head>
<body>
<button type="button" class="btn btn-primary"><a class="navbar-brand" href="<?= base_url('data/insertData/') ?>">TAMBAH DATA</a>    
</button>
    

    <table id="example" class="table table-striped" style="width:100%">
        <thead>
        <tr>
            <td>Nim</td>
            <td>nama</td>
            <td>Fakultas</td>
            <td>Alamat</td>
        </tr>
        </thead>

        <tbody>
        <?php 
            foreach ($hasil as $row) {

            
        
        ?>
        <tr>
            <td><?php echo $row->nim; ?></td>
            <td><?php echo $row->nama; ?></td>
            <td><?php echo $row->fakultas; ?></td>
            <td><?php echo $row->alamat; ?></td>
            <td><button type="button" class="btn btn-primary"> 
              <a href="data/editData/<?php echo $row->nim; ?>">
              <div class="text-white">Edit 
              </div>
              </button>
              </a>
              <button type="button" class="btn btn-primary">   
              <a href="data/hapusData/<?php echo $row->nim; ?>">
              <div class="text-white">
              Hapus
              </div>
              </button> 
              </a>
            </td>
        </tr>
        <?php
            }
        ?>
        </tbody>
    </table>

    <script>
    $(document).ready(function () 
    {
        $('#example').DataTable();
    });
    </script>

    

</body>
<footer class="bg-light text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #3b5998;"
        href="#!"
        role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #55acee;"
        href="#!"
        role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #dd4b39;"
        href="#!"
        role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #ac2bac;"
        href="#!"
        role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #0082ca;"
        href="#!"
        role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>
      <!-- Github -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #333333;"
        href="#!"
        role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © **:
    <a class="text-white" href="https://mdbootstrap.com/">INI WEB</a>
  </div>
  <!-- Copyright -->
</footer>
</html>