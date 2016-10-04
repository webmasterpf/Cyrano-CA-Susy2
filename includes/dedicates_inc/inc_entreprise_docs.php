       
  <?php if ($node->field_fichier_joint_entreprise[0]['view']): ?>
        <div id="bloc-docs-actualites">
             <h3 class="docs-entreprise">Documents joints</h3>
                         
            <?php
                    /* 06/2015 Liste les fichiers à partir du tableau créé
                     * création d'un tableau dynamique 
                     */
                    if (!empty($node->field_fichier_joint_entreprise[0]['view'])): ?>
                <div class="liste-docs-actualites">
               <?php  //récupération du nom du champ
               print $node->content['field_NAME']['field']['#title'] ?>
                 <table class="table-docs-entreprise">
                    <tbody>
               <?php
               foreach ($node->field_fichier_joint_entreprise as $key => $lien) {
                    print '<td>'.$node->field_fichier_joint_entreprise[$key]['view'].'</td>';
               }
               ?>  
                </tbody>
       </table>  
                </div>
            <?php endif;?>
        </div>
           <?php endif;?>    