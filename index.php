<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="book.css">
    
</head>
<body>
<script>
function clicked(e)
{
    if(!confirm('successfully submitted')) {
        e.preventDefault();
    }
}
</script>
    <?php
    include('connection.php');
    ?>
    <h1> <ins>Book database</ins></h1>
    <form action="action.php" method="post">
        <p>
        <label for="bookname">Book name:</label>
        <input type="bookname" placeholder="bookname" name="bookname" id="search">
        </p>
        <p>
        <label for="author">Author name:</label>
        <input type="authorname" placeholder="authorname" name="authorname" id="author">
        </p>
        <p>
        <label for="price">Price:</label>
        <input type="price" placeholder="price" name="price" id="price">
        </p>

        <button name='submit' onclick="clicked()" type="submit" >submit</button>
      
    </form>
    
</body>
</html>