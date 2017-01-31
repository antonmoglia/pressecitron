<?php
if (strpos("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]","done") === false ) {
?>
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Participer au concours</button>
<?php
} else {
?>
<h3>Enregistré!</h3>
<?php
}
?>
<!-- Modal -->
<div class="formulaire">
<div id="myModal" class="modal fade" role="dialog" data-backdrop="false">
  <div class="modal-dialog">




    <!-- Modal content-->
    <div class="modal-content">


      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" style="color:black;">&times;</button>
        <h1 class="modal-title"><img width="40%"src="img/concours.svg"/></h1>
      </div>


      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist" style="float:none; text-align:center;">
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#etu" role="tab" >Concours étudiant</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#pro" role="tab">Concours professionnels</a>
        </li>

      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane active" id="etu" role="tabpanel">  <div class="modal-body">
            <?php include 'form.php' ?>
          </div></div>
        <div class="tab-pane" id="pro" role="tabpanel">

<div class="modal-body">

          <a href="downloads/pressecitron-reglement-concours-pro.pdf" target="_blank"><button type="button" class="btn btn-default"><i class="fa fa-download" aria-hidden="true"></i> Télécharger Réglement Professionels</button></a>
<h4>    Dessinateurs professionnels,</br> envoyez vos dessins </br>avant le 1<sup style="text-transform:lowercase;">er</sup> mars 2017 </br>par mail à : </br> <a href="mailto:tropheepro.pressecitron@gmail.com">tropheepro.pressecitron@gmail.com</a>

</h4>

  <p>  Voir les modalités d'envoi sur le règlement du concours professionnels</br> à télécharger ci-dessus. </p>

</div>


        </div>

      </div>




      <div class="modal-footer">

      </div>
