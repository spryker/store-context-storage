<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Client\StoreContextStorage\Expander;

use Generated\Shared\Transfer\StoreTransfer;

interface StoreContextExpanderInterface
{
    public function expandStore(StoreTransfer $storeTransfer): StoreTransfer;
}
