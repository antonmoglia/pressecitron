
  <a href="downloads/pressecitron-reglement-concours-etudiant.pdf" target="_blank"><button type="button" class="btn btn-default"><i class="fa fa-download" aria-hidden="true"></i> Télécharger Réglement étudiant</button></a>

  <form method="post" action="action.php" enctype="multipart/form-data" name="apply" id="apply">



        <div class="form-group">
<div class="form-group col-xs-6">
      <label for="nom">Nom :</label>
      <input type="text" name="nom" class="form-control" >
      <br/>


      <label for="prenom">Prénom :</label>
      <input type="text" name="prenom" class="form-control">
      <br/>

      <label for="ecole">École :</label>
      <input type="text" name="ecole" class="form-control">
</div>
  <div class="form-group col-xs-6">
      <label for="classe">Classe :</label>
      <input type="text" name="classe" class="form-control" >

</br>
      <label for="email">adresse e-mail :</label>
      <input type="text" name="email" class="form-control" aria-describedby="emailHelp">
      <small id="emailHelp" class="form-text text-muted">Nous ne stockons pas les e-mails.</small>
</br>
      <label for="ecole">Téléphone portable:</label>
      <input type="text" name="numero" class="form-control">

  </div>
      <div class="form-group col-xs-12"><p style="color:red;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
 1 mo MAXIMUM par image  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i></br>Seuls les formats JPG, JPEG et PNG sont acceptés !</p>
</div>
  <div class="form-group col-xs-6">

      <label for="mon_fichier">Fichier 1 :</label>  <br/>
      <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
      <input type="file" name="file1" id="file1" /><br />
      <label for="mon_fichier" class="filegroup2 hidden">Fichier 2 :</label>
      <input type="file" name="file2" id="file2" class="filegroup2 hidden"/><br />
      <label for="mon_fichier" class="filegroup3 hidden">Fichier 3 :</label>
      <input type="file" name="file3" id="file3" class="filegroup3 hidden"/><br />
      <label for="mon_fichier" class="filegroup4 hidden">Fichier 4 :</label>
      <input type="file" name="file4" id="file4" class="filegroup4 hidden"/><br />
      <label for="mon_fichier" class="filegroup5 hidden">Fichier 5 :</label>
      <input type="file" name="file5" id="file5" class="filegroup5 hidden"/>
      <a class='add-file1 add-file'>Ajouter un fichier</a>
</div>

<div class="form-group col-xs-6">
    <label for="mon_fichier" class="filegroup6 hidden">Fichier 6 :</label>  <br/>
    <input type="file" name="file6" id="file6" class="filegroup6 hidden"/><br />
    <label for="mon_fichier" class="filegroup7 hidden">Fichier 7 :</label>
    <input type="file" name="file7" id="file7" class="filegroup7 hidden"/><br />
    <label for="mon_fichier" class="filegroup8 hidden">Fichier 8 :</label>
    <input type="file" name="file8" id="file8" class="filegroup8 hidden"/><br />
    <label for="mon_fichier" class="filegroup9 hidden">Fichier 9 :</label>
    <input type="file" name="file9" id="file9" class="filegroup9 hidden"/><br />
    <label for="mon_fichier" class="filegroup10 hidden">Fichier 10 :</label>
    <input type="file" name="file10" id="file10" class="filegroup10 hidden"/>
    <a class='add-file2 add-file hidden'>Ajouter un fichier</a>
</div>

    <!-- Options
      <fieldset class="form-group">

        <div class="form-check">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
            Je souhaite recevoir des nouvelles de presse citron
          </label>


        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
            Concours professionnels
          </label>
        </div>

      </fieldset> -->


<div class="form-group col-xs-12 col-m-12 col-l-12">
     <input class="btn btn-info btn-lg" type="submit" name="submit" value="Envoyer" />
</div>
  </div>
</form>
