<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerTest\Zed\StoreContextStorage;

use Codeception\Actor;
use Orm\Zed\StoreStorage\Persistence\SpyStoreStorage;
use Orm\Zed\StoreStorage\Persistence\SpyStoreStorageQuery;

/**
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 *
 * @SuppressWarnings(\SprykerTest\Zed\StoreContextStorage\PHPMD)
 */
class StoreContextStorageCommunicationTester extends Actor
{
    use _generated\StoreContextStorageCommunicationTesterActions;

    public function findStoreStorageEntityByIdStore(int $idStore): ?SpyStoreStorage
    {
        return $this->createStoreStoragePropelQuery()->findOneByFkStore($idStore);
    }

    protected function createStoreStoragePropelQuery(): SpyStoreStorageQuery
    {
        return SpyStoreStorageQuery::create();
    }
}
