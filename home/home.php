<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./home.css">
    <link href="//db.onlinewebfonts.com/c/1fed4454352f201d52b65ca5480afb2d?family=Playlist" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cardo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-rO+919vLgl1UGwJ1TNEKjZo80pTxBMD7jxmB+G3Xq8U6yDgTHS+R6jvlU2Q8f84W4x4Zf/6YYpwzXIm8uyyWig==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Cozy WebSite Home page</title>
    <style>
        .sub-menu {
            display: none;
            position: fixed;
            text-align: center;
            top: 27%;
            left: 34%;
            transform: translate(-100%, -100%);
            width: 150px;
            height: 100px;
            padding-left: 10px;
            padding-top: 20px;
            background-color: rgba(255, 255, 255, 0.479);
        }

        .sub-menu>a:hover {
            color: rgb(235, 169, 170);
            transition: transform 0.3s ease-in-out;

        }
    </style>
    <script>
        function toggleSubMenu() {
            var subMenu = document.querySelector('.sub-menu');
            subMenu.style.display = (subMenu.style.display === 'block') ? 'none' : 'block';
        }
    </script>
</head>

<body>

    <nav>
        <ul class="hovs" style="margin-left:20%;">
            <li class="hov"><a onclick="toggleSubMenu()" style="color: rgb(241, 140, 142);">Home</a></li>
            <li class="hov"><a href="../herbel/bio-herbel.php">Products</a></li>
            <li style="font-size: 30px; padding-left: 20px; padding-right: 20px;"><span>Cozy</span></li>
            <li class="hov"><a href="../auth/login.php">Log in</a></li>
            <li class="hov"><a href="">Blog</a></li>
        </ul>
        <form action="" class="search-box">
            <input type="text" placeholder="Search" required />
            <button type="submit" class="go-icon"><i class="fas fa-search"></i></button>
        </form>
    </nav>

    <header>
        <div class="part1">
            <div class="all">
                <div class="div1"><img src="./home22.jpg"></div>
                <div class="div2"><img src="./home1.jpg"></div>
            </div>
            <div class="sub-menu">
                <a href="#P1">popular categorie</a><br>
                <a href="#P2">trending products</a><br>
                <a href="#P3">Contact us</a><br>
                <a href="#P4">Keep on touch</a>
            </div>
            <div class="quotes">
                <div class="text">
                    <h1>Gentle Makeup<br>Removing Cleanser</h1>
                    <h4>the all new gorgeous collection</h4><br>
                    <button><a href="./bio-herbel.php">View Products</a></button>
                </div>
            </div>

            <div class="categorie" id="P1">
                <h3>Shop by categorie</h3>
                <h1>Popular categories</h1>
                <div class="images">
                    <div class="img1"><a href="./bio-herbel.php"><img src="./categ1.jfif" alt=""></a>
                        <h3>Bio herbel</h3>
                    </div>
                    <div class="img2"><a href="./body-lotion.php"><img src="./categ2.jfif" alt=""></a>
                        <h3>Body lotion</h3>
                    </div>
                    <div class="img3"><a href=""><img src="./categ3.jfif" alt=""></a>
                        <h3>Candle-spa</h3>
                    </div>
                    <div class="img4"><a href="./skin-care.php"><img src="./categ4.png" alt=""></a>
                        <h3>Skincare</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="border1"></div>

        <div class="trend-prod" id="P2">
            <h1>Trending Products</h1>
            <table>
                <tr>
                    <th>
                        <div class="product">
                            <img src="./2.png" onclick="toggleProductDescription('Product description text.')">
                            <div class="product-description">
                                <i class="far fa-heart" onclick="changeIcon(this)"></i>
                            </div>
                        </div>
                    </th>
                    <th>
                        <div class="product">
                            <img src="./3.png" onclick="toggleProductDescription('Product description text.')">
                            <div class="product-description">
                                <i class="far fa-heart" onclick="changeIcon(this)"></i>
                            </div>
                        </div>
                    </th>
                    <th>
                        <div class="product">
                            <img src="./4.jpg" onclick="toggleProductDescription('Product description text.')">
                            <div class="product-description">
                                <i class="far fa-heart" onclick="changeIcon(this)"></i>
                            </div>
                        </div>
                    </th>
                </tr>
                <tr>
                    <td>
                        <div class="product">
                            <img src="./5.jpg" onclick="toggleProductDescription('Product description text.')">
                            <div class="product-description">
                                <i class="far fa-heart" onclick="changeIcon(this)"></i>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="product">
                            <img src="./6.jpg" onclick="toggleProductDescription('Product description text.')">
                            <div class="product-description">
                                <i class="far fa-heart" onclick="changeIcon(this)"></i>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="product">
                            <img src="./7.jpg" onclick="toggleProductDescription('Product description text.')">
                            <div class="product-description">
                                <i class="far fa-heart" onclick="changeIcon(this)"></i>
                            </div>
                        </div>
                    </td>
                </tr>

            </table>


        </div>

        <div class="border2"></div>

        <div class="part-4" id="P3">
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
            }
            ?>
            <div class="border1"></div>

            <footer id="P4">
                <div class="footer">
                    <div class="contact">
                        <h2>KEEP ON TOUCH</h2>
                        <div class="icons">
                            <a href="#" class="fa fa-facebook"></a>
                            <a href="#" class="fa fa-instagram"></a>
                        </div>
                        <br>
                        <ul style="list-style-type:none;">
                            <li><i class="material-icons">phone</i>+216 70 158 269</li>
                            <li><i class="material-icons">email</i>contact@gmail.com</li>
                            <li><i class="material-icons">place</i>Campus Mannouba</li>
                        </ul>
                    </div>
                    <hr>
                    <div class="photo">
                        <img class="imag" src="./The 5 Skincare Trends You Need on Your Radar For Fall - Molly Sims.jfif">
                    </div>
                </div>
            </footer>

        </div>

    </header>
</body>
<script src="./products.js"></script>

</html>