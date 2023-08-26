<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina Inicial</title>
    <style>
        body{
            background-color:rgb(207, 253, 255)
        }
        nav{
            width: 100vw;
            height: 80px;
            background-color: blue;
        }
        footer{
         background: blue;
         height: 2.5rem auto;
         width: 100%;
         border-radius: 1px;
         border: none;
         bottom: 0;
         position: absolute;
        }
        .dados{
            width: 30vw;
            height: 20vh;
            margin: 50px;

        }
        .dados > ul{
            border: 2px 2px 2px black;
            border-style: double;
            padding: 10px
        }
        .dados li{
            list-style-type: none;
            border: 1px black;
            border-style: dashed;
            padding: 5px;
            border-radius: 10px;
            padding: 10px;
        }
        h2{
            font-family: serif;
            font-size: 25px;
        }
    </style>
</head>
<body>
    <nav></nav>

    <header>
        <h1 style=""></h1>
        <div class="dados">
            <h2>Dados do colaborador</h2>
        <ul>
            <h3>Nome:</h3>
            <li> {{$nome}}</li>
            <h3>Endereço:</h3>
            @forelse ($endereco as $dado )
                <li>{{$dado}}</li>
            @empty
            <li>Sem dados</li>
            @endforelse
        </ul>
    </div>

    </header>

    <aside></aside>

    <section></section>


    <footer>
        <div>

            <p><br></p>
            <p><br></p>
            <P style="color:rgb(250, 250, 250);margin-left:45vw;padding:5px">
                &copy; Topicos Web-2023</P>
          </div>
    </footer>

</body>
</html>
