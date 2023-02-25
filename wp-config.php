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
define( 'DB_NAME', 'colegiosimetri' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'colegiosimetri' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '6SoqKEjPhAz7' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'mysql01-farm10.kinghost.net' );

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
define( 'AUTH_KEY',         '#~KEyap/WL6!amL9*c|9SRXr{Nzn2;l[|<g$y8Ec;n-> 2N8w*j#^plEO8oUAWFO' );
define( 'SECURE_AUTH_KEY',  'B[fEbLt;l[rmrb5>3h5-5W9-j4H7<1P8{{|J.6Ci}L46o%`K~LbDS9</jA4HsuUw' );
define( 'LOGGED_IN_KEY',    'hE>JMTO+M*i^qpLb0I6G`G.b2#.EVzf{=A]2J:1>LeEO*Q}=`*);{kZ[u.} Og P' );
define( 'NONCE_KEY',        '=Z[<+t*[]jl,HSx!ur18z}ru85XU2~5yXQrpHn#n-XSU&[m[lm6=<73h=Rt4=OO.' );
define( 'AUTH_SALT',        '|L2c]9:}(#?^fzR13irVzG27+3xL/0$NZ8F-5={*+hky,cCW.aqApO6kF`q9T.@L' );
define( 'SECURE_AUTH_SALT', 'cZQ`&/iFg$n<PD?eZh:Cy<VpYQ=1+`mwv6$+%)oJCJf $B_z]]-.>SLAv##cm2+4' );
define( 'LOGGED_IN_SALT',   '#8s}o;u~`+k]+wG(sj%-*Mo|{4.Qv7+nOgw*E{tsp1^eq@k2hd#C6)&(o]dg],M:' );
define( 'NONCE_SALT',       'X<c{jd94Ue%Y7#= d}H4c=L=nTHGv)ZBeuy%(d^wvdKU+W|e4-&<%1lSDr_MUa7+' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'med_';

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
