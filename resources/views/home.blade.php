<!DOCTYPE html>
<html dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>الموقع الرسمي لهيئة التربية والتعليم في إقليم الجزيرة</title>
    <meta
      name="description"
      content="نتائج امتحانات الشهادتين الإعدادية والثانوية بفروعها ( العلمي _الأدبي _ المهني )"
    />
    <!-- Bootstrap-Link -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap/js/bootstrap.bundle.min.js') }}" />
    <!-- Css file -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/main.css') }}" />
  </head>
  <body>
    <div class="container">
      <header class="py-2 border-bt">
        <div class="logo d-flex align-items-center">
          <div class="imageLogo">
            <img src="{{ asset('assets/frontend/images/logo.png') }}" alt="logo" width="80" />
          </div>
          <div class="text mx-2">
            <h1 class="fw-bolder h3"> الموقع الرسمي للإدارة الذاتية لشمال وشرق سوريا
هيئة التربية والتعليم في إقليم الجزيرة</h1>
            <span class="fs-3">هيئه التربية والتعليم</span>
          </div>
        </div>
      </header>
      <main>
        <div class="content text-center my-5">
          <div class="text-content">
            <h1 class="fw-bolder">
              التعليم الاساسي والثانوي<span class="sp-color">2023-2024</span>
            </h1>
          </div>
          @if(Session::get('error'))
          <div class="container">
            <div class="alert-danger alert">{{ Session::get('error') }}</div>
          </div>
        @endif

          @error(('code'))
          <div class="container">
            <div class="alert-danger alert">{{ $message }}</div>
          </div>
        @endif
          @error(('section'))
          <div class="container">
            <div class="alert-danger alert">{{ $message }}</div>
          </div>
        @endif

          <div class="inp">
            <div class="mb-3 text-end">
              <form action="{{ route('natiga.thanway') }}" method="post" id="natigaForm">
                @csrf
                              <label for="exampleFormControlInput1" class="form-label fs-3"
                >رقم الإكتتاب </label
              >
              <input
                type="text"
                class="form-control fs-3"
                id="exampleFormControlInput1"
                placeholder="ادخل رقم الإكتتاب "
                name="code"
              />
              <select name="section"
              class="form-select form-select-lg mb-3 my-3 fs-4 text-muted"
              aria-label="Large select example"
              required
            >
            <option selected disabled >اختر الفرع </option>
              <option value="1">الاحرار عربي(اعدادي و ثانوي)</option>
              <option value="2">الاعدادي</option>
              <option value="3"> الثانوي(علمي وادبي)</option>
              <option value="4">الاحرار كردي</option>
              <option value="5"> (عربي و كردي)ثانوي مهني</option>
            </select>
              </form>
            </div>
            <button type="submit" form="natigaForm" class="btn btn-primary fs-3">بحث</button>
          </div>

        </div>
      </main>
      <footer class="fixed-bottom text-center py-1 w-100">
        <p class="text-black fw-bold"> جميع الحقوق محفوظة للإدارة الذاتية لشمال وشرق سوريا _ هيئة التربية والتعليم في إقليم الجزيرة 2023</p>
      </footer>
    </div>
  </body>
</html>
