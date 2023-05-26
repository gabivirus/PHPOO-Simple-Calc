<html>
<body>
<style>
    div{
        display: flex;
        column-gap: 1rem;
    }</style>
<div>
    <form action="sum.php" method="post">
    1° valor: <input type="text" name="v1"><br>
    2° valor: <input type="text" name="v2"><br>
        <button>+</button>
    </form>
    <form action="sub.php" method="post">
    1° valor: <input type="text" name="v1"><br>
    2° valor: <input type="text" name="v2"><br>
        <button>-</button>
    </form>
    <form action="div.php" method="post">
    1° valor: <input type="text" name="v1"><br>
    2° valor: <input type="text" name="v2"><br>
        <button>/</button>
    </form>
    <form action="mul.php" method="post">
    1° valor: <input type="text" name="v1"><br>
    2° valor: <input type="text" name="v2"><br>
        <button>*</button>
    </form>
</div>
</body>
</html>