@extends('layouts.home')

@section('page title')
Home
@endsection

@section('banner')
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-8 p-2">
      <div class="col bg-light border rounded p-2">
        <div id="postBanner" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="7000">
              <img src="src/post/01/post01.png" transition-style="in:wipe:left" class="d-block w-100 rounded" alt="post image">
              <div class="col text-center p-2">
                <h5 class="animate__animated animate__fadeInRight fs-6 p-2 m-0">
                  မီးဘေးအန္တရာယ် မဖြစ်ပွားစေရန် ကြိုတင် ကာကွယ်ခြင်း အသိပညာမျှဝေပေးသည့် အခမ်းအနား
                </h5>
                <a href="#" class="btn animate">
                  <i class="fa-solid fa-circle-right"></i> View More
                </a>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="7000">
              <img src="src/post/02/post02.png" transition-style="in:wipe:left" class="d-block w-100 rounded" alt="post image">
              <div class="col text-center p-2">
                <h5 class="animate__animated animate__fadeInRight fs-6 p-2 m-0">
                  AML/CFT/ WMD ဆိုင်ရာ အသိပညာမြှင့်တင်‌ရေး သင်တန်း ကျင်းပပြီးစီးခြင်း
                </h5>
                <a href="#" class="btn animate">
                  <i class="fa-solid fa-circle-right"></i> View More
                </a>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="7000">
              <img src="src/post/03/post03.png" transition-style="in:wipe:left" class="d-block w-100 rounded" alt="post image">
              <div class="col text-center p-2">
                <h5 class="animate__animated animate__fadeInRight fs-6 p-2 m-0">
                  စီမံကိန်းနှင့်ဘဏ္ဍာရေးဝန်ကြီးဌာန၊ငွေရေးကြေးရေးကြီးကြပ်စစ်ဆေးရေးဦးစီးဌာနမှ ငွေကြေး ခဝါချမှု
                </h5>
                <a href="#" class="btn animate">
                  <i class="fa-solid fa-circle-right"></i> View More
                </a>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="7000">
              <img src="src/post/04/post04.png" transition-style="in:wipe:left" class="d-block w-100 rounded" alt="post image">
              <div class="col text-center p-2">
                <h5 class="animate__animated animate__fadeInRight fs-6 p-2 m-0">
                  မီးဘေးအန္တရာယ် မဖြစ်ပွားစေရန် ကြိုတင် ကာကွယ်ခြင်း အသိပညာမျှဝေပေးသည့် အခမ်းအနား
                </h5>
                <a href="#" class="btn animate">
                  <i class="fa-solid fa-circle-right"></i> View More
                </a>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="7000">
              <img src="src/post/05/post05.png" transition-style="in:wipe:left" class="d-block w-100 rounded" alt="post image">
              <div class="col text-center p-2">
                <h5 class="animate__animated animate__fadeInRight fs-6 p-2 m-0">
                    ဌာနတွင်းလုပ်ငန်းပိုင်းဆိုင်ရာ ကျွမ်းကျင်မှုသင်တန်း အမှတ်စဉ် (၂/၂၀၂၂)
                </h5>
                <a href="#" class="btn animate">
                  <i class="fa-solid fa-circle-right"></i> View More
                </a>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#postBanner" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#postBanner" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
    <div class="col-lg-4 p-2">
      <div class="card mb-2">
        <div class="card-body p-2">
          <div class="col text-center">
            <h5 class="fs-6 bg-frd rounded p-2 m-0">
              Latest Videos
            </h5>
          </div>
          <div class="col text-center p-2 m-auto">
            <div id="videosBanner" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <!--iframe-- width="100%" height="350" src="https://www.youtube.com/embed/ehLHacGZQEg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe-->
                </div>
                <div class="carousel-item">
                  <!--iframe width="100%" height="350" src="https://www.youtube.com/embed/DUyI6UYsbpg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe-->
                </div>
                <div class="carousel-item">
                  <!--iframe width="100%" height="350" src="https://www.youtube.com/embed/Ik01LUhxRUc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe-->
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#videosBanner" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#videosBanner" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-body p-2">
          <div class="col pb-1 text-center">
            <h5 class="fs-6 bg-frd rounded p-2 m-0">
              Contact Us
            </h5>
          </div>
          <div class="col text-center p-2">
            <a href="src/pdf/contact/address01.pdf" class="btn animate">
              <i class="fa-regular fa-file-pdf"></i> ရုံးချုပ်နှင့် တိုင်း/ပြည်နယ်
            </a>
          </div>
          <div class="col text-center p-2">
            <a href="src/pdf/contact/address02.pdf" class="btn animate">
              <i class="fa-regular fa-file-pdf"></i> MFIနှင့် Insurance
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('post-news')
<div class="container">
  <div class="row pt-3 pb-3">
    <div class="col text-center">
      <h5 class="p-2 m-0">
        Latest News
      </h5>
    </div>
    <div class="row m-auto">
      <div class="col-lg-3 col-md-6 p-2">
        <div class="card animate">
          <div class="card-body p-2">
            <div class="col">
              <img src="src/post/01/post01.png" class="img-fluid animate rounded" alt="post image">
            </div>
            <div class="col text-center">
              <h5 class="fs-6 p-2 m-0">
                မီးဘေးအန္တရာယ် မဖြစ်ပွားစေရန် ကြိုတင် ကာကွယ်ခြင်း အသိပညာမျှဝေပေးသည့် အခမ်းအနား
              </h5>
            </div>
            <div class="col text-center p-2">
              <a href="#" class="badge bg-frd text-dark text-decoration-none"># Office No (34) Nay Pyi Taw</a>
            </div>
            <div class="col text-center p-2">
              <a href="#" class="btn btn-sm animate">
                <i class="fa-solid fa-circle-chevron-right"></i> View More
              </a>
            </div>
            <div class="col text-center p-2">
              <small class="text-secondary">
                Posted on 23.1.2023
              </small>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 p-2">
        <div class="card animate">
          <div class="card-body p-2">
            <div class="col">
              <img src="src/post/02/post02.png" class="img-fluid animate rounded" alt="post image">
            </div>
            <div class="col text-center">
              <h5 class="fs-6 p-2 m-0">
                AML/CFT/ WMD ဆိုင်ရာ <br>အသိပညာမြှင့်တင်‌ရေး သင်တန်း ကျင်းပပြီးစီးခြင်း
              </h5>
            </div>
            <div class="col text-center p-2">
              <a href="#" class="badge bg-frd text-dark text-decoration-none"># Office No (34) Nay Pyi Taw</a>
            </div>
            <div class="col text-center p-2">
              <a href="#" class="btn btn-sm animate">
                <i class="fa-solid fa-circle-chevron-right"></i> View More
              </a>
            </div>
            <div class="col text-center p-2">
              <small class="text-secondary">
                Posted on 23.1.2023
              </small>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 p-2">
        <div class="card animate">
          <div class="card-body p-2">
            <div class="col">
              <img src="src/post/03/post03.png" class="img-fluid animate rounded" alt="post image">
            </div>
            <div class="col text-center">
              <h5 class="fs-6 p-2 m-0">
                စီမံကိန်းနှင့်ဘဏ္ဍာရေးဝန်ကြီးဌာန၊ငွေရေးကြေးရေးကြီးကြပ်စစ်ဆေးရေးဦးစီးဌာနမှ ငွေကြေး ခဝါချမှု
              </h5>
            </div>
            <div class="col text-center p-2">
              <a href="#" class="badge bg-frd text-dark text-decoration-none"># Office No (34) Nay Pyi Taw</a>
            </div>
            <div class="col text-center p-2">
              <a href="#" class="btn btn-sm animate">
                <i class="fa-solid fa-circle-chevron-right"></i> View More
              </a>
            </div>
            <div class="col text-center p-2">
              <small class="text-secondary">
                Posted on 23.1.2023
              </small>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 p-2">
        <div class="card animate">
          <div class="card-body p-2">
            <div class="col">
              <img src="src/post/04/post04.png" class="img-fluid animate rounded" alt="post image">
            </div>
            <div class="col text-center">
              <h5 class="fs-6 p-2 m-0">
                AML/CFT ဆိုင်ရာ <br>အသိပညာမြှင့်တင်‌ရေးသင်တန်း ကျင်းပပြီးစီးခြင်း
              </h5>
            </div>
            <div class="col text-center p-2">
              <a href="#" class="badge bg-frd text-dark text-decoration-none"># Office No (34) Nay Pyi Taw</a>
            </div>
            <div class="col text-center p-2">
              <a href="#" class="btn btn-sm animate">
                <i class="fa-solid fa-circle-chevron-right"></i> View More
              </a>
            </div>
            <div class="col text-center p-2">
              <small class="text-secondary">
                Posted on 23.1.2023
              </small>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12 p-2">
        <div class="col text-center p-2">
          <a href="./" class="btn animate">
            <i class="fa-regular fa-circle-right"></i> More News
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('post-announcement-and-information')
<div class="container">
  <div class="row pt-3 pb-3">
    <div class="col text-center">
      <h5 class="p-2 m-0">
        Announcement And Information
      </h5>
    </div>
    <div class="row m-auto">
      <div class="col-lg-3 col-md-6 p-2">
        <div class="card animate">
          <div class="card-body p-2">
            <div class="col text-center">
              <h5 class="fs-6 p-2 m-0">
                အသေးစားငွေရေးကြေးရေးလုပ်ငန်း ကြီးကြပ်မှု ကော်မတီ ညွှန်ကြားချက်အမှတ် ၁/၂၀၁၆ မှ ၅/၂၀၁၆ ထိ
              </h5>
            </div>
            <div class="col text-center p-2">
              <a href="src/pdf/announcement-and-information/announcement01.pdf" class="btn btn-sm animate">
                <i class="fa-solid fa-circle-down"></i> Download
              </a>
            </div>
            <div class="col text-center p-2">
              <small class="text-secondary">
                Posted on 23.1.2023
              </small>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 p-2">
        <div class="card animate">
          <div class="card-body p-2">
            <div class="col text-center">
              <h5 class="fs-6 p-2 m-0">
                အသေးစားငွေရေးကြေးရေးလုပ်ငန်း ကြီးကြပ်မှု ကော်မတီ ညွှန်ကြားချက်အမှတ် ၁/၂၀၁၇
              </h5>
            </div>
            <div class="col text-center p-2">
              <a href="src/pdf/announcement-and-information/announcement02.pdf" class="btn btn-sm animate">
                <i class="fa-solid fa-circle-down"></i> Download
              </a>
            </div>
            <div class="col text-center p-2">
              <small class="text-secondary">
                Posted on 22.1.2023
              </small>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 p-2">
        <div class="card animate">
          <div class="card-body p-2">
            <div class="col text-center">
              <h5 class="fs-6 p-2 m-0">
                အသေးစားငွေရေးကြေးရေးလုပ်ငန်း ကြီးကြပ်မှု ကော်မတီ ညွှန်ကြားချက်အမှတ် ၂/၂၀၁၇
              </h5>
            </div>
            <div class="col text-center p-2">
              <a href="src/pdf/announcement-and-information/announcement03.pdf" class="btn btn-sm animate">
                <i class="fa-solid fa-circle-down"></i> Download
              </a>
            </div>
            <div class="col text-center p-2">
              <small class="text-secondary">
                Posted on 22.1.2023
              </small>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 p-2">
        <div class="card animate">
          <div class="card-body p-2">
            <div class="col text-center">
              <h5 class="fs-6 p-2 m-0">
                အာမခံလုပ်ငန်းကြီးကြပ်ရေးအဖွဲ့ ညွှန်ကြားချက်အမှတ် <br>၅/၂၀၁၇
              </h5>
            </div>
            <div class="col text-center p-2">
              <a href="src/pdf/announcement-and-information/announcement04.pdf" class="btn btn-sm animate">
                <i class="fa-solid fa-circle-down"></i> Download
              </a>
            </div>
            <div class="col text-center p-2">
              <small class="text-secondary">
                Posted on 23.1.2023
              </small>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12 p-2">
        <div class="col text-center p-2">
          <a href="./" class="btn animate">
            <i class="fa-regular fa-circle-right"></i> More Announcements
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('videos')
<div class="container">
    <div class="row pt-3 pb-3">
        <div class="col text-center">
            <h5 class="p-2 m-0">
                Videos
            </h5>
        </div>
        <div class="row m-auto">
            <div class="col-lg-3 p-2">
                <div class="col">
                    <iframe width="100%" height="200" src="https://www.youtube.com/embed/BE86hZcNhW4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-3 p-2">
                <div class="col">
                    <iframe width="100%" height="200" src="https://www.youtube.com/embed/ehLHacGZQEg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-3 p-2">
                <div class="col">
                    <iframe width="100%" height="200" src="https://www.youtube.com/embed/-bhFqp4H3HA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-3 p-2">
                <div class="col">
                    <iframe width="100%" height="200" src="https://www.youtube.com/embed/i3HSD0PVFKY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
