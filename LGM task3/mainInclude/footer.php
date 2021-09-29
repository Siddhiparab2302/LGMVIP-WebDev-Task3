<!--start footer-->
<footer >
  <div class = "row container">
      <div>
        <h3 class = "lg-text">Have a Question?</h3>
          <div class = "footer-contact-info">
            <div>
              <span><i class = "fas fa-map-marker-alt"></i></span>
              <span>327 Lake Parker Street, MerryLand, UK</span>
            </div>
            <div>
              <span><i class = "fas fa-phone"></i></span>
              <span>232-465-000</span>
            </div>
            <div>
              <span><i class = "fas fa-paper-plane"></i></span>
              <span>info@i-school.com</span>
            </div>
          </div>
      
   <div>
     <ul class = "footer-social-links">
       <li class = "flex">
          <a href = "#"><i class = "fab fa-facebook-f"></i></a>
         </li>
          <li class = "flex">
            <a href = "#"><i class = "fab fa-twitter"></i></a>
          </li>
          <li class = "flex">
            <a href = "#"><i class = "fab fa-instagram"></i></a>
          </li>
          <li class = "flex">
            <a href = "#"><i class = "fab fa-google"></i></a>
          </li>
      </ul>
    </div>
  </div>
  <small class="text-white"> Copyright &copy; 2021 || Designed by <a href="#login" data-bs-toggle="modal" data-bs-target="#adminlogin">Siddhi Parab</a> || All Rights Reserved.
  
</small>
</footer>
<!--End footer-->

<!--start Admin Login modaL-->

<!-- Modal -->
<div class="modal fade" id="adminlogin" tabindex="-1" aria-labelledby="adminlogin" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="adminloginLabel">Admin Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form id="adminloginform">
        <div class="form-group">
          <i class="fas fa-envelope"></i><label for="adminlogemail" class="pl-2 font-weight bold">Email </label>
          <input type="email" class="form-control"  placeholder="Email" name="adminlogemail" id="adminlogemail">
          
        </div>
        <div class="form-group">
        <i class="fas fa-key "></i><label for="adminlogpass" class="pl-2 font-weight bold"> Password</label>
          <input type="password" class="form-control" placeholder="Password" name="adminlogpass" id="adminlogpass">
        </div>
      </form>
        
      </div>
      
      <div class="modal-footer">
      <small id= "statuslogmsg1"></small>
        <button type="submit" class="btn btn-danger" id="adminloginbtn" onclick="checkAdminLogin()">Login</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        
      </div>
    </div>
  </div>
</div>
<!--end Admin Login modal-->
<!-- Jquery and bootstrap javascript-->

  
  

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="js/all.min.js"></script>
        <script type="text/javascript" src="js/ajaxrequest.js"></script>
        <script type="text/javascript" src="js/adminajaxrequest.js"></script>
    </body>
</html>