<!--______________NODE TPL POUR TdC PAGE VDL LISTE ARCHIVES CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">
<!--______________COLONNE GAUCHE 1________________ -->
  <!-- <pre> <?php //print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->
<div id="colonne-1" class="col1_layout_3_6_3 archives-vdl">
     <?php if ($title): /*insertion du titre de la page et style differencié*/?>
     <h1 class="titre-archives"><?php print $title; ?></h1>
     <br clear="all"/>
    <?php endif; ?>
            <?php
           global $theme_path;
              include ($theme_path.'/includes/regions_inc/inc_region_col_1.php');
              ?>
      
       <!-- Deco page-->
    <?php  print $node->field_image_deco_lycee[0]['view'] /*Image deco page lycee*/ ?>
</div>
<!--______________COLONNE GAUCHE 2________________ -->
<div id="colonne-2" class="col2_layout_3_6_3 archives-vdl">
     <?php if ($submitted): ?>
      <span class="submitted"><?php print $submitted; ?></span>
    <?php endif; ?>
      <div class="content">
    <?php
     /*insertion du contenu du corps de la page*/
      print $node->content['body']['#value'];
      print $node->field_vue_liste_vdl[0]['view'];/*Les vdl archives et en cours*/
     /*Pour les termes Sortie : 15 - Europe : 13 - Partenaires : 14 */
      ?>
</div>
</div>
<!--______________COLONNE GAUCHE 3________________ -->
   
<div id="colonne-3" class="col3_layout_3_6_3 archives-vdl">
     <?php print $picture; ?>

           <?php
      $theme_path = drupal_get_path('theme', 'cyrano_ca'); 
      include ($theme_path.'/includes/inc_vue_caucadis_actu.php');
              ?>
           <?php
           global $theme_path;
              include ($theme_path.'/includes/regions_inc/inc_region_col_3.php');
              ?>
  

    <?php if ($terms): ?>
      <div class="taxonomy"><?php //print $terms; ?></div>
    <?php endif;?>

    <?php if ($links): ?>
      <div class="links"> <?php //print $links; ?></div>
    <?php endif; ?>

</div>
   

  </div> <!-- /node-inner -->
</div> <!-- /node-->
<!--______________FIN NODE TPL CUSTOM________________ -->