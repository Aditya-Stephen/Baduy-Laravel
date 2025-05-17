@if ($articles->isEmpty())
    <p>Tidak ada artikel yang ditemukan.</p>
@else
    @foreach ($articles as $article)
        <div class="article-post">
            <div class="author-profile">
                <img src="{{ asset('images/user-profile.jpg') }}" alt="{{ $article->author }}" class="profile-image">
            </div>
            <div class="post-content">
                <h3>{{ $article->title }}</h3>
                <p class="date">{{ $article->created_at->format('F j, Y') }}</p>
                <p>{{ Str::limit($article->content, 150) }}</p>
                <a href="{{ route('artikel.show', $article->id) }}" class="read-more">Baca lebih banyak...</a>
            </div>
        </div>
    @endforeach
@endif

