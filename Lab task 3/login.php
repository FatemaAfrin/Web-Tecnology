<!DOCTYPE html>  
 <html>  
      <body>
      <div class="container" style="width:500px;">              
                <div class="table-responsive"> 
                     <table class="table table-bordered">  
                          <tr>  
                               
                               <th>User name</th>   
                               <th>Password</th>   
                                 
                          </tr>  
                          <?php   
                         $name= $_POST['uname'];   
                        echo $name;
                        if(empty($name)or empty($password))
                       {
                            echo "User name empty";
                        } 
                         else{
                         
                          // Given password
                   $password = 'user-input-password';

                 // Validate password strength
                  $uppercase = preg_match('@[A-Z]@', $password);
                   $lowercase = preg_match('@[a-z]@', $password);
                   $number    = preg_match('@[0-9]@', $password);
                   $specialChars = preg_match('@[^\w]@', $password);

                   if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
                  echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
                 }else{
                  echo 'Strong password.';
                 } 
                  }     
                  ?>      
                  </body>
    </html>
      
                    
                      
                   

        
  