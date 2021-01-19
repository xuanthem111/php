<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Sex</th>
    </tr>
    </thead>
    <tbody>
    <?php
     foreach ($data as $value)
     {
         $sex = ($value['sex']== UserModel::MALE) ? "Nam" : "Nu";
         echo "
         <tr>
          <th>".$value['id']."</th>
          <td>".$value['name']."</td>
           <td>".$sex."</td>
         </tr>
         ";

     }
    ?>
    </tbody>
</table>

</body>
</html>
