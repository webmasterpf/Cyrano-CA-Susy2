<!--______________NODE TPL POUR TdC CONTENU DOC ADMIN CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">

<!--______________COLONNE 1________________ -->
<div id="colonne-1" class="col1_layout_8_4 admin_content">
         <?php if ($title): /*insertion du titre de la page et style differencié*/?>
     <h1 class="titre_actualites_content"><?php print $title; ?></h1>
     <br clear="all"/>
    <?php endif; ?>
     
<?php print $picture; ?>
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
              include ($theme_path.'/includes/regions_inc/inc_region_col_1.php');
              ?>
    </div>
        
   
</div>
<!--______________COLONNE 2________________ -->
   
<div id="colonne-2" class="col2_layout_8_4 admin_content">
     
 <?php if ($node->field_admin_list_vf[0]['view']): ?>
        <div class="liste-doc-admin">
           <?php  print $node->field_admin_list_vf[0]['view'] /**/ ?>
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

</div>
   

  </div> <!-- /node-inner -->
</div> <!-- /node-->
<!--______________FIN NODE TPL CUSTOM________________ -->