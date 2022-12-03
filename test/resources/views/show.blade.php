<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <div class="row justify-content-center" >
            <div class="col-md-8">
                <table class="table table-bordered">
                        <thead>
                            <th>name</th>
                            <th>roll</th>
                            <th>reg</th>
                        </thead>
                        <tbody>
                            @php $sl=1@endphp
                            @foreach($Data as $data)
                                <tr>
                                    <td>{{$sl++}}</td>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->roll}}</td>
                                    <td>{{$data->reg}}</td>
                                    <td>
                                        <a href="/{{$data->id}}">edit</a>
                                        <a href="/{{$data->id}}">delete</a>
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                </table>
            </div>
        </div>
    </div>












  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>