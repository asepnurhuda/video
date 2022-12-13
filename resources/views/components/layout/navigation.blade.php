<div>
    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
    @foreach ($categories as $category)  
        <li><a href="{{ route('frontend.show', $category->id) }}">{{ $category->name }}</a></li>
    @endforeach
</div>