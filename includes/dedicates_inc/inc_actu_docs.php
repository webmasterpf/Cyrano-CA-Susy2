       
  <?php if ($node->field_fichier_joint_rp[0]['view']): ?>
        <div id="bloc-docs-actualites">
            <h3 class="docs-actualites">Informations &amp; Documents joints</h3>
         
                <span>  Date : <?php  print $node->field_date_evenement[0]['view']  ?></span>
                <span>  Type de m&eacute;dia : <?php  print $node->field_type_media[0]['view']  ?></span>
            <?php
                    /* 06/2015 Liste les fichiers à partir du tableau créé
                     * création d'une liste dynamique 
                     */
                    if (!empty($node->field_fichier_joint_rp[0]['view'])): ?>
                <div class="liste-docs-actualites">
               <?php  //récupération du nom du champ
               print $node->content['field_NAME']['field']['#title'] ?>
                    <ul>
               <?php
               foreach ($node->field_fichier_joint_rp as $key => $lien) {
                    print '<li>'.$node->field_fichier_joint_rp[$key]['view'].'</li>';
               }
               ?>  
                  </ul>   </div>
            <?php endif;?>
        </div>
           <?php endif;?>    