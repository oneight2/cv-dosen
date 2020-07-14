
  <!-- /Header -->
  <!-- Mobile Header -->
  <div class="mobile-header mobile-visible">
    <div class="mobile-logo-container">
      <div class="mobile-site-title">STT-Garut</div>
    </div>
    <a class="menu-toggle mobile-visible">
      <i class="fa fa-bars"></i>
    </a>
  </div>
  <!-- /Mobile Header -->
  <!-- Main Content -->
  <div id="main" class="site-main">
    <!-- Page changer wrapper -->
    <div class="pt-wrapper">
      <!-- Subpages -->
      <div class="subpages">
        <!-- Home Subpage -->
        <section class="pt-page" data-id="home">
          <div class="section-inner start-page-content">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-4 col-md-4 col-lg-4">
                  <div class="photo">
                    <img src="<?= base_url('assets/img/profile/'); ?><?= $dosen['image']?>" alt="">
                  </div>
                </div>
                <div class="col-sm-8 col-md-8 col-lg-8">
                  <div class="title-block">
                    <h1><?= $dosen['nama'] ?></h1>
                    <div class="owl-carousel text-rotation">
                      <div class="item">
                        <div class="sp-subtitle">Sekolah Tinggi Teknologi Garut</div>
                      </div>
                      <div class="item">
                        <div class="sp-subtitle"><?= $dosen["program_studi"]?></div>
                      </div>
                    </div>
                  </div>
                  <div class="social-links">
                    <a href="https://www.youtube.com/c/ACHMADALIF"><i class="fa fa-youtube-play"></i></a>
                    <a href="https://achmad-alif.blogspot.com"><i class="fa fa-globe"></i></a>
                    <a href="https://github.com/achmadalif"><i class="fa fa-github"></i></a>
                    <a href="https://www.instagram.com/alif_sec/"><i class="fa fa-instagram"></i></a>
                    <a href="https://api.whatsapp.com/send?phone=6285733428090&text=&source=&data=&app_absent="><i class="fa fa-whatsapp"></i></a>
                    <a href="mailto:achmadalifnasrulloh04@gmail.com"><i class="fa fa-envelope"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="page-content">
              <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="about-me">
                    <div class="block-title">
                      <h3>Tentang <span>Saya</span></h3>
                    </div>
                    <p>Hai, perkenalkan nama saya Yosep Septiana. Saya adalah seorang pelajar yang suka sekali dengan dunia IT. Cita cita saya ingin menjadi seorang Dosen dan Pakar Teknologi yang terkenal.</p>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="row">
                    <div class="col-sm-6 text-right">
                      <p><b>Perguruan Tinggi : </b></p>
                      <p><b>Program Studi : </b></p>
                      <p><b>Jabatan Fungsional : </b></p>
                      <p><b>Status Ikatan Kerja : </b></p>
                      <p><b>Status Aktivitas : </b></p>
                      <p><b>Email : </b></p>
                      <p><b>Whastapp : </b></p>
                    </div>
                    <div class="col-sm-6">
                      <p><?= $dosen['perguruan_tinggi']?></p>
                      <p><?= $dosen['program_studi']?></p>
                      <p><?= $dosen['jabatan_fungsional']?></p>
                      <p><?= $dosen['status_ikatan_kerja']?></p>
                      <p><?= $dosen['status_aktivitas']?></p>
                      <p><?= $dosen['email']?></p>
                      <p><?= $dosen['email']?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End of Home Subpage -->
        <!-- Resume Subpage -->
        <section class="pt-page" data-id="resume">
          <div class="section-inner custom-page-content">
            <div class="page-header color-1">
              <h2>Profile</h2>
            </div>
            <div class="page-content">
              <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="block">
                    <div class="block-title">
                      <h3>Pendidikan</h3>
                    </div>
                    <div class="timeline">
                      <!-- Education 1 -->
                      <div class="timeline-item">
                        <h4 class="item-title">SMK Walisongo Gempol</h4>
                        <span class="item-period">2020 - sekarang</span>
                        <span class="item-small">Sekolah Menengah Kejuruan</span>
                        <p class="item-description">Sekarang saya sedang menuntut ilmu di SMK Walisongo Gempol, dan saya mengambil kejuruan Teknik Komputer & Jaringan (TKJ).</p>
                      </div>
                      <!-- / Education 1 -->
                      <!-- Education 2 -->
                      <div class="timeline-item">
                        <h4 class="item-title">SMP Negeri 1 Jabon</h4>
                        <span class="item-period">2017 - 2020</span>
                        <span class="item-small">Sekolah Menengah Pertama</span>
                        <p class="item-description">Saya telah menyelesaikan masa SMP saya mulai dari kelas 7-9 dan saya akan melanjutkan ke jenjang SMK.</p>
                      </div>
                      <!-- / Education 2 -->
                      <!-- Education 3 -->
                      <div class="timeline-item">
                        <h4 class="item-title">MINU Kedung Cangkring</h4>
                        <span class="item-period">2011 - 2017</span>
                        <span class="item-small">Sekolah Dasar</span>
                        <p class="item-description">Saya telah menyelesaikan sekolah dasar saya mulai dari kelas 1-6 sd.</p>
                      </div>
                      <!-- / Education 3 -->
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="block">
                    <div class="block-title">
                      <h3>Pengalaman</h3>
                    </div>
                    <div class="timeline">
                      <!-- Experience 1 -->
                      <div class="timeline-item">
                        <h4 class="item-title">Panda7w7 Team</h4>
                        <span class="item-period">Mei 2020 - sekarang</span>
                        <span class="item-small">Co-lead</span>
                        <p class="item-description">Saya dipilih sebagai co-lead di tim panda7w7, yang bertugas membantu leader mengembangkan tim dan membagikan materi kepada para member.</p>
                      </div>
                      <!-- / Experience 1 -->
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </section>
        <!-- End of penelitian Subpage -->
        <!-- Resume Subpage -->
        <section class="pt-page" data-id="Penelitian">
          <div class="section-inner custom-page-content">
            <div class="page-header color-1">
              <h2>Riwayat Penelitian</h2>
            </div>
            <div class="page-content">
              
             
            </div>
          </div>
        </section>
        <section class="pt-page" data-id="Mengajar">
          <div class="section-inner custom-page-content">
            <div class="page-header color-1">
              <h2>Riwayat Mengajar</h2>
            </div>
            <div class="page-content">
              
             
            </div>
          </div>
        </section>
         <section class="pt-page" data-id="Pengabdian">
          <div class="section-inner custom-page-content">
            <div class="page-header color-1">
              <h2>Riwayat Pengabdian</h2>
            </div>
            <div class="page-content">
              
             
            </div>
          </div>
        </section>
        <section class="pt-page" data-id="Pencapaian">
          <div class="section-inner custom-page-content">
            <div class="page-header color-1">
              <h2>Pencapaian</h2>
            </div>
            <div class="page-content">
              
             
            </div>
          </div>
        </section>
        <!-- End of penelitianSubpage -->
        <!-- Contact Subpage -->
        <section class="pt-page" data-id="contact">
          <div class="section-inner custom-page-content">
            <div class="page-header color-1">
              <h2>Kontak</h2>
            </div>
            <div class="page-content">
              <div class="row">
                <div class="col-sm-6 col-md-6">
                  <div class="block-title">
                    <h3>Tempat <span>Tinggal</span></h3>
                  </div>
                  <div class="contact-info-block">
                    <div class="ci-icon">
                      <i class="fa fa-map-marker"></i>
                    </div>
                    <div class="ci-text">
                      <h5>Indonesia, Jawa timur, Sidoarjo</h5>
                    </div>
                  </div>
                  <div class="contact-info-block">
                    <div class="ci-icon">
                      <i class="fa fa-envelope"></i>
                    </div>
                    <div class="ci-text">
                      <h5>achmadalifnasrulloh04@gmail.com</h5>
                    </div>
                  </div>
                  <div class="contact-info-block">
                    <div class="ci-icon">
                      <i class="fa fa-phone"></i>
                    </div>
                    <div class="ci-text">
                      <h5>+62 857-3342-8090</h5>
                    </div>
                  </div>
                  <div class="contact-info-block">
                    <div class="ci-icon">
                      <i class="fa fa-check"></i>
                    </div>
                    <div class="ci-text">
                      <h5>Content creator & Front-end developer</h5>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6">
                  <div class="block-title">
                    <h3>Form <span>Kontak</span></h3>
                  </div>
                  <form id="contact-form" method="post" action="https://lmpixels.com/demo/procard/contact_form/contact_form.php">
                    <div class="messages"></div>
                    <div class="controls">
                      <div class="form-group form-group-with-icon">
                        <i class="fa fa-user"></i>
                        <label>Nama lengkap</label>
                        <input id="form_name" type="text" name="name" class="form-control" placeholder required="required" data-error="Name is required.">
                        <div class="form-control-border"></div>
                        <div class="help-block with-errors"></div>
                      </div>
                      <div class="form-group form-group-with-icon">
                        <i class="fa fa-envelope"></i>
                        <label>Alamat Email</label>
                        <input id="form_email" type="email" name="email" class="form-control" placeholder required="required" data-error="Valid email is required.">
                        <div class="form-control-border"></div>
                        <div class="help-block with-errors"></div>
                      </div>
                      <div class="form-group form-group-with-icon">
                        <i class="fa fa-comment"></i>
                        <label>Pesan untuk saya</label>
                        <textarea id="form_message" name="message" class="form-control" placeholder rows="4" required="required" data-error="Please, leave me a message."></textarea>
                        <div class="form-control-border"></div>
                        <div class="help-block with-errors"></div>
                      </div>
                      <div class="g-recaptcha" data-sitekey="6LdqmCAUAAAAAMMNEZvn6g4W5e0or2sZmAVpxVqI"></div>
                      <input type="submit" class="button btn-send" value="Kirim Pesan">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Contact Subpage -->
      </div>
    </div>
    <!-- /Page changer wrapper -->
  </div>
  <!-- /Main Content -->
</div>