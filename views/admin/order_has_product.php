
<?php
require_once('./views/pages/includes/header.php');
require_once('./views/admin/includes/nav.php');

global $pageData;
//var_dump($pageData);
?>


<div class="container-small">

          <div class="d-flex justify-content-between align-items-end mb-4">
            <h2 class="mt-5 mb-0">Les commandes</h2>

          </div>

          <div class="px-0">
            <div class="table-responsive scrollbar">
              <table class="table fs--1 text-900 mb-0">
                <thead class="bg-200">
                  <tr>
                    <th scope="col" style="width: 24px;"></th>
                    <th scope="col" style="min-width: 60px;">Numero</th>
                    <th scope="col" style="min-width: 60px;">Date</th>
                  <th scope="col" style="min-width: 60px;">Quantite</th>
                    <th class="ps-5" scope="col" style="min-width: 150px;">Prix Total</th>
                    <th class="ps-5" scope="col" style="min-width: 150px;">Client</th>
                    <th scope="col" style="width: 24px;"></th>
                  </tr>
                </thead>
                <tbody>

       




                <?php  foreach ($pageData['order_has_product'] as $commande) { ?>


                  <tr>
                    <td class="border-0"></td>
                    <td class="align-middle"><?php echo $commande['user_order_id']; ?></td>
                    <td class="align-middle">
                      <p class="line-clamp-1 mb-0 fw-semi-bold"><?php echo $commande['product_id']; ?></p>
                    </td>
                   <td class="align-middle ps-5"><?php echo $commande['qtty']; ?>
                   <td class="align-middle ps-5"><?php echo $commande['price	']; ?></td> 
                   <td class="align-middle ps-5"><?php echo $commande['prixTotal']; ?></td>
                   
                    <td class="border-0"></td>
                  </tr>
                  <?php 
                } ?>
                </tbody>
              </table>
            </div>

          </div>

        </div>