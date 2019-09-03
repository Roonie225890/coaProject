@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-3 p-4 ">
        <img src="svg/watermelonLogo.svg" height=280 width=200>
      </div>
      <div class="col-9 pt-5">
        <div class="d-flex justify-content-between align-items-baseline">
          <h1><strong>推薦農村優良伴手禮</strong></h1>
          <a href="{!! route('products.create') !!}">新增</a>
        </div>
        <div class="d-flex pt-1">
          <div class="pr-5">資料數 <strong>155</strong></div>
          <div class="pr-5">資料分類 <strong>農業旅遊</strong></div>
          <div class="pr-5">更新頻率 <strong>即時</strong></div>
        </div>
        <div class="pt-2 font-weight-bold">原始資料來源 https://ezgo.coa.gov.tw</div>
        <div class="">提供資料包含：產品名稱、產品特色、購買地點、出品單位、規格與售價、訂購網址、出品單位聯絡電話等欄位資料。</div>
      </div>
    </div>
    <div class="content">
        <div class="clearfix"></div>



        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('products.table')
            </div>
        </div>
        <div class="text-center">

        </div>
    </div>
@endsection
