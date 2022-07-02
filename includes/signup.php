<div class="modal fade" id="exampleModalsignup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <form action="api/login.php" style="background: transparent;max-width:500px;margin-top:20px;margin-bottom:30px" method="post">
              <h2 class="modal-title" style="display: flex;color: dodgerblue; font-size: 40px; justify-content: center;" id="exampleModalLabel">Sign Up</h2>
              <div class="input-container">
                <i class="fa fa-user icon"></i>
                <input class="input-field" type="text" placeholder="Username" name="usrnm">
              </div>
            
              <div class="input-container">
                <i class="fa fa-envelope icon"></i>
                <input class="input-field" type="text" placeholder="Email" name="email">
              </div>
              
              <div class="input-container">
                <i class="fa fa-key icon"></i>
                <input class="input-field" type="password" placeholder="Password" name="psw">
              </div>
              <button type="submit" class="btn1">Sign Up</button>
            
        </form>
      </div>
      <div class="modal-footer">
        <span>Already have an account?</span>
        <div class="signup-link"> <a href="#exampleModallogin" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#exampleModallogin">Login</a></div>
      </div>
    </div>
  </div>
</div>