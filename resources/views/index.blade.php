<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
{{-- @section('judul_halaman', 'Halaman Home') --}}

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

{{-- <p>Ini Adalah Halaman Home</p>
	<p>Selamat datang !</p> --}}

<!--HOME-->
<section class="home" id="home">
    <div class="home-content">
        <div class="container">
            <h1><span class="element" data-text1="PT. Panca Solusi Teknologi"
                    data-text2="Kepuasan Customer Menjadi Tujuan Kami" data-loop="true" data-backdelay="3000"></span>
            </h1>
            <div class="social">
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i> </a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> </a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> </a>
                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i> </a>
                <a href="#"><i class="fa fa-behance" aria-hidden="true"></i> </a>
                <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i> </a>
            </div>
            <a class="home-down bounce" href="#about"><i class="fa fa-angle-down"></i></a>
        </div>
    </div>
    <svg class="diagonal home-left" width="21%" height="170" viewBox="0 0 100 102" preserveAspectRatio="none">
        <path d="M0 100 L100 100 L0 10 Z"></path>
    </svg>
    <svg class="diagonal home-right" width="80%" height="170" viewBox="0 0 100 102" preserveAspectRatio="none">
        <path d="M0 100 L100 100 L100 10 Z"></path>
    </svg>
</section>

<!--ABOUT-->
<section class="about dgray-bg" id="about">
    <div class="about type-1 padbot_120">
        <div class="container">
            <!-- about image -->
            <div class="col-md-4 col-sm-12 about-image top_30 wow fadeInUp" data-wow-delay="0.4s">
                <div class="row">
                    <img src="images/profile-2.jpg" alt="">
                </div>
            </div>
            <!-- about text -->
            <div class="col-md-7 col-md-offset-1 col-sm-12 about-text wow fadeInUp top_30" data-wow-delay="0.6s">
                <div class="section-title dleft bottom_30">
                    <br>
                    <h2>ABOUT US</h2>
                </div>
                <p>
                    Perusahaan swasta nasional yang bergerak di bidang perdagangan dan jasa Teknologi Informasi, yang
                    meliputi pekerjaan di sektor pemerintahan maupun swasta.
                    Didirikan pada tanggal 27 September 2022 yang berdomisili di Jakarta.
                    Dengan motto "Kepuasaan Customer Menjadi Tujuan Kami" akan memberikan pelayanan yang professional
                    dengan hasil yang terbaik kepada para mitra dan kami yakin dengan komitmen, professional dan
                    pelayanan yang prima akan menghasilkan kerja sama yang terbaik.
                </p>
                <a class="home-down bounce" href="#our_services"><i class="fa fa-angle-down"
                        style="color: black;"></i></a>

            </div>
            <div id="our_services" class="col-md-12 section-title dleft top_120 wow fadeInUp " data-wow-delay="0.6s">
                <h2 class="text-center top_120">OUR SERVICES</h2>
                <br>
                <br>

            </div>
            <!-- work areas 1-->
            <div class="col-md-12 section-title dleft wow fadeInUp " data-wow-delay="0.6s">
                <h2 class="text-left">TOTAL SOLUSI IT</h2>
                <br>
                <br>

            </div>
            <div class="owl-carousel work-areas padbot_120 wow fadeInUp" data-pagination="false" data-autoplay="3000"
                data-items-desktop="3" data-items-desktop-small="3" data-items-tablet="2" data-items-tablet-small="1"
                data-wow-delay="0.4s">
                <!-- an area -->
                <div class="area col-md-12 item">
                    <div class="icon">
                        <i data-icon="1" class="icon"></i>
                    </div>
                    <div class="text">
                        <h6>Data Center & Virtualization</h6>
                    </div>
                </div>
                <!-- an area -->
                <div class="area col-md-12 item">
                    <div class="icon">
                        <i data-icon="!" class="icon"></i>
                    </div>
                    <div class="text">
                        <h6>Network Infrastructure</h6>
                    </div>
                </div>
                <!-- an area -->
                <div class="area col-md-12 item">
                    <div class="icon">
                        <i data-icon="#" class="icon"></i>
                    </div>
                    <div class="text">
                        <h6>Security System</h6>
                    </div>
                </div>
                <!-- an area -->
                <div class="area col-md-12 item">
                    <div class="icon">
                        <i data-icon="1" class="icon"></i>
                    </div>
                    <div class="text">
                        <h6>Communication & Collaboration</h6>
                        <p>(Conference Solution)</p>
                    </div>
                </div>
                <!-- an area -->
                <div class="area col-md-12 item">
                    <div class="icon">
                        <i data-icon="!" class="icon"></i>
                    </div>
                    <div class="text">
                        <h6>Application System</h6>
                    </div>
                </div>
                
            </div>
            <!-- / -->
            <!-- work areas 2-->
            <div class="col-md-12 section-title dleft wow fadeInUp " data-wow-delay="0.6s">
                <h2 class="text-right">PROFESIONAL SERVICE</h2>
                <br>
                <br>

            </div>
            <div class="owl-carousel work-areas wow fadeInUp" data-pagination="false" data-autoplay="3000"
                data-items-desktop="3" data-items-desktop-small="3" data-items-tablet="2" data-items-tablet-small="1"
                data-wow-delay="0.4s">
                <!-- an area -->
                <div class="area col-md-12 item">
                    <div class="icon">
                        <i data-icon="1" class="icon"></i>
                    </div>
                    <div class="text">
                        <h6>Consultant & Design</h6>
                    </div>
                </div>
                <!-- an area -->
                <div class="area col-md-12 item">
                    <div class="icon">
                        <i data-icon="!" class="icon"></i>
                    </div>
                    <div class="text">
                        <h6>Instalation & Infrastructure Configuration</h6>
                    </div>
                </div>
                <!-- an area -->
                <div class="area col-md-12 item">
                    <div class="icon">
                        <i data-icon="#" class="icon"></i>
                    </div>
                    <div class="text">
                        <h6>
                            Managed Services
                        </h6>
                    </div>
                </div>
                <!-- an area -->
                <div class="area col-md-12 item">
                    <div class="icon">
                        <i data-icon="1" class="icon"></i>
                    </div>
                    <div class="text">
                        <h6>Maintenance</h6>
                    </div>
                </div>

            </div>
            <div class="col-md-12">
                <a class="home-down bounce padbot_120 text-center" href="#mitra"
                    style="text-align:center;display:block;"><i class="fa fa-angle-down" style="color: black;""></i></a>
            </div>
            <br>
            <br>
            <br>
            <!-- / -->
            <!-- work areas 3-->
            <div id=" mitra" class="col-md-12 section-title dleft wow fadeInUp top_120 " data-wow-delay="0.6s">
                        <h2 class="text-center top_120">OUR PRINCIPAL PARTNERS</h2>
                        <p class="text-center">(On Progress)</p>
                        <br>
                        <br>

            </div>
            <div class="owl-carousel work-areas padbot_120 wow fadeInUp" data-pagination="false" data-autoplay="3000"
                data-items-desktop="3" data-items-desktop-small="3" data-items-tablet="2" data-items-tablet-small="1"
                data-wow-delay="0.4s">
                <!-- an area -->
                <div class="area col-md-12 item">
                    <div class="icon">
                        <img src="images/mitra/dell_emc.png" alt="">
                    </div>
                    <div class="text">
                    </div>
                </div>
                <!-- an area -->
                <div class="area col-md-12 item">
                    <div class="icon">
                        <img src="images/mitra/huawei.png" alt="">
                    </div>
                    <div class="text">
                    </div>
                </div>
                <!-- an area -->
                <div class="area col-md-12 item">
                    <div class="icon">
                        <img src="images/mitra/lenovo.png" alt="">
                    </div>
                    <div class="text">
                    </div>
                </div>
                <!-- an area -->
                <div class="area col-md-12 item">
                    <div class="icon">
                        <img src="images/mitra/Fortinet.png" alt="">
                    </div>
                    <div class="text">
                    </div>
                </div>
                <!-- an area -->
                <div class="area col-md-12 item">
                    <div class="icon">
                        <img src="images/mitra/F5.png" alt="">
                    </div>
                    <div class="text">
                    </div>
                </div>
                <!-- an area -->
                <div class="area col-md-12 item">
                    <div class="icon">
                        <img src="images/mitra/VMware.png" alt="">
                    </div>
                    <div class="text">
                    </div>
                </div>
            </div>
            <!-- / -->
        </div>
        <svg class="diagonal-gray" width="100%" height="170" viewBox="0 0 100 102" preserveAspectRatio="none">
            <path d="M0 0 L70 100 L100 0 Z"></path>
        </svg>
    </div>
</section>

<!--PORTFOLIO-->
<div id="#visimisi" class="top_120">
<div class="container">
    <div class="col-md-6 col-sm-6 about-text wow fadeInUp top_30" data-wow-delay="0.6s">
        <div class="section-title dleft bottom_30">
            <br>
            <h2>Vision</h2>
        </div>
        <ul>
        <li>Menjadi Perusahaan Sistem Integrator IT Solution terbaik</li>
        <li>Menjadi penyedia layanan IT yang berkualitas, handal dan terpercaya</li>
        </ul>
    </div>
    <div class="col-md-6 col-sm-6 about-text wow fadeInUp top_30" data-wow-delay="0.6s">
        <div class="section-title dleft bottom_30">
            <br>
            <h2>Mission</h2>
        </div>
        <ul>
            <li>Memberikan solusi yang terbaik dan terpercaya untuk memenuhi kepuasanpelanggan</li>
            <li>Memfasilitasi semua segmen baikpemerintahan maupun swasta</li>
            <li>Memberikan professional services yang terbaik dan terpercaya </li>
        </ul>
    </div>
</div>
</div>

<!-- CONTACT -->
<section class="contact" id="contact">
    <div class="container">

        <div class="section-title dleft top_120">
            <h2 class="bottom_30">GET IN TOUCH</h2>
        </div>
        <div class="col-md-3 wow fadeInUp" data-wow-delay="0.3s">
            <!-- Contact Info -->
            <ul class="contact-info row">
                <li>Capital Eight, Jalan Duren Tiga Selatan No. 8 Jakarta Selatan, DKI Jakarta 12760</li>
                <li><br>www.pasteknologi.co.id </li>
                <li><br>sales@pasteknologi.co.id</li>
                <li>+62 8221819 5585</li>
            </ul>
            <div class="social-icons top_60 row">
                <a class="fb" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a class="tw" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a class="ins" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a class="bh" href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                <a class="dr" href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
            </div>
        </div>
        <div class="col-md-7 col-md-offset-2 form top_30 bottom_90 wow fadeInUp" data-wow-delay="0.6s">
            <div class="page-title sub">
                <h5>leave us a message</h5>
            </div>
            <form class="contact-form top_60" method="POST" action="mail.php">
                <div class="row">
                    <!--Name-->
                    <div class="col-md-6">
                        <input id="con_name" name="con_name" class="form-inp requie" type="text" placeholder="Name">
                    </div>
                    <!--Email-->
                    <div class="col-md-6">
                        <input id="con_email" name="con_email" class="form-inp requie" type="text" placeholder="Email">
                    </div>
                    <div class="col-md-12">
                        <!--Message-->
                        <textarea name="con_message" id="con_message" class="requie" placeholder="How can I help you?"
                            rows="8"></textarea>
                        <button id="con_submit" class="sitebtn top_30 pull-right" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection
{{-- @section('konten')
<a>adnan</a>
@endsection --}}
