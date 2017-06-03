<div class="modal fade" id="myModal" role="dialog">
   <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Ajouter Client</h4>
         </div>
         <div class="modal-body">
           <form role="form" action="ajoutercli.php" method="post">
               <div class="form-group">
                   <label>Cin</label>
                   <input class="form-control" name="cin">
                   <p class="help-block">Example block-level help text here.</p>
                   <label>nom</label>
                   <input class="form-control" name="nom">
                   <label>Telephone</label>
                   <input class="form-control" name="tel">
                   <label>address</label>
                   <input class="form-control" name="adr">
                   <label>Email</label>
                   <input class="form-control" name="email" type="email">
                   <label>login</label>
                   <input class="form-control" name="login">
                   <label>Mot de passe</label>
                   <input class="form-control" name="pass" type="password">
               </div>
             </div>
         <div class="modal-footer">
             <button type="submit" class="btn btn-info">Ajouter</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
         </form>
      </div>
   </div>
</div>
