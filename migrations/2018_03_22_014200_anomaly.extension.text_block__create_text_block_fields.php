<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyExtensionTextBlockCreateTextBlockFields
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class AnomalyExtensionTextBlockCreateTextBlockFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'text' => [
            'type'   => 'anomaly.field_type.wysiwyg',
            'config' => [
                'configuration' => 'basic',
            ],
        ],
    ];

}
