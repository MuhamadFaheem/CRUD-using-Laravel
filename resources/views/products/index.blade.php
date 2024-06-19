<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <style>
        html, body {
            background-color:;
        }
    </style> -->
</head>
<body class="bg-green-50 dark:bg-slate-900 ">
    <h1 class="">Product</h1>
    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
        <a href="{{ route('product.create') }}">Create</a>
    </div>
    <div>
        <table border="1">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->qty }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->description }}</td>
                    <td>
                        <a href="{{ route('product.edit', ['product' => $product] ) }} ">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('product.delete', ['product' => $product])}}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach 
        </table>
    </div>
    <div>
        <a href="{{ route('dashboard') }}">Back to Dashboard</a>
    </div>
</body>
</html>