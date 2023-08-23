<?php
    include '../MODEL/connect.php';
    $prd = 0;
    if (isset($_SESSION['cart']))
    {
        $prd = count($_SESSION['cart']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Fashion MyLiShop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Fashion MyLiShop - fashion mylishop"/>
    <meta name="description" content="Fashion MyLiShop - fashion mylishop" />
    <meta name="keywords" content="Fashion MyLiShop - fashion mylishop" />
    <meta name="author" content="Hôih My" />
    <meta name="author" content="Y Blir" />
    <link rel="icon" type="image/png" href="images/logohong.png">
    
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" type="text/css" href="admin/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- customer js -->
    <script src='js/wow.js'></script>
    <script type="text/javascript" src="js/mylishop.js"></script>
    <!-- customer css -->
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
    <!-- button top -->
    <a href="#" class="back-to-top"><i class="fa fa-arrow-up"></i></a>

    <!-- background -->
    <!-- <div class="container-fluid">
        <div id="bg">
            <?php
                $sql = "SELECT image FROM slides WHERE status=1";
                $result = mysqli_query($conn,$sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    if ($row['image'] == null || $row['image'] =='')
									{
										$thumbImage = "";
									} else {
										$thumbImage = "../images/" .$row['image'];
									}
            ?>

                <img width="100%" height="100%" src="<?php echo $thumbImage; ?>" alt="">
            <?php } ?>
        </div>
    </div>/background -->

    <!-- Header -->
    <!-- <?php include("model/header.php"); ?> -->
    <!-- /header -->

    <div class="main">



        <!-- slide -->
        <!-- <?php include("model/slide.php"); ?> -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
            <div class="item active">
                <img src="../images/images/slide/slide-2.jpg" alt="" style="width:100%; height: 700px;">
            </div>
            <div class="item">
                <img src="../images/images/slide/slide-3.jpg" alt="" style="width:100%; height: 700px;">
            </div>
            <div class="item">
                <img src="../images/images/slide/slide-4.jpg" alt="" style="width:100%; height: 700px;">
            </div>
            <div class="item">
                <img src="../images/images/slide/slide-5.jpg" alt="" style="width:100%; height: 700px;">
            </div>
            </div>

            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
                            

        <!-- class="clearfix" -->

        <!-- Banner -->
            <!-- <?php include("model/banner.php"); ?> -->
        <!-- /banner -->

        <!-- Content -->
        <div class="container">
        	<div class="row">
            	<div class="col-md-12 col-sm-12 col-xs-12">
                	<div class="product-main">

                        <!-- sản phẩm mới -->
                    	<div class="title-product-main">
                        	<h3 class="section-title">Sản phẩm mới</h3>
                    	</div>
                        <div class="content-product-main">
                            <div class="row">
                                <?php
                                    $sql = "SELECT id,image,name,price FROM products WHERE category_id=3 AND status = 0";
                                    $result = mysqli_query($conn,$sql);
                                    
                                    while ($kq = mysqli_fetch_assoc($result)) {
                                        if ($kq['image'] == null || $kq['image'] =='')
									{
										$thumbImage = "";
									} else {
										$thumbImage = "../images/" .$kq['image'];
									}
                                        
                                ?>                        
                                        <div class="col-md-3 col-sm-6 text-center">
                                            <div class="thumbnail">
                                                <div class="hoverimage1">
                                                    <img src= "<?php echo $thumbImage; ?>" alt="Generic placeholder thumbnail" width="100%" height="300">
                                                </div>
                                                <div class="name-product">
                                                    <?php echo $kq['name']; ?>
                                                </div>
                                                <div class="price">
                                                    Giá: <?php echo $kq['price']; ?><sup> đ</sup>
                                                </div>
                                                <div class="product-info">
                                                    <a href="addcart.php?id=<?php echo $kq['id']; ?>">
                                                        <button type="button" class="btn btn-primary">
                                                            <label style="color: red;">&hearts;</label> Mua hàng  <label style="color: red;">&hearts;</label>
                                                        </button>
                                                    </a>
                                                    <a href="detail.php?id=<?php echo $kq['id']; ?>">
                                                        <button type="button" class="btn btn-primary">
                                                            <label style="color: red;">&hearts;</label> Chi Tiết <label style="color: red;">&hearts;</label>
                                                        </button>
                                                    </a>
                                                </div><!-- /product-info -->
                                            </div><!-- /thumbnail -->
                                        </div><!-- /col -->
                                    <?php } ?>
                            </div><!-- /row -->
                        </div><!-- /sản phẩm mới -->

                        <!-- Thời Trang Nam -->
                        <div class="title-product-main">
                            <h3 class="section-title">Thời Trang Nam</h3>
                        </div>
                        <div class="content-product-main">
                            <div class="row">
                                <?php
                                    $sql = "SELECT id,image,name,price FROM products WHERE category_id=1 LIMIT 8";
                                    $result = mysqli_query($conn,$sql);
                                    
                                    while ($kq = mysqli_fetch_assoc($result)) {
                                        if ($kq['image'] == null || $kq['image'] =='')
									{
										$thumbImage = "";
									} else {
										$thumbImage = "../images/" .$kq['image'];
									}
                                        
                                ?>                        
                                        <div class="col-md-3 col-sm-6 text-center">
                                            <div class="thumbnail">
                                                <div class="hoverimage1">
                                                    <img src= "<?php echo $thumbImage; ?>" alt="Generic placeholder thumbnail" width="100%" height="300">
                                                </div>
                                                <div class="name-product">
                                                    <?php echo $kq['name']; ?>
                                                </div>
                                                <div class="price">
                                                    Giá: <?php echo $kq['price']; ?><sup> đ</sup>
                                                </div>
                                                <div class="product-info">
                                                    <a href="addcart.php?id=<?php echo $kq['id']; ?>">
                                                        <button type="button" class="btn btn-primary">
                                                            <label style="color: red;">&hearts;</label> Mua hàng  <label style="color: red;">&hearts;</label>
                                                        </button>
                                                    </a>
                                                    <a href="detail.php?id=<?php echo $kq['id'] ?>">
                                                        <button type="button" class="btn btn-primary">
                                                            <label style="color: red;">&hearts;</label> Chi Tiết <label style="color: red;">&hearts;</label>
                                                        </button>
                                                    </a>
                                                </div><!-- /product-info -->
                                            </div><!-- /thumbnail -->
                                        </div><!-- /col -->
                                    <?php } ?>
                            </div><!-- /row -->
                        </div><!-- /Thời Trang Nam -->

                        <!-- Thời Trang Nữ -->
                        <div class="title-product-main">
                            <h3 class="section-title">Thời Trang Nữ</h3>
                        </div>
                        <div class="content-product-main">
                            <div class="row">
                                <?php
                                    $sql = "SELECT id,image,name,price FROM products WHERE category_id=2 LIMIT 8";
                                    $result = mysqli_query($conn,$sql);
                                    
                                    while ($kq = mysqli_fetch_assoc($result)) {
                                        if ($kq['image'] == null || $kq['image'] =='')
									{
										$thumbImage = "";
									} else {
										$thumbImage = "../images/" .$kq['image'];
									}
                                        
                                ?>                        
                                        <div class="col-md-3 col-sm-6 text-center">
                                            <div class="thumbnail">
                                                <div class="hoverimage1">
                                                    <img src= "<?php echo $thumbImage; ?>" alt="Generic placeholder thumbnail" width="100%" height="300">
                                                </div>
                                                <div class="name-product">
                                                    <?php echo $kq['name']; ?>
                                                </div>
                                                <div class="price">
                                                    Giá: <?php echo $kq['price']; ?><sup> đ</sup>
                                                </div>
                                                <div class="product-info">
                                                    <a href="addcart.php?id=<?php echo $kq['id']; ?>">
                                                        <button type="button" class="btn btn-primary">
                                                            <label style="color: red;">&hearts;</label> Mua hàng  <label style="color: red;">&hearts;</label>
                                                        </button>
                                                    </a>
                                                    <a href="detail.php?id=<?php echo $kq['id'] ?>">
                                                        <button type="button" class="btn btn-primary">
                                                            <label style="color: red;">&hearts;</label> Chi Tiết <label style="color: red;">&hearts;</label>
                                                        </button>
                                                    </a>
                                                </div><!-- /product-info -->
                                            </div><!-- /thumbnail -->
                                        </div><!-- /col -->
                                    <?php } ?>
                            </div><!-- /row -->
                        </div><!-- /Thời Trang Nữ -->
            
                	</div> <!-- /product-main -->
            	</div> <!-- /col -->

            </div><!-- /row -->
        </div><!-- /container -->
    </div>
    <!-- /main -->

    <!-- partner -->
    <div class="container">
        <div class="title-product-main">
            <h3 class="section-title">Hãng Thời Trang Nổi Tiếng</h3>
        </div>
        <!-- <?php include("model/partner.php"); ?> -->
    </div>
    <!-- /partner -->

    <!-- footer -->
    <div class="container">
        <!-- <?php include("model/footer.php"); ?> -->
    </div>
    <!-- /footer -->

<script>
    new WOW().init();
</script>
<script type="text/javascript" src="https://forum.vietdesigner.net/data/codes/snowstorm.js"></script>
</body>
</html>