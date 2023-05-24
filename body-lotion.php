<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cardo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-rO+919vLgl1UGwJ1TNEKjZo80pTxBMD7jxmB+G3Xq8U6yDgTHS+R6jvlU2Q8f84W4x4Zf/6YYpwzXIm8uyyWig==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Body Lotion</title>
</head>
<body>

    <nav>
        <ul class="hovs" style="margin-left:20%;">
            <li class="hov"><a href="./home.html">Home</a></li>
            <li class="hov"><a href="./bio-herbel.html" style="color: rgb(241, 140, 142);">Products</a></li>
            <li style="font-size: 30px; padding-left: 20px; padding-right: 20px;"><span>Cozy</span></li>
            <li class="hov"><a href="./login.php">Log in</a></li>
            <li class="hov"><a href="">Blog</a></li>
        </ul>
        <form action="" class="search-box">
            <input type="text" placeholder="Search" required/>
            <button type="submit" class="go-icon"><i class="fas fa-search"></i></button>
        </form>
    </nav>

    <div class="container-product">
        <div class="box-1">
            <img src="./img7.jpg" >
            <div class="text-container">
                <p>All Products:</p>
            </div>
        </div>

        <div class="box-2">
            <div class="products-container">
                <ul>
                    <li><a class="categorie" href="./bio-herbel.html" >Bio-herbel</a></li>
                    <li><a class="categorie" href="./body-lotion.html" style="color: rgb(234, 177, 178);">Body lotion</a></li>
                    <li><a class="categorie" href="">Candle-spa</a></li>
                    <li><a class="categorie" href="./skin-care.html">Skin care</a></li>
                </ul>
                <hr>
                <div class="products">
                    <?php
                    // Establish a database connection
                    $connection = mysqli_connect('localhost', 'team3', 'test123456.II1A', 'projet');

                    // Check if the connection was successful
                    if (!$connection) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    // Fetch the product data from the database
                    $sql = "SELECT * FROM products";
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
        productDescriptionElement.innerHTML = '<p>' + productName + '<br><br>' + productDescription + '<br><br> prix: ' + productPrice + 'DT</p>';
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
</script>
</html>
