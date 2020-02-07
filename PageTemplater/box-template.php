<?php
/*
 * Template Name: Box Page
 * Description: A Page Template with a darker design.
 */
?>
<?php get_header() ?>

    <div class="box-page">

        <h2 style="text-transform: uppercase; color:#94b25f; margin-top: 5%; margin-bottom: 5%;">La box vegan by KeenetNoa, c'est quoi ?</h2>

        <div class="row text-center">
            <div class="col-lg-3 col-md-6 col-sm-12 box_wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/img/box.png" class="img_box"/>
                <p class="text-box">13 produits vegans par mois, sélectionnés par nos soins. 
                    Vous pourrez y trouver quelques produits exclusifs ou en avant-première ! 
                </p>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 computer_wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/img/ordi.png" class="img_computer"/>
                <p class="text-computer">Une box qui s'adapte à vos besoins ! Sans engagements, vous pouvez choisir 
                    de la commander pour 1, 3 ou 6 mois.
                </p>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 basket_wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/img/panier.png" class="img_basket"/>
                <p class="text-basket">Choisissez votre abonnement, ajoutez le au panier, on s'occupe du reste.</p>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 truck_wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/img/camion.png" class="img_truck"/>   
                <p class="text-truck">En plus, la livraison est gratuite en point relais ! Alors 
                    qu'est ce que vous attendez ?</p>
            </div>
        </div>
        <br/>
        <div class="background-secondary">
            <div class="sub_wrapper">
                <br/>
                <h2 style="text-transform: uppercase; color:#94b25f; margin-bottom: 5%;">
                    Choisissez votre abonnement
                </h2>

                <div class="row">
                    <div class="col-md-12 col-lg-4">
                        <table class="discovery_table">
                            <tr>
                                <th class="font-styling">Discovery</th>
                            </tr>
                            <tr>
                                <td>
                                    <h4 class="woocommerce-Price-amount amount">29€</h4>
                                </td>
                            </tr>
                            <tr>
                                <td>Sans engagement</td>
                            </tr>
                            <tr>
                                <td>Recevez 1 box</td>
                            </tr>
                            <tr>
                                <td>La box Discovery est parfaite pour les petits curieux ou les amateurs de 
                                    surprise ou encore en cadeau. Vous n’allez plus vous en passer !</td>
                            </tr>
                            <tr>
                                <td>
                                    <form class="cart" method="post" enctype="multipart/form-data">
                                        <button type="submit" name="add-to-cart" class="single_add_to_cart_button button alt btn btn-primary">Je m'abonne</button>
                                    </form>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div class="col-md-12 col-lg-4">
                        <table class="regular_table">
                            <tr>
                                <th class="font-styling">Regular</th>
                            </tr>
                            <tr>
                            <td>
                                <h4 class="woocommerce-Price-amount amount">26€</h4>
                            </td>
                            </tr>
                            <tr>
                                <td>Prélèvement en une seule fois de 78 €</td>
                            </tr>
                            <tr>
                                <td>Recevez la box pendant 3 mois</td>
                            </tr>
                            <tr>
                                <td>Avec la Regular, c’est comme fêter son anniversaire pendant 3 mois ! 
                                    L’ensemble des produits est renouvelé chaque mois pour un maximum de gourmandise.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <form class="cart" method="post" enctype="multipart/form-data">
                                        <button type="submit" name="add-to-cart" class="single_add_to_cart_button button alt btn btn-primary">Je m'abonne</button>
                                    </form>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div class="col-md-12 col-lg-4">
                        <table class="premium_table">
                            <tr>
                                <th class="font-styling">Premium</th>
                            </tr>
                            <tr>
                                <td>
                                    <h4 class="woocommerce-Price-amount amount">23€</h4>
                                </td>
                            </tr>
                            <tr>
                                <td>Prélèvement en une seule fois de 138€</td>
                            </tr>
                            <tr>
                                <td>Recevez la box pendant 6 mois</td>
                            </tr>
                            <tr>
                                <td>Pour les adeptes de la « healthy food » et pour un maximum de confort, commandez 
                                    la box Premium. Craquez et faites vous plaisir sans culpabiliser!
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <form class="cart" method="post" enctype="multipart/form-data">
                                        <button type="submit" name="add-to-cart" class="single_add_to_cart_button button alt btn btn-primary">Je m'abonne</button>
                                    </form>
                                </td>
                            </tr>
                        </table>

                        <!-- Mobile Version -->

                        <div class="accordion" id="accordionMobile">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <h2 class="mb-0" style="font-size: 23px;">Discovery</h2>
                                    <h4 style="font-size: 20px;">29€</h4>
                                    <i class="fas fa-chevron-down"></i>
                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionMobile">
                                <div class="card-body">
                                    <table>
                                    <tr class="home-table">
                                        <td>Sans engagement</td>
                                    </tr>
                                    <tr class="home-table">
                                        <td>Recevez 1 box</td>
                                    </tr>
                                    <tr class="home-table">
                                        <td>La box Discovery est parfaite pour les petits curieux ou les amateurs de 
                                            surprise ou encore en cadeau. Vous n’allez plus vous en passer !</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <form class="cart" method="post" enctype="multipart/form-data">
                                                <button type="submit" name="add-to-cart" class="single_add_to_cart_button button alt btn btn-primary">Je m'abonne</button>
                                            </form>
                                        </td>
                                    </tr>
                                    </table>
                                </div>
                                </div>
                            </div>

                            <br/>

                            <div class="card">
                                <div class="card-header d-inline-flex justify-content-between align-items-center" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    <h2 class="mb-0" style="font-size: 23px;">Regular</h2>
                                    <h4 style="font-size: 20px;">26€</h4>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionMobile">
                                <div class="card-body">
                                    <table>
                                    <tr class="home-table">
                                        <td>Prélèvement en une seule fois de 78 €</td>
                                    </tr>
                                    <tr class="home-table">
                                        <td>Recevez la box pendant 3 mois</td>
                                    </tr>
                                    <tr class="home-table">
                                        <td>Avec la Regular, c’est comme fêter son anniversaire pendant 3 mois ! 
                                            L’ensemble des produits est renouvelé chaque mois pour un maximum de gourmandise.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <form class="cart" method="post" enctype="multipart/form-data">
                                                <button type="submit" name="add-to-cart" class="single_add_to_cart_button button alt btn btn-primary">Je m'abonne</button>
                                            </form>
                                        </td>
                                    </tr>
                                    </table>
                                </div>
                                </div>
                            </div>

                            <br/>

                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    <h2 class="mb-0" style="font-size: 23px;">Premium</h2>
                                    <h4 style="font-size: 20px;">23€</h4>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionMobile">
                                <div class="card-body">
                                    <table>
                                    <tr class="home-table">
                                        <td>Prélèvement en une seule fois de 138€</td>
                                    </tr>
                                    <tr class="home-table">
                                        <td>Recevez la box pendant 6 mois</td>
                                    </tr>
                                    <tr class="home-table"> 
                                        <td>Pour les adeptes de la « healthy food » et pour un maximum de confort, commandez 
                                            la box Premium. Craquez et faites vous plaisir sans culpabiliser!
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <form class="cart" method="post" enctype="multipart/form-data">
                                                <button style="justify-content: center;" type="submit" name="add-to-cart" class="single_add_to_cart_button button alt btn btn-primary">Je m'abonne</button>
                                            </form>
                                        </td>
                                    </tr>                                       
                                    </table>
                                </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

<?php get_footer() ?>