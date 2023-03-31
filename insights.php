<?php include('dash.muciri.village/includes/config.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Muciri Village</title>

    <!-- CSS FILES -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <link href="css/bootstrap-icons.css" rel="stylesheet" />

    <link href="css/templatemo-kind-heart-charity.css" rel="stylesheet" />
    <link rel="icon" href="images/logo.png" type="image/x-icon">
</head>
<?php include('partials/header.php') ?>

<body id="section_1">
    <main>

        <section class="section-padding" id="section_3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12 text-center mb-4">
                        <h2>Insights</h2>
                    </div>
                    <?php
                    $cnt = 1;
                    $sql = "SELECT * from blog ORDER BY `blog`.`date` DESC;";
                    $query = $dbh->prepare($sql);
                    $query->execute();
                    $results = $query->fetchAll(PDO::FETCH_OBJ);

                    if ($query->rowCount() > 0) {
                        foreach ($results as $result) {
                    ?>

                            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                <div class="custom-block-wrap">
                                    <img src="uploads/<?php echo $result->image ?>" class="custom-block-image img-fluid" alt="" />

                                    <div class="custom-block">
                                        <div class="custom-block-body">
                                            <h5 class="mb-3"><?php
                                                                $title =  substr($result->title, 0, 65);
                                                                echo $title ?>...</h5>
                                        </div>

                                        <a href="insight.php?slug=<?php echo $result->slug ?>" class="custom-btn btn">Read
                                            More</a>
                                    </div>
                                </div>
                            </div>
                    <?php }
                    } ?>

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