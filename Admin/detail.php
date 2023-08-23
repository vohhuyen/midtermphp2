<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="css/style.css">
<?php
include '../MODEL/connect.php';
error_reporting(2);
    $sql = "SELECT*FROM products WHERE id =".$_GET['id'];
    $result = mysqli_query($conn,$sql);
    if(!$result){
        echo $sql;
        die('error');
    }
    else{
        while($row = mysqli_fetch_assoc($result)){
            if ($row['image'] == null || $row['image'] =='')
									{
										$thumbImage = "";
									} else {
										$thumbImage = "../images/" .$row['image'];
									}
								?>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="detail-product">
                        <div class="row">
                            <div class="col-md-5 col-sm-6 col-xs-12">
                                <div class="product-frame">
                                    <div class="" style=margin-bottom: 20px; margin-top: 10px;>
                                        <img src="<?php echo $thumbImage; ?>" width="100%" height="450" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-7 col-xs-6 col-xs-12">
                                <h2><?php echo $row['name']; ?></h2>
                                <hr>
                                <?php
                                    if($row['saleprice']>0){
                                        $gia = $row['price'] - ($row['price']/100);
                                    
                                ?>
                                    <p class="price">Giá củ: <?php echo $row['price']; ?><sup>đ</sup> </p>
                                    <p class="price">Giá giảm còn: <?php echo $gia; ?><sup>đ</sup> </p>
                                <?php 
                                    } else
                                    {
                                ?>
                                    <p class="price">Giá san pham: <?php echo $row['price']; ?><sup>đ</sup> </p>
                                <?php 
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        }
    }


?>