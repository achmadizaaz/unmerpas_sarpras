<table>
    <tr>
        @can('create gedung')
        <td>Create</td>
        @endcan

        @can('read gedung')
        <td>Read</td>
        @endcan

        @can('update gedung')
        <td>Update</td>
        @endcan
        
        @can('delete gedung')
        <td>Delete</td>
        @endcan
    </tr>
</table>