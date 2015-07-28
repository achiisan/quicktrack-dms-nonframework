
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
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="fi-list"></span>
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
  <div class="mdl-layout__drawer mdl-layout--large-screen-only">
    <span class="mdl-layout-title">QuickTrack DMS</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="payroll.php">General Payroll</a>
      <a class="mdl-navigation__link" href="billing.php">Billing</a>
      <a class="mdl-navigation__link" href="logbook.php">SG Daily Logbook</a>
    </nav>
  </div>

  <main class="mdl-layout__content main-content">
    <div class="page-content">
      <div class="mdl-grid">

        <div class="mdl-cell mdl-cell--12-col mdl-grid submenu-module ">

          <div class="mdl-cell mdl-cell--4-col page-title-menu"  style="background: rgb(255, 87, 34)">
              <h4>General Payroll </h4>
          </div>

          <nav class="mdl-cell mdl-cell--8-col">
              
                <div class="nav-pages"  onclick="toggletabs('#add')">
                  <strong>New Payroll Record</strong>
                    <hr>
                </div>
              
              <div class="nav-pages" onclick="toggletabs('#search')">
                <strong>Search Records</strong>
                <hr>
              </div>
              <div class="nav-pages">
                <strong>View All Records</strong>
                <hr>
              </div>

          </nav>
        </div>


        <div class="mdl-cell mdl-cell--12-col content-module">
         
            <?php //include 'payroll-content.php'; ?>

        </div>
      </div>

       
    </div>
  </main>
</div>

<?php include "../lib/footer.php" ?>