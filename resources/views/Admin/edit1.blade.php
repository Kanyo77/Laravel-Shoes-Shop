<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Edit & Update Student
                        
                    </h4>
                </div>
                <div class="card-body">

                    {{-- <form action="{{ url('update-student/'.$product->id) }}" method="POST"> --}}
                        <form action="{{url('update-student/'.$product->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- @method=('PUT') --}}
                    
                        <div class="form-group mb-3">
                            <label for="">Student Name</label>
                            <input type="text" name="name" value="{{$product->id}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Student Name</label>
                            <input type="text" name="category" value="{{$product->category}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Student Email</label>
                            <input type="text" name="name" value="{{$product->name}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Student Course</label>
                            <input type="text" name="price" value="{{$product->price}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Student Section</label>
                            <div class="form-group">
                                <input type="file" name="image" id="image">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update Student</button>
                        </div>

                    </form>
                 
                </div>
            </div>
        </div>
    </div>
</div>