<!DOCTYPE html>  
 <html>  
      <head>  
        <title></title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
        <div class="container" style="width:500px;">              
                <div class="table-responsive"> 
                     <table class="table table-bordered">  
                          <tr>  
                               <th>Name</th> 
                               <th>E-mail</th>  
                               <th>User name</th> 
                               <th>Password</th>  
                               <th>Confirm Password</th>  
                               <th>Gender</th> 
                               <th>Date of birth</th>   
                          </tr>  
                          <?php   
                          $data = file_get_contents("connection.php");  
                        

                          if ($_SERVER['REQUEST_METHOD'] === "POST") {
                            function test($data) {
                                $data = trim($data);
                                $data = stripslashes($data);
                                $data = htmlspecialchars($data);
                                return $data;
                            }
                            
                            $name = test($_POST['name']);
                            $email = test($_POST['email']);
                            $username = test($_POST['uname']);
                            $password = test($_POST['password']);
                            $confirmpassword = test(@$_POST['confirmpassword']);
                            $gender = test(@$_POST['gender']);
                            $dateofbirth= test($_POST['dob']);
                        
                            if(empty($username) or empty($password)) 
                              { echo "Fields are empty";}     
                              else 
                               {
                                define("FILENAME", "connection.php");
                                $handle = fopen(FILENAME, "r");
                                $fr = fread($handle, filesize(FILENAME)+1);
                                $arr1 = json_decode($fr);
                                $fc = fclose($handle);
                                                $handle = fopen(FILENAME, "w");
                                if ($arr1 === NULL) {
                                    $id = 1;
                                    $data = array('Id' => $id, 'Name' => $name, 'Email' => $email,'UserName' => $username,'Password' => $password,'ConfirmPassword' => $confirmpassword,'Gender' => $gender,'DateOfBirth' => $dateofbirth);
                                    $data = array($data);
                                    $data = json_encode($data);
                                    $fw = fwrite($handle, $data);
                                }
                                else {
                                    $id = $arr1[count($arr1) - 1]->Id;
                                    $data = array('Id' => $id+1, 'Name' => $name, 'Email' => $email,'UserName' => $username,'Password' => $password,'ConfirmPassword' => $confirmpassword,'Gender' => $gender,'DateOfBirth' => $dateofbirth);
                                    $arr1[] = $data;
                                    $data = json_encode($arr1);
                                    $fw = fwrite($handle, $data);
                                }
                                $fc = fclose($handle);
                        
                                if ($fw) {
                                    echo "<h3>Data Insertion Successful</h3>";
                                }
                            }
                               }
                            
                          foreach($data as $row)  
                          {  
                                   echo '<tr>
                               <td>'.$row["Name"].'</td>
                               <td>'.$row["Email"].'</td>
                               <td>'.$row["UserName"].'</td>
                               <td>'.$row["Password"].'</td>
                               <td>'.$row["ConfirmPassword"].'</td>
                               <td>'.$row["Gender"].'</td>
                               <td>'.$row["DateOfBirth"].'</td>
                               </tr>'; 
                                
                          }  
                          ?>  
                     </table>  
                   </div>
                 </div>
      </body>  
 </html>  