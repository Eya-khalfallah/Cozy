<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cardo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-rO+919vLgl1UGwJ1TNEKjZo80pTxBMD7jxmB+G3Xq8U6yDgTHS+R6jvlU2Q8f84W4x4Zf/6YYpwzXIm8uyyWig==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Body Lotion</title>
</head>
<body>
    <div class="out"></div>
    <nav>
        <ul class="hovs" style="margin-left:20%;">
            <li class="hov"><a href="./home.php">Home</a></li>
            <li class="hov"><a href="./bio-herbel.php" style="color: rgb(241, 140, 142);">Products</a></li>
            <li style="font-size: 30px; padding-left: 20px; padding-right: 20px;"><span>Cozy</span></li>
            <li class="hov"><a href="./login.php">Log in</a></li>
            <li class="hov"><a href="">Blog</a></li>
        </ul>
        <form action="" class="search-box">
            <input type="text" placeholder="Search" required/>
            <button type="submit" class="go-icon"><i class="fas fa-search"></i></button>
        </form>
    </nav>
    <div class="filteer">
    <form method="POST" action="">
        <input type="text" placeholder="min" name="min_price" />
        <input type="text" placeholder="max" name="max_price" />
        <button type="submit" class="fil" name="filter" onclick="filter()">Filter</button>
    </form>
                </div>

    <div class="container-product">
        <div class="box-1">
            <img src="./img7.jpg" >
            <div class="text-container">
                <p>All Products:</p>
            </div>
        </div>
        <div class="box-2">
            <div class="products-container">
                <ul class="bluur">
                    <li><a class="categorie" href="../herbel//bio-herbel.php" >Bio-herbel</a></li>
                    <li><a class="categorie" href="./body-lotion.php" style="color: rgb(234, 177, 178);">Body lotion</a></li>
                    <li><a class="categorie" href="">Candle-spa</a></li>
                    <li><a class="categorie" href="../skin care/skin-care.php">Skin care</a></li>
                </ul>
                <button class="filter">Filter</button>
                <hr>
                <div class="products">
                    <?php
                    // Establish a database connection
                    $connection = mysqli_connect('localhost', 'team3', 'test123456.II1A', 'projet');

                    // Check if the connection was successful
                    if (!$connection) {
                        die("Connection failed: " . mysqli_connect_error());
                    }
                    if (!isset($_POST['filter'])){
                        // Fetch the product data from the database
                    $sql = "SELECT * FROM body_lotion";
                    $result = mysqli_query($connection, $sql);

                    // Loop through the product data and generate the HTML content
                    while ($row = mysqli_fetch_assoc($result)) {
                        $productId = $row['id'];
                        $productName = $row['name'];
                        $productImage = $row['image'];
                        $productDescription = $row['description'];
                        $productPrice = $row['price'];

                        echo '<div class="product">';
                        echo '<img src="' . $productImage . '" onclick="toggleProductDescription(\'' . $productName . '\', \'' . $productDescription . '\', \'' . $productPrice . '\')">';
                        echo '<div class="product-description">';
                        echo '<i class="far fa-heart" onclick="changeIcon(this)"></i>';
                        echo '</div>';
                        echo '</div>';
                    }
                    

                    // Close the database connection
                    mysqli_close($connection);
                    }
                    else{

                    // Get the minimum and maximum price values from the user
                    $minPrice = $_POST['min_price']; // Assuming you receive the values via POST request
                    $maxPrice = $_POST['max_price'];
        
                    // Prepare the SQL query with placeholders for the price values
                    $sql = "SELECT * FROM body_lotion WHERE price BETWEEN ? AND ?";
        
                    // Prepare the statement
                    $stmt = mysqli_prepare($connection, $sql);
                    
                    // Bind the parameter values
                    mysqli_stmt_bind_param($stmt, "ii", $minPrice, $maxPrice);
        
                    // Execute the query
                    mysqli_stmt_execute($stmt);
        
                    // Get the result set
                    $result = mysqli_stmt_get_result($stmt);
        
                    // Loop through the result set and generate the HTML content
                    while ($row = mysqli_fetch_assoc($result)) {
                        $productName = $row['name'];
                        $productBrand = $row['brand'];
                        $productPrice = $row['price'];
                        $productDescription = $row['description'];
                        $productImage = $row['image'];
        
                        echo '<div class="product">';
                        echo '<img src="' . $productImage . '" onclick="toggleProductDescription(\'' . $productName . '\', \'' . $productDescription . '\', \'' . $productPrice . '\')">';
                        echo '<div class="product-description">';
                        echo '<i class="far fa-heart" onclick="changeIcon(this)"></i>';
                        echo '</div>';
                        echo '</div>';
                    }
        
                    // Close the statement and the database connection
                    mysqli_stmt_close($stmt);
                    mysqli_close($connection);
                }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="border1"></div>

    <div class="part-4">
        <h1>Contact Us</h1>
        <form id="form">
            <input type="text"
                    id="name"
                    placeholder="Enter your name" />
            <input type="email"
                    id="email"
                    placeholder="Enter your email" />
            <textarea id="comment" rows="6" placeholder=" Enter your comment here..."></textarea>
        
            <button value="submit">
                SEND MESSAGE
            </button>
        </form>
        <?php
                // <!-- // Connexion à la base de données MySQL -->
            $conn = mysqli_connect('localhost', 'team3', 'test123456.II1A', 'projet');

            // <!-- // Vérification de la connexion -->
            if (!$conn) {
                die('Erreur de connexion à la base de données');
            }

            //  <!-- // Traitement du formulaire d'inscription -->
            if (isset($_POST['submit'])) {
            // <!-- // Récupération des données du formulaire -->
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            // <!-- // Insertion des données de l'utilisateur dans la table "utilisateurs" -->
            $query = "INSERT INTO contact (name,email,message) VALUES ('$name', '$email','$message')";
            $result = mysqli_query($conn, $query);

            // <!-- // Vérification de l'insertion -->
            if ($result) {
            echo "<div class='msgc'>Successful registration</div>";
            echo "<script>" . "window.location.href='home.php'" . "</script>";
                }

            else {
            echo "<div class='error-msg'>Registration error. Try Again.</div>";
            }
        }
        ?>
    </div>

    <div class="border2"></div>

    <footer>
        <div class="footer">
            <div class="contact">
                <h2>KEEP ON TOUCH</h2>
                <div class="icons">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-instagram"></a>
                </div>
                <br>
                <div class="contact">
                    <ul style="list-style-type:none;">
                        <li><i class="material-icons">phone</i>+216 70 158 269</li>
                        <li><i class="material-icons">email</i>contact@gmail.com</li>
                        <li><i class="material-icons">place</i>Campus Mannouba</li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="photo">
              <img class="imag" src="./bb.jpg" >
            </div>
        </div>
    </footer>
    
</body>
<script>
    function toggleProductDescription(productName, productDescription, productPrice) {
    var productImage = event.target;
    var product = productImage.parentNode;
    var productDescriptionElement = productImage.nextElementSibling;
        console.log('hello');
    if (productImage.classList.contains('active')) {
        productImage.classList.remove('active');
        product.classList.remove('trans');

        setTimeout(function() {
            productImage.style.transform = 'translateX(0)';
            productDescriptionElement.style.transform = 'translateX(100%)';
            productDescriptionElement.innerHTML = '';
        }, 0.4);
    } else {
        productImage.classList.add('active');
        product.classList.add('trans');
        productDescriptionElement.innerHTML = '<p>'+ '<i class="far fa-heart" onclick="changeIcon(this)"></i><br>' + productName + '<br><br>' + productDescription + '<br><br> prix: ' + productPrice + 'DT</p>';
        productDescriptionElement.style.display = 'block';

        setTimeout(function() {
            productDescriptionElement.style.opacity = 1;
            productImage.style.transform = 'translateX(-50px)';
            productDescriptionElement.style.transform = 'translate(-65px,-30px)';
        }, 0.4);
    }
}

    function changeIcon(element) {
        element.classList.toggle("far");
        element.classList.toggle("fa");
    }

    const myClassElements = document.querySelectorAll('.product');
    document.addEventListener('click', function(event) {
        myClassElements.forEach(function(element) {
            // Check if the clicked element is the target element or one of its children
            if (event.target === element || element.contains(event.target)) {
                return;
            }

            // Remove the active class from the target element
            element.classList.remove('trans');
            const productImage = element.firstElementChild;
            const productDescription = element.lastElementChild;
            if (productImage) {
                productImage.classList.remove('active');

                setTimeout(function() {
                    productImage.style.transform = 'translateX(0)';
                    productDescription.style.transform = 'translateX(100%)';
                }, 0.4);
            }
        });
    });
    var searchButton = document.getElementsByClassName('filter')[0];


    searchButton.addEventListener("click", () => pop());

    function pop(){
        console.log("salem");
    let out = document.getElementsByClassName("out")[0];
    out.style.display = "block";
    out.addEventListener("click", () => disappear());
    document.getElementsByClassName("filteer")[0].style.display = "flex";
    document.getElementsByClassName("container-product")[0].style.filter = "blur(5px)";
    document.onkeydown = function (e) {
        if(e.key == "Escape"){
            disappear();
        }
    };
    }
    //The disappear() function is used to close the pop-up window.
    function disappear(){
        let out = document.getElementsByClassName("out")[0];
        out.style.display = "none";
        document.getElementsByClassName("filteer")[0].style.display = "none";
        document.getElementsByClassName("container-product")[0].style.filter = "none";

    }
</script>
</html>
