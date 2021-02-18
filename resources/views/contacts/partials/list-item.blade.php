<tr>
    <td>{{$contact->name}}</td>
    <td>{{$contact->company}}</td>
    <td>{{$contact->phone}}</td>
    <td>{{$contact->email}}</td>
    <td>

        <a type="button" class="btn btn-link" href="{{route('contacts.edit', $contact)}}">Edit</a>
        <form class="delete d-inline" method="POST"  action="{{route('contacts.destroy', $contact)}}">
            <input name="_method" type="hidden" value="DELETE">
            | <button class="btn btn-link" type="submit">Delete</button>
        </form>
    </td>
</tr>
