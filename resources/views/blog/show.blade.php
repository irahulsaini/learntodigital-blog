@extends('layout.app')

@section('title', $post->seo_title ?? $post->title)
@section('description', $post->seo_description ?? '')
@section('canonical', $post->slug ? config('app.url') . '/' . ($post->slug) :  '')
@section('image', $post->featured_image ? asset('blog/storage/' . $post->featured_image) :  '')

@section('content')

<script type="application/ld+json">

<?=json_encode([ 
  "@context" => "https://schema.org",
  "@type" => "BlogPosting",
  "mainEntityOfPage" => [
    "@type" => "WebPage",
    "@id" => $post->slug ? config('app.url') . '/' . ($post->slug) :  '',
  ],
  "headline" => $post->title,
  "description" => $post->excerpt,
  "image" => $post->featured_image ? [
    "@type" => "ImageObject",
    "url" => asset('blog/storage/' . $post->featured_image),
    "width" => 1200,
    "height" => 628
  ] : null,
  "author" => [
    "@type" => "Person",
    "name" => "Gaurav",
  ],
  "publisher" => [
    "@type" => "Organization",
    "name" => config('app.name'),
    "logo" => [
      "@type" => "ImageObject",
      "url" => asset('assets/img/logowebwhite.png'),
    ],
  ],
  "datePublished" => optional($post->published_at)->toIso8601String(),
  "dateModified" => optional($post->published_at)->toIso8601String(),
],JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);?>

</script>
@php
$webPageSchema = [
    "@context" => "https://schema.org",
    "@type" => "WebPage",
    "@id" => url()->current() . "#webpage",
    "url" => url()->current(),
    "name" => $post->title,
    "description" => $post->excerpt,
    "inLanguage" => "en-IN",
    "isPartOf" => [
        "@type" => "WebSite",
        "@id" => url('/') . "#website"
    ]
];
@endphp

<script type="application/ld+json">
{!! json_encode($webPageSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>

@php
$breadcrumbSchema = [
    "@context" => "https://schema.org",
    "@type" => "BreadcrumbList",
    "itemListElement" => [
        [
            "@type" => "ListItem",
            "position" => 1,
            "name" => "Home",
            "item" => url('https://www.learntodigtial.com')
        ],
        [
            "@type" => "ListItem",
            "position" => 2,
            "name" => "Blog",
            "item" => url('/blog')
        ],
        [
            "@type" => "ListItem",
            "position" => 3,
            "name" => $post->title,
            "item" => $post->slug ? config('app.url') . '/' . ($post->slug) :  ''
        ]
    ]
];
@endphp

<script type="application/ld+json">
{!! json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>


@php
$staticAuthorSchema = [
    "@context" => "https://schema.org",
    "@type" => "Person",
    "@id" => url('/#author'),
    "name" => "LTD",
    "url" => url('/'),
    "description" => "Editorial team at Learn To Digital covering SEO, digital marketing, and growth strategies.",
    "sameAs" => [
        "https://www.linkedin.com/company/learntodigital",
        "https://twitter.com/learntodigital"
    ]
];
@endphp
<script type="application/ld+json">
{!! json_encode($staticAuthorSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>


@php
$organizationSchema = [
    "@context" => "https://schema.org",
    "@type" => "Organization",
    "@id" => url('/#organization'),
    "name" => "Learn To Digital",
    "url" => url('/'),
    "logo" => [
        "@type" => "ImageObject",
        "url" => asset('assets/img/logowebwhite.png'),
        "width" => 300,
        "height" => 60
    ],
    "sameAs" => [
        "https://www.facebook.com/learntodigital",
        "https://www.linkedin.com/company/learntodigital",
        "https://twitter.com/learntodigital"
    ]
];
@endphp
<script type="application/ld+json">
{!! json_encode($organizationSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>
@php
$imagePath = storage_path('app/public/' . $post->featured_image);
$imageWidth = null;
$imageHeight = null;

if (file_exists($imagePath)) {
    [$imageWidth, $imageHeight] = getimagesize($imagePath);
}
@endphp



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
    .toc ul{
        max-height:70vh;
        overflow:auto; 
    }
    #toc a{
        font-size:12px;
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
                <div class="toc mb-4 bg-light border rounded-3 px-3 py-3">
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
            <h1 class="text-3xl font-bold mb-2">{{ $post->title }}</h1> 
            <div class="author text-muted mb-4 small">
                Pulished by: LTD Team
            </div>
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
                <form class="courseDemoForm bg-light px-4 py-3 border border-success rounded-3" novalidate  action="/PHPMailer/mail/" method="post">
                    <h5 class="modal-title text-center mb-3 pb-3 border-bottom border-success" id="courseDemoModalLabelLabel">Book Free Demo</h5>
                    <div class="mb-2">
                        <label class="form-label small">Full name</label>
                        <input class="form-control form-control-sm" type="text" name="name" placeholder="Your Name" required />
                    </div>
                    <div class="mb-2">
                        <label class="form-label small">Email</label>
                        <input class="form-control form-control-sm" type="email" name="email" placeholder="Your Email" required />
                    </div>
                    <div class="mb-2">
                        <label class="form-label small">Mobile</label>
                        <input class="form-control form-control-sm" type="tel" name="phone" placeholder="Your Phone" required />
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
