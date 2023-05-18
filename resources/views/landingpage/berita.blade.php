<x-guest-layout>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="me-lg-4">
                        <div class="row gy-5">
                            @foreach ($berita as $item)
                                <div class="col-md-6" data-aos="fade">
                                    <article class="blog-post">
                                        <div class="post-slider slider-sm rounded">
                                            <img loading="lazy" decoding="async" src="tlandingpage/images/berita1.jpg"
                                                alt="Post Thumbnail"
                                                style="height: 250px; widows: 100%; object-fit: cover;">
                                        </div>
                                        <div class="pt-4">
                                            <p class="mb-3">{{ $item->created_at->format('d M Y') }}</p>
                                            <h2 class="h4"><a class="text-black"
                                                    href="{{url('berita/'.$item->slug)}}">{{ $item->judul }}</a></h2>
                                            {!! substr_replace($item->isi, '...', 150) !!}
                                            <a href="{{url('berita/'.$item->slug)}}" class="text-primary fw-bold"
                                                aria-label="Read the full article by clicking here">Read More</a>
                                        </div>
                                    </article>
                                </div>
                            @endforeach


                            <div class="col-12">
                                <nav class="mt-4">
                                    <!-- pagination -->
                                    <nav class="mb-md-50">
                                        {!! $berita->links() !!}
                                        {{-- <ul class="pagination justify-content-center">
                                            <li class="page-item active "> <a href="blog.html" class="page-link">
                                                    1
                                                </a>
                                            </li>
                                            <li class="page-item"> <a href="blog.html" class="page-link">
                                                    2
                                                </a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="blog.html" aria-label="Pagination Arrow"> <i
                                                        class="fas fa-angle-right"></i>
                                                </a>
                                            </li>
                                        </ul> --}}
                                    </nav>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <!-- categories -->
                    {{-- <div class="widget widget-categories">
                    <h5 class="widget-title"><span>Category</span></h5>
                    <ul class="list-unstyled widget-list">
                        <li><a href="#!">Four seasone <small class="ml-auto">(1)</small></a>
                        </li>
                        <li><a href="#!">Newyork city <small class="ml-auto">(2)</small></a>
                        </li>
                        <li><a href="#!">Photobooth <small class="ml-auto">(1)</small></a>
                        </li>
                        <li><a href="#!">Photography <small class="ml-auto">(2)</small></a>
                        </li>
                        <li><a href="#!">Videography <small class="ml-auto">(1)</small></a>
                        </li>
                    </ul>
                </div> --}}
                    <!-- latest post -->
                    <div class="widget">
                        <h5 class="widget-title"><span>Random Article</span></h5>
                        <!-- post-item -->
                        @foreach ($RandomPost as $item)
                            <ul class="list-unstyled widget-list">
                                <li class="d-flex widget-post align-items-center">
                                    <a class="text-black" href="/blog/post-2/">
                                        <div class="widget-post-image flex-shrink-0 me-3">
                                            <img class="rounded" loading="lazy" decoding="async"
                                                src="tlandingpage/images/blog/post-2.jpg" alt="Post Thumbnail">
                                        </div>
                                    </a>
                                    <div class="flex-grow-1">
                                        <h5 class="h6 mb-0"><a class="text-black" href="{{url('berita/'.$item->slug)}}">{{$item->judul}}</a></h5>
                                        <small>{{$item->created_at->format('M d, Y')}}</small>
                                    </div>
                                </li>
                            </ul>
                        @endforeach

                    </div>
                    <!-- Social -->
                    <div class="widget">
                        <h4 class="widget-title"><span>Social Links</span></h4>
                        <ul class="list-unstyled list-inline mb-0 social-icons">
                            <li class="list-inline-item me-3"><a title="Explorer Facebook Profile" class="text-black"
                                    href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="list-inline-item me-3"><a title="Explorer Twitter Profile" class="text-black"
                                    href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item me-3"><a title="Explorer Instagram Profile" class="text-black"
                                    href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
