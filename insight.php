<?php
include('dash.muciri.village/includes/config.php');
$slug = $_GET['slug'];
// print_r($slug);
// exit();
$sql = "SELECT * from blog where status='1' AND slug='$slug'";
// print_r($sql);
// exit();
$query = $dbh->prepare($sql);
$query->execute();
$userArr = $query->fetchAll(PDO::FETCH_OBJ);
if ($query->rowCount() > 0) {
?>




<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $userArr[0]->slug ?> | Muciri Village</title>

    <!-- CSS FILES -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/templatemo-kind-heart-charity.css" rel="stylesheet">
    <link rel="icon" href="images/logo.png" type="image/x-icon">
</head>

<body>

    <?php include('partials/header.php') ?>

    <main>

        <section class="news-detail-header-section text-center">
            <div class="section-overlay"></div>

            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <h1 class="text-white"><?php echo $userArr[0]->slug ?></h1>
                    </div>

                </div>
            </div>
        </section>

        <section class="news-section section-padding">
            <div class="container">
                <div class="row">

                    <div class=" col-12">
                        <div class="news-block">
                            <div class="news-block-top mb-4">
                                <img src="uploads/<?php echo $userArr[0]->image ?>" class="news-image img-fluid" alt="">
                            </div>
                            <div class="news-block-title mb-2">
                                <h4><?php echo $userArr[0]->title ?></h4>
                            </div>

                            <div class="news-block-info">

                                <div class="news-block-body justify-para">
                                    <p><?php echo $userArr[0]->content ?></p>

                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </section>

    </main>

    <?php include('partials/footer.php') ?>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>
<?php }
?>