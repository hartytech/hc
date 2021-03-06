<?php

namespace Nextend\SmartSlider3Pro\Application\Admin\Slider;


use Nextend\Framework\Asset\Js\Js;
use Nextend\Framework\Sanitize;
use Nextend\SmartSlider3\Settings;

/**
 * @var $this ViewSliderShapeDividerPreview
 */


JS::addGlobalInline('document.documentElement.classList.add("n2_html--application-only");');
JS::addGlobalInline('document.documentElement.classList.add("n2_html--slider-preview");');

$slider = $this->renderSlider();

$externals = Sanitize::esc_attr(Settings::get('external-css-files'));
if (!empty($externals)) {
    $externals = explode("\n", $externals);
    foreach ($externals as $external) {
        echo "<link rel='stylesheet' href='" . $external . "' type='text/css' media='all'>";
    }
}

echo $slider;
?>

<script>
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') {
            parent.postMessage(JSON.stringify({action: 'cancel'}), "*");
        }
    });
</script>