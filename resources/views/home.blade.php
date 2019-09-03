@extends('layouts.app')

@section('content')
<div class="container pt-4">

  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
          <img src="{{ $firstImg->img }}" class="d-block w-100"  alt="..."  >
      </div>
      <div class="carousel-item">
        <img src="{{ $secondImg->img }}" class="d-block w-100"  alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ $thirdImg->img  }}" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">{{ $info[0]->name }}</h2>
        <p class="lead">{{ $info[0]->feature }}</p>
      </div>
      <div class="col-md-5">
        <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="{{$info[0]->img}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
        <img src="{{ $info[0]->img }}" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"> </img>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">{{ $info[1]->name }}</h2>
        <p class="lead">{{ $info[1]->feature }}</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="{{ $info[1]->img }}" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"> </img>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">{{ $info[2]->name }}</h2>
        <p class="lead">{{ $info[2]->feature }}</p>
      </div>
      <div class="col-md-5">
        <img src="{{ $info[2]->img }}" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"> </img>
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">

  </footer>
</div>
@endsection
