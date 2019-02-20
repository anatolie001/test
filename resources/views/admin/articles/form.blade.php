
<label for="">Denumire</label>
<input type="text" class="form-control" name="title" placeholder="Denumire noutati" value="{{$article->title ?? ""}}">

<label for="">Descriere</label>
<input class="form-control" type="text" name="description" placeholder="Descriere" value="{{$article->description ?? ""}}" >

<label for="">Imagine</label>
<input class="form-control" type="file" name="image" placeholder="Foto" value="{{$article->image ?? ""}}" >

<label for="">Text</label>
<textarea class="form-control" name="text">{{$article->text ?? ""}}</textarea>

<label for="">Indicator_Admin</label>
<select class="form-control" name="send_to_admin_email">
        <option value="1">Da</option>
        <option value="0">Nu</option>
</select>
<input type="hidden" name="user_id" value="{{Auth::->id()}}">
<hr />

<input class="btn btn-primary" type="submit" value="Salveaza">
