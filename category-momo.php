<?php include('partials-front/menu.php'); ?>

    
    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Momos Menu</h2>
            <?php 
            $sql="SELECT * FROM tbl_momo";
            $res= mysqli_query($conn, $sql);  //executing query
            //count rows
            $count=mysqli_num_rows($res);
            //check food is availale or not
            if($count>0){
                while($row=mysqli_fetch_assoc($res))
                {
                    //get the values
                    $id=$row['id'];
                    $title=$row['title'];
                    $image_name=$row['image_name'];
                    $price=$row['price'];
                    $description=$row['description'];    
                    ?>

                      <div class="food-menu-1">
                <div class="food-menu-img">
                    <?php
                    //check for image
                    if($image_name!=="")
                    {

                        ?>
                        <img src="<?php echo SITEURL;?>images/category/<?php echo $image_name;?>" height="250px" width="150%"/>
                        <?php
                        
                    }
                    else{
                        //image not available
                        echo "<div class='error'>Image not found</div>";
                        
                        
                    }
                    ?>
                </div>

                <div class="feature">
                    <h4><?php echo $title; ?></h4>
                    <p class="food-price">$<?php echo $price; ?></p>
                    <p class="food-desc">
                    <?php echo $description ;?>
                    </p>
                    <br>

                    <a href="<?php echo SITEURL;?>order-momo.php?id=<?php echo $id;?>"class="btn">Order Now</a>
                </div>
            </div>


                     <?php
                }
            }

            ?>
            <div class="clearfix"></div>    

        </div>

    </section>
    <!-- fOOD Menu Section Ends Here -->

    <?php include('partials-front/footer.php'); ?>
   
