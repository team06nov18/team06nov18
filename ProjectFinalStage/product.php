<!DOCTYPE html>
<?php
//must appear BEFORE the <html> tag
session_start();
include_once('confige.php');
?>
<html>
<head>
	<title></title>
<style type="text/css">
	
	.product{

		width: 90%;
		margin:3% 5%;
		display: inline-block;
		position: initial;
		border:1px solid black;
		height: auto;
		border-radius: 15px;
	}

h1 {
    font-size: 3em;
    color: #262c38;
    letter-spacing: 1px;
    position: relative;
    font-weight: 600;
    text-align: center;
}
h1 span {
    color: #545151;
    font-weight: 200;
}
h1:after {
    border-top: 2px solid blue;
    display: block;
    width: 300px;
    content: "";
    margin: 8px auto 0;
}
</style>
</head>
<?php include('header.php'); ?>
<body onLoad="run_first()">
<div class="product">
	
	<?php
		//make the database connection
		$conn  = db_connect();
		//create and execute a query
		$sql = "SELECT * FROM products;";
		$result = $conn -> query($sql);
		print "<h1>Products</h1>\n";
		print "<div class=\"table-responsive mt-3\">\n";
		print "<table class=\"table table-striped\">\n";
            print "<thead>\n";
				//get field names
				print "<tr>\n";
					while ($field = $result -> fetch_field())
					{
  						print "<th>" . strtoupper($field->name) . "</th>\n";
					} // end while
      			print "</tr>\n";
    		print "</thead>\n";
    		print "<tbody>\n";
                //get row data as an associative array
                while ($row = $result -> fetch_assoc()){
                    //look at each field
                    $id = $row["id"];
                    $type = $row["type"];
                    $manufacturer = $row["manufacturer"];
                    $description = $row["description"];
                    $price = number_format($row["price"],2);
                    $image = $row["image"];

      			    print "<tr>\n";
                    //output
                    print "<td class=\"align-middle\">$id</td>\n";
                    if($type)
                        print "<td class=\"align-middle\">$type</td>\n";
                    else
                        print "<td class=\"align-middle\">&nbsp;</td>\n";;

                    if($manufacturer)
                        print "<td class=\"align-middle\">$manufacturer</td>\n";
                    else
                        print "<td class=\"align-middle\">&nbsp;</td>\n";

                    if($description)
                        print "<td class=\"align-middle\">$description</td>\n";
                    else
                        print "<td class=\"align-middle\">&nbsp;</td>\n";

                    if($price)
                        print "<td class=\"align-middle\">$price</td>\n";
                    else
                        print "<td class=\"align-middle\">&nbsp;</td>\n";

                    if (@file_exists($image))
                    {
                        print "<td class=\"align-middle\"><img src = $image width=60 height=60></td>\n";
                    }
                    else
                    {
                        print "<td class=\"align-middle\">&nbsp;</td>\n";;
                    }

      			    print "</tr>\n";
                }// end while

    		print "</tbody>\n";
        print "</table>\n";
        print "</div>\n";
        $conn -> close();
	?>	
    
</div>

</body>
</html>
<?php include('footer.php'); ?>
