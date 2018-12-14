<?php

namespace OnePilot\Client\Classes;

use October\Rain\Support\Traits\Singleton;

class Files
{
    use Singleton;

    /**
     * Get data for some important system files
     *
     * @return array
     */
    public function getFilesProperties()
    {
        $files = [
            '.env',
            '.htaccess',
            'index.php',
        ];

        $configFiles = $this->getConfigFiles();

        return collect($files + $configFiles)->transform(function ($relativePath, $absolutePath) {

            if (is_int($absolutePath)) {
                $absolutePath = base_path($relativePath);
            }

            if (!file_exists($absolutePath)) {
                return false;
            }

            $fp = fopen($absolutePath, 'r');
            $fstat = fstat($fp);
            fclose($fp);

            return [
                'path'     => $relativePath,
                'size'     => $fstat['size'],
                'mtime'    => $fstat['mtime'],
                'checksum' => md5_file($absolutePath),
            ];
        })->filter()->values();
    }

    /**
     * @return array
     */
    private function getConfigFiles()
    {
        return collect(glob(base_path('config/*')))
            ->mapWithKeys(function ($absolutePath) {
                $relativePath = str_replace(base_path() . DIRECTORY_SEPARATOR, '', $absolutePath);

                return [
                    $absolutePath => $relativePath,
                ];
            })
            ->toArray();
    }
}