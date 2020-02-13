<?php
/*
 * Template Name: Contact
 * Description: A Page Template with a darker design.
 */
?>

<?php get_header() ?>

<div class="background">
    <br/>
    <div class="card" id="contact-card">
        <div class= "card-body text-center">
            <img src="https://image.noelshack.com/fichiers/2020/03/3/1579100929-contact-small-1-1024x1024.png" alt="contact" class="img-contact">
            <h4 style="color: #d3b28b;">Contact</h4>
            <br/>
            <p style="color: #67615a;">victor@keenetnoa.fr</p>
            <p style="color: #67615a;">06 76 60 09 04</p>
            <br/>
            <p style="color: #67615a;">Nous nous ferons un plaisir de vous répondre dans les meilleurs délais.</p>
        </div>
    </div>
    <br/>
    <div class="card" id="contact-card">
        <div class= "card-body text-center">
            <a href="https://www.facebook.com/EpicerieVegan/" onclick="window.open(this.href); return false;">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://www.instagram.com/keenetnoa/" onclick="window.open(this.href); return false;">
                <i class="fab fa-instagram"></i>
            </a>
        </div>
    </div>
    <br/>
</div>
<?php get_footer() ?>