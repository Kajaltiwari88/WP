<?php include('partials-front/menu.php'); ?>

<marquee direction="up" class="mar text-center">WELCOME TO KHAANA KHAZANA RESTAURANT</marquee>

    <?php 
      if(isset($_SESSION['order'])){
        echo $_SESSION['order'];
        unset($_SESSION['order']);
    }

    if(isset($_SESSION['add'])){
        echo $_SESSION['add'];
        unset($_SESSION['add']);
    }
    ?>
<!-- CAtegories Section Starts Here -->
<section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Foods</h2>

          
            <div class="box-3 float-container">
                <img src="images/pizza.jpg" alt="Pizza" height="300px" width="100%">

                <a href="category-food.php">  <h3 class="float-text text-white">Pizza</h3></a>
            </div>

           
            <div class="box-3 float-container">
                <img src="images/burger.jpg" alt="Burger" height="300px" width="100%">

                <a href="category-burger.php"> <h3 class="float-text text-white">Burger</h3></a>
            </div>
            

           
            <div class="box-3 float-container">
                <img src="images/momo.jpg" alt="Momo" height="300px" width="100%">

                <a href="category-momo.php">  <h3 class="float-text text-white">Momo</h3> </a>
            </div>
           

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->

    <?php include('partials-front/footer.php'); ?>
   
