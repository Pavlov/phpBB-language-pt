<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
* @Traduzido por: http://phpbbportugal.com - segundo as normas do Acordo Ortogr�fico
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'CONFIG_NOT_EXIST'					=> 'Inesperadamente a op��o de configura��o "%s" n�o existe.',

	'GROUP_NOT_EXIST'					=> 'Inesperadamente o Grupo "%s" n�o existe.',

	'MIGRATION_DATA_DONE'				=> 'Dados instalados: %1$s; Dados: %2$.2f segundos',
	'MIGRATION_DATA_IN_PROGRESS'		=> 'A instalar dados: %1$s; Dados: %2$.2f segundos',
	'MIGRATION_EFFECTIVELY_INSTALLED'	=> 'A migra��o j� est� efetivamente instalada (saltar): %s',
	'MIGRATION_EXCEPTION_ERROR'			=> 'Algo correu mal durante a execu��o do pedido e foi criada uma exce��o. As altera��es feitas antes de ocorrer o erro foram revertidas da melhor forma que foi poss�vel. No entanto, deve verificar se existem erros no F�rum.',
	'MIGRATION_NOT_FULFILLABLE'			=> 'A migra��o "%1$s" is not fulfillable, missing migration "%2$s".',
	'MIGRATION_SCHEMA_DONE'				=> 'Esquema instalado: %1$s; Dados: %2$.2f segundos',
	'MIGRATION_APPLY_DEPENDENCIES'      => 'Apply dependencies of %s.',
	'MIGRATION_DATA_RUNNING'         	=> 'Instalando dados: %s.',
	'MIGRATION_NOT_VALID'           	=> '%s n�o � uma migra��o v�lida.',
	'MIGRATION_SCHEMA_RUNNING'         	=> 'Instalando esquema: %s.',

	'MODULE_ERROR'						=> 'Ocorreu um erro durante a cria��o de um m�dulo: %s',
	'MODULE_INFO_FILE_NOT_EXIST'		=> 'Um ficheiro com informa��es do m�dulo necess�rio est� em falta: %2$s',
	'MODULE_NOT_EXIST'					=> 'Um m�dulo requerido n�o existe: %s',

	'PERMISSION_NOT_EXIST'				=> 'Inesperadamente a configura��o de permiss�o "%s" n�o existe.',

	'ROLE_NOT_EXIST'					=> 'Inesperadamente a Permiss�o "%s" n�o existe.',
));
