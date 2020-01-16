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
            <div class="col-3 box_wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/img/box.png" class="img_box"/>
                <p class="text-box">13 produits vegans par mois, sélectionnés par nos soins. 
                    Vous pourrez y trouver quelques produits exclusifs ou en avant-première ! 
                </p>
            </div>

            <div class="col-3 computer_wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/img/ordi.png" class="img_computer"/>
                <p class="text-computer">Une box qui s'adapte à vos besoins ! Sans engagements, vous pouvez choisir 
                    de la commander pour 1, 3 ou 6 mois.
                </p>
            </div>

            <div class="col-3 basket_wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/img/panier.png" class="img_basket"/>
                <p class="text-basket">Choisissez votre abonnement, ajoutez le au panier, on s'occupe du reste.</p>
            </div>

            <div class="col-3 truck_wrapper">
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
                    <div class="col-4">
                        <table class="discovery_table">
                            <tr>
                                <th class="font-styling">Discovery</th>
                            </tr>
                            <tr>
                                <td>
                                    <h4>29€</h4>
                                </td>
                            </tr>
                            <tr>
                                <td>Sans engagement</td>
                            </tr>
                            <tr>
                                <td>Recevez 1 box</td>
                            </tr>
                            <tr></tr>
                            <tr>
                                <td>La box Discovery est parfaite pour les petits curieux ou les amateurs de 
                                    surprise ou encore en cadeau. Vous n’allez plus vous en passer !</td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-primary">Je m'abonne</button>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div class="col-4">
                        <table class="regular_table">
                            <tr>
                                <th class="font-styling">Regular</th>
                            </tr>
                            <tr>
                            <td>
                                <h4>26€</h4>
                            </td>
                            </tr>
                            <tr>
                                <td>Engagement sur trois mois (avec un prélèvement en une seule fois de 78 €)</td>
                            </tr>
                            <tr>
                                <td>Recevez 3 box</td>
                            </tr>
                            <tr>
                                <td style="color: #94b25f;">Economisez 30€</td>
                            </tr>
                            <tr>
                                <td>Avec la Regular, c’est comme fêter son anniversaire pendant 3 mois ! 
                                    L’ensemble des produits est renouvelé chaque mois pour un maximum de gourmandise.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-primary">Je m'abonne</button>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div class="col-4">
                        <table class="premium_table">
                            <tr>
                                <th class="font-styling">Premium</th>
                            </tr>
                            <tr>
                                <td>
                                    <h4>23€</h4>
                                </td>
                            </tr>
                            <tr>
                                <td>Engagement sur 6 mois (Avec un prélèvement en une seule fois de 138€)</td>
                            </tr>
                            <tr>
                                <td>Recevez 6 box</td>
                            </tr>
                            <tr>
                                <td style="color: #94b25f;">Economisez 60€</td>
                            </tr>
                            <tr>
                                <td>Pour les adeptes de la « healthy food » et pour un maximum de confort, commandez 
                                    la box Premium. Craquez et faites vous plaisir sans culpabiliser!
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-primary">Je m'abonne</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

<?php get_footer() ?>