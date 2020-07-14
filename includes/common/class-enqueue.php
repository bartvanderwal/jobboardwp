<?php namespace jb\common;


if ( ! defined( 'ABSPATH' ) ) exit;


if ( ! class_exists( 'jb\common\Enqueue' ) ) {


	/**
	 * Class Enqueue
	 *
	 * @package jb\common
	 */
	class Enqueue {


		/**
		 * @var
		 */
		var $js_url = [];


		/**
		 * @var
		 */
		var $css_url = [];


		/**
		 * @var array
		 */
		var $url = [];


		/**
		 * @var array
		 */
		var $g_locales = [];


		/**
		 * @var string
		 */
		var $fa_version = '5.13.0';


		/**
		 * Enqueue constructor.
		 */
		function __construct() {
			$this->url['common'] = jb_url . 'assets/common/';
			$this->js_url['common'] = jb_url . 'assets/common/js/';
			$this->css_url['common'] = jb_url . 'assets/common/css/';

			$this->g_locales = [
				'af'        => __( 'Afrikaans', 'jobboardwp' ),
				'sq'        => __( 'Albanian', 'jobboardwp' ),
				'am'        => __( 'Amharic', 'jobboardwp' ),
				'ar'        => __( 'Arabic', 'jobboardwp' ),
				'hy'        => __( 'Armenian', 'jobboardwp' ),
				'az'        => __( 'Azerbaijani', 'jobboardwp' ),
				'eu'        => __( 'Basque', 'jobboardwp' ),
				'be'        => __( 'Belarusian', 'jobboardwp' ),
				'bn'        => __( 'Bengali', 'jobboardwp' ),
				'bs'        => __( 'Bosnian', 'jobboardwp' ),
				'my'        => __( 'Burmese', 'jobboardwp' ),
				'ca'        => __( 'Catalan', 'jobboardwp' ),
				'zh'        => __( 'Chinese', 'jobboardwp' ),
				'zh-CN'     => __( 'Chinese (Simplified)', 'jobboardwp' ),
				'zh-HK'     => __( 'Chinese (Hong Kong)', 'jobboardwp' ),
				'zh-TW'     => __( 'Chinese (Traditional)', 'jobboardwp' ),
				'hr'        => __( 'Croatian', 'jobboardwp' ),
				'cs'        => __( 'Czech', 'jobboardwp' ),
				'da'        => __( 'Danish', 'jobboardwp' ),
				'nl'        => __( 'Dutch', 'jobboardwp' ),
				'en'        => __( 'English', 'jobboardwp' ),
				'en-AU'     => __( 'English (Australian)', 'jobboardwp' ),
				'en-GB'     => __( 'English (Great Britain)', 'jobboardwp' ),
				'et'        => __( 'Estonian', 'jobboardwp' ),
				'fa'        => __( 'Farsi', 'jobboardwp' ),
				'fi'        => __( 'Finnish', 'jobboardwp' ),
				'fil'       => __( 'Filipino', 'jobboardwp' ),
				'fr'        => __( 'French', 'jobboardwp' ),
				'fr-CA'     => __( 'French (Canada)', 'jobboardwp' ),
				'gl'        => __( 'Galician', 'jobboardwp' ),
				'ka'        => __( 'Georgian', 'jobboardwp' ),
				'de'        => __( 'German', 'jobboardwp' ),
				'el'        => __( 'Greek', 'jobboardwp' ),
				'gu'        => __( 'Gujarati', 'jobboardwp' ),
				'iw'        => __( 'Hebrew', 'jobboardwp' ),
				'hi'        => __( 'Hindi', 'jobboardwp' ),
				'hu'        => __( 'Hungarian', 'jobboardwp' ),
				'is'        => __( 'Icelandic', 'jobboardwp' ),
				'id'        => __( 'Indonesian', 'jobboardwp' ),
				'it'        => __( 'Italian', 'jobboardwp' ),
				'ja'        => __( 'Japanese', 'jobboardwp' ),
				'kn'        => __( 'Kannada', 'jobboardwp' ),
				'kk'        => __( 'Kazakh', 'jobboardwp' ),
				'km'        => __( 'Khmer', 'jobboardwp' ),
				'ko'        => __( 'Korean', 'jobboardwp' ),
				'ky'        => __( 'Kyrgyz', 'jobboardwp' ),
				'lo'        => __( 'Lao', 'jobboardwp' ),
				'lv'        => __( 'Latvian', 'jobboardwp' ),
				'lt'        => __( 'Lithuanian', 'jobboardwp' ),
				'mk'        => __( 'Macedonian', 'jobboardwp' ),
				'ms'        => __( 'Malay', 'jobboardwp' ),
				'ml'        => __( 'Malayalam', 'jobboardwp' ),
				'mr'        => __( 'Marathi', 'jobboardwp' ),
				'mn'        => __( 'Mongolian', 'jobboardwp' ),
				'ne'        => __( 'Nepali', 'jobboardwp' ),
				'no'        => __( 'Norwegian', 'jobboardwp' ),
				'pl'        => __( 'Polish', 'jobboardwp' ),
				'pt'        => __( 'Portuguese', 'jobboardwp' ),
				'pt-BR'     => __( 'Portuguese (Brazil)', 'jobboardwp' ),
				'pt-PT'     => __( 'Portuguese (Portugal)', 'jobboardwp' ),
				'pa'        => __( 'Punjabi', 'jobboardwp' ),
				'ro'        => __( 'Romanian', 'jobboardwp' ),
				'ru'        => __( 'Russian', 'jobboardwp' ),
				'sr'        => __( 'Serbian', 'jobboardwp' ),
				'si'        => __( 'Sinhalese', 'jobboardwp' ),
				'sk'        => __( 'Slovak', 'jobboardwp' ),
				'sl'        => __( 'Slovenian', 'jobboardwp' ),
				'es'        => __( 'Spanish', 'jobboardwp' ),
				'es-419'    => __( 'Spanish (Latin America)', 'jobboardwp' ),
				'sw'        => __( 'Swahili', 'jobboardwp' ),
				'sv'        => __( 'Swedish', 'jobboardwp' ),
				'ta'        => __( 'Tamil', 'jobboardwp' ),
				'te'        => __( 'Telugu', 'jobboardwp' ),
				'th'        => __( 'Thai', 'jobboardwp' ),
				'tr'        => __( 'Turkish', 'jobboardwp' ),
				'uk'        => __( 'Ukrainian', 'jobboardwp' ),
				'ur'        => __( 'Urdu', 'jobboardwp' ),
				'uz'        => __( 'Uzbek', 'jobboardwp' ),
				'vi'        => __( 'Vietnamese', 'jobboardwp' ),
				'zu'        => __( 'Zulu', 'jobboardwp' ),
			];

			add_action( 'plugins_loaded', [ $this, 'init_variables' ], 10 );
			add_action( 'admin_enqueue_scripts', [ &$this, 'common_libs' ], 9 );
			add_action( 'wp_enqueue_scripts', [ &$this, 'common_libs' ], 9 );

			add_filter( 'jb_frontend_common_styles_deps', [ &$this, 'extends_styles' ], 10, 1 );
		}


		/**
		 * @return string
		 */
		function get_g_locale() {
			$locale = get_locale();
			$locales = array_keys( $this->g_locales );
			if ( ! in_array( $locale, $locales ) ) {
				$locale = str_replace( '_', '-', $locale );
				if ( ! in_array( $locale, $locales ) ) {
					$locale = explode( '-', $locale );
					if ( isset( $locale[1] ) ) {
						$locale = $locale[1];
					}
				}
			}

			return $locale;
		}


		/**
		 * Init variables for enqueue scripts
		 */
		function init_variables() {
			JB()->scrips_prefix = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';
		}


		/**
		 *
		 */
		function common_libs() {
			global $wp_scripts;

			$jquery_version = isset( $wp_scripts->registered['jquery-ui-core']->ver ) ? $wp_scripts->registered['jquery-ui-core']->ver : '1.9.2';
			wp_register_style( 'jquery-ui', '//code.jquery.com/ui/' . $jquery_version . '/themes/smoothness/jquery-ui' . JB()->scrips_prefix . '.css', [], $jquery_version );

			if ( ! JB()->options()->get( 'disable-fa-styles' ) ) {
				wp_register_style( 'jb-far', $this->url['common'] . 'libs/fontawesome/css/regular' . JB()->scrips_prefix . '.css', [], $this->fa_version );
				wp_register_style( 'jb-fas', $this->url['common'] . 'libs/fontawesome/css/solid' . JB()->scrips_prefix . '.css', [], $this->fa_version );
				wp_register_style( 'jb-fab', $this->url['common'] . 'libs/fontawesome/css/brands' . JB()->scrips_prefix . '.css', [], $this->fa_version );
				wp_register_style( 'jb-fa', $this->url['common'] . 'libs/fontawesome/css/v4-shims' . JB()->scrips_prefix . '.css', [], $this->fa_version );
				wp_register_style( 'jb-font-awesome', $this->url['common'] . 'libs/fontawesome/css/fontawesome' . JB()->scrips_prefix . '.css', [ 'jb-fa', 'jb-far', 'jb-fas', 'jb-fab' ], $this->fa_version );
			}
		}


		/**
		 * @param array $styles
		 *
		 * @return array
		 */
		function extends_styles( $styles ) {
			if ( JB()->options()->get( 'disable-fa-styles' ) ) {
				return $styles;
			}

			$styles[] = 'jb-font-awesome';
			return $styles;
		}

	}
}