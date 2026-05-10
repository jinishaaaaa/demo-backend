<!DOCTYPE html>
<html>
<head>
    <title>Student Table</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow border rounded-4">

        <div class="card-header bg-dark text-white ">
            <h3 class="mb-0">Student Registration Table</h3>
        </div>

        <div class="card-body">
            


            <table class="table table-bordered table-hover text-center">

                <thead class="table-primary">
                    <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>College</th>
                        <th>Course</th>
                        <th>Semester</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($datas as $data)
                    <tr>
                        <td>1</td>
                        <td>{{ $data->fullname }}</td>
                        <td>{{ $data->phone }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->college }}</td>
                        <td>{{ $data->course }}</td>
                        <td>{{ $data->semester }}</td>
                        <td><a href="{{ route('editpage',$data->id) }}"<button>edit</button></td>
                        <td>
                            <form action="{{ route('deletepage', $data->id) }}" method="POST">
                                @csrf
                                <button type="submit">delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

                    

                </tbody>

            </table>

        </div>

    </div>

</div>

</body>
</html>