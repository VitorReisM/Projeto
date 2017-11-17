@extends('layouts.main')

@section('title', 'Home')

@section('content')




    <style>
        #selectedFiles img {
            max-width: 125px;
            max-height: 125px;
            float: left;
            margin-bottom:10px;
        }
    </style>

    {{Form::open(['url' => 'News/Store', 'method' => 'Post','files' => true])}}

        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

        <label for="title">Title</label>
        <input required class="form-control" type="text" name="title" id="title" placeholder="Title....">
        <br>
            <input class="" type="radio" name="type" id="type" value="single"><label for="single">Single Image</label><br>
            <input class="" type="radio" name="type" id="type" value="multi"><label for="single">Multi Images</label>
        <label for="body">Body</label>
        <textarea required id="body" name="body" placeholder="Enter text ...">

        </textarea>
        <br>

        <label for="files"></label>
        <input type="file" id="files" name="files[]" multiple accept="image/*">

        <div id="selectedFiles"></div>

        <input type="submit">
    {{Form::close()}}

    <script>
        tinymce.init({
            selector: 'textarea',
            height: 500,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor textcolor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table contextmenu paste code help'
            ],
            toolbar: 'insert | undo redo |  formatselect | bold italic  | alignleft aligncenter alignright alignjustify | outdent indent | removeformat | help',
        });

        {{--Image Display--}}
        var selDiv = "";

        document.addEventListener("DOMContentLoaded", init, false);

        function init() {
            document.querySelector('#files').addEventListener('change', handleFileSelect, false);
            selDiv = document.querySelector("#selectedFiles");
        }

        function handleFileSelect(e)
        {
            if(!e.target.files || !window.FileReader) return;

            selDiv.innerHTML = "";

            var files = e.target.files;
            var filesArr = Array.prototype.slice.call(files);
            filesArr.forEach(function(f) {
                if(!f.type.match("image.*")) {
                    return;
                }

                var reader = new FileReader();
                reader.onload = function (e) {
                    var html = "<img src=\"" + e.target.result + "\">" + f.name + "<br clear=\"left\"/>";
                    selDiv.innerHTML += html;
                }
                reader.readAsDataURL(f);

            });
        }
        {{--End Image Display--}}
    </script>
@stop
