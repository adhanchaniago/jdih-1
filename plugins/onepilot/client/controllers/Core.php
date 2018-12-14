<?php

namespace OnePilot\Client\Controllers;

use Illuminate\Routing\Controller;
use OnePilot\Client\Classes\Response;
use System\Classes\UpdateManager;

class Core extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     * @throws \ApplicationException
     */
    public function update()
    {
        $manager = UpdateManager::instance()->resetNotes();
        $updateList = $manager->requestUpdateList(true);

        $coreHash = array_get($updateList, 'core.hash');
        $coreBuild = array_get($updateList, 'core.build');

        $manager->downloadCore($coreHash);
        $manager->extractCore();
        $manager->setBuild($coreBuild, $coreHash);
        $manager->update();

        return Response::make([
            'build' => $coreBuild,
            'hash'  => $coreHash,
        ]);
    }

    /**
     * Get the latest backup
     * @return date
     */
    public function getLatestBackupInfo()
    {
        //todo
        return null;
    }
}
