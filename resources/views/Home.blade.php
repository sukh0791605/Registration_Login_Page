<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      .<table class="table">
        <thead>
            <tr>
                
                <th>name</th>
                <th>email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                
               
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td> <a href="logout">Logout</a> </td>
            </tr>
            <tr>
                <td scope="row"></td>
                <td>

                </td>
                <td></td>
            </tr>
        </tbody>
      </table>
   
  </body>
</html>