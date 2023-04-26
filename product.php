<?php
    include('header.php');
    include('navbar.php');

    include('dbconfig.php');
    $sql = "SELECT * FROM products";
    $query = $dbConn->prepare($sql);
    $query->execute();
    $result = $query->fetchAll();
?>
<section class=" text-center py-5 productbg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Our Products</h1>
</div>
</div>
</div>
</section>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#a2d9ff" fill-opacity="1" d="M0,64L48,90.7C96,117,192,171,288,176C384,181,480,139,576,128C672,117,768,139,864,176C960,213,1056,267,1152,266.7C1248,267,1344,213,1392,186.7L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
<div class="container">
    <div class="row">
        <div class="col-md_12">
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <?php
                    foreach($result as $key =>$value){
                        ?>
                    <div class="col">
                        <div class="card h-100">
                            <img src="images/company.jpg" class="card-img-top" alt="...">
                            <div class=card-body">
                            <h5 class=card-title"><?php echo $value['product_name'];?></h5>
                            <p class="card-title"><?php echo $value['product_description'];?></p>
            
                            <a href="#" class="btn btn-primary btn-sm">See more</a>
                            </div>
                        </div>
                    </div>
<?php } ?>

            </div>
        </div>
     </div>
</div>

<?php include('footer.php');?>