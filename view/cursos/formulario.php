<?php include __DIR__ . '/../inicio-html.php'; ?>

    <form action="/salvar-curso" method="post">
        <div class="form-grup" >
            <label for="descricao" style="color: white">Descrição</label>
            <input type="text" name="descricao" id="descricao" class="form-control">
        </div>
        <br>
        <button class="btn btn-primary">Salvar</button>
    </form>

<?php include __DIR__ . '/../fim-html.php';?>