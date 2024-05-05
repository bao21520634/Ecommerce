<x-app-layout>    <?php if ($products->count() === 0) : ?>
        <div class="text-center text-gray-600 py-16 text-xl">
            There are no products published
        </div>
    <?php else : ?>
        <div class="grid gap-2 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-5 p-3">
            @foreach($products as $product)
            <!-- Product Item -->
            <div x-data="productItem({{ json_encode([
                        'id' => $product->id,
                        'slug' => $product->slug,
                        'image' => $product->image ?: '/img/noimage.png',
                        'title' => $product->title,
                        'price' => $product->price,
                        'addToCartUrl' => route('cart.add', $product)
                    ]) }})" class="border border-1 border-gray-200 rounded-md hover:border-blue-600 transition-colors bg-white">
                <a href="{{ route('product.view', $product->slug) }}" class="aspect-w-3 aspect-h-2 block overflow-hidden">
                    <img :src="product.image" alt="" class="object-cover rounded-lg hover:scale-105 hover:rotate-1 transition-transform" />
                </a>
                <div class="p-4">
                    <h3 class="text-xl whitespace-nowrap overflow-hidden text-ellipsis">
                        <a href="{{ route('product.view', $product->slug) }}">
                            {{$product->title}}
                        </a>
                    </h3>
                </div>
                <div class="px-4 py-2">
                    <h5 class="font-bold text-xl">{{number_format($product->price)}}đ</h5>
                </div>
                <div class="flex justify-between py-3 px-4">
                    <button class="btn-primary" @click="addToCart()">
                        Add to Cart
                    </button>
                </div>
            </div>
            <!--/ Product Item -->
            @endforeach
        </div>
        {{$products->appends(['sort' => request('sort'), 'search' => request('search')])->links()}}
    <?php endif; ?>
</x-app-layout>