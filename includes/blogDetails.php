<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="Css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    </head>
    <body>
    <div class="blog-box">
                    <div class="blog-box-img">
                        <img src="<?=get_image($row["imagePath"]) ?>" alt="blogImg1">
                        <a href="#" class="blog-img-link">
                            <i class="fa-solid fa-arrow-up-right-from-square fa-lg" style="color: #00ffee;"></i>
                        </a>
                    </div>
                    <div class="blog-box-text">
                        <strong><?=esc($row["blogTitle"]) ?></strong>
                        <a href="#"><?=esc($row["blogSubtitle"]) ?></a>
                        <p><?=esc($row["blogText"]) ?></p>
                            <div class="blog-author">
                                <div class="blog-author-img">
                                    <img src="<?=get_image($row["authorPath"]) ?>" alt="author1">
                                </div>
                                <div class="blog-author-text">
                                    <strong><?=esc($row["authorName"]) ?></strong>
                                    <span><?=esc(date("Y-m-d"))?></span>
                                </div>
                            </div>
                        </div>
                </div>
    </body>
</html>