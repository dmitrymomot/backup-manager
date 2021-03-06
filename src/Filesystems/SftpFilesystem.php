<?php namespace BigName\BackupManager\Filesystems;

use League\Flysystem\Adapter\Sftp;
use League\Flysystem\Filesystem as Flysystem;

/**
 * Class SftpFilesystem
 * @package BigName\BackupManager\Filesystems
 */
class SftpFilesystem implements Filesystem
{
    /**
     * Test fitness of visitor.
     * @param $type
     * @return bool
     */
    public function handles($type)
    {
        return strtolower($type) == 'sftp';
    }

    /**
     * @param array $config
     * @return Flysystem
     */
    public function get(array $config)
    {
        return new Flysystem(new Sftp($config));
    }
}
