<?php
/**
 * Build arrays
 *
 * Create and return colour and flag arrays
 *
 * @package pride-bar
 */

// Exit if accessed directly.

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Text colour array
 *
 * Return an array containing text colours for the admin bar
 *
 * @return string  Text colour array
 */
function prb_text_array() {

	return array(
		'Aftgender'   => 'FFF',
		'Bisexual'    => 'FFF',
		'Genderfluid' => 'FFF',
		'Demifluid'   => 'FFF',
	);
}

/**
 * Flag array
 *
 * Return an array containing flag build information
 *
 * @return string  Flag array
 */
function prb_build_array() {

	return array(
		__( 'Aceflux', 'pride-bar' )     => array(
			array(
				'size' => 0,
				'rgb'  => 'B83367',
			),
			array(
				'size' => 20,
				'rgb'  => 'DC7488',
			),
			array(
				'size' => 40,
				'rgb'  => 'F3D3E0',
			),
			array(
				'size' => 60,
				'rgb'  => '874B97',
			),
			array(
				'size' => 80,
				'rgb'  => '75147C',
			),
		),
		'Acespec'                        => array(
			array(
				'size' => 0,
				'rgb'  => '000',
			),
			array(
				'size' => 25,
				'rgb'  => 'A4A5A4',
			),
			array(
				'size' => 50,
				'rgb'  => 'FFF',
			),
			array(
				'size' => 75,
				'rgb'  => '76157D',
			),
		),
		'Aftgender'                      => array(
			array(
				'size' => 0,
				'rgb'  => '5610CC',
			),
			array(
				'size' => 60,
				'rgb'  => 'FDEA9F',
			),
			array(
				'size' => 80,
				'rgb'  => 'FC96DF',
			),
		),
		'Agender'                        => array(
			array(
				'size' => 0,
				'rgb'  => '000',
			),
			array(
				'size' => 14.29,
				'rgb'  => 'ABABAB',
			),
			array(
				'size' => 29.57,
				'rgb'  => 'FFF',
			),
			array(
				'size' => 42.86,
				'rgb'  => 'ACF670',
			),
			array(
				'size' => 57.14,
				'rgb'  => 'FFF',
			),
			array(
				'size' => 71.43,
				'rgb'  => 'ABABAB',
			),
			array(
				'size' => 85.71,
				'rgb'  => '000',
			),
		),
		'Aplatonic'                      => array(
			array(
				'size' => 0,
				'rgb'  => '481C61',
			),
			array(
				'size' => 25,
				'rgb'  => '4E74B5',
			),
			array(
				'size' => 50,
				'rgb'  => '95BB41',
			),
			array(
				'size' => 75,
				'rgb'  => 'FFFFD2',
			),
		),
		'Aroace'                         => array(
			array(
				'size' => 0,
				'rgb'  => 'D69032',
			),
			array(
				'size' => 20,
				'rgb'  => 'E7CE44',
			),
			array(
				'size' => 40,
				'rgb'  => 'FFF',
			),
			array(
				'size' => 60,
				'rgb'  => '72A8D4',
			),
			array(
				'size' => 80,
				'rgb'  => '253754',
			),
		),
		'Arospec'                        => array(
			array(
				'size' => 0,
				'rgb'  => '339833',
			),
			array(
				'size' => 20,
				'rgb'  => '98CD66',
			),
			array(
				'size' => 40,
				'rgb'  => 'FFF',
			),
			array(
				'size' => 60,
				'rgb'  => '999',
			),
			array(
				'size' => 80,
				'rgb'  => '000',
			),
		),
		'Asexual'                        => array(
			array(
				'size' => 0,
				'rgb'  => '000',
			),
			array(
				'size' => 25,
				'rgb'  => '929292',
			),
			array(
				'size' => 50,
				'rgb'  => 'FFF',
			),
			array(
				'size' => 75,
				'rgb'  => '6B006D',
			),
		),
		'Bigender'                       => array(
			array(
				'size' => 0,
				'rgb'  => 'B56291',
			),
			array(
				'size' => 14.29,
				'rgb'  => 'E690C2',
			),
			array(
				'size' => 29.57,
				'rgb'  => 'CABAE2',
			),
			array(
				'size' => 42.86,
				'rgb'  => 'FFF',
			),
			array(
				'size' => 57.14,
				'rgb'  => 'CABAE2',
			),
			array(
				'size' => 71.43,
				'rgb'  => '8AB9E1',
			),
			array(
				'size' => 85.71,
				'rgb'  => '5A6CC6',
			),
		),
		'Bisexual'                       => array(
			array(
				'size' => 0,
				'rgb'  => 'D60270',
			),
			array(
				'size' => 40,
				'rgb'  => '9B4F96',
			),
			array(
				'size' => 60,
				'rgb'  => '0038A8',
			),
		),
		'Ceterosexual'                   => array(
			array(
				'size' => 0,
				'rgb'  => 'FBFB6D',
			),
			array(
				'size' => 25,
				'rgb'  => '198E36',
			),
			array(
				'size' => 50,
				'rgb'  => 'FFF',
			),
			array(
				'size' => 75,
				'rgb'  => '000',
			),
		),
		'Demiboy'                        => array(
			array(
				'size' => 0,
				'rgb'  => '6C6C6C',
			),
			array(
				'size' => 14.29,
				'rgb'  => 'B6B6B6',
			),
			array(
				'size' => 29.57,
				'rgb'  => '8AD1E6',
			),
			array(
				'size' => 42.86,
				'rgb'  => 'FFF',
			),
			array(
				'size' => 57.14,
				'rgb'  => '8AD1E6',
			),
			array(
				'size' => 71.43,
				'rgb'  => 'B6B6B6',
			),
			array(
				'size' => 85.71,
				'rgb'  => '6C6C6C',
			),
		),
		'Demifluid'                      => array(
			array(
				'size' => 0,
				'rgb'  => '6C6C6C',
			),
			array(
				'size' => 14.29,
				'rgb'  => 'B8B8B8',
			),
			array(
				'size' => 29.57,
				'rgb'  => 'FA5A8F',
			),
			array(
				'size' => 42.86,
				'rgb'  => 'AE00CE',
			),
			array(
				'size' => 57.14,
				'rgb'  => '2728AF',
			),
			array(
				'size' => 71.43,
				'rgb'  => 'B8B8B8',
			),
			array(
				'size' => 85.71,
				'rgb'  => '6C6C6C',
			),
		),
		'Demigender'                     => array(
			array(
				'size' => 0,
				'rgb'  => '6C6C6C',
			),
			array(
				'size' => 14.29,
				'rgb'  => 'B6B6B6',
			),
			array(
				'size' => 29.57,
				'rgb'  => 'FAFF61',
			),
			array(
				'size' => 42.86,
				'rgb'  => 'FFF',
			),
			array(
				'size' => 57.14,
				'rgb'  => 'FAFF61',
			),
			array(
				'size' => 71.43,
				'rgb'  => 'B6B6B6',
			),
			array(
				'size' => 85.71,
				'rgb'  => '6C6C6C',
			),
		),
		'Demigirl'                       => array(
			array(
				'size' => 0,
				'rgb'  => '6C6C6C',
			),
			array(
				'size' => 14.29,
				'rgb'  => 'B6B6B6',
			),
			array(
				'size' => 29.57,
				'rgb'  => 'FC9BBD',
			),
			array(
				'size' => 42.86,
				'rgb'  => 'FFF',
			),
			array(
				'size' => 57.14,
				'rgb'  => 'FC9BBD',
			),
			array(
				'size' => 71.43,
				'rgb'  => 'B6B6B6',
			),
			array(
				'size' => 85.71,
				'rgb'  => '6C6C6C',
			),
		),
		'Demineutrois'                   => array(
			array(
				'size' => 0,
				'rgb'  => '6C6C6C',
			),
			array(
				'size' => 14.29,
				'rgb'  => 'B7B7B7',
			),
			array(
				'size' => 29.57,
				'rgb'  => '288E15',
			),
			array(
				'size' => 42.86,
				'rgb'  => 'FFF',
			),
			array(
				'size' => 57.14,
				'rgb'  => '288E15',
			),
			array(
				'size' => 71.43,
				'rgb'  => 'B7B7B7',
			),
			array(
				'size' => 85.71,
				'rgb'  => '6C6C6C',
			),
		),
		'Deminonbinary'                  => array(
			array(
				'size' => 0,
				'rgb'  => '6C6C6C',
			),
			array(
				'size' => 14.29,
				'rgb'  => 'B7B7B7',
			),
			array(
				'size' => 29.57,
				'rgb'  => 'F9FF61',
			),
			array(
				'size' => 42.86,
				'rgb'  => 'FFF',
			),
			array(
				'size' => 57.14,
				'rgb'  => 'F9FF61',
			),
			array(
				'size' => 71.43,
				'rgb'  => 'B7B7B7',
			),
			array(
				'size' => 85.71,
				'rgb'  => '6C6C6C',
			),
		),
		'Demixenogender'                 => array(
			array(
				'size' => 0,
				'rgb'  => '6C6C6C',
			),
			array(
				'size' => 14.29,
				'rgb'  => 'B2242D',
			),
			array(
				'size' => 29.57,
				'rgb'  => 'FDC097',
			),
			array(
				'size' => 42.86,
				'rgb'  => 'FFF',
			),
			array(
				'size' => 57.14,
				'rgb'  => '9FC8FF',
			),
			array(
				'size' => 71.43,
				'rgb'  => '7A1EBA',
			),
			array(
				'size' => 85.71,
				'rgb'  => '6C6C6C',
			),
		),
		'Femme'                          => array(
			array(
				'size' => 0,
				'rgb'  => '822DA6',
			),
			array(
				'size' => 14.29,
				'rgb'  => '995DB6',
			),
			array(
				'size' => 29.57,
				'rgb'  => 'BA86D2',
			),
			array(
				'size' => 42.86,
				'rgb'  => 'FFF',
			),
			array(
				'size' => 57.14,
				'rgb'  => 'E0C0E5',
			),
			array(
				'size' => 71.43,
				'rgb'  => 'C277BE',
			),
			array(
				'size' => 85.71,
				'rgb'  => '943592',
			),
		),
		'Fraysexual'                     => array(
			array(
				'size' => 0,
				'rgb'  => '386BB0',
			),
			array(
				'size' => 25,
				'rgb'  => 'A6E5DD',
			),
			array(
				'size' => 50,
				'rgb'  => 'FFF',
			),
			array(
				'size' => 75,
				'rgb'  => '636363',
			),
		),
		'Gay Men'                        => array(
			array(
				'size' => 0,
				'rgb'  => '126B56',
			),
			array(
				'size' => 14.29,
				'rgb'  => '379494',
			),
			array(
				'size' => 29.57,
				'rgb'  => '4EBEC8',
			),
			array(
				'size' => 42.86,
				'rgb'  => 'EEE8FF',
			),
			array(
				'size' => 57.14,
				'rgb'  => '6A9BDA',
			),
			array(
				'size' => 71.43,
				'rgb'  => '166DBF',
			),
			array(
				'size' => 85.71,
				'rgb'  => '0A245D',
			),
		),
		'Gender Nonconforming'           => array(
			array(
				'size' => 0,
				'rgb'  => 'FC96DF',
			),
			array(
				'size' => 40,
				'rgb'  => 'FFF',
			),
			array(
				'size' => 60,
				'rgb'  => 'FC96DF',
			),
		),
		'Genderfae'                      => array(
			array(
				'size' => 0,
				'rgb'  => '85BA93',
			),
			array(
				'size' => 14.29,
				'rgb'  => 'B5D89E',
			),
			array(
				'size' => 29.57,
				'rgb'  => 'F7FBC3',
			),
			array(
				'size' => 42.86,
				'rgb'  => 'FFF',
			),
			array(
				'size' => 57.14,
				'rgb'  => 'F98DB9',
			),
			array(
				'size' => 71.43,
				'rgb'  => 'D070DC',
			),
			array(
				'size' => 85.71,
				'rgb'  => '9965D5',
			),
		),
		'Genderfluid'                    => array(
			array(
				'size' => 0,
				'rgb'  => 'FC5B90',
			),
			array(
				'size' => 20,
				'rgb'  => 'FFF',
			),
			array(
				'size' => 40,
				'rgb'  => 'AD00CD',
			),
			array(
				'size' => 60,
				'rgb'  => '000',
			),
			array(
				'size' => 80,
				'rgb'  => '2626AF',
			),
		),
		'Genderflux'                     => array(
			array(
				'size' => 0,
				'rgb'  => 'E47D95',
			),
			array(
				'size' => 16.67,
				'rgb'  => 'E6A6B9',
			),
			array(
				'size' => 33.33,
				'rgb'  => 'CECECE',
			),
			array(
				'size' => 50,
				'rgb'  => '94DEF4',
			),
			array(
				'size' => 66.67,
				'rgb'  => '6BCAF5',
			),
			array(
				'size' => 83.33,
				'rgb'  => 'FCF49A',
			),
		),
		'Genderqueer'                    => array(
			array(
				'size' => 0,
				'rgb'  => 'A564D3',
			),
			array(
				'size' => 33.33,
				'rgb'  => 'FFF',
			),
			array(
				'size' => 66.67,
				'rgb'  => '3B711A',
			),
		),
		'Greysexual'                     => array(
			array(
				'size' => 0,
				'rgb'  => '6F1391',
			),
			array(
				'size' => 20,
				'rgb'  => 'AFB2AF',
			),
			array(
				'size' => 40,
				'rgb'  => 'FFF',
			),
			array(
				'size' => 60,
				'rgb'  => 'AFB2AF',
			),
			array(
				'size' => 80,
				'rgb'  => '6F1391',
			),
		),
		'Hijra'                          => array(
			array(
				'size' => 0,
				'rgb'  => 'F7CEE5',
			),
			array(
				'size' => 33.33,
				'rgb'  => 'FFF',
			),
			array(
				'size' => 44.44,
				'rgb'  => 'B22418',
			),
			array(
				'size' => 55.55,
				'rgb'  => 'FFF',
			),
			array(
				'size' => 66.67,
				'rgb'  => 'C1DFF9',
			),
		),
		'Intersex'                       => array(
			array(
				'size' => 0,
				'rgb'  => 'CE98C4',
			),
			array(
				'size' => 16.67,
				'rgb'  => 'FFF',
			),
			array(
				'size' => 33.33,
				'rgb'  => '91C2EA',
			),
			array(
				'size' => 50,
				'rgb'  => 'EAA5CC',
			),
			array(
				'size' => 66.67,
				'rgb'  => 'FFF',
			),
			array(
				'size' => 83.33,
				'rgb'  => 'CE98C4',
			),
		),
		'Lesbian (5 stripe)'             => array(
			array(
				'size' => 0,
				'rgb'  => 'C81804',
			),
			array(
				'size' => 20,
				'rgb'  => 'FD8745',
			),
			array(
				'size' => 40,
				'rgb'  => 'FFF',
			),
			array(
				'size' => 60,
				'rgb'  => 'C64993',
			),
			array(
				'size' => 80,
				'rgb'  => '8F004F',
			),
		),
		'Lesbian (7 stripe)'             => array(
			array(
				'size' => 0,
				'rgb'  => 'D33731',
			),
			array(
				'size' => 14.29,
				'rgb'  => 'E37739',
			),
			array(
				'size' => 29.57,
				'rgb'  => 'E9985C',
			),
			array(
				'size' => 42.86,
				'rgb'  => 'FFF',
			),
			array(
				'size' => 57.14,
				'rgb'  => 'CF62A0',
			),
			array(
				'size' => 71.43,
				'rgb'  => 'B55592',
			),
			array(
				'size' => 85.71,
				'rgb'  => 'A32E68',
			),
		),
		'Lipstick Lesbian'               => array(
			array(
				'size' => 0,
				'rgb'  => '90004E',
			),
			array(
				'size' => 14.29,
				'rgb'  => 'A53E7E',
			),
			array(
				'size' => 29.57,
				'rgb'  => 'C24A95',
			),
			array(
				'size' => 42.86,
				'rgb'  => 'FFF',
			),
			array(
				'size' => 57.14,
				'rgb'  => 'DB9AC4',
			),
			array(
				'size' => 71.43,
				'rgb'  => 'AE3740',
			),
			array(
				'size' => 85.71,
				'rgb'  => '771105',
			),
		),
		'Monosexual'                     => array(
			array(
				'size' => 0,
				'rgb'  => 'AA5FB1',
			),
			array(
				'size' => 14.29,
				'rgb'  => 'C08BC6',
			),
			array(
				'size' => 29.57,
				'rgb'  => 'CEA5D3',
			),
			array(
				'size' => 42.86,
				'rgb'  => 'FFF',
			),
			array(
				'size' => 50,
				'rgb'  => 'F8D64A',
			),
			array(
				'size' => 57.14,
				'rgb'  => '646464',
			),
			array(
				'size' => 71.43,
				'rgb'  => '444',
			),
			array(
				'size' => 85.71,
				'rgb'  => '000',
			),
		),
		'Multisexual'                    => array(
			array(
				'size' => 0,
				'rgb'  => '6D4FC2',
			),
			array(
				'size' => 25,
				'rgb'  => 'FFF',
			),
			array(
				'size' => 50,
				'rgb'  => 'B0EDFD',
			),
			array(
				'size' => 75,
				'rgb'  => 'EB4F99',
			),
		),
		'Neutrois'                       => array(
			array(
				'size' => 0,
				'rgb'  => 'FFF',
			),
			array(
				'size' => 33.33,
				'rgb'  => '23A53B',
			),
			array(
				'size' => 66.67,
				'rgb'  => '000',
			),
		),
		'Non-binary'                     => array(
			array(
				'size' => 0,
				'rgb'  => 'FBF62A',
			),
			array(
				'size' => 25,
				'rgb'  => 'FFF',
			),
			array(
				'size' => 50,
				'rgb'  => '883DC6',
			),
			array(
				'size' => 75,
				'rgb'  => '212121',
			),
		),
		'Omnisexual'                     => array(
			array(
				'size' => 0,
				'rgb'  => 'FC84C2',
			),
			array(
				'size' => 20,
				'rgb'  => 'FB32AF',
			),
			array(
				'size' => 40,
				'rgb'  => 'FFF',
			),
			array(
				'size' => 60,
				'rgb'  => '5440FD',
			),
			array(
				'size' => 80,
				'rgb'  => '7992FE',
			),
		),
		'Pangender'                      => array(
			array(
				'size' => 0,
				'rgb'  => 'FFF887',
			),
			array(
				'size' => 14.29,
				'rgb'  => 'FDD4C2',
			),
			array(
				'size' => 29.57,
				'rgb'  => 'FFE5FA',
			),
			array(
				'size' => 42.86,
				'rgb'  => 'FFF',
			),
			array(
				'size' => 57.14,
				'rgb'  => 'FFE5FA',
			),
			array(
				'size' => 71.43,
				'rgb'  => 'FDD4C2',
			),
			array(
				'size' => 85.71,
				'rgb'  => 'FFF887',
			),
		),
		'Pansexual'                      => array(
			array(
				'size' => 0,
				'rgb'  => 'FB007A',
			),
			array(
				'size' => 33.33,
				'rgb'  => 'FED109',
			),
			array(
				'size' => 66.67,
				'rgb'  => '20A0FE',
			),
		),
		'Polysexual'                     => array(
			array(
				'size' => 0,
				'rgb'  => 'F000AA',
			),
			array(
				'size' => 33.33,
				'rgb'  => '1CD156',
			),
			array(
				'size' => 66.67,
				'rgb'  => '1B7BF4',
			),
		),
		'Pomosexual'                     => array(
			array(
				'size' => 0,
				'rgb'  => 'F4B1C8',
			),
			array(
				'size' => 14.29,
				'rgb'  => 'F6C8DD',
			),
			array(
				'size' => 29.57,
				'rgb'  => 'FFF',
			),
			array(
				'size' => 42.86,
				'rgb'  => 'E3CEFB',
			),
			array(
				'size' => 57.14,
				'rgb'  => 'FFF',
			),
			array(
				'size' => 71.43,
				'rgb'  => 'F6C8DD',
			),
			array(
				'size' => 85.71,
				'rgb'  => 'F4B1C8',
			),
		),
		'Pride (Gilbert Baker)'          => array(
			array(
				'size' => 0,
				'rgb'  => 'FA4DA4',
			),
			array(
				'size' => 12.5,
				'rgb'  => 'FB0006',
			),
			array(
				'size' => 25,
				'rgb'  => 'FD7A08',
			),
			array(
				'size' => 37.5,
				'rgb'  => 'FEFF0D',
			),
			array(
				'size' => 50,
				'rgb'  => '117E02',
			),
			array(
				'size' => 62.5,
				'rgb'  => '17B4B3',
			),
			array(
				'size' => 75,
				'rgb'  => '2B0072',
			),
			array(
				'size' => 87.5,
				'rgb'  => '7A007B',
			),
		),
		'Pride (More Colour More Pride)' => array(
			array(
				'size' => 0,
				'rgb'  => '000',
			),
			array(
				'size' => 12.5,
				'rgb'  => '3F2A10',
			),
			array(
				'size' => 25,
				'rgb'  => 'DB0009',
			),
			array(
				'size' => 37.5,
				'rgb'  => 'FA7807',
			),
			array(
				'size' => 50,
				'rgb'  => 'FEEC0A',
			),
			array(
				'size' => 62.5,
				'rgb'  => '0F701E',
			),
			array(
				'size' => 75,
				'rgb'  => '002DFE',
			),
			array(
				'size' => 87.5,
				'rgb'  => '620074',
			),
		),
		'Pride (Traditional)'            => array(
			array(
				'size' => 0,
				'rgb'  => 'E24C3E',
			),
			array(
				'size' => 16.67,
				'rgb'  => 'F47D3B',
			),
			array(
				'size' => 33.33,
				'rgb'  => 'FDB813',
			),
			array(
				'size' => 50,
				'rgb'  => '74BB5D',
			),
			array(
				'size' => 66.67,
				'rgb'  => '38A6D7',
			),
			array(
				'size' => 83.33,
				'rgb'  => '8C7AB8',
			),
		),
		'Queer'                          => array(
			array(
				'size' => 0,
				'rgb'  => '000',
			),
			array(
				'size' => 11.11,
				'rgb'  => 'A7D7E8',
			),
			array(
				'size' => 22.22,
				'rgb'  => '489FE2',
			),
			array(
				'size' => 33.33,
				'rgb'  => 'BFE44E',
			),
			array(
				'size' => 44.44,
				'rgb'  => 'FFF',
			),
			array(
				'size' => 55.55,
				'rgb'  => 'F6CB47',
			),
			array(
				'size' => 66.66,
				'rgb'  => 'EB706B',
			),
			array(
				'size' => 77.77,
				'rgb'  => 'F3B1C8',
			),
			array(
				'size' => 88.88,
				'rgb'  => '000',
			),
		),
		'Quintgender'                    => array(
			array(
				'size' => 0,
				'rgb'  => 'FD7DB7',
			),
			array(
				'size' => 11.11,
				'rgb'  => '50B3FE',
			),
			array(
				'size' => 22.22,
				'rgb'  => '8166FD',
			),
			array(
				'size' => 33.33,
				'rgb'  => 'FFFF6E',
			),
			array(
				'size' => 44.44,
				'rgb'  => '59D553',
			),
			array(
				'size' => 55.55,
				'rgb'  => 'FFFF6E',
			),
			array(
				'size' => 66.66,
				'rgb'  => '8166FD',
			),
			array(
				'size' => 77.77,
				'rgb'  => '50B3FE',
			),
			array(
				'size' => 88.88,
				'rgb'  => 'FD7DB7',
			),
		),
		'Transgender'                    => array(
			array(
				'size' => 0,
				'rgb'  => '4EC2F9',
			),
			array(
				'size' => 20,
				'rgb'  => 'F095A9',
			),
			array(
				'size' => 40,
				'rgb'  => 'FFF',
			),
			array(
				'size' => 60,
				'rgb'  => 'F095A9',
			),
			array(
				'size' => 80,
				'rgb'  => '4EC2F9',
			),
		),
	);
}
