<!--______________NODE TPL POUR TdC PROJET CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">
<!--______________COLONNE GAUCHE 1________________ -->
  <!-- <pre> <?php //print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->
<div id="colonne-1" class="col1_layout_9_3 contenu-vdl contenu_projet">
     <?php if ($title): /*insertion du titre de la page et style differencié*/?>
     <h1 class="titre-vdl"><?php print $title; ?></h1>
     <?php endif; ?>
         <div class="content">
                  <?php
global $theme_path;
include ($theme_path.'/includes/dedicates_inc/inc_vdl_illustration_vue.php');
?>
   <?php
   
     /*insertion du contenu du corps de la page*/
      print $node->content['body']['#value']
      ?>

         <?php if ($node->field_choix_galerie_vdl[0]['view']): ?>
        <div class="galerie-vdl">
           <?php  print $node->field_choix_galerie_vdl[0]['view'] /**/ ?>
        </div>
           <?php endif;?>
 
<?php
global $theme_path;
include ($theme_path.'/includes/dedicates_inc/inc_vdl_medias.php');
?>
         
    </div>
    <?php if ($terms): ?>
      <div class="taxonomy"><?php //print $terms; ?></div>
    <?php endif;?>

    <?php if ($links): ?>
      <div class="links"> <?php //print $links; ?></div>
    <?php endif; ?>     
        
</div>
<!--______________COLONNE GAUCHE 2________________ -->
<div id="colonne-2" class="col2_layout_9_3 contenu-vdl contenu_projet">
     <?php if ($submitted): ?>
      <span class="submitted"><?php print $submitted; ?></span>
    <?php endif; ?>

 
  <?php //inclusion de la vue Docs joints
global $theme_path;
include ($theme_path.'/includes/dedicates_inc/inc_vdl_docs_joints.php');
?>

      
 <?php //inclusion de la vue Autres evenements
global $theme_path;
include ($theme_path.'/includes/dedicates_inc/inc_vdl_autres_evenements.php');
?>


</div>

  

  </div> <!-- /node-inner -->
</div> <!-- /node-->
<!--______________FIN NODE TPL CUSTOM________________ -->