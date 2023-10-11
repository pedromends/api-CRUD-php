<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Laravel User List</title>
</head>
<body class="outer-screen">
    <div>
        <h2>Usuários</h2>
        <table class="table">
            <tr class="title">
                <td>ID:</td>
                <td>Nome:</td>
                <td>Idade:</td>
                <td>Email:</td>
                <td>Ações</td>
            </tr>
            <tbody>
                @foreach($users as $user)
                    <tr class="data">
                        <td>{{ $user['id'] }}</td>
                        <td>{{ $user['name'] }}</td>
                        <td>{{ $user['age'] }}</td>
                        <td>{{ $user['email'] }}</td>
                        <td>menu</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <span class="opt">
            {{ $users->links() }}
        </span>
    </div>
</body>
<style>
    .w-5{
        display: none;
    }

    h2{
        color:white;
    }

    .outer-screen{
        display: flex;
        justify-content: center;
        justify-items: center;
        font-family: Calibri, serif;
        background-color: #1a202c;
    }

    #table {
        border-collapse: collapse;
        width: 100%;
    }

    .table td, .table th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    .title {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #ff1517;
        color: white;
    }

    .data{
        background-color: #f2f2f2;
        transition: 0.2s ease-in;
    }

    .data:hover{
        background-color: gray;
    }

    .opt{
        color: white;
        margin-top: 2rem;
    }
</style>
</html>
