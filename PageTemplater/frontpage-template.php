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
            <div class="col-6">
                <img src="https://www.pngitem.com/pimgs/m/160-1609305_vegan-logo-png-vegan-or-vegetarian-symbol-transparent.png" alt="logo-vegan" class="vegan"/>
            </div>
            <div class="col-6">
                <ul style="list-style-type: none; font-size: 20px; margin-top: 15%">
                    <li><i class="fa fa-check" style="color:#94b25f;"></i> Vegan</li>
                    <li><i class="fa fa-check" style="color:#94b25f;"></i> Sans gras trans / sirop à taux de glucose élevé</li>
                    <li><i class="fa fa-check" style="color:#94b25f;"></i> Pas de substances cancérigènes</li>
                    <li><i class="fa fa-check" style="color:#94b25f;"></i> Aucun arôme ou colorant artificiel</li>
                    <li><i class="fa fa-check" style="color:#94b25f;"></i> Sans lactose</li>
                    <li><i class="fa fa-check" style="color:#94b25f;"></i> Sans OGM</li>
                    <li><i class="fa fa-check" style="color:#94b25f;"></i> 100% naturel</li>
                    <li><i class="fa fa-check" style="color:#94b25f;"></i> Sans sucres ajoutés</li>
                </ul>
            </div>
        </div>
    </div>

    <div id="box">
        <br/>
        <h2 style="color: #f4f4f2;">DÉCOUVREZ LA BOX VEGAN BY KEENETNOA</h2>
        <br/>
        <p style="margin-right: 20%; margin-left: 20%; font-size: 20px; color: #f4f4f2;">
            <strong>On vous y fait découvrir 13 gourmandises vegan : </strong><strong>boissons, snacks sucrés ou salés, épicerie originale… 
            De quoi satisfaire vos papilles tous les mois.</strong>
        </p>
        <p style="margin-right: 20%; margin-left: 20%; font-size: 20px; color: #f4f4f2;">
            <strong>En plus la livraison est offerte alors pourquoi se priver ?</strong>
        </p>
        <br/>
        <div class="img-food">
            <img class="img-box" src="https://www.slowlyveggie.fr/wp-content/uploads/sites/5/2018/01/box-vegan-11.jpg" alt ="foodbox"/>
        </div>
    </div>


<?php get_footer() ?>