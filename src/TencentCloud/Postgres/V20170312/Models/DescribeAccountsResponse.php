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
 * DescribeAccounts返回参数结构体
 *
 * @method integer getTotalCount() 获取本次调用接口共返回了多少条数据。
 * @method void setTotalCount(integer $TotalCount) 设置本次调用接口共返回了多少条数据。
 * @method array getDetails() 获取账号列表详细信息。当CreateTime项为0000-00-00 00:00:00时，意味着对应账号是直连数据库创建的，并非通过CreateAccount接口创建。
 * @method void setDetails(array $Details) 设置账号列表详细信息。当CreateTime项为0000-00-00 00:00:00时，意味着对应账号是直连数据库创建的，并非通过CreateAccount接口创建。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAccountsResponse extends AbstractModel
{
    /**
     * @var integer 本次调用接口共返回了多少条数据。
     */
    public $TotalCount;

    /**
     * @var array 账号列表详细信息。当CreateTime项为0000-00-00 00:00:00时，意味着对应账号是直连数据库创建的，并非通过CreateAccount接口创建。
     */
    public $Details;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 本次调用接口共返回了多少条数据。
     * @param array $Details 账号列表详细信息。当CreateTime项为0000-00-00 00:00:00时，意味着对应账号是直连数据库创建的，并非通过CreateAccount接口创建。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Details",$param) and $param["Details"] !== null) {
            $this->Details = [];
            foreach ($param["Details"] as $key => $value){
                $obj = new AccountInfo();
                $obj->deserialize($value);
                array_push($this->Details, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
