<?php namespace DCarbone\PHPConsulAPI\Coordinate;

/*
   Copyright 2016-2017 Daniel Carbone (daniel.p.carbone@gmail.com)

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

use DCarbone\PHPConsulAPI\AbstractModel;

/**
 * Class CoordinateDatacenterMap
 * @package DCarbone\PHPConsulAPI\Coordinate
 */
class CoordinateDatacenterMap extends AbstractModel
{
    /** @var string */
    public $Datacenter = '';
    /** @var Coordinate[] */
    public $Coordinates = array();

    /**
     * CoordinateDatacenterMap constructor.
     *
     * @param array $data
     */
    public function __construct(array $data = array())
    {
        parent::__construct($data);
        for ($i = 0, $cnt = count($this->Coordinates); $i < $cnt; $i++)
        {
            if (!($this->Coordinates[$i] instanceof Coordinate))
                $this->Coordinates[$i] = new Coordinate((array)$this->Coordinates[$i]);
        }
    }

    /**
     * @return string
     */
    public function getDatacenter()
    {
        return $this->Datacenter;
    }

    /**
     * @return Coordinate[]
     */
    public function getCoordinates()
    {
        return $this->Coordinates;
    }
}