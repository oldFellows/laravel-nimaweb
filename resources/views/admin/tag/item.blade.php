<tr>
    <td>{{  $tag->tag_id  }}</td>
    <td>{{  $tag->tag_name  }}</td>
    <td>
        <a href="{{ route('admin.tags.edit',[$tag->tag_id])  }}">Edit</a>
        <a href="{{ route('admin.tags.remove',[$tag->tag_id])  }}">Remove</a>
    </td>

</tr>