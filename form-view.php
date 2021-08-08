<?php // This files is mostly containing things for your view / html ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css"
          rel="stylesheet"/>
    <link href = styles.css rel="stylesheet"/>
    <title>Your fancy store</title>
</head>
<body>
<div class="container">
    <h1 class="justify-center">Place your order</h1>

    <?php
    echo $confirmationMessage ?? '';
    ?>

    <?php // Navigation for when you need it ?>
    <?php echo ' 
        <nav>
            <ul class="nav">
                 <li class="nav-item">
                    <a class="nav-link ' . ($order == 'drinks' ? 'btn btn-primary' : "")  .' " href="index.php?order=drinks">Order Vitamins</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link '. ($order == 'food' ? 'btn btn-primary' : "") .' " href="index.php?order=food">Order Fruit</a>
                </li>
                
            </ul>
        </nav>
        <br>
        <br>
    ';
    ?>
    <?php echo getMostPopularItem() ?>
    <form method="post">

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" class="form-control" value="<?php echo $_POST['email'] ?? '' ?>"/>
            </div>
            <div></div>
        </div>

        <fieldset class="address">
            <legend>Address</legend>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="street">Street:</label>
                    <input type="text"
                           name="street"
                           id="street"
                           class="form-control"
                           value="<?php echo $_SESSION['street'] ?? '' ?>"/>
                </div>
                <div class="form-group col-md-6">
                    <label for="streetnumber">Street number:</label>
                    <input type="text"
                           id="streetnumber"
                           name="streetnumber"
                           class="form-control"
                           value="<?php echo  $_SESSION["streetnumber"] ?? '' ?>"/>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="city">City:</label>
                    <input type="text"
                           id="city"
                           name="city"
                           class="form-control"
                           value="<?php echo $_SESSION['city'] ?? '' ?>"/>
                </div>
                <div class="form-group col-md-6">
                    <label for="zipcode">Zipcode</label>
                    <input type="text"
                           id="zipcode"
                           name="zipcode"
                           class="form-control"
                           value="<?php echo $_SESSION['zipcode'] ?? '' ?>"/>
                </div>
            </div>
        </fieldset>

        <fieldset>
            <legend>Products</legend>
            <?php foreach (${$order} as $i => $product): ?>
                <label>
                    <?php foreach ($drinks $i => $products): ?>
                    <input type="checkbox"
                           value="1"
                           name="products[<?php echo $i ?>]"
                        <?php echo isset($_POST['products'][$i]) ? 'checked ':''; ?>/>
                    <?php echo $product['name'] ?> - &euro; <?php echo number_format($product['price'], 2) ?>
                </label>
                <br />
            <?php endforeach; ?>
        </fieldset>
        <div class="form-row">
            <div class="form-group col-md-6">
                <h5>Estimated delivery date: <?php echo $deliveryTime ?></h5>

            </div>
        </div>
        <div class="delivery-time">
            <h5>Want to have it faster (in 2 days)? Add this option only for 2 &euro; </h5>
            <input type="checkbox" id="deliveryTime" name="deliveryTime" class="form-control"/>
        </div>

        <div class="btn-container">
            <button type="submit" class="btn btn-primary btn-centered">Order!</button>
        </div>


    </form>

    <footer>
        You already ordered <strong>&euro; <?php echo number_format((totalValue(${$order},$deliveryTime) ?? 0.00), 2) ?></strong> in food and drinks.

    </footer>
</div>

<style>
    footer {
        text-align: center;
    }
</style>
</body>
</html>