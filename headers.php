<?php

// Template header
function template_header($title) {

// Get # of items in cart
$num_items_in_cart = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;

echo <<<EOT

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>$title</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
        <header>
            <div class="content-wrapper">
                <h1>Shopping Cart Workflow</h1>
                <nav>
                    <a href="index.php">Home</a>
                    <a href="index.php?page=products">Products</a>
                </nav>
                <div class="link-icons">
                    <a href="index.php?page=cart">
						<i class="fas fa-shopping-cart"></i>
                        <span>$num_items_in_cart</span>
					</a>
                </div>
            </div>
        </header>
        <main>
EOT;
}

// Template footer
function template_footer() {
$year = date('Y');
echo <<<EOT
        </main>
        <footer>
            <div class="content-wrapper">
                <p>&copy; $year, Shopping Cart Workflow</p>
            </div>
        </footer>
        <script src="script.js"></script>
    </body>
</html>
EOT;
}