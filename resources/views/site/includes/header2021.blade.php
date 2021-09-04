<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-xxl">
        <div class="justify-content-center align-items-center d-flex">
          <a class="navbar-brand px-4" href="/">
            <img src="{{asset('marketing2021/img/TSUL_EN_white.png')}}" alt="" width="120" height="auto" class="d-inline-block align-text-top">
          </a>
          <!-- <h1 class="fs-3 text-white">Marketing TSUL</h1> -->
        </div>

        <button class=" bg-transparent d-lg-none border-0" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
          <i class="fas fa-bars text-white fs-2"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto my-2  my-lg-0">
            <li class="nav-item">
              <a class="nav-link active fs-6 linkColor  mx-lg-1 mx-xl-2" aria-current="page" href="{{ route('student.agreement.form') }}">To'lov shartnomasi (talabalar
                uchun) </a>
            </li>

            <li class="nav-item">
              <a class="nav-link fs-6 linkColor  mx-lg-1 mx-xl-2" href="{{ route('super.super') }}">Tabaqalashtirilgan to'lov kontrakt (magistratura bakalavr)
              </a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link fs-6 linkColor  mx-lg-1 mx-xl-2" href="{{ route('student.agreement.lyceum_form') }}">Litsey shartnoma
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-6 linkColor  mx-lg-1 mx-xl-2" href="{{ route('payment_check') }}">To`lovlar tarixi</a>
            </li>
          </ul>

        </div>
      </div>
    </nav>
  </header>