<!--______________NODE TPL POUR TdC PAGE ENTREPRISE LISTE CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">
<!--______________COLONNE  1________________ -->
  <!-- <pre> <?php //print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->
<div id="colonne-1" class="col1_layout_3_6_3 page-entreprise">
     <?php if ($title): /*insertion du titre de la page et style differencié*/?>
     <h1 class="titre_entreprise"><?php print $title; ?></h1>
     <br clear="all"/>
    <?php endif; ?>
                      <?php
           global $theme_path;
              include ($theme_path.'/includes/regions_inc/inc_region_col_1.php');
              ?>
     
</div>
<!--______________COLONNE  2________________ -->
<div id="colonne-2" class="col2_layout_3_6_3 page-entreprise">
     <?php if ($submitted): ?>
      <span class="submitted"><?php print $submitted; ?></span>
    <?php endif; ?>
      <div class="content">
    <?php
     /*insertion du contenu du corps de la page*/
      print $node->content['body']['#value'];
      ?>
      <?php
       global $theme_path;
      include ($theme_path.'/includes/dedicates_inc/inc_vue_entreprise_liste.php');
              ?>
   </div>
</div>
<!--______________COLONNE  3________________ -->
   <div id="colonne-3" class="col3_layout_3_6_3 page-entreprise">
     <?php print $picture; ?>

           <?php
      global $theme_path;
      include ($theme_path.'/includes/dedicates_inc/inc_vue_caucadis_actu.php');
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