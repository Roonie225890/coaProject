@extends('layouts.app')
@section('content')
<div class="container pt-5">
  <dl class="row">
  <dt class="col-sm-3">URL</dt>
  <dd class="col-sm-9"><p>http://127.0.0.1:8000/api/products</p></dd>
  <dt class="col-sm-3">參數(選填)</dt>
  <dd class="col-sm-9"><p>{ID}</p></dd>


  <dt class="col-sm-3">回傳資訊</dt>
  <dd class="col-sm-9">
    <dl class="row">
      <dt class="col-sm-4">name</dt>
      <dd class="col-sm-8">產品名稱</dd>
      <dt class="col-sm-4">feature</dt>
      <dd class="col-sm-8">產品特色</dd>
      <dt class="col-sm-4">sale_place</dt>
      <dd class="col-sm-8">購買地點</dd>
      <dt class="col-sm-4">produce_org</dt>
      <dd class="col-sm-8">出品單位</dd>
      <dt class="col-sm-4">spec_and_price</dt>
      <dd class="col-sm-8">規格與售價</dd>
      <dt class="col-sm-4">contact_tel</dt>
      <dd class="col-sm-8">聯絡電話</dd>
      <dt class="col-sm-4">img</dt>
      <dd class="col-sm-8">產品圖片</dd>
    </dl>
  </dd>
  </dl>
</div>
@endsection
