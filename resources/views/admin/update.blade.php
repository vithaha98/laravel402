@include('admin.header');
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Update Post</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="../"> Back</a>
            </div>
        </div>
    </div>
    <form action="saveupd" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <input type="text" name="id" value="{{ $posts ->id }}" hidden="">

                    <strong>title:</strong>
                    <input type="text" name="title" class="form-control" value="{{ $posts ->title }}" placeholder="Title">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Content:</strong>
                    <input class="form-control" style="height:150px" name="content" value="{{$posts->content}}"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
