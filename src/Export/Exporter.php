<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\AdminBundle\Export;

use Sonata\CoreBundle\Exporter\Exporter as CoreExporter;
use Sonata\Exporter\Exporter as BaseExporter;

if (class_exists(CoreExporter::class)) {
    /**
     * NEXT_MAJOR: remove this class.
     *
     * @deprecated since sonata-project/admin-bundle 3.14, to be removed in 4.0.
     */
    class Exporter extends CoreExporter
    {
        public function __construct()
        {
            @trigger_error(sprintf(
                'The %s\Exporter class is deprecated since version 3.14 and will be removed in 4.0.'
                .' Use \Sonata\Exporter\Exporter instead',
                __NAMESPACE__
            ), E_USER_DEPRECATED);
        }
    }
} else {
    class_alias(
        BaseExporter::class,
        'Sonata\AdminBundle\Export\Exporter'
    );
}
