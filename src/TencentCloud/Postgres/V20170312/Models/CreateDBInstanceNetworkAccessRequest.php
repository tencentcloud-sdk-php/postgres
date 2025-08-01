<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDBInstanceNetworkAccess请求参数结构体
 *
 * @method string getDBInstanceId() 获取实例ID，形如：postgres-6bwgamo3。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
 * @method void setDBInstanceId(string $DBInstanceId) 设置实例ID，形如：postgres-6bwgamo3。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
 * @method string getVpcId() 获取私有网络统一 ID。
 * @method void setVpcId(string $VpcId) 设置私有网络统一 ID。
 * @method string getSubnetId() 获取子网ID。
 * @method void setSubnetId(string $SubnetId) 设置子网ID。
 * @method boolean getIsAssignVip() 获取是否指定分配vip true-指定分配  false-自动分配。
 * @method void setIsAssignVip(boolean $IsAssignVip) 设置是否指定分配vip true-指定分配  false-自动分配。
 * @method string getVip() 获取目标VIP地址。当不指定该参数，且IsAssignVip为true时，默认自动分配Vip。
 * @method void setVip(string $Vip) 设置目标VIP地址。当不指定该参数，且IsAssignVip为true时，默认自动分配Vip。
 */
class CreateDBInstanceNetworkAccessRequest extends AbstractModel
{
    /**
     * @var string 实例ID，形如：postgres-6bwgamo3。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
     */
    public $DBInstanceId;

    /**
     * @var string 私有网络统一 ID。
     */
    public $VpcId;

    /**
     * @var string 子网ID。
     */
    public $SubnetId;

    /**
     * @var boolean 是否指定分配vip true-指定分配  false-自动分配。
     */
    public $IsAssignVip;

    /**
     * @var string 目标VIP地址。当不指定该参数，且IsAssignVip为true时，默认自动分配Vip。
     */
    public $Vip;

    /**
     * @param string $DBInstanceId 实例ID，形如：postgres-6bwgamo3。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
     * @param string $VpcId 私有网络统一 ID。
     * @param string $SubnetId 子网ID。
     * @param boolean $IsAssignVip 是否指定分配vip true-指定分配  false-自动分配。
     * @param string $Vip 目标VIP地址。当不指定该参数，且IsAssignVip为true时，默认自动分配Vip。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("IsAssignVip",$param) and $param["IsAssignVip"] !== null) {
            $this->IsAssignVip = $param["IsAssignVip"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }
    }
}
