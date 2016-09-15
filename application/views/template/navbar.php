<div class="navbar-fixed">
  <nav class="orange" role="navigation">
    <!-- Navigasi tampilan desktop materialize -->
    <div class="nav-wrapper" style="margin:0 20px 0 20px;"><a id="logo-container" href="<?php echo base_url('home'); ?>" class="brand-logo">Logo</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#" class="waves-effect waves-light"><i class="material-icons left">search</i>Search</a></li>
        <li><a href="#" class="waves-effect waves-light"><i class="material-icons left">grade</i>Favorite</a></li>
        <li><a href="<?php echo base_url('vendorlist'); ?>" class="waves-effect waves-light"><i class="material-icons left">perm_identity</i>Vendor List</a></li>
      </ul>
      <!-- Navigasi tampilan mobile & tablet materialize -->
      <ul id="nav-mobile" class="side-nav orange">
        <li><div class="userView">
        <img class="background" src="<?php echo base_url('assets/images/card.jpg'); ?>">
        <a href="#!user"><img class="circle" src="<?php echo base_url('assets/images/card1.jpg'); ?>"></a>
        <a href="#!name"><span class="white-text name">Taufik Anggara</span></a>
        <a href="#!email"><span class="white-text email">taufikanggara@gmail.com</span></a>
      </div></li>
        <li><a href="#" class="waves-effect waves-light white-text"><i class="material-icons left white-text">search</i>Search</a></li>
        <li><a href="#" class="waves-effect waves-light white-text"><i class="material-icons left white-text">grade</i>Favorite</a></li>
        <li><a href="<?php echo base_url('vendorlist'); ?>" class="waves-effect waves-light white-text"><i class="material-icons left white-text">perm_identity</i>Vendor List</a></li>
        <li><div class="divider"></div></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
</div>