<html lang="en">
<head>
    <meta charset="utf-8">
    <title>EShopper - Bootstrap Shop Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assests/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assests/css/style.css" rel="stylesheet">

    <!-- Icon Bootstrap Online link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!--Blue Color Filter Bootstrap Link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
</head>  

<body>

     <!-- Products Start -->
      
    <div class="container-fluid pt-5" id="products">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Cromā Products</span></h2>
        </div>
         
        <div class="row px-xl-5 pb-3">
            <?php

                include "connection.php";

                $sql = "SELECT * FROM media";

                $result = mysqli_query($con,$sql);

                while($data = mysqli_fetch_array($result))
                {
            ?> 
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                      
                <div class="card product-item border-0 mb-4">
                        <img  src="uploads/<?php echo $data['image']; ?>" style="height: 250px; overflow: hidden;">
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3" style="font-size: 25px; color: darkblue;"><?php echo $data['productname']; ?></h6>
                    <div class="d-flex justify-content-center">
                        <h6 style="font-size: 25px; color: green;">$<?php echo $data['new_price']; ?></h6><h6 class="text-muted ml-2"><del style="font-size: 15px; color: red;">$<?php echo $data['old_price']; ?></del></h6>
                        </div>
                    </div>
                    
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                     </div>
                </div>
            </div>
            <?php
                }
            ?> 

    <!-- Products End -->

    </body>
</html>
