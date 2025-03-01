<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>quill test</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aref+Ruqaa|Mirza|Roboto">
    <link rel="stylesheet" href="assets/css/fonts/iransans/iranianfont.css">
    {{ Html::style('assets/css/bootstrap.min.css') }}
    <link href="https://cdn.quilljs.com/1.3.2/quill.snow.css" rel="stylesheet">

    <style>
        #form-container {
            width: 500px;
        }

        .row {
            margin-top: 15px;
        }
        .row.form-group {
            padding-left: 15px;
            padding-right: 15px;
        }
        .btn {
            margin-left: 15px;
        }

        .change-link {
            background-color: #000;
            border-bottom-left-radius: 6px;
            border-bottom-right-radius: 6px;
            bottom: 0;
            color: #fff;
            opacity: 0.8;
            padding: 4px;
            position: absolute;
            text-align: center;
            width: 150px;
        }
        .change-link:hover {
            color: #fff;
            text-decoration: none;
        }

        img {
            width: 150px;
        }

        #editor-container {
            height: 130px;
        }
    </style>
</head>
<body>

{{--editor form body --}}
<div id="form-container" class="container">
    {!! Form::open([
                            'url'  => '/test' ,
                            'method'=> 'post',
                            'class' => '',
                            'name' => 'registerForm',
                            'id' => 'registerForm',
                        ]) !!}
        <div class="row">
            <div class="col-xs-4">
                <img class="img-rounded" src="data:image/jpeg;base64,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">
                <a class="change-link" href='#'>Change picture</a>
            </div>
            <div class="col-xs-8">
                <div class="form-group">
                    <label for="display_name">Display name</label>
                    <input class="form-control" name="display_name" type="text" value="Wall-E">
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
                    <input class="form-control"  name="location" type="text" value="Earth">
                </div>
            </div>
        </div>
        <div class="row form-group">
            <label for="about">About me</label>
            <input name="about" type="hidden">
            <div id="editor-container">

            </div>
        </div>
        <div class="row">
            <button class="btn btn-primary" type="submit">Save Profile</button>
        </div>
    {!! Form::close() !!}
</div>


<script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
{!! Html::script ('assets/js/bootstrap.min.js') !!}
<script src="https://cdn.quilljs.com/1.3.2/quill.js"></script>
<script src="assets/js/editor.js"></script>
</body>
</html>