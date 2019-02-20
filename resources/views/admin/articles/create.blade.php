@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">


        <hr />

        <form class="form-horizontal" action="{{route('admin.article.store')}}" method="post">
            {{ csrf_field() }}

            {{-- Form include --}}
            @include('admin.articles.form')
            <input type="hidden" name="created_by" value="{{Auth::id()}}">
        </form>
    </div>

@endsection