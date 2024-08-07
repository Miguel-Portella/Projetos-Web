
<form method="post" action="resultado.php">
    <h1>Digite o tamanho do lado 1 e do lado 2 de um retângulo</h1>

    <label for="">Lado 1</label> <br>
    <input type="number" name="lado1"><br>

    <label for="">Lado 2</label><br>
    <input type="number" name="lado2"><br>
    <button type='submit'>Enviar</button>
</form>


<style>
    *{
        font-family: roboto;
    }
    form{
        text-align: center;
    }
    input{
        margin: 20px;
        padding: 10px 50px;
    }
    button{
        padding: 10px 120px ;
    }
</style>