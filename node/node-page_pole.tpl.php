<!-- ______________________ NODE-PAGE_POLE.TPL _______________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">

      <?php if ($title): /* copier le titre dans la colonne desirée */ ?>
          <h1 class="titre_page_pole"><?php print $title; ?></h1>
      <?php endif; ?>

    <?php print $picture; ?>

    <?php if ($submitted): ?>
      <span class="submitted"><?php print $submitted; ?></span>
    <?php endif; ?>
             
<!-- ______________________ COLONNE 1  _______________________ -->
 <?php if ($pole_col1): ?>
              <div class="layout_3col_all4 page-pole">
                  <?php print $pole_col1; ?>
              </div>
<?php endif; ?>
<!-- ______________________ COLONNE 2  _______________________ -->
<?php if ($pole_col2): ?>
    <div class="layout_3col_all4 page-pole">
        <?php print $pole_col2; ?>
    </div>
<?php endif; ?>
<!-- ______________________ COLONNE 3  _______________________ -->
<?php if ($pole_col3): ?>
    <div class="layout_3col_all4last page-pole">
        <?php print $pole_col3; ?>
    </div>
<?php endif; ?>

 
  </div> <!-- /node-inner -->
</div> <!-- /node-->