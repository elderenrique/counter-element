<?php

use YOOtheme\Util\Arr;

return [

	'transforms' => [

		'render' => function ($node, array $params) use ($file) {

			/**
			 * @var $app
			 * @var $theme
			 * @var $builder
			 */
			extract($params);

			$app['styles']->add('builder-counter', "{$file['dirname']}/css/counter.css", [], ['defer' => true]);
			$app['scripts']->add('builder-counter', "{$file['dirname']}/js/counter.js", [], ['defer' => true]);

		},

	],

	'updates' => [

		//

	],

];
