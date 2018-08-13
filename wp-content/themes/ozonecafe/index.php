<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title>アーカイブ | Ozone Cafe</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../style.css" />
		<?php wp_enqueue_style(
			'base-style',                     // CSSの識別ID
			esc_url(get_stylesheet_uri()),    // CSSファイルへのpath
			array(),                          // 先に読み込むCSS
			'1.0',                            // CSSファイルのバージョン指定
			'all'                             // CSSのmedia属性
		); ?>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

		<?php // ヘッダーheader.phpの読み込み ?>
		<?php get_header(); ?>

		<!--▼メインコンテンツ : 開始-->
		<div id="main" class="l-two-column">
			<div class="container">

				<!-- ▼メインカラム : 開始-->
				<div id="main-content" class="l-main site-main">

					<!--▼記事コンテンツエリア : 開始-->
					<div class="content-area posts" role="main">

						<header class="page-header">
							<h1 class="archive-title"><?php the_archive_title(); ?></h1>
						</header><!--/.page-header-->

						<!-- ▼ブログ記事一覧 : 開始 -->
						<?php if (have_posts()): ?>
							<?php while (have_posts()):
								the_post(); ?>
						<!--▼1記事目 : 開始-->
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<header class="entry-header">
								<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
								<div class="entry-meta">
									<span class="date"><time class="entry-date"><?php the_date(); ?></time></span>
									<span class="categories-links info"><?php the_category(','); ?></span>
								</div>
							</header><!--/.entry-header-->

							<div class="entry-content">
								<?php the_content('&raquo;詳しく見る'); ?>
							</div><!--/.entry-content-->

							<footer class="entry-footer">
								<span class="comments-link"><a href="#">1件のコメント</a></span>
								<?php the_tags('<span class="tag-links">',',','</span>'); ?>
							</footer><!--/.entry-footer-->

						</article>
						<!--▲1記事目 : 終了-->
							<?php endwhile; ?>
						<!-- ▲ブログ記事一覧 : 終了 -->

						<!--▼ ページネーション : 開始-->
							<?php the_posts_pagination(); ?>
						<!-- <nav class="navigation pagination" role="navigation">
							<h2 class="screen-reader-text">投稿ナビゲーション</h2>
							<div class="nav-links"><span class='page-numbers current'>1</span>
								<a class='page-numbers' href='#'>2</a>
								<a class='page-numbers' href='#'>3</a>
								<a class="next page-numbers" href="#">次ページへ</a>
							</div>
						</nav> -->
						<!--▲ ページネーション : 終了-->
							<?php else: ?>
							<p>まだ記事はありません。</p>
						<?php endif; ?>

					</div>
					<!--▲記事コンテンツエリア : 終了-->

				</div>
				<!-- ▲メインカラム : 終了-->

				<?php // サイドバーsidebar.phpの読み込み ?>
				<?php get_sidebar(); ?>

			</div><!-- /.container -->

		</div>
		<!--▲メインコンテンツ : 終了-->

		<?php // フッターfooter.phpの読み込み ?>
		<?php get_footer(); ?>

		<?php wp_footer(); ?>
	</body>
</html>
