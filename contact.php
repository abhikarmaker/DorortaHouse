<?php
include('./includes/header.php');
?>
<!--=====================
          Content
======================-->

		<div class="container">
		<div class="row">
		  <div class="grid_12">
          <div class="map">
            <div class="row">
              <div class="grid_8">
                <figure class="">
				<div class="text2 color3"><h3 style="font-family:Aparajita">Contact Form</h3></div>
        <form action="./includes/contact.php" id="myForm" class="send" data-toggle="validator" role="form" method="post">                            

        <label for="yourname" class="control-label">
		Name:
		<input type="text" class="form-control" size="80" id="yourname" name="yourname" placeholder="Name" required autofocus>
        </label>
		</br> 
		
		<label for="subject" class="control-label">
		Subject:
		<input type="text" class="form-control" size="80" id="subject" name="subject" placeholder="Subject" required>
        </label> </br>
		
		<label for="email" class="control-label">
		Email:
		<input type="email" class="form-control" size="80" id="email" name="email" placeholder="Email" data-error="Bruh, that email address is invalid" required>
        </label> </br>


         <label for="phone" class="control-label" for="phone">
		 Mobile:
		 <input class="form-control" size="80" id="phone" name="phone" placeholder="9XXXXXXXXX" type="text" required>
         </label> </br>

        <label for="comments" class="control-label">
		Your Comments:
		<textarea class="form-control" rows="4" cols="80" resize="none" id="comments" name="comments" required> </textarea>
        </label>
		
        <div>
        <div class="clear"></div>
		<button class="btn" style="background-color:#fa6a4d"type="submit" name='send' onlcick="myFunction()">SEND</button>
      </div>
        </form>   

				
				
                </figure>
              </div>
              <div class="grid_4">
			  <div class="container">
				<div class="grid_4">
                <address class="address1">
                <div class="text2 color3" style="margin-top:80px"> Address:</div>
                FE-163, Sector - III, Salt Lake, <br>Kolkata - 700106, West bengal.
                <div class="clear"></div>
                <div class="text2 color3">Phones:</div>
                +91 9836177779
                <div class="clear"></div>
                <div class="text2 color3">Email:</div>
                <a href="#">reservations@dorota.co.in</a>
                </address>
				</br>
				</br>
				</br>
              </div>
			  </div>
			  </div>
            </div>
          </div>
		   </div>
            </div>
          </div>
<!--==============================
              footer
=================================-->
<?php
include('./includes/footer.php');
?>
</div>
</body>
</html>

