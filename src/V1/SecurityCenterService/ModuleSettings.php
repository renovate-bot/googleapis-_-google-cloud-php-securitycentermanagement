<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycentermanagement/v1/security_center_management.proto

namespace Google\Cloud\SecurityCenterManagement\V1\SecurityCenterService;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The settings for individual modules.
 *
 * Generated from protobuf message <code>google.cloud.securitycentermanagement.v1.SecurityCenterService.ModuleSettings</code>
 */
class ModuleSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The intended state of enablement for the module at its level of
     * the resource hierarchy.
     *
     * Generated from protobuf field <code>.google.cloud.securitycentermanagement.v1.SecurityCenterService.EnablementState intended_enablement_state = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $intended_enablement_state = 0;
    /**
     * Output only. The effective enablement state for the module at its level
     * of the resource hierarchy. If the intended state is set to INHERITED, the
     * effective state will be inherited from the enablement state of an
     * ancestor. This state may
     * differ from the intended enablement state due to billing eligibility or
     * onboarding status.
     *
     * Generated from protobuf field <code>.google.cloud.securitycentermanagement.v1.SecurityCenterService.EnablementState effective_enablement_state = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $effective_enablement_state = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $intended_enablement_state
     *           Optional. The intended state of enablement for the module at its level of
     *           the resource hierarchy.
     *     @type int $effective_enablement_state
     *           Output only. The effective enablement state for the module at its level
     *           of the resource hierarchy. If the intended state is set to INHERITED, the
     *           effective state will be inherited from the enablement state of an
     *           ancestor. This state may
     *           differ from the intended enablement state due to billing eligibility or
     *           onboarding status.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycentermanagement\V1\SecurityCenterManagement::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The intended state of enablement for the module at its level of
     * the resource hierarchy.
     *
     * Generated from protobuf field <code>.google.cloud.securitycentermanagement.v1.SecurityCenterService.EnablementState intended_enablement_state = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getIntendedEnablementState()
    {
        return $this->intended_enablement_state;
    }

    /**
     * Optional. The intended state of enablement for the module at its level of
     * the resource hierarchy.
     *
     * Generated from protobuf field <code>.google.cloud.securitycentermanagement.v1.SecurityCenterService.EnablementState intended_enablement_state = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setIntendedEnablementState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\SecurityCenterManagement\V1\SecurityCenterService\EnablementState::class);
        $this->intended_enablement_state = $var;

        return $this;
    }

    /**
     * Output only. The effective enablement state for the module at its level
     * of the resource hierarchy. If the intended state is set to INHERITED, the
     * effective state will be inherited from the enablement state of an
     * ancestor. This state may
     * differ from the intended enablement state due to billing eligibility or
     * onboarding status.
     *
     * Generated from protobuf field <code>.google.cloud.securitycentermanagement.v1.SecurityCenterService.EnablementState effective_enablement_state = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getEffectiveEnablementState()
    {
        return $this->effective_enablement_state;
    }

    /**
     * Output only. The effective enablement state for the module at its level
     * of the resource hierarchy. If the intended state is set to INHERITED, the
     * effective state will be inherited from the enablement state of an
     * ancestor. This state may
     * differ from the intended enablement state due to billing eligibility or
     * onboarding status.
     *
     * Generated from protobuf field <code>.google.cloud.securitycentermanagement.v1.SecurityCenterService.EnablementState effective_enablement_state = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setEffectiveEnablementState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\SecurityCenterManagement\V1\SecurityCenterService\EnablementState::class);
        $this->effective_enablement_state = $var;

        return $this;
    }

}


