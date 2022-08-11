<!DOCTYPE html>  
 <html>  
      <head>  
        <title>Product Sell</title>  
           
      </head>  
      <body>  
       
                    
                          
                          <?php 

                          define("FILENAME", "Productselldata.json");
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
                             
                                echo   $arr[$i]->Id."<br>";
                                echo   $arr[$i]->Name."<br>";
                                echo   $arr[$i]->category."<br>";
                                echo   $arr[$i]->date."<br>";
                                echo   $arr[$i]->model."<br>";
                          }
                        }
                      































                        //   $data = file_get_contents("Productselldata.json");  
                        //   $data = json_decode($data, true);  

                        //   if ($_SERVER['REQUEST_METHOD'] === "POST") {
                        //     function test($data) {
                        //         $data = trim($data);
                        //         $data = stripslashes($data);
                        //         $data = htmlspecialchars($data);
                        //         return $data;
                        //     }
                            
                        //     $name = test($_POST['name']);
                        //     $mobilephone = test($_POST['mobilephone']);
                        //     $computer = test($_POST['computer']);
                        //     $ladiseiteam = test($_POST['ladiseiteam']);
                        //     $genseiteam = test(@$_POST['gensiteam']);
                        //     $makeupproduct= test($_POST['makeupproduct']);
                        
                        //     if(empty($username) or empty($password)) 
                        //       { echo "Fields are empty";}     
                        //       else 
                        //        {
                        //         define("FILENAME", "Productselldata.json");
                        //         $handle = fopen(FILENAME, "r");
                        //         $fr = fread($handle, filesize(FILENAME)+1);
                        //         $arr1 = json_decode($fr);
                        //         $fc = fclose($handle);
                        //                         $handle = fopen(FILENAME, "w");
                        //         if ($arr1 === NULL) {
                        //             $id = 1;
                        //             $data = array('Id' => $id, 'Laptop' => $Laptop, 'Mobile Phone' => $MobilePhone,'Computer' => $Computer,'Ladise item' => $Ladiseitem,'Gense iteam' => $Genseiteam,'Makeup Products' => $MakeupProducts);
                        //             $data = array($data);
                        //             $data = json_encode($data);
                        //             $fw = fwrite($handle, $data);
                        //         }
                        //         else {
                        //             $id = $arr1[count($arr1) - 1]->Id;
                        //             $data = array('Id' => $id+1, 'Laptop' => $Laptop, 'Mobile Phone' => $MobilePhone,'Computer' => $Computer,'Ladise item' => $Ladiseitem,'Gense iteam' => $Genseiteam,'Makeup Products' => $MakeupProducts);
                        //             $arr1[] = $data;
                        //             $data = json_encode($arr1);
                        //             $fw = fwrite($handle, $data);
                        //         }
                        //         $fc = fclose($handle);
                        
                        //         if ($fw) {
                        //             echo "<h3>Data Insertion Successful</h3>";
                        //         }
                        //     }
                        //        }
                            
                        // //   foreach($data as $row)  
                        // //   {  
                        // //            echo '<tr>
                        // //        <td>'.$row["Laptop"].'</td>
                        // //        <td>'.$row["MobilePhone"].'</td>
                        // //        <td>'.$row["Computer"].'</td>
                        // //        <td>'.$row["Ladiseitem"].'</td>
                        // //        <td>'.$row["Genseiteam"].'</td>
                        // //        <td>'.$row["MakeupProducts"].'</td>
                        // //        </tr>'; 
                                
                        // //   }  
                          ?>  
                     </table>  
                   </div>
                 </div>
      </body>  
 </html>  