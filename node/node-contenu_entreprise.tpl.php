<!--______________NODE TPL POUR TdC CONTENU ENTREPRISE CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">

<!--______________ COLONNE 1 ________________ -->

<div id="colonne-1" class="col1_layout_6_6 contenu_entreprise">
         <?php if ($title): /*insertion du titre de la page et style differencié*/?>
     <h1 class="titre_entreprise_content"><?php print $title; ?></h1>
         <?php endif; ?>
     

     <?php if ($submitted): ?>
      <span class="submitted"><?php print $submitted; ?></span>
    <?php endif; ?>
      
           <?php
      global $theme_path;
      include ($theme_path . '/includes/dedicates_inc/inc_entreprise_docs.php');
      ?>


          <?php if ($node->field_choix_galerie_vdl[0]['view']): ?>
      <div class="galerie-vdl">
           <?php  print $node->field_choix_galerie_vdl[0]['view'] /*galerie*/ ?>
        </div>
           <?php endif;?>

    <?php
      global $theme_path;
      include ($theme_path . '/includes/regions_inc/inc_region_col_1.php');
      ?>
</div>
<!--______________COLONNE 2________________ -->
   
<div id="colonne-2" class="col2_layout_6_6 contenu_entreprise">
     <?php print $picture; ?>

   

    <div class="content">
 <?php
     /*insertion du contenu du corps de la page*/
      print $node->content['body']['#value'];

      ?>
       
 <?php if ($node->field_video_entreprise[0]['view']): ?>
        <div class="bloc-video-entreprise">
                   <?php  print $node->field_video_entreprise[0]['view']  ?>
        </div>
           <?php endif;?>
         
        <?php
        global $theme_path;
        include ($theme_path . '/includes/regions_inc/inc_region_col_2.php');
        ?>


    </div>

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