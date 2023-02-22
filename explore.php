<!DOCTYPE html>

<html lang="en">

<head>

    <meta name="description" content="Explore for Shop512">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="explore.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="loginstate.js"></script>

</head>


<body>

<?php
$server = "spring-2022.cs.utexas.edu";
$dbName = "cs329e_bulko_maxkret";
$user = "cs329e_bulko_maxkret";
$pwd = "warsaw7mortar&canvas";
$mysqli = new mysqli($server, $user, $pwd, $dbName);
// if ($mysqli->connect_errno) {
// 	echo "failure";
// 	die('Connect Error: ' . $mysqli->connect_errno . ": " . $mysqli->connect_error);
// }

// the command as text
$select_cmd = "SELECT * FROM stores WHERE storeName = \"Yellowbird\"";
// the results of that command sent as a query to $mysqli
$select_result = $mysqli->query($select_cmd);
// the results of that command fetched as a php row array
$row = $select_result->fetch_row();
//echo($row[1]);
// print <<< ROW
// $row[1]
// ROW;


// while ($stores = $query->fetch_row()) {
//     $storeID = $stores[0];
//     $storeName = $stores[1];
//     $link = $stores[2];
//     $story = $stores[3];
//     $video = $stores[4];
//     $type = $stores[5];
// }

// echo $storeID;

?>

    <div class="contact-title">
        <div class="bg-img">
            <div class="container">
                <ul id="topnav">
                    <li class="topleft"><a id="logolink" href="home.html"><img src="./img/logo.PNG"
                                alt="page logo" /></a></li>
                    <li class="topleft">
                        <form method="POST" action="./user_search.php">
                            <input type="text" placeholder="Search.." name="search" list="s_tags" required>
                            <button type="submit"><i class="fa fa-search"></i></button>
							<datalist id="s_tags">
								<option value="All">
								<option value="Retail">
								<option value="Boutique">
								<option value="Food">
								<option value="Breakfast">
								<option value="Subs">
								<option value="Alcohol">
								<option value="Pizza">
							</datalist>
                        </form>
                    </li>
                    <li class="topleft"><a href="explore.html">Explore</a></li>
                    <li class="topleft"><a href="our_mission.html">Our Mission</a></li>
                    <li class="topleft"><a href="contactus.html">Contact Us</a></li>
                    <li id="heart" class="topright"><a href="explore.html">&#10084;</a></li>
                    <div id="topright1">            
                        <li class="topright"><a href="register_login.html">Login</a></li>
                        <li class="topright" id="register"><a href="register_login.html">Register</a></li>
                    </div>
                    <div id="topright2">
                        <li class="topright"><p></p></li>
                    </div>
                </ul>
            </div>
            <div class="high-div">
                <div class="center-text">
                    <!-- Moved center-text to inside of bg-img to fix clipping with nav bar -->
                    <h2 class="stores">Stores</h2>
                    <div class="grid-container">
                        <?php
                        $select_cmd = "SELECT storeName, link, story, video, type FROM stores";
                        $select_result = $mysqli->query($select_cmd);
                        while($row = $select_result->fetch_array(MYSQLI_ASSOC)){
print <<<ALLSTORES1
<div class="store-feature all 
ALLSTORES1;
$current_type = strtolower($row['type']);
print <<<ALLSTORES2
{$current_type}">
<h3><a href="{$row['link']}">{$row['storeName']}</a></h3>
<p>"{$row['story']}"</p>
</div>
ALLSTORES2;
}
                        ?>
                        <div class="store-feature food breakfast">
                            <h3><a href="https://kerbeylanecafe.com">Kerbey Lane Cafe</a></h3>
                            <div class="videocontainer">
                                <iframe width="160" height="90" src="https://www.youtube.com/embed/Nkz92zSyaYo"
                                    title="YouTube video player"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                            <p>
                                "We first opened our doors to the Austin community on May 5, 1980, serving
                                made-from-scratch
                                comfort food out of a small 1930s bungalow in Central Austin on Kerbey Lane.
                                For the first few months of business, the original location operated as a restaurant and
                                housed a cozy apartment for our founders, David and Patricia. The beloved original
                                location
                                still stands and thrives today as an iconic Austin landmark.
                                Kerbey Lane Cafe remains 100% family-owned to this day and we continue to stay true to
                                our
                                original values of serving delicious meals that are thoughtfully-sourced, scratch-made,
                                and
                                affordable while welcoming all who come through our doors."
                            </p>
                            <h4>Best Selling Products</h4>
                            <div class="products">
                                <div class="sub">
                                    <a href="https://kerbeylanecafe.com/starters-queso">
                                        <figure>
                                            <img src="./products/kerbey/Kerbey%20Queso%20.jpg" alt="kerbey queso">
                                            <figcaption>Kerbey Queso</figcaption>
                                        </figure>
                                    </a>
                                    <a href="https://kerbeylanecafe.com/breakfast">
                                        <figure>
                                            <img src="./products/kerbey/Crispy%20chicken%20bene.jpg"
                                                alt="Crispy Chicken Benedict">
                                            <figcaption>Crispy Chicken Benedict</figcaption>
                                        </figure>
                                    </a>
                                    <a href="https://kerbeylanecafe.com/lunch-dinner">
                                        <figure>
                                            <img src="./products/kerbey/Chx%20pesto%20panini.jpg"
                                                alt="Chicken Pesto Panini">
                                            <figcaption>Chicken Pesto Panini</figcaption>
                                        </figure>
                                    </a>
                                    <a href="https://kerbeylanecafe.com/desserts">
                                        <figure>
                                            <img src="./products/kerbey/brownie.jpg" alt="Fudge Brownie Sundae">
                                            <figcaption>Fudge Brownie Sundae</figcaption>
                                        </figure>
                                    </a>
                                    <a href="https://kerbeylanecafe.com/breakfast">
                                        <figure>
                                            <img src="./products/kerbey/Single%20cake%20%25282%2529-2.jpg"
                                                alt="Vegan Pancakes">
                                            <figcaption>Vegan Pancakes</figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="store-feature food subs">
                            <h3><a href="https://thundercloud.com/">ThunderCloud Subs</a></h3>
                            <div class="videocontainer">
                                <iframe width="160" height="90" src="https://www.youtube.com/embed/QJRtmcfwd-c"
                                    title="YouTube video player"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                            <p>
                                "ThunderCloud Subs is a neighborhood sub shop with a rich tradition of good-natured
                                people
                                serving fresh, fast, and healthy food in a quirky and fun atmosphere. Andy Cotton and
                                John
                                Meddaugh founded ThunderCloud in 1975 with the simple philosophy of selling a great sub
                                at a
                                reasonable price. We proudly maintain that core philosophy today. We are proud of our
                                ingredients. We have our bread made from scratch and delivered every morning by a local
                                bakery. We slice all of our meats, cheeses, and produce in the shops every day, and
                                prepare
                                all of our spreads from scratch. We use only organic eggs and we buy local ingredients
                                as
                                much as possible. All of these ingredients come together to create the one and only
                                ThunderCloud Sub."
                            </p>
                            <h4>Best Selling Products</h4>
                            <div class="products">
                                <div class="sub">
                                    <a href="https://thundercloud.com/main-menu/">
                                        <figure>
                                            <img src="./products/thundercloud/menu_CS.jpg" alt="LadyBird">
                                            <figcaption>LadyBird</figcaption>
                                        </figure>
                                    </a>
                                    <a href="https://thundercloud.com/main-menu/">
                                        <figure>
                                            <img src="./products/thundercloud/Nada-1910-web.jpg" alt="Nada Chicken">
                                            <figcaption>Nada Chicken</figcaption>
                                        </figure>
                                    </a>
                                    <a href="https://thundercloud.com/main-menu/">
                                        <figure>
                                            <img src="./products/thundercloud/NYI-1902-web.jpg" alt="N.Y. Italian">
                                            <figcaption>N.Y. Italian</figcaption>
                                        </figure>
                                    </a>
                                    <a href="https://thundercloud.com/main-menu/">
                                        <figure>
                                            <img src="./products/thundercloud/TxTuna-1906-V4-web-e1558625312839.jpg"
                                                alt="Texas Tuna">
                                            <figcaption>Texas Tuna</figcaption>
                                        </figure>
                                    </a>
                                    <a href="https://thundercloud.com/main-menu/">
                                        <figure>
                                            <img src="./products/thundercloud/VD.jpg" alt="Veggie Delite">
                                            <figcaption>Veggie Delite</figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="store-feature food alcohol pizza">
                            <h3><a href="https://pinthouse.com/">Pinthouse Pizza</a></h3>
                            <div class="videocontainer">
                                <iframe width="160" height="90" src="https://www.youtube.com/embed/Vbbps1crqjM"
                                    title="YouTube video player"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                            <p>
                                "Pinthouse was founded by six guys who share a passion for craft beer and good food. We
                                love
                                Austin, and we are excited to help contribute to the energy and originality that make
                                Austin
                                a vibrant community. Our goal is to serve award-winning beer and hand-crafted pizza in a
                                warm and casual setting."
                            </p>
                            <h4>Best Selling Products</h4>
                            <div class="products">
                                <div class="sub">
                                    <a href="https://pinthouse.com/lamar/food/menu">
                                        <figure>
                                            <img src="./products/pinthouse/pizza.jpg" alt="Banh Mi Pizza">
                                            <figcaption>Banh Mi Pizza</figcaption>
                                        </figure>
                                    </a>
                                    <a href="https://pinthouse.com/lamar/food/menu">
                                        <figure>
                                            <img src="./products/pinthouse/pizzagreen.jpg" alt="The Armadillo">
                                            <figcaption>The Armadillo</figcaption>
                                        </figure>
                                    </a>
                                    <a href="https://pinthouse.com/lamar/food/menu">
                                        <figure>
                                            <img src="./products/pinthouse/pizzaham.jpg" alt="The Honey Pear">
                                            <figcaption>The Honey Pear</figcaption>
                                        </figure>
                                    </a>
                                    <a href="https://pinthouse.com/lamar/food/menu">
                                        <figure>
                                            <img src="./products/pinthouse/pretz.jpg" alt="Daz Pretzel">
                                            <figcaption>Daz Pretzel</figcaption>
                                        </figure>
                                    </a>
                                    <a href="https://pinthouse.com/lamar/food/menu">
                                        <figure>
                                            <img src="./products/pinthouse/stick.jpg" alt="Beer Mates">
                                            <figcaption>Beer Mates</figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="store-feature retail boutique">
                            <h3><a href="https://www.lillabeth.com/">Lilla & Beth</a></h3>
                            <div class="videocontainer">
                                <iframe width="160" height="90" src="https://www.youtube.com/embed/h3mDng04jsA"
                                    title="YouTube video player"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                            <p>
                                "A local Austin boutique with a unique selection of curated gifts, on-trend clothing,
                                jewelry and home accessories. Run by local Austinite Megan Cooper out of a single
                                location
                                in the Mueller area of Austin."
                            </p>
                            <h4>Best Selling Products</h4>
                            <div class="products">
                                <div class="sub">
                                    <a href="https://shoplillabeth.com/">
                                        <figure>
                                            <img src="./products/lilla/bee.jpg"
                                                alt="Albee and the Big Seed – Children's Book">
                                            <figcaption>Albee and the Big Seed</figcaption>
                                        </figure>
                                    </a>
                                    <a href="https://shoplillabeth.com/">
                                        <figure>
                                            <img src="./products/lilla/cactus.jpg" alt="Succulent Plush">
                                            <figcaption>Succulent Plush</figcaption>
                                        </figure>
                                    </a>
                                    <a href="https://shoplillabeth.com/">
                                        <figure>
                                            <img src="./products/lilla/candle.jpg" alt="Illume Demi Tin Candle">
                                            <figcaption>Illume Demi Tin Candle</figcaption>
                                        </figure>
                                    </a>
                                    <a href="https://shoplillabeth.com/">
                                        <figure>
                                            <img src="./products/lilla/dress.jpg" alt="“I Dream Of Fiji” Smocked Dress">
                                            <figcaption>“I Dream Of Fiji” Smocked Dress</figcaption>
                                        </figure>
                                    </a>
                                    <a href="https://shoplillabeth.com/">
                                        <figure>
                                            <img src="./products/lilla/sis.jpg" alt="Light Pink “Big Sis” Hat">
                                            <figcaption>Light Pink “Big Sis” Hat</figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="store-feature food breakfast">
                            <h3><a href="https://kerbeylanecafe.com">Kerbey Lane Cafe</a></h3>
                            <div class="videocontainer">
                                <iframe width="160" height="90" src="https://www.youtube.com/embed/Nkz92zSyaYo"
                                    title="YouTube video player"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                            <p>
                                "We first opened our doors to the Austin community on May 5, 1980, serving
                                made-from-scratch
                                comfort food out of a small 1930s bungalow in Central Austin on Kerbey Lane.
                                For the first few months of business, the original location operated as a restaurant and
                                housed a cozy apartment for our founders, David and Patricia. The beloved original
                                location
                                still stands and thrives today as an iconic Austin landmark.
                                Kerbey Lane Cafe remains 100% family-owned to this day and we continue to stay true to
                                our
                                original values of serving delicious meals that are thoughtfully-sourced, scratch-made,
                                and
                                affordable while welcoming all who come through our doors."
                            </p>
                            <h4>Best Selling Products</h4>
                            <div class="products">
                                <div class="sub">
                                    <a href="https://kerbeylanecafe.com/starters-queso">
                                        <figure>
                                            <img src="./products/kerbey/Kerbey%20Queso%20.jpg" alt="kerbey queso">
                                            <figcaption>Kerbey Queso</figcaption>
                                        </figure>
                                    </a>
                                    <a href="https://kerbeylanecafe.com/breakfast">
                                        <figure>
                                            <img src="./products/kerbey/Crispy%20chicken%20bene.jpg"
                                                alt="Crispy Chicken Benedict">
                                            <figcaption>Crispy Chicken Benedict</figcaption>
                                        </figure>
                                    </a>
                                    <a href="https://kerbeylanecafe.com/lunch-dinner">
                                        <figure>
                                            <img src="./products/kerbey/Chx%20pesto%20panini.jpg"
                                                alt="Chicken Pesto Panini">
                                            <figcaption>Chicken Pesto Panini</figcaption>
                                        </figure>
                                    </a>
                                    <a href="https://kerbeylanecafe.com/desserts">
                                        <figure>
                                            <img src="./products/kerbey/brownie.jpg" alt="Fudge Brownie Sundae">
                                            <figcaption>Fudge Brownie Sundae</figcaption>
                                        </figure>
                                    </a>
                                    <a href="https://kerbeylanecafe.com/breakfast">
                                        <figure>
                                            <img src="./products/kerbey/Single%20cake%20%25282%2529-2.jpg"
                                                alt="Vegan Pancakes">
                                            <figcaption>Vegan Pancakes</figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="store-feature food breakfast">
                            <h3><a href="https://kerbeylanecafe.com">Kerbey Lane Cafe</a></h3>
                            <div class="videocontainer">
                                <iframe width="160" height="90" src="https://www.youtube.com/embed/Nkz92zSyaYo"
                                    title="YouTube video player"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                            <p>
                                "We first opened our doors to the Austin community on May 5, 1980, serving
                                made-from-scratch
                                comfort food out of a small 1930s bungalow in Central Austin on Kerbey Lane.
                                For the first few months of business, the original location operated as a restaurant and
                                housed a cozy apartment for our founders, David and Patricia. The beloved original
                                location
                                still stands and thrives today as an iconic Austin landmark.
                                Kerbey Lane Cafe remains 100% family-owned to this day and we continue to stay true to
                                our
                                original values of serving delicious meals that are thoughtfully-sourced, scratch-made,
                                and
                                affordable while welcoming all who come through our doors."
                            </p>
                            <h4>Best Selling Products</h4>
                            <div class="products">
                                <div class="sub">
                                    <a href="https://kerbeylanecafe.com/starters-queso">
                                        <figure>
                                            <img src="./products/kerbey/Kerbey%20Queso%20.jpg" alt="kerbey queso">
                                            <figcaption>Kerbey Queso</figcaption>
                                        </figure>
                                    </a>
                                    <a href="https://kerbeylanecafe.com/breakfast">
                                        <figure>
                                            <img src="./products/kerbey/Crispy%20chicken%20bene.jpg"
                                                alt="Crispy Chicken Benedict">
                                            <figcaption>Crispy Chicken Benedict</figcaption>
                                        </figure>
                                    </a>
                                    <a href="https://kerbeylanecafe.com/lunch-dinner">
                                        <figure>
                                            <img src="./products/kerbey/Chx%20pesto%20panini.jpg"
                                                alt="Chicken Pesto Panini">
                                            <figcaption>Chicken Pesto Panini</figcaption>
                                        </figure>
                                    </a>
                                    <a href="https://kerbeylanecafe.com/desserts">
                                        <figure>
                                            <img src="./products/kerbey/brownie.jpg" alt="Fudge Brownie Sundae">
                                            <figcaption>Fudge Brownie Sundae</figcaption>
                                        </figure>
                                    </a>
                                    <a href="https://kerbeylanecafe.com/breakfast">
                                        <figure>
                                            <img src="./products/kerbey/Single%20cake%20%25282%2529-2.jpg"
                                                alt="Vegan Pancakes">
                                            <figcaption>Vegan Pancakes</figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="store-feature food breakfast">
                            <h3><a href="https://kerbeylanecafe.com">Kerbey Lane Cafe</a></h3>
                            <div class="videocontainer">
                                <iframe width="160" height="90" src="https://www.youtube.com/embed/Nkz92zSyaYo"
                                    title="YouTube video player"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                            <p>
                                "We first opened our doors to the Austin community on May 5, 1980, serving
                                made-from-scratch
                                comfort food out of a small 1930s bungalow in Central Austin on Kerbey Lane.
                                For the first few months of business, the original location operated as a restaurant and
                                housed a cozy apartment for our founders, David and Patricia. The beloved original
                                location
                                still stands and thrives today as an iconic Austin landmark.
                                Kerbey Lane Cafe remains 100% family-owned to this day and we continue to stay true to
                                our
                                original values of serving delicious meals that are thoughtfully-sourced, scratch-made,
                                and
                                affordable while welcoming all who come through our doors."
                            </p>
                            <h4>Best Selling Products</h4>
                            <div class="products">
                                <div class="sub">
                                    <a href="https://kerbeylanecafe.com/starters-queso">
                                        <figure>
                                            <img src="./products/kerbey/Kerbey%20Queso%20.jpg" alt="kerbey queso">
                                            <figcaption>Kerbey Queso</figcaption>
                                        </figure>
                                    </a>
                                    <a href="https://kerbeylanecafe.com/breakfast">
                                        <figure>
                                            <img src="./products/kerbey/Crispy%20chicken%20bene.jpg"
                                                alt="Crispy Chicken Benedict">
                                            <figcaption>Crispy Chicken Benedict</figcaption>
                                        </figure>
                                    </a>
                                    <a href="https://kerbeylanecafe.com/lunch-dinner">
                                        <figure>
                                            <img src="./products/kerbey/Chx%20pesto%20panini.jpg"
                                                alt="Chicken Pesto Panini">
                                            <figcaption>Chicken Pesto Panini</figcaption>
                                        </figure>
                                    </a>
                                    <a href="https://kerbeylanecafe.com/desserts">
                                        <figure>
                                            <img src="./products/kerbey/brownie.jpg" alt="Fudge Brownie Sundae">
                                            <figcaption>Fudge Brownie Sundae</figcaption>
                                        </figure>
                                    </a>
                                    <a href="https://kerbeylanecafe.com/breakfast">
                                        <figure>
                                            <img src="./products/kerbey/Single%20cake%20%25282%2529-2.jpg"
                                                alt="Vegan Pancakes">
                                            <figcaption>Vegan Pancakes</figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="store-feature food breakfast">
                            <h3><a href="https://kerbeylanecafe.com">Kerbey Lane Cafe</a></h3>
                            <div class="videocontainer">
                                <iframe width="160" height="90" src="https://www.youtube.com/embed/Nkz92zSyaYo"
                                    title="YouTube video player"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                            <p>
                                "We first opened our doors to the Austin community on May 5, 1980, serving
                                made-from-scratch
                                comfort food out of a small 1930s bungalow in Central Austin on Kerbey Lane.
                                For the first few months of business, the original location operated as a restaurant and
                                housed a cozy apartment for our founders, David and Patricia. The beloved original
                                location
                                still stands and thrives today as an iconic Austin landmark.
                                Kerbey Lane Cafe remains 100% family-owned to this day and we continue to stay true to
                                our
                                original values of serving delicious meals that are thoughtfully-sourced, scratch-made,
                                and
                                affordable while welcoming all who come through our doors."
                            </p>
                            <h4>Best Selling Products</h4>
                            <div class="products">
                                <div class="sub">
                                    <a href="https://kerbeylanecafe.com/starters-queso">
                                        <figure>
                                            <img src="./products/kerbey/Kerbey%20Queso%20.jpg" alt="kerbey queso">
                                            <figcaption>Kerbey Queso</figcaption>
                                        </figure>
                                    </a>
                                    <a href="https://kerbeylanecafe.com/breakfast">
                                        <figure>
                                            <img src="./products/kerbey/Crispy%20chicken%20bene.jpg"
                                                alt="Crispy Chicken Benedict">
                                            <figcaption>Crispy Chicken Benedict</figcaption>
                                        </figure>
                                    </a>
                                    <a href="https://kerbeylanecafe.com/lunch-dinner">
                                        <figure>
                                            <img src="./products/kerbey/Chx%20pesto%20panini.jpg"
                                                alt="Chicken Pesto Panini">
                                            <figcaption>Chicken Pesto Panini</figcaption>
                                        </figure>
                                    </a>
                                    <a href="https://kerbeylanecafe.com/desserts">
                                        <figure>
                                            <img src="./products/kerbey/brownie.jpg" alt="Fudge Brownie Sundae">
                                            <figcaption>Fudge Brownie Sundae</figcaption>
                                        </figure>
                                    </a>
                                    <a href="https://kerbeylanecafe.com/breakfast">
                                        <figure>
                                            <img src="./products/kerbey/Single%20cake%20%25282%2529-2.jpg"
                                                alt="Vegan Pancakes">
                                            <figcaption>Vegan Pancakes</figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="store-feature food breakfast">
                            <h3><a href="https://kerbeylanecafe.com">Kerbey Lane Cafe</a></h3>
                            <div class="videocontainer">
                                <iframe width="160" height="90" src="https://www.youtube.com/embed/Nkz92zSyaYo"
                                    title="YouTube video player"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div> <!-- Is it sorting by the name of the collapse button? DO I need to update my php for that? -->
                            <p>
                                "We first opened our doors to the Austin community on May 5, 1980, serving
                                made-from-scratch
                                comfort food out of a small 1930s bungalow in Central Austin on Kerbey Lane.
                                For the first few months of business, the original location operated as a restaurant and
                                housed a cozy apartment for our founders, David and Patricia. The beloved original
                                location
                                still stands and thrives today as an iconic Austin landmark.
                                Kerbey Lane Cafe remains 100% family-owned to this day and we continue to stay true to
                                our
                                original values of serving delicious meals that are thoughtfully-sourced, scratch-made,
                                and
                                affordable while welcoming all who come through our doors."
                            </p>
                            <h4>Best Selling Products</h4>
                            <div class="products">
                                <div class="sub">
                                    <a href="https://kerbeylanecafe.com/starters-queso">
                                        <figure>
                                            <img src="./products/kerbey/Kerbey%20Queso%20.jpg" alt="kerbey queso">
                                            <figcaption>Kerbey Queso</figcaption>
                                        </figure>
                                    </a>
                                    <a href="https://kerbeylanecafe.com/breakfast">
                                        <figure>
                                            <img src="./products/kerbey/Crispy%20chicken%20bene.jpg"
                                                alt="Crispy Chicken Benedict">
                                            <figcaption>Crispy Chicken Benedict</figcaption>
                                        </figure>
                                    </a>
                                    <a href="https://kerbeylanecafe.com/lunch-dinner">
                                        <figure>
                                            <img src="./products/kerbey/Chx%20pesto%20panini.jpg"
                                                alt="Chicken Pesto Panini">
                                            <figcaption>Chicken Pesto Panini</figcaption>
                                        </figure>
                                    </a>
                                    <a href="https://kerbeylanecafe.com/desserts">
                                        <figure>
                                            <img src="./products/kerbey/brownie.jpg" alt="Fudge Brownie Sundae">
                                            <figcaption>Fudge Brownie Sundae</figcaption>
                                        </figure>
                                    </a>
                                    <a href="https://kerbeylanecafe.com/breakfast">
                                        <figure>
                                            <img src="./products/kerbey/Single%20cake%20%25282%2529-2.jpg"
                                                alt="Vegan Pancakes">
                                            <figcaption>Vegan Pancakes</figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="pgControlsContainer">
                        <button id="prevPage" class="pgControl">Prev</button>
                        <span id="pgInfo">
                            Page <span id="pgNum">1</span> of <span id="pgMaxNum">1</span>
                        </span>
                        <button id="nextPage" class="pgControl">Next</button>
                    </div>
                </div>
                <!-- NEW FILTERS -->
                <div class="filterContainer" id="filterContainer">
                    <div class="filterOption">
                        <!-- ALL -->
                        <input type="checkbox" class="filterbtn" value="store-feature" id="All" checked="true"><label for="All">All</label>
                    </div>
                    <!-- ALL COLLAPSE -->
                    <button type="button" class="collapsible">all</button>
                    <!-- INSIDE ALL COLLAPSE -->
                    <div class="collapsecontent">
                        <div class="filterOption">
                            <!-- RETAIL -- for= was originally "AllRetail" -->
                            <input type="checkbox" class="filterbtn" value="retail" id="Retail"><label for="Retail">Retail</label>
                        </div>
                        <!-- JEWELRY -->
                        <div class="filterOption">
                            <!-- RETAIL -->
                            <input type="checkbox" class="filterbtn" value="jewelry" id="Jewelry"><label for="Jewelry">Jewelry</label>
                        </div>
                        <div class="filterOption">
                            <!-- BOUTIQUE -->
                            <input type="checkbox" class="filterbtn" value="boutique" id="Boutique"><label for="Boutique">Boutique</label>
                        </div>
                        <div class="filterOption">
                            <!-- FOOD -->
                            <input type="checkbox" class="filterbtn" value="food" id="Food"><label for="Food">Food</label>
                        </div>
                        <div class="filterOption">
                            <!-- ART -->
                            <input type="checkbox" class="filterbtn" value="art" id="Art"><label for="Art">Art</label>
                        </div>
                        <div class="filterOption">
                            <!-- COSMETICS -->
                            <input type="checkbox" class="filterbtn" value="cosmetics" id="Cosmetics"><label for="Cosmetics">Cosmetics</label>
                        </div>
                        <div class="filterOption">
                            <!-- SNACKS -->
                            <input type="checkbox" class="filterbtn" value="snacks" id="Snacks"><label for="Snacks">Snacks</label>
                        </div>
                        <div class="filterOption">
                            <!-- DRINKS -->
                            <input type="checkbox" class="filterbtn" value="drinks" id="Drinks"><label for="Drinks">Drinks</label>
                        </div>
                        <div class="filterOption">
                            <!-- PETS -->
                            <input type="checkbox" class="filterbtn" value="pets" id="Pets"><label for="Pets">Pets</label>
                        </div>
                        <div class="filterOption">
                            <!-- DESSERTS -->
                            <input type="checkbox" class="filterbtn" value="desserts" id="Desserts"><label for="Desserts">Desserts</label>
                        </div>
                        <div class="filterOption">
                            <!-- TOYS -->
                            <input type="checkbox" class="filterbtn" value="toys" id="Toys"><label for="Toys">Toys</label>
                        </div>
                    </div>
                    <!-- For myself: would this script tag work if on a different tab level? -->
                    <script src="collapsible.js"></script>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <hr />
        <p><a href="mailto:julianwearden@utexas.edu">Julian Wearden</a> •
            <a href="mailto:JoeySamfield@gmail.com">Max Samfield</a> •
            <a href="mailto:maxwellkret@gmail.com">Maxwell Kretschmer</a> •
            <a href="mailto:vlh546@utexas.edu">Vincent Hochstein</a>
        </p>
        <p>Group 29 | 03.07.2022</p>
    </footer>
</body>
<script src="filter.js" defer="true"></script>

</html>