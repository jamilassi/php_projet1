<?php

	function val($var) 
			{
				
					$html=' value="%s" ';
			
					if (isset($var)) 
								{
										printf($html,$var);
								}
			}
	
	function get_contact($ID) 
			{
		
					global $mysqli;
					
					$query = "SELECT * FROM clients WHERE client_id=%d";
					$query =  sprintf($query, $ID);
					$result =  $mysqli->query($query);
					
					if ( $result->num_rows==1) 
								{
										return $result->fetch_assoc();
								}	
								else 
								{
										return false;	
								}	
			}
		
	function add_contact() 
			{	
					global $mysqli;
					
					global $firstname;
					global $lastname;
					global $email;	
					
					$query = "INSERT INTO clients (firstname,lastname,email) VALUES ('%s','%s','%s')";
					$query = sprintf($query, $firstname, $lastname, $email);
					$mysqli->query($query);
					
					header('Location: index.php');
			}

	function update_contact() 
			{	
					global $ID;
					
					global $firstname;
					global $lastname;
					global $email;	
					global $mysqli;
					
					$query = "UPDATE clients SET firstname='%s',lastname='%s',email='%s' WHERE client_id=%d";
					$query = sprintf($query, $firstname, $lastname, $email, $ID);
					$mysqli->query($query);
					$location = 'Location: about.php?id=%d';
					header(sprintf($location,$ID));
			}
