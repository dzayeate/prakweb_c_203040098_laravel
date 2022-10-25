@extends('layouts.main')
@section('container')

    <article>
        <h2>{{ $post->title }}</h2>

        <p>By. <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>


        {!! $post->body !!}
    </article>

    <a href="/posts" class="text-decoration-none d-block mt-5">Back to posts</a>
@endsection

{{-- Post::create([
    'title' => 'Judul Ketiga',
    'category_id' => 3,
    'slug' => 'judul-ketiga',
    'excerpt' => 'Lorem ipsum ketiga',
    'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio provident sunt obcaecati esse sed quod, quas cumque animi! Atque, incidunt ea dolorem quisquam ipsam consequatur asperiores, facere minus aspernatur officiis, laboriosam architecto! Ab quibusdam, necessitatibus saepe, provident aliquid eaque vitae,</p><p>dolores officia beatae magnam minima cumque natus rem culpa? Mollitia est possimus necessitatibus cupiditate tempora maxime dicta consequuntur ullam voluptas, earum nisi reiciendis omnis! In vero odit fuga vel officia iusto, similique non. A eaque aperiam blanditiis? Voluptas dolor quis veritatis odit totam, culpa praesentium ipsam qui, officiis ad perferendis fuga, iste eligendi. Provident iure dolores ipsam. Tempora minima iste itaque excepturi. Accusantium exercitationem, perferendis, sunt reprehenderit ipsam blanditiis excepturi doloremque adipisci ex, itaque eveniet ea ipsum perspiciatis provident harum iusto beatae.</p><p>Aperiam enim neque aliquid a natus, mollitia consequuntur provident sit alias harum possimus! Quia sequi quis nesciunt exercitationem, facilis mollitia neque autem earum saepe officia ut quisquam magni sint libero animi consequatur nihil vero odio rerum dicta veniam qui tempora excepturi. Minima adipisci atque non asperiores placeat! Maiores rerum doloribus praesentium doloremque sequi velit excepturi vitae libero, architecto, beatae porro aliquam sunt quidem, numquam consequuntur. Aspernatur, sed quibusdam. Error cupiditate atque dolore eius sapiente reiciendis possimus aspernatur ut?</p>',
]) --}}
