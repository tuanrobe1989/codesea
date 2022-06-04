<?php
$className = 'courseContents';
if (!empty($block['className'])) {
  $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
  $className .= ' align' . $block['align'];
}


$title = array('core/heading', array('className' => 'courseContents__title'));

$template = array($title);

$allowed_blocks = array('core/columns', 'core/column', 'core/image', 'core/paragraph', 'core/heading');

?>
<div id="courseContents-<?php echo $block['id'] ?>" class="<?php if ($className) echo ' ' . $className ?>">
  <div class="container courseContents__container">
    <div class="courseContents__headerWrapper">
      <InnerBlocks template="<?php echo esc_attr(wp_json_encode($template)); ?>" allowedBlocks="<?php echo esc_attr(wp_json_encode($allowed_blocks)) ?>" />
      <a href="#" class="courseContents__moreBtn"><?php echo __('Xem tất cả' ,'codesea') ?></a>
    </div>
    <div class="courseContents__list">
      <div class="courseContents__item">
        <div class="courseContents__item__bulletWrapper">
          <div class="courseContents__item__bullet">
            <span class="courseContents__item__bulletTitle"><?php echo __('Chương' ,'codesea') ?></span>
            <span class="courseContents__item__bulletNumber">1</span>
          </div>
        </div>
        <div class="courseContents__item__contentWrapper">
          <h3 class="courseContents__item__title">Làm việc với các đối tượng giao diện cơ bản trong iOS</h3>
          <p class="courseContents__item__content">Thông qua 10 ứng dụng iOS với độ phức tạp từ thấp đến cao, khóa học sẽ mang lại cho các bạn 1 trải nghiệm học tập tự nhiên nhất, thay vì phải tự tay mò mẫm những kiến thức rời rạc trong hàng tháng trời, các bạn sẽ chỉ mất 2 tuần để nắm được các kiến thức cơ bản nhất của việc lập trình 1 ứng dụng iOS, từ đó nâng cao khả năng tự học & tự định hướng nâng cao chuyên môn về iOS của mình.</p>
          <div class="courseContents__item__linkWrapper">
            <a href="#" class="courseContents__item__link"><?php echo __('Xem thêm' ,'codesea') ?></a>
          </div>
        </div>
      </div>
      <div class="courseContents__item">
        <div class="courseContents__item__bulletWrapper">
          <div class="courseContents__item__bullet">
            <span class="courseContents__item__bulletTitle"><?php echo __('Chương' ,'codesea') ?></span>
            <span class="courseContents__item__bulletNumber">1</span>
          </div>
        </div>
        <div class="courseContents__item__contentWrapper">
          <h3 class="courseContents__item__title">Làm việc với các đối tượng giao diện cơ bản trong iOS</h3>
          <p class="courseContents__item__content">Thông qua 10 ứng dụng iOS với độ phức tạp từ thấp đến cao, khóa học sẽ mang lại cho các bạn 1 trải nghiệm học tập tự nhiên nhất, thay vì phải tự tay mò mẫm những kiến thức rời rạc trong hàng tháng trời, các bạn sẽ chỉ mất 2 tuần để nắm được các kiến thức cơ bản nhất của việc lập trình 1 ứng dụng iOS, từ đó nâng cao khả năng tự học & tự định hướng nâng cao chuyên môn về iOS của mình.</p>
          <div class="courseContents__item__linkWrapper">
            <a href="#" class="courseContents__item__link"><?php echo __('Xem thêm' ,'codesea') ?></a>
          </div>
        </div>
      </div>
      <div class="courseContents__item">
        <div class="courseContents__item__bulletWrapper">
          <div class="courseContents__item__bullet">
            <span class="courseContents__item__bulletTitle"><?php echo __('Chương' ,'codesea') ?></span>
            <span class="courseContents__item__bulletNumber">1</span>
          </div>
        </div>
        <div class="courseContents__item__contentWrapper">
          <h3 class="courseContents__item__title">Làm việc với các đối tượng giao diện cơ bản trong iOS</h3>
          <p class="courseContents__item__content">Thông qua 10 ứng dụng iOS với độ phức tạp từ thấp đến cao, khóa học sẽ mang lại cho các bạn 1 trải nghiệm học tập tự nhiên nhất, thay vì phải tự tay mò mẫm những kiến thức rời rạc trong hàng tháng trời, các bạn sẽ chỉ mất 2 tuần để nắm được các kiến thức cơ bản nhất của việc lập trình 1 ứng dụng iOS, từ đó nâng cao khả năng tự học & tự định hướng nâng cao chuyên môn về iOS của mình.</p>
          <div class="courseContents__item__linkWrapper">
            <a href="#" class="courseContents__item__link"><?php echo __('Xem thêm' ,'codesea') ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>