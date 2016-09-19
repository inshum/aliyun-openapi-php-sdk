<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace Mts\Request\V20140618;

class ListMediaWorkflowExecutionsRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Mts", "2014-06-18", "ListMediaWorkflowExecutions");
	}

	private  $ownerId;

	private  $resourceOwnerAccount;

	private  $resourceOwnerId;

	private  $mediaWorkflowName;

	private  $inputFileURL;

	private  $nextPageToken;

	private  $maximumPageSize;

	private  $ownerAccount;

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getMediaWorkflowName() {
		return $this->mediaWorkflowName;
	}

	public function setMediaWorkflowName($mediaWorkflowName) {
		$this->mediaWorkflowName = $mediaWorkflowName;
		$this->queryParameters["MediaWorkflowName"]=$mediaWorkflowName;
	}

	public function getInputFileURL() {
		return $this->inputFileURL;
	}

	public function setInputFileURL($inputFileURL) {
		$this->inputFileURL = $inputFileURL;
		$this->queryParameters["InputFileURL"]=$inputFileURL;
	}

	public function getNextPageToken() {
		return $this->nextPageToken;
	}

	public function setNextPageToken($nextPageToken) {
		$this->nextPageToken = $nextPageToken;
		$this->queryParameters["NextPageToken"]=$nextPageToken;
	}

	public function getMaximumPageSize() {
		return $this->maximumPageSize;
	}

	public function setMaximumPageSize($maximumPageSize) {
		$this->maximumPageSize = $maximumPageSize;
		$this->queryParameters["MaximumPageSize"]=$maximumPageSize;
	}

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
	}
	
}