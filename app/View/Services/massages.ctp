<div class="content-mid-top">
	<h3>Servicios en masajes</h3>
</div>
<div class="container">
<?php if(count($ms)> 0): ?>

<?php foreach ($ms as $massage): ?>
<div class="popular" id="services">
    <h3> <?php echo $massage['Service']['name']; ?></h3>
    <div class="container">
        <div class="col-md-8 popular-grid">
            <h4><a href="#">Descripción</a></h4>
            <p>
                <?php echo $massage[ 'Service'][ 'description']; ?>
            </p>
        </div>
        <div class="col-md-4 popular-grid">
            <h4><a href="#">Precio</a></h4>
            <p>
                <?php echo $massage[ 'Service'][ 'price']; ?>
            </p>
        </div>

        <div class="clearfix"> </div>
    </div>
</div>
<div class="gallery" id="gallery" style= "margin-bottom: 30px">
    <div class="gallery-top">
        <?php foreach ($imagenes as $image): ?>
        <?php if($image['Image']['category'] == $massage['Service']['id'] ): ?>
        <div class="col-md-4 col1 gallery-grid">
            <a href= <?php echo '/files/image/pic/' . $image['Image']['pic_dir']. '/' . 'thumb_' . $image['Image']['pic'] ?> rel="title" class="b-link-stripe b-animate-go  thickbox">

                <figure class="effect-bubba">
                    <img class="img-responsive" src= <?php echo '/files/image/pic/' . $image['Image']['pic_dir']. '/' . 'thumb_' . $image['Image']['pic'] ?> alt="" />
                    <figcaption>
                        <h4 class="gal"> <?php echo $image['Image']['price'] ?> </h4>
                        <p class="gal1"> <?php echo $image['Image']['description'] ?> </p>
                        
                    </figcaption>
                </figure>
            </a>
        </div>
        <?php endif; ?>
        <?php endforeach; ?>
        <div class="clearfix"> </div>
    </div>
</div>
<?php endforeach; ?>
<?php endif; ?>
</div>