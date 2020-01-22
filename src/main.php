<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>EzyGrocer: Grocery Sharing Made Easy</title>
    <?php include 'head.php' ?>
</head>

<body>
    <!-- header -->
    <?php include 'header.php' ?>

    <div class="container">
        <div class="row display-column mt-3">
            <div class="col display-row">
                <h5>Search Categories</h5>
                <small class="text-info">View more >></small>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col cat cat-1">
                        <desc>Beverages</desc>
                    </div>
                    <div class="col cat cat-2">
                        <desc>Bakery</desc>
                    </div>
                    <div class="col cat cat-3">
                        <desc>Dairy</desc>
                    </div>
                </div>
                <div class="row">
                    <div class="col cat cat-4">
                        <desc>Meat</desc>
                    </div>
                    <div class="col cat cat-5">
                        <desc>Vegetables</desc>
                    </div>
                    <div class="col cat cat-6">
                        <desc>Dry Goods</desc>
                    </div>
                </div>
            </div>
        </div>

        <div class="row display-column mt-3">
            <div class="col display-row">
                <h5>Search Recipes</h5>
                <small class="text-info">View more >></small>
            </div>
            <div class="col">
                <div class="row recipe-carousel">
                    <div class="card" style="width: 25%;">
                        <img class="card-img-top"
                            src="https://www.simplyrecipes.com/wp-content/uploads/2020/01/Asian-Chicken-Noodle-LEAD-2.jpg"
                            alt="Card image cap">
                        <div class="card-body">
                            <div class="card-title">Chicken Udon Soup</div>
                            <p class="card-text">
                                <ul>
                                    <li>Cook time: 15 minutes</li>
                                    <li>Yield: 4 Servings</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                    <div class="card" style="width: 25%;">
                        <img class="card-img-top"
                            src="https://www.simplyrecipes.com/wp-content/uploads/2016/11/2016-12-03-English-Toffee-13-768x1152.jpg"
                            alt="Card image cap">
                        <div class="card-body">
                            <div class="card-title">English Toffee</div>
                            <p class="card-text">
                                <ul>
                                    <li>Cook time: 20 minutes</li>
                                    <li>Yield: About 40 pieces</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                    <div class="card" style="width: 25%;">
                        <img class="card-img-top"
                            src="https://www.simplyrecipes.com/wp-content/uploads/2019/06/Spicy-Fried-Chicken-LEAD-3-768x1075.jpg"
                            alt="Card image cap">
                        <div class="card-body">
                            <div class="card-title">Spicy Fried Chicken</div>
                            <p class="card-text">
                                <ul>
                                    <li>Cook time: 30 minutes</li>
                                    <li>Yield: 4 servings</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                    <div class="card" style="width: 25%;">
                        <img class="card-img-top"
                            src="https://www.simplyrecipes.com/wp-content/uploads/2014/10/french-toast-horiz-a-1200-768x512.jpg"
                            alt="Card image cap">
                        <div class="card-body">
                            <div class="card-title">French Toast</div>
                            <p class="card-text">
                                <ul>
                                    <li>Cook time: 15 minutes</li>
                                    <li>Yield: 4 servings</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                    <div class="card" style="width: 25%;">
                        <img class="card-img-top"
                            src="https://www.simplyrecipes.com/wp-content/uploads/2014/08/banana-bread-vertical-c-1200-768x1152.jpg"
                            alt="Card image cap">
                        <div class="card-body">
                            <div class="card-title">Banana Bread</div>
                            <p class="card-text">
                                <ul>
                                    <li>Cook time: 55 minutes</li>
                                    <li>Yield: Makes one loaf</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                    <div class="card" style="width: 25%;">
                        <img class="card-img-top"
                            src="https://www.simplyrecipes.com/wp-content/uploads/2016/07/2016-08-03-BBQ-Chicken-Bowls-9-768x1151.jpg"
                            alt="Card image cap">
                        <div class="card-body">
                            <div class="card-title">BBQ Chicken Burrito Bowl</div>
                            <p class="card-text">
                                <ul>
                                    <li>Cook time: 10 minutes</li>
                                    <li>Yield: 4 servings</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- footer -->
    <nav class="navbar navbar-light navbar-expand fixed-bottom text-primary bg-light navigation-clean navbar-footer">
        <div class="container container-footer"><button class="navbar-toggler" data-toggle="collapse"><span
                    class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <ul class="menu-footer">
                <li><a href="main.php"><i class="icon ion-android-home"></i></a></li>
                <li><a href="template.php"><i class="icon ion-chatbubble-working"></i></a></li>
                <li><i class="fa fa-shopping-cart"></i></li>
                <li><i class="fa fa-gear"></i></li>
            </ul>
        </div>
    </nav>
    <?php include 'footer.php' ?>

    <script>
        $(document).ready(function () {
            $('.recipe-carousel').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                dots: true,
                arrows: true,
                autoplay: 5000
            });
        });
    </script>
</body>

</html>