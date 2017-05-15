@extends('layouts.app')

@section('content')

<!-- ???? -->
@include('shared.errors')

<!-- ??? -->
<div class="z-panel">
    <div class="z-panel-header" style="text-align: left;">
        Messages Board
    </div>
    <div class="z-panel-body" style="padding:15px;">
        <b>Master`s motto</b><hr>
        <img src="http://i1.piimg.com/588294/3260acb5c25546b3.jpg" class="img-responsive" style="margin-left:auto;margin-right:auto;">
        <p style="text-align:center;margin-top:20px;"><b>You jump,I jump.</b></p>

        <h5 id="comment-form" style="padding-top:30px;">Leave your messages</h5>
        <form action="{{ route('comments.store') }}" method="post" >
            {{ csrf_field() }}
            <div class="form-group">
                <textarea class="form-control" rows="3" name="content"></textarea>
            </div>
            @if(Auth::check())
                <button type="submit" class="btn btn-default">Publish</button>
            @else
                <button type="submit" class="btn btn-default">Publish anonymously</button><a class="btn btn-primary" style="margin-left:10px" href="{{ url('/login') }}">Login</a>
            @endif
        </form>

        <p style="padding-top:30px;"><b>Messages</b></p><hr>

        <!--????-->

        <a href="#comment-form">leave a Message</a>
    </div>
</div>

@endsection