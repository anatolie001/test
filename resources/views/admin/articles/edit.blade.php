@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        <form class="form-horizontal" action="{{route('admin.article.update',$article)}}" method="post">
            <input type="hidden" class="" name="_method" value="put">
            {{ csrf_field() }}

            {{-- Form include --}}
            @include('admin.articles.form')

            <input type="hidden" name="modified _by" value="{{Auth::id()}}">
        </form>
    </div>

@endsection