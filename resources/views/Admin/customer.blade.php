@extends('Frontend.layouts.main')
@section('main-container')
  <body>
    <div class="container">
      
      <td>
        
            <a href="{{route('indexregister')}}">
          <button type="button" class="btn btn-danger">register</button>
        </a>
      </td>

      <table class="table">
          <pre>
            
          </pre>
          <thead>
              <tr>
                  <th>ID</th>
                  <th>Category</th>
                  <th>Name</th>
                  <td >Price</td>
                  <td >Image</td>

                  <td >Delete</td>
                  <td >Edit</td>
              </tr>
          </thead>
          <tbody>
            

               @foreach ($cart as $product )     
            
              <tr>
              <td >{{$product['	id_cart']}}</td>
              <td >{{$product['id']}}</td> 
              <td >{{$product['category']}}</td>
              <td >{{$product['name']}}</td>
              <td >{{$product['quantity']}}</td> 
              {{-- <td >{{$product['price']}}</td>  --}}
              
              <td >
                
                <img src="{{ url('public/Frontend/images/'.$product->image) }}" width='50' height='50'>
              </td>
              <td>
                  <a href="{{route('product.delete',$product->id)}}">
                <button type="button" class="btn btn-danger">delete</button> 
              </a>
            </td>

            <td>
                 
                 
                      <a href="{{url('edit-student/'.$product->id)}}"> 
                <button type="button" class="btn btn-danger">Edit</button> 
              </a>
            </td>
          </tr> 

            @endforeach
             
         
          </tbody>
      </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>















