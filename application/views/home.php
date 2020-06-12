<!--Agregamos un head para colocar el título de la página según el modulo-->
<head>
    <title>Aula virtual Emilio | <?php echo $title;?></title>
</head>
<div class="clerfix"></div>
<div class="container col-md-10 mt-5">
    <div id="carrusel" class="carousel slide" data-ride="carousel" >
        <ol class="carousel-indicators">
            <li data-target="#carrusel" data-slide-to="0" class="active"></li>
            <li data-target="#carrusel" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="opacity-div"></div>
            <div class="carousel-item active">
                <img src="<?php echo base_url();?>/assets/img/nuevaimg.png" class="img-carousel">
                <div class="carousel-caption">
                    <h4>¡Bienvenidos a mi aula virtual!</h4>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url();?>/assets/img/mano1.jpg" class="img-carousel">
            </div>
        </div>
        <a href="#carrusel" class="carousel-control-prev" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a href="#carrusel" class="carousel-control-next" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</div>


