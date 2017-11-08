<?php
/**
*
* @package phpBB Extension - phpBB Countdown
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @Author Stoker - http://www.phpbb3bbcodes.com
* Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 1.0.3] (https://github.com/phpBBTraducoes)
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'COUNT_YEARS'				=> 'Anos',
	'COUNT_MONTHS'				=> 'Meses',
	'COUNT_DAYS'				=> 'Dias',
	'COUNT_HOURS'				=> 'Horas',
	'COUNT_MINUTES'				=> 'Minutos',
	'COUNT_SECONDS'				=> 'Segundos',
	'COUNT_DOWNCOUNT'			=> 'Baixo',
	'COUNT_UPCOUNT'				=> 'Cima',
	'INSTALL_COUNTDOWN'					=> 'Instalar o phpBB Countdown',
	'INSTALL_COUNTDOWN_CONFIRM'			=> 'Você está pronto para instalar o phpBB Countdown Ext.?',
	'COUNTDOWN'							=> 'phpBB Countdown',
	'COUNTDOWN_EXPLAIN'					=> 'Instalar o banco de dados do phpBB Countdown com o método automático UMIL..',
	'UNINSTALL_COUNTDOWN'				=> 'Desinstalar o phpBB Countdown',
	'UNINSTALL_COUNTDOWN_CONFIRM'		=> 'Você está pronto para desinstalar o phpBB Countdown? Todas as configurações e dados salvos por este ext. será removido!',
	'UPDATE_COUNTDOWN'					=> 'Atualizar phpBB Countdown',
	'UPDATE_COUNTDOWN_CONFIRM'			=> ' Você está pronto para atualizar o phpBB Countdown Ext.?',

	'ACP_COUNTDOWN_CONFIG'				=> 'phpBB Countdown',
	'ACP_COUNTDOWN_CONFIG_EXPLAIN'		=> 'Esta é a página de configuração para a extensão Countdown por <a href="http://www.dmzx-web.net"><strong>dmzx</strong></a>. Author Stoker.',
	'COUNTDOWN_VERSION'					=> 'Versão',
	'COUNTDOWN_DONATE'					=> 'Por favor considere uma <a href="http://www.phpbb3bbcodes.com/donate.php"><strong>doação</strong></a> se você gosta desta extensão',
	'ACP_COUNTDOWN_CONFIG_SET'			=> 'Configuração',
	'COUNTDOWN_CONFIG_SAVED'			=> 'Configurações do phpBB Countdown salvas',

	'COUNTDOWN_ENABLE'					=> 'Ativar o phpBB Countdown',
	'COUNTDOWN_ENABLE_EXPLAIN'			=> 'Ativar ou desativar o phpBB Countdown aqui',
	'COUNTDOWN_DIRECTION' 				=> 'Direção da contagem regressiva',
	'COUNTDOWN_DIRECTION_EXPLAIN'		=> 'A contagem regressiva ext. Pode contar tanto para cima como para baixo.',
	'COUNTDOWN_DATE' 					=> 'Data da contagem regressiva',
	'COUNTDOWN_DATE_EXPLAIN'			=> 'Exemplo: 2015/12/31 00:00:00',
	'COUNTDOWN_TEXT' 					=> 'Texto de contagem regressiva',
	'COUNTDOWN_TEXT_EXPLAIN'			=> 'O texto de contagem regressiva será exibido logo antes da contagem regressiva',
	'COUNTDOWN_COMPLETE'	 			=> 'Texto completo da contagem regressiva',
	'COUNTDOWN_COMPLETE_EXPLAIN' 		=> 'Este texto substituirá a contagem regressiva quando completo',
	'COUNTDOWN_TESTMODE' 				=> 'Ativar testmode',
	'COUNTDOWN_TESTMODE_EXPLAIN'		=> 'Se testmode for ativado, apenas os administradores podem ver a contagem regressiva',
	'COUNTDOWN_YEAR'	 				=> 'Ativar anos',
	'COUNTDOWN_YEAR_EXPLAIN' 			=> 'Ative esta função para ativar anos na contagem regressiva',
	'COUNTDOWN_MONTH'	 				=> 'Ativar meses',
	'COUNTDOWN_MONTH_EXPLAIN' 			=> 'Ative esta função para ativar meses na contagem regressiva',
	'COUNTDOWN_OFFSET_ENABLE' 			=> 'Ativar fuso horário',
	'COUNTDOWN_OFFSET_ENABLE_EXPLAIN' 	=> 'Ative ou desative o fuso horário aqui',
	'COUNTDOWN_OFFSET' 					=> 'Configurações do fuso horário',
	'COUNTDOWN_OFFSET_EXPLAIN'			=> 'Se você quiser usar um fuso horário específico para todos os usuários, pode digitá-lo aqui.<br />Como &quot;-6&quot; para o horário padrão central e &quot;4&quot; para o horário padrão do Golfo',
));
