<?php
/* Template pour node.tpl page VDL globale
*/?>
<!--______________NODE TPL POUR PAGE-VDL-GLOBALE.TPL CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
    <div class="node-inner">
             <?php print $picture; ?>

            <?php if ($submitted): ?>
            <span class="submitted"><?php print $submitted; ?></span>
            <?php endif; ?>

   <?php if ($title): /*copier le titre dans la colonne desirée*/?>
            <h1 class="titre_page"><?php print $title; ?></h1>
            <?php endif; ?>

            <div class="content">
                <?php   print $node->content['body']['#value'];/*déplacer le contenu dans la colonne désirée*/ ?>
            </div>
            <br />
        <!--______________COLONNE 1________________ -->
        <div id="colonne-1" class="layout_5col_is colonne-sortie-action">
        <?php
 global $theme_path;
include ($theme_path.'/includes/dedicates_inc/inc_vue_vdl_globale_sortie.php');

?>
        </div><!-- fin colonne -->

        <!--______________COLONNE 2________________ -->
        <div id="colonne-2" class="layout_5col_is colonne-projet">
        <?php
 global $theme_path;
include ($theme_path.'/includes/dedicates_inc/inc_vue_vdl_globale_projet.php');

?>
        </div><!-- fin colonne -->

        <!--______________COLONNE 3________________ -->
        <div id="colonne-3" class="layout_5col_is colonne-intervenants">
        <?php
 global $theme_path;
include ($theme_path.'/includes/dedicates_inc/inc_vue_vdl_globale_intervenants.php');

?>
        </div><!-- fin colonne -->

        <!--______________COLONNE 4________________ -->
        <div id="colonne-4" class="layout_5col_is colonne-innovations">
        <?php
 global $theme_path;
include ($theme_path.'/includes/dedicates_inc/inc_vue_vdl_globale_innovations.php');

?>
        </div><!-- fin colonne -->

       <!--______________COLONNE 5________________ -->
        <div id="colonne-5" class="layout_5col_is colonne-mini-stage">
        <?php
 global $theme_path;
include ($theme_path.'/includes/dedicates_inc/inc_vue_vdl_globale_mini-stage.php');

?>
        </div><!-- fin colonne -->

      

        <?php if ($terms): ?>
        <div class="taxonomy"><?php //print $terms; ?></div>
        <?php endif;?>

        <?php if ($links): ?>
        <div class="links"> <?php //print //$links; ?></div>
        <?php endif; ?>

    </div> <!-- /node-inner -->
</div> <!-- /node-->