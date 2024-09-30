<?php
/**
 * PrivateBin
 *
 * a zero-knowledge paste bin
 *
 * @link      https://github.com/PrivateBin/PrivateBin
 * @copyright 2012 Sébastien SAUVAGE (sebsauvage.net)
 * @license   https://www.opensource.org/licenses/zlib-license.php The zlib/libpng License
 * @version   1.5.1
 */

namespace PrivateBin;

use PrivateBin\Model\Paste;
use PrivateBin\Persistence\PurgeLimiter;

/**
 * Model
 *
 * Factory of PrivateBin instance models.
 */
class Model
{
    /**
     * Configuration.
     *
     * @var Configuration
     */
    private $conf;

    /**
     * Data storage.
     *
     * @var Data\AbstractData
     */
    private $store = null;

    /**
     * Factory constructor.
     *
     * @param configuration $conf
     */
    public function __construct(Configuration $conf)
    {
        $this->conf = $conf;
    }

    /**
     * Get a paste, optionally a specific instance.
     *
     * @param string $pasteId
     * @return Paste
     */
    public function getPaste($pasteId = null)
    {
        $paste = new Paste($this->conf, $this->getStore());
        if ($pasteId !== null) {
            $paste->setId($pasteId);
        }
        return $paste;
    }

    /**
     * Checks if a purge is necessary and triggers it if yes.
     */
    public function purge()
    {
        PurgeLimiter::setConfiguration($this->conf);
        PurgeLimiter::setStore($this->getStore());
        if (PurgeLimiter::canPurge()) {
            $this->getStore()->purge($this->conf->getKey('batchsize', 'purge'));
        }
    }

    /**
     * Gets, and creates if neccessary, a store object
     *
     * @return Data\AbstractData
     */
    public function getStore()
    {
        if ($this->store === null) {
            $class        = 'PrivateBin\\Data\\' . $this->conf->getKey('class', 'model');
            $this->store = new $class($this->conf->getSection('model_options'));
        }
        return $this->store;
    }
}
