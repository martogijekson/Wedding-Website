@extends('layouts.mainlayouts')

@section('content')
    <header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/img_bg_2.jpg);"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="display-t">
                        <div class="display-tc animate-box" data-animate-effect="fadeIn">
                            @foreach ($penganten as $p)
                                <h1>{{ $p->nama1 }} &amp; {{ $p->nama2 }}</h1>
                                <h2>We Are Getting Married</h2>
                                <div class="simply-countdown simply-countdown-one"></div>
                                <p><a href="#" class="btn btn-default btn-sm">Save the date</a></p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div id="fh5co-couple">
        @foreach ($penganten as $i)
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                        <h2>{{ $p->title }}</h2>
                        <h3>{{ $p->tanggal }}</h3>
                        <p>We invited you to celebrate our wedding</p>
                    </div>
                </div>
                <div class="couple-wrap animate-box">
                    <div class="couple-half">
                        <div class="groom">
                            <img src="{{ URL($i->gambar1) . '?p=' . rand(0, 100) }}" alt="groom" class="img-responsive">
                        </div>
                        <div class="desc-groom">
                            <h3>{{ $p->nama1 }}</h3>
                            <p>{{ $p->keterangan1 }}</p>
                        </div>
                    </div>
                    <p class="heart text-center"><i class="icon-heart2"></i></p>
                    <div class="couple-half">
                        <div class="bride">
                            <img src="{{ URL($i->gambar2) . '?p=' . rand(0, 100) }}" alt="bride" class="img-responsive">
                        </div>
                        <div class="desc-bride">
                            <h3>{{ $p->nama2 }}</h3>
                            <p>{{ $p->keterangan2 }}</p>
                        </div>
                    </div>
                </div>

            </div>
        @endforeach
    </div>

    <div id="fh5co-event" class="fh5co-bg" style="background-image:url(images/img_bg_3.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                    <span>Our Special Events</span>
                    <h2>Wedding Events</h2>
                </div>
            </div>
            <div class="row">
                <div class="display-t">
                    <div class="display-tc">

                        <div class="col-md-10 col-md-offset-1">
                            <div class="col-md-6 col-sm-6 text-center">
                                <div class="event-wrap animate-box">
                                    @foreach ($akad as $a)
                                        <h3>{{ $a->nama }}</h3>
                                        <div class="event-col">
                                            <i class="icon-clock"></i>
                                            <span>{{ $a->jam1 }}</span>
                                            <span>{{ $a->jam2 }}</span>
                                        </div>
                                        <div class="event-col">
                                            <i class="icon-calendar"></i>
                                            <span>{{ $a->tanggal1 }}</span>
                                            <span>{{ $a->tanggal2 }}</span>
                                        </div>
                                        <p>{{ $a->keterangan }}</p>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 text-center">
                                <div class="event-wrap animate-box">
                                    @foreach ($resepsi as $r)
                                        <h3>{{ $r->nama }}</h3>
                                        <div class="event-col">
                                            <i class="icon-clock"></i>
                                            <span>{{ $r->jam1 }}</span>
                                            <span>{{ $r->jam2 }}</span>
                                        </div>
                                        <div class="event-col">
                                            <i class="icon-calendar"></i>
                                            <span>{{ $r->tanggal1 }}</span>
                                            <span>{{ $r->tanggal2 }}</span>
                                        </div>
                                        <p>{{ $r->keterangan }}</p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-couple-story">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                    <span>We Love Each Other</span>
                    <h2>Our Story</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                        the blind texts.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-md-offset-0">
                    <ul class="timeline animate-box">

                        @foreach ($story as $key => $j)
                            <li class="animate-box"
                                style="display: flex; align-items: center; {{ $key % 2 == 0 ? 'flex-direction: row-reverse;' : '' }}">
                                <div class="timeline-badge"
                                    style="background-image: url('{{ URL($j->gambar) . '?p=' . rand(0, 100) }}'); background-size: cover; background-position: center; width: 150px; height: 150px; border-radius: 50%; margin-right: 20px;">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3 class="timeline-title">{{ $j->judul }}</h3>
                                        <span class="date">{{ $j->tanggal }}</span>
                                    </div>
                                    <div class="timeline-body">
                                        <p>{{ $j->keterangan }}</p>
                                    </div>
                                </div>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
