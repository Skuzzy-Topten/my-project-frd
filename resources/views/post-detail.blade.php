@extends('layouts.post-detail')

@section('page title')
Post Detail
@endsection


@section('breadcrumbs')
<div class="container">
  <div class="row pt-3 pb-3">
    <div class="col">
      <p class="border-left-3 p-2 m-0">
        <a href="./" class="breadcrumbs text-decoration-none pe-2">
          <i class="fa-solid fa-house"></i> မူလစာမျက်နှာ /
        </a>
        <a href="../news" class="breadcrumbs text-decoration-none pe-2">
          <i class="fa-solid fa-newspaper"></i> သတင်းနှင့်ကြေငြာချက် /
        </a>
        <a href="#" class="breadcrumbs text-secondary text-decoration-none">
          မီးဘေးအန္တရာယ် မဖြစ်ပွားစေရန် ကြိုတင် ကာကွယ်ခြင်း အသိပညာမျှဝေပေးသည့် အခမ်းအနား
        </a>
      </p>
    </div>
  </div>
</div>
@endsection

@section('content')
<div class="container">
  <div class="row pb-3">
    <div class="col-lg-8 col-md-12 pt-2 pb-2">
      <div class="card">
        <div class="card-body p-2">
          <div class="col p-2">
            <h5 class="fs-6 p-2 m-0">
              မီးဘေးအန္တရာယ် မဖြစ်ပွားစေရန် ကြိုတင် ကာကွယ်သည့် အသိပညာမျှဝေပေးသည့် အခမ်းအနား
            </h5>
            <small class="text-secondary p-2">
              Posted on 23.1.2023
            </small>
          </div>
          <div class="col p-2">
            <img src="../src/post/01/post01.png" class="img-fluid" alt="post image">
          </div>
          <div class="col p-2">
            <p class="p-2 m-0">
              စီမံကိန်းနှင့်ဘဏ္ဍာရေးဝန်ကြီးဌာန ၊ ငွေရေးကြေးရေးကြီးကြပ် စစ်‌ဆေးရေးဦးစီးဌာနတွင် မီးဘေးအန္တရာယ် မဖြစ်ပွားစေရန် ကြိုတင်ကာကွယ်သည့်အနေဖြင့် မီးလောင်မှုဖြစ်စေသည့်  သဘောတရားများနှင့် မီးဘေးအန္တရာယ်ဖြစ်လာလျင် အချိန်မီ မီးငြိမ်းသတ်နိုင်ရေး နှင့် အရေးပေါ် တုံ့ပြန်နိုင်မည့် အစီအမံများကို မြန်မာနိုင်ငံမီးသတ်ဦးစီးဌာနနှင့် ပူးပေါင်း၍ အသိပညာမျှဝေ ပေးသည့် အခမ်းအနားအား ၉-၁-၂၀၂၃ ရက်နေ့တွင် ရုံးအမှတ်(၃၄)၌ ကျင်းပပြုလုပ်ခဲ့ပါသည်။ အဆိုပါအခမ်းအနားသို့ ငွေရေးကြေးရေးကြီးကြပ်စစ်‌ဆေးရေးဦးစီးဌာန ညွှန်ကြားရေးမှူးချုပ်၊  ဦးဇော်နိုင် ၊ ဒုတိယညွှန်ကြားရေးမှူးချုပ်များ ၊ ညွှန်ကြားရေးမှူးများနှင့် အရာထမ်း၊ အမှုထမ်းများ တက်ရောက်၍ စာတွေ့ ၊ လက်တွေ့သရုပ်ပြမှုများအား လေ့လာခဲ့ကြပါသည်။
            </p>
          </div>
          <div class="col p-2">
            <p class="p-2 m-0">
              File Attachment : <a href="#" class="btn animate"><i class="fa-solid fa-circle-down"></i> Download</a>
            </p>
          </div>
          <div class="col p-2">
            <p class="p-2 m-0">
              Tags : <a href="#" class="badge text-dark border"># Office No (34) Nay Pyi Taw</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="row">
        <div class="col-lg-12 col-md-12 pt-2 pb-2">
          <div class="col">
            <div class="card">
              <div class="card-body p-2">
                <div class="col pb-2">
                  <h5 class="border-left-3 p-2 m-0">
                    Recent Posts
                  </h5>
                </div>
                <div class="col pb-2">
                  <div class="card">
                    <div class="card-body p-2">
                      <p class="p-2 m-0">
                        မီးဘေးအန္တရာယ် မဖြစ်ပွားစေရန် ကြိုတင် ကာကွယ်သည့် အသိပညာမျှဝေပေးသည့် အခမ်းအနား
                      </p>
                      <div class="col text-center">
                        <a href="#" class="btn animate">
                          <i class="fa-solid fa-circle-right"></i> View More
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col pb-2">
                  <div class="card">
                    <div class="card-body p-2">
                      <p class="p-2 m-0">
                        AML/CFT/ WMD ဆိုင်ရာ အသိပညာမြှင့်တင်‌ရေး သင်တန်း ကျင်းပပြီးစီးခြင်း
                      </p>
                      <div class="col text-center">
                        <a href="#" class="btn animate">
                          <i class="fa-solid fa-circle-right"></i> View More
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col pb-2">
                  <div class="card">
                    <div class="card-body p-2">
                      <p class="p-2 m-0">
                        စီမံကိန်းနှင့်ဘဏ္ဍာရေးဝန်ကြီးဌာန၊ငွေရေးကြေးရေးကြီးကြပ်စစ်ဆေးရေးဦးစီးဌာနမှ ငွေကြေး ခဝါချမှု
                      </p>
                      <div class="col text-center">
                        <a href="#" class="btn animate">
                          <i class="fa-solid fa-circle-right"></i> View More
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-6 pt-2 pb-2">
          <div class="col">
            <div class="card">
              <div class="card-body p-2">
                <div class="col pb-2">
                  <h5 class="border-left-3 p-2 m-0">
                    Categories
                  </h5>
                </div>
                <div class="col p-2">
                  <a href="#" class="badge text-primary text-decoration-none border p-2 m-2">
                    # သတင်းနှင့် ထုတ်ပြန်ချက်
                  </a>
                  <a href="#" class="badge text-primary text-decoration-none border p-2 m-2">
                    # AML / CFT
                  </a>
                  <a href="#" class="badge text-primary text-decoration-none border p-2 m-2">
                    # နိုင်ငံတကာပူးပေါင်းဆောင်ရွက်မှု
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-6 pt-2 pb-2">
          <div class="col">
            <div class="card">
              <div class="card-body p-2">
                <div class="col pb-2">
                  <h5 class="border-left-3 p-2 m-0">
                    Tags
                  </h5>
                </div>
                <div class="col p-2">
                  <a href="#" class="badge text-primary text-decoration-none border p-2 m-2">
                    # Office No (34) Nay Pyi Taw
                  </a>
                  <a href="#" class="badge text-primary text-decoration-none border p-2 m-2">
                    # Office No (34) Yangon
                  </a>
                  <a href="#" class="badge text-primary text-decoration-none border p-2 m-2">
                    # နOffice No (34) Pathein
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
