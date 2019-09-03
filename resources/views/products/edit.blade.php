@extends('layouts.app')

@section('content')

    <div class="container">
      <h1>
          Product
      </h1>
  <div class="row">
    <div class="col-8">
      <form method="post" action="{{ route('products.update', $product->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="name">產品名稱</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ $product->name }}">
        </div>

        <div class="form-group">
          <label for="feature">產品特色</label>
          <textarea class="form-control" id="feature" name="feature" rows="3" placeholder="Write your description here..." value="{{ $product->feature }}"></textarea>
        </div>

        <div class="form-group">
          <label for="sale_place">購買地點</label>
          <input type="text" class="form-control" id="sale_place" name="sale_place" placeholder="Address" value="{{ $product->sale_place }}">
        </div>

        <div class="form-group">
          <label for="produce_org">出品單位</label>
          <input type="text" class="form-control" id="produce_org"  name="produce_org" placeholder="Organization" value="{{ $product->produce_org }}">
        </div>

        <div class="form-group">
          <label for="spec_and_price">購買地點</label>
          <input type="text" class="form-control" id="spec_and_price" name="spec_and_price" placeholder="Price" value="{{ $product->spec_and_price }}">
        </div>

        <div class="form-group">
          <label for="contact_tel">聯絡電話</label>
          <input type="text" class="form-control" id="contact_tel" name="contact_tel" placeholder="Price" value="{{ $product->contact_tel }}">
        </div>

        <div class="form-group">
          <label for="img">產品圖片</label>
          <input type="text" class="form-control" id="img" name="img" placeholder="URL" value="{{ $product->img }}">
        </div>

        <!-- <div class="form-group">
          <label for="group2">add a picture</label>
          <div class="input-group" id="group2">
            <div class="input-group-prepend">
              <span class="input-group-text" id="addon2"><i class="far fa-file-image"></i></span>
            </div>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="file2" aria-describedby="addon2">
              <label class="custom-file-label" for="file2">Choose file</label>
            </div>
          </div>
        </div> -->

        <button type="submit" class="btn btn-info">Submit</button>
      </form>
    </div>
  </div>
</div>
@endsection
