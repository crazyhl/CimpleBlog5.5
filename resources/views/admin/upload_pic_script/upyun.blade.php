<script type="text/javascript" src="/plupload/plupload.full.min.js"></script>
<script type="text/javascript">
    // Custom example logic

    var uploader = new plupload.Uploader({
        runtimes: 'html5',
        browse_button: 'pickfiles', // you can pass an id...
        container: document.getElementById('picContainer'), // ... or DOM Element itself
        url: '{{$upYunParameters['requestUri']}}',
        auto_start: true,
        multipart_params: {
            'policy': '{{$upYunParameters['policy']}}', // use filename as a key
            'authorization': '{{$upYunParameters['authorization']}}', // adding this to keep consistency across the runtimes
            'filename': '${filename}'
        },

        filters: {
            mime_types: [
                {title: "Image files", extensions: "jpg,gif,png,jpeg,bmp,webp"},
            ]
        },

        init: {
            PostInit: function () {
            },

            FilesAdded: function (up, files) {
                plupload.each(files, function (file) {
                    document.getElementById('picFilelist').innerHTML += '<div id="' + file.id + '">' + file.name + ' (' + plupload.formatSize(file.size) + ') <b></b></div>';
                });
                // 添加完文件以后开始上传
                uploader.start();
            },

            UploadProgress: function (up, file) {
                document.getElementById(file.id).getElementsByTagName('b')[0].innerHTML = '<span>' + file.percent + "%</span>";
            },

            FileUploaded: function (up, file, info) {
                var response = JSON.parse(info.response);
                document.getElementById(file.id).getElementsByTagName('b')[0].innerHTML += ' [Url]: ![图片alt](https://up-cdn.h57.pw' + response.url + '!thumb.1)';
            },

            Error: function (up, err) {
                document.getElementById('console').appendChild(document.createTextNode("\nError #" + err.code + ": " + err.message));
            }
        }
    });

    uploader.init();

</script>