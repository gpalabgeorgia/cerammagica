<!-- Hero Section start  -->
<div class="hero-section hero-1 fix">
    <div class="container">
        @foreach($banners as $banner)
            <a @if(!empty($banner['link'])) href="{{ url($banner['link']) }}" target="_blank" @else href="javascript:void(0);" @endif style="text-decoration: none;">
            <div class="row">
                <div class="col-12 col-xl-8 col-lg-6">
                    <div class="hero-items">
                        <div class="hero-content">
                            <h1 class="wow fadeInUp" data-wow-delay=".5s">{{ $banner['title'] }}</h1>
                            <div class="form-clt wow fadeInUp" data-wow-delay=".9s">
                                <p style="color: #012E4A;">{{ $banner['description'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-4 col-lg-6">
                    <div class="girl-image">
                        <img style="width: 450px;" class=" float-bob-x" src="{{ asset('images/banner_images/'.$banner['image']) }}" alt="img">
                    </div>
                </div>
            </div>
            </a>
        @endforeach
    </div>
</div>
