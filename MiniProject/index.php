<?php

echo "Hello world";
?>

<!DOCTYPE html>
<html lang="en">
 <?php include require 'components/header.php'?>
<body>
     <div class="container">
         <h1 class="text-center">Enter your feedback here</h1>
         <form class="text-center" method="post" action="">
             <div class="mb-3">
                 <label>
                     <input type="text"
                      class="form-control"
                       name="name"
                      placeholder="Enter your name"
                     />
                 </label>
             </div>
             <div class="mb-3">
                 <label>
                     <input type="email"
                            class="form-control"
                            name="email"
                            placeholder="Enter your email"
                     />
                 </label>
             </div>
             <div class="mb-3">
                 <label>
                     <textarea type="textarea"
                            class="form-control"
                               name="feedback"
                               placeholder="Enter your feedback"
                               rows="3" cols="22.8"
                     > </textarea>
                 </label>
             </div>

             <div class="mb-3">
                 <label>
                     <button value="send" class="btn btn-primary" type="submit">Submit</button>
                 </label>
             </div>
         </form>

      <?php include 'components/footer.php' ?>
     </div>







</body>
</html>

