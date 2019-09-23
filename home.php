<?php include("header.php"); ?>
<!-----------side nav start--------->  
<div id="mySidenav" class="sidenav f-ply">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <!--------profile open--------->
      <div class="text-light">
          <div class="pt-1">
          	<img class="rounded-circle my-3 ml-3" src="assets/images/pro.jpg" style="width:70px;height:70px">
          </div>
          <p class="mb-0 pl-4">Kumar</p>
          <h6 class="pt-1 pl-4 text-grey">8765534236</h6>
      </div><!--------profile close--------->
      <!-------- Account Menus open--------->
      <ul class="nav nav-tabs flex-column text-dark side-mu">
          <li class="nav-item">
             <a class="nav-link py-3" href="home.html"><img src="assets/images/group.png" style="width:25px;height:25px">&nbsp;&nbsp; New Group</a>
          </li>
          <li class="nav-item">
             <a class="nav-link py-3" href="my-account.html"><img src="assets/images/contacts.png" style="width:25px;height:25px">&nbsp;&nbsp; Contacts</a>
          </li>
          <li class="nav-item">
             <a class="nav-link py-3" href="book_table.html"><img src="assets/images/invite.png" style="width:25px;height:25px">&nbsp;&nbsp; Invite Friends</a>
          </li>
          <li class="nav-item">
             <a class="nav-link py-3" href="my-booking.html"><img src="assets/images/setting.png" style="width:25px;height:25px">&nbsp;&nbsp; Settings</a>
          </li>
          <!-- <li class="nav-item">
             <a class="nav-link py-3" href="contact.html"><img src="assets/images/ic_contactus.png" style="width:30px;height:30px">&nbsp;&nbsp; Contact Us</a>
          </li> -->
          <li class="nav-item">
          <a class="nav-link py-3" href="#"><img src="assets/images/logout.png" style="width:25px;height:25px">&nbsp;&nbsp; Logout</a>
          </li>
      </ul>
      <!--------Account Menus close--------->
      <footer class="text-white side-ft"> v1.1</footer>
  </div>
  <!--------Side nav close--------->
<nav class="navbar fixed-top navbar-light bg-burgundy">
   <div class="col-3">
       <a class="navbar-brand" href="#" data-toggle="collapse" data-target="#collapsibleNavbar" onclick="openNav()">
       <i class="fas fa-sliders-h text-light p-1 border border-light"></i></a>
   </div>
   <div class="col-6">
      <p class="mb-0 text-center py-1 px-2"><span></span></p>
    </div>
    <div class="col-3 text-right"><a class="ml-auto" href="#"><i class="fas fa-search text-white"></i></a>
    </div>  
</nav>
<br>
<br>
<br>
<div class="container-fluid">
  <h1>My First Bootstrap Page</h1>
  <p>This is some text.</p>
</div>
<?php include("footer.php"); ?>