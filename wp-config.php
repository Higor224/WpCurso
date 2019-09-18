<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ' @f$@|A6X*gUO9y}@~IEE#?4FUv]d%, RG1xPTEb]lkm0Br_Yn:H$q#fEFpAMi|=' );
define( 'SECURE_AUTH_KEY',  ':]St:5#`N@3&JDh!E6QsPoP,]o(~-2!s-pmZ`|zl>(:u84oB}14)Wy5/1fbq)!:W' );
define( 'LOGGED_IN_KEY',    '7y1-YgQrHz~k`lY)IOT`E-)(LT.w);^SRU)6&2}nVa^qJ?o~rq#NPKyO8:~`XCX3' );
define( 'NONCE_KEY',        'Xt=e>0}.*W^j~_WN{hXC#H7qrCaOO9hJ_`#|V3gzpw8R+7(hL<?@m4c!;`1*R?3_' );
define( 'AUTH_SALT',        'MydU_]Dx~b.mwOgVUJ#TE`!x{2U+Q e_#f3m2 k^vMK=LZiCvn.KTh~+!74(?qaq' );
define( 'SECURE_AUTH_SALT', '0ZTDbjZ5<GmJBkZ{VcN= #Zj?D1|^$=B(Y*>7`KnBidW4hP20uaj3-YyQxa6x%S[' );
define( 'LOGGED_IN_SALT',   ',c>g3O7O>]=:P(OC9#PDKK_+7w`cUHZ+Zgl#CJ;ArYV5E,:ER`4Vx{-(?h~?hdms' );
define( 'NONCE_SALT',       'a2EB@DhY<#iO>&VCUes>FhL:`0!9|hnYv[/5UP`8U;=&qo%TFZ|K J3D?aVm<!~+' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'conteudo';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
