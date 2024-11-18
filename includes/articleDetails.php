<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="Css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    </head>
    <body>
   <div class="articlePic">
                <img src="<?=get_image($row["imagePath"]) ?>" alt="blogImg1">
            </div>
            <div>
                <p class="articleText">
                    <span class="blogTitle" >
                        <?=esc($row["blogTitle"]) ?>
                    </span><br>
                    <span class="blogSubTitle" >
                        <strong><?=esc($row["blogSubtitle"]) ?></strong>
                    </span><br>
                    <?=esc($row["blogText"]) ?>
                </p>
            </div>
    </body>
</html>