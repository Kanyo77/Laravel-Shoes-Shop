<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<body>
    <form method="POST" action="/Admin/product/edit">
        @csrf
       
        <div class="form-group">
            <label for="">id</label>
            <input type="text" name="id" id="" class="form-control" placeholder="" aria-describedby="helpId"  >
          </div>
          
          <div class="form-group">
          <label for="">category</label>
          <input type="text" name="category" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
            <label for="">name</label>
            <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
          </div>

          <div class="form-group">
            <label for="">price</label>
            <input type="text" name="price" id="" class="form-control" placeholder="" aria-describedby="helpId">
          </div>

          <div class="form-group">
            <input type="file" name="image">
            
          </div>

          <button type="submit">
            click
        </button>

    </form>

</body>
</html>