<center>
    <div id="templatemo_footer">
    	<p>
			 <?php
				if($_SESSION["logtype"] =="Doctor")
				{
				?>
                 <a href="dochome.php"  >Doctor's Home</a>
              	<?php
				}
				else if($_SESSION["logtype"] =="Administrator")
				{
				?>
                 <a href="adminhome.php" >Admin's Home</a>
                  	<?php
				}
				else if($_SESSION["logtype"] =="Patient")
				{
				?>
                <a href="patienthome.php"  >Patient's Home</a>
              	<?php
				}
				else
				{
				?>
               <a href="index.php"  >Home</a>
                <?php
				}
				?> | <a href="products.php">Products</a> | <a href="about.html">About</a>| <a href="contact.php">Contact</a>| <a href="doclogin.php">
            Doctor/Admin Login</a>
		</p>

    	Copyright © Kamath opticals| Mangalore
</div>
</center>
</body>
</html>