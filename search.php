<?php
 $connect = mysqli_connect("localhost", "root", "", "easy_shopping");
 if(isset($_POST["query"]))
 {
      $output = '';
      $query = "SELECT * FROM product_details WHERE product_name LIKE '%".$_POST["query"]."%'";
      $result = mysqli_query($connect, $query);
      $output = '<ul class="list-unstyled">';
      if(mysqli_num_rows($result) > 0)
      {
           while($row = mysqli_fetch_array($result))
           {
                $output .= '<li id="dropdown">'.$row["product_name"].'</li>';
           }
      }
      else
      {
           $output .= '<li id="dropdown">Product Not Found</li>';
      }
      $output .= '</ul>';
      echo $output;
 }
 ?>
