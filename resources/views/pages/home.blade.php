@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">Trisha H White</h1>
    <div class="row">
        <div class="col-xs-12">
            <h2>{{ $content[0]->paragraph_1_title }}</h2>
            @if( $content[0]->paragraph_1_content_type === "text")
                <p>{{ $content[0]->paragraph_1_content }}</p>
            @endif
            <h2>{{ $content[0]->paragraph_2_title }}</h2>
            @if( $content[0]->paragraph_2_content_type === "text")
                <p>{{ $content[0]->paragraph_2_content }}</p>
            @elseif( $content[0]->paragraph_2_content_type === "list" )
                <ul>
                    @foreach( $content[0]->paragraph_2_content as $list )
                        <li>{{ $list }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
</div>
    @endsection