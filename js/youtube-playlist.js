// jQuery(document).ready(function($) {
//     const apiKey = youtubeApi.apiKey;
//     const playlistField = $('input[name="acf[field_667b11d5164b6]"]');
//     const mainVideoField = $('select[name="acf[field_667b11dc164b7]"]');

//     function loadPlaylistVideos(playlistId) {
//         fetch(`https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=10&playlistId=${playlistId}&key=${apiKey}`)
//             .then(response => response.json())
//             .then(data => {
//                 const videos = data.items;
//                 mainVideoField.empty(); // Limpar campo de seleção
//                 mainVideoField.append(new Option('Selecione um vídeo principal', '')); // Adicionar opção padrão
//                 videos.forEach(video => {
//                     const videoId = video.snippet.resourceId.videoId;
//                     const videoTitle = video.snippet.title;
//                     mainVideoField.append(new Option(videoTitle, videoId));
//                 });
//             })
//             .catch(error => console.error('Erro ao buscar dados:', error));
//     }

//     // Evento para carregar vídeos quando o campo Playlist ID for alterado
//     playlistField.on('blur', function() {
//         const playlistId = $(this).val();
//         if (playlistId) {
//             loadPlaylistVideos(playlistId);
//         }
//     });

//     // Carregar vídeos automaticamente se o campo Playlist ID já tiver valor
//     if (playlistField.val()) {
//         loadPlaylistVideos(playlistField.val());
//     }
// });
