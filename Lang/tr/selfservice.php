<?php

return array(

    "popular_items"             => "Popüler Ürünler",
    "latest_items"              => "Son Ürünler",

    "selfservice"               => "Self-Servis",
    "article"                   => "Makaleler|Makaleler",
    "category"                  => "Kategoriler|Kategoriler",
    "comment"                   => "Yorumlar|Yorumlar",
    "tag"                       => "Etiketler|Etiketler",
    "type"                      => "Türler|Tipleri",

    "frontend_icon"             => "Frontend Icon",

    "no_categories"             => ":type şu anda kategori yok. Lütfen bir makale eklemeden önce bir tane oluşturun.",
    "no_categories_frontend"    => "Görüntülenecek kategori yok.",

    "awaiting_moderation"       => "Awaiting Moderation",
    "published"                 => "Published",
    "spam"                      => "Spam",

    "hierarchical"              => "Hierarchical",
    "list"                      => "List",

    "show_on_dashboard"         => "Show Articles on Frontend Home",
    "show_on_dashboard_desc"    => "Shows some articles on the frontend dashboard. If view is set to <strong>hierarchical</strong>, it will show the 5 most viewed articles, else if <strong>list</strong>, it will show the 5 latest articles.",

    "title"                     => "Title",
    "author"                    => "Author",
    "keyword"                   => "Keyword|Keywords",
    "excerpt"                   => "Excerpt",
    "associate_tag"             => "Associate article with a tag...",
    "associate_category"        => "Associate article with a category...",
    "published_desc"            => "If the article can be viewed publicly. If it is not published, it can still be viewed by direct URL provided one of the categories is public.",
    "registered_users_desc"     => "Toggle to show article only to logged in users.",

    "comment_by"                => "Comment By",
    "replying_to"               => "Replying to",
    "receive_notifications"     => "Receive notifications for future replies",

    "login_comment"             => "You must be logged in to submit a comment.",
    "incorrect_captcha"         => "The captcha was incorrect.",
    "comment_blocked"           => "The comment was blocked due to spam.",
    "comment_success"           => "Your comment was submitted!",
    "comment_success_moderated" => "Your comment has been submitted for moderation by a member of our team.",

    "comment_rated_success"     => "The comment was successfully rated.",
    "comment_rated_error"       => "The comment could not be rated.",

    "article_find_useful"       => "Did you find this article useful?",
    "article_rated_success"     => "The article was successfully rated.",
    "article_rated_error"       => "The article could not be rated.",

    "comment_below_threshold"   => "(Comment below score threshold, click to show)",
    "view_all_replies"          => "View all replies",
    "show_more_comments"        => "Show more comments",
    "highest_rated"             => "Highest Rated",
    "newest"                    => "Newest",
    "oldest"                    => "Oldest",

    "no_articles"               => "Kayıt Bulunamadı.",

    "related_articles"          => "Related Articles",

    "rating"                    => "Rating|Ratings",

    "rssfeed"                   => "RSS Feed",

    // General settings
    "settings"                  => "Self-Service Settings",
    "enable_comments"           => "Enable Comments",
    "enable_comments_desc"      => "Allow users to comment on articles.",
    "write_comments"            => "Write Comments",
    "write_comments_desc"       => "If comments can be written by anyone or registered users only.",
    "registered_users"          => "Registered Users Only",
    "unregistered_users"        => "Unregistered Users Only",
    "show_captcha"              => "Show Captcha",
    "show_captcha_desc"         => "When the captcha should be shown to users writing comments.",
    "comment_moderation"        => "Comment Moderation",
    "comment_moderation_desc"   => "If comments must be moderated when they are submitted before they are publicly displayed, or if they are automatically publicly displayed.",
    "moderated"                 => "Moderated",
    "unmoderated"               => "Unmoderated",
    "comment_threshold"         => "Comment Threshold",
    "comment_threshold_desc"    => "Comment ratings which are less than (and not equal to) this value will have their visibility reduced and have to be clicked to be seen.",

    "enable_ratings"            => "Enable Article Ratings",
    "enable_ratings_desc"       => "Allow users to rate articles.",
    "post_rating"               => "Rate Articles",
    "post_rating_desc"          => "If articles can be rated by anyone or registered users only.",

    /*
     * 2.0.3
     */
    "auth_required"             => "Please login or register an account to view the article.",

    /*
     * 2.1.0
     */
    "view_articles"             => "View Articles",
    "view_categories"           => "View Categories",
    "add_to_another_type"       => "Add to Another Type",
    "select_type"               => "Select Type...",
    "visibility"                => "Visibility",
    "reply_to_comment"          => "Reply To Comment",
    "article_brand_warning"     => "This article exists in a brand that you are not assigned to, any changes you make will also be visible under that brand.",
    "viewing_article"           => "Viewing Article",
    "article_count"             => "Article Count",

    /*
     * 2.2.0
     */
    "article_desc"              => "The article can be written in several languages. The appropriate article will be shown automatically based on the user's language preference.",
    "no_author"                 => "No Author",

    /*
     * 2.3.1
     */
    "slug"                      => "Slug",
    "slug_desc"                 => "The URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.",
    "change_slug"               => "Change Slug",
    "published_date"            => "Published Date",
    "published_date_desc"       => "The date and time that the article was published as shown to users on the frontend.",
    "content_options"           => "Content Options",
    "content_desc"              => "Bu türle sunulacak içerik.<br /><strong>Articles</strong> - Birlikte gruplandırılabilen (bilgi bankası gibi) veya ayrı ayrı tutulabilen (duyurular gibi) yayınlardan oluşan bir koleksiyon.<br /><strong>External Link</strong> -Belge portalı gibi harici bir siteye bağlantı sağlayın.",
    "external_link"             => "External Link",
    "type_view_desc"            => "İçeriğiniz birçok kategori içerecekse ve bir bilgi tabanı gibi bilgilendirici olacaksa, hiyerarşik görünümü öneriyoruz, içeriğiniz duyurular veya blog gibi zamanla ilgiliyse liste görünümünü öneriyoruz. Harici bağlantı seçeneği, yardım masasının dışındaki bir bölüme bağlantı eklemeniz gerektiğinde kullanılabilir.",
    "pinned"                    => "Pinned",
    "pinned_desc"               => "Pin record so it shows at the top on the frontend. Only applies to list view types.",
    "article_ordering"          => "Article Ordering",
    "article_ordering_desc"     => "The ordering of articles when viewing the type on the frontend.",
    "most_popular"              => "Most Popular",
    "most_recent"               => "Most Recent",
    "type_order"                => "You can change the order that the self-service types are displayed to users by dragging and dropping the rows.",
    "type_enabled_desc"         => "Disabling the type will stop it displaying.",
    "internal"                  => "Internal",
    "internal_desc"             => "Toggle to set the type to only be visible internally to operators in the operator panel.",
    "login_to_comment"          => "Please login to post a comment.",
    "article_rating"            => "Article Rating|Article Ratings",
    "comment_rating"            => "Comment Rating|Comment Ratings",

    /*
     * 2.5.0
     */
    "revision_history"          => "Revision History",

    /*
     * 3.0.0
     */
    "type_protected_desc"       => "Toggle to only show content in this type to logged in users.",
    "article_feedback"          => "Article Feedback",
    "frontend_icon_desc"        => "Select a default icon to display on the frontend. Alternatively, upload your own icon:",
    "comment_deleted"           => "Comment deleted",

    /*
     * 5.3.0
     */
    "in_reply_to"               => "in reply to",

);
