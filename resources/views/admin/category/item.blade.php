<tr>
    <td>{{  $category->category_id  }}</td>
    <td>{{  $category->category_name  }}</td>
    <td>
        <a href="{{ route('admin.categories.edit',[$category->category_id])  }}">Edit</a>
        <a href="{{ route('admin.categories.remove',[$category->category_id])  }}">Remove</a>
    </td>

</tr>