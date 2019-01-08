<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href=" {{ route('home') }} "></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="mainNav">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href=" {{ route('home') }} ">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Projects</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href=" {{ route('tech') }} ">Technical Skills</a>
      </li>
    </ul>
    <div class="my-2 my-lg-0 socialIcons">
        
        <a class="navbar-brand mx-auto px-2" href="https://www.linkedin.com/in/steve-razzano-79b9bb79/" target="_blank">
            <i class="fab fa-linkedin fa-lg"></i>
        </a>
        <a class="navbar-brand mx-auto px-2" href="https://github.com/srazzano15/" target="_blank">
            <i class="fab fa-github-square fa-lg"></i>
        </a>
    </div>
  </div>
</nav>
{{-- <a class="navbar-brand" href="https://www.linkedin.com/in/steve-razzano-79b9bb79/" target="_blank">
                <i class="fab fa-linkedin fa-lg"></i>
            </a> --}}
            {{-- <a class="navbar-brand" href="https://www.linkedin.com/in/steve-razzano-79b9bb79/" target="_blank">
                <i class="fab fa-github-square fa-lg"></i>
            </a> --}}


