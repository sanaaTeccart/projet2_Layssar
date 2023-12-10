<?php 
// include "./includes/fonction.php";

// isAuthenticated();
// //executer la requete()
// $prixTotals=0;

// $paniers = getAllPanier();

// $nbrElement=  quantiterPanier();
// include "./includes/header1.php";
// include "./includes/nav.php";


?>



      <!-- ============================================-->
      <!-- <section> begin ============================-->
    
      <section class="pt-5 pb-9">

        <div class="container-small cart">
         
          <h2 class="mb-6">Panier</h2>
          <div class="row g-5">
          
            <div class="col-12 col-lg-9">
              <div id="cartTable" data-list='{"valueNames":["products","color","size","price","quantity","total"],"page":10}'>
                <div class="table-responsive scrollbar mx-n1 px-1">
                  <table class="table fs--1 mb-0 border-top border-200">
                    <thead>
                      <tr>
                        <th class="sort white-space-nowrap align-middle fs--2" scope="col"></th>
                        



                        
                        <th class="sort white-space-nowrap align-middle" scope="col" style="min-width:250px;">name</th>
                        <th class="sort align-middle" scope="col" style="width:80px;">quantity in stock</th>
                        <th class="sort align-middle" scope="col" style="width:150px;">price</th>
                      <th class="sort align-middle ps-5" scope="col" style="width:200px;">Quantity ordred</th>
                        <th class="sort align-middle text-end" scope="col" style="width:250px;">TOTAL</th>
                        <th class="sort text-end align-middle pe-0" scope="col"></th>
                      </tr>
                    </thead>

                    

                    
                    
                    
                    <tbody class="list" id="cart-table-body">

                    <?php foreach ($cart as $id => $quantity) {
                // $voiture = getVoitureById($idVoiture);
                // $prixTotals += prixTotal($voiture['prix'],$quantite);
                ?>
 

                      <tr class="cart-table-row btn-reveal-trigger">
                        <td class="align-middle white-space-nowrap py-0">
                          <div class="border rounded-2"><img src="images/<?php echo $voiture['url_img']; ?>" alt="" width="53" /></div>
                        </td>
                        

                        
                        <td class="products align-middle"><a class="fw-semi-bold mb-0 line-clamp-2" href="#!"><?php echo $voiture['marque']; ?></a></td>
                        <td class="color align-middle white-space-nowrap fs--1 text-900"><?php echo $voiture['model']; ?></td>
                        <td class="size align-middle white-space-nowrap text-700 fs--1 fw-semi-bold"><?php echo $voiture['prix']; ?></td>
                        <td class="price align-middle text-900 fs--1 fw-semi-bold text-end"><?php echo $voiture['Annee']; ?></td>
                        <td class="quantity align-middle fs-0 ps-5"><?php echo  $quantite; ?>
                        </td>
                        <td class="total align-middle fw-bold text-1000 text-end"><?php echo  prixTotal($voiture['prix'],$quantite)?></td>
                        <td class="align-middle white-space-nowrap text-end pe-0 ps-3">
                        <a href="supprimerPanier.php?id=<?php echo $voiture['idVoiture']; ?>" ><button class="btn btn-sm text-500 hover-text-600 me-2"><span class="fas fa-trash"></span></button></a>
                        </td>
                      </tr>
                      <?php } ?>

                      
                    </tbody>

                    

                  



                  </table>
                </div>
              </div>
            </div>


            <div class="col-12 col-lg-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-between-center mb-3">
                    <h3 class="card-title mb-0">Summary</h3><a class="btn btn-link p-0" href="#!">Edit cart </a>
                  </div>
                  <select class="form-select mb-3" aria-label="delivery type">
                    <option value="cod">Cash on Delivery</option>
                    <option value="card">Card</option>
                    <option value="paypal">Paypal</option>
                  </select>
                  <div>
                    <div class="d-flex justify-content-between">
                      <p class="text-900 fw-semi-bold">Items subtotal :</p>
                      <p class="text-1100 fw-semi-bold"><?php echo  $prixTotals ;?> </p>
                    </div>
                    
                    <div class="d-flex justify-content-between">
                      <p class="text-900 fw-semi-bold">Tax :</p>
                      <p class="text-1100 fw-semi-bold">$<?php echo $tax =($prixTotals*15) /100 ;?></p>
                    </div>
                  
                    
                  </div>
                  
                  <div class="d-flex justify-content-between border-y border-dashed py-3 mb-4">
                    <h4 class="mb-0">Total :</h4>
                    <h4 class="mb-"><?php echo $prixTotals + $tax ;?>$</h4>
                  </div>
                   <form method="POST" action="cart.php">

                  <button type="submit" name="commande" class="btn btn-primary w-100">Commander<span class="fas fa-chevron-right ms-1 fs--2"></span></button>
                  
                  <input type="hidden" name="prixTotal" value="<?php echo  $prixTotals ;?>">  
                  <div id="paypal-payment-button" class="mt-3"></div>
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
                   
        <!-- end of .container-->
        
    </section>
</main>

<script src="https://www.paypal.com/sdk/js?client-id=ATCtU7fFxc7_X0X6IJ0vAg1oZk49psMtr_4RhH0aDO840ia8vSDWoGy_03_H12wMUxBV8xWVoX9Ww3nV&currency=CAD"></script>
<script src="paypal.js"></script>

      <!-- </section> -->




     
