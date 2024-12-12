<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Portofolio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Plugins -->
  <link rel="stylesheet" href="{{ asset('template/plugins/bootstrap/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('template/plugins/slick/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('template/plugins/themify-icons/themify-icons.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-zR2Th81p0pLWrVD/vj7N2UJm/kc4ID8lmjROKt2tCa9Q+h/oihUFQGgWCwLhBAVh6XK6+0ihtR1xw+PSY1KGpc=%22"   
 crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Main Stylesheet -->
  <link href="{{ asset('template/css/style.css') }}" rel="stylesheet">
  
  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('template/images/favicon.ico') }}" type="image/x-icon">
</head>

<body>
  <header class="navigation fixed-top">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand font-tertiary h3" href="#">Portofolio</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
        aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse text-center" id="navigation">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#skills">Skills</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#projects">Project</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#certificates">Certificate</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- hero area -->
  <section class="hero-area bg-primary" id="parallax">
    <div class="container">
      <div class="row">
        <div class="col-lg-11 mx-auto">
          <h1 class="text-white font-tertiary">            
            @foreach ($home as $home2)
          {{ $home2->title }}
          </h1>
          <h1 class="text-white font-tertiary">            
          {{ $home2->content }}
          @endforeach</h1>
        </div>
      </div>
    </div>
    
    <!-- Existing layer background decorations remain the same -->
    <div class="layer-bg w-100">
      <img class="img-fluid w-100" src="{{ asset('template/images/illustrations/leaf-bg.png') }}" alt="bg-shape">
    </div>
    <!-- ... other layer divs remain the same ... -->

    <!-- social icon -->
     @foreach ($contact as $contact2)
    <ul class="list-unstyled ml-5 mt-3 position-relative zindex-1">
      <li class="mb-3"><a class="text-white" href="{{ $contact2->github }}"><i class="ti-github"></i></a></li>
      <li class="mb-3"><a class="text-white" href="{{ $contact2->instagram }}"><i class="ti-instagram"></i></a></li>
      @endforeach
    </ul>
  </section>

  <!-- about -->
  <section class="section bg-white text-dark" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 mx-auto text-center">
          @foreach ($about as $about2)
        <h2 class="section-title">{{ $about2->title }}</h2>
          <p class="font-secondary paragraph-lg text-dark">
          {{ $about2->content }}
          </p>
          @endforeach
        </div>
      </div>
    </div>
  </section>
  <!-- /about -->

<!-- skills -->
<section class="section bg-purple text-white" id="skills">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-title text-white">Skills</h2>
      </div>
      @foreach ($skill as $skill2)
      <div class="col-lg-3 col-sm-6 mb-4">
        <div class="card shadow text-center card-equal-height">
          <div class="card-body">
            <h4 class="card-title">{{ $skill2->title }}</h4>
            <p class="card-text">{{ $skill2->description }}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
<!-- /skills -->



  <!-- Project -->
  <section class="section bg-white text-dark" id="projects">
  <div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-12 text-center">
        <h2 class="section-title">Project</h2>
      </div>
      <div class="col-lg-4 col-md-6 mb-4 text-center">
        <div class="card shadow">
          <div class="card-body">
            @foreach ($project as $project2)
            <p class="mb-0">{{ \Carbon\Carbon::parse($project2->date)->format('d M Y') }}</p>
            <h4>{{ $project2->name }}</h4>
            <h6 class="text-light">{{ $project2->description }}</h6>
            <a href="{{ $project2->link }}" class="btn btn-primary mt-3 text-white">View Project</a>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ./experience -->

<!-- Certificate -->
<section class="section bg-purple text-white" id="certificates">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="section-title text-white">Certificates</h2>
      </div>
      @foreach ($certificate as $certificate2)
      <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <article class="card shadow card-equal-height">
          <div class="card-body text-center">
            <h4 class="card-title">{{ $certificate2->name }}</h4>
            <p class="card-text">{{ $certificate2->description }}</p>
            <p class="card-text"><strong>Issued By:</strong> {{ $certificate2->issued_by }}</p>
            <p class="card-text"><strong>Issued At:</strong> {{ \Carbon\Carbon::parse($certificate2->issued_at)->format('d M Y') }}</p>
            <a href="{{ $certificate2->file }}" class="btn btn-xs btn-primary" target="_blank">View Certificate</a>
          </div>
        </article>
      </div>
      @endforeach
    </div>
  </div>
</section>
<!-- /Certificate -->




  <!-- footer -->
  <div id="contact">
  <footer class="bg-light">
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-12 mb-4">
          <h3 class="section-title text-black text-center">Contact Me</h3>
            <h4 class="text-black">Jika memiliki pertanyaan atau proyek yang ingin dibicarakan, hubungi saya melalui:</h4>
          </div>
          <div class="col-md-4">
            <h5 class="text-dark">Email</h5>
              @foreach ($contact as $contact2)
                <p class="paragraph-lg font-secondary">
                  <i class="fa-solid fa-envelope"></i> {{ $contact2->email }}
                </p>
            </div>
            <div class="col-md-4">
            <h5 class="text-dark">WhatsApp</h5>
              <a href="{{ $contact2->phone }}">
                <p class="text-black paragraph-lg font-secondary">
                  <i class="fa-brands fa-whatsapp"></i> WhatsApp (click here)
                  </p>
                </a>
            </div>
                @endforeach
        </div>
      </div>
    </div>
  </footer>
</div>


  <!-- jQuery -->
  <script src="{{ asset('template/plugins/jQuery/jquery.min.js') }}"></script>
  <!-- Bootstrap JS -->
  <script src="{{ asset('template/plugins/bootstrap/bootstrap.min.js') }}"></script>
  <!-- slick slider -->
  <script src="{{ asset('template/plugins/slick/slick.min.js') }}"></script>
  <!-- filter -->
  <script src="{{ asset('template/plugins/shuffle/shuffle.min.js') }}"></script>

  <!-- Main Script -->
  <script src="{{ asset('template/js/script.js') }}"></script>
</body>
</html>