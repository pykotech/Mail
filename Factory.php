<?php //-->
/*
 * This file is part of the Mail package of the Eden PHP Library.
 * (c) 2013-2014 Openovate Labs
 *
 * Copyright and license information can be found at LICENSE
 * distributed with this package.
 */

namespace Eden\Mail;

/**
 * Mail Factory Class
 *
 * @vendor Eden
 * @package Mail
 * @author Christian Blanquera cblanquera@openovate.com
 * @comment I just needed smtp, so removed the other functions
 */
class Factory extends Base
{
    const INSTANCE = 1;
	

	/**
	 * Returns Mail SMTP
	 *
	 * @param string
	 * @param string
	 * @param string
	 * @param int|null
	 * @param bool
	 * @param bool
	 * @return Eden_Mail_Smtp
	 */
	public function smtp($host, $user, $pass, $port = NULL, $ssl = false, $tls = false) 
	{
		Argument::i()
			->test(1, 'string')
			->test(2, 'string')
			->test(3, 'string')
			->test(4, 'int', 'null')
			->test(5, 'bool')
			->test(6, 'bool');
			
		return Smtp::i($host, $user, $pass, $port, $ssl, $tls);
	}
}
