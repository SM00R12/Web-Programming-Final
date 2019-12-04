<!-- 
Web Programming Final Project

Stephen Moore
Riane Hood
Lois Odion
-->

<!DOCTYPE html>
<html>
<head>
	<title>Top Picks</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="css/MStyles.css">
		<link href="https://fonts.googleapis.com/css?family=Cinzel|Lato&display=swap" rel="stylesheet"> 
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Shrikhand&display=swap" rel="stylesheet">
		<script src ="js/final.js"async></script>
		<script src ="js/sign.js"async></script>
		</head>
	<body class=".w3-theme-l5">
		<div class="w3-card-4">
			<div class="w3-container w3-theme w3-card w3-center">
				
  						<img src="" alt="" class="w3-image" style="max-width:600px">
  				            
            <div class= "topblock">	
			<h5> Call us at: 770-999-4455    |	<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="w3-button w3-mobile w3-theme">Log In</button>    |   Free Shipping over $49</h5>
			
			<h1>Bubblegum Bookshop</h1>
		</div>
			</div>

      <!-- NAVIGATION BAR -->
 <div class="nav w3-bar w3-card-4 w3-theme-d4">				
				<a href="HomePage.html" class="w3-bar-item w3-button w3-mobile w3-theme" style="color:black; width:15%">Home</a>
				<a target="_blank" href="top.html" class="w3-bar-item w3-button w3-mobile w3-theme" style="width:15%; ">Top Picks</a>
				<a target="_blank" href="holidaybooks.html" class="w3-bar-item w3-button w3-mobile w3-theme" style="width:15%; ">Holiday Books</a>
				<div class="w3-dropdown-hover w3-theme-d4">
    				<button class="w3-button" style="color: black">Ages & Stages</button>
    					<div class="w3-dropdown-content w3-bar-block w3-card-4 w3-theme">
      						<a target="_blank" href="html/under4.html" class="w3-bar-item w3-button">Under 4 years</a>
      						<a target="_blank" href="html/4-6.html" class="w3-bar-item w3-button">4-6 years</a>
      						<a target="_blank" href="html/6-8.html" class="w3-bar-item w3-button">6-8years</a>
    					</div> 
						</div>
				</div>		
    			</div>			
        <!-- Search Bar -->       
          <input type="text" class="w3-bar-item w3-input" placeholder="Search..">
          <a href="#" class="w3-bar-item w3-button w3-theme">Go</a>
<!-- Button if we ever need one --> 
          <ul class="w3-ul w3-border-top">
          <li class="w3-theme-l5">
           
      </div>

<!-- Sign Up Functionality-->

	<div id="id01" class="modal">
	  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
	  <form class="modal-content" action="php/connect.php">
	    <div class="container">
	      <h1>Sign Up</h1>
	      <p>Please fill in this form to create an account.</p>
	      <hr>
	      <label for="email"><b>Email</b></label>
	      <input type="text" placeholder="Enter Email" name="email" required>

	      <label for="psw"><b>Password</b></label>
	      <input type="password" placeholder="Enter Password" name="psw" required>

	      <label for="psw-repeat"><b>Repeat Password</b></label>
	      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
	      
	      <label>
	        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
	      </label>

	      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

	      <div class="clearfix">
	        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
	        <button type="submit" class="signupbtn">Sign Up</button>
	      </div>
	    </div>
	  </form>
	</div>

	<!-- BOOKS LISTED -->
	
<section class = "container content-section">	
<div class = "shop-item">
<div class="row">
	  <div class= "store-item shop-item">
        <h3 class= "shop-item-title" href="html/hairlove.html">Hair Love</h3>
          <a target ="html/hairlove.html" href ="html/hairlove.html">
            <img class ="shop-item-image" src ="img/rec/hairlove.jpg" alt = "bear" href="html/hairlove.html" style="max-width: 200px;">
          </a>
		  <div class = "shop-item-details">
		  <br>
		  <span class="shop-item-price">
		  	<!-- PHP -->
		  	<?php
					$conn = mysqli_connect("localhost", "root", "", "BookStore");
					if ($conn-> connect_error) {
						die("Connection failed:". $conn-> connect_error);
					}

					$sql = "SELECT Price from Books where ID = 1111";
					$result  = $conn-> query($sql);

					if ($result-> num_rows > 0) {
						while ($row = $result-> fetch_assoc()) {
							echo "<span>". $row["Price"] ."</span>";
						}
					}
					else {
						echo "0 results";
				}
				mysqli_close($conn);
			?>
		  </span>
		  <br>
		  <button class= "btn btn-primary shop-item-button" type="button">ADD TO CART</button>
          </div>
		  <h5 href="html/hairlove.html">by Matthew A. Cherry, Vashti Harrison (Illustrator)</h5>
		  <!-- PHP -->
		  	<?php
					$conn = mysqli_connect("localhost", "root", "", "BookStore");
					if ($conn-> connect_error) {
						die("Connection failed:". $conn-> connect_error);
					}

					$sql = "SELECT Quantity from Books where ID = 1111";
					$result  = $conn-> query($sql);

					echo "<h5> Currently in stock:";

					if ($result-> num_rows > 0) {
						while ($row = $result-> fetch_assoc()) {
							echo "<h5>". $row["Quantity"] ."</h5>";
						}
						echo "</h5>";
					}
					else {
						echo "0 results";
				}

				echo "</table>";
				mysqli_close($conn);
			?>
	  </div>

      <div class = "store-item shop-item">
        <h3 class="shop-item-title">Charlotte's Web </h3>
        <a href= "html/web.html">
          <img class= "shop-item-image" src ="img/rec/web.jpg" alt ="web" style="max-width: 200px;">
        </a>
		<div class = "shop-item-details">
		<br>
		<span class= "shop-item-price">
		<!-- PHP -->
		  	<?php
					$conn = mysqli_connect("localhost", "root", "", "BookStore");
					if ($conn-> connect_error) {
						die("Connection failed:". $conn-> connect_error);
					}

					$sql = "SELECT Price from Books where ID = 1112";
					$result  = $conn-> query($sql);

					if ($result-> num_rows > 0) {
						while ($row = $result-> fetch_assoc()) {
							echo "<span>". $row["Price"] ."</span>";
						}
					}
					else {
						echo "0 results";
				}
				mysqli_close($conn);
			?>
		</span>
		<br>
		  <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
        </div>
		<h5>By E.B. White, Garth Williams(Illustrator)</h5>
		<!-- PHP -->
		  	<?php
					$conn = mysqli_connect("localhost", "root", "", "BookStore");
					if ($conn-> connect_error) {
						die("Connection failed:". $conn-> connect_error);
					}

					$sql = "SELECT Quantity from Books where ID = 1112";
					$result  = $conn-> query($sql);

					echo "<h5> Currently in stock:";

					if ($result-> num_rows > 0) {
						while ($row = $result-> fetch_assoc()) {
							echo "<h5>". $row["Quantity"] ."</h5>";
						}
						echo "</h5>";
					}
					else {
						echo "0 results";
				}

				echo "</table>";
				mysqli_close($conn);
			?>
       </div> 

      <div class ="store-item shop-item" href="html/bus.html">
        <h3 class= "shop-item-title">Junnie B. Jones and the Stupid Smelly Bus</h3>
        <a target ="html/bus.html" href ="html/bus.html">
        <img class= "shop-item-image" src ="img/rec/bus.jpg" alt ="bookofyear"  href="bearsbakery.html" style="max-width: 200px;">
       </a>
	   <div class= "shop-item-details">
	   <span class= "shop-item-price">
	   	<!-- PHP -->
		  	<?php
					$conn = mysqli_connect("localhost", "root", "", "BookStore");
					if ($conn-> connect_error) {
						die("Connection failed:". $conn-> connect_error);
					}

					$sql = "SELECT Price from Books where ID = 1113";
					$result  = $conn-> query($sql);

					if ($result-> num_rows > 0) {
						while ($row = $result-> fetch_assoc()) {
							echo "<span>". $row["Price"] ."</span>";
						}
					}
					else {
						echo "0 results";
				}
				mysqli_close($conn);
			?>

	   </span>
	   <br>
		  <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
	   </div>
	   <h5> By Barbara Park, Denise Brunkus(Illustrator)</h5>
	   <!-- PHP -->
		  	<?php
					$conn = mysqli_connect("localhost", "root", "", "BookStore");
					if ($conn-> connect_error) {
						die("Connection failed:". $conn-> connect_error);
					}

					$sql = "SELECT Quantity from Books where ID = 1113";
					$result  = $conn-> query($sql);

					echo "<h5> Currently in stock:";

					if ($result-> num_rows > 0) {
						while ($row = $result-> fetch_assoc()) {
							echo "<h5>". $row["Quantity"] ."</h5>";
						}
						echo "</h5>";
					}
					else {
						echo "0 results";
				}

				echo "</table>";
				mysqli_close($conn);
			?>
    </div>	

	<div class="row">
      <div class= "store-item shop-item" href="html/dragons.html">
        <h3 class="shop-item-title" href="ragons.html"> Dragons Love Tacos </h3>
          <a target ="html/dragons.html" href ="html/dragons.html">
            <img class="shop-item-image" src ="img/rec/dragons.jpg" alt = "" href="ragons.html" style="max-width: 200px;">
          </a>
		  <div class= "shop-item-details">
          <br>
		  <span class="shop-item-price">
		  	<!-- PHP -->
		  	<?php
					$conn = mysqli_connect("localhost", "root", "", "BookStore");
					if ($conn-> connect_error) {
						die("Connection failed:". $conn-> connect_error);
					}

					$sql = "SELECT Price from Books where ID = 1114";
					$result  = $conn-> query($sql);

					if ($result-> num_rows > 0) {
						while ($row = $result-> fetch_assoc()) {
							echo "<span>". $row["Price"] ."</span>";
						}
					}
					else {
						echo "0 results";
				}
				mysqli_close($conn);
			?>

		  </span>
		  <br>
		  <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
		  </div>
		  <h5>by Adam Rubin, Daniel Salmieri(Illustrator)</h5>
		  <!-- PHP -->
		  	<?php
					$conn = mysqli_connect("localhost", "root", "", "BookStore");
					if ($conn-> connect_error) {
						die("Connection failed:". $conn-> connect_error);
					}

					$sql = "SELECT Quantity from Books where ID = 1114";
					$result  = $conn-> query($sql);

					echo "<h5> Currently in stock:";

					if ($result-> num_rows > 0) {
						while ($row = $result-> fetch_assoc()) {
							echo "<h5>". $row["Quantity"] ."</h5>";
						}
						echo "</h5>";
					}
					else {
						echo "0 results";
				}

				echo "</table>";
				mysqli_close($conn);
			?>
      </div>
	  
      <div class = "store-item shop-item">
        <h3 class="shop-item-title"> Mystery book of the week</h3>
        <a href= "html/Mystery.html">
          <img class="shop-item-image" src ="img/rec/Mystery.jpg" alt ="Mystery" style="max-width: 200px;">
        </a>
		<div class="shop-item-details">
        <br>
		  <span class="shop-item-price">
		  <!-- PHP -->
		  	<?php
					$conn = mysqli_connect("localhost", "root", "", "BookStore");
					if ($conn-> connect_error) {
						die("Connection failed:". $conn-> connect_error);
					}

					$sql = "SELECT Price from Books where ID = 1115";
					$result  = $conn-> query($sql);

					if ($result-> num_rows > 0) {
						while ($row = $result-> fetch_assoc()) {
							echo "<span>". $row["Price"] ."</span>";
						}
					}
					else {
						echo "0 results";
				}
				mysqli_close($conn);
			?>
		  </span>
		  <br>
		<button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
        </div>
		<h5> Has fantasy themes</h5>
		<!-- PHP -->
		  	<?php
					$conn = mysqli_connect("localhost", "root", "", "BookStore");
					if ($conn-> connect_error) {
						die("Connection failed:". $conn-> connect_error);
					}

					$sql = "SELECT Quantity from Books where ID = 1115";
					$result  = $conn-> query($sql);

					echo "<h5> Currently in stock:";

					if ($result-> num_rows > 0) {
						while ($row = $result-> fetch_assoc()) {
							echo "<h5>". $row["Quantity"] ."</h5>";
						}
						echo "</h5>";
					}
					else {
						echo "0 results";
				}

				echo "</table>";
				mysqli_close($conn);
			?> 
      </div>

      <div class ="store-item shop-item" href="html/bearsbakery.html">
        <h3 class="shop-item-title">There are No Bears in this Bakery</h3>
        <a target ="html/bearsbakery.html" href ="html/bearsbakery.html">
        <img class="shop-item-image" src ="img/rec/bookofyear.jpg" alt ="bookofyear"  href="html/bearsbakery.html" style="max-width: 200px;">
      </a> 
	  <div class="shop-item-details">
		<br>
		  <span class="shop-item-price">
		  	<!-- PHP -->
		  	<?php
					$conn = mysqli_connect("localhost", "root", "", "BookStore");
					if ($conn-> connect_error) {
						die("Connection failed:". $conn-> connect_error);
					}

					$sql = "SELECT Price from Books where ID = 1116";
					$result  = $conn-> query($sql);

					if ($result-> num_rows > 0) {
						while ($row = $result-> fetch_assoc()) {
							echo "<span>". $row["Price"] ."</span>";
						}
					}
					else {
						echo "0 results";
				}
				mysqli_close($conn);
			?>

		  </span>
		  <br>
		  <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>	  
	   </div>
	   <h5> By:Julia Sarcone-Roach</h5>
	   <!-- PHP -->
		  	<?php
					$conn = mysqli_connect("localhost", "root", "", "BookStore");
					if ($conn-> connect_error) {
						die("Connection failed:". $conn-> connect_error);
					}

					$sql = "SELECT Quantity from Books where ID = 1116";
					$result  = $conn-> query($sql);

					echo "<h5> Currently in stock:";

					if ($result-> num_rows > 0) {
						while ($row = $result-> fetch_assoc()) {
							echo "<h5>". $row["Quantity"] ."</h5>";
						}
						echo "</h5>";
					}
					else {
						echo "0 results";
				}

				echo "</table>";
				mysqli_close($conn);
			?>
    </div>
</div>
	
	<div class="row">
      <div class= "store-item shop-item" href="html/goodegg.html">
        <h3 class="shop-item-title" href="html/goodegg.html"> The Good Egg</h3>
          <a href ="html/goodegg.html">
            <img class="shop-item-image" src ="img/rec/goodegg.jpg" alt = "goodegg" href="html/goodegg.html" style="max-width: 200px;">
          </a>
		  <div class= "shop-item-details">
		  <br>
		  <span class="shop-item-price">
		  	<!-- PHP -->
		  	<?php
					$conn = mysqli_connect("localhost", "root", "", "BookStore");
					if ($conn-> connect_error) {
						die("Connection failed:". $conn-> connect_error);
					}

					$sql = "SELECT Price from Books where ID = 1117";
					$result  = $conn-> query($sql);

					if ($result-> num_rows > 0) {
						while ($row = $result-> fetch_assoc()) {
							echo "<span>". $row["Price"] ."</span>";
						}
					}
					else {
						echo "0 results";
				}
				mysqli_close($conn);
			?>

		  </span>
		  <br>
		  <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
          </div>
		  <h5 href="html/goodegg.html">by Jory John, Pete Oswald (Illustrator)</h5>
		  <!-- PHP -->
		  	<?php
					$conn = mysqli_connect("localhost", "root", "", "BookStore");
					if ($conn-> connect_error) {
						die("Connection failed:". $conn-> connect_error);
					}

					$sql = "SELECT Quantity from Books where ID = 1117";
					$result  = $conn-> query($sql);

					echo "<h5> Currently in stock:";

					if ($result-> num_rows > 0) {
						while ($row = $result-> fetch_assoc()) {
							echo "<h5>". $row["Quantity"] ."</h5>";
						}
						echo "</h5>";
					}
					else {
						echo "0 results";
				}

				echo "</table>";
				mysqli_close($conn);
			?>
      </div>

      <div class = "store-item shop-itme">
        <h3 class="shop-item-title"> LLama Llama Red Pajama</h3>
        <a href= "html/redpajama.html">
          <img class= "shop-item-image" src ="img/rec/llama.jpg" alt ="llama" style="max-width: 200px;">
        </a>
		<div class= "shop-item-details">
		<br>
		  <span class="shop-item-price">
		  	<!-- PHP -->
		  	<?php
					$conn = mysqli_connect("localhost", "root", "", "BookStore");
					if ($conn-> connect_error) {
						die("Connection failed:". $conn-> connect_error);
					}

					$sql = "SELECT Price from Books where ID = 1118";
					$result  = $conn-> query($sql);

					if ($result-> num_rows > 0) {
						while ($row = $result-> fetch_assoc()) {
							echo "<span>". $row["Price"] ."</span>";
						}
					}
					else {
						echo "0 results";
				}
				mysqli_close($conn);
			?>
		  </span>
		  <br>
		  <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
       </div>
	   <h5>By Anna Dewdney</h5>
	   	<!-- PHP -->
		  	<?php
					$conn = mysqli_connect("localhost", "root", "", "BookStore");
					if ($conn-> connect_error) {
						die("Connection failed:". $conn-> connect_error);
					}

					$sql = "SELECT Quantity from Books where ID = 1118";
					$result  = $conn-> query($sql);

					echo "<h5> Currently in stock:";

					if ($result-> num_rows > 0) {
						while ($row = $result-> fetch_assoc()) {
							echo "<h5>". $row["Quantity"] ."</h5>";
						}
						echo "</h5>";
					}
					else {
						echo "0 results";
				}

				echo "</table>";
				mysqli_close($conn);
			?>
      </div>

      <div class ="store-item shop-item" href="html/ferdinand.html">
        <h3 class="shop-item-title">The Story of Ferdinand</h3>
        <a href ="html/ferdinand.html">
        <img class="shop-item-image" src ="img/rec/ferdinand.jpg" alt ="ferdinand"  href="html/ferdinand.html" style="max-width: 200px;"> 
		</a>
		<div class ="shop-item-details">
		<br>
		  <span class="shop-item-price">
		  	<!-- PHP -->
		  	<?php
					$conn = mysqli_connect("localhost", "root", "", "BookStore");
					if ($conn-> connect_error) {
						die("Connection failed:". $conn-> connect_error);
					}

					$sql = "SELECT Price from Books where ID = 1119";
					$result  = $conn-> query($sql);

					if ($result-> num_rows > 0) {
						while ($row = $result-> fetch_assoc()) {
							echo "<span>". $row["Price"] ."</span>";
						}
					}
					else {
						echo "0 results";
				}
				mysqli_close($conn);
			?>
		  </span>
		  <br>
		  <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
	  </div>
	  <h5>by Munro Leaf, Robert Lawson (Illustrator)</h5>
	  <!-- PHP -->
		  	<?php
					$conn = mysqli_connect("localhost", "root", "", "BookStore");
					if ($conn-> connect_error) {
						die("Connection failed:". $conn-> connect_error);
					}

					$sql = "SELECT Quantity from Books where ID = 1119";
					$result  = $conn-> query($sql);

					echo "<h5> Currently in stock:";

					if ($result-> num_rows > 0) {
						while ($row = $result-> fetch_assoc()) {
							echo "<h5>". $row["Quantity"] ."</h5>";
						}
						echo "</h5>";
					}
					else {
						echo "0 results";
				}

				echo "</table>";
				mysqli_close($conn);
			?>
    </div>

</div>
	<div class="row">
      <div class= "store-item shop-item" href="html/hanukkahbear.html">
        <h3 class="shop-item-title" href="html/hanukkahbear.html"> Hanukkah Bear</h3>
          <a target ="html/hanukkahbear.html" href ="html/hanukkahbear.html">
            <img class="shop-item-image" src ="img/rec/hanukkahbear.jpg" alt = "hanukkahbear" href="html/hanukkahbear.html" style="max-width: 200px;">
          </a>
		  <div class= "shop-item-details">
		  <br>
		  <span class="shop-item-price">
		  	<!-- PHP -->
		  	<?php
					$conn = mysqli_connect("localhost", "root", "", "BookStore");
					if ($conn-> connect_error) {
						die("Connection failed:". $conn-> connect_error);
					}

					$sql = "SELECT Price from Books where ID = 1120";
					$result  = $conn-> query($sql);

					if ($result-> num_rows > 0) {
						while ($row = $result-> fetch_assoc()) {
							echo "<span>". $row["Price"] ."</span>";
						}
					}
					else {
						echo "0 results";
				}
				mysqli_close($conn);
			?>
		  </span>
		  <br>
		  <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
          </div>
		  <h5 href="html/hanukkahbear.html"><h5>By Eric A. Kimmel</h5></h5>
		  <!-- PHP -->
		  	<?php
					$conn = mysqli_connect("localhost", "root", "", "BookStore");
					if ($conn-> connect_error) {
						die("Connection failed:". $conn-> connect_error);
					}

					$sql = "SELECT Quantity from Books where ID = 1120";
					$result  = $conn-> query($sql);

					echo "<h5> Currently in stock:";

					if ($result-> num_rows > 0) {
						while ($row = $result-> fetch_assoc()) {
							echo "<h5>". $row["Quantity"] ."</h5>";
						}
						echo "</h5>";
					}
					else {
						echo "0 results";
				}

				echo "</table>";
				mysqli_close($conn);
			?>
      </div>

      <div class = "store-item shop-item">
        <h3 class="shop-item-title"> How the Grinch Stole Christmas</h3>
        <a href= "html/grinch.html">
          <img class="shop-item-image" src ="img/rec/grinch.jpg" alt ="grinch" href="html/grinch.html" style="max-width: 200px;">
        </a>
		<div class="shop-item-details">
		<br>
		  <span class="shop-item-price">
		  	<!-- PHP -->
		  	<?php
					$conn = mysqli_connect("localhost", "root", "", "BookStore");
					if ($conn-> connect_error) {
						die("Connection failed:". $conn-> connect_error);
					}

					$sql = "SELECT Price from Books where ID = 1121";
					$result  = $conn-> query($sql);

					if ($result-> num_rows > 0) {
						while ($row = $result-> fetch_assoc()) {
							echo "<span>". $row["Price"] ."</span>";
						}
					}
					else {
						echo "0 results";
				}
				mysqli_close($conn);
			?>

		  </span>
		  <br>
		  <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
        </div>
		<h5>Dr.Seuss</h5>
		<!-- PHP -->
		  	<?php
					$conn = mysqli_connect("localhost", "root", "", "BookStore");
					if ($conn-> connect_error) {
						die("Connection failed:". $conn-> connect_error);
					}

					$sql = "SELECT Quantity from Books where ID = 1121";
					$result  = $conn-> query($sql);

					echo "<h5> Currently in stock:";

					if ($result-> num_rows > 0) {
						while ($row = $result-> fetch_assoc()) {
							echo "<h5>". $row["Quantity"] ."</h5>";
						}
						echo "</h5>";
					}
					else {
						echo "0 results";
				}

				echo "</table>";
				mysqli_close($conn);
			?>
      </div>

      <div class ="store-item shop-item" href="html/petechristmas.html">
        <h3 class="shop-item-title">Pete the Cat Saves Christmas</h3>
        <a target ="html/petechristmas.html" href ="html/petechristmas.html">
        <img class="shop-item-image" src ="img/rec/petechristmas.jpg" alt ="pete"  href="html/petechristmas.html" style="max-width: 200px;">
	  </a>
	  <div class="shop-item-details">
	  <br>
		  <span class="shop-item-price">
		  	<!-- PHP -->
		  	<?php
					$conn = mysqli_connect("localhost", "root", "", "BookStore");
					if ($conn-> connect_error) {
						die("Connection failed:". $conn-> connect_error);
					}

					$sql = "SELECT Price from Books where ID = 1122";
					$result  = $conn-> query($sql);

					if ($result-> num_rows > 0) {
						while ($row = $result-> fetch_assoc()) {
							echo "<span>". $row["Price"] ."</span>";
						}
					}
					else {
						echo "0 results";
				}
				mysqli_close($conn);
			?>
		  </span>
		  <br>
		  <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
	  </div>
	  <h5> By:Julia Sarcone-Roach</h5>
	  <!-- PHP -->
		  	<?php
					$conn = mysqli_connect("localhost", "root", "", "BookStore");
					if ($conn-> connect_error) {
						die("Connection failed:". $conn-> connect_error);
					}

					$sql = "SELECT Quantity from Books where ID = 1122";
					$result  = $conn-> query($sql);

					echo "<h5> Currently in stock:";

					if ($result-> num_rows > 0) {
						while ($row = $result-> fetch_assoc()) {
							echo "<h5>". $row["Quantity"] ."</h5>";
						}
						echo "</h5>";
					}
					else {
						echo "0 results";
				}

				echo "</table>";
				mysqli_close($conn);
			?>
    </div>
</div>
<div class = "row" >
<div class= "leftcolumn">
<div class="box">
<h2 class="w3-center"> CART</h2>
<div class = "cart-row">
	<span class="cart-item cart-header cart-column">Item</span>
	<span class="cart-price cart-header cart-column">Price</span>
	<span class="cart-quantity cart-header cart-column">Quantity</span>
	</div>
<div class="cart-items">
	
</div>
	<div class= "cart-total">
		<strong class= "cart-total-title">Total</strong>
		<span class="cart-total-price">$0</span>
	</div>
		<a href="Payment.html" style="text-decoration: none;"><button class= "btn btn-primary btn-purchase" type="button">CHECKOUT</button></a>
	</div>
	</div>
</div>
</div>

	

      <!-- FOOTER -->
  <div class="w3-container w3-theme w3-card w3-center">
    <ul class="w3-ul w3-hoverable">
      <li class="w3-hover-text-theme">
      <a href="">Information for Parents</a>
            </li>
        <li class="w3-hover-text-theme">
            <a href="">Quick Links</a>

     
        </li>
        <li class="w3-hover-text-theme">
            <a href="">Hours of Operation</a>
        </li>
        <li class="w3-hover-text-theme">
            <a href="">Customer Service</a>
        </li>
        <li class="w3-hover-text-theme">
            <a href="">Maps and Directions</a>
        </li>
    </ul>
  </div>
</body>
</html>