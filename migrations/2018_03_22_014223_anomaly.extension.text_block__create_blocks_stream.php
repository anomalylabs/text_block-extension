<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyExtensionTextBlockCreateBlocksStream
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class AnomalyExtensionTextBlockCreateBlocksStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug'         => 'blocks',
        'translatable' => true,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'text' => [
            'translatable' => true,
        ],
    ];

}
