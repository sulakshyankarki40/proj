<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand me-5" href="index.php">HOTEL</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active me-3" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-3" aria-current="page" href="room.php">Room</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  me-3" aria-current="page" href="facilities.php">Facilities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link   me-3" aria-current="page" href="contactus.php">Contact us</a>
        </li>
      </ul>
      <div class="d-flex">
        <button type="button" class="btn btn-primary   shadow-none me-lg-3 me-3" data-bs-toggle="modal" data-bs-target="#login">Login</button>
        <button type="button" class="btn btn-primary   shadow-none me-lg-3 me-3" data-bs-toggle="modal" data-bs-target="#register">Register</button>
      </div>
    </div>
  </div>
</nav>
<!-- Navbar  End -->

<!-- Login -->
<div class="modal fade" id="login" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form> 
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel align-items-center"><i class="bi bi-people fs-20 me-3 " ></i>User login</h5>
        <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3">
        <label class="form-label">Email address</label>
        <input type="Email" class="form-control">
         </div>
        <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="Password" class="form-control">
        </div>
        <button   type="submit" class="btn btn-primary">login</button>
        <a href="javascript:void(0)" class="text-decoration-none"> Forget password?</a>
         </div>
      
      </div>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- Login End -->

<!-- Registration  -->

<div class="modal fade" id="register" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form> 
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel align-items-center"><i class="bi bi-person-fill-down"></i>User Registration</h5>
        <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3">
        <label class="form-label">Full Name</label>
        <input type="name" class="form-control">
         </div>
         <div class="mb-3">
        <label class="form-label">Address</label>
        <input type="address" class="form-control">
        </div>
        <div class="mb-3">
        <label class="form-label">Phone number</label>
        <input type="number" class="form-control">
        </div>
        <div class="mb-3">
        <label class="form-label">Email Address</label>
        <input type="email" class="form-control">
        </div>
        <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="Password" class="form-control">
        </div>
        
        <button   type="submit" class="btn btn-primary">Register</button>
         </div>
      
      </div>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- Registration end -->
 