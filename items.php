<?php
session_start();
?>


<?php
require_once('config.php');
require_once('core/controller.Class.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>DIY Kitchen Diaries</title>
     <?php
  include 'links/links.php';
    ?>

    
</head>    

<body>
  <?php
  include 'includes/Navbar.php';
  ?> 
  <main>
    <div class="container text-center">
      <div class="row m-4">
        <h3 class="text-primary display-4 fw-normal">MOMO Recipe</h3>
        <p class="fs-5 text-muted">Delicious MOMO.</p>
      </div>
    </div>
  
  <div class="container">
    <h4>video insert</h4>

     <div class="row">

                <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3 rounded-3 border border-primary">
                   <h5 class="text-uppercase mb-1 font-weight-bold text-danger" style="padding-top : 9px;">Ingredients</h5>
      <ul type="none" style="padding : 9px 9px 9px 9px;">
        <li>4 cups all-purpose flour</li>
        <li>2 1/2 pounds ground chicken thighs</li>
        <li>1 cup chopped fresh cilantro</li>
        <li>1 cup chopped onions</li>
        <li>4 tablespoons minced garlic</li>
        <li>4 tablespoons minced peeled ginger </li>
        <li>2 tablespoons ground cumin</li>
        <li>1 teaspoon ground cinnamon</li>
        <li>Salt and black pepper</li>
      </ul>
                    
                </div>

                

               <div class="col-md-7 col-lg-7 col-xl-7 mx-auto mt-3 rounded-3 border border-primary">
                   <h5 class="text-uppercase mb-1 font-weight-bold text-danger" style="padding-top : 9px;">Direction</h5>
      <ol style="padding : 9px 9px 9px 9px;">
        <li>Mix together the flour and 1 1/2 cups room temperature water in a bowl. Knead the dough well until it is medium-firm and flexible. Cover and let rest for 1 hour.</li>
        <li>Meanwhile, mix together the chicken, cilantro, onions, garlic, ginger, cumin, cinnamon, 2 tablespoons salt and 1/2 teaspoon pepper in a bowl.</li>
        <li>To make the wrappers: Break off 1/2 ounce of dough and forming it into a ball. Place the ball on a flat surface and roll it into a 4-inch round with a rolling pin. Repeat with the remaining dough.</li>
        <li>Spray a steamer pan with cooking spray</li>
        <li>Place a tablespoon of the chicken filling in the middle of a wrapper. Holding the wrapper in your left hand. Use your right thumb and index finger to start pinching the edges of the wrapper together. Pinch and fold until the edges of the circle close up like a little satchel. Place the momo in the prepared steamer pan. Repeat with remaining wrappers and filling.</li>
        <li>Fill the steamer pot halfway with water and bring to a boil. Set the steamer pan with the momos on top of the pot and cover with a tight lid. Steam the momos until cooked, 8 to 9 minutes.</li>
      </ol>
                    
                </div>
      </div>

   <h4>review insert</h4>             
  </div>
  </main>
</body>
</html>

<?php 
    include('includes/footer.php');
?>