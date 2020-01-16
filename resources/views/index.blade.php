@include('header');
<body>
<div class="container">
    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col"><a href="">Them bai viet</a></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($posts as $key =>$value)

            <tr>
                <th scope="row">{{$value->id}}</th>
                <td>{{$value->title}}</td>
                <td>{{$value->content}}</td>
                <td><a href="">Xoa</a></td>
                <td><a href="">sua</a></td>
            </tr>
        @endforeach

        </tbody>
    </table>
    {{$posts ->links()}}
</div>

</body>
@include('footer');
