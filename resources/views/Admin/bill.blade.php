@extends('Frontend.layouts.main')
@section('main-container')
  <body>
    <div class="container">
      
      <td>
        
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
            

               @foreach ($product as $product )     
            
              <tr>
              <td >{{$product['id_bill']}}</td>
              <td >{{$product['id']}}</td>
              <td >{{$product['quantity']}}</td>
              <td >{{$product['subtotal']}}</td> 

              <td >{{$product['delivery']}}</td>
              <td >{{$product['date']}}</td>
              <td >{{$product['total']}}</td> 
              
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















