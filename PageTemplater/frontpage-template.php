<?php
/*
 * Template Name: Front Page
 * Description: A Page Template with a darker design.
 */
?>
<?php get_header() ?>

    <div class="d-flex">

        <div class="home-page">  
            <h1>La boutique vegan en ligne</h1>
            <a href="#text-home">
               <button class="homebutton"><i class="fas fa-angle-double-down" style="color: #d3b28b;"></i></button>
            </a>
        </div>

    </div>

    <div id="text-home">
        <br/>
        <h2 style="color:#94b25f;">NOS ENGAGEMENTS</h2>
        <div class="row">
        <div class="col-4"></div>
        <div class="col-6">
            <table>
                <tr>
                    <th></th>
                    <th class="font-styling">Tous nos produits respectent au moins une de ces caractéristiques :</th>
                </tr>
                <tr>
                    <td><i class="fas fa-leaf" style="color:#94b25f;"></i></td>
                    <td>Vegan</td>
                </tr>
                <tr>
                    <td><i class="fas fa-leaf" style="color:#94b25f;"></i></td>
                    <td>Sans gras trans / sirop à taux de glucose élevé</td>
                </tr>
                <tr>
                    <td><i class="fas fa-leaf" style="color:#94b25f;"></i></td>
                    <td>Pas de substances cancérigènes</td>
                </tr>
                <tr>
                    <td><i class="fas fa-leaf" style="color:#94b25f;"></i></td>
                    <td>Aucun arôme ou colorant artificiel</td>
                </tr>
                <tr>
                    <td><i class="fas fa-leaf" style="color:#94b25f;"></i></td>
                    <td>Sans lactose</td>
                </tr>
                <tr>
                    <td><i class="fas fa-leaf" style="color:#94b25f;"></i></td>
                    <td>Sans OGM</td>
                </tr>
                <tr>
                    <td><i class="fas fa-leaf" style="color:#94b25f;"></i></td>
                    <td>100% naturel</td>
                </tr>
                <tr>
                    <td><i class="fas fa-leaf" style="color:#94b25f;"></i></td>
                    <td>Sans sucres ajoutés</td>
                </tr>
            </table>

            </div>
        </div>
    </div>

    <div id="box">
        <br/>
        <h2 style="color: #67615a;">DÉCOUVREZ LA BOX VEGAN BY KEENETNOA</h2>
        <br/>
        <p style="margin-right: 20%; margin-left: 20%; font-size: 20px; color: #67615a;">
            <strong>On vous y fait découvrir 13 gourmandises vegan : </strong><strong>boissons, snacks sucrés ou salés, épicerie originale… 
            De quoi satisfaire vos papilles tous les mois.</strong>
        </p>
        <p style="margin-right: 20%; margin-left: 20%; font-size: 20px; color: #67615a;">
            <strong>En plus la livraison est offerte alors pourquoi se priver ?</strong>
        </p>
        <br/>
        <div class="img-food">
            <img class="img-box" src="https://www.slowlyveggie.fr/wp-content/uploads/sites/5/2018/01/box-vegan-11.jpg" alt ="foodbox"/>
        </div>
    </div>


<?php get_footer() ?>