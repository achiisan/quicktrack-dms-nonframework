
<?php
if(isset($_GET['success'])){
  $success = $_GET['success'];
}else {
  $success = null ;
}

?>

<!DOCTYPE html>
<html>

<head>
  <title>QuickTrack DMS</title>
  <link rel="stylesheet" href="..//assets/mdl/material.min.css">
   <script src="..//assets//mdl/material.min.js"></script>

  
  <link rel="stylesheet" href="../assets/css/style.css">
 <script src="../assets/js/jquery-1.11.3.min.js "></script>
   <script src="../assets/js/qtdms.js "></script>

</head>

<body>

<!-- ================================= -->
<!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="hdr-main">
    <div class="mdl-layout__drawer-button">
      <i class="fi-list"></i>
    </div>
    <div class="mdl-layout__header-row">
      <!-- Title -->
      
      <a href="index.php">
      <span class="mdl-layout-title">
        <img src="../assets/img/QT-DMS-engraved.png" width="200"/>
      </span>
    </a>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
     
    </div>
  </header>

  <main class="mdl-layout__content main-content">
    <div class="page-content">
      <div class="mdl-grid">

        <div class="mdl-cell mdl-cell--12-col mdl-grid submenu-module ">
          
          <div class="mdl-cell mdl-cell--4-col page-title-menu"  style="background: rgb(255, 87, 34)">
          
              <h4>   General Payroll </h4>

          </div>

          <nav class="mdl-cell mdl-cell--8-col">
              <a href="#m1">
                <div id="m1" class="nav-pages nav-add">
                  <div class="nav-pages-wrapper">
                      <span class="icon fi-plus"></span>
                      <strong>New Payroll Record</strong>
                    </div>
                  </div>
              </a>

              <a href="#m2">
                <div id="m2" class="nav-pages nav-search">
                  <div class="nav-pages-wrapper">
                      <span class="icon fi-magnifying-glass"></span>
                      <strong>Search  Records</strong>
                  </div>
              </div>
               </a>
               <a href="#m3">
                  <div id="m3" class="nav-pages nav-all">
                  
                   <div class="nav-pages-wrapper">
                      <span class="icon fi-thumbnails"></span>
                      <strong>View All Records</strong>
                    </div>
                
                </div>
              </a>

          </nav>
        </div>

        <div class="mdl-cell mdl-cell--1-col">
          &nbsp;
        </div>
        
        <div class="mdl-cell mdl-cell--10-col content-module">
              <?php
            if($success != null){
              echo "Test";
            }
            ?>
            <?php include 'payroll-content.php'; ?>

        </div>
         <div class="mdl-cell mdl-cell--1-col">
          &nbsp;
        </div>
      </div>

       
    </div>
  </main>
</div>

<?php include "../lib/footer.php" ?>