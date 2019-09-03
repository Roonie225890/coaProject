@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="content">
      <div class="card mb-3">
          <img src="{{ $product->img }}" class="card-img-top" alt="...">
          <div class="card-body">
              <h1 class="card-title"><strong>{{ $product->name }}</strong></h1>
              <h3 class="card-text"><strong>{{ $product->produce_org }}</strong></h3>
              <h4 class="card-text">{{ $product->feature }}</h4>
              <p class="card-text">{{ $product->spec_and_price }}</p>
              <p class="card-text">{{ $product->sale_place }}</p>
              <p class="card-text">{{ $product->contact_tel }}</p>
          </div>
      </div>

      @include('layouts.comments')
      <div class="row ">
      <div class="col-md-12 col-sm-12  col-xs-12 col-lg-12">
      <div class="card border-primary mb-3">
            <form method="post" action="{{ route('comments.store') }}">
                @csrf
              <input type="hidden" name="commentable_type" value="App\Product">
              <input type="hidden" name="commentable_id" value="{{$product->id}}">

              <div class="form-group">
                    <div class="card-header bg-primary"><strong>Comments</strong></div>
                    <div class="card-body text-secondary">
                  <textarea placeholder="Enter comment"
                            style="resize: vertical"
                            id="body"
                            name="body"
                            rows="3" spellcheck="false"
                            class="form-control autosize-target text-left">
                  </textarea>
              </div>
              </div>
              <div class="form-group">
                  <input type="submit" class="btn btn-primary col-md-1 offset-md-10" value="Submit"/>
              </div>
            </form>
      </div>
      </div>
      </div>

                <div class="row" style="padding-left: 20px">
                    <a href="{!! route('products.index') !!}" class="btn btn-default col-md-1"><strong>Back</strong></a>
                </div>

    </div>
</div>
@endsection
