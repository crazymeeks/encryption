<?php

/**
 * The sha1 encryption class
 *
 * (c) Jeff Claud
 */

namespace NW\Encryption;

class Sha1Encryption
{

	protected $digest;

	public function __construct($digest)
	{
		$this->digest = $digest;
	}

	public function __toString()
	{
		return sha1($this->digest);
	}
}