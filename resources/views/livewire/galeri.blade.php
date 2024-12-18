<div>
    <section class="module bg-dark-60 gallery-page-header parallax-bg" data-background="assets/images/gallery_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt">Gallery</h2>
                    <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire
                        soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
                </div>
            </div>
        </div>
    </section>
    <section class="module">
        <div class="container">
            <div class="row multi-columns-row">
                @foreach ($galeri as $g)
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="gallery-item">
                            <div class="gallery-image"><a class="gallery"
                                    href="https://cms.kotabogor.go.id/storage/foto/{{ $g->file }}"
                                    title="{{ $g->ket }}"><img
                                        src="https://cms.kotabogor.go.id/storage/foto/{{ $g->file }}"
                                        alt="gambar"
                                        style="width: 100%; height: 200px; object-fit: cover; border-radius: 8px;" />
                                    <div class="gallery-caption">
                                        <div class="gallery-icon"><span class="icon-magnifying-glass"></span></div>
                                    </div>
                                </a></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
