<?= get_header() ?>

<main>
    <div id="top" class="wrapper">
        <ul class="product-list">
            <?php
            $args = [
                'posts_per_page' => 8
            ];
            $posts = get_posts($args);
            ?>
            <?php foreach ($posts as $post) : ?>
                <?php setup_postdata($post); ?>
                <li>
                    <a href="<?= the_permalink() ?>">
                        <img src="<?= the_post_thumbnail_url() ?>" alt="" />
                        <p><?= the_title() ?></p>
                        <p>&yen;<?= esc_html(get_post_meta($post->ID, 'price', true)) ?> +tax</p>
                    </a>
                </li>

            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
        </ul>
        <a class="link-text" href="<?= esc_url(home_url('category/products')) ?>">View More</a>
    </div>
</main>

<?= get_footer() ?>
