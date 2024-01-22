<div class="acc-hdr bg-light" style="margin-top:130px !imoprtant; padding:20px 0;">
   <div class="my-headerbg-light bg-light">
      <div class="container">
         <span>
            <h3><a href="<?= BASE_URL;?>Account"><i class="fa fa-arrow-left"></i> My Account</a></h3>
         </span>
         <a href="#" data-toggle="modal" data-target="#logoutModal">Log Out</a>
      </div>
   </div>
   <nav class="navbar navbar-expand-lg navbar-light containerr">
      <div class="collapsee navbar-collapsee ">
         <ul class="navbar-nav account-menu container">
            <li class="nav-item ">
               <a class="nav-link " href="<?= BASE_URL;?>accountDetails">Account Details <span class="sr-only"></span></a>
            </li>
            <li class="nav-item ">
               <a class="nav-link " href="<?= BASE_URL;?>changePassword">Change Your Password</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?= BASE_URL;?>changeEmail">Change your email</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?= BASE_URL;?>deleteAccount">Delete Account</a>
            </li>
         </ul>
      </div>
   </nav>
</div>