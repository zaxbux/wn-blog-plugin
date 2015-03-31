<?php

return [
    'plugin' => [
        'name' => 'Блог',
        'description' => 'Стабилната блог платформа.',
    ],
    'blog' => [
        'menu_label' => 'Блог',
        'menu_description' => 'управление на публикациите',
        'posts' => 'публикации',
        'create_post' => 'създай публикация',
        'categories' => 'категории',
        'create_category' => 'създай категория',
        'access_posts' => 'управление на публикациите',
        'access_categories' => 'управление на категории',
        'access_other_posts' => 'управление на други потребители публикации в блога',
        'delete_confirm' => 'Сигурни ли сте?',
        'chart_published' => 'Публикувано',
        'chart_drafts' => 'Чернови',
        'chart_total' => 'Общо',
    ],
    'posts' => [
        'list_title' => 'Управление публикации в блога',
        'category' => 'Категория',
        'hide_published' => 'Скрий публикуваните',
        'new_post' => 'Нова публикация',
    ],//Тодо
    'post' => [
        'title' => 'Title',
        'title_placeholder' => 'New post title',
        'slug' => 'Slug',
        'slug_placeholder' => 'new-post-slug',
        'categories' => 'Categories',
        'created' => 'Created',
        'updated' => 'Updated',
        'published' => 'Published',
        'published_validation' => 'Please specify the published date',
        'tab_edit' => 'Edit',
        'tab_categories' => 'Categories',
        'categories_comment' => 'Select categories the blog post belongs to',
        'categories_placeholder' => 'There are no categories, you should create one first!',
        'tab_manage' => 'Manage',
        'published_on' => 'Published on',
        'excerpt' => 'Excerpt',
        'featured_images' => 'Featured Images',
        'delete_confirm' => 'Do you really want to delete this post?',
        'close_confirm' => 'The post is not saved.',
        'return_to_posts' => 'Return to posts list',
    ],
    'categories' => [
        'list_title' => 'Manage the blog categories',
        'new_category' => 'New category',
        'uncategorized' => 'Uncategorized',
    ],
    'category' => [
        'name' => 'Name',
        'name_placeholder' => 'New category name',
        'slug' => 'Slug',
        'slug_placeholder' => 'new-category-slug',
        'posts' => 'Posts',
        'delete_confirm' => 'Do you really want to delete this category?',
        'return_to_categories' => 'Return to the blog category list',
    ],
    'settings' => [
        'category_title' => 'Category List',
        'category_description' => 'Displays a list of blog categories on the page.',
        'category_slug' => 'Category slug',
        'category_slug_description' => "Look up the blog category using the supplied slug value. This property is used by the default component partial for marking the currently active category.",
        'category_display_empty' => 'Display empty categories',
        'category_display_empty_description' => 'Show categories that do not have any posts.',
        'category_page' => 'Category page',
        'category_page_description' => 'Name of the category page file for the category links. This property is used by the default component partial.',
        'post_title' => 'Post',
        'post_description' => 'Displays a blog post on the page.',
        'post_slug' => 'Post slug',
        'post_slug_description' => "Look up the blog post using the supplied slug value.",
        'post_category' => 'Category page',
        'post_category_description' => 'Name of the category page file for the category links. This property is used by the default component partial.',
        'posts_title' => 'Post List',
        'posts_description' => 'Displays a list of latest blog posts on the page.',
        'posts_pagination' => 'Page number',
        'posts_pagination_description' => 'This value is used to determine what page the user is on.',
        'posts_filter' => 'Category filter',
        'posts_filter_description' => 'Enter a category slug or URL parameter to filter the posts by. Leave empty to show all posts.',
        'posts_per_page' => 'Posts per page',
        'posts_per_page_validation' => 'Invalid format of the posts per page value',
        'posts_no_posts' => 'No posts message',
        'posts_no_posts_description' => 'Message to display in the blog post list in case if there are no posts. This property is used by the default component partial.',
        'posts_order' => 'Post order',
        'posts_order_decription' => 'Attribute on which the posts should be ordered',
        'posts_category' => 'Category page',
        'posts_category_description' => 'Name of the category page file for the "Posted into" category links. This property is used by the default component partial.',
        'posts_post' => 'Post page',
        'posts_post_description' => 'Name of the blog post page file for the "Learn more" links. This property is used by the default component partial.',
    ],
];
