<!DOCTYPE html>
<html>
<head>
    <title>Danh sách Sách</title>
</head>
<body>
    <h1>Danh sách Sách</h1>
    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên sách</th>
                <th>Mã sách</th>
                <th>Tác giả</th>
                <th>Năm xuất bản</th>
                <th>ISBN</th>
                <th>Thể loại</th>
                <th>Mô tả</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->bookName }}</td>
                    <td>{{ $book->bookCode }}</td>
                    <td>{{ $book->bookAuthor }}</td>
                    <td>{{ $book->publishYear }}</td>
                    <td>{{ $book->ISBN }}</td>
                    <td>{{ $book->category }}</td>
                    <td>{{ $book->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
