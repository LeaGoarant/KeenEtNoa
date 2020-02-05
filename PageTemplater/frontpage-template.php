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
        <div class="col-lg-12 col-sm-12 col-md-12">
            <table class="home-tb">
                <tr class="home-table">
                    <th></th>
                    <th class="font-styling">Tous nos produits respectent au moins une de ces caractéristiques :</th>
                </tr>
                <tr class="home-table">
                    <td><i class="fas fa-leaf" style="color:#94b25f;"></i></td>
                    <td>Vegan</td>
                </tr>
                <tr class="home-table">
                    <td><i class="fas fa-leaf" style="color:#94b25f;"></i></td>
                    <td>Sans gras trans / sirop à taux de glucose élevé</td>
                </tr>
                <tr class="home-table">
                    <td><i class="fas fa-leaf" style="color:#94b25f;"></i></td>
                    <td>Pas de substances cancérigènes</td>
                </tr>
                <tr class="home-table">
                    <td><i class="fas fa-leaf" style="color:#94b25f;"></i></td>
                    <td>Aucun arôme ou colorant artificiel</td>
                </tr>
                <tr class="home-table">
                    <td><i class="fas fa-leaf" style="color:#94b25f;"></i></td>
                    <td>Sans lactose</td>
                </tr>
                <tr class="home-table">
                    <td><i class="fas fa-leaf" style="color:#94b25f;"></i></td>
                    <td>Sans OGM</td>
                </tr>
                <tr class="home-table">
                    <td><i class="fas fa-leaf" style="color:#94b25f;"></i></td>
                    <td>100% naturel</td>
                </tr>
                <tr class="home-table">
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
            <img class="img-box img-fluid" src="https://www.slowlyveggie.fr/wp-content/uploads/sites/5/2018/01/box-vegan-11.jpg" alt ="foodbox"/>
        </div>
    </div>

    <div id="newsletter">
        <br/>
        <h2 style="color:#94b25f;">ABONNEZ VOUS À NOTRE NEWSLETTER</h2>
        <br/>
        <h3 style="margin-left: 5%;">Que souhaitez vous recevoir ?</h3>
        <br/>
        <form class="home-form">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Promotions" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    Nos offres et promotions
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Products" id="defaultCheck2">
                <label class="form-check-label" for="defaultCheck2">
                    Nos nouveaux produits
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Recipes" id="defaultCheck3">
                <label class="form-check-label" for="defaultCheck3">
                    Nos recettes
                </label>
            </div>
            <br/>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Accept" id="defaultCheck4" required>
                <label class="form-check-label" for="defaultCheck4">
                    J'accepte les <a href="">termes et conditions</a>.*
                </label>
                <br/>
                <small>
                    En renseignant votre adresse email, vous acceptez de recevoir toutes les news de Keenetnoa par mail, juste une fois par semaine et vous prenez connaissance de notre 
                    <a href="">Politique de confidentialité</a>.
                    <br/>
                    Vous pouvez vous désinscrire à tout moment à l’aide des liens de désinscription ou en nous 
                    <a href="">contactant</a>.
                </small>
            </div>
            <br/>
            <br/>
            <button style="margin-left: 25%;" type="submit" class="btn btn-primary">M'inscrire</button>
        </form>
        <br/>
    </div>


<?php get_footer() ?>