<?php echo head(array('title' => metadata('exhibit', 'title'), 'bodyclass'=>'exhibits summary')); ?>
  <div id="exhibit-nav">
    <ul class="exhibit-section-nav" style="padding:0; margin:0">
      <li>
        <?php
          $title = exhibit_builder_link_to_exhibit(get_current_record('exhibit'),
						   "Home",
						   array('style' => 'font-weight:bold;'));
          echo $title;
        ?>
      </li>
    </ul>
    <ul class="exhibit-section-nav">
      <?php set_exhibit_pages_for_loop_by_exhibit(); ?>
      <?php foreach (loop('exhibit_page') as $exhibitPage): ?>
        <?php 
          $html = '<li>' . '<a class="exhibit-section-list" href="' . 
                  exhibit_builder_exhibit_uri(get_current_record('exhibit'), 
					      $exhibitPage) . '">' . 
                  cul_insert_angle_brackets(metadata($exhibitPage, 'title')) . '</a></li>';
          echo $html;
        ?>
      <?php endforeach; ?>
    </ul>
  </div><!--end id="exhibit-nav"-->
  <div id="content">
    <?php echo flash(); ?>
      <div id="solidBlock">
        <table style="border-collapse:collapse">
          <tr>
            <td class="leftBlock">
              <h1>
                <?php echo $exhibit->title; ?>
              </h1>
            </td>
            <td style="text-align:center;" id="solidBlockSecondary">
              <img src="<?=img("ambedkar-left.jpg")?>" alt="embedkar">
            </td>
          </tr>
        </table>
      </div><!--end id="solidBlock"-->
      <div class="exhibit-description">
        <h3>About the Exhibit</h3>
        <?php echo $exhibit->description; ?>
      </div>
      <div id="exhibit-credits">	
        <h3>Exhibit Curator</h3>
        <?php echo $exhibit->credits; ?>
      </div>
      <div class="permalink" style="padding:30px 0 0 0;">
        <p style="font-size:11px;text-align:right;">Bookmark this page as: <a href="http://www.columbia.edu/cgi-bin/cul/resolve?lweb0137">http://www.columbia.edu/cgi-bin/cul/resolve?lweb0137</a></p>
      </div>
    <p>&nbsp;</p>
  </div><!--end id="content"-->
<?php echo foot(); ?>
