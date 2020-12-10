<form method="POST" action="?page=notepad&include=save-note">

    <button type="submit" class="btn btn-danger btn-lg mb-2 float-right">Salvar</button>
    <input type="" name="id-note" value="<?php echo $results[0]->getId() ?>">
    <div class="form-group">
        <textarea class="form-control" rows="15" placeholder="Escreva algo....." name="note"><?php echo $results[0]->getText() ?></textarea>
    </div>

</form>

