<html>
    <head>
    
    </head>
    <style>
        body {background-color: white}
        h1 {text-align: center;
            font-family: 'Courier New', Courier, monospace
        }
        p {text-align: left;
           font-family: 'Courier New', Courier, monospace
        }
        li {text-align: left;
            font-family: 'Courier New', Courier, monospace
        }
        img {display: block;
             margin-left: auto;
             margin-right: auto;
             border:1px solid black
        }  
    </style>
    <body>
    <h1>SEARCH CURRENT TABLE</h1>
        <form method="post" action="view_single.php">
       <p>
        Customer Number:                <input type="text" name="custnumb"><br>
    </p>
        <input type="submit" >
        </form>
        <h1>INPUT DATA TO CUSTOMER TABLE</h1>
        <form method="post" action="view.php">
       <p>
        Customer Number:                <input type="varchar" name="custnumb"><br>
        Customer Name:                  <input type="varchar" name="custname"><br>
        Sales Representative Number:    <input type="varchar" name="slsrnumb"><br>
        Customer Address:               <input type="varchar" name="custaddr"><br>
        Customer Balance:               <input type="varchar" name="balance"><br>
        Customer Credit Limit:          <input type="varchar" name="credlim"><br>
        <p>
        <input type="submit" name="submit" >
        </form>
        <h1>DELETE DATA</h1>
        <form method="post" action="delete.php">
       <p>
        Customer Number:                <input type="text" name="custnumb"><br>
    </p>
        <input type="submit" >
        </form>
    <?php
        $newform = "inputform.php";
        $viewcust = "viewall.php";
        echo '<a href="' . $newform . '" class="button">Add Another Customer</a>'.'<br>';
        echo '<a href="' . $viewcust . '" class="button">View Customer Table</a>'.'<br>';
    ?>
    </body>
</html>