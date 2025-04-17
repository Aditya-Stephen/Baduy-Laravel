<x-app-layout>
    <div class="article-detail-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="article-detail-content">
                        <div class="article-post">
                            <div class="author-profile">
                                <img src="{{ $article->profile_picture }}" alt="{{ $article->author_name }}" class="profile-image">
                            </div>
                            <div class="post-content">
                                <h3>{{ $article->author_name }}</h3>
                                <h1>{{ $article->title }}</h1>
                                <p class="date">{{ $article->created_at->format('F j, Y') }}</p>
                                <div class="article-full-content">
                                    {!! nl2br(e($article->content)) !!}
                                </div>
                                <a href="{{ route('artikel') }}" class="back-button">Kembali ke Artikel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>