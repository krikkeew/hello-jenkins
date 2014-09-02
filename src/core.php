<?php
class Sample_Core
{
	/**
	 * Admin store Id
	 *
	 */
	const ADMIN_STORE_ID = 0;

	/**
	 * Application loaded areas array
	 *
	 * @var array
	 */
	protected $_areas = array();

	/**
	 * Constructor
	 */
	public function __construct()
	{
	}

	/**
	 * Initialize application without request processing
	 *
	 * @param  string|array $code
	 * @param  string $type
	 * @param  string|array $options
	 * @return Sample_Core
	 */
	public function init($code, $type = null, $options = array())
	{
		return $this;
	}
}