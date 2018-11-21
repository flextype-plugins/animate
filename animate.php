<?php

/**
 *
 * Flextype Animate Plugin
 *
 * @author Romanenko Sergey / Awilum <awilum@yandex.ru>
 * @link http://flextype.org
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Flextype;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;
use Flextype\Component\Event\Event;

//
// Add listner for onThemeHeader event
//
Event::addListener('onThemeHeader', function () {
   echo(' <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">');
});


// Event: onShortcodesInitialized
Event::addListener('onShortcodesInitialized', function () {

    // Shortcode: [animate]Text to animate[/animate]
    Content::shortcode()->addHandler('animate', function(ShortcodeInterface $s) {

        if ($s->getParameter('inline') == 'yes') {
            $tag = 'span';
        } else {
            $tag = 'div';
        }

        if (null !== $s->getParameter('duration')) {
            $duration = $s->getParameter('duration');
        } else {
            $duration = 1;
        }

        if (null !== $s->getParameter('delay')) {
            $delay = $s->getParameter('delay');
        } else {
            $delay = 0;
        }

        if (null !== $s->getParameter('type')) {
            $type = $s->getParameter('type');
        } else {
            $type = 'bounceIn';
        }

        if (null !== $s->getParameter('class')) {
            $class = $s->getParameter('class');
        } else {
            $class = '';
        }

        $time = '-webkit-animation-duration:' . $duration . 's;-webkit-animation-delay:' . $delay . 's;animation-duration:' . $duration . 's;animation-delay:' . $delay . 's;';

        return '<'.$tag.' class="animated '.$type.' '.$class.'" style="' . $time . '" data-animation="' . $type . '" data-duration="' . $duration . '" data-delay="' . $delay . '">'.$s->getContent().'</'.$tag.'>';
    });
});
