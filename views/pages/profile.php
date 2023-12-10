 <?php
require_once('./views/pages/includes/header.php');
require_once('./views/pages/includes/nave.php');
//executer la requete()






 global $pageData;

var_dump($pageData);
?>

<div class="container px-xl-0 px-xxl-3 mt-5">
  <div class="row">

    <div class="col-xl-9">

      <h4 class="mb-3">Mon profil </h4>
      <form   class="row g-3 mb-9" method="POST">

        <div class="col-12">
          <div class="form-floating">
          <input class="form-control" id="floatingInputEmail" type="email" value="<?php echo isset($pageData['user']['email']) ? $pageData['user']['email'] : ''; ?>" name="email" placeholder="email" />

            <label for="floatingInputEmail">Email</label>
          </div>
        </div>

        <div class="col-12">
          <div class="form-floating">
          <input class="form-control" id="floatingInputEmail" type="text" value="<?php echo isset($pageData['user']['username']) ? $pageData['user']['username'] : ''; ?>" name="username" placeholder="user name" />
     <label for="floatingInputFirstname">User Name</label>
          </div>
        </div>
    <div class="col-12">
          <div class="form-floating">
            <input class="form-control" id="floatingInputPhone" type="text" name="fname" value="<?php echo $pageData['user']['fname'] ?>" placeholder="first name" />
            <label for="floatingInputPhone">First Name </label>
          </div>
        </div>

        <div class="col-12">
          <div class="form-floating">
            <input class="form-control" id="floatingInputPhone" type="text" name="fname" value="<?php echo $pageData['user']['lname'] ?>" placeholder="last name" />
            <label for="floatingInputPhone">Last Name </label>
          </div>
        </div>

        <div class="col-12">
          <div class="form-floating">
            <input class="form-control" id="floatingInputPhone" type="password" name="fname" value="<?php echo $pageData['user']['pwd'] ?>" placeholder="password" />
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

