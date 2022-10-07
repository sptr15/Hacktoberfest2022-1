    <!-- ##### Hero Area Start ##### -->
    <!-- <section class="hero-area bg-img bg-overlay-2by5" style="background-image: url(<?= base_url('theme/clever/') ?>img/bg-img/bg1.jpg);"> -->
    <section class="hero-area bg-img bg-overlay-2by5" style="background-image: url(<?= base_url() ?>asset/img/background/2.jpeg);">
    
        <div class="container h-100">
            <!-- The video -->


            <div class="row h-100 align-items-center">

                
                <div class="col-12">
                    
                    <!-- Hero Content -->
                    <div class="hero-content text-center">
                        
                        <h2>SRIHARJOKU</h2>
                        <span class="btn clever-btn">#Makaryo Mbangun Deso</span>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    
    <section>
    <div class="container mt-5 mb-5" >
        <div class="row">
            <div class="col-lg">
            <div class="card-body" style=" background-color: orange;">
            <h3 style="color: white; "><b>Yuk Mari Healing Bersama Di Desa Wisata Sriharjo </b></h3>
            <!-- WHATSAPP DESA-->
            <a href="https://api.whatsapp.com/send?phone=6287838382974&amp;text=Hallo,%20Mas%20Kak,%20Saya%20mau%20tanya%20tentang%20Desa Sriharjo....." class="btn btn-primary">Chat Desa Sriharjo</a>
            <a href="https://goo.gl/maps/EtK54wUuUH1RgUWMA" class="btn btn-primary">MAP Desa Sriharjo</a>


            
            </div>
            </div>
            <div class="col-lg">
                <div class="card-body">
                <figure>
                <iframe width="100%" height="50%" src="https://www.youtube.com/embed/TPx100ZxEgM" frameborder="0" title="Profil Desa Wisata Sriharjo" allowfullscreen></iframe> 
                </figure>
           
            </div></div>
        </div>
    </div>










   









    </section>


    <?php if ($check_wisata>0) : ?>
    <!-- ##### Wisata ##### -->
    <section class=" section-padding-90">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Tujuan Wisata Desa Sriharjo </h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="tutors-slide owl-carousel wow fadeInUp" data-wow-delay="250ms">
                        
                        <?php foreach ($all_wisata as $wisata): ?>
                            <!-- Single Tutors Slide -->
                            <div class="single-tutors-slides">
                                <!-- Tutor Thumbnail -->
                                <div class="tutor-thumbnail">
                                    <img src="<?= base_url('asset/img/wisata/').$wisata['img_wisata'] ?>" alt="">
                                </div>
                                <!-- Tutor Information -->
                                <div class="tutor-information">
                                    <h5>
                                        <a href="<?= base_url('wisata/').$wisata['slug_wisata']; ?>" >   
                                    <?= strtoupper($wisata['nama_wisata']) ?></h5>
                                    <span>#<?= strtoupper($wisata['nama_kategori_wisata']) ?></span>
                                    <p>Deskripsi : <?= $wisata['deskripsi_wisata'] ?><br>
                                    Link Map :<a href="<?= $wisata['lokasi'] ?>">Arahkan Lokasi </a><br>
                                    Rating :0.0</p>                                    
                                </div>
                            </div>    
                        <?php endforeach; ?>
                        
                    </div>
                
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Wisata ##### -->
    <?php endif; ?>
    



    <?php if ($check_blog>0): ?>
    <!-- ##### Blog Area ##### -->
    <section class="blog-area section-padding-90" style="margin-top: 5%;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Artikel Terbaru</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Blog Area -->
                
                    <?php foreach ($new_blogs as $blog): ?>
                    <?php 
                    $get_kategori_blog = $this->db->get_where("tbl_kategori_blog",["id_kategori_blog" => $blog['blog_kategori_id']])->row_array();
                    ?>
                    <div class="col-12 col-md-6">
                        <div class="single-blog-area mb-100 wow fadeInUp" data-wow-delay="250ms">
                            <img src="<?= base_url('asset/img/blog/').$blog['blog_thumb'] ?>" alt="">
                            <!-- Blog Content -->
                            <div class="blog-content">
                                <a href="<?= base_url('blog/').$blog['blog_slug']; ?>" class="blog-headline">
                                    <h4><?= $blog['blog_title'] ?></h4>
                                </a>
                                <div class="meta d-flex align-items-center">
                                    <a href="#"><?= $blog['blog_author'] ?></a>
                                    <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                    <a href="<?= base_url('blog/kategori/').$get_kategori_blog['nama_kategori'] ?>"><?= $get_kategori_blog['nama_kategori'] ?></a>
                                </div>
                                    <p><?= substr($blog['blog_isi'], 0,100)."..." ?></p> 
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                
                <?php if ($check_blog>2): ?>
                <!-- Single Blog Area -->
                <div class="col-md-12 text-center mb-5">
                    <a href="<?= base_url('blog') ?>" class="btn btn-primary">LIHAT ARTIKEL LAINYA</a>
                </div>    
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!-- ##### Blog Area End ##### -->
    <?php endif;  ?>  
