var Upload;
var circle;

$(function() {
    // preventing page from redirecting
    $("html").on("dragover", function(e) {
        e.preventDefault();
        e.stopPropagation();
        $("h1").text("Drag here");
    });

    $("html").on("drop", function(e) { e.preventDefault(); e.stopPropagation(); });

    // Drag enter
    $('.upload-area').on('dragenter', function (e) {
        e.stopPropagation();
        e.preventDefault();
        $("h1").text("Drop");
    });

    // Drag over
    $('.upload-area').on('dragover', function (e) {
        e.stopPropagation();
        e.preventDefault();
        $("h1").text("Drop");
    });

    // Drop
    $('.upload-area').on('drop', function (e) {
        e.stopPropagation();
        e.preventDefault();

        var file = e.originalEvent.dataTransfer.files[0];
        var upload = new Upload(file);

        $('.first-step').css('display', 'none');
        $('.second-step').css('display', 'block');

        circle = $('.second.circle').circleProgress({
            value: 0,
            size: 200,
            thickness: 5
        }).on('circle-animation-progress', function(event, progressValue, stepValue) {
            $(this).find('strong').text(stepValue.toFixed(2));
        });

        upload.doUpload();
    });

    // Open file selector on div click
    $(".uploadfile").click(function(){
        $("#file").click();
    });

    // file selected
    $("#file").change(function(){
        var file = $(this)[0].files[0];
        var upload = new Upload(file);

        $('.first-step').css('display', 'none');
        $('.second-step').css('display', 'block');

        circle = $('.second.circle').circleProgress({
            value: 0,
            size: 200,
            thickness: 5
        }).on('circle-animation-progress', function(event, progressValue, stepValue) {
            $(this).find('strong').text(stepValue.toFixed(2));
        });

        upload.doUpload();
    });
});

$(document).ready(function() {
    circle = $('.second.circle').circleProgress({
        value: 0,
        size: 200,
        thickness: 5
    }).on('circle-animation-progress', function(event, progressValue, stepValue) {
        $(this).find('strong').text(stepValue.toFixed(2));
    });

    Upload = function (file) {
        this.file = file;
    };
    
    Upload.prototype.getType = function() {
        return this.file.type;
    };
    Upload.prototype.getSize = function() {
        return this.file.size;
    };
    Upload.prototype.getName = function() {
        return this.file.name;
    };
    Upload.prototype.doUpload = function () {
        var that = this;
        var formData = new FormData();
    
        // add assoc key values, this will be posts values
        formData.append("file", this.file, this.getName());
        formData.append("upload_file", true);
    
        $.ajax({
            type: "POST",
            url: "engine.php",
            xhr: function () {
                var myXhr = $.ajaxSettings.xhr();
                if (myXhr.upload) {
                    myXhr.upload.addEventListener('progress', that.progressHandling, false);
                }
                return myXhr;
            },
            success: function (data) {
                addThumbnail(data)
            },
            error: function (error) {
                // handle error
                $('.first-step').css('display', 'block');
                $('.second-failed-step').css('display', 'none');
            },
            async: true,
            data: formData,
            dataType: 'json',
            cache: false,
            contentType: false,
            processData: false,
            timeout: 60000
        });
    };
    
    Upload.prototype.progressHandling = function (event) {
        var percent = 0;
        var position = event.loaded || event.position;
        var total = event.total;
    
        if (event.lengthComputable) {
            percent = Math.ceil(position / total * 100);
        }
        
        circle.circleProgress('value', percent);
    }; 
});

// Added thumbnail
function addThumbnail(data){ 
    console.log(data);

    var src = data.src;
    $(".rc-img-con img").attr('src', src);
    
    $('.second-step').css('display', 'none');
    $('.third-step.success').css('display', 'block');
}