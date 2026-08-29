<?php get_header(); ?>

<!-- メインコンテンツ -->
<main class="content-wrapper">
  <div class="container">
    <h1 class="page-title">カテゴリー：<?php wp_title(''); ?></h1>

    <div class="posts-grid">
      <!-- 投稿1 -->
      <article class="post-card">
        <div class="post-card-img">No Image (Placeholder)</div>
        <div class="post-card-content">
          <div class="post-meta">
            <span class="post-date">2026.08.21</span>
            <span class="post-category">ブログ</span>
          </div>
          <h3 class="post-card-title"><a href="single.html">WordPressテーマ制作の基本ルール</a></h3>
          <p class="post-card-excerpt">テーマ作成に必要な最小限のファイル構成や、style.cssに必要なヘッダーコメントの書き方について学びます。</p>
          <a href="single.html" class="read-more">詳しく見る &rarr;</a>
        </div>
      </article>

      <!-- 投稿2 -->
      <article class="post-card">
        <div class="post-card-img">No Image (Placeholder)</div>
        <div class="post-card-content">
          <div class="post-meta">
            <span class="post-date">2026.08.20</span>
            <span class="post-category">ブログ</span>
          </div>
          <h3 class="post-card-title"><a href="single.html">テンプレートパーツの分割手法</a></h3>
          <p class="post-card-excerpt">header.phpやfooter.phpなど、共通部分を別ファイルに分割してget_header()などで呼び出す方法を解説します。</p>
          <a href="single.html" class="read-more">詳しく見る &rarr;</a>
        </div>
      </article>

      <!-- 投稿3 -->
      <article class="post-card">
        <div class="post-card-img">No Image (Placeholder)</div>
        <div class="post-card-content">
          <div class="post-meta">
            <span class="post-date">2026.08.19</span>
            <span class="post-category">ブログ</span>
          </div>
          <h3 class="post-card-title"><a href="single.html">メインループとサブクエリの使い分け</a></h3>
          <p class="post-card-excerpt">WordPressで投稿一覧を表示する際に重要となる「ループ処理」の仕組みと、表示件数を制御する方法について学びます。</p>
          <a href="single.html" class="read-more">詳しく見る &rarr;</a>
        </div>
      </article>
    </div>

    <!-- ページネーション -->
    <nav class="pagination" aria-label="ページナビゲーション">
      <ul class="page-numbers">
        <li><a class="page-numbers" href="#">&laquo; 前へ</a></li>
        <li><a class="page-numbers current" href="#" aria-current="page">1</a></li>
        <li><a class="page-numbers" href="#">2</a></li>
        <li><a class="page-numbers" href="#">3</a></li>
        <li><a class="page-numbers" href="#">次へ &raquo;</a></li>
      </ul>
    </nav>

  </div>
</main>

<?php get_footer(); ?>