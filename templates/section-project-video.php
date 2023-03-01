
<?php
/*
* Section Project - Video Review
*/
?>

<?php
global $post;
    // print_pre (get_fields(31, 1));
?>

<div class="project-video">

    <div class="project-video__bg">
        <img src="<?= get_field('instruction-bg', 31) ?>">
    </div>
    
    <div class="container">

        <div class="project-video__title">
            Видео обзор проекта
        </div>

        
        <div class="project-video__video">
            <iframe width="100%" height="100%"
            src="<?= get_field('video', $post->ID) ?>"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
        </div>

    </div>

</div>

<!-- section-project-video.php -->
<style>

    .project-video {
        background: rgb(var(--col-bg-beige));
        padding: 20rem 0 40rem;
    }

    .project-video__title {
        padding: 40rem 0;
        font-size: 48rem;
        color: rgb(var(--col-brown));
        font-weight: 400;
        line-height: 1;
    }
    
    .project-video__video {
        height: 610rem;
    }
    .project-video__video iframe {
        box-shadow: 0 0 30rem 0 rgba(var(--col-brown),0.5);
    }
    .project-video__bg {
        position: absolute;
        top: 200rem;
        left: 0;
        width: 100%;
        bottom: 60rem;
    }
    .project-video__bg img {
        position: absolute;
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    @media screen and (max-width: 640px) {

        .project-video__title {
            margin-left: 0;
            padding: 20rem 0 80rem;
            font-size: 32rem;
            text-align: center;
            max-width: unset;
        }
       
        .project-video__video {
            height: 270rem;
            margin-top: -50rem;
        }

        .project-video__bg {
            position: absolute;
            top: 140rem;
            left: 0;
            width: 100%;
            bottom: 80rem;
        }

    }
</style>