@extends('admin.main')
@section('content')
    <form action="" method="post">
        <div class="card-body">
            <div class="form-group">
                <label >Name</label>
                <input type="text" name="assignments" class="form-control" id="assignments" placeholder="Enter assignment name">
            </div>
            <div class="form-group">
                <label">Description</label>
                <input type="text" name="description" class="form-control" id="description" placeholder="Enter your description">
            </div>

            <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>
                </div>
            </div>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection()
