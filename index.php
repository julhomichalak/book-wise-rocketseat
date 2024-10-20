<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Wise</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-stone-950 text-stone-200">
    <header class=" bg-stone-900 ">
        <nav class="mx-auto max-w-screen-lg flex justify-between  py-4">
            <div class="font-bold text-xl tracking-wide">Book Wise</div>
            <ul class="flex space-x-4 font-bold">
                <li><a href="/" class="text-lime-500">Explorar</a></li>
                <li><a href="/meus-livros.php" class="hover:underline">Meus livros</a></li>
            </ul>
            <ul>
                <li><a href="/login.php">Login</a></li>
            </ul>
        </nav>
    </header>
    <main class="mx-auto max-w-screen-lg  space-y-6 mt-6">
        <div>

            <form class="w-full flex space-x-2">
                <input
                    type="text"
                    class=" border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"
                    placeholder="Pesquisar..."
                    name="pesquisar" />

                <button class="">🔎</button>
            </form>
        </div>


        <section class="space-x-4">

            <div class="w-1/3 p-2 rounded border-stone-800 border-2 bg-stone-900">
                <div class="flex">
                    <div class="w-1/3">Imagem</div>

                    <div class="w-2/3">
                        <div class="font-semibold">Titulo</div>
                        <div class="text-xs italic">Autor</div>
                        <div class="text-xs italic">⭐⭐⭐(3 Avaliação)</div>
                    </div>
                </div>
                <div class="text-sm">Descrição</div>

            </div>

        </section>
    </main>
</body>

</html>