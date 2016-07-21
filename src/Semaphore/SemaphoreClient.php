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

use DCarbone\PHPConsulAPI\AbstractApiClient;
use DCarbone\PHPConsulAPI\DateTime;

/**
 * Class SemaphoreClient
 * @package DCarbone\PHPConsulAPI\Semaphore
 */
class SemaphoreClient extends AbstractApiClient
{
    const DefaultSemaphoreClient = 'PHP Consul API Semaphore';
    const DefaultSemaphoreTTL = '15s';
    const DefaultSemaphoreWaitTime = 15 * DateTime::Second;
    const DefaultSemaphoreKey = '.lock';
    const SemaphoreFlagValue = 0xe0f69a2baa41de0;
}