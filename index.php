<html>
	<head>
		<link href='https://fonts.googleapis.com/css?family=Eagle Lake' rel='stylesheet'>
		<link rel="stylesheet" type="text/css" href="login.css" />
	</head>
	<body>
		
		
		
			
				<form action="dblogin.php" method="post" enctype="multipart/form-data">
					<center>
						<div class="front">
				<span>Roll No</span>
				<br><input type="number" name="roll_no" required>
				<br>
				<span>Email</span>
				<br><input type="email" name="email" required >
				
					<br>
					<br>
					
									<button id="but2"  
									onmouseover="on2()" onclick="on()" 	>	Select Cover Photo</button>
							<br>
							<br>
						<input type="file" name="image" required="required"/>
		<input type="submit" name="submit" value="upload"/>
							
					
					</div>
					
						
					<div id="cardimg">
						<img id="img" src="user.png">
						<input type="file" name="img1" id="inp" required="required"/>
						<button value="save" type="submit" id="but3">Save Image</button>
						<br><br>
						<br>
					<button><img id="img2" src="back.png" onclick="im()"></button>	
				</div>
						</center>
					</form>
				
				
		
	<script>
		function im()
		{
			alert("hye");
			 document.getElementById("cardimg").style.display="none";
			
		}
	
		function on2()
		{
			document.getElementsByClassName("front").style.display="none";
		}
		
		function on()
		{ 	 document.getElementById("cardimg").style.display="block";
				
		 		 
		
		
				 
				 
			
		}
		
		
		function abc()
		{document.getElementById("but").style.boxShadow="10px 10px black";
		 document.getElementById("but").style.marginTop="2px";
		
		 
		 
		}
		function cde()
		{document.getElementById("but").style.marginTop="-2px";
		 
		}
		</script></body></html>