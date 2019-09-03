<div class="table-responsive">
    <table class="table" id="products-table">
        <thead>
        <tr>
        <th nowrap>產品名稱</th>
        <th>特色</th>
        <th nowrap>出品單位</th>
        <!-- <th>Spec And Price</th> -->
        <th nowrap>觀看次數</th>
        <th colspan="3">動作</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
            <td >{!! $product->name !!}</td>
            <td>{{str_limit($product->feature,150,'...')}}</td>
            <td>{!! $product->produce_org !!}</td>
            <!-- <td>{!! $product->spec_and_price !!}</td> -->
            <td>{!! $product->view_count !!}</td>
                <td>

                    <div class='btn-group'>
                        <a href="{!! route('products.show', [$product->id]) !!}" class='btn btn-default '><i class="fas fa-eye"></i></a>
            @if (Auth::user()->role == 1 || Auth::user()->id == $product->user_id)
                        <a href="{!! route('products.edit', [$product->id]) !!}" class='btn btn-default '><i class="fas fa-edit"></i></a>
            <form action="{{ route('products.destroy', $product->id) }}" method="post">
              @method('DELETE')
              @csrf
                    <button type="submit" class="btn btn-danger btn-xs pull-left" style="margin-left: 6px" onclick="var result = confirm('Are you sure you wish to delete this product?');">
                        <i class="fas fa-trash-alt"></i>
                    </button>
            </form>
            @endif
                    </div>

                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
    {{ $products->links() }}
</div>
