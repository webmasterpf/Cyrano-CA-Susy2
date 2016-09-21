<?php
/* Template pour node.tpl fiche formation selon tid - Enseignement Techno
 * PROD = VID 1 TID 17
 * devient 1-24 avec nouveaux tags
*/?>
<!--______________NODE TPL FICHE-FORMATION.TPL TECHNO CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
    <div class="node-inner">
             <?php print $picture; ?>

            <?php if ($submitted): ?>
            <span class="submitted"><?php print $submitted; ?></span>
            <?php endif; ?>
<!-- ZONE EN TETE DE LA FICHE FORMATION -->
<div id="entete-fiche-formation" class="conteneur-flex fiche-formation-techno">
    <div id="colonne-1" class="col1_layoutflex_5_7 illustration-slider">
         <?php
 $theme_path = drupal_get_path('theme', 'cyrano_ca'); 
include ($theme_path.'/includes/inc_vue_slider_illustration_fiche_formation.php');

?>    </div><!-- /illustration-slider -->
<div id="colonne-2" class="col2_layoutflex_5_7 intro-fiche-formation fiche-formation-techno-bg">
     <?php if ($title): /*copier le titre dans la colonne desirée*/?>
            <h1 class="titre_fiche-formation titre-techno"><?php print $title; ?></h1>
            <?php endif; ?>
            <br/>
             <?php if ($node->field_intro_ficheform[0]['view']): ?>
                    <?php  print $node->field_intro_ficheform[0]['view'] /*intro fiche formation*/ ?>
             <?php endif; ?>

</div>


</div><!-- /entete-fiche-formation -->

<hr class="fin-entete-fiche fiche-formation-techno">
  

            
<div class="conteneur-flex">
        <!--______________COLONNE 1________________ -->
        <div id="colonne-infos-vdl" class="col1_layoutflex_2_5_5 fiche-formation fiche-formation-techno">
        <?php
   global $theme_path;
include ($theme_path.'/includes/dedicates_inc/inc_docs_utiles_fiche_formation.php');
?>
        </div><!-- fin colonne -->

        <!--______________COLONNE 2________________ -->
        <div id="colonne-intro-complement" class="col2_layoutflex_2_5_5 fiche-formation fiche-formation-techno">
          <?php
   global $theme_path;
include ($theme_path.'/includes/dedicates_inc/inc_intro2_fiche_formation.php');
?>
        </div><!-- fin colonne -->

        <!--______________COLONNE 3________________ -->
        <div id="colonne-fiche-formation" class="col3_layoutflex_2_5_5 fiche-formation fiche-formation-techno">
  <div class="content">
                <?php   print $node->content['body']['#value'];/*déplacer le contenu dans la colonne désirée*/ ?>
            </div>
        </div><!-- fin colonne -->

   </div><!-- fin  conteneur flex -->           
      

        <?php if ($terms): ?>
        <div class="taxonomy"><?php //print $terms; ?></div>
        <?php endif;?>

        <?php if ($links): ?>
        <div class="links"> <?php //print //$links; ?></div>
        <?php endif; ?>

    </div> <!-- /node-inner -->
</div> <!-- /node-->