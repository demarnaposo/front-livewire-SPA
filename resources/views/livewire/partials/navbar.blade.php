<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span
                    class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
                    class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand"
                href="/" wire:navigate>Kota Bogor</a>
        </div>
        <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">

                @foreach ($induk as $id => $menu)
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">{{ $menu['judul'] }}</a>
                    @if ($menu['menus']->isNotEmpty())
                    <ul class="dropdown-menu">
                        @foreach ($menu['menus'] as $child)
                        <li>
                            <a href="{{ $child->link }}" {{ $child->kategori === '1' ? 'wire:navigate' : '' }}>
                                {{ $child->judul }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                    @endif
                </li>
                @endforeach


            </ul>
        </div>
    </div>
</nav>
