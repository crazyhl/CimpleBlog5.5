<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>

    <title>Plupload - Custom example</title>

    <!-- production -->
    <script type="text/javascript" src="/plupload/plupload.full.min.js"></script>
    <!--[if !IE]> -->
    <script src="/aceadmin/js/jquery-2.1.4.min.js"></script>

    <!-- <![endif]-->

    <!--[if IE]>
    <script src="/aceadmin/js/jquery-1.11.3.min.js"></script>
    <![endif]-->


    <!-- debug
    <script type="text/javascript" src="../js/moxie.js"></script>
    <script type="text/javascript" src="../js/plupload.dev.js"></script>
    -->

</head>
<body style="font: 13px Verdana; background: #eee; color: #333">

<h1>Custom example</h1>

<p>Shows you how to use the core plupload API.</p>

<div id="filelist">Your browser doesn't have Flash, Silverlight or HTML5 support.</div>
<br />

<div id="container">
    <a id="pickfiles" href="javascript:;">[Select files]</a>
</div>

<br />
<pre id="console"></pre>


<script type="text/javascript">
    // Custom example logic

    var uploader = new plupload.Uploader({
        runtimes : 'html5',
        browse_button : 'pickfiles', // you can pass an id...
        container: document.getElementById('container'), // ... or DOM Element itself
        url : '{{$parameters['requestUri']}}',
        auto_start : true,
        multipart_params: {
            'policy': '{{$parameters['policy']}}', // use filename as a key
            'authorization': '{{$parameters['authorization']}}', // adding this to keep consistency across the runtimes
            'filename': '${filename}'
        },

        filters : {
            mime_types: [
                {title : "Image files", extensions : "jpg,gif,png,jpeg,bmp,webp"},
            ]
        },

        init: {
            PostInit: function() {
                document.getElementById('filelist').innerHTML = '';
//
//                document.getElementById('uploadfiles').onclick = function() {
//                    uploader.start();
//                    return false;
//                };
            },

            FilesAdded: function(up, files) {
                plupload.each(files, function(file) {
                    document.getElementById('filelist').innerHTML += '<div id="' + file.id + '">' + file.name + ' (' + plupload.formatSize(file.size) + ') <b></b></div>';
                });
                // 添加完文件以后开始上传
                uploader.start();
            },

            UploadProgress: function(up, file) {
                document.getElementById(file.id).getElementsByTagName('b')[0].innerHTML = '<span>' + file.percent + "%</span>";
            },

            FileUploaded: function(up, file, info) {
                var response = JSON.parse(info.response);
                console.log(response);
                document.getElementById(file.id).getElementsByTagName('b')[0].innerHTML += ' [Url]: https://up-cdn.h57.pw' + response.url + '!thumb.1';
            },

            Error: function(up, err) {
                document.getElementById('console').appendChild(document.createTextNode("\nError #" + err.code + ": " + err.message));
            }
        }
    });

    uploader.init();

</script>
</body>
</html>
