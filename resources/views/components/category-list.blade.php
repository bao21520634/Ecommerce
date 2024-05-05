@props(['categoryList'])

<div style="background-color: white" {{ $attributes->merge(['class' => 'category-list flex text-white']) }}>
    @if (!empty($categoryList))
        @foreach($categoryList as $category)
            <div class="category-item relative">
                <a href="{{ route('byCategory', $category) }}" style="color: black" class="cursor-pointer block py-3 px-6 font-medium">
                    {{$category->name}}
                </a>
                <x-category-list class="absolute top-[100%] z-50 hidden flex-col" :category-list="$category->children"/>
            </div>
        @endforeach
    @endif
</div>
