<?php
					
					$servername="localhost";
					$username="root";
					$password="";
					$dbname="etravel";

					$conn= new mysqli($servername,$username,$password, $dbname);

					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					} 
					echo "";

					$logname = $_POST["uname"];
					$logpass = md5($_POST["password"]);



					$sql = "SELECT * FROM `users` WHERE Email='".$logname."' and Password='".$logpass."'";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) 
						{
							
							$id = $row['id'];
							
							if($id!='')
							{
								header("Location: http://localhost/Web Assignment/Province design/index.html", true, 301);
							}
						}
					} else {
						echo '<script language="javascript">';
						echo 'alert("Username Or Password not valid");';
						echo 'window.location.href="loginsignup.php";';
						echo '</script>';
					}
					$conn->close();
				?>