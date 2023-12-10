<?php
require_once('./views/pages/includes/header.php');
require_once('./views/pages/includes/nave.php');
global $pageData;
//var_dump($pageData);

?>

<main>
    <section>
        <div class="registerfrm">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <center>
                            <h3 class="mb-3">LOGIN</h3>
                        </center>
                        <form method="post">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"><i class="bi bi-envelope-at-fill"></i>
                                    <b>UserName</b></label>
                                <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="username">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label"><i class="bi bi-lock-fill"></i>
                                    <b>Password</b></label>
                                <input type="password" name="pwd" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" name="connexion" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>