<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    function test($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
   
    $email =test($_POST['email']);
    if(empty($email)) 
      { echo "Fields are empty";}     
      else 
       {

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format";
          }
          
          else{
            $password=" ";
            define("FILENAME", "data.json");
                            $handle = fopen(FILENAME, "r");
                            $fr = fread($handle, filesize(FILENAME)+1);
                            $arr = json_decode($fr);
                            $fc = fclose($handle);
            
                          
                            if ($arr === NULL) {
                                echo "No record(s) found";
                            }
                            else
                            {
                                for ($i = 0; $i < count($arr); $i++) {
                                    if ($email == $arr[$i]->Email) {
                                        $password=$arr[$i]->Password;							
                                        $flag=1;
                                        break;
                                    }
                                    else
                                    {
                                        $flag=0;
                                    }
                                }
                
                                if ($flag==1) {
                                    echo "<h3>Password:</h3>".$password;
                                }
                                else 
                                {
                                    echo "<h3>Invalid User</h3>";
                                }
                            }
            
                            
                        }
          }
        }
    

?>