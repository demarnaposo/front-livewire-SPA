<div>

    @if ($currentPage === 'visi-misi')

        @push('title')
            <title>{{ $pageTitle }}</title>
        @endpush

        <div>
            <section class="module bg-dark-60 about-page-header" data-background="assets/images/about_bg.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <h2 class="module-title font-alt">About</h2>
                            <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my
                                entire soul, like these sweet mornings of spring which I enjoy with my whole heart.
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    @elseif ($currentPage === 'lambang-kbr')
        @push('title')
            <title>{{ $pageTitle }}</title>
        @endpush
        <section class="module bg-dark-30 about-page-header" data-background="assets/images/about_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h1 class="module-title font-alt mb-0">Lambang Kota Bogor</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="module pt-0 pb-0" id="about">
            <div class="row position-relative m-0">
                <div class="col-xs-12 col-md-6 side-image">
                    <img src={{ asset('assets/images/logokotabogor.gif') }} width="100" height="100"
                        alt="">
                </div>
                <div class="col-xs-12 col-md-6 col-md-offset-6 side-image-text">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 class="module-title font-alt align-left">Lambang Kota Bogor</h2>
                            <div class="module-subtitle font-serif align-left">Terdapat warna emas, merah, biru dan
                                hijau.</div>
                            <li>Arti tiap-tiap Lambang :Kiri atas, Burung Garuda kuning emas merupakan Lambang Negara.
                            </li>
                            <li>Kanan atas, di Kota Bogor terletak Istana Bogor yang dinyatakan dengan lukisan istana
                                Warna Perak.</li>
                            <li>Kiri bawah, Kota Bogor, tak dapat dilepaskan dari bayangan Gunung Salak dilukiskan dalam
                                simbol gunung dengan empat buah puncaknya.</li>
                            <li>Kota Bogor adalah suatu pusaka dari Kerajaan Pajajaran, hal ini dilukiskan dengan bentuk
                                Kujang.</li>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @elseif ($currentPage === 'sejarah')
        @push('title')
            <title>{{ $pageTitle }}</title>
        @endpush

        <section class="module bg-dark-30 about-page-header" data-background="assets/images/about_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h1 class="module-title font-alt mb-0">Sejarah</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="module" id="alt-features">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt">Sejarah Kota Bogor</h2>
                        <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire
                            soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-6 hidden-xs hidden-sm">
                        <div class="alt-services-image align-center"><img src="{{ asset('assets/images/tugu.jpg') }}"
                                alt="kotabogor" class="img-rounded"></div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div>
                            <p>Hampir secara umum penduduk Bogor mempunyai keyakinan bahwa Kota Bogor mempunyai hubungan
                                lokatif dengan Kota Pakuan, ibukota Pajajaran. Asal-usul dan arti Pakuan terdapat dalam
                                berbagai sumber. Di bawah ini adalah hasil penelusuran dari sumber-sumber tersebut
                                berdasarkan urutan waktu:</p>
                            <p>Naskah Carita Waruga Guru (1750-an). Dalam naskah berbahasa Sunda Kuna ini diterangkan
                                bahwa
                                nama Pakuan Pajajaran didasarkan bahwa di lokasi tersebut banyak terdapat pohon
                                Pakujajar.</p>
                            <p>K.F. Holle (1869). Dalam tulisan berjudul De Batoe Toelis te Buitenzorg (Batutulis di
                                Bogor), Holle menyebutkan bahwa di dekat Kota Bogor terdapat kampung bernama Cipaku,
                                beserta
                                sungai yang memiliki nama yang sama. Di sana banyak ditemukan pohon paku. Jadi menurut
                                Holle, nama Pakuan ada kaitannya dengan kehadiran Cipaku dan pohon paku. Pakuan
                                Pajajaran
                                berarti pohon paku yang berjajar ("op rijen staande pakoe bomen").</p>
                            <p>G.P. Rouffaer (1919) dalam Encyclopedie van Niederlandsch Indie edisi Stibbe tahun 1919.
                                Pakuan mengandung pengertian "paku", akan tetapi harus diartikan "paku jagat" (spijker
                                der
                                wereld) yang melambangkan pribadi raja seperti pada gelar Paku Buwono dan Paku Alam.
                                "Pakuan" menurut Fouffaer setara dengan "Maharaja". Kata "Pajajaran" diartikan sebagai
                                "berdiri sejajar" atau "imbangan" (evenknie). Yang dimaksudkan Rouffaer adalah berdiri
                                sejajar atau seimbang dengan Majapahit. Sekalipun Rouffaer tidak merangkumkan arti
                                Pakuan
                                Pajajaran, namun dari uraiannya dapat disimpulkan bahwa Pakuan Pajajaran menurut
                                pendapatnya
                                berarti "Maharaja yang berdiri sejajar atau seimbang dengan (Maharaja) Majapahit". Ia
                                sependapat dengan Hoesein Djajaningrat (1913) bahwa Pakuan Pajajaran didirikan tahun
                                1433.</p>
                            <p>R. Ng. Poerbatjaraka (1921). Dalam tulisan De Batoe-Toelis bij Buitenzorg (Batutulis
                                dekat
                                Bogor) ia menjelaskan bahwa kata "Pakuan" mestinya berasal dari bahasa Jawa kuno
                                "pakwwan"
                                yang kemudian dieja "pakwan" (satu "w", ini tertulis pada Prasasti Batutulis). Dalam
                                lidah
                                orang Sunda kata itu akan diucapkan "pakuan". Kata "pakwan" berarti kemah atau istana.
                                Jadi,
                                Pakuan Pajajaran, menurut Poerbatjaraka, berarti "istana yang berjajar"(aanrijen staande
                                hoven).
                            </p>
                            <p>H. Ten Dam (1957). Sebagai Insinyur Pertanian, Ten Dam ingin meneliti kehidupan
                                sosial-ekonomi petani Jawa Barat dengan pendekatan awal segi perkembangan sejarah. Dalam
                                tulisannya, Verkenningen Rondom Padjadjaran (Pengenalan sekitar Pajajaran), pengertian
                                "Pakuan" ada hubungannya dengan "lingga" (tonggak) batu yang terpancang di sebelah
                                prasasti
                                Batutulis sebagai tanda kekuasaan. Ia mengingatkan bahwa dalam Carita Parahyangan
                                disebut-sebut tokoh Sang Haluwesi dan Sang Susuktunggal yang dianggapnya masih mempunyai
                                pengertian "paku".</p>
                            <p>Ia berpendapat bahwa "pakuan" bukanlah nama, melainkan kata benda umum yang berarti
                                ibukota
                                (hoffstad) yang harus dibedakan dari keraton. Kata "pajajaran" ditinjaunya berdasarkan
                                keadaan topografi. Ia merujuk laporan Kapiten Wikler (1690) yang memberitakan bahwa ia
                                melintasi istana Pakuan di Pajajaran yang terletak antara Sungai Besar dengan Sungai
                                Tanggerang (disebut juga Ciliwung dan Cisadane). Ten Dam menarik kesimpulan bahwa nama
                                "Pajajaran" muncul karena untuk beberapa kilometer Ciliwung dan Cisadane mengalir
                                sejajar.
                                Jadi, Pakuan Pajajaran dalam pengertian Ten Dam adalah Pakuan di Pajajaran atau "Dayeuh
                                Pajajaran".
                            </p>
                            <p>Sebutan "Pakuan", "Pajajaran", dan "Pakuan Pajajaran" dapat ditemukan dalam Prasasti
                                Batutulis (nomor 1 & 2) sedangkan nomor 3 bisa dijumpai pada Prasasti Kebantenan di
                                Bekasi.</p>


                            <p>Dalam naskah Carita Parahiyangan ada kalimat berbunyi "Sang Susuktunggal, inyana nu
                                nyieunna
                                palangka Sriman Sriwacana Sri Baduga Maharajadiraja Ratu Haji di Pakwan Pajajaran nu
                                mikadatwan Sri Bima Punta Narayana Madura Suradipati, inyana pakwan Sanghiyang Sri Ratu
                                Dewata" (Sang Susuktunggal, dialah yang membuat tahta Sriman Sriwacana (untuk) Sri
                                Baduga
                                Maharaja Ratu Penguasa di Pakuan Pajajaran yang bersemayam di keraton Sri Bima Punta
                                Narayana Madura Suradipati, yaitu pakuan Sanghiyang Sri Ratu Dewata).</p>


                            <p>Sanghiyang Sri Ratu Dewata adalah gelar lain untuk Sri Baduga. Jadi yang disebut "pakuan"
                                itu adalah "kadaton" yang bernama Sri Bima dan seterunya. "Pakuan" adalah tempat tinggal
                                untuk raja, biasa disebut keraton, kedaton atau istana. Jadi tafsiran Poerbatjaraka lah
                                yang
                                sejalan dengan arti yang dimaksud dalam Carita Parahiyangan, yaitu "istana yang
                                berjajar".
                                Tafsiran tersebut lebih mendekati lagi bila dilihat nama istana yang cukup panjang
                                tetapi
                                terdiri atas nama-nama yang berdiri sendiri. Diperkirakan ada lima (5) bangunan keraton
                                yang
                                masing-masing bernama: Bima, Punta, Narayana, Madura dan Suradipati. Inilah mungkin yang
                                biasa disebut dalam peristilahan klasik "panca persada" (lima keraton). Suradipati
                                adalah
                                nama keraton induk. Hal ini dapat dibandingkan dengan nama-nama keraton lain, yaitu
                                Surawisesa di Kawali, Surasowan di Banten dan Surakarta di Jayakarta pada masa silam.
                            </p>
                            <p>Karena nama yang panjang itulah mungkin orang lebih senang meringkasnya, Pakuan Pajajaran
                                atau Pakuan atau Pajajaran. Nama keraton dapat meluas menjadi nama ibukota dan akhirnya
                                menjadi nama negara. Contohnya : Nama keraton Surakarta Hadiningrat dan Ngayogyakarta
                                Hadiningrat, yang meluas menjadi nama ibukota dan nama daerah. Ngayogyakarta Hadiningrat
                                dalam bahasa sehari-hari cukup disebut Yogya.</p>


                            <p>Pendapat Ten Dam (Pakuan = ibukota ) benar dalam penggunaan, tetapi salah dari segi
                                semantik. Dalam laporan Tome Pires (1513) disebutkan bahwa bahwa ibukota kerajaan Sunda
                                itu
                                bernama "Dayo" (dayeuh) dan terletak di daerah pegunungan, dua hari perjalanan dari
                                pelabuhan Kalapa di muara Ciliwung. Nama "Dayo" didengarnya dari penduduk atau pembesar
                                Pelabuhan Kalapa. Jadi jelas, orang Pelabuhan Kalapa menggunakan kata "dayeuh" (bukan
                                "pakuan") bila bermaksud menyebut ibukota. Dalam percakapan sehari-hari, digunakan kata
                                "dayeuh", sedangkan dalam kesusastraan digunakan "pakuan" untuk menyebut ibukota
                                kerajaan.</p>
                            <p>
                                Untuk praktisnya, dalam tulisan berikut digunakan "Pakuan" untuk nama ibukota dan
                                "Pajajaran" untuk nama negara, seperti kebiasaan masyarakat Jawa Barat sekarang ini.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @else
        @push('title')
            <title>{{ $pageTitle }}</title>
        @endpush
        <section class="home-section home-parallax home-fade home-full-height bg-dark-30" id="home"
            data-background="assets/images/view_kotabogor.jpg">
            <div class="titan-caption">
                <div class="caption-content">
                    <div class="font-alt mb-30 titan-title-size-1">Selamat Datang Bogorian!</div>
                    <div class="font-alt mb-40 titan-title-size-4">We are Bogor</div><a
                        class="section-scroll btn btn-border-w btn-round" href="#about">Learn More</a>
                </div>
            </div>
        </section>
        <div class="main">
            <section class="module pt-0 pb-0" id="about">
                <div class="row position-relative m-0">
                    <div class="col-xs-12 col-md-6 side-image" data-background="assets/images/section-14.jpg"></div>
                    <div class="col-xs-12 col-md-6 col-md-offset-6 side-image-text">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2 class="module-title font-alt align-left">Tentang Kota Bogor</h2>
                                <div class="module-subtitle font-serif align-left">A wonderful serenity has taken
                                    possession of my entire soul, like these sweet mornings of spring which I enjoy with
                                    my whole heart.</div>
                                <p>The European languages are members of the same family. Their separate existence is a
                                    myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages
                                    only differ in their grammar, their pronunciation and their most common words.</p>
                                <p>The European languages are members of the same family. Their separate existence is a
                                    myth. For science, music, sport, etc, Europe uses the same vocabulary.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="module" id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="assets/images/rubo.gif" alt="Description" class="img-responsive">
                        </div>
                        <div class="col-sm-8">
                            <h2 class="module-title font-alt">“Mewujudkan Kota Bogor sebagai Kota Ramah Keluarga”</h2>
                            <div class="module-subtitle font-serif large-text">Program Wali Kota dan Wakil Wali Kota
                                Tahun
                                2019 - 2024 merupakan janji-janji kampanye Wali Kota dan Wakil Wali Kota yang strategis
                                dan
                                prioritas untuk dilaksanakan pada tahun 2019 - 2024. Program unggulan ini salah satu
                                arah
                                kebijakan terhadap pencapaian visi dan misi pembangunan Kota Bogor tahun 2019 - 2024.
                                Program unggulan 2019 - 2024. </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-2 col-sm-offset-5">
                            <div class="large-text align-center"><a class="section-scroll" href="#services"><i
                                        class="fa fa-angle-down"></i></a></div>
                        </div>
                    </div>
                </div>
            </section>
            <hr class="divider-w">
            <section class="module" id="services">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <h2 class="module-title font-alt">Pengumuman & Informasi</h2>
                            <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my
                                entire
                                soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="module bg-dark-60 parallax-bg" data-background="{{ asset('assets/images/balkot.jpg') }}"
                style="background-position: 50% 15%;">
                <div class="container">
                    <div class="row multi-columns-row">
                        <div class="col-sm-6 col-md-3 col-lg-3">
                            <div class="count-item mb-sm-40">
                                <div class="count-icon"><span class="icon-target"></span></div>
                                <h3 class="count-to font-alt" data-countto="36"></h3>
                                <h5 class="count-title font-serif">OPD</h5>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3">
                            <div class="count-item mb-sm-40">
                                <div class="count-icon"><span class="icon-bargraph"></span></div>
                                <h3 class="count-to font-alt" data-countto="68"></h3>
                                <h5 class="count-title font-serif">Kelurahan</h5>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3">
                            <div class="count-item mb-sm-40">
                                <div class="count-icon"><span class="icon-trophy"></span></div>
                                <h3 class="count-to font-alt" data-countto="25"></h3>
                                <h5 class="count-title font-serif">Puskesmas</h5>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3">
                            <div class="count-item mb-sm-40">
                                <div class="count-icon"><span class="icon-happy"></span></div>
                                <h3 class="count-to font-alt" data-countto="4"></h3>
                                <h5 class="count-title font-serif">BUMD</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="module pb-0" id="works">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <h2 class="module-title font-alt">Galeri Kota Bogor</h2>
                            <div class="module-subtitle font-serif"></div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <ul class="filter font-alt" id="filters">
                                <li><a class="current wow fadeInUp" href="#" data-filter="*">All</a></li>
                                <li><a class="wow fadeInUp" href="#" data-filter=".illustration"
                                        data-wow-delay="0.2s">Illustration</a></li>
                                <li><a class="wow fadeInUp" href="#" data-filter=".marketing"
                                        data-wow-delay="0.4s">Marketing</a></li>
                                <li><a class="wow fadeInUp" href="#" data-filter=".photography"
                                        data-wow-delay="0.6s">Photography</a></li>
                                <li><a class="wow fadeInUp" href="#" data-filter=".webdesign"
                                        data-wow-delay="0.6s">Web Design</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="works-grid works-grid-gut works-grid-3 works-hover-w" id="works-grid">
                    <li class="work-item  webdesign"><a href="portfolio-single-1.html">
                            <div class="work-image"><img src="assets/images/work-1.jpg" alt="Portfolio Item" /></div>
                            <div class="work-caption font-alt">
                                <h3 class="work-title">Corporate Identity</h3>
                                <div class="work-descr">Illustration</div>
                            </div>
                        </a></li>
                    <li class="work-item marketing photography"><a href="portfolio-single-1.html">
                            <div class="work-image"><img src="assets/images/work-2.jpg" alt="Portfolio Item" /></div>
                            <div class="work-caption font-alt">
                                <h3 class="work-title">Bag MockUp</h3>
                                <div class="work-descr">Marketing</div>
                            </div>
                        </a></li>
                    <li class="work-item illustration photography"><a href="portfolio-single-1.html">
                            <div class="work-image"><img src="assets/images/work-3.jpg" alt="Portfolio Item" /></div>
                            <div class="work-caption font-alt">
                                <h3 class="work-title">Disk Cover</h3>
                                <div class="work-descr">Illustration</div>
                            </div>
                        </a></li>
                    <li class="work-item marketing photography"><a href="portfolio-single-1.html">
                            <div class="work-image"><img src="assets/images/work-4.jpg" alt="Portfolio Item" /></div>
                            <div class="work-caption font-alt">
                                <h3 class="work-title">Business Card</h3>
                                <div class="work-descr">Photography</div>
                            </div>
                        </a></li>
                    <li class="work-item illustration webdesign"><a href="portfolio-single-1.html">
                            <div class="work-image"><img src="assets/images/work-5.jpg" alt="Portfolio Item" /></div>
                            <div class="work-caption font-alt">
                                <h3 class="work-title">Business Card</h3>
                                <div class="work-descr">Webdesign</div>
                            </div>
                        </a></li>
                    <li class="work-item marketing webdesign"><a href="portfolio-single-1.html">
                            <div class="work-image"><img src="assets/images/work-6.jpg" alt="Portfolio Item" /></div>
                            <div class="work-caption font-alt">
                                <h3 class="work-title">Business Cards in paper clip</h3>
                                <div class="work-descr">Marketing</div>
                            </div>
                        </a></li>
                </ul>
            </section>

            <section class="module" id="alt-features">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <h2 class="module-title font-alt">Peta Wilayah Kota Bogor</h2>
                            <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my
                                entire
                                soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-3 col-lg-3">
                            <div class="alt-features-item">
                                <div class="alt-features-icon"><span class="icon-tools-2"></span></div>
                                <h3 class="alt-features-title font-alt">Kecamatan Bogor Utara</h3>A wonderful serenity
                                has
                                taken possession of my entire soul like these sweet mornings.
                            </div>
                            <div class="alt-features-item">
                                <div class="alt-features-icon"><span class="icon-target"></span></div>
                                <h3 class="alt-features-title font-alt">Kecamatan Bogor Barat</h3>A wonderful serenity
                                has
                                taken possession of my entire soul like these sweet mornings.
                            </div>
                            <div class="alt-features-item">
                                <div class="alt-features-icon"><span class="icon-tools"></span></div>
                                <h3 class="alt-features-title font-alt">Kecamatan Bogor Selatan</h3>A wonderful
                                serenity
                                has taken possession of my entire soul like these sweet mornings.
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 hidden-xs hidden-sm">
                            <div class="alt-services-image align-center"><iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126829.29007905214!2d106.791892!3d-6.595193500000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5b7ad0f824b%3A0x4c71fd1b0b8ae76d!2sKota%20Bogor%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1733975067487!5m2!1sid!2sid"
                                    width="517" height="704" style="border:0;" allowfullscreen=""
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3">
                            <div class="alt-features-item">
                                <div class="alt-features-icon"><span class="icon-camera"></span></div>
                                <h3 class="alt-features-title font-alt">Kecamatan Bogor Timur</h3>A wonderful serenity
                                has
                                taken possession of my entire soul like these sweet mornings.
                            </div>
                            <div class="alt-features-item">
                                <div class="alt-features-icon"><span class="icon-mobile"></span></div>
                                <h3 class="alt-features-title font-alt">Kecamatan Bogor Tengah</h3>A wonderful serenity
                                has
                                taken possession of my entire soul like these sweet mornings.
                            </div>
                            <div class="alt-features-item">
                                <div class="alt-features-icon"><span class="icon-linegraph"></span></div>
                                <h3 class="alt-features-title font-alt">Kecamatan Tanah Sareal</h3>A wonderful serenity
                                has
                                taken possession of my entire soul like these sweet mornings.
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <hr class="divider-w">
            <section class="module bg-dark-60 pt-0 pb-0 parallax-bg testimonial"
                data-background="assets/images/testimonial_bg.jpg">
                <div class="testimonials-slider pt-140 pb-140">
                    <ul class="slides">
                        <li>
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="module-icon"><span class="icon-quote"></span></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <blockquote class="testimonial-text font-alt">I am alone, and feel the charm of
                                            existence in this spot, which was created for the bliss of souls like mine.
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 col-sm-offset-4">
                                        <div class="testimonial-author">
                                            <div class="testimonial-caption font-alt">
                                                <div class="testimonial-title">Jack Woods</div>
                                                <div class="testimonial-descr">SomeCompany INC, CEO</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="module-icon"><span class="icon-quote"></span></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <blockquote class="testimonial-text font-alt">I should be incapable of drawing
                                            a
                                            single stroke at the present moment; and yet I feel that I never was a
                                            greater
                                            artist than now.</blockquote>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 col-sm-offset-4">
                                        <div class="testimonial-author">
                                            <div class="testimonial-caption font-alt">
                                                <div class="testimonial-title">Jim Stone</div>
                                                <div class="testimonial-descr">SomeCompany INC, CEO</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="module-icon"><span class="icon-quote"></span></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <blockquote class="testimonial-text font-alt">I am so happy, my dear friend, so
                                            absorbed in the exquisite sense of mere tranquil existence, that I neglect
                                            my
                                            talents.</blockquote>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 col-sm-offset-4">
                                        <div class="testimonial-author">
                                            <div class="testimonial-caption font-alt">
                                                <div class="testimonial-title">Adele Snow</div>
                                                <div class="testimonial-descr">SomeCompany INC, CEO</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
            <section class="module" id="news">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <h2 class="module-title font-alt">Berita Terbaru</h2>
                            <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my
                                entire
                                soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
                        </div>
                    </div>
                    <div class="row multi-columns-row post-columns">
                        @foreach ($berita as $b)
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="post mb-20">
                                    <div class="post-thumbnail"><a href="#">
                                            <img src="https://cms.kotabogor.go.id/storage/data/{{ $b->file }}"
                                                alt="{{ $b->file }}"
                                                style="width: 100%; height: 200px; object-fit: cover; border-radius: 8px;" />
                                        </a>
                                    </div>
                                    <div class="post-header font-alt">
                                        <h2 class="post-title"><a href="#">{{ substr($b->judul, 0, 50) }}...</a>
                                        </h2>
                                        <div class="post-meta">By&nbsp;<a
                                                href="#">{{ $b->name }}</a>&nbsp;|
                                            {{ \Carbon\Carbon::parse($b->tgl_publikasi)->translatedFormat('d F Y') }} |
                                        </div>
                                    </div>
                                    <div class="post-entry">
                                        <p>{{ strip_tags(substr($b->konten, 0, 100)) }}...</p>
                                    </div>
                                    <div class="post-more"><a class="more-link" href="#">Baca
                                            selengkapnya...</a></div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Pagination Links -->
                    {{-- <div class="pagination font-alt">
                        {{ $berita->links() }}
                    </div> --}}

                </div>
            </section>
        </div>

    @endif
</div>
