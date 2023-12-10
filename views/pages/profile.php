<?php 

//executer la requete()






global $pageData;

var_dump( $pageData);

?>
<div class="container px-xl-0 px-xxl-3 mt-5">
<div class="row">

            <div class="col-xl-9">

              <h4 class="mb-3">Mon profil </h4>
              <form class="row g-3 mb-9" method="POST">

                <div class="col-12">
                  <div class="form-floating">
                    <input class="form-control" id="floatingInputFirstname" type="text" value="<?php echo $pageData['product']['nom'] ?>" name="nom" placeholder="First name" />
                    <label for="floatingInputFirstname">Nom</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <input class="form-control" id="floatingInputLastname" type="text" value="<?php echo $pageData['product']['prenom'] ?>" name="username" placeholder="use name" />
                    <label for="floatingInputLastname">Prenom</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <input class="form-control" id="floatingInputEmail" type="email" value="<?php echo $pageData['product']['email'] ?>" name="email" placeholder="email" />
                    <label for="floatingInputEmail">User Name</label>
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-floating">
                    <input class="form-control" id="floatingInputPhone" type="text" name="fname" value="<?php echo$pageData['product']['fname'] ?>" placeholder="fname"  />
                    <label for="floatingInputPhone">First Name </label>
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-floating">
                    <input class="form-control" id="floatingInputPhone" type="text" name="fname" value="<?php echo$pageData['product']['lname'] ?>" placeholder="lname"  />
                    <label for="floatingInputPhone">Last Name </label>
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-floating">
                    <input class="form-control" id="floatingInputPhone" type="password" name="fname" value="<?php echo$pageData['product']['pwd'] ?>" placeholder="password"  />
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
                <div class="col-sm-6">
                  <div class="form-floating">
                    <input class="form-control" id="floatingInputZipcode" type="text" name="city" placeholder="city" />
                    <label for="floatingInputZipcode">City</label>
                  </div>
                </div>
                <div class="col-sm-12">
                <div class="col-sm-4">
                  <div class="form-floating">
                    <input class="form-control" id="floatingInputZipcode" type="text" name="zipeCode" placeholder="zip code" />
                    <label for="floatingInputZipcode">Code Postal</label>
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="form-floating">
                    <input class="form-control" id="floatingInputZipcode" type="text" name="street_nb" placeholder="street_nb" />
                    <label for="floatingInputZipcode">Street number</label>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-floating">
                    <input class="form-control" id="floatingInputZipcode" type="text" name="zipeCode" placeholder="street_name" />
                    <label for="floatingInputZipcode">street name</label>
                  </div>
                </div>
                

              
                <div class="col-12 d-flex justify-content-end mt-6">
                  <button class="btn btn-primary" type="submit" name="save" >save</button>
                </div>
              </form>
            </div>
          </div>

          </div>