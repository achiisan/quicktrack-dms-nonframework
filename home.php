

<div class="mdl-grid">
  <!-- border L -->
  <div class="mdl-cell mdl-cell--1-col-desktop mdl-cell--hide-phone"></div>


  <div class="mdl-cell mdl-cell--10-col mdl-grid">

    <div class="mdl-cell mdl-cell--12-col">
      <h3 align="center">Hello, <?php echo $_SESSION['login-user'];?>!</br></h3>
    </div>

    <div class="mdl-cell mdl-cell--4-col">

      <div id="payroll" class="mdl-card mdl-shadow--2dp through mdl-shadow--8dp card-dashboard">
          <div class="mdl-card__title mdl-card--expand">
              <h2>General Payroll</h2>
          </div>
          <div class="mdl-card__actions mdl-card--border">
            <a  href="payroll.php" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
              View Dashboard
            </a>
          </div>
      </div>

    </div>
    <div class="mdl-cell mdl-cell--4-col">

      <div id="billing" class="mdl-card mdl-shadow--2dp through mdl-shadow--8dp card-dashboard">
          <div class="mdl-card__title mdl-card--expand">
              <h2>Billing</h2>
          </div>
          <div class="mdl-card__actions mdl-card--border">
            <a href="#" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
              View Dashboard
            </a>
          </div>
      </div>

    </div>
    <div class="mdl-cell mdl-cell--4-col">

      <div id="logbook" class="mdl-card mdl-shadow--2dp through mdl-shadow--8dp card-dashboard">
          <div class="mdl-card__title mdl-card--expand">
              <h2>SG Daily Logbook</h2>
          </div>
          <div class="mdl-card__actions mdl-card--border">
            <a href="#" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
              View Dashboard
            </a>
        </div>

      </div>
    </div>
  </div>

<!-- border R -->
  <div class="mdl-cell mdl-cell--1-col mdl-cell--hide-phone"></div>
 
</div>
