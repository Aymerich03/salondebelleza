<div class="popular" id="services">
    <h3>Galería de nuestros servicios</h3>
    </br></br>
    <div class="container">
        <div class="gallery" id="gallery" style="margin-bottom: 30px">
            <div class="gallery-top">
                <?php foreach ($imagenes as $image): ?>
                <?php if ($image[ 'Image'][ 'category'] !='Promociones' ): ?>
                <div class="col-md-4 col1 gallery-grid">
                    <a href= <?php echo '/files/image/pic/' . $image[ 'Image'][ 'pic_dir']. '/' . 'thumb_' . $image[ 'Image'][ 'pic'] ?> rel="title" class="b-link-stripe b-animate-go  thickbox">
        
                        <figure class="effect-bubba">
                            <img class="img-responsive" src= <?php echo '/files/image/pic/' . $image['Image']['pic_dir']. '/' . 'thumb_' . $image['Image']['pic'] ?> alt="" />
                            <figcaption>
                                <h4 class="gal"> <?php echo $image['Image']['price'] ?> </h4>
                                <p class="gal1"> <?php echo $image['Image']['description'] ?> </p>
                                
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <?php endif ; ?>
                <?php endforeach; ?>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
