<form action="indexbook.php?form=add" method="post">
    <input type="text" placeholder="Nom du livre" id="name" name="name" required />
    <input type="text" placeholder="Auteur" id="author" name="author" required />
    <input type="number" placeholder="Année" id="year" name="year" required />
    <textarea type="text" placeholder="Résumé" id="summary" name="summary" required></textarea>
    <div class="button">
        <input type="submit" value="Ajoutez">
    </div>
</form>