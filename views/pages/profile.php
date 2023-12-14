 <?php
  require_once('./views/pages/includes/header.php');
  require_once('./views/pages/includes/nave.php');
  //executer la requete()






  global $viewData;

  //var_dump($viewData['profile']);
  ?>

 <div class="container px-xl-0 px-xxl-3 mt-5">
   <div class="row">

     <div class="col-xl-9">

       <h4 class="mb-3">Mon profil </h4>
       <form class="row g-3 mb-9" method="POST" action="ProfileController.php">

         <div class="col-12">
           <div class="form-floating">
             <input class="form-control" id="floatingInputEmail" type="email" name="email" value="<?php echo isset($viewData['profile']['email']) ? $viewData['profile']['email'] : ''; ?>" placeholder="email" />

             <label for="floatingInputEmail">Email</label>
           </div>
         </div>

         <div class="col-12">
           <div class="form-floating">
             <input class="form-control" id="floatingInputEmail" type="text" name="username" value="<?php echo isset($viewData['profile']['username']) ? $viewData['profile']['username'] : ''; ?>" placeholder="user name" />
             <label for="floatingInputFirstname">User Name</label>
           </div>
         </div>
         <div class="col-12">
           <div class="form-floating">
             <input class="form-control" id="floatingInputPhone" type="text" name="fname" value="<?php echo isset($viewData['profile']['fname']) ? $viewData['profile']['fname'] : ''; ?>" placeholder="first name" />
             <label for="floatingInputPhone">First Name </label>
           </div>
         </div>

         <div class="col-12">
           <div class="form-floating">
             <input class="form-control" id="floatingInputPhone" type="text" name="lname" value="<?php echo isset($viewData['profile']['lname']) ? $viewData['profile']['lname'] : ''; ?>" placeholder="last name" />
             <label for="floatingInputPhone">Last Name </label>
           </div>
         </div>

         <div class="col-12">
           <div class="form-floating">
             <input class="form-control" id="floatingInputPhone" type="password" name="pwd" value="<?php echo isset($viewData['profile']['pwd']) ? $viewData['profile']['pwd'] : ''; ?>" placeholder="password" />
             <label for="floatingInputPhone">Password </label>
           </div>
         </div>


         <div class="col-sm-6 col-md-4">
           <div class="form-floating">
             <select class="form-select" name="province" id="floatingSelectCity">
               <option selected="selected"> Quebec</option>
               <option value="NB">NB</option>
               <option value="ONT">Ontario </option>
             </select>
             <label for="floatingSelectCity">Province</label>
           </div>
         </div>

         <div class="col-sm-6">
           <div class="form-floating">
             <select class="form-select" name="country" id="floatingSelectCountry">
               <option selected="selected"> Canada</option>
               <option value="1">Morrocco</option>
               <option value="2">Cameroun</option>
             </select>
             <label for="floatingSelectCountry">Country</label>
           </div>
         </div>
         <div class="col-sm-12">
           <div class="form-floating">
             <input class="form-control" id="floatingInputZipcode" type="text" name="city" placeholder="city" />
             <label for="floatingInputZipcode">City</label>
           </div>
         </div>
         <div class="col-sm-12">
           <div class="col-sm-12">

             <div class="form-floating">
               <input class="form-control" id="floatingInputZipcode" type="text" name="zipeCode" placeholder="zip code" />
               <label for="floatingInputZipcode">Code Postal</label>
             </div>
           </div>
           <br />
           <div class="col-sm-12">
             <div class="form-floating">
               <input class="form-control" id="floatingInputZipcode" type="text" name="street_nb" placeholder="street_nb" />
               <label for="floatingInputZipcode">Street number</label>
             </div>
           </div>
           <br />
           <div class="col-sm-12">
             <div class="form-floating">
               <input class="form-control" id="floatingInputZipcode" type="text" name="zipeCode" placeholder="street_name" />
               <label for="floatingInputZipcode">street name</label>
             </div>
           </div>



           <div class="col-12 d-flex justify-content-end mt-6">
             <button class="btn btn-primary" type="submit" name="envoyer">save</button>
           </div>
       </form>
     </div>
   </div>

 </div>