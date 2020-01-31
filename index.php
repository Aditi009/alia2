<html>
	<head>
		<link href='https://fonts.googleapis.com/css?family=Eagle Lake' rel='stylesheet'>
		<link rel="stylesheet" type="text/css" href="login.css" />
		<link href="https://fontawesome.com/icons/address-book?style=solid" rel="stylesheet">
	</head>
	<body><center>
		<div id="part1">
		<header id="head">
			<div id="list"><ul>
			<li class="active"><a href="#">home</a></li>
			<li><a href="#" onclick="abc2()">sign-in</a></li>
			<li ><a href="#"  onclick="abc2()" ondblclick="abc3()" >login</a></li>
				<li ><a href="#">client</a></li>
				<li ><a href="#">Service</a></li></ul>
				</div>
		</header>
		

		
			<div class="front">
				<form action="dblogin.php" method="post" enctype="multipart/form-data">
				
						
				<span>Roll No</span>
				<br><input type="number" name="roll_no" required>
					<br>
				<br>
				<span>Email</span>
				<br><input type="email" name="email" required >
				
					<br>
					<br>
					<br>
									<button id="but2"  
									onmouseover="on2()" onclick="on()" 	>	Select Cover Photo</button>
							<br>
							<br>
					
							
		<input id="btn2" type="submit" name="submit" value="upload"/>
							
				
							
				
					
						
						
		
					<div id="cardimg">
						<img id="img" src="user.png">
						<input type="file" name="img1" id="inp" required="required"/>
						<button value="save" type="submit" id="but3">Save Image</button>
						<br><br>
						<br>
					<button><img id="img2" src="back.png" onclick="im()"></button>	
				</div>
					</form>
				
		</div>
		
		
		</div>
		<div id="part2">
		
			<div id="main_div"></div>
			
			
			
			
			<div id="main_div2"></div>
			
	</div>
		
		
		
		
		
		
		<footer id="foot">
			
		
			   <div class="footer-column">
                <ul>
                    <li><b>LEARN</b></li>
                    <li><a href="https://www.geeksforgeeks.org/fundamentals-of-algorithms/">Algorithms</a></li>
                    <li><a href="https://www.geeksforgeeks.org/data-structures/">Data Structures</a></li>
                    <li><a href="https://www.geeksforgeeks.org/category/program-output/">Languages</a></li>
                    <li><a href="https://www.geeksforgeeks.org/articles-on-computer-science-subjects-gq/">CS Subjects</a></li>
                    <li><a href="https://www.youtube.com/geeksforgeeksvideos/">Video Tutorials</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <ul>
                    <li><b>PRACTICE</b></li>
                    <li><a href="https://practice.geeksforgeeks.org/courses/">Courses</a></li>
                    <li><a href="https://practice.geeksforgeeks.org/company-tags/">Company-wise</a></li>
                    <li><a href="https://practice.geeksforgeeks.org/topic-tags/">Topic-wise</a></li>
                    <li><a href="https://practice.geeksforgeeks.org/faq.php">How to begin?</a></li>
                </ul>
            </div>
		
			

			

            <div class="footer-column">
                <ul><i class="fas fa-id-card-alt"></i>
					<i class="fas fa-address-book"></i>
                    <li><b>CONTRIBUTE</b>
                    <li><a href="https://www.geeksforgeeks.org/contribute/">Write an Article</a></li>
                    <li><a href="https://www.geeksforgeeks.org/write-interview-experience/">Write Interview Experience</a></li>
                    <li><a href="https://www.geeksforgeeks.org/internship/">Internships</a></li>
                    <li><a href="https://www.geeksforgeeks.org/how-to-contribute-videos-to-geeksforgeeks/">Videos</a></li>
                </ul>
            </div>

       
			
			
		</footer>
			

			
	<script>
		function im()
		{
			alert("hye");
			 document.getElementById("cardimg").style.display="none";
			
		}
	
		function on2()
		{
			document.getElementsByClassName("front").style.display="none";
			 document.getElementById("cardimg").style.display="block";
		}
		
		function on()
		{ 	 document.getElementById("cardimg").style.display="block";
				
		 		 
		
		
				 
				 
			
		}
		function abc2()
		{
			
			document.querySelector(".front").style.display="block";
		}
			function abc3()
		{
			
			document.querySelector(".front").style.display="none";
		}
		
		
		function abc()
		{document.getElementById("but").style.boxShadow="10px 10px black";
		 document.getElementById("but").style.marginTop="2px";
		
		 
		 
		}
		function cde()
		{document.getElementById("but").style.marginTop="-2px";
		 
		}
		</script>
	</center></body></html>