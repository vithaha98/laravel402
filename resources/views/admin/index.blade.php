@include('admin.header');
<body>
<div class="container">
    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col"><a href="admin/create">Them bai viet</a></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($posts as $key =>$value)

            <tr>
                <th scope="row">{{$value->id}}</th>
                <td>{{$value->title}}</td>
                <td>{{$value->content}}</td>
                <td><a href="admin/delete/{{$value->id}}" class="confirmation">Xoa</a></td>
                <td><a href="admin/update/{{$value->id}}">sua</a></td>
            </tr>
        @endforeach

        </tbody>
    </table>
    {{$posts ->links()}}
</div>

</body>
@include('admin.footer');
<script type="text/javascript">
    var elems = document.getElementsByClassName('confirmation');
    var confirmIt = function (e) {
        if (!confirm('Are you sure?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }
</script>
