# Animate Plugin for [Flextype](http://flextype.org/)
![version](https://img.shields.io/badge/version-1.0.1-brightgreen.svg?style=flat-square)
![Flextype](https://img.shields.io/badge/Flextype-0.7.0-green.svg?style=flat-square)
![MIT License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)

Animate plugin allows you to animate almost everything on your site with help of powerful animate.css library.

## Installation
Unzip plugin to the folder `/site/plugins/`

## Usage in page content

Basic usage
```
[animate]Text with animation[/animate]
```

Usage with parameters
```
[animate type="pulse" duration=1 delay=0 inline="yes" class="class-name"]Text with animation[/animate]
```

#### Parameters

__type__ - set animation type. Default value is bounceIn

possible values:

bounce, flash, pulse, rubberBand, shake, headShake, swing, tada, wobble, jello, bounceIn, bounceInDown,
bounceInLeft, bounceInRight, bounceInUp, bounceOut, bounceOutDown, bounceOutLeft, bounceOutRight, bounceOutUp,
fadeIn, fadeInDown, fadeInDownBig, fadeInLeft, fadeInLeftBig, fadeInRight, fadeInRightBig, fadeInUp,
fadeInUpBig, fadeOut,fadeOutDown, fadeOutDownBig, fadeOutLeft, fadeOutLeftBig, fadeOutRight, fadeOutRightBig,
fadeOutUp,fadeOutUpBig,flipInX,flipInY flipOutX,flipOutY,lightSpeedIn,lightSpeedOut,
rotateIn, rotateInDownLeft, rotateInDownRight, rotateInUpLeft, rotateInUpRight, rotateOut, rotateOutDownLeft, rotateOutDownRight, rotateOutUpLeft, rotateOutUpRight, hinge, jackInTheBox, rollIn, rollOut, zoomIn, zoomInDown zoomInLeft, zoomInRight, zoomInUp, zoomOut, zoomOutDown, zoomOutLeft, zoomOutRight, zoomOutUp, slideInDown, slideInLeft, slideInRight, slideInUp, slideOutDown, slideOutLeft, slideOutRight, slideOutUp


__duration__ - set animation duration (seconds). Default value is 1

possible values: Number from 0 to 20


__delay__ - set animation delay (seconds). Default value is 0

possible values: Number from 0 to 20


__inline__ - this parameter determines what HTML tag will be used for animation wrapper. Turn this option to YES and animated element will be wrapped in SPAN instead of DIV. Useful for inline animations, like buttons. Default value is no

possible values: yes or no


__class__ - Additional CSS class name(s) separated by space(s)

## Usage in the template

```
<div class="animated bounce">Text with animation</div>
```

## Settings

```yaml
enabled: true # or `false` to disable the plugin
```

## License
See [LICENSE](https://github.com/flextype-plugins/animate/blob/master/LICENSE)
