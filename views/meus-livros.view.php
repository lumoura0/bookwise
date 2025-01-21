<h1 class="mt-6 font-bold text-lg">Meus livros</h1>

<div class="grid grid-cols-4 gap-4">
    <div class="col-span-3 flex flex-col gap-4">
        <?php foreach ($livros as $livro) {
            require 'partials/_livro.php';
        } ?>
    </div>
    <div>
        <div class="border border-stone-700 rounded">
            <h1 class="border-b border-stone-700 text-stone-400 font-bold px-4 py-2">Cadastre um novo Livro!</h1>
            <form class="p-4 space-y-4" method="post" action="/livro-criar" enctype="multipart/form-data">
                <?php if ($validacoes = flash()->get('validacoes')): ?>
                    <div class="border-red-800 bg-red-900 text-stone-400 px-4 py-1 rounded-md border border-2 text-sm font-bold">
                        <ul>
                            <li>Deu ruim!</li>
                            <?php foreach ($validacoes as $validacao): ?>
                                <li><?= $validacao ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <div class="flex flex-col">
                    <label class=" text-stone-400 mb-1">Imagem</label>
                    <input type="file"
                        name="imagem"
                        class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline px-2 py-1" />
                </div>

                <div class="flex flex-col">
                    <label class=" text-stone-400 mb-1">Título</label>
                    <input
                        type="text"
                        class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline px-2 py-1"
                        name="titulo" />
                </div>

                <div class="flex flex-col">
                    <label class=" text-stone-400 mb-1">Autor</label>
                    <input
                        type="text"
                        class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline px-2 py-1"
                        name="autor" />
                </div>

                <div class="flex flex-col">
                    <label class=" text-stone-400 mb-1">Descrição</label>
                    <textarea
                        type="text"
                        class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline px-2 py-1"
                        name="descricao"></textarea>
                </div>

                <div class="flex flex-col">
                    <label class=" text-stone-400 mb-1">Ano de Lançamento</label>
                    <select
                        class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline px-2 py-1"
                        name="ano_de_lancamento">
                        <?php foreach (range(1900, date('Y')) as $ano): ?>
                            <option value="<?= $ano ?>"><?= $ano ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <button type="submit" class="border-stone-800 bg-stone-900 text-stone-400 px-4 py-1 rounded-md border border-2 hover:bg-stone-800">Salvar</button>
            </form>
        </div>
    </div>
</div>