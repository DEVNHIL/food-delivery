<?php

include "header.php"; 


?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Page Title</title>
<link rel="stylesheet" href="immsys-style.css">
</head> 
<body>







 

<div class="main-immsys main-immsys-content"  style="background: url(immsys-image/im1.jpg);background-size: cover;background-position: center;"> 
       
    <div class="ntr-immsys-child">
      
      
    
        <div class="row-immsys">
            
            <div style="padding: 5%;text-align: center;background: #0f6e38;border-radius:10px;margin-top: 30% !important;">

                <?php $featured_content = new WP_Query( 'p=12345' ); ?>
                        <?php while ($featured_content-> have_posts()) : $featured_content-> the_post();  ?>

                            <?php the_title('<h2 style="font-weight: bold; color: #fff; text-align:center;">','</h2>'); ?>
                                        <p style="color: #fff; margin-bottom: 50px; text-align:center;"> <?php the_excerpt(); ?></p>
                                <br>
                                        <button href="<?php the_permalink(); ?>" class="btn-immsys">READ MORE</button>
        
                <?php endwhile; ?>
            </div>

        </div>

    </div>

</div> <!-- end 1 layer  -->





<div class="main-immsys main-immsys-content" style="background:#f3f3f3;">

    <div class="ntr-immsys-child" style="text-align: left;background: #fff;padding: 35px;">

        <h2 style="margin-bottom: -20px; font-weight:bold;">Lorem ipsum dolor sit amet</h2>
       
        <p style="color: #000;">Lorem ipsum dolor sit amet consectetur adipisicing <br> elit. Tempore quasi ullam amet ipsum. </p>




        




        <div class="row-immsys immsys-two-col" style="text-align:center; padding:20px !important;">

            <?php $featured_content = new WP_Query( 'p=12345' ); ?>
                        <?php while ($featured_content-> have_posts()) : $featured_content-> the_post();  ?>
                        <img src="immsys-image/im1.jpg" alt="" style="width: 100%; border:4px solid #fff;">
                            <?php the_title('<h4 style="font-weight: bold;background: #0f6e38;color: #fff;">','</h4>'); ?>
                            <p style="margin-bottom: 50px;"> <?php the_excerpt(); ?></p>
                            
                                      
                                
                                        <button href="<?php the_permalink(); ?>" class="btn-immsys">READ MORE</button> 
        
            <?php endwhile; ?>
        
        </div>


        <div class="row-immsys immsys-two-col" style="text-align:center; padding:20px !important;">

            <?php $featured_content = new WP_Query( 'p=12345' ); ?>
                        <?php while ($featured_content-> have_posts()) : $featured_content-> the_post();  ?>
                        <img src="immsys-image/im1.jpg" alt="" style="width: 100%; border:4px solid #fff;">
                            <?php the_title('<h4 style="font-weight: bold;background: #0f6e38;color: #fff;">','</h4>'); ?>
                            <p style="margin-bottom: 50px;"> <?php the_excerpt(); ?></p>
                            
                                      
                                
                                        <button href="<?php the_permalink(); ?>" class="btn-immsys">READ MORE</button> 
        
            <?php endwhile; ?>
        
        </div>

        <div class="row-immsys immsys-two-col" style="text-align:center; padding:20px !important;">

            <?php $featured_content = new WP_Query( 'p=12345' ); ?>
                        <?php while ($featured_content-> have_posts()) : $featured_content-> the_post();  ?>
                        <img src="immsys-image/im1.jpg" alt="" style="width: 100%; border:4px solid #fff;">
                            <?php the_title('<h4 style="font-weight: bold;background: #0f6e38;color: #fff;">','</h4>'); ?>
                            <p style="margin-bottom: 50px;"> <?php the_excerpt(); ?></p>
                            
                                      
                                
                                        <button href="<?php the_permalink(); ?>" class="btn-immsys">READ MORE</button> 
        
            <?php endwhile; ?>
        
        </div>

        <div class="row-immsys immsys-two-col" style="text-align:center; padding:20px !important;">

            <?php $featured_content = new WP_Query( 'p=12345' ); ?>
                        <?php while ($featured_content-> have_posts()) : $featured_content-> the_post();  ?>
                        <img src="immsys-image/im1.jpg" alt="" style="width: 100%; border:4px solid #fff;">
                            <?php the_title('<h4 style="font-weight: bold;background: #0f6e38;color: #fff;">','</h4>'); ?>
                            <p style="margin-bottom: 50px;"> <?php the_excerpt(); ?></p>
                            
                                      
                                
                                        <button href="<?php the_permalink(); ?>" class="btn-immsys">READ MORE</button> 
        
            <?php endwhile; ?>
        
        </div>
        




        
        


        
    </div>
    
</div> <!--2 end -->






<div class="main-immsys main-immsys-content" style="background-color: #0f6e38;">
<div class="ntr-immsys-child" style="text-align: center;">
                    <div class="row-immsys" >

                    <?php $featured_content = new WP_Query( 'p=12345' ); ?>
                                        <?php while ($featured_content-> have_posts()) : $featured_content-> the_post();  ?>
                                     
                                            <?php the_title('<h2 style="font-weight: bold; text-align: center; color:#fff;">','</h2>'); ?>
                  

                                    <p style="margin-bottom: 50px;  text-align: center; color:#fff"> <?php the_excerpt(); ?></p>
                                    <button href="<?php the_permalink(); ?>" class="btn-immsys">READ MORE</button>
                                    
                                    </div>
                            
                                    </div>                    
    
        <?php endwhile; ?>
       
       

</div>


</div> <!-- 3 end -->







</body>
</html>