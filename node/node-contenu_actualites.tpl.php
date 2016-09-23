<!--______________NODE TPL POUR TdC CONTENU ACTUALITES CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">
<!--______________COLONNE GAUCHE 1________________ -->
  <!-- <pre> <?php //print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->
<div  id="colonne-1" class="col1_layout_9_3 actualites_content_G1">

     <?php if ($title): /*insertion du titre de la page et style differencié*/?>
     <h1 class="titre_actualites_content"><?php print $title; ?></h1>
         <?php endif; ?>
     
        <?php if ($submitted): ?>
      <span class="submitted"><?php print $submitted; ?></span>
    <?php endif; ?>
     
       <div class="content">
 <?php
     /*insertion du contenu du corps de la page*/
      print $node->content['body']['#value'];

      ?>
           
           <?php if ($node->field_choix_galerie_vdl[0]['view']): ?>
        <div class="galerie-vdl">
           <?php  print $node->field_choix_galerie_vdl[0]['view'] /**/ ?>
        </div>
           <?php endif;?>

        <?php if ($node->field_video_rp[0]['view']): ?>
        <div id="bloc-video-actualites">
                   <?php  print $node->field_video_rp[0]['view'] /*Video*/ ?>
        </div>
           <?php endif;?>


 <?php if ($node->field_fichier_audio_rp[0]['view']): ?>
        <div id="bloc-audio-actualites">
                   <?php  print $node->field_fichier_audio_rp[0]['view'] /*audio*/ ?>
        </div>
           <?php endif;?>

      
                 <?php
           global $theme_path;
              include ($theme_path.'/includes/regions_inc/inc_region_col_1.php');
              ?>
     </div>
    
       
</div><!-- /fin colonne -->

<!--______________COLONNE GAUCHE 2________________ -->
<div id="colonne-2" class="col2_layout_9_3 actualites_content_G2">
     


       
  <?php if ($node->field_fichier_joint_rp[0]['view']): ?>
        <div id="bloc-docs-actualites">
            <h3 class="docs-actualites">Informations &amp; Documents joints</h3>
             <table id="table-docs-actualites">
                                <tbody>
                              
           <tr class="line1">
                <td>  Date : <?php  print $node->field_date_evenement[0]['view']  ?></td>
                <td>  Type de m&eacute;dia : <?php  print $node->field_type_media[0]['view']  ?></td>
               <td>  <?php  print $node->field_fichier_joint_rp[0]['view']  ?></td>
               <td>  <?php  print $node->field_fichier_joint_rp[1]['view']  ?></td>
               <td>  <?php  print $node->field_fichier_joint_rp[2]['view']  ?></td>
              

                </tr>
                 </tbody>

       </table>
        </div>
           <?php endif;?>
    
     
                 <?php
           global $theme_path;
              include ($theme_path.'/includes/regions_inc/inc_region_col_2.php');
              ?>

    <?php if ($terms): ?>
      <div class="taxonomy"><?php //print $terms; ?></div>
    <?php endif;?>

    <?php if ($links): ?>
      <div class="links"> <?php //print $links; ?></div>
    <?php endif; ?>
</div><!-- /fin colonne -->

  </div> <!-- /node-inner -->
</div> <!-- /node-->
<!--______________FIN NODE TPL CUSTOM________________ -->