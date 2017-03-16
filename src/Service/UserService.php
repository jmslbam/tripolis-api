<?php
/**
 * Created by PhpStorm.
 * User: petereussen
 * Date: 01/09/14
 * Time: 12:58
 */

namespace MartyBel\Tripolis\Service;


class UserService extends AbstractService
{
	/**
	 * Retrieves user information bases on the supplied user authentication
	 *
	 * @return HarperJones\Tripolis\Response\UserService\GetByAuthInfoResponse
	 */
	public function getByAuthInfo()
	{
		return $this->invoke(__FUNCTION__,array());
	}

	/**
	 * Get a list of users based on the authentication information sent
	 * @return HarperJones\Tripolis\Response\UserService\GetUsersInClientDomainByAuthInfoResponse
	 */
	public function getUsersInClientDomainByAuthInfo()
	{
		return $this->invoke(__FUNCTION__,array());
	}
} 