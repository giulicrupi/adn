    <style>
        .main-video {
            flex: 2;
        }
        .main-video iframe {
            width: 100%;
            height: 400px;
        }
        .thumbnails {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .thumbnail-item {
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
        }
        .thumbnail-item img {
            width: 100px;
            height: auto;
        }
        .thumbnail-item a {
            text-decoration: none;
            color: #007bff;
        }
    </style>	
    <?php 	
    $playlist_id = get_field('playlist_id');
    $main_video_id = get_field('main_video_id');
     ?>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <?php if ($main_video_id): ?>
                <div class="main-video">
                    <iframe src="https://www.youtube.com/embed/<?php echo esc_attr($main_video_id); ?>" frameborder="0" allowfullscreen></iframe>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-lg-4">
            <div class="thumbnails" id="thumbnails"></div>
        </div>
    </div>
</div>
<iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?si=6YNVRJRQwOKmmUHg&amp;list=PL5UTkQQVAGD0EDKKhOGIngP9w-GOau8Fv" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
<script>
    const apiKey = 'AIzaSyAkb5OTlwEJhsjSaJV_iWJg1ynXT3ERm4s';
    const playlistId = '<?php echo esc_js($playlist_id); ?>';

    fetch(`https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=10&playlistId=${playlistId}&key=${apiKey}`)
        .then(response => response.json())
        .then(data => {
            const videos = data.items;
            const thumbnailsContainer = document.getElementById('thumbnails');

            // Exibir os vídeos como miniaturas à direita
            videos.forEach(video => {
                const videoId = video.snippet.resourceId.videoId;
                const videoTitle = video.snippet.title;
                const videoThumbnail = video.snippet.thumbnails.default.url;

                const thumbnailElement = document.createElement('div');
                thumbnailElement.classList.add('thumbnail-item');
                thumbnailElement.innerHTML = `
                    <img src="${videoThumbnail}" alt="${videoTitle}">
                    <a href="https://www.youtube.com/watch?v=${videoId}" target="_blank">${videoTitle}</a>
                `;
                thumbnailsContainer.appendChild(thumbnailElement);
            });
        })
        .catch(error => console.error('Error fetching data:', error));
</script>