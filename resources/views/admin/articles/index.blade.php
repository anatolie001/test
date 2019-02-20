@extends ('admin.layouts.app_admin')

@section('content')

    <div class="container">

        <hr>

        <a href="{{route('admin.article.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o"> </i>Creeaza articol </a>
        <table class="table table-striped">
            <thead>
            <th>Titlul</th>
            <th>Descrierea</th>
            <th>Imagine</th>
            <th>Text</th>
            <th>Indicator_Admin</th>
            <th>Id utilizator</th>
            <th>Actiune</th>
            </thead>
            <tbody>
            @forelse($articles as $article)
                <tr>
                    <td>{{$article->title}}</td>
                    <td>{{$article->description}}</td>
                    <td>{{$article->image}}</td>
                    <td>{{$article->text}}</td>
                    <td>{{$article->send_to_admin_email}}</td>
                    <td>
                        <form onsubmit="if(confirm('Stergeti ?')){return true} else {return false}" action="{{route('admin.article.destroy', $article )}}" method="post" >
                            <input type="hidden" name="_method" value="DELETE">
                            {{csrf_field()}}
                            <a class="btn btn-default" href="{{route('admin.article.edit', $article )}}"><i class="fa fa-edit"></i> </a>
                            <button type="submit" class="btn"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center"><h2>Nu sunt articole de afisat !</h2></td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection