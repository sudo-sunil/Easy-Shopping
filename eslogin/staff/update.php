<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Material Design Lite</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-light_blue.min.css">
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">

      <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Home</span>
          <div class="mdl-layout-spacer"></div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
              <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" id="search">
              <label class="mdl-textfield__label" for="search">Enter your query...</label>
            </div>
          </div>
          <a class="mdl-navigation__link" href="stafflogout.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">account_circle</i>Logout</a>
          <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
            <i class="material-icons">more_vert</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
            <li class="mdl-menu__item">About</li>
            <li class="mdl-menu__item">Contact</li>
            <li class="mdl-menu__item">Legal information</li>
          </ul>
        </div>
      </header>
      <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
        <header class="demo-drawer-header">
          <img src="images/user.jpg" class="demo-avatar">
          <div class="demo-avatar-dropdown">
            <span>hello@example.com</span>
            <div class="mdl-layout-spacer"></div>
            <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
              <i class="material-icons" role="presentation">arrow_drop_down</i>
              <span class="visuallyhidden">Accounts</span>
            </button>
            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
              <li class="mdl-menu__item">hello@example.com</li>
              <li class="mdl-menu__item">info@example.com</li>
              <li class="mdl-menu__item"><i class="material-icons">add</i>Add another account...</li>
            </ul>
          </div>
        </header>

        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
 <a class="mdl-navigation__link" href="staff.html" ><i class="material-icons">home</i></i>&nbsp Home</a>

            <a class="mdl-navigation__link" href="addproducts.html" ><i class="material-icons">add_circle</i></i>&nbsp Add  Product</a>


                <a class="mdl-navigation__link" href="update.html"><i class="material-icons">unarchive</i></i> &nbsp Update Product details</a>




                <a class="mdl-navigation__link" href="scan.html"><i ><svg style="width:24px;height:24px" viewBox="0 0 24 24">
                  <path fill="#000000" d="M4,4H10V10H4V4M20,4V10H14V4H20M14,15H16V13H14V11H16V13H18V11H20V13H18V15H20V18H18V20H16V18H13V20H11V16H14V15M16,15V18H18V15H16M4,20V14H10V20H4M6,6V8H8V6H6M16,6V8H18V6H16M6,16V18H8V16H6M4,11H6V13H4V11M9,11H13V15H11V13H9V11M11,6H13V10H11V6M2,2V6H0V2A2,2 0 0,1 2,0H6V2H2M22,0A2,2 0 0,1 24,2V6H22V2H18V0H22M2,18V22H6V24H2A2,2 0 0,1 0,22V18H2M22,22V18H24V22A2,2 0 0,1 22,24H18V22H22Z" />
              </svg></i>&nbsp Scan to bill</a>
        </nav>
      </div>








   <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-grid demo-content">





          <div class="demo-cards mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-grid mdl-grid--no-spacing">


            <!-- Textfield with Floating Label -->

            <?php

            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $db = 'easy_shopping';
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db );
            if(! $conn )
            {
              die('Could not connect: ' . mysqli_error());
            }

            $query = "SELECT * FROM product_details";
            $result = $conn->query($query);
            ?>



            <table  class="mdl-data-table mdl-js-data-table mdl-data-table mdl-shadow--2dp">
              <thead>
                <tr>
                  <th class="mdl-data-table__cell--non-numeric">Upc</th>
                  <th>Product Name</th>
                  <th>Stock</th>
                  <th>Price</th>
                  <th>Update</th>
                  <th>Delete</th>



            <?php

            while($row = mysqli_fetch_array($result))
                        {

            $upc = $row['upc'];
            $product_name = $row['product_name'];
            $stock = $row['stock'];
            $price = $row['price'];

            ?>


            <form method="post" action="<?php $_PHP_SELF ?>">


            </tr>
              </thead>
                <tbody>
            <tr class="mdl-data-table__cell--non-numeric>
            <td class="mdl-data-table__cell--non-numeric" ></td>
            <td><input name="upc" type="text" value="<?=$upc?>"></td>


            <td class="mdl-data-table__cell--non-numeric"></td>
            <td><input name="product_name" type="text" value="<?=$product_name?>"></td>

            <td class="mdl-data-table__cell--non-numeric"></td>
            <td><input name="stock" type="text" value="<?=$stock?>"></td>

            <td class="mdl-data-table__cell--non-numeric" ></td>
            <td><input name="price" type="text" value="<?=$price?>"></td>


            <td>
            <input class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" name="update" type="submit" id="update" value="Update">
            </td>


            <td>
            <input class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"name="delete" type="submit" id="delete" value="delete">
            </td>
            </tr>
</tbody>
            </form>
            <?php } ?>


            </table>




            <?php

            if(isset($_POST['update']))
            {


            $upc = $_POST['upc'];
            $product_name = $_POST['product_name'];
            $stock = $_POST['stock'];
            $price = $_POST['price'];


            $sql = "UPDATE product_details SET upc = '".$upc."',
            								product_name = '". $product_name."',
            							   stock = '".$stock."',
            							    price = '".$price."'
            		   WHERE product_details.upc = '".$upc."'";

            $retval = $conn->query($sql);
            /////$retval = mysqli_query(  $conn ,$sql);


            if(! $retval )
            {
              die('Could not update data: ' . mysqli_error());
            }
            echo "Updated data successfully\n";
            header("refresh: 3;");

            }


            ?>


            <?php

            if(isset($_POST['delete']))
            {


            $upc = $_POST['upc'];



            $sql = "DELETE FROM `product_details` WHERE `product_details`.`upc` = $upc";

            $retval = $conn->query($sql);
            /////$retval = mysqli_query(  $conn ,$sql);


            if(! $retval )
            {
              die('Could not update data: ' . mysqli_error());
            }
            echo "Updated data successfully\n";
          

            }


            ?>




            </div>

          </div>
        </div>

      </main>








    </div>


    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </body>
</html>
