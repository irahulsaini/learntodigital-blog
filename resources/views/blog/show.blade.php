@extends('layout.app')

@section('title', $post->seo_title ?? $post->title)
@section('description', $post->seo_description ?? '')
@section('canonical', $post->slug ? config('app.url') . '/' . ($post->slug) :  '')
@section('image', $post->featured_image ? asset('blog/storage/' . $post->featured_image) :  '')

@section('content')
<style>
body,html{
    letter-spacing: .5px;
}
.post-container p,
.post-container ol,
.post-container ul,
.post-container li{
    font-size:.9rem;
}
.site-header{
    z-index:1099;
}
    .breadcrumb-item + .breadcrumb-item::before,
    .breadcrumb-item.active{
        color:initial!important;
    }
    .share .btn{
        padding-left:.5rem!important;
        padding-right:.5rem!important;
    }
    h1,.h1,h2,.h2,h3,.h3,h4,.h4,h5,.h5,h6,.h6,
    h1 strong,.h1 strong,h2 strong,.h2 strong,h3 strong,.h3 strong,h4 strong,.h4 strong,h5 strong,.h5 strong,h6 strong,.h6 strong{
        margin-top:.3rem;
        margin-bottom:.7rem;
        font-weight: 600;
    }
    p,ol,ul{
        margin-bottom:.7rem
    }
    .breadcrumb,
    .breadcrumb a,
    .breadcrumb li{
        font-size:12px;
    }
    #toc a{
        font-size:13px;
    }
    #toc .h1,
    #toc .h2,
    #toc .h3,
    #toc .h4,
    #toc .h5,
    #toc .h6{
        font-weight: normal;
    }
    #toc .h1,
    #toc .h2{
        font-weight: 600;
    }
    ul li,
    ol li,
    ul li p,
    ol li p{
        margin-bottom:0;
    }
    strong{
        font-weight: 600;
    }
    h1,.h1{
        font-size:26px;
    }
    h2,.h2{
        font-size:24px;
    }
    h3,.h3{
        font-size:22px;
    }
    h4,.h4{
        font-size:20px;
    }
    h5,.h5{
        font-size:18px;
    }
    h6,.h6{
        font-size:16px;
    }
</style>
<section class="py-5"></section>
<section class="py-5 bg-white">
    <div class="container mx-auto  post-container">
    <div class="row justify-content-center">
        <div class="col-md-3 ">
            <div class="sticky-top "  style="top:100px">
                <div class="toc mb-4">
                    <div id="toc"></div>
                </div>
                <div class="share text-center">
                    <div class="d-flex justify-content-center gap-1">
                    
                        <!-- Facebook -->
                        <a id="facebookShare" class="btn btn-sm px-2" target="_blank">
                            <i class="bi bi-facebook"></i>
                        </a>
                    
                        <!-- Twitter / X -->
                        <a id="twitterShare" class="btn btn-sm px-2" target="_blank">
                            <i class="bi bi-twitter"></i>
                        </a>
                    
                        <!-- LinkedIn -->
                        <a id="linkedinShare" class="btn btn-sm px-2" target="_blank">
                            <i class="bi bi-linkedin"></i>
                        </a>
                    
                        <!-- WhatsApp -->
                        <a id="whatsappShare" class="btn btn-sm px-2" target="_blank">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                    
                        <!-- Telegram -->
                        <a id="telegramShare" class="btn btn-sm px-2" >
                            <i class="bi bi-telegram"></i>
                        </a>
                        <!-- Native Share -->
                        <button id="nativeShareBtn" class="btn btn-sm px-2">
                            <i class="bi bi-share-fill"></i>
                        </button>
                    </div>

                    <p class="small mt-2">share this article</p>
                </div>
            </div>
            
        </div>
        <div class="col-md-6">

            <nav aria-label="breadcrumb" >
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class=" text-muted" href="/">Home</a></li>
                <li class="breadcrumb-item"><a class=" text-muted" href="{{ config('app.url')  }}">Blog</a></li>
                <li class="breadcrumb-item active " aria-current="page">{{ $post->title }}</li>
              </ol>
            </nav>
            <h1 class="text-3xl font-bold mb-4">{{ $post->title }}</h1>   
            @if($post->featured_image)
                <img src="{{ asset('blog/storage/' . $post->featured_image) }}" 
                     class="card-img-top" 
                     alt="{{ $post->title }}">
            @endif
            
            <div class="py-4 ">
                <div id="postContent">
                    {!! $post->content !!}
                </div>
            </div>
        </div>
        <div class="col-md-3 sticky-top " >
            
            <div class="sticky-top "  style="top:100px">
                <form class="courseDemoForm bg-white" novalidate  action="/PHPMailer/mail/" method="post">
                    <h5 class="modal-title" id="courseDemoModalLabelLabel">Book Free Demo</h5>
                    <div class="mb-2">
                        <label class="form-label small">Full name</label>
                        <input class="form-control form-control-sm" type="text" name="name" required />
                    </div>
                    <div class="mb-2">
                        <label class="form-label small">Email</label>
                        <input class="form-control form-control-sm" type="email" name="email" required />
                    </div>
                    <div class="mb-2">
                        <label class="form-label small">Mobile</label>
                        <input class="form-control form-control-sm" type="tel" name="phone" required />
                    </div>
                    <div class="mb-3">
                        <label class="form-label small">City</label>
                        <input
                            class="form-control form-control-sm"
                            type="text" name="city"
                            placeholder="City name (optional)"
                        />
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-cta" type="submit" name="submit">Request Demo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</section>

@endsection
