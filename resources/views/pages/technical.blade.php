@extends('layouts.app')

@section('content')

<div class="jumbotron text-center">
  <div class="container">
    <h2 style="text-decoration: underline">Technical Fluency</h2>
    <p>The following is a general overview of my technical stack, including languages, technologies, frameworks, and tools.</p>
    <p><strong>Note</strong>: Being almost entirely self taught, these values are based of my personal comfort level of each item listed.</p>
  </div>
</div>

<div class="container">
  <nav>
    <div class="nav nav-tabs" id="techNavTab" role="tablist">
      <a class="nav-item nav-link active" id="navLangTab" data-toggle="tab" href="#nav-lang" role="tab" aria-controls="nav-lang" aria-selected="true">Languages</a>
      <a class="nav-item nav-link" id="navTechTab" data-toggle="tab" href="#nav-tech" role="tab" aria-controls="nav-tech" aria-selected="false">Technologies</a>
      <a class="nav-item nav-link" id="navFrameTab" data-toggle="tab" href="#nav-frame" role="tab" aria-controls="nav-frame" aria-selected="false">Frameworks</a>
      <a class="nav-item nav-link" id="navToolsTab" data-toggle="tab" href="#nav-tools" role="tab" aria-controls="nav-tools" aria-selected="false">Tools</a>
    </div>
  </nav>
  <div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-lang" role="tabpanel" aria-labelledby="navLangTab">
      <div class="tabWrapper p-3">
        <span class="progressLabel col">HTML <i class="fab fa-html5"></i></span>
          <div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar"
                  style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Description</div>
          </div>
      </div>
    </div>
    <div class="tab-pane fade" id="nav-tech" role="tabpanel" aria-labelledby="navTechTab">Technologies</div>
    <div class="tab-pane fade" id="nav-frame" role="tabpanel" aria-labelledby="navFrameTab">Frameworks</div>
    <div class="tab-pane fade" id="nav-tools" role="tabpanel" aria-labelledby="navToolsTab">Tools</div>
  </div>
</div>
@endsection

@push('scripts')
    <script src=" {{ asset( 'js/app.js' ) }} "></script>
@endpush