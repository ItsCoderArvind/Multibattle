@extends('layouts.admin')


@section('page_name', 'Privacy Policy')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Privacy Policy</title>
    <script src="https://cdn.ckeditor.com/ckeditor5/22.0.0/decoupled-document/ckeditor.js"></script>
</head>
<body>

    <!-- The toolbar will be rendered in this container. -->
    <div id="toolbar-container"></div>

    <!-- This container will become the editable. -->
    <div id="editor">
        <p>Privacy Policy</p>
    </div>

    <script>
        DecoupledEditor
            .create( document.querySelector( '#editor' ) )
            .then( editor => {
                const toolbarContainer = document.querySelector( '#toolbar-container' );

                toolbarContainer.appendChild( editor.ui.view.toolbar.element );
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <button type="submit" value="Submit">Save</button>
</body>
</html>


@endsection