<style type="text/css">
	.circulo{
	    border: 2px solid #fff;
	    position: absolute;
	    display: block;
	    border-radius: 50%;
	    box-shadow: 0 0 27px #baab28; 
	}
	.boton{
		margin: 50px;
		position: absolute;
		font-size: 16px;
	    font-weight: 600;
	    border-radius: 30px;
	    padding: 9px 25px;
	    text-transform: capitalize;
	    transition: all 0.3s ease 0s;
	    display: inline-block;
	    background-color: #8c7f0d;
	    border-color: #8c7f0d;
	    color: #fff;
	    z-index: 10000;
	    text-decoration: auto;
	    font-family: sans-serif;
	}
</style>
<div class="container_carru" style="background-image: url(/img/fondo_preview.jpg); background-size: cover; background-repeat: no-repeat;  width: 100%;
   height: 100%; position: absolute;">
   <a class="boton" href="/Inicio" type="button"><i class="fa fa-arrow-left"></i> Regresar</a>
	<div id="actions">
	    <a id="arrowrigth">
	        <img src="/img/flecha.png" class="arrowrigth">
	    </a>
	    <a id="arrowleft">
			<img src="/img/flecha.png" class="arrowleft">
		</a> 
	</div>
	<div class="circulo parpadea text" style="width: 70px; height: 70px; top: 20%; left: 83%; animation-duration: 2s !important"></div>
	<div class="circulo parpadea text" style="width: 50px; height: 50px; top: 40%; left: 20%; animation-duration: 3s !important"></div>
	<div class="circulo parpadea text" style="width: 20px; height: 20px; top: 20%; left: 10%; animation-duration: 4s !important"></div>
	<div class="circulo parpadea text" style="width: 40px; height: 40px; top: 50%; left: 80%; animation-duration: 3s !important"></div>
	<div class="circulo parpadea text" style="width: 30px; height: 30px; top: 72%; left: 15%; animation-duration: 2s !important"></div>
	<div class="circulo parpadea text" style="width: 30px; height: 30px; top: 70%; left: 90%; animation-duration: 5s !important"></div>
	<div id="items">
		<?php foreach ($pre as $key) { ?>
			<?= $this->Html->image('../subidas/fotopreview/photo/'.$key->photo_dir.'/'.$key->photo, ['id' => 'item', 'draggable' => false]) ?>
		<?php } ?>
	</div>
</div>
