<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>photo-category-menu</title>
    <script src="../../js/content.js"></script>
</head>
<body>
    <div id="photo-category-menu">
        <!-- for every rendering of any of the photography php file content, there will only be one div with id ='photography-container'
             Therefore, the same div changes its own content -->
        <a href="javascript:void(0);" onclick="getContent('photo-gallery-images','/php/photography/astrophotography.php','photo-gallery-content')">Astrophotography</a><br>
        <br>
        <a href="javascript:void(0);" onclick="getContent('photo-gallery-images','/php/photography/landscape.php','photo-gallery-content')">Landscape</a><br>
        <br>
        <a href="javascript:void(0);" onclick="getContent('photo-gallery-images','/php/photography/panorama.php','photo-gallery-content')">Panorama</a><br>
        <br>
        <a href="javascript:void(0);" onclick="getContent('photo-gallery-images','/php/photography/travel.php','photo-gallery-content')">Travel</a><br>
        <br>
        <a href="javascript:void(0);" onclick="getContent('photo-gallery-images','/php/photography/urban-landscape.php','photo-gallery-content')">Urban Landscape</a>
    </div>
</body>
</html>