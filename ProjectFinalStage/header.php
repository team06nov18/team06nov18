<!DOCTYPE html>
<html>
<head>
	<title>Cars selling </title>
	 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="js/nav.js"></script>
    <script src="js/read_more.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">
		

	</style>
</head>
<body>
	<div class="slider1">
			<div class="load1">

			</div>
			<div class="content1">
				<div class="principal1">
				</div>
			</div>
	
		</div>

  <nav class="navbar navbar-expand-lg navbar-light">
          <div class="hedder-up">
            <h1 ><a href="index.php" class="navbar-brand" data-blast="color">Car Sales</a></h1>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="headdser-nav-color" data-blast="bgColor">
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
              <ul class="navbar-nav ">
                <li class="nav-item active">
                  <a class="nav-link" id="0" onClick="nav_item_selected(0)" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="1" onClick="nav_item_selected(1)" data-toggle="dropdown">
                        Details
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="feedback.php">Feedback</a>
                        <a class="dropdown-item" href="product.php">Products</a>
                        <a class="dropdown-item" href="mit_1.php">Rental Information</a>
                    </div>
                </li>
                
                
                <li class="nav-item">
                    <a class="nav-link" href="it_news.php" id="2" onClick="nav_item_selected(2)">Information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php" id="3" onClick="nav_item_selected(3)">About Us</a>
                </li>
                <?php if(isset($_SESSION['valid_user'])): ?>
                <li class="nav-item">
                    <a class="nav-link" href="member_only.php" id="4" onClick="nav_item_selected(4)"><?php echo $_SESSION['name']; ?></a>
                </li>
                <li class="nav-item">
                    <!-- <a class="nav-link" href="member.php" id="5" style="display: none;">Sign-up</a> -->
                    <a class="nav-link" href="logout.php" id="5" onClick="nav_item_selected(4)">Sign-out</a>
                </li>
                <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="login.php" id="4" onClick="nav_item_selected(4)">Sign-in</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="member.php" id="5" onClick="nav_item_selected(5)">Sign-up</a>
                </li>
                <?php endif; ?>

                
              </ul>

            </div>

          </div>

        </nav>
<form style="position: absolute;top: 16px;right: 41px;" class="form-inline" action="search.php">
            <input class="form-control mr-sm-2" type="Search" name="key" placeholder="Search">
            <button class="btn light my-sm-0" type="submit">Search</button>
        </form>


</body>
</html>