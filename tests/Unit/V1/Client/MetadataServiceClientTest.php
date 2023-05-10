<?php
/*
 * Copyright 2023 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

namespace Google\Cloud\Dataplex\Tests\Unit\V1\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\Testing\GeneratedTest;
use Google\ApiCore\Testing\MockTransport;
use Google\Cloud\Dataplex\V1\Client\MetadataServiceClient;
use Google\Cloud\Dataplex\V1\CreateEntityRequest;
use Google\Cloud\Dataplex\V1\CreatePartitionRequest;
use Google\Cloud\Dataplex\V1\DeleteEntityRequest;
use Google\Cloud\Dataplex\V1\DeletePartitionRequest;
use Google\Cloud\Dataplex\V1\Entity;
use Google\Cloud\Dataplex\V1\Entity\Type;
use Google\Cloud\Dataplex\V1\GetEntityRequest;
use Google\Cloud\Dataplex\V1\GetPartitionRequest;
use Google\Cloud\Dataplex\V1\ListEntitiesRequest;
use Google\Cloud\Dataplex\V1\ListEntitiesRequest\EntityView;
use Google\Cloud\Dataplex\V1\ListEntitiesResponse;
use Google\Cloud\Dataplex\V1\ListPartitionsRequest;
use Google\Cloud\Dataplex\V1\ListPartitionsResponse;
use Google\Cloud\Dataplex\V1\Partition;
use Google\Cloud\Dataplex\V1\Schema;
use Google\Cloud\Dataplex\V1\StorageFormat;
use Google\Cloud\Dataplex\V1\StorageSystem;
use Google\Cloud\Dataplex\V1\UpdateEntityRequest;
use Google\Cloud\Iam\V1\GetIamPolicyRequest;
use Google\Cloud\Iam\V1\Policy;
use Google\Cloud\Iam\V1\SetIamPolicyRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsResponse;
use Google\Cloud\Location\GetLocationRequest;
use Google\Cloud\Location\ListLocationsRequest;
use Google\Cloud\Location\ListLocationsResponse;
use Google\Cloud\Location\Location;
use Google\Protobuf\GPBEmpty;
use Google\Rpc\Code;
use stdClass;

/**
 * @group dataplex
 *
 * @group gapic
 */
class MetadataServiceClientTest extends GeneratedTest
{
    /** @return TransportInterface */
    private function createTransport($deserialize = null)
    {
        return new MockTransport($deserialize);
    }

    /** @return CredentialsWrapper */
    private function createCredentials()
    {
        return $this->getMockBuilder(CredentialsWrapper::class)->disableOriginalConstructor()->getMock();
    }

    /** @return MetadataServiceClient */
    private function createClient(array $options = [])
    {
        $options += [
            'credentials' => $this->createCredentials(),
        ];
        return new MetadataServiceClient($options);
    }

    /** @test */
    public function createEntityTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $displayName = 'displayName1615086568';
        $description = 'description-1724546052';
        $id = 'id3355';
        $etag = 'etag3123477';
        $asset = 'asset93121264';
        $dataPath = 'dataPath-363501670';
        $dataPathPattern = 'dataPathPattern-594427925';
        $catalogEntry = 'catalogEntry-1234004788';
        $uid = 'uid115792';
        $expectedResponse = new Entity();
        $expectedResponse->setName($name);
        $expectedResponse->setDisplayName($displayName);
        $expectedResponse->setDescription($description);
        $expectedResponse->setId($id);
        $expectedResponse->setEtag($etag);
        $expectedResponse->setAsset($asset);
        $expectedResponse->setDataPath($dataPath);
        $expectedResponse->setDataPathPattern($dataPathPattern);
        $expectedResponse->setCatalogEntry($catalogEntry);
        $expectedResponse->setUid($uid);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->zoneName('[PROJECT]', '[LOCATION]', '[LAKE]', '[ZONE]');
        $entity = new Entity();
        $entityId = 'entityId-2102099874';
        $entity->setId($entityId);
        $entityType = Type::TYPE_UNSPECIFIED;
        $entity->setType($entityType);
        $entityAsset = 'entityAsset1253969101';
        $entity->setAsset($entityAsset);
        $entityDataPath = 'entityDataPath1530173426';
        $entity->setDataPath($entityDataPath);
        $entitySystem = StorageSystem::STORAGE_SYSTEM_UNSPECIFIED;
        $entity->setSystem($entitySystem);
        $entityFormat = new StorageFormat();
        $formatMimeType = 'formatMimeType-1419746651';
        $entityFormat->setMimeType($formatMimeType);
        $entity->setFormat($entityFormat);
        $entitySchema = new Schema();
        $schemaUserManaged = false;
        $entitySchema->setUserManaged($schemaUserManaged);
        $entity->setSchema($entitySchema);
        $request = (new CreateEntityRequest())
            ->setParent($formattedParent)
            ->setEntity($entity);
        $response = $gapicClient->createEntity($request);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.dataplex.v1.MetadataService/CreateEntity', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $actualValue = $actualRequestObject->getEntity();
        $this->assertProtobufEquals($entity, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createEntityExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedParent = $gapicClient->zoneName('[PROJECT]', '[LOCATION]', '[LAKE]', '[ZONE]');
        $entity = new Entity();
        $entityId = 'entityId-2102099874';
        $entity->setId($entityId);
        $entityType = Type::TYPE_UNSPECIFIED;
        $entity->setType($entityType);
        $entityAsset = 'entityAsset1253969101';
        $entity->setAsset($entityAsset);
        $entityDataPath = 'entityDataPath1530173426';
        $entity->setDataPath($entityDataPath);
        $entitySystem = StorageSystem::STORAGE_SYSTEM_UNSPECIFIED;
        $entity->setSystem($entitySystem);
        $entityFormat = new StorageFormat();
        $formatMimeType = 'formatMimeType-1419746651';
        $entityFormat->setMimeType($formatMimeType);
        $entity->setFormat($entityFormat);
        $entitySchema = new Schema();
        $schemaUserManaged = false;
        $entitySchema->setUserManaged($schemaUserManaged);
        $entity->setSchema($entitySchema);
        $request = (new CreateEntityRequest())
            ->setParent($formattedParent)
            ->setEntity($entity);
        try {
            $gapicClient->createEntity($request);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createPartitionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $location = 'location1901043637';
        $etag = 'etag3123477';
        $expectedResponse = new Partition();
        $expectedResponse->setName($name);
        $expectedResponse->setLocation($location);
        $expectedResponse->setEtag($etag);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->entityName('[PROJECT]', '[LOCATION]', '[LAKE]', '[ZONE]', '[ENTITY]');
        $partition = new Partition();
        $partitionValues = [];
        $partition->setValues($partitionValues);
        $partitionLocation = 'partitionLocation-1757508417';
        $partition->setLocation($partitionLocation);
        $request = (new CreatePartitionRequest())
            ->setParent($formattedParent)
            ->setPartition($partition);
        $response = $gapicClient->createPartition($request);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.dataplex.v1.MetadataService/CreatePartition', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $actualValue = $actualRequestObject->getPartition();
        $this->assertProtobufEquals($partition, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createPartitionExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedParent = $gapicClient->entityName('[PROJECT]', '[LOCATION]', '[LAKE]', '[ZONE]', '[ENTITY]');
        $partition = new Partition();
        $partitionValues = [];
        $partition->setValues($partitionValues);
        $partitionLocation = 'partitionLocation-1757508417';
        $partition->setLocation($partitionLocation);
        $request = (new CreatePartitionRequest())
            ->setParent($formattedParent)
            ->setPartition($partition);
        try {
            $gapicClient->createPartition($request);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteEntityTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new GPBEmpty();
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->entityName('[PROJECT]', '[LOCATION]', '[LAKE]', '[ZONE]', '[ENTITY]');
        $etag = 'etag3123477';
        $request = (new DeleteEntityRequest())
            ->setName($formattedName)
            ->setEtag($etag);
        $gapicClient->deleteEntity($request);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.dataplex.v1.MetadataService/DeleteEntity', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $actualValue = $actualRequestObject->getEtag();
        $this->assertProtobufEquals($etag, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteEntityExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->entityName('[PROJECT]', '[LOCATION]', '[LAKE]', '[ZONE]', '[ENTITY]');
        $etag = 'etag3123477';
        $request = (new DeleteEntityRequest())
            ->setName($formattedName)
            ->setEtag($etag);
        try {
            $gapicClient->deleteEntity($request);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deletePartitionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new GPBEmpty();
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->partitionName('[PROJECT]', '[LOCATION]', '[LAKE]', '[ZONE]', '[ENTITY]', '[PARTITION]');
        $request = (new DeletePartitionRequest())
            ->setName($formattedName);
        $gapicClient->deletePartition($request);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.dataplex.v1.MetadataService/DeletePartition', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deletePartitionExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->partitionName('[PROJECT]', '[LOCATION]', '[LAKE]', '[ZONE]', '[ENTITY]', '[PARTITION]');
        $request = (new DeletePartitionRequest())
            ->setName($formattedName);
        try {
            $gapicClient->deletePartition($request);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getEntityTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name2 = 'name2-1052831874';
        $displayName = 'displayName1615086568';
        $description = 'description-1724546052';
        $id = 'id3355';
        $etag = 'etag3123477';
        $asset = 'asset93121264';
        $dataPath = 'dataPath-363501670';
        $dataPathPattern = 'dataPathPattern-594427925';
        $catalogEntry = 'catalogEntry-1234004788';
        $uid = 'uid115792';
        $expectedResponse = new Entity();
        $expectedResponse->setName($name2);
        $expectedResponse->setDisplayName($displayName);
        $expectedResponse->setDescription($description);
        $expectedResponse->setId($id);
        $expectedResponse->setEtag($etag);
        $expectedResponse->setAsset($asset);
        $expectedResponse->setDataPath($dataPath);
        $expectedResponse->setDataPathPattern($dataPathPattern);
        $expectedResponse->setCatalogEntry($catalogEntry);
        $expectedResponse->setUid($uid);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->entityName('[PROJECT]', '[LOCATION]', '[LAKE]', '[ZONE]', '[ENTITY]');
        $request = (new GetEntityRequest())
            ->setName($formattedName);
        $response = $gapicClient->getEntity($request);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.dataplex.v1.MetadataService/GetEntity', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getEntityExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->entityName('[PROJECT]', '[LOCATION]', '[LAKE]', '[ZONE]', '[ENTITY]');
        $request = (new GetEntityRequest())
            ->setName($formattedName);
        try {
            $gapicClient->getEntity($request);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getPartitionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name2 = 'name2-1052831874';
        $location = 'location1901043637';
        $etag = 'etag3123477';
        $expectedResponse = new Partition();
        $expectedResponse->setName($name2);
        $expectedResponse->setLocation($location);
        $expectedResponse->setEtag($etag);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->partitionName('[PROJECT]', '[LOCATION]', '[LAKE]', '[ZONE]', '[ENTITY]', '[PARTITION]');
        $request = (new GetPartitionRequest())
            ->setName($formattedName);
        $response = $gapicClient->getPartition($request);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.dataplex.v1.MetadataService/GetPartition', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getPartitionExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->partitionName('[PROJECT]', '[LOCATION]', '[LAKE]', '[ZONE]', '[ENTITY]', '[PARTITION]');
        $request = (new GetPartitionRequest())
            ->setName($formattedName);
        try {
            $gapicClient->getPartition($request);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listEntitiesTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $nextPageToken = '';
        $entitiesElement = new Entity();
        $entities = [
            $entitiesElement,
        ];
        $expectedResponse = new ListEntitiesResponse();
        $expectedResponse->setNextPageToken($nextPageToken);
        $expectedResponse->setEntities($entities);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->zoneName('[PROJECT]', '[LOCATION]', '[LAKE]', '[ZONE]');
        $view = EntityView::ENTITY_VIEW_UNSPECIFIED;
        $request = (new ListEntitiesRequest())
            ->setParent($formattedParent)
            ->setView($view);
        $response = $gapicClient->listEntities($request);
        $this->assertEquals($expectedResponse, $response->getPage()->getResponseObject());
        $resources = iterator_to_array($response->iterateAllElements());
        $this->assertSame(1, count($resources));
        $this->assertEquals($expectedResponse->getEntities()[0], $resources[0]);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.dataplex.v1.MetadataService/ListEntities', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $actualValue = $actualRequestObject->getView();
        $this->assertProtobufEquals($view, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listEntitiesExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedParent = $gapicClient->zoneName('[PROJECT]', '[LOCATION]', '[LAKE]', '[ZONE]');
        $view = EntityView::ENTITY_VIEW_UNSPECIFIED;
        $request = (new ListEntitiesRequest())
            ->setParent($formattedParent)
            ->setView($view);
        try {
            $gapicClient->listEntities($request);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listPartitionsTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $nextPageToken = '';
        $partitionsElement = new Partition();
        $partitions = [
            $partitionsElement,
        ];
        $expectedResponse = new ListPartitionsResponse();
        $expectedResponse->setNextPageToken($nextPageToken);
        $expectedResponse->setPartitions($partitions);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->entityName('[PROJECT]', '[LOCATION]', '[LAKE]', '[ZONE]', '[ENTITY]');
        $request = (new ListPartitionsRequest())
            ->setParent($formattedParent);
        $response = $gapicClient->listPartitions($request);
        $this->assertEquals($expectedResponse, $response->getPage()->getResponseObject());
        $resources = iterator_to_array($response->iterateAllElements());
        $this->assertSame(1, count($resources));
        $this->assertEquals($expectedResponse->getPartitions()[0], $resources[0]);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.dataplex.v1.MetadataService/ListPartitions', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listPartitionsExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedParent = $gapicClient->entityName('[PROJECT]', '[LOCATION]', '[LAKE]', '[ZONE]', '[ENTITY]');
        $request = (new ListPartitionsRequest())
            ->setParent($formattedParent);
        try {
            $gapicClient->listPartitions($request);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateEntityTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $displayName = 'displayName1615086568';
        $description = 'description-1724546052';
        $id = 'id3355';
        $etag = 'etag3123477';
        $asset = 'asset93121264';
        $dataPath = 'dataPath-363501670';
        $dataPathPattern = 'dataPathPattern-594427925';
        $catalogEntry = 'catalogEntry-1234004788';
        $uid = 'uid115792';
        $expectedResponse = new Entity();
        $expectedResponse->setName($name);
        $expectedResponse->setDisplayName($displayName);
        $expectedResponse->setDescription($description);
        $expectedResponse->setId($id);
        $expectedResponse->setEtag($etag);
        $expectedResponse->setAsset($asset);
        $expectedResponse->setDataPath($dataPath);
        $expectedResponse->setDataPathPattern($dataPathPattern);
        $expectedResponse->setCatalogEntry($catalogEntry);
        $expectedResponse->setUid($uid);
        $transport->addResponse($expectedResponse);
        // Mock request
        $entity = new Entity();
        $entityId = 'entityId-2102099874';
        $entity->setId($entityId);
        $entityType = Type::TYPE_UNSPECIFIED;
        $entity->setType($entityType);
        $entityAsset = 'entityAsset1253969101';
        $entity->setAsset($entityAsset);
        $entityDataPath = 'entityDataPath1530173426';
        $entity->setDataPath($entityDataPath);
        $entitySystem = StorageSystem::STORAGE_SYSTEM_UNSPECIFIED;
        $entity->setSystem($entitySystem);
        $entityFormat = new StorageFormat();
        $formatMimeType = 'formatMimeType-1419746651';
        $entityFormat->setMimeType($formatMimeType);
        $entity->setFormat($entityFormat);
        $entitySchema = new Schema();
        $schemaUserManaged = false;
        $entitySchema->setUserManaged($schemaUserManaged);
        $entity->setSchema($entitySchema);
        $request = (new UpdateEntityRequest())
            ->setEntity($entity);
        $response = $gapicClient->updateEntity($request);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.dataplex.v1.MetadataService/UpdateEntity', $actualFuncCall);
        $actualValue = $actualRequestObject->getEntity();
        $this->assertProtobufEquals($entity, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateEntityExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $entity = new Entity();
        $entityId = 'entityId-2102099874';
        $entity->setId($entityId);
        $entityType = Type::TYPE_UNSPECIFIED;
        $entity->setType($entityType);
        $entityAsset = 'entityAsset1253969101';
        $entity->setAsset($entityAsset);
        $entityDataPath = 'entityDataPath1530173426';
        $entity->setDataPath($entityDataPath);
        $entitySystem = StorageSystem::STORAGE_SYSTEM_UNSPECIFIED;
        $entity->setSystem($entitySystem);
        $entityFormat = new StorageFormat();
        $formatMimeType = 'formatMimeType-1419746651';
        $entityFormat->setMimeType($formatMimeType);
        $entity->setFormat($entityFormat);
        $entitySchema = new Schema();
        $schemaUserManaged = false;
        $entitySchema->setUserManaged($schemaUserManaged);
        $entity->setSchema($entitySchema);
        $request = (new UpdateEntityRequest())
            ->setEntity($entity);
        try {
            $gapicClient->updateEntity($request);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getIamPolicyTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $version = 351608024;
        $etag = '21';
        $expectedResponse = new Policy();
        $expectedResponse->setVersion($version);
        $expectedResponse->setEtag($etag);
        $transport->addResponse($expectedResponse);
        // Mock request
        $resource = 'resource-341064690';
        $request = (new GetIamPolicyRequest())
            ->setResource($resource);
        $response = $gapicClient->getIamPolicy($request);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.iam.v1.IAMPolicy/GetIamPolicy', $actualFuncCall);
        $actualValue = $actualRequestObject->getResource();
        $this->assertProtobufEquals($resource, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getIamPolicyExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $resource = 'resource-341064690';
        $request = (new GetIamPolicyRequest())
            ->setResource($resource);
        try {
            $gapicClient->getIamPolicy($request);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function setIamPolicyTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $version = 351608024;
        $etag = '21';
        $expectedResponse = new Policy();
        $expectedResponse->setVersion($version);
        $expectedResponse->setEtag($etag);
        $transport->addResponse($expectedResponse);
        // Mock request
        $resource = 'resource-341064690';
        $policy = new Policy();
        $request = (new SetIamPolicyRequest())
            ->setResource($resource)
            ->setPolicy($policy);
        $response = $gapicClient->setIamPolicy($request);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.iam.v1.IAMPolicy/SetIamPolicy', $actualFuncCall);
        $actualValue = $actualRequestObject->getResource();
        $this->assertProtobufEquals($resource, $actualValue);
        $actualValue = $actualRequestObject->getPolicy();
        $this->assertProtobufEquals($policy, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function setIamPolicyExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $resource = 'resource-341064690';
        $policy = new Policy();
        $request = (new SetIamPolicyRequest())
            ->setResource($resource)
            ->setPolicy($policy);
        try {
            $gapicClient->setIamPolicy($request);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function testIamPermissionsTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new TestIamPermissionsResponse();
        $transport->addResponse($expectedResponse);
        // Mock request
        $resource = 'resource-341064690';
        $permissions = [];
        $request = (new TestIamPermissionsRequest())
            ->setResource($resource)
            ->setPermissions($permissions);
        $response = $gapicClient->testIamPermissions($request);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.iam.v1.IAMPolicy/TestIamPermissions', $actualFuncCall);
        $actualValue = $actualRequestObject->getResource();
        $this->assertProtobufEquals($resource, $actualValue);
        $actualValue = $actualRequestObject->getPermissions();
        $this->assertProtobufEquals($permissions, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function testIamPermissionsExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $resource = 'resource-341064690';
        $permissions = [];
        $request = (new TestIamPermissionsRequest())
            ->setResource($resource)
            ->setPermissions($permissions);
        try {
            $gapicClient->testIamPermissions($request);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getLocationTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name2 = 'name2-1052831874';
        $locationId = 'locationId552319461';
        $displayName = 'displayName1615086568';
        $expectedResponse = new Location();
        $expectedResponse->setName($name2);
        $expectedResponse->setLocationId($locationId);
        $expectedResponse->setDisplayName($displayName);
        $transport->addResponse($expectedResponse);
        $request = new GetLocationRequest();
        $response = $gapicClient->getLocation($request);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.location.Locations/GetLocation', $actualFuncCall);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getLocationExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        $request = new GetLocationRequest();
        try {
            $gapicClient->getLocation($request);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listLocationsTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $nextPageToken = '';
        $locationsElement = new Location();
        $locations = [
            $locationsElement,
        ];
        $expectedResponse = new ListLocationsResponse();
        $expectedResponse->setNextPageToken($nextPageToken);
        $expectedResponse->setLocations($locations);
        $transport->addResponse($expectedResponse);
        $request = new ListLocationsRequest();
        $response = $gapicClient->listLocations($request);
        $this->assertEquals($expectedResponse, $response->getPage()->getResponseObject());
        $resources = iterator_to_array($response->iterateAllElements());
        $this->assertSame(1, count($resources));
        $this->assertEquals($expectedResponse->getLocations()[0], $resources[0]);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.location.Locations/ListLocations', $actualFuncCall);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listLocationsExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        $request = new ListLocationsRequest();
        try {
            $gapicClient->listLocations($request);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createEntityAsyncTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $displayName = 'displayName1615086568';
        $description = 'description-1724546052';
        $id = 'id3355';
        $etag = 'etag3123477';
        $asset = 'asset93121264';
        $dataPath = 'dataPath-363501670';
        $dataPathPattern = 'dataPathPattern-594427925';
        $catalogEntry = 'catalogEntry-1234004788';
        $uid = 'uid115792';
        $expectedResponse = new Entity();
        $expectedResponse->setName($name);
        $expectedResponse->setDisplayName($displayName);
        $expectedResponse->setDescription($description);
        $expectedResponse->setId($id);
        $expectedResponse->setEtag($etag);
        $expectedResponse->setAsset($asset);
        $expectedResponse->setDataPath($dataPath);
        $expectedResponse->setDataPathPattern($dataPathPattern);
        $expectedResponse->setCatalogEntry($catalogEntry);
        $expectedResponse->setUid($uid);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->zoneName('[PROJECT]', '[LOCATION]', '[LAKE]', '[ZONE]');
        $entity = new Entity();
        $entityId = 'entityId-2102099874';
        $entity->setId($entityId);
        $entityType = Type::TYPE_UNSPECIFIED;
        $entity->setType($entityType);
        $entityAsset = 'entityAsset1253969101';
        $entity->setAsset($entityAsset);
        $entityDataPath = 'entityDataPath1530173426';
        $entity->setDataPath($entityDataPath);
        $entitySystem = StorageSystem::STORAGE_SYSTEM_UNSPECIFIED;
        $entity->setSystem($entitySystem);
        $entityFormat = new StorageFormat();
        $formatMimeType = 'formatMimeType-1419746651';
        $entityFormat->setMimeType($formatMimeType);
        $entity->setFormat($entityFormat);
        $entitySchema = new Schema();
        $schemaUserManaged = false;
        $entitySchema->setUserManaged($schemaUserManaged);
        $entity->setSchema($entitySchema);
        $request = (new CreateEntityRequest())
            ->setParent($formattedParent)
            ->setEntity($entity);
        $response = $gapicClient->createEntityAsync($request)->wait();
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.dataplex.v1.MetadataService/CreateEntity', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $actualValue = $actualRequestObject->getEntity();
        $this->assertProtobufEquals($entity, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }
}
