<x-guest-layout>
    <div class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="mb-5">
                        <h2 class="mb-4" style="line-height:1.5">{{$berita->judul}}</h2>
                        <span>{{$berita->created_at->format('M d, Y')}}<span class="mx-2">/</span> </span>
                        <p class="list-inline-item">Category : <a href="#!" class="ml-1">Photography </a>
                        </p>
                    </div>
                    <div class="mb-5 text-center">
                        <!-- <div class="post-slider rounded overflow-hidden">
                  <img loading="lazy" decoding="async" src="images/blog/post-4.jpg" alt="Post Thumbnail">
                  <img loading="lazy" decoding="async" src="images/blog/post-5.jpg" alt="Post Thumbnail">
                  <img loading="lazy" decoding="async" src="images/blog/post-3.jpg" alt="Post Thumbnail">
                </div> -->
                        <img loading="lazy" decoding="async" src="{{$berita->gambar}}" alt="Post Thumbnail">
                    </div>
                    <div class="content">

                        <hr>
                        <h4 id="heading-example">{{$berita->judul}}</h4>
                        {!!$berita->isi!!}
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
