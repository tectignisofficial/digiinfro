<?php
include("include/config.php");
$image = $_FILES['image']['name'];
$uploaddir = 'dist/img/credit/';
      // that's the directory in the document_root where I put pics
$uploadfile = $uploaddir . basename($image);
if( move_uploaded_file($_FILES['image']['tmp_name'],$uploadfile)) {
    echo $uploadfile;
} else {
    echo "Lo kol kakh tov..."; // <= nobody is perfect :)
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<head> 
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet"/>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.css" rel="stylesheet"/>

<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script>
</head>
</head>

<body>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="col-md-12">
        <form method="post" enctype="multipart/form-data" >
        <textarea class="summernote"></textarea>
        <input type="submit" name="" value="Submit">
        </form>
      </div>
    </div>
  </div>
</div>
<script>let html = $('.summernote').summernote('code'); 

// setting updated html with image url
$('.summernote').summernote('code', html + '<img src="' + url + '"/>'); </script>

<script>

$(document).ready(function() {

var IMAGE_PATH = 'http://www.path/to/document_root/';
                  // the exact folder in the document_root
                  // will be provided by php script below

$('#summernote').summernote({
    lang: 'fr-FR', // <= nobody is perfect :)
    height: 300,
    toolbar : [
        ['style',['bold','italic','underline','clear']],
        ['font',['fontsize']],
        ['color',['color']],
        ['para',['ul','ol','paragraph']],
        ['link',['link']],
        ['picture',['picture']]
    ],
    callbacks : {
        onImageUpload: function(image) {
            uploadImage(image[0]);
        }
    }
});

function uploadImage(image) {
    var data = new FormData();
    data.append("image",image);
    $.ajax ({
        data: data,
        type: "POST",
        url: "ch.php",// this file uploads the picture and 
                         // returns a chain containing the path
        cache: false,
        contentType: false,
        processData: false,
        success: function(url) {
            var image = IMAGE_PATH + url;
            $('#summernote').summernote("insertImage", image);
            },
            error: function(data) {
                console.log(data);
                }
        });
    }

});
</script>
</body>

</html>
