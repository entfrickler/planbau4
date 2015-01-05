<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace app\widgets;

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Json;
use dosamigos\gallery\GalleryAsset;

/**
 * Description of GalleryDiv
 *
 * @author frieder
 */
class GalleryDiv extends \dosamigos\gallery\Gallery{
    
        /**
     * @param mixed $item
     * @return null|string the item to render
     */
    public function renderItem($item)
    {
        if (is_string($item)) {
            return Html::a(Html::img($item), $item, ['class' => 'gallery-item']);
        }
        $src = ArrayHelper::getValue($item, 'src');
        if ($src === null) {
            return null;
        }
        $url = ArrayHelper::getValue($item, 'url', $src);
        $options = ArrayHelper::getValue($item, 'options', []);
        Html::addCssClass($options, 'gallery-item');

        return Html::tag('div', Html::a(Html::img($src, ['class' => 'img-responsive']), $url, $options), ['class' => 'col-md-3 col-sm-4 col-xs-6']);
    }
    
        /**
     * Registers the client script required for the plugin
     */
    public function registerClientScript()
    {
        $view = $this->getView();
        GalleryAsset::register($view);

        $id = $this->options['id'];
        $options = Json::encode($this->clientOptions);
        $js = "dosamigos.gallery.registerLightBoxHandlers('#$id', $options);";
        $view->registerJs($js);

        if (!empty($this->clientEvents)) {
            $js = [];
            foreach ($this->clientEvents as $event => $handler) {
                $js[] = "jQuery('$id').on('$event', $handler);";
            }
            $view->registerJs(implode("\n", $js));
        }
    }
}
