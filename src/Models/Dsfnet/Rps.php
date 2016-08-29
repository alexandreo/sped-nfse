<?php

namespace NFePHP\NFSe\Models\Dsfnet;

/**
 * Classe a construção do xml da NFSe
 * conforme o modelo DSFNET
 *
 * @category  NFePHP
 * @package   NFePHP\NFSe\Models\Dsfnet\Rps
 * @copyright NFePHP Copyright (c) 2016
 * @license   http://www.gnu.org/licenses/lgpl.txt LGPLv3+
 * @license   https://opensource.org/licenses/MIT MIT
 * @license   http://www.gnu.org/licenses/gpl.txt GPLv3+
 * @author    Roberto L. Machado <linux.rlm at gmail dot com>
 * @link      http://github.com/nfephp-org/sped-nfse for the canonical source repository
 */

use InvalidArgumentException;
use NFePHP\Common\Strings\Strings;
use NFePHP\NFSe\Models\Rps as RpsBase;

class Rps extends RpsBase
{
    
    private $cMunSiafi = '0921';
}
