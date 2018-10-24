<?php

namespace Codappix\ExamplePackage\ExampleNamespace;

/*
 * Copyright (C) 2018 Daniel Siepmann <coding@daniel-siepmann.de>
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301, USA.
 */

/**
 * Some comment explaining this class.
 */
class LoremIpsum2 extends AnotherClass
{
    /**
     * @var LoremIpsum
     */
    protected $loremIpsum;

    public function __construct(LoremIpsum $loremIpsum)
    {
        $this->loremIpsum = $loremIpsum;
    }

    public function getSum(): int
    {
        return $this->loremIpsum->getSum();
    }

    public function getSomeStuff(): array
    {
        return [
            'key1' => 'value1'
            'key2' => 'value2'
            'key3' => 'value3'
        ];
    }
}
