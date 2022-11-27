<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Routing</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="app.css">
</head>
<body>
    <div class="list-container">
        <h1>Get It Done List</h1>
        <hr/>
        <button class="button-container">Add Task</button>
        <table>
            <tr>
                <th>Task</th>
                <th>Status</th>
                <th>Delete</th>
            </tr>
            <tr>
                <td>
                    <a href="posts/post-1">Drink Coffee</a>
                </td>
                <td>
                    <input type="checkbox" />
                </td>
                <td>
                    <i class="fa fa-trash-o"></i>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="posts/post-2">Feed Cats</a>
                </td>
                <td>
                    <input type="checkbox" />
                </td>
                <td>
                    <i class="fa fa-trash-o"></i>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="posts/post-3">Study</a>
                </td>
                <td>
                    <input type="checkbox" />
                </td>
                <td>
                    <i class="fa fa-trash-o"></i>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>