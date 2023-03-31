<?php
session_start();
error_reporting(0);
include('../includes/config.php');
if (strlen($_SESSION['alogin']) == 0) {
    header('location:login.php');
} else {

    if (isset($_POST['blogBTN'])) {
        $title = $_POST['title'];

        // $string = $result->title;
        $slug = strtolower(preg_replace('/[^a-zA-Z0-9\-]/', '', preg_replace('/\s+/', '-', $title)));



        $content = $_POST['content'];
        $authername = $_POST['autherName'];
        $category = $_POST['category'];
        $folder = '../../uploads/';
        $file = $folder . basename($_FILES["thumb"]["name"]);
        move_uploaded_file($_FILES['thumb']['tmp_name'], $file);
        $thumb = basename($_FILES["thumb"]["name"]);

        $file2 = $folder . basename($_FILES["blogimg"]["name"]);
        move_uploaded_file($_FILES['blogimg']['tmp_name'], $file2);
        $blogimage = basename($_FILES["blogimg"]["name"]);

        $status = '1';
        $sql = "INSERT INTO blog(title,content,autherName,thumbnail,image,status,slug,category) VALUES (:title ,'" . $content . "','" . $authername . "','" . $thumb . "','" . $blogimage . "','" . $status . "','" . $slug . "','" . $category . "')";
        // print_r($sql);
        // exit();
        $query = $dbh->prepare($sql);
        $query->bindParam(':title', $title, PDO::PARAM_STR);
        $result = $query->execute();
        if ($query->rowCount() > 0) {
            echo '<script>alert("Success")</script>';
            echo '<script>window.location = "blog.php";</script>';
        } else {
            echo '<script>alert("something went wrong please try again")</script>';
            echo '<script>window.location = "blog.php";</script>';
        }
    }
?>




    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Admin New Insight | Muciri Village</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="" />
        <meta name="keywords" content="">
        <meta name="author" content="Phoenixcoded" />
        <!-- Favicon icon -->
        <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">

        <!-- vendor css -->
        <link rel="stylesheet" href="../assets/css/style.css">
        <script src="../ckeditor_4.19.1_standard/ckeditor/ckeditor.js"> </script>



    </head>

    <body class="">
        <!-- [ Pre-loader ] start -->
        <div class="loader-bg">
            <div class="loader-track">
                <div class="loader-fill"></div>
            </div>
        </div>
        <!-- [ Pre-loader ] End -->
        <?php include("../partials/nav.php") ?>
        <!-- [ Header ] start -->
        <?php include("../partials/header.php") ?>



        <!-- [ Main Content ] start -->
        <div class="pcoded-main-container">
            <div class="pcoded-content">
                <!-- [ breadcrumb ] start -->
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="page-header-title">
                                    <h5 class="m-b-10">New Insight</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ breadcrumb ] end -->
                <!-- [ Main Content ] start -->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Create New Insight</h5>
                        </div>
                        <div class="card-body">
                            <form class="forms-sample" enctype="multipart/form-data" method="POST">
                                <div class="form-group">
                                    <label for="inputAddress">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Insight Title" required>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Thumbnail (1920x1280 px)</label>
                                        <input type="file" class="form-control" id="thumb" name="thumb" accept="image/gif, image/png, image/jpg, image/jpeg" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Blog Image (1920x1280 px)</label>
                                        <input type="file" class="form-control" id="blogimg" name="blogimg" accept="image/gif, image/png, image/jpg, image/jpeg" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Auther Name</label>
                                        <input type="text" class="form-control" id="autherName" name="autherName" placeholder="Auther Name" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Category</label>
                                        <select name="category" id="category" class="form-control" placeholder="Category" required>
                                            <?php
                                            $sql = "SELECT * from category ";
                                            $query = $dbh->prepare($sql);
                                            $query->execute();
                                            $results = $query->fetchAll(PDO::FETCH_OBJ);

                                            if ($query->rowCount() > 0) {
                                                foreach ($results as $result) {
                                            ?>

                                                    <option value="<?php echo  $result->category ?>">
                                                        <?php echo  $result->category ?></option>

                                            <?php }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputAddress2">Content</label>
                                    <textarea class="form-control" id="content" name="content" rows="3" required></textarea>
                                </div>
                                <button name="blogBTN" id="blogBTN" type="submit" class="btn  btn-primary">Submit</button>
                            </form>
                            <script>
                                CKEDITOR.replace('content');
                                // CKEDITOR.replace('title');
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Main Content ] end -->
        </div>

        <!-- Required Js -->
        <script src="../assets/js/vendor-all.min.js"></script>
        <script src="../assets/js/plugins/bootstrap.min.js"></script>
        <script src="../assets/js/pcoded.min.js"></script>

        <!-- Apex Chart -->
        <script src="../assets/js/plugins/apexcharts.min.js"></script>


        <!-- custom-chart js -->
        <script src="../assets/js/pages/dashboard-main.js"></script>
    </body>

    </html>
<?php }
?>