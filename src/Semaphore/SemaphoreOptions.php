<?php namespace DCarbone\PHPConsulAPI\Semaphore;

/*
   Copyright 2016 Daniel Carbone (daniel.p.carbone@gmail.com)

   Licensed under the Apache License, Version 2.0 (the "License");
   you may not use this file except in compliance with the License.
   You may obtain a copy of the License at

       http://www.apache.org/licenses/LICENSE-2.0

   Unless required by applicable law or agreed to in writing, software
   distributed under the License is distributed on an "AS IS" BASIS,
   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
   See the License for the specific language governing permissions and
   limitations under the License.
*/

use DCarbone\PHPConsulAPI\AbstractObjectModel;

/**
 * Class SemaphoreOptions
 * @package DCarbone\PHPConsulAPI\Semaphore
 */
class SemaphoreOptions extends AbstractObjectModel
{
    /** @var string */
    public $Prefix = '';
    /** @var int */
    public $Limit = 0;
    /** @var string */
    public $Value = '';
    /** @var string */
    public $Session = '';
    /** @var string */
    public $SessionName = '';
    /** @var string */
    public $SessionTTL = '';
    /** @var int */
    public $MonitorRetries = 0;
    /** @var int */
    public $MonitorRetryTime = 0;
    /** @var int */
    public $SemaphoreWaitTime = 0;
    /** @var bool */
    public $SemaphoreTryOnce = false;
}