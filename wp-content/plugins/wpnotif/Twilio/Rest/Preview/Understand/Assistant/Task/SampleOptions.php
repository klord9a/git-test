<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Preview\Understand\Assistant\Task;

use Twilio\Options;
use Twilio\Values;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 */
abstract class SampleOptions {
	/**
	 * @param string $language An ISO language-country string of the sample.
	 *
	 * @return ReadSampleOptions Options builder
	 */
	public static function read( $language = Values::NONE ) {
		return new ReadSampleOptions( $language );
	}

	/**
	 * @param string $sourceChannel The communication channel the sample was
	 *                              captured. It can be: voice, sms, chat, alexa,
	 *                              google-assistant, or slack. If not included the
	 *                              value will be null
	 *
	 * @return CreateSampleOptions Options builder
	 */
	public static function create( $sourceChannel = Values::NONE ) {
		return new CreateSampleOptions( $sourceChannel );
	}

	/**
	 * @param string $language An ISO language-country string of the sample.
	 * @param string $taggedText The text example of how end-users may express this
	 *                           task. The sample may contain Field tag blocks.
	 * @param string $sourceChannel The communication channel the sample was
	 *                              captured. It can be: voice, sms, chat, alexa,
	 *                              google-assistant, or slack. If not included the
	 *                              value will be null
	 *
	 * @return UpdateSampleOptions Options builder
	 */
	public static function update( $language = Values::NONE, $taggedText = Values::NONE, $sourceChannel = Values::NONE ) {
		return new UpdateSampleOptions( $language, $taggedText, $sourceChannel );
	}
}

class ReadSampleOptions extends Options {
	/**
	 * @param string $language An ISO language-country string of the sample.
	 */
	public function __construct( $language = Values::NONE ) {
		$this->options['language'] = $language;
	}

	/**
	 * An ISO language-country string of the sample.
	 *
	 * @param string $language An ISO language-country string of the sample.
	 *
	 * @return $this Fluent Builder
	 */
	public function setLanguage( $language ) {
		$this->options['language'] = $language;

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

		return '[Twilio.Preview.Understand.ReadSampleOptions ' . implode( ' ', $options ) . ']';
	}
}

class CreateSampleOptions extends Options {
	/**
	 * @param string $sourceChannel The communication channel the sample was
	 *                              captured. It can be: voice, sms, chat, alexa,
	 *                              google-assistant, or slack. If not included the
	 *                              value will be null
	 */
	public function __construct( $sourceChannel = Values::NONE ) {
		$this->options['sourceChannel'] = $sourceChannel;
	}

	/**
	 * The communication channel the sample was captured. It can be: *voice*, *sms*, *chat*, *alexa*, *google-assistant*, or *slack*. If not included the value will be null
	 *
	 * @param string $sourceChannel The communication channel the sample was
	 *                              captured. It can be: voice, sms, chat, alexa,
	 *                              google-assistant, or slack. If not included the
	 *                              value will be null
	 *
	 * @return $this Fluent Builder
	 */
	public function setSourceChannel( $sourceChannel ) {
		$this->options['sourceChannel'] = $sourceChannel;

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

		return '[Twilio.Preview.Understand.CreateSampleOptions ' . implode( ' ', $options ) . ']';
	}
}

class UpdateSampleOptions extends Options {
	/**
	 * @param string $language An ISO language-country string of the sample.
	 * @param string $taggedText The text example of how end-users may express this
	 *                           task. The sample may contain Field tag blocks.
	 * @param string $sourceChannel The communication channel the sample was
	 *                              captured. It can be: voice, sms, chat, alexa,
	 *                              google-assistant, or slack. If not included the
	 *                              value will be null
	 */
	public function __construct( $language = Values::NONE, $taggedText = Values::NONE, $sourceChannel = Values::NONE ) {
		$this->options['language']      = $language;
		$this->options['taggedText']    = $taggedText;
		$this->options['sourceChannel'] = $sourceChannel;
	}

	/**
	 * An ISO language-country string of the sample.
	 *
	 * @param string $language An ISO language-country string of the sample.
	 *
	 * @return $this Fluent Builder
	 */
	public function setLanguage( $language ) {
		$this->options['language'] = $language;

		return $this;
	}

	/**
	 * The text example of how end-users may express this task. The sample may contain Field tag blocks.
	 *
	 * @param string $taggedText The text example of how end-users may express this
	 *                           task. The sample may contain Field tag blocks.
	 *
	 * @return $this Fluent Builder
	 */
	public function setTaggedText( $taggedText ) {
		$this->options['taggedText'] = $taggedText;

		return $this;
	}

	/**
	 * The communication channel the sample was captured. It can be: *voice*, *sms*, *chat*, *alexa*, *google-assistant*, or *slack*. If not included the value will be null
	 *
	 * @param string $sourceChannel The communication channel the sample was
	 *                              captured. It can be: voice, sms, chat, alexa,
	 *                              google-assistant, or slack. If not included the
	 *                              value will be null
	 *
	 * @return $this Fluent Builder
	 */
	public function setSourceChannel( $sourceChannel ) {
		$this->options['sourceChannel'] = $sourceChannel;

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

		return '[Twilio.Preview.Understand.UpdateSampleOptions ' . implode( ' ', $options ) . ']';
	}
}