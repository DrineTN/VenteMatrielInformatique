<div class="modal fade" id="modalMatriel" role="dialog">
   <div class="modal-dialog">
      <!-- Modal matriel-->
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Modal Header</h4>
         </div>
         <div class="modal-body">
           <form role="form" action="ajouterMat.php" method="post" enctype="multipart/form-data">
               <div class="form-group">
                   <label>Libelle</label>
                   <input class="form-control" name="lib">
                   <label>Prix</label>
                   <input class="form-control" name="prx">
                   <label>qte_stock</label>
                   <input class="form-control" name="qtes">
                   <?php
                   $req1 = $cnx->prepare("select * FROM categorie");
                   $req1->execute();
                   $resu = $req1;
                    ?>
                   <label for="">Categorie</label>
                   <select class="form-control" name="select1">
                     <?php
                       while ($lignecat = $resu->fetch(PDO::FETCH_ASSOC)) { ?>
                         <?php $idc = $lignecat['idcateg'];?>
                         <option value="<?php echo($idc)?>"><?php echo($lignecat['libcateg']);?></option>
                     <?php  } ?>
                   </select>
                   <label>Description</label>
                   <input class="form-control" name="desc" type="text" size="50">
                   <label class="custom-file">
                   <input type="file" name="photo" value="" class="custom-file-input">
                   <span class="custom-file-control"></span>
                 </label>
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
