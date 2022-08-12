<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Notify\V1\Service;

use Twilio\Options;
use Twilio\Values;

/**
 * PLEASE NOTE that this class contains beta products that are subject to change. Use them with caution.
 */
abstract class BindingOptions {
	/**
	 * @param string $tag The list of tags associated with this Binding.
	 * @param string $notificationProtocolVersion The version of the protocol used
	 *                                            to send the notification.
	 * @param string $credentialSid The unique identifier of the Credential
	 *                              resource to be used to send notifications to
	 *                              this Binding.
	 * @param string $endpoint DEPRECATED*
	 *
	 * @return CreateBindingOptions Options builder
	 */
	public static function create( $tag = Values::NONE, $notificationProtocolVersion = Values::NONE, $credentialSid = Values::NONE, $endpoint = Values::NONE ) {
		return new CreateBindingOptions( $tag, $notificationProtocolVersion, $credentialSid, $endpoint );
	}

	/**
	 * @param \DateTime $startDate Only list Bindings created on or after the given
	 *                             date.
	 * @param \DateTime $endDate Only list Bindings created on or before the given
	 *                           date.
	 * @param string $identity Only list Bindings that have any of the specified
	 *                         Identities.
	 * @param string $tag Only list Bindings that have all of the specified Tags.
	 *
	 * @return ReadBindingOptions Options builder
	 */
	public static function read( $startDate = Values::NONE, $endDate = Values::NONE, $identity = Values::NONE, $tag = Values::NONE ) {
		return new ReadBindingOptions( $startDate, $endDate, $identity, $tag );
	}
}

class CreateBindingOptions extends Options {
	/**
	 * @param string $tag The list of tags associated with this Binding.
	 * @param string $notificationProtocolVersion The version of the protocol used
	 *                                            to send the notification.
	 * @param string $credentialSid The unique identifier of the Credential
	 *                              resource to be used to send notifications to
	 *                              this Binding.
	 * @param string $endpoint DEPRECATED*
	 */
	public function __construct( $tag = Values::NONE, $notificationProtocolVersion = Values::NONE, $credentialSid = Values::NONE, $endpoint = Values::NONE ) {
		$this->options['tag']                         = $tag;
		$this->options['notificationProtocolVersion'] = $notificationProtocolVersion;
		$this->options['credentialSid']               = $credentialSid;
		$this->options['endpoint']                    = $endpoint;
	}

	/**
	 * The list of tags associated with this Binding. Tags can be used to select the Bindings to use when sending a notification. Maximum 20 tags are allowed.
	 *
	 * @param string $tag The list of tags associated with this Binding.
	 *
	 * @return $this Fluent Builder
	 */
	public function setTag( $tag ) {
		$this->options['tag'] = $tag;

		return $this;
	}

	/**
	 * The version of the protocol (data format) used to send the notification. This defaults to the value of DefaultXXXNotificationProtocolVersion in the [Service](https://www.twilio.com/docs/api/notify/rest/services). The current version is `"3"` for `apn`, `fcm`, and `gcm` type Bindings. The parameter is not applicable to `sms` and `facebook-messenger` type Bindings as the data format is fixed.
	 *
	 * @param string $notificationProtocolVersion The version of the protocol used
	 *                                            to send the notification.
	 *
	 * @return $this Fluent Builder
	 */
	public function setNotificationProtocolVersion( $notificationProtocolVersion ) {
		$this->options['notificationProtocolVersion'] = $notificationProtocolVersion;

		return $this;
	}

	/**
	 * The unique identifier (SID) of the Credential resource to be used to send notifications to this Binding. If present, this overrides the Credential specified in the Service resource. Applicable only to `apn`, `fcm`, and `gcm` type Bindings.
	 *
	 * @param string $credentialSid The unique identifier of the Credential
	 *                              resource to be used to send notifications to
	 *                              this Binding.
	 *
	 * @return $this Fluent Builder
	 */
	public function setCredentialSid( $credentialSid ) {
		$this->options['credentialSid'] = $credentialSid;

		return $this;
	}

	/**
	 * DEPRECATED*
	 *
	 * @param string $endpoint DEPRECATED*
	 *
	 * @return $this Fluent Builder
	 */
	public function setEndpoint( $endpoint ) {
		$this->options['endpoint'] = $endpoint;

		return $this;
	}

	/**
	 * Provide a friendly representation
	 *
	 * @return string Machine friendly representation
	 */
	public function __toString() {
		$options = array();
		foreach ( $this->options as $key => $value ) {
			if ( $value != Values::NONE ) {
				$options[] = "$key=$value";
			}
		}

		return '[Twilio.Notify.V1.CreateBindingOptions ' . implode( ' ', $options ) . ']';
	}
}

class ReadBindingOptions extends Options {
	/**
	 * @param \DateTime $startDate Only list Bindings created on or after the given
	 *                             date.
	 * @param \DateTime $endDate Only list Bindings created on or before the given
	 *                           date.
	 * @param string $identity Only list Bindings that have any of the specified
	 *                         Identities.
	 * @param string $tag Only list Bindings that have all of the specified Tags.
	 */
	public function __construct( $startDate = Values::NONE, $endDate = Values::NONE, $identity = Values::NONE, $tag = Values::NONE ) {
		$this->options['startDate'] = $startDate;
		$this->options['endDate']   = $endDate;
		$this->options['identity']  = $identity;
		$this->options['tag']       = $tag;
	}

	/**
	 * Only list Bindings created on or after the given date. Should be formatted as YYYY-MM-DD. All dates considered in UTC.
	 *
	 * @param \DateTime $startDate Only list Bindings created on or after the given
	 *                             date.
	 *
	 * @return $this Fluent Builder
	 */
	public function setStartDate( $startDate ) {
		$this->options['startDate'] = $startDate;

		return $this;
	}

	/**
	 * Only list Bindings created on or before the given date. Should be formatted as YYYY-MM-DD. All dates considered in UTC.
	 *
	 * @param \DateTime $endDate Only list Bindings created on or before the given
	 *                           date.
	 *
	 * @return $this Fluent Builder
	 */
	public function setEndDate( $endDate ) {
		$this->options['endDate'] = $endDate;

		return $this;
	}

	/**
	 * Only list Bindings that have any of the specified Identities.
	 *
	 * @param string $identity Only list Bindings that have any of the specified
	 *                         Identities.
	 *
	 * @return $this Fluent Builder
	 */
	public function setIdentity( $identity ) {
		$this->options['identity'] = $identity;

		return $this;
	}

	/**
	 * Only list Bindings that have all of the specified Tags. The following implicit tags are available: all, apn, fcm, gcm, sms, facebook-messenger. Maximum 5 tags are allowed.
	 *
	 * @param string $tag Only list Bindings that have all of the specified Tags.
	 *
	 * @return $this Fluent Builder
	 */
	public function setTag( $tag ) {
		$this->options['tag'] = $tag;

		return $this;
	}

	/**
	 * Provide a friendly representation
	 *
	 * @return string Machine friendly representation
	 */
	public function __toString() {
		$options = array();
		foreach ( $this->options as $key => $value ) {
			if ( $value != Values::NONE ) {
				$options[] = "$key=$value";
			}
		}

		return '[Twilio.Notify.V1.ReadBindingOptions ' . implode( ' ', $options ) . ']';
	}
}