
<!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">
        <img src="<?php echo base_url()?>/assets/img/QT-DMS.png" width="200"/>
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
      <div class="mdl-grid">

        <div class="mdl-cell mdl-cell--3-col mdl-cell--12-col-phone submenu-module">
          <div class="page-title-menu"  style="background: <?php echo $color ?>">
              <h2><?php echo $title ?> </h2>
          </div>
        </div>


        <div class="mdl-cell mdl-cell--9-col mdl-cell-12-col-phone content-module">
          <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="<?php echo site_url($metalink.'/add') ?>">New <?php echo $title ?> Entry</a>
          <a class="mdl-navigation__link" href="<?php echo site_url($metalink.'/search')?>">Search</a>
          <a class="mdl-navigation__link"  href="<?php echo site_url($metalink.'/viewall') ?>">View All Payroll Documents</a>
          </nav>
          <?php echo $body ?>
        </div>
      </div>


      

       
    </div>
  </main>
</div>
