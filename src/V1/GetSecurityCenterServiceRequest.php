<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycentermanagement/v1/security_center_management.proto

namespace Google\Cloud\SecurityCenterManagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for getting a Security Command Center service.
 *
 * Generated from protobuf message <code>google.cloud.securitycentermanagement.v1.GetSecurityCenterServiceRequest</code>
 */
class GetSecurityCenterServiceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The Security Command Center service to retrieve.
     * Formats:
     *   * organizations/{organization}/locations/{location}/securityCenterServices/{service}
     *   * folders/{folder}/locations/{location}/securityCenterServices/{service}
     *   * projects/{project}/locations/{location}/securityCenterServices/{service}
     * The possible values for id {service} are:
     *   * container-threat-detection
     *   * event-threat-detection
     *   * security-health-analytics
     *   * vm-threat-detection
     *   * web-security-scanner
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Flag that, when set, will be used to filter the ModuleSettings that are
     * in scope. The default setting is that all modules will be shown.
     *
     * Generated from protobuf field <code>bool show_eligible_modules_only = 2;</code>
     */
    protected $show_eligible_modules_only = false;

    /**
     * @param string $name Required. The Security Command Center service to retrieve.
     *
     *                     Formats:
     *
     *                     * organizations/{organization}/locations/{location}/securityCenterServices/{service}
     *                     * folders/{folder}/locations/{location}/securityCenterServices/{service}
     *                     * projects/{project}/locations/{location}/securityCenterServices/{service}
     *
     *                     The possible values for id {service} are:
     *
     *                     * container-threat-detection
     *                     * event-threat-detection
     *                     * security-health-analytics
     *                     * vm-threat-detection
     *                     * web-security-scanner
     *                     Please see {@see SecurityCenterManagementClient::securityCenterServiceName()} for help formatting this field.
     *
     * @return \Google\Cloud\SecurityCenterManagement\V1\GetSecurityCenterServiceRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The Security Command Center service to retrieve.
     *           Formats:
     *             * organizations/{organization}/locations/{location}/securityCenterServices/{service}
     *             * folders/{folder}/locations/{location}/securityCenterServices/{service}
     *             * projects/{project}/locations/{location}/securityCenterServices/{service}
     *           The possible values for id {service} are:
     *             * container-threat-detection
     *             * event-threat-detection
     *             * security-health-analytics
     *             * vm-threat-detection
     *             * web-security-scanner
     *     @type bool $show_eligible_modules_only
     *           Flag that, when set, will be used to filter the ModuleSettings that are
     *           in scope. The default setting is that all modules will be shown.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycentermanagement\V1\SecurityCenterManagement::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The Security Command Center service to retrieve.
     * Formats:
     *   * organizations/{organization}/locations/{location}/securityCenterServices/{service}
     *   * folders/{folder}/locations/{location}/securityCenterServices/{service}
     *   * projects/{project}/locations/{location}/securityCenterServices/{service}
     * The possible values for id {service} are:
     *   * container-threat-detection
     *   * event-threat-detection
     *   * security-health-analytics
     *   * vm-threat-detection
     *   * web-security-scanner
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The Security Command Center service to retrieve.
     * Formats:
     *   * organizations/{organization}/locations/{location}/securityCenterServices/{service}
     *   * folders/{folder}/locations/{location}/securityCenterServices/{service}
     *   * projects/{project}/locations/{location}/securityCenterServices/{service}
     * The possible values for id {service} are:
     *   * container-threat-detection
     *   * event-threat-detection
     *   * security-health-analytics
     *   * vm-threat-detection
     *   * web-security-scanner
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Flag that, when set, will be used to filter the ModuleSettings that are
     * in scope. The default setting is that all modules will be shown.
     *
     * Generated from protobuf field <code>bool show_eligible_modules_only = 2;</code>
     * @return bool
     */
    public function getShowEligibleModulesOnly()
    {
        return $this->show_eligible_modules_only;
    }

    /**
     * Flag that, when set, will be used to filter the ModuleSettings that are
     * in scope. The default setting is that all modules will be shown.
     *
     * Generated from protobuf field <code>bool show_eligible_modules_only = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setShowEligibleModulesOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->show_eligible_modules_only = $var;

        return $this;
    }

}

