<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">email</th>
                    <th scope="col">first name</th>
                    <th scope="col">last name</th>
                    <th scope="col">avatar</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($data2 as $datadetail)
                    <tr>
                        <td>{{ $datadetail['data']['email']}}</td>
                        <td>{{ $datadetail['data']['first_name']}}</td>
                        <td>{{ $datadetail['data']['last_name']}}</td>
                        <td>{{ $datadetail['data']['avatar']}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>
