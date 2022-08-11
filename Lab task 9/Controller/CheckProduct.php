<?php


if ($_SERVER['REQUEST_METHOD'] === "POST") {
    function test($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    $id = test($_POST['id']);
    $name = test($_POST['name']);
    $category= test($_POST['category']);
    $date = test($_POST['date']);
    $model = test(@$_POST['model']);
    

    if(empty($id) or empty($name) or  empty($category) or empty($date) or empty($model)) 
      { echo "Fields are empty";}     
      else 
       {
        define("FILENAME", "Productselldata.json");
        $handle = fopen(FILENAME, "r");
        $fr = fread($handle, filesize(FILENAME)+1);
        $arr1 = json_decode($fr);
        $fc = fclose($handle);
                        $handle = fopen(FILENAME, "w");
        if ($arr1 === NULL) {
            $id = 1;
            $data = array('Id' => $id, 'Name' => $name, 'category' => $category,'date' => $date,'model' => $model);
            $data = array($data);
            $data = json_encode($data);
            $fw = fwrite($handle, $data);
        }
        else {
            $id = $arr1[count($arr1) - 1]->Id;
            $data = array('Id' => $id+1, 'Name' => $name, 'category' => $category,'date' => $date,'model' => $model);
            $arr1[] = $data;
            $data = json_encode($arr1);
            $fw = fwrite($handle, $data);
        }
        $fc = fclose($handle);

        if ($fw) {
            echo "<h3>Product Insertion Successful</h3>";
        }
    }
       }
    

?>