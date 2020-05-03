<?php
    list($r, $g, $b) = sscanf($bg_color, "#%02x%02x%02x");
    $bg_color = $r . ', ' . $g . ', ' . $b;
?>


<article class="content__article" style="background-image: linear-gradient(white, rgba(<?= $bg_color ?>, 0.4));">
    <?php if($img || $video): ?>
    <figure>
        <?php if(!$video): ?><img src="<?= $img ?>" alt="<?= $title ?>"><?php endif; ?>
        <?php if($video): ?>
        <video muted loop autoplay poster="<?= $img ?>">
            <source src="<?= $video ?>" alt="<?= $title . " video" ?>">
        </video>
        <?php endif; ?>
    </figure>
    <?php endif; ?>
    <div class="content__article__text">
    <h1><?= $title ?></h1>
    <p><?= $text ?></p>
    <?php if($link): ?>
        <a
        class="button-outline" 
        href="<?= $link['url'] ?>"
        target="<?= $link['target'] ? $link['target'] : '_self';?>"  
        >
            <?= $link['title'] ?>
        </a>
    <?php endif; ?>
    <?php if($youtube): ?>
        <button
        class="button-outline" 
        onClick="playVideo('<?= $youtube['url'] ?>?autoplay=0&showinfo=0&controls=0&rel=0')"
        >
            <?= $youtube['title'] ?>
        </button>

        <iframe class="modal-video" src="" frameborder="0" rel="0">
        </iframe>
        <button onclick="closeModal()">
            <div class="line"></div>
            <div class="line"></div>
        </button>
    <?php endif; ?>
    </div>
</article>