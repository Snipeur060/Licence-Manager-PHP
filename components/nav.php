<?php 
//check if file is included or someone try to access with browser
if (basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
	echo "
  <style>@import url('https://fonts.googleapis.com/css?family=Share+Tech+Mono|Montserrat:700');

* {
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline;
    box-sizing: border-box;
    color: inherit;
}

body {
    background-image: linear-gradient(120deg, #4f0088 0%, #000000 100%);
    height: 100vh;
}

h1 {
    font-size: 45vw;
    text-align: center;
    position: fixed;
    width: 100vw;
    z-index: 1;
    color: #ffffff26;
    text-shadow: 0 0 50px rgba(0, 0, 0, 0.07);
    top: 50%;
    transform: translateY(-50%);
    font-family: 'Montserrat', monospace;
}

div {
    background: rgba(0, 0, 0, 0);
    width: 70vw;
    position: relative;
    top: 50%;
    transform: translateY(-50%);
    margin: 0 auto;
    padding: 30px 30px 10px;
    box-shadow: 0 0 150px -20px rgba(0, 0, 0, 0.5);
    z-index: 3;
}

P {
    font-family: 'Share Tech Mono', monospace;
    color: #f5f5f5;
    margin: 0 0 20px;
    font-size: 17px;
    line-height: 1.2;
}

span {
    color: #f0c674;
}

i {
    color: #8abeb7;
}

div a {
    text-decoration: none;
}

b {
    color: #81a2be;
}

a.avatar {
    position: fixed;
    bottom: 15px;
    right: -100px;
    animation: slide 0.5s 4.5s forwards;
    display: block;
    z-index: 4
}

a.avatar img {
    border-radius: 100%;
    width: 44px;
    border: 2px solid white;
}

@keyframes slide {
    from {
        right: -100px;
        transform: rotate(360deg);
        opacity: 0;
    }
    to {
        right: 15px;
        transform: rotate(0deg);
        opacity: 1;
    }
}</style>
  <h1>403</h1>
<div><p>> <span>ERROR CODE</span>: '<i>HTTP 403 Forbidden</i>'</p>
<p>> <span>ERROR DESCRIPTION</span>: '<i>Access Denied. You Do Not Have The Permission To Access This Page On This Server</i>'</p>
<p>> <span>ERROR POSSIBLY CAUSED BY</span>: [<b>execute access forbidden, read access forbidden, write access forbidden, ssl required, ssl 128 required, ip address rejected, client certificate required, site access denied, too many users, invalid configuration, password change, mapper denied access, client certificate revoked, directory listing denied, client access licenses exceeded, client certificate is untrusted or invalid, client certificate has expired or is not yet valid, passport logon failed, source access denied, infinite depth is denied, too many requests from the same client ip</b>...]</p></p>
</div>
";
  
die();
}
$nav = "<aside id='layout-menu' class='layout-menu menu-vertical menu bg-menu-theme'>
          <div class='app-brand demo'>
            <a href='/' class='app-brand-link'>
              <span class='app-brand-logo demo'>
                <image style='width: 3rem;' src='https://www.php.net//images/logos/new-php-logo.svg'>
              </span>
              <span class=' demo menu-text fw-bolder ms-2'>Licence Manager</span>
            </a>

            <a href='javascript:void(0);' class='layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none'>
              <i class='bx bx-chevron-left bx-sm align-middle'></i>
            </a>
          </div>

          <div class='menu-inner-shadow'></div>

          <ul class='menu-inner py-1'>
            <!-- Dashboard -->
            <li class='menu-item'>
              <a href='/' class='menu-link'>
                <i class='menu-icon tf-icons bx bx-home-circle'></i>
                <div data-i18n='Analytics'>Dashboard</div>
              </a>
            </li>
          </ul>
        </aside>";
$topnav = "<nav
            class='layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme'
            id='layout-navbar'
          >
            <div class='layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none'>
              <a class='nav-item nav-link px-0 me-xl-4' href='javascript:void(0)'>
                <i class='bx bx-menu bx-sm'></i>
              </a>
            </div>

            <div class='navbar-nav-right d-flex align-items-center' id='navbar-collapse'>
              <!-- Search -->
              <div class='navbar-nav align-items-center'>
                <div class='nav-item d-flex align-items-center'>
                  <i class='bx bx-search fs-4 lh-0'></i>
                  <input
                    type='text'
                    class='form-control border-0 shadow-none'
                    placeholder='Search...'
                    aria-label='Search...'
                  />
                </div>
              </div>
              <!-- /Search -->

              <ul class='navbar-nav flex-row align-items-center ms-auto'>
                <!-- Place this tag where you want the button to render. -->
                

                <!-- User -->
                <li class='nav-item navbar-dropdown dropdown-user dropdown'>
                  <a class='nav-link dropdown-toggle hide-arrow' href='javascript:void(0);' data-bs-toggle='dropdown'>
                    <div class='avatar avatar-online'>
                      <img src='https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png' alt class='w-px-40 h-auto rounded-circle' />
                    </div>
                  </a>
                  <ul class='dropdown-menu dropdown-menu-end'>
                    <li>
                      <a class='dropdown-item' href='#'>
                        <div class='d-flex'>
                          <div class='flex-shrink-0 me-3'>
                            <div class='avatar avatar-online'>
                              <img src='https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png' alt class='w-px-40 h-auto rounded-circle' />
                            </div>
                          </div>
                          <div class='flex-grow-1'>
                            <span class='fw-semibold d-block'><?php echo $username; ?></span>
                            <small class='text-muted'><?php echo $grade; ?></small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class='dropdown-divider'></div>
                    </li>
                    <li>
                      <a class='dropdown-item' href='#'>
                        <i class='bx bx-user me-2'></i>
                        <span class='align-middle'>My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class='dropdown-item' href='#'>
                        <i class='bx bx-cog me-2'></i>
                        <span class='align-middle'>Settings</span>
                      </a>
                    </li>
                    <li>
                      <a class='dropdown-item' href='#'>
                        <span class='d-flex align-items-center align-middle'>
                          <i class='flex-shrink-0 bx bx-credit-card me-2'></i>
                          <span class='flex-grow-1 align-middle'>Billing</span>
                          <span class='flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20'>4</span>
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class='dropdown-divider'></div>
                    </li>
                    <li>
                      <a class='dropdown-item' href='auth-login-basic.html'>
                        <i class='bx bx-power-off me-2'></i>
                        <span class='align-middle'>Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>";
