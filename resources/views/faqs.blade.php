@extends('layouts.faqs')

@section('page title')
FAQs
@endsection

@section('content-form')
<div class="container">
  <div class="row pt-5 pb-2">
    <div class="col-lg-4 p-2 m-auto">
      <h5 class="p-2 m-0">
        <i class="fa-solid fa-volume-low"></i> ပြည်သူ့အသံ
      </h5>
      <p class="fs-7 border-left-3 p-2 m-0">
        ငွေရေးကြေးရေးကြီးကြပ်စစ်ဆေးရေးဦးစီးဌာနအဖွဲ့ထံသို့ အကြံပြုလိုသည်များ၊ တိုင်ကြားလိုသည်များ၊ တောင်းဆိုလိုသည်များ စသည်တို့ကို ပေးပို့နိုင်ပါသည်။
      </p>
    </div>
  </div>
  <div class="row pt-2 pb-5">
    <div class="col-lg-4 m-auto">
      <div class="col p-2">
        <form id="faqsForm">
          <div class="col pb-3">
            <label class="form-label">
              ပေးပို့သူအမည်
            </label>
            <input type="text" class="form-control faqs" required>
          </div>
          <div class="col pb-3">
            <label class="form-label">
              အီးမေးလ် လိပ်စာ
            </label>
            <input type="email" class="form-control faqs" required>
          </div>
          <div class="col pb-3">
            <label class="form-label">
              မှတ်ပုံတင်အမှတ်
            </label>
            <input type="text" class="form-control faqs" required>
          </div>
          <div class="col pb-3">
            <label class="form-label">
              ဖုန်းနံပါတ်
            </label>
            <input type="text" class="form-control faqs" required>
          </div>
          <div class="col pb-3">
            <label class="form-label">
              အသေးစိတ်ရေးသားရန်
            </label>
            <textarea class="form-control faqs" rows="3"></textarea>
          </div>
          <div class="col text-center">
            <button type="submit" class="btn animate">
              <i class="fa-solid fa-paper-plane"></i> ပေးပို့မည်
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
