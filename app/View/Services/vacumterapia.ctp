<div class="popular" id="services">
    <h3>Servicios de vacumterapia</h3>
    <div class="container">
        <?php if(count($vt)> 0): ?>

        <?php foreach ($vt as $vacumt): ?>
        <div class="popular" id="services">
            <h3> <?php echo $vacumt['Service']['name']; ?></h3>
            <div class="container">
                <div class="col-md-8 popular-grid">
                    <h4><a href="#">Descripción</a></h4>
                    <p>
                        <?php echo $vacumt[ 'Service'][ 'description']; ?>
                    </p>
                </div>
                <div class="col-md-8 popular-grid">
                    <h4><a href="#">Precio</a></h4>
                    <b>
                <p>
                     ¢ <?php echo $nail[ 'Service'][ 'price']; ?>
                </p>
            </b>
                </div>

                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="gallery" id="gallery" style="margin-bottom: 30px">
            <div class="gallery-top">
                <?php foreach ($imagenes as $image): ?>
                <?php if($image[ 'Image'][ 'category']== $vacumt[ 'Service'][ 'id'] ): ?>
                <div class="col-md-4 col1 gallery-grid">
                    <a href=<?php echo '/files/image/pic/' . $image[ 'Image'][ 'pic_dir']. '/' . 'thumb_' . $image[ 'Image'][ 'pic'] ?> rel="title" class="b-link-stripe b-animate-go  thickbox">

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
</div>