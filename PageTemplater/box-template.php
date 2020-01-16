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
                <p class="text-box">C'est une box mensuelle avec 13 produits vegans, sélectionnés par nos soins. 
                    Vous pourrez y trouver quelques produits exculsifs à la box ou en avant-première ! 
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
                    </div>
                    <div class="col-4">
                    </div>
                    <div class="col-4">
                    </div>
                </div>
            </div>
        </div>

    </div>

<?php get_footer() ?>