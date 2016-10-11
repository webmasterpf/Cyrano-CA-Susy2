<?php
/* 
 * Permet d'avoir un template spécial pour le webform
 * NODE-WEBFORM.TPL GENERIK si besoin possible faire theme pour webform selon node-webform-NID.tpl.php
 */

?>

<!-- NODE-WEBFORM.TPL Formulaire general Id 5 -->
<div class="node<?php if ($sticky) { print " sticky"; } ?><?php if (!$status) { print " node-unpublished"; } ?>">
   
     <!--______________COLONNE 1________________ -->
  
<div id="colonne-1" class="col1_layout_3_9 webform contact">
     <?php if ($title): /*insertion du titre de la page et style differencié*/?>
     <h1 class="titre-webform"><?php print $title; ?></h1>
 
    <?php endif; ?>
     
       <!-- Deco page-->
       
    <?php  print $node->field_image_deco_lycee[0]['view'] /*Image deco page lycee*/ ?>
                <?php
           global $theme_path;
              include ($theme_path.'/includes/regions_inc/inc_region_col_1.php');
              ?>
</div>
<!--______________COLONNE 2________________ -->
        <div id="colonne-2" class="col2_layout_3_9 webform contact">
     <?php if ($submitted) { ?>
    <span class="submitted"><?php print $submitted?></span>
  <?php }; ?>
<?php $node->content['body']['#value']=false; ?>
 

  <div class="content">
    <table>
    <tr>
    <td><?php print $node->content['body']['#value']; ?></td>
    </tr>
    <tr>
    <td><?php print $node->content['webform']['#value']; ?></td>
    </tr>
    </table>
          <?php
           global $theme_path;
              include ($theme_path.'/includes/regions_inc/inc_region_col_2.php');
              ?>
  </div>
     
    <?php if ($links): ?>
    <div class="links"> <?php print $links; ?></div>
  <?php endif; ?>

     <?php if ($terms) { ?>
    <span class="taxonomy"><?php print $terms?></span>
  <?php }; ?>

</div>


</div><!-- /node -->
<?php print dpm($node);?>