
<?php
  error_reporting(E_ERROR); //Remove any error prompts

  session_start();
  if ($_SESSION['auth'] == null){
    header("Location: ../index.php");
  }//if the user is already logged in, continue to home
?>
<!DOCTYPE html>
<html>

<head>
  <title>QuickTrack DMS</title>
  <link rel="stylesheet" href="..//assets/mdl/material.min.css">
   <script src="..//assets//mdl/material.min.js"></script>
  
  <link rel="stylesheet" href="../assets/css/style.css">
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
      <span class="mdl-layout-title">
        <img src="../assets/img/QT-DMS.png" width="200"/>
      </span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
     
    </div>
  </header>
  
  <div class="mdl-layout__drawer mdl-layout--large-screen-only">
    <span class="mdl-layout-title">QuickTrack DMS</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="payroll">General Payroll</a>
      <a class="mdl-navigation__link" href="">Billing</a>
      <a class="mdl-navigation__link" href="">SG Daily Logbook</a>
    </nav>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content">
    	 <?php include '../home.php'; ?>
    </div>
  </main>
</div>

<?php include '../lib/footer.php'?>