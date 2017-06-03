
<div class="">
   <button type="button" name="btn_ajout"  class="btn btn-info" data-toggle="modal" data-target="#ModalModifClient">Ajouter Client</button>
   <!-- Modal Modifier Client -->
   <div class="modal fade" id="ModalModifClient" role="dialog">
      <div class="modal-dialog">
         <!-- Modal content-->
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
               <h4 class="modal-title">Modifier Client</h4>
            </div>
            <div class="modal-body">
              <form role="form" action="ModalModifClient.php" method="post">
                  <div class="form-group">
                      <label>Numero</label>
                      <input class="form-control" name="num">
                      <p class="help-block">Example block-level help text here.</p>
                      <label>nom</label>
                      <input class="form-control" name="nom">
                      <label>Prenom</label>
                      <input class="form-control" name="prenom">
                      <label>address</label>
                      <input class="form-control" name="adr">
                      <label>Email</label>
                      <input class="form-control" name="email">
                  </div>
                </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-info">Modifier</button>
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            </form>
         </div>
      </div>
   </div>
   <!-- end Modal Modifier Client -->
</div>
